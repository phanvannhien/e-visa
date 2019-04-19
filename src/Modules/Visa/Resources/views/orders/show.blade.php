@extends('admin.layouts.app')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>Order </h1>
    </section>
    <!-- Main content -->
    <section class="content">
        <p>
            <a target="_blank" href="{{ route('pdf.view', $order->id ) }}" class="btn btn-success">View PDF Invoice</a>
        </p>
        <div class="panel panel-info">
            <div class="panel-heading">
                Order Informations
            </div>
            <div class="box-body">
                <p>Order ID: <span class="label label-info">{{ $order->id }}</span></p>
                <p>Created at : {{ $order->created_at }}</p>
                <p>Start Date of Arrival: {{ $order->start }}</p>
                <p>End Date of Arrival: {{ $order->end }}</p>
                <p>Special Request: {{ $order->special_request }}</p>
                <p>Transport: {{ $order->transport->transport_name }} - {{ $order->transport->transport_type }}</p>
                <p>Discount: {{ config('visa.price_prefix').$order->discount }}</p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        Customer
                    </div>
                    <div class="panel-body">
                        Full name: {{ $order->user->full_name }} <br>
                        Email: <a href="mailto:{{ $order->user->email }}">{{ $order->user->email }}</a> <br/>
                        Phone: <a href="mailto:{{ $order->user->phone }}">{{ $order->user->phone }}</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        Payment
                    </div>
                    <div class="panel-body">
                        <p> Payment title: {{ $order->payment_title }}</p>
                        <p> Payment status: <span class="label label-info">{{ $order->payment_status }}</span></p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Default box -->
        <div class="panel panel-info">
            <div class="panel-heading">
                Booking items
            </div>
            <div class="panel-body">
            <table class="table-bordered table">
                <thead>
                    <tr>
                        <th>Service</th>
                        <th>Service type</th>
                        <th>Quantity</th>
                        <th>Price</th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody>
                @foreach( $order->items as $item )
                <tr>
                    <td>{{ $item->service_name }}</td>
                    <td>{{ $item->service_type }}</td>
                    <td>{{ $item->quantity }}</td>
                    <td>
                        {{ config('visa.price_prefix').number_format($item->price) }}
                    </td>
                    <td> {{ config('visa.price_prefix').number_format($item->total) }}</td>
                </tr>
                @endforeach
                </tbody>
                <tfooter>
                    <tr>
                        <td colspan="5" class="text-right">
                            Total: {{ config('visa.price_prefix').number_format($order->total) }}đ
                        </td>
                    </tr>
                </tfooter>
            </table>
            </div>
        </div>


        <!-- Default box -->
        <div class="panel panel-info">
            <div class="panel-heading">
                Booking persons
            </div>
            <div class="panel-body">
                <table class="table-bordered table">
                    <thead>
                    <tr>
                        <th>Sure name</th>
                        <th>Given name</th>
                        <th>Gender</th>
                        <th>Date of birth</th>
                        <th>Government</th>
                        <th>Passport number</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach( $order->persons as $item )
                        <tr>
                            <td>{{ $item->sure_name }}</td>
                            <td>{{ $item->given_name }}</td>
                            <td>{{ $item->gender }}</td>
                            <td>{{ $item->dob }}</td>
                            <td>{{ $item->government->country->value }}</td>
                            <td>{{ $item->passport_number }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </section>
    <!-- /.content -->
@stop

@section('footer')

@stop