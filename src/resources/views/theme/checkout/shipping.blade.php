<div id="shipping-method-wrap" class="mb-4">
    <h3 class="text-uppercase mb-3">@lang('order.shipping_method')</h3>
    <div class="bg-white p-3">
        @foreach( config('shipping') as $shipping )
            @if( $shipping['active'] )
                <div class="custom-control custom-radio">
                    <input type="radio" value="{{ $shipping['code'] }}" {{ $loop->index == 0 ? 'checked' : '' }}
                    id="{{ $shipping['code'] }}" name="shipping_method" class="custom-control-input">
                    <label class="custom-control-label" for="{{ $shipping['code'] }}">{{ $shipping['title'] }}</label>
                </div>
            @endif
        @endforeach
    </div>
</div>