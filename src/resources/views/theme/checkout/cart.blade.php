@extends('theme.layouts.app')

@section('main')
<div id="breadcrumbs">
    <div class="container">
        {{ Breadcrumbs::render('cart') }}
    </div>
</div>
<section class="mb-5">
    <div class="container">
        @include('theme.partials.messages')
        <div class="row">
            <div class="col-sm-9">
                @if( !Cart::isEmpty() )
                    <form action="{{ route('cart.update') }}" method="post" class="form-inline form">
                        {{ csrf_field() }}
                        <div class="cart-contents">
                            @foreach( Cart::getContent() as $key => $product )
                            <div class="cart-item p-3 bg-white mb-2 clearfix">
                                <a href="{{ route('product.detail', [ 'id' => $key, 'slug' => $product['attributes']['slug'] ]) }}">
                                    <img src="{{ $product['attributes']['image'] }}" class="img-fluid float-left" alt="{{ $product['name'] }}">
                                </a>
                                <div class="cart-item-data">
                                    <button class="btn btn-sm btn-danger float-right" type="submit" name="remove"  value="{{ $key }}" class="">
                                        <i class="la la-trash"></i> </button>
                                    <p>{{ $product['name'] }}</p>
                                    <p class="mb-0">
                                        <input name="quantity[{{ $key }}]" type="number"
                                               value="{{  $product['quantity'] }}" max="100"
                                               min="1" class="form-control text-center input-sm" />
                                        <span class="price">{{ number_format($product['price']).config('product.price_suffix') }}</span>
                                        <span class="">@lang('order.sub_total')
                                            <span class="price">
                                                {{ number_format($product['price'] * $product['quantity']).config('product.price_suffix') }}
                                            </span>
                                        </span>
                                    </p>

                                </div>
                            </div>
                            @endforeach
                        </div>

                        <div class="clearfix text-right">
                            <button name="action" type="submit" class="btn btn-success" value="update_cart">
                                <i class="fa fa-save"></i> @lang('order.update_cart')</button>

                            <button name="action" type="submit" class="btn btn-danger" value="clean_cart">
                                <i class="fa fa-trash-o"></i> @lang('order.clear_cart')</button>
                        </div>

                    </form>
                @else
                    <div class="alert alert-info">@lang('order.empty_cart')</div>
                @endif
            </div>
            <div class="col-sm-3">
                @if( !Cart::isEmpty() )
                    <div class="card mb-3">
                        <div class="card-body">
                            @lang('order.total'): <strong class="price">{{ number_format(Cart::getTotal()).config('product.price_suffix') }}</strong>
                        </div>
                    </div>
                    <a href="{{ route('cart.checkout') }}" class="btn btn-success btn-block mb-3"> @lang('order.payment')</a>
                @endif
                <a href="/" class="btn btn-outline-secondary btn-block"> @lang('order.continue_shopping')</a>
            </div>
        </div>
    </div>
</section>
@stop
