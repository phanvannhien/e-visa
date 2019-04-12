<div id="payment-method-wrap" class="mb-4">
    <h3 class="text-uppercase mb-3">@lang('order.payment_method')</h3>
    <div class="bg-white p-3">
        @foreach( config('payment') as $payment )
            @if( $payment['active'] )
            <div class="custom-control custom-radio">
                <input type="radio" value="{{ $payment['code'] }}" {{ $loop->index == 0 ? 'checked' : '' }}
                    id="{{ $payment['code'] }}" name="payment_method" class="custom-control-input">
                <label class="custom-control-label" for="{{ $payment['code'] }}">{{ $payment['title'] }}</label>
            </div>
            @endif
        @endforeach
    </div>
</div>