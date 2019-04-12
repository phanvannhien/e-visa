<div class="order-item py-2 border-bottom mb-2 bg-white">
    <p class="clearfix">
        <a href="{{ route('customer.order.detail', $order->id ) }}" class="float-right btn btn-info btn-sm">
            @lang('app.view') <i class="la la-angle-right"></i>
        </a>
        @lang('order.id'): {{ $order->id }} <br/>
        @lang('order.date'): {{ $order->created_at }} <br/>
        @lang('order.status'):
        <span class="badge badge-warning">{{ $order->status }}</span> <br/>
        @lang('order.total') <span class="price">{{ number_format($order->total).config('product.price_suffix') }}</span>

    </p>

</div>