<?php

Breadcrumbs::for('home', function ($trail) {
    $trail->push('Home', route('home'));
});

Breadcrumbs::for('contact', function ($trail) {
    $trail->parent('home');
    $trail->push('Contact Us', route('company.contact'));
});


Breadcrumbs::for('login', function ($trail) {
    $trail->parent('home');
    $trail->push('Login - Register', route('login'));
});



Breadcrumbs::for('page', function ($trail, $page) {
    $trail->parent('home');
    $trail->push( $page->title , route('page.detail',[
        'id' => $page->id,
        'slug' => $page->slug
    ]));
});


// Home > Blog Category
Breadcrumbs::for('blog.category', function ($trail, $category) {

    $trail->parent('home');
    $trail->push( $category->category_name , route('blog.category',['slug' => $category->slug, 'id' => $category->id ] ));
});

// Home > Blog Category > Blog
Breadcrumbs::for('blog', function ($trail, $blog) {
    $category = $blog->categories()->first();

    $trail->parent('blog.category', $category );
    $trail->push($blog->blog_title, route('blog.detail', ['slug' => $blog->slug, 'id' => $blog->id ] ));
});

// Home > Product Category
Breadcrumbs::for('product.category', function ($trail, $category) {
    $trail->parent('home');
    $trail->push( $category->category_name , route('category.product',['slug' => $category->slug, 'id' => $category->id ] ));
});

// Home > Product Category > Product

Breadcrumbs::for('product', function ($trail, $product) {
    if($product->categories){
        $trail->parent('product.category', $product->categories[0]);
    }

    $trail->push( Str::words($product->title, 12), route('product.detail', ['slug' => $product->slug, 'id' => $product->id ] ));
});

// Home > Cart
Breadcrumbs::for('cart', function ($trail) {
    $trail->parent('home');
    $trail->push( trans('order.cart') , route('cart.view' ));
});

// Home > Checkout
Breadcrumbs::for('checkout', function ($trail) {
    $trail->parent('home');
    $trail->push( trans('order.payment') , route('cart.checkout' ));
});


// Home > profile
Breadcrumbs::for('customer.profile', function ($trail) {
    $trail->parent('home');
    $trail->push( trans('customer.profile') , route('customer.profile' ));
});

// Home > password
Breadcrumbs::for('customer.password', function ($trail) {
    $trail->parent('home');
    $trail->push( trans('customer.password') , route('customer.password' ));
});

// Home > order
Breadcrumbs::for('customer.order', function ($trail) {
    $trail->parent('home');
    $trail->push( trans('customer.order') , route('customer.order' ));
});

// Home > address
Breadcrumbs::for('customer.address', function ($trail) {
    $trail->parent('home');
    $trail->push( trans('customer.address') , route('customer.address' ));
});