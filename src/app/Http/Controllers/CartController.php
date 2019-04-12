<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\UserAddress;
use App\User;
use App\Product;

use Illuminate\Http\Request;
use Cart;
use Mail;
use Validator;
use DB;



use Illuminate\Support\Facades\Auth;

class CartController extends Controller{


    public function addcart(Request $request){
        if( $request->ajax() && $request->isMethod('post')
            && $request->has('product_id')
            && $request->has('qty') ){

            $qty = $request->input('qty') ? : 1 ;
            $product = Product::where( 'id', $request->input('product_id') )->first();

            if( !$product ){
                return response()->json([
                    'success' => false,
                    'msg' => trans('front.product_not_found') ]);
            }
            if( $product ){
                // check cart item is exitst
                $cartItem = Cart::get($product->id);
                if( $cartItem ){
                    Cart::update( $product->id , array(
                        'quantity' => array(
                            'relative' => true,
                            'value' => $qty
                        ),

                    ));
                }else{ // add new cart item
                    $price = ( $product->sale_price != 0 ) ? $product->sale_price :  $product->price;
                    $arr = array(
                        'id' => $product->id,
                        'name' => $product->title ,
                        'price' =>  $price,
                        'quantity' => (int)$qty,
                        'attributes' => array(
                            'product_id' => $product->id,
                            'slug' => $product->slug,
                            'image' => $product->thumbnail
                        )
                    );

                    Cart::add($arr);
                }

            }

            return response()->json([
                'success' => true,
                'cart_total' => number_format( Cart::getTotal() ).config('app.price_suffix'),
                'cart_count' =>  Cart::getTotalQuantity(),
                'msg' => trans( 'front.add_cart_success' )
            ]);

        }
        return response()->json([
            'success' => false,
            'msg' => trans( 'front.add_cart_fail' ) ]);

    }

    public function viewcart(){
        return view('theme.checkout.cart');
    }

    public function ajaxCart(){
        return view('theme.cart.mini-cart')->render();
    }

    public function updatecart( Request $request){
        //dd($request->all());
        if( $request->isMethod('post') ){

            if( $request->has('action') && $request->input('action') == 'update_cart'  ){
                foreach ( $request->input('quantity') as $key => $qty ){
                    $msg = [];

                    Cart::update( $key , array(
                        'quantity' => array(
                            'relative' => false,
                            'value' => $qty
                        ),
                    ));

                }
                return back()->with('status', trans('order.update_success'))->with('warning', $msg );
            }

            if( $request->has('action') && $request->input('action') == 'clean_cart'  ){
                Cart::clear();
                return back()->with('status', trans('order.clean_cart_success'));
            }

            if( $request->has('remove') ){
                Cart::remove( $request->input('remove') );
                return back()->with('status', trans('order.remove_item_success') );
            }
        }


    }

    public function checkout( Request $request ){
        return view('theme.checkout.checkout');
    }

    public function purchaseNow(Request $request){
        $product = Product::findOrFail($request->input('pid'));
        if( !$product ){
            return back()->withErrors('Product not found!');
        }

        $cartItem = Cart::get($product->id);
        if( $cartItem ){
            $cartItem = $cartItem->toArray();
            if( $product->quantity < ( $cartItem['quantity'] ) ){
                return back()->withErrors('Product is out of stock!');
            }
        }else{


            if( $product->quantity < 1 ){
                return back()->withErrors('Product is out of stock!');
            }


            $price = ( $product->sale_price != 0 ) ? $product->sale_price :  $product->base_price;

            $arr = array(
                'id' => $product->id,
                'name' => $product->title ,
                'price' =>  $price,
                'quantity' => 1,
                'attributes' => array(
                    'slug' => $product->slug,
                    'image' => $product->getThumbnail()
                )
            );


            Cart::add($arr);
        }


        return redirect()->route('checkout');
    }

    public function checkoutSave( Request $request ){


        if( !Auth::check() || ($request->has('address_id') && $request->input('address_id') == -1) ){


            $validator = Validator::make($request->all(), [
                'email' => 'required|max:150',
                'phone' => 'required|min:10|max:20',
                'address' => 'required|max:200',
                'full_name' => 'required|max:200',
                'matp' => 'required',
                'maqh' => 'required'
            ],[
                'email.required' => 'Vui lòng nhập email',
                'email.max' => 'Vui lòng nhập email tối đa 200 kí tự',
                'phone.required' => 'Vui lòng nhập số điện thoại',
                'phone.min' => 'Vui lòng nhập số điện thoại ít nhất 10 số',
                'phone.max' => 'Vui lòng nhập số điện thoại tối đa 12 số',
                'address.required' => 'Vui lòng nhập địa chỉ',
                'address.max' => 'Vui lòng nhập địa chỉ tối đa 200 kí tự',
                'full_name.required' => 'Vui lòng nhập họ tên',
                'full_name.max' => 'Vui lòng nhập họ tên không quá 200 kí tự',
            ]);

            if ($validator->fails()) {
                return back()->withErrors( $validator )->withInput();
            }

        }

        try{
            DB::beginTransaction();
            $order = new Order();
            $order->status = 'waiting';
            $order->is_guest = Auth::check() ? 0 : 1;


            if( Auth::check() ){
                if( $request->has('address_id') && $request->input('address_id') == -1 ){
                    $address = new UserAddress();
                    $address->user_id = Auth::user()->id;
                    $address->full_name = $request->input('full_name');
                    $address->phone = $request->input('phone');
                    $address->email = $request->input('email');
                    $address->address = $request->input('address');
                    $address->matp = $request->input('matp');
                    $address->maqh = $request->input('maqh');

                    // Save address
                    if( $request->has('is_save_address') ){
                        $address->save();
                    }

                }else{
                    $address = UserAddress::findOrFail( $request->input('address_id') );
                }

                $order->shipping_full_name = $address->full_name;
                $order->shipping_email = $address->email;
                $order->shipping_phone = $address->phone;
                $order->shipping_address = $address->address;
                $order->matp = $address->matp;
                $order->maqh = $address->maqh;

            }else{
                $order->shipping_full_name = $request->input('full_name');
                $order->shipping_email = $request->input('email');
                $order->shipping_phone = $request->input('phone');
                $order->shipping_address = $request->input('address');
                $order->matp = $request->input('matp');
                $order->maqh = $request->input('maqh');

            }


            $shipping_code = $request->input('shipping_method');
            $order->shipping_method = $shipping_code;
            $order->shipping_title = config('shipping')[$shipping_code]['title'];
            $order->shipping_description = config('shipping')[$shipping_code]['description'];

            $payment_code = $request->input('payment_method');
            $order->payment_method = $payment_code;
            $order->payment_title = config('payment')[$payment_code]['title'];

            if( !Cart::isEmpty() ){
                $order->total_item_count = Cart::getTotalQuantity();
                $order->sub_total = Cart::getSubTotal();
                $order->total = Cart::getTotal();
            }

            $order->note = $request->input('note');
            $order->user_id = Auth::id();
            $order->save();

            // Save order items
            $cart = Cart::getContent();
            $arrItems = array();

            foreach ($cart as $item) {
                $product = Product::where('id', $item->id)->first();

                array_push($arrItems, array(
                    'order_id' => $order->id,
                    'product_sku' => $product->sku,
                    'product_type' => $product->product_type,
                    'product_title' => $product->title,
                    'qty_ordered' => $item->quantity ,
                    'price' => $item->price ,
                    'base_price' => $product->price,
                    'total' => $item->price*$item->quantity ,
                    'product_id' => $item->id
                ));
            }

            $order->items()->createMany( $arrItems );

//                $to = Auth::user()->email ;
//                Mail::send('emails.order',
//                    array('order' => $order , 'cart' => $cart )
//                    ,function($message) use ( $order , $to ) {
//                        $message->from( config( 'admin_email' ) );
//                        $message->to( $to )
//                            ->cc( config('admin_email') )
//                            ->subject( config('app_name').' - Comfirm your order:#'.$order->id );
//                    });


            DB::commit();
            Cart::clear();
            return redirect()->route( 'cart.checkout.success', $order->id );
        }catch (Exception $e ){
            DB::rollBack();
        }

        return back()->with('status', trans('app.fail') );

    }

    public function checkoutSuccess(Request $request, $order_id){
        $order = Order::where('id',$order_id )->first();
        return view('theme.checkout.success',array('order' => $order ) );
    }

    public function removeItemCart( Request $request ){
        if( $request->ajax() && $request->has('pid') ){
            Cart::remove($request->input('pid') );
            return response()->json([
                'success' => true,
                'cart_count' =>  Cart::getTotalQuantity(),
                'msg' => trans('app.success')
            ]);
        }
        return false;
    }
}
