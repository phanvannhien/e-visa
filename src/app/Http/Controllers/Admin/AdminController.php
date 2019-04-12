<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use Illuminate\Support\Facades\Cache;
use Validator;
use Hash;
use App;
use DB;
use URL;

use Spatie\Sitemap\SitemapGenerator;

class AdminController extends Controller
{
    public function index(){
        return view('admin.dashboard');
    }


    public function flushCache(){
        Cache::flush();
        return back()->with('status', trans('app.success'));
    }

    public function generateSitemap(){


        // create sitemap categories
        $sitemap_cats = App::make("sitemap");
        $cats = DB::table('categories')->get();
        foreach ($cats as $cat)
        {
            $link = route('category.product',[
                'slug' => $cat->slug,
                'id' => $cat->id,
            ]);
            $sitemap_cats->add( $link , null, '0.5', 'weekly');
        }
        $sitemap_cats->store('xml','sitemap-categories');


        // create blogs categories
        $sitemap_blogcats = App::make("sitemap");
        $blogcats = DB::table('blog_categories')->get();
        foreach ($blogcats as $cat)
        {
            $link = route('blog.category',[
                'slug' => $cat->slug,
                'id' => $cat->id,
            ]);
            $sitemap_blogcats->add( $link , null, '0.5', 'weekly');
        }
        $sitemap_blogcats->store('xml','sitemap-blog-categories');

        // create sitemap blogs
        $sitemap_blogs = App::make("sitemap");
        $blogs = DB::table('blogs')->orderBy('created_at', 'desc')->get();
        foreach ($blogs as $post)
        {
            $sitemap_blogs->add( route('blog.detail',[
                'slug' => $post->slug,
                'id' => $post->id
            ]), $post->updated_at, '0.5', 'daily');
        }
        $sitemap_blogs->store('xml','sitemap-blogs');


        // create sitemap products
        $sitemap_product = App::make("sitemap");
        $posts = DB::table('products')->orderBy('created_at', 'desc')->get();
        foreach ($posts as $post)
        {
            $sitemap_product->add( route('product.detail',[
                'slug' => $post->slug,
                'id' => $post->id
            ]), $post->updated_at, '0.5', 'daily');
        }
        $sitemap_product->store('xml','sitemap-products');

        // create sitemap pages
        $sitemap_pages = App::make("sitemap");
        $pages = DB::table('pages')->orderBy('created_at', 'desc')->get();
        foreach ($pages as $page)
        {
            $sitemap_pages->add( route('page.detail',[
                'slug' => $page->slug,
                'id' => $page->id
            ]), $page->updated_at, '0.5', 'daily');
        }
        $sitemap_pages->store('xml','sitemap-pages');


        // create sitemap index
        $sitemap = App::make ("sitemap");
        $sitemap->addSitemap(URL::to('sitemap-categories.xml'));
        $sitemap->addSitemap(URL::to('sitemap-products.xml'));
        $sitemap->addSitemap(URL::to('sitemap-pages.xml'));
        $sitemap->addSitemap(URL::to('sitemap-blog-categories.xml'));
        $sitemap->addSitemap(URL::to('sitemap-blogs.xml'));

        // create file sitemap.xml in your public folder (format, filename)
        $sitemap->store('sitemapindex','sitemap');

        return back()->with('status','Generate site map success');

    }
}
