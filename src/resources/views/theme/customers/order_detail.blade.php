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
                        <h2 class="mb-4">Application information: ID ORDER: #{{ $order->id }}</h2>

                        <div class="mb-3">
                            <p><strong>Apply date:</strong> {{ $order->created_at }}</p>
                            <p><strong>Payment title:</strong> {{ $order->payment_title }}</p>
                            <p><strong>This order have Payment status:</strong><span class="badge badge-warning p-2 ml-3 text-uppercase">{{ $order->payment_status }}</span></p>

                            @if( $order->payment_status == 'unpaid' )
                            <p class="text-center">
                                <a href="{{ route('apply.visa.step3', $order->id ) }}" class="btn btn-success text-uppercase">
                                    <i class="fab fa-cc-paypal"></i>
                                    Payment now</a>
                            </p>
                            @endif
                        </div>

                        <h3>Information for Order Detail</h3>
                        <div class="mb-4">
                            <table class="table table-bordered">
                                <tr>
                                    <td>Order ID</td>
                                    <td><span class="label label-info">{{ $order->id }}</span></td>
                                </tr>
                                <tr>
                                    <td>Start Date of Arrival</td>
                                    <td>{{ $order->start }}</td>
                                </tr>
                                <tr>
                                    <td>End Date of Arrival</td>
                                    <td>{{ $order->end }}</td>
                                </tr>
                                <tr>
                                    <td>Special Request</td>
                                    <td>{{ $order->special_request }}</td>
                                </tr>
                                <tr>
                                    <td>Transport</td>
                                    <td>{{ $order->transport->transport_name }} - {{ $order->transport->transport_type }}</td>
                                </tr>
                                <tr>
                                    <td>Discount</td>
                                    <td>{{ config('visa.price_prefix').$order->discount }}</td>
                                </tr>
                            </table>
                        </div>

                        <div class="mb-4">
                            <h3>Service Fee</h3>
                            <table class="table-bordered table">
                                <thead>
                                <tr>
                                    <th>Service</th>
                                    <th>Service type</th>
                                    <th>Price</th>
                                    <th>Total</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach( $order->items as $item )
                                    <tr>
                                        <td>{{ $item->service_name }}</td>
                                        <td>{{ $item->service_type }}</td>
                                        <td class="text-danger">
                                            {{ config('visa.price_prefix').number_format($item->price) }}
                                        </td>
                                        <td class="text-danger"> {{ config('visa.price_prefix').number_format($item->total) }}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                                <tfooter>
                                    <tr>
                                        <td colspan="5" class="text-right">
                                            Total: <span class="text-danger">{{ config('visa.price_prefix').number_format($order->total) }}</span>
                                        </td>
                                    </tr>
                                </tfooter>
                            </table>
                        </div>

                        <div class="order-products">
                            <h3>Passport detail of Applications</h3>
                            <ul class="list-group">
                                @foreach( $order->persons as $item )
                                <li class="list-group-item">
                                    <strong>Sure name</strong>: {{ $item->sure_name }} <br>
                                    <strong>Given name</strong>: {{ $item->given_name }} <br>
                                    <strong>Gender</strong>: {{ $item->gender }}, <strong>Date of birth</strong>: {{ $item->dob }} <br>
                                    <strong>Government</strong>: {{ $item->government->country->value }} <br>
                                    <strong>Passport number</strong>: {{ $item->passport_number }}
                                </li>
                                @endforeach
                            </ul>


                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
