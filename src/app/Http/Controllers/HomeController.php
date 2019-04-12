<?php

namespace App\Http\Controllers;

use App\BlogCategory;
use App\Category;
use App\Http\Filters\ProductFilter;
use App\Models\Blog;
use App\Models\Cities;
use App\Models\Client;
use App\Models\Contact;
use App\Models\District;
use App\Models\Page;
use App\Models\Slider;
use App\Models\Store;
use App\Product;
use Illuminate\Http\Request;


use Auth;
use DB;
use Illuminate\Support\Facades\Cache;

use App\User;
use Jenssegers\Agent\Agent;


use Spatie\SchemaOrg\Schema;
use SEOMeta;
use OpenGraph;
use Twitter;
use Validator;
use Cart;
use Session;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    protected $agent;

    public function __construct()
    {
       $this->agent = new Agent();
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, Agent $agent)
    {
        $expiresAt = now()->addMinutes(10);


        $blogcat = BlogCategory::findOrFail(1);

        $posts = Blog::whereHas('categories',function ($query) use ($blogcat){
            $query->where('blogcategory_id',  $blogcat->id );
        })->orderBy( 'created_at','DESC')->paginate();


        $configuration = app('Configuration');

        SEOMeta::setTitle( $configuration->get('site_title') );
        SEOMeta::setDescription( $configuration->get('site_description') );
        SEOMeta::addKeyword( $configuration->get('site_keywords') );
        SEOMeta::setCanonical( $request->getUri() );

        OpenGraph::setTitle( $configuration->get('site_title') );
        OpenGraph::setDescription( $configuration->get('site_description') );
        OpenGraph::setUrl( $request->getUri());
        OpenGraph::addProperty('image:url', url('img/thiet-ke-website-nen-chon.jpg') );
        OpenGraph::addProperty('image:alt', $configuration->get('site_title') );

        OpenGraph::addProperty('type', 'website');
        OpenGraph::addProperty('url', $request->getUri() );
        OpenGraph::addProperty('locale', app()->getLocale() );
        OpenGraph::addProperty('site_name', app('Configuration')->get('company_name') );

        Twitter::setTitle( $configuration->get('site_title') );
        Twitter::setImage( url('img/thiet-ke-website-nen-chon.jpg')  );

        return view('theme.home', compact('posts','blogcat'));
    }

    public function category( Request $request, $slug, $id ){
        $expiresAt = now()->addMinutes(10);


        if( Cache::has('category_'. $id ) ){
            $category = Cache::get('category_'. $id);
        }else{
            $category = Category::findOrFail( $id );
            Cache::put('category_'. $id, $category, $expiresAt);
        }


        if( Cache::has('categories') ){
            $categories = Cache::get('categories');
        }else{
            $categories = Category::whereNull('parent_id')->where('status',1)->get();
            Cache::put('categories', $categories, $expiresAt);
        }


        if( $request->has('orderby') ){
            $products = Product::whereHas('categories',function ($query) use ($category){
                $query->where('category_id',  $category->id );
            })->orderBy( $request->input('orderby') , $request->input('dir') )
                ->paginate();
        }else{
            $products = Product::whereHas('categories',function ($query) use ($category){
                $query->where('category_id',  $category->id );
            })->orderBy('title','ASC')
                ->paginate();
        }

        // SEO

        SEOMeta::setTitle($category->category_name);
        SEOMeta::setDescription( $category->meta_description );
        SEOMeta::addKeyword( $category->meta_keyword );
        SEOMeta::setCanonical( $request->getUri() );

        OpenGraph::setDescription( $category->meta_description );
        OpenGraph::setTitle( 'Website '.$category->category_name );
        OpenGraph::setUrl( $request->getUri());
        OpenGraph::addProperty('type', 'website');
        OpenGraph::addProperty('image:url', $category->image );
        OpenGraph::addProperty('image:alt', $category->category_name );
        OpenGraph::addProperty('url', $request->getUri() );
        OpenGraph::addProperty('description', $category->meta_description );
        OpenGraph::addProperty('locale', app()->getLocale() );
        OpenGraph::addProperty('site_name', app('Configuration')->get('company_name') );

        Twitter::setTitle('Website '.$category->category_name);
        Twitter::setImage( $category->image  );

        return view('theme.products.category', compact('categories','category', 'products'));

    }

    public function detail(Request $request, $slug, $id){


        $expiresAt = now()->addMinutes(10);

        if( Cache::has('product_detail_'.$id ) ){
            $product = Cache::get('product_detail_'.$id );
        }else{
            $product = Product::findOrFail($id);
            Cache::put('product_detail_'. $id, $product, $expiresAt);
        }
        $product->increment('viewed');


        if( Cache::has('product_detail_'.$id.'_related' ) ){
            $related = Cache::get('product_detail_'.$id.'_related' );
        }else{

            $related = Product::whereHas('categories',function ($query) use ($product){
                $query->where('category_id', $product->categories()->pluck('category_id')->toArray() );
            })->where('id', '!=', $product->id  )
                ->orderBy('title','ASC')->paginate();

            Cache::put('product_detail_'.$id.'_related' , $related, $expiresAt);
        }


        SEOMeta::setTitle($product->title);
        SEOMeta::setDescription($product->meta_description);
        SEOMeta::addKeyword( $product->meta_keyword );
        SEOMeta::setCanonical( $request->getUri() );

        OpenGraph::setDescription($product->meta_description);
        OpenGraph::setTitle($product->meta_title );
        OpenGraph::setUrl( $request->getUri());
        OpenGraph::addProperty('image:url', $product->thumbnail );
        OpenGraph::addProperty('image:alt', $product->meta_description );
        OpenGraph::addProperty('url', $request->getUri() );
        OpenGraph::addProperty('description', $product->meta_description );
        OpenGraph::addProperty('locale', app()->getLocale() );
        OpenGraph::addProperty('site_name', app('Configuration')->get('company_name') );

        // article
        OpenGraph::setTitle($product->meta_title)
            ->setDescription($product->meta_description  )
            ->setType('article')
            ->setArticle([
                'published_time' => $product->created_at,
                'modified_time' => $product->updated_at,
                'author' => [
                    'first_name' => 'Nhien',
                    'last_name' => 'Nhien',
                    'username' => 'jusephan',
                    'gender' => 'male',
                ],
                'section' => 'Website',
                'tag' => $product->meta_title
            ]);

        Twitter::setTitle($product->meta_title);
        Twitter::setImage(  $product->thumbnail  );

        return view('theme.products.detail', compact('product','related'));
    }

    public function pageDetail(Request $request, $slug, $id){
        $expiresAt = now()->addMinutes(10);

        if( Cache::has('page_'.$id ) ){
            $page = Cache::get('page_'.$id );
        }else{
            $page = Page::findOrFail($id);
            Cache::put('page_'. $id, $page, $expiresAt);
        }


        SEOMeta::setTitle( $page->meta_title );
        SEOMeta::setDescription($page->meta_description);
        SEOMeta::addKeyword( $page->meta_keword );
        SEOMeta::setCanonical( $request->getUri() );

        OpenGraph::setTitle($page->meta_title );
        OpenGraph::setDescription($page->meta_description);
        
        OpenGraph::setUrl( $request->getUri());
        OpenGraph::addProperty('image:url', $page->thumbnail );
        OpenGraph::addProperty('image:alt', $page->meta_description );
        OpenGraph::addProperty('url', $request->getUri() );
        OpenGraph::addProperty('description', $page->meta_description );
        OpenGraph::addProperty('locale', app()->getLocale() );
        OpenGraph::addProperty('site_name', app('Configuration')->get('site_title') );

        // article
        OpenGraph::setTitle($page->meta_title)
            ->setDescription($page->meta_description  )
            ->setType('article')
            ->setArticle([
                'published_time' => $page->created_at,
                'modified_time' => $page->updated_at,
                'author' => [
                    'first_name' => 'Nhien',
                    'last_name' => 'Nhien',
                    'username' => 'jusephan',
                    'gender' => 'male',
                ],
                'section' => 'Website',
                'tag' => $page->meta_title
            ]);

        Twitter::setTitle($page->meta_title);
        Twitter::setImage(  $page->thumbnail  );

        return view('theme.pages.page', compact('page'));

    }

    public function blogCategory( Request $request, $slug, $id ){
        $expiresAt = now()->addMinutes(10);


        if( Cache::has('blog_categories') ){
            $categories = Cache::get('blog_categories');
        }else{
            $categories = BlogCategory::whereNull('parent_id')->where('status',1)->get();
            Cache::put('blog_categories', $categories, $expiresAt);
        }

        if( Cache::has('blog_category_'. $id ) ){
            $category = Cache::get('blog_category_'. $id);
        }else{
            $category = BlogCategory::findOrFail( $id );
            Cache::put('blog_category_'. $id, $category, $expiresAt);
        }

        if( $request->has('orderby') ){
            $posts = Blog::whereHas('categories',function ($query) use ($category){
                $query->where('blogcategory_id',  $category->id );
            })->orderBy( $request->input('orderby') , $request->input('dir') )->paginate();
        }else{
            $posts = Blog::whereHas('categories',function ($query) use ($category){
                $query->where('blogcategory_id',  $category->id );
            })->orderBy('created_at','DESC')->paginate();
        }

        // SEO

        SEOMeta::setTitle($category->meta_title);
        SEOMeta::setDescription($category->meta_description);
        SEOMeta::addKeyword( $category->meta_keyword );
        SEOMeta::setCanonical( $request->getUri() );

        OpenGraph::setDescription($category->meta_description);
        OpenGraph::setTitle( 'Website '.$category->meta_title );
        OpenGraph::setUrl( $request->getUri());
        OpenGraph::addProperty('type', 'website');
        OpenGraph::addProperty('image:url', $category->image );
        OpenGraph::addProperty('image:alt', $category->meta_title );
        OpenGraph::addProperty('url', $request->getUri() );
        OpenGraph::addProperty('description', $category->meta_description );
        OpenGraph::addProperty('locale', app()->getLocale() );
        OpenGraph::addProperty('site_name', app('Configuration')->get('company_name') );

        Twitter::setTitle('Website '.$category->meta_title);
        Twitter::setImage(  $category->image  );
        return view('theme.blogs.category', compact('categories', 'category', 'posts'));
    }

    public function blogDetail(Request $request, $slug, $id){
        $expiresAt = now()->addMinutes(10);

        if( Cache::has('blog_categories') ){
            $categories = Cache::get('blog_categories');
        }else{
            $categories = BlogCategory::whereNull('parent_id')->where('status',1)->get();
            Cache::put('blog_categories', $categories, $expiresAt);
        }

        if( Cache::has('blog_detail_'.$id ) ){
            $blog = Cache::get( 'blog_detail_'.$id  );
        }else{
            $blog = Blog::findOrFail( $id );
            Cache::put('blog_detail_'.$id , $blog, $expiresAt );
        }

        if( Cache::has('blog_detail_'.$id.'_related' ) ){
            $related = Cache::get('blog_detail_'.$id.'_related' );
        }else{

            $related = Blog::whereHas('categories',function ($query) use ($blog){
                $query->where('blogcategory_id', $blog->categories()->pluck('blogcategory_id')->toArray() );
            })->where('id', '!=', $blog->id  )
                ->orderBy('created_at','DESC')->paginate();

            Cache::put('blog_detail_'.$id.'_related' , $related, $expiresAt);
        }


        SEOMeta::setTitle($blog->meta_title ?: $blog->blog_title  );
        SEOMeta::setDescription( $blog->meta_description ?: strip_tags( $blog->blog_excerpt ) );
        SEOMeta::addKeyword( $blog->meta_keyword ?: $blog->blog_title );
        SEOMeta::setCanonical( $request->getUri() );

        OpenGraph::setDescription($blog->meta_description ?: strip_tags( $blog->blog_excerpt ));
        OpenGraph::setTitle($blog->meta_title ?: $blog->blog_title  );
        OpenGraph::setUrl( $request->getUri());
        OpenGraph::addProperty('image:url', $blog->blog_thumbnail );
        OpenGraph::addProperty('image:alt', $blog->meta_description ?: strip_tags( $blog->blog_excerpt ) );
        OpenGraph::addProperty('url', $request->getUri() );
        OpenGraph::addProperty('description', $blog->meta_description ?: strip_tags( $blog->blog_excerpt ) );
        OpenGraph::addProperty('locale', app()->getLocale() );
        OpenGraph::addProperty('site_name', app('Configuration')->get('company_name') );

        // article
        OpenGraph::setTitle($blog->meta_title ?: $blog->blog_title )
            ->setDescription( $blog->meta_description ?: strip_tags( $blog->blog_excerpt )  )
            ->setType('article')
            ->setArticle([
                'published_time' => $blog->created_at,
                'modified_time' => $blog->updated_at,
                'author' => [
                    'first_name' => 'Nhien',
                    'last_name' => 'Nhien',
                    'username' => 'jusephan',
                    'gender' => 'male',
                ],
                'section' => 'Website',
                'tag' => $blog->meta_title ?: $blog->blog_title
            ]);

        Twitter::setTitle($blog->meta_title ?: $blog->blog_title );
        Twitter::setImage(  $blog->blog_thumbnail  );

        return view('theme.blogs.detail', compact('blog','categories','related'));
    }

    public function template(Request $request){
        $expiresAt = now()->addMinutes(10);

        $paged = $request->has('page') ? $request->get('page') : 1;

        if( Cache::has('templates') ){
            $templates = Cache::get('templates'.$paged );
        }else{
            $templates = Product::paginate();
            Cache::put('templates'. $paged, $templates, $expiresAt);
        }

        if( Cache::has('categories') ){
            $categories = Cache::get('categories');
        }else{
            $categories = Category::whereNull('parent_id')->where('status',1)->get();
            Cache::put('categories', $categories, $expiresAt);
        }

        OpenGraph::setUrl( $request->getUri());
        OpenGraph::addProperty('image:url', url('img/thiet-ke-website-nen-chon.jpg') );
        OpenGraph::addProperty('image:alt', app('Configuration')->get('site_title') );

        OpenGraph::addProperty('type', 'website');
        OpenGraph::addProperty('url', $request->getUri() );
        OpenGraph::addProperty('locale', app()->getLocale() );
        OpenGraph::addProperty('site_name', app('Configuration')->get('company_name') );

        Twitter::setTitle( app('Configuration')->get('site_title') );
        Twitter::setImage( url('img/thiet-ke-website-nen-chon.jpg')  );


        return view('theme.pages.templates', compact('templates', 'categories'));
    }

    public function client( Request $request ){
        if( Cache::has('clients') ){
            $clients = Cache::get('clients');
        }else{
            $expiresAt = now()->addMinutes(10);
            $clients = Client::all();
            Cache::put('clients', $clients, $expiresAt);
        }

        OpenGraph::setUrl( $request->getUri());
        OpenGraph::addProperty('image:url', url('img/thiet-ke-website-nen-chon.jpg') );
        OpenGraph::addProperty('image:alt', app('Configuration')->get('site_title') );

        OpenGraph::addProperty('type', 'website');
        OpenGraph::addProperty('url', $request->getUri() );
        OpenGraph::addProperty('locale', app()->getLocale() );
        OpenGraph::addProperty('site_name', app('Configuration')->get('company_name') );

        Twitter::setTitle( app('Configuration')->get('site_title') );
        Twitter::setImage( url('img/thiet-ke-website-nen-chon.jpg')  );


        return view('theme.pages.clients', compact('clients'));
    }

    public function contact(  Request $request ){
        if( Cache::has('stores') ){
            $stores = Cache::get('stores');
        }else{
            $stores = Store::all();
            Cache::forever('stores', $stores);
        }

        OpenGraph::setUrl( $request->getUri());
        OpenGraph::addProperty('image:url', url('img/thiet-ke-website-nen-chon.jpg') );
        OpenGraph::addProperty('image:alt', app('Configuration')->get('site_title') );

        OpenGraph::addProperty('type', 'website');
        OpenGraph::addProperty('url', $request->getUri() );
        OpenGraph::addProperty('locale', app()->getLocale() );
        OpenGraph::addProperty('site_name', app('Configuration')->get('company_name') );

        Twitter::setTitle( app('Configuration')->get('site_title') );
        Twitter::setImage( url('img/thiet-ke-website-nen-chon.jpg')  );


        return view('theme.pages.contact', compact('stores'));
    }

    public function contactSave(Request $request){
        $rules = [
            'full_name' => 'required|string',
            'email' => 'required|string|email',
            'phone' => 'required|string',
            'subject' => 'required|string',
            'message' => 'required|string',
            'topic' => 'required|string',
        ];


        $validator = Validator::make($request->all(), $rules );
        if ($validator->fails()) {
            return back()->withErrors ( $validator )->withInput();
        }

        $contact = new Contact();
        $contact->full_name = $request->input('full_name');
        $contact->email = $request->input('email');
        $contact->phone = $request->input('phone');
        $contact->subject = $request->input('subject');
        $contact->message = $request->input('message');
        $contact->topic = $request->input('topic');

        $contact->save();

        return back()->with('status','Thanks for your contact');



    }



}
