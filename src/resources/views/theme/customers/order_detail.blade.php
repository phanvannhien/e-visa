@extends('theme.layouts.app')
@section('main')
    <div id="breadcrumbs">
        <div class="container">
            {{ Breadcrumbs::render('customer.order') }}
        </div>
    </div>
    <section class="mb-5">
        <div class="container">
            <div class="row align-items-stretch">
                <div class="col-md-4">
                    @include('theme.customers.partials.sidebar')
                </div>
                <div id="primary" class="col-md-8">
                    <div id="primary-inner" class="p-4 bg-white">
                        <div class="order-info mb-4">
                            <a href="{{ route('customer.order') }}" class="float-right"><i class="la la-cubes"></i> @lang('customer.order')</a>
                            <h3 class="text-uppercase border-bottom pb-2 mb-3">@lang('order.customer_shipping_information')</h3>
                            <p class="badge badge-info text-white"> @lang('order.status') {{ $order->status }}</p>
                            <p>
                                <i class="la la-user"></i> {{ $order->shipping_full_name }} <br/>
                                <i class="la la-envelope"></i> {{ $order->shipping_email }}<br/>
                                <i class="la la-phone"></i> {{ $order->shipping_phone }}<br/>
                                <i class="la la-map-marker"></i> {{ $order->shipping_address }}, {{ $order->district->name }}, {{ $order->city->name }}
                            </p>
                        </div>


                        <div class="order-method row mb-4">
                            <div class="col-md-6">
                                <h3 class="text-uppercase border-bottom pb-2 mb-3">@lang('order.shipping_method')</h3>
                                <p>{{ $order->shipping_title }}</p>
                            </div>
                            <div class="col-md-6">
                                <h3 class="text-uppercase border-bottom pb-2 mb-3">@lang('order.payment_method')</h3>
                                <p>{{ $order->payment_title }}</p>
                            </div>
                        </div>

                        <div class="order-products">
                            <h3 class="text-uppercase border-bottom pb-2 mb-3">@lang('order.products')</h3>
                            <div class="cart-reviews">
                                @foreach( $order->items as $product )
                                    <?php $prod = $product->product ?>
                                    <div class="cart-review-item py-2 clearfix">
                                        <a class="" href="{{ route('product.detail', [ 'id' => $product->product_id , 'slug' => $prod->slug ]) }}">
                                            <img src="{{ $prod->thumbnail }}" class="img-fluid float-md-left border" alt="{{ $product->product_title }}">
                                        </a>
                                        <div class="cart-reivew-data">
                                            <p class="mb-0">
                                                <a href="{{ route('product.detail', [ 'id' =>  $product->product_id, 'slug' => $prod->slug ]) }}">
                                                    {{ Str::words( $product->product_title ,10) }}</a>
                                            </p>
                                            <p class="mb-0">
                                                <small class="">
                                                    <span class="price">{{ number_format( $product->price ).config('product.price_suffix') }}</span>x<span>{{  $product->qty_ordered }}</span>
                                                    = <span class="price">{{ number_format( $product->total ).config('product.price_suffix') }}</span>
                                                </small>
                                            </p>

                                        </div>
                                    </div>
                                @endforeach
                                <p class="text-right mt-3">
                                    @lang('order.total') <span class="price">{{ number_format($order->total).config('product.price_suffix') }}</span>
                                </p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
