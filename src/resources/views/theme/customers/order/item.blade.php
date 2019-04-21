<div class="order-item py-2 border-bottom mb-2 bg-white">
    <p class="clearfix">
        <a href="{{ route('customer.order.detail', $order->id ) }}" class="float-right btn btn-info btn-sm">
            @lang('app.view') <i class="fa fa-angle-right"></i>
        </a>
        ID: #{{ $order->id }} <br/>
        Apply Date: {{ $order->created_at }} <br/>
        Total (USD): <span class="price">{{ config('visa.price_prefix').number_format($order->total) }}</span> <br/>
        Payment status: <span class="badge badge-warning">{{ $order->payment_status }}</span>
    </p>

</div>