<?php

namespace App\Http\Controllers;


use App\Models\Order;
use App\Models\UserAddress;
use App\Models\UserReview;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\SocialAccount;
use App\Models\ProductType;
use App\Product;
use App\User;

use Auth;
use Validator;
use DB;


class CustomerController extends Controller
{

    public function dashboard(){
        $user = Auth::user();
        return view('theme.customers.dashboard', compact('user'));
    }

    public function profile(){
        $user = Auth::user();
        return view('theme.customers.profile', compact('user'));
    }

    public function profileSave(Request $request){
        $user = Auth::user();

        if($user->locked){
            return back()->with('warning',  trans('user.account_locked') );
        }

        $arrRules = [
            'full_name' => 'required|max:254',
            'phone' => 'required|max:12',
            'email' => 'required|email|max:254',
            'address' => 'required',
            'country' => 'required'
        ];

        if( $request->input('phone') !== $user->phone ){
            $arrRules = [
                'phone' => 'unique:users',
            ];
        }

        if( $request->input('email') !== $user->email ){
            $arrRules = [
                'email' => 'unique:users',
            ];
        }

        $validator = Validator::make($request->all(),$arrRules);


        if ($validator->fails()) {
            return back()->withErrors ( $validator )->withInput();
        }

        $arrUpdate = [
            'full_name' => $request->input('full_name'),
            'phone' => $request->input('phone'),
            'gender' => $request->input('gender'),
            'email' => $request->input('email'),
            'address' => $request->input('address'),
            'country_code' => $request->input('country')
        ];

        $user->update($arrUpdate);

        if ($user)
            return back()->with('status', trans('app.success') );
        return back()->with('status', trans('app.fail') );
    }

    public function password(){
        $user = Auth::user();
        return view('theme.customers.password', compact('user'));
    }

    public function passwordSave( Request $request ){

        $user = Auth::user();
        $old_password = $request->input('old_pass');
        $rules['old_pass'] = 'required';

        if( !empty($old_password) ){
            $rules['password'] = 'required|min:6|max:100|confirmed';
        }
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return back()->withErrors ( $validator )->withInput();
        }

        if( !empty($old_password) ) {
            $new_password = $request->input('password');
            if (Hash::check($old_password, $user->getAuthPassword())) {
                $user->password = Hash::make($new_password);
            } else {
                return back()->with(['warning' => 'Current password wrong']);
            }
        }

        if($user->save()) {
            return back()->with(['status' => trans('app.success') ]);
        }

        return back()->with(['status' =>  trans('app.fail') ]);

    }

    public function social_login(Request $request){
        if( $request->ajax() ){

            $social_data = $request->input('social_data');

            $account = SocialAccount::whereProvider( $social_data['provider'] )
                ->whereProviderUserId( $social_data['id'] )
                ->first();

            if ($account) {

                auth()->login($account->user);
                return response()->json(array(
                    'success' => true
                ));

            } else {


                $email = $social_data['email'];
                $account = new SocialAccount([
                    'provider_user_id' => $social_data['id'],
                    'provider' => $social_data['provider']
                ]);
                $user = User::whereEmail( $social_data['email'] )->first();
                if (!$user) {

                    $user = User::create([
                        'email' => $email,
                        'user_name' => str_slug($social_data['name'],'_'),
                        'password' => bcrypt($social_data['name']),
                    ]);
                }

                $account->user()->associate($user);
                $account->save();
                auth()->login($user);
                return response()->json(array(
                    'success' => true
                ));
            }
        }
    }

    public function address(){
        $user = Auth::user();
        return view('theme.customers.address', compact('user'));
    }

    public function editAddress($id){

        if( Auth::user()->id != $id ){
            return back();
        }
        $address = UserAddress::findOrFail( $id );
        return view('theme.customers.edit_address', compact('address'));
    }

    public function updateAddress(Request $request, $id){

        $address = UserAddress::findOrFail( $id );
        if( Auth::user()->id != $address->user_id ){
            return back();
        }

        $validator = Validator::make($request->all(), [
            'email' => 'required|max:150',
            'phone' => 'required|min:10|max:20',
            'address' => 'required|max:200',
            'full_name' => 'required|max:200',
            'matp' => 'required',
            'maqh' => 'required'
        ]);

        if ($validator->fails()) {
            return back()->withErrors( $validator )->withInput();
        }



        $address->full_name = $request->input('full_name');
        $address->phone = $request->input('phone');
        $address->email = $request->input('email');
        $address->address = $request->input('address');
        $address->matp = $request->input('matp');
        $address->maqh = $request->input('maqh');

        if( $address->save() ){
            return back()->with('status', trans('app.success') );
        }
        return back()->with('status', trans('app.fail') )->withInput();
    }

    public function deleteAddress(Request $request, $id){
        $address = UserAddress::findOrFail( $id );
        if( Auth::user()->id != $address->user_id ){
            return back();
        }

        if( $address->delete() ){
            return back()->with('status', trans('app.success') );
        }
        return back()->with('status', trans('app.fail') );


    }

    public function favorite(Request $request){
        $user = Auth::user();
        $posts = $user->loves()->paginate();
        return view('members.favorites', compact('posts','user'));
    }

    public function addFavorite(Request $request){
        if( $request->ajax() ){
            $user = Auth::user();
            $pid = $request->input('id');
            if( $user->loved( $pid ) ){
                $user->loves()->detach( ['product_id' => $pid] );
                return response()->json(['success' => true, 'type' => 'remove', 'msg' => trans('app.success') ]);
            }else{
                $user->loves()->attach( ['product_id' => $pid] );
                return response()->json(['success' => true, 'type' => 'add', 'msg' => trans('app.success') ]);
            }
            return response()->json(['success' => false, 'msg' =>  trans('app.fail') ]);

        }
    }


    public function removeFavorite(Request $request){
        if( $request->has('product_id') ){
            $remove = Auth::user()->loves()->detach( ['product_id' => $request->input('product_id')] );
            if( $remove ){
                return back()->with('status','Đã xoá khỏi danh sách yêu thích' );
            }
        }
        return back()->with('warning','Có lỗi xảy ra');
    }

    public function orders(){
        $user = Auth::user();
        $orders = Order::where('user_id', $user->id )->orderBy('created_at','DESC')->paginate();
        return view('theme.customers.orders', compact('user', 'orders') );
    }

    public function orderDetail($id){
        $order = Order::findOrFail($id);
        if( Auth::user()->id != $order->user_id ){
            return back();
        }
        return view('theme.customers.order_detail', compact('user', 'order') );

    }


}
