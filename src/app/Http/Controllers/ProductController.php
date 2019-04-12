<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Filters\ProductFilter;
use App\Models\Attribute;
use App\Models\Type;
use App\Product;
use App\ProductGallery;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Validator;
use Cache;
use DB;

class ProductController extends Controller
{

    public function index( Request $request, ProductFilter $filter ){
        $categories = Category::withDepth()->get()->toTree();
        $data = Product::filter($filter)->orderBy('created_at','DESC')->paginate();
        return view('admin.product.index', compact('data','categories'));
    }

    public function create(Request $request){
        $categories = Category::withDepth()->get()->toTree();
        $types = Type::all();
        $product_type = null;
        $attributes = null;

        if( $request->has('product_type')  && $request->has('type_id') ){

            $product_type = Type::findOrFail($request->input('type_id'));

            if( $request->input('product_type') == 'configurable' )
                $attributes = $product_type->attributes()
                    ->where('type', 'select')
                    ->where('is_configurable',1)
                    ->get();
            else
                $attributes = $product_type->attributes()->get();

            return view('admin.product.create', compact('types','product_type','attributes','categories'));

        }

        return view('admin.product.create_new', compact('types'));
    }

    public function store(Request $request){


        $rules = [
            'title' => 'required|string',
        ];

        $validator = Validator::make($request->all(), $rules );
        if ($validator->fails()) {
            return back()->withErrors ( $validator )->withInput();
        }

        $product  = new Product();
        $product->title = $request->input('title');
        $product->slug = Str::slug($request->input('title'));
        $product->url = $request->input('url');
        $product->thumbnail = $request->input('thumbnail');
        $product->brand_id = $request->input('brand_id');
        $product->sku = $request->input('sku');
        $product->price = $request->input('price');
        $product->sale_price = $request->input('sale_price');

        $product->product_type = $request->input('product_type');


        if( $request->has('is_new') ){
            $product->is_new = 1;
        }

        if( $request->has('is_featured') ){
            $product->is_featured = 1;
        }

        // content
        $product->sort_description = $request->input('sort_description');
        $product->description = $request->input('description');

        // seo
        $product->meta_title = $request->input('meta_title');
        $product->meta_keyword = $request->input('meta_keyword');
        $product->meta_description = $request->input('meta_description');

        //shipping
        $product->width = $request->input('width');
        $product->height = $request->input('height');
        $product->weight = $request->input('weight');
        $product->depth = $request->input('depth');

        $product->status = $request->input('status');

        try{
            DB::beginTransaction();
            if( $product->save() ){
                // Save categories
                $product->categories()->attach( $request->input('cat_id') );

                // save galleries
                $arrGalleries = [];
                if( $request->has('galleries') ){
                    foreach ( $request->get('galleries') as $img){
                        array_push($arrGalleries, ['image_url' => $img] );
                    }
                }

                if( count( $arrGalleries ) ){
                    $product->galleries()->createMany($arrGalleries);
                }
                // end save galleries

                DB::commit();

                return redirect()
                    ->route( 'product.edit', $product->id )
                    ->with('status',  trans('app.success') );
            }
        }catch (\Exception $e){
            DB::rollback();
        }

        return back()->with('status',  trans('app.fail') );

    }

    public function edit( Request $request, $id ){
        $product = Product::findOrFail( $id );
        $categories =  Category::withDepth()->get()->toTree();
        return view('admin.product.edit', compact('product','categories'));

    }

    public function update(Request $request, $id){

        $rules = [
            'title' => 'required|string',
        ];


        $validator = Validator::make($request->all(), $rules );
        if ($validator->fails()) {
            return back()->withErrors ( $validator )->withInput();
        }

        $product  = Product::findOrFail($id);
        $product->title = $request->input('title');

        $product->url = $request->input('url');
        $product->thumbnail = $request->input('thumbnail');
        $product->brand_id = $request->input('brand_id');
        $product->sku = $request->input('sku');

        $product->price = $request->input('price');
        $product->sale_price = $request->input('sale_price');
        $product->product_type = $request->input('product_type');

        $product->slug = Str::slug($request->input('slug'));
     
        if( $request->has('is_new') ){
            $product->is_new = 1;
        }

        if( $request->has('is_featured') ){
            $product->is_featured = 1;
        }

        // content
        $product->sort_description = $request->input('sort_description');
        $product->description = $request->input('description');

        // seo
        $product->meta_title = $request->input('meta_title');
        $product->meta_keyword = $request->input('meta_keyword');
        $product->meta_description = $request->input('meta_description');

        //shipping
        $product->width = $request->input('width');
        $product->height = $request->input('height');
        $product->weight = $request->input('weight');
        $product->depth = $request->input('depth');

        $product->status = $request->input('status');

        try{
            DB::beginTransaction();
            if( $product->save() ){
                $product->categories()->detach();
                $product->categories()->attach( $request->input('cat_id') );

                // save galleries
                $arrGalleries = [];
                if( $request->has('galleries') ){
                    foreach ( $request->get('galleries') as $img){
                        array_push($arrGalleries, ['image_url' => $img] );
                    }
                }

                if( count( $arrGalleries ) ){
                    $product->galleries()->delete();
                    $product->galleries()->createMany($arrGalleries);
                }

                DB::commit();
                return redirect()->route( 'product.edit', $product->id )
                    ->with('status', trans('app.success') );
            }
        }catch ( \Exception $e ){
            dd($e);
            DB::rollback();
        }

        return back()->with('warning',trans('app.fail'));
    }

    public function remove(Request $request){
        if( $request->ajax() && $request->isMethod('post')){
            $id = $request->input('id');
            if( is_array( $id ) ){
                Product::destroy($id);
            }else{
                Product::destroy($id);
            }

            Cache::flush();

            return response()->json(['success' => true , 'msg' => trans('app.success') ]);
        }
        return response()->json(['success' => false, 'msg' => trans('app.fail') ]);
    }
}
