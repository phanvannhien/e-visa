
@if( !Cart::isEmpty() )
    <div id="mini-cart-content">
    @foreach( Cart::getContent()->toArray() as $key => $product )
        <div class="mini-cart-item clearfix">
            <a href="#" class="remove-item-minicart" data-pid="{{ $key }}"><i class="la la-trash"></i></a>
            <img src="{{ $product['attributes']['image'] }}" class="img-fluid"  alt="">
            <div class="mini-cart-data">
                <a href="{{ route('product.detail', [ 'id' => $key, 'slug' => $product['attributes']['slug'] ]) }}">
                    {{ Str::words($product['name'],7) }}
                </a><br>
                <small class="text-danger">{{  $product['quantity'] }} x {{ number_format($product['price']).' '.config('product.price_suffix') }}</small>
            </div>
        </div>
    @endforeach
    </div>
    <div id="mini-cart-foot" class="clearfix py-3">
        <div class="mb-3">@lang('order.total'):
            <strong class="price">{{ number_format(Cart::getTotal()).' '.config('product.price_suffix') }}</strong>
        </div>
        <div class="row">
            <div class="col-sm-6"> <a class="btn btn-primary pull-left btn-block" href="{{ route('cart.view') }}">
                    @lang('order.view_cart')</a></div>
            <div class="col-sm-6"><a class="btn btn-danger pull-right btn-block" href="{{ route('cart.checkout') }}">
                    @lang('order.payment')</a></div>
        </div>
    </div>
@else
    <p class="m-0">@lang('customer.cart_empty')</p>
@endif
