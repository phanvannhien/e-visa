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
                    @include('theme.partials.messages')
                    <div class="">
                        @if( $orders->count() )
                            @foreach( $user->orders as $order )
                            @include('theme.customers.order.item')
                            @endforeach
                            <p class="text-right">
                                {{ $orders->firstItem()}}-{{$orders->lastItem()}} @lang('app.of') {{$orders->total()}}
                                @lang('app.results')</p>

                            {!! $orders->appends(request()->input())->links() !!}

                        @else
                            <p class="mb-0">@lang('customer.no_order')</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
