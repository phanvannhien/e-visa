@extends('admin.layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>@lang('admin.user') </h1>
    </section>

    <!-- Main content -->
    <section class="content">
        @include('admin.users.partials.nav')
        <div class="row">
            <div class="col-sm-3">
                @include('admin.users.partials.sidebar')
            </div>

            <div class="col-md-9">
                <div class="box">
                    <div class="nav-tabs-custom">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#tab_order" data-toggle="tab" aria-expanded="false">Orders</a></li>
                            <li class=""><a href="#tab_make_payment" data-toggle="tab" aria-expanded="true">Make payment</a></li>
                        </ul>
                        <div class="tab-content active">
                            <div class="tab-pane active" id="tab_order">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th width="100">ID</th>
                                        <th>@lang('visa::order.user')</th>
                                        <th>@lang('visa::order.date_start')</th>
                                        <th>@lang('visa::order.date_end')</th>
                                        <td>Payment Status</td>
                                        <th>@lang('visa::order.total')</th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach( $orders as $item )
                                    <tr id="row-{{ $item->id }}">
                                        <td>
                                            {{ $item->id }}

                                        </td>
                                        <td>
                                            <a href="{{ route('user.show',$item->user_id ) }}">{{ $item->user->full_name }}</a> <br/>
                                        </td>
                                        <td>{{ $item->start }}</td>
                                        <td>{{ $item->end }}</td>
                                        <td><span class="label label-info">{{ $item->payment_status }}</span></td>
                                        <td class="text-red">{{ config('visa.price_prefix').number_format($item->total) }}</td>
                                        <td>
                                            <a target="_blank" href="{{ route('pdf.view', [
                                                'id' => $item->id,
                                                'type' => $item->payment_status
                                            ]) }}" class="btn btn-success btn-sm">
                                                View invoice {{ $item->payment_status }}</a>
                                            <a href="{{ route('order.show', $item->id ) }}" class="btn btn-sm btn-info">
                                                <i class="fa fa-eye"></i> {{ trans('app.view') }}
                                            </a>
                                        </td>
                                    </tr>
                                    @endforeach
                                    </tbody>
                                </table>

                                @if( $orders && count($orders))
                                    <p class="text-right">@lang('app.showing') {{$orders->firstItem()}}-{{$orders->lastItem()}} @lang('app.of') {{$orders->total()}}
                                        @lang('app.results')</p>
                                @endif

                            </div>
                            <!-- /.tab-pane -->
                            <div class="tab-pane" id="tab_make_payment">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th width="100">ID</th>
                                        <th>Payment method</th>
                                        <th>Payment for</th>
                                        <td>Payment Status</td>
                                        <th>@lang('visa::order.total')</th>
                                        <th>Datetime</th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach( $make_payments as $item )
                                    <tr id="row-{{ $item->id }}">
                                        <td>
                                            {{ $item->id }}
                                        </td>
                                        <td>
                                            {{ $item->payment_method }}
                                        </td>
                                        <td>{{ $item->payment_for }}</td>
                                        <td>{{ $item->status }}</td>
                                        <td class="text-red">{{ config('visa.price_prefix').number_format($item->amount) }}</td>
                                        <td>{{ $item->created_at }}</td>
                                    </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                @if( $make_payments && count($make_payments))
                                    <p class="text-right">@lang('app.showing') {{$make_payments->firstItem()}}-{{$make_payments->lastItem()}} @lang('app.of') {{$make_payments->total()}}
                                        @lang('app.results')</p>
                                @endif
                            </div>

                        </div>
                        <!-- /.tab-content -->
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- /.content -->

@stop
