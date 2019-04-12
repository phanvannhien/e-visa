@extends('theme.layouts.app')
@section('main')
<div class="main">
    <div class="container">
        <div class="bg-white p-4 my-4">
            <h3>Mã đơn hàng: #{{ $order->id }}</h3>
            <h2>Cám ơn bạn đã đặt hàng</h2>
            @if( Auth::check() )
                <p>Xem đơn hàng: <a href="{{ route('customer.order.detail', $order->id ) }}">here</a></p>
            @endif

            <h3 class="mb-3 border-bottom pb-2">Thông tin giao hàng</h3>
            <p>Số điện thoại: <a href="tel:{{ $order->shipping_phone  }}">{{ $order->shipping_phone  }}</a></p>
            <p>Địa chỉ: {{ $order->shipping_address  }}</p>
            <p>Trạng thái: <span class="badge badge-info">{{ $order->status }}</span></p>
            <p>Tổng tiền: <span class="price">{{ $order->total }}</span></p>
            <p>Ghi chú: {{ $order->note }}</p>
            <hr>
            <h3>Order detail</h3>
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>Product</th>
                    <th>Quantity</th>
                    <th>Sub Total</th>
                    <th>Order date</th>
                </tr>
                </thead>
                <tbody>
                @foreach( $order->items as $item )
                    <tr>
                        <td>
                            <a href="{{ route('product.detail', [ 'id' => $item->product->id, 'slug' => $item->product->slug ]) }}">
                                <img width="100" src="{{ $item->product->product_image }}" alt="{{ $item->product->product_name }}">
                            </a>
                            <a href="{{ route('product.detail', [ 'id' => $item->product->id, 'slug' => $item->product->product_slug ]) }}">
                                {{ $item->product->product_name }}
                            </a>
                        </td>
                        <td>{{ $item->qty }}</td>
                        <td class=""><strong class="price">{{ $item->total }}</strong></td>
                        <td>{{ $item->created_at }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>


    </div>
</div>
@stop