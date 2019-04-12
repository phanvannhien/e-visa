@if( !Cart::isEmpty() )
    <div class="card mb-3">
        <div class="card-body">
            <div class="cart-reviews">
                @foreach( Cart::getContent() as $key => $product )
                    <div class="cart-review-item py-2">
                        <a class="" href="{{ route('product.detail', [ 'id' => $key, 'slug' => $product['attributes']['slug'] ]) }}">
                            <img src="{{ $product['attributes']['image'] }}" class="img-fluid float-md-left" alt="{{ $product['name'] }}">
                        </a>
                        <div class="cart-reivew-data">
                            <p><a href="{{ route('product.detail', [ 'id' => $key, 'slug' => $product['attributes']['slug'] ]) }}">
                                    {{ Str::words( $product['name'],10) }}</a></p>
                            <p class="text-right mb-0">
                                <small class="">
                                    <span class="price">{{ number_format($product['price']).config('product.price_suffix') }}</span>x<span>{{  $product['quantity'] }}</span>
                                    = <span class="price">{{ number_format($product['price'] * $product['quantity']).config('product.price_suffix') }}</span>
                                </small>
                            </p>

                        </div>
                    </div>

                @endforeach
            </div>
        </div>
        <div class="card-footer">
            <p>@lang('order.shipping_fee'): Free</p>
            <p>
                @lang('order.total'): <span class="price">{{ number_format(Cart::getTotal()).config('product.price_suffix') }}</span>
            </p>

        </div>
    </div>
    <p class="text-right clearfix">
        <a href="{{ route('cart.view') }}" class=""><i class="la la-edit"></i> @lang('order.edit_order')</a>
    </p>


@endif