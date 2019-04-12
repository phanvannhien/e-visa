@extends('theme.layouts.app')

@section('main')
    <div id="breadcrumbs">
        <div class="container">
            {{ Breadcrumbs::render('customer.address') }}
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
                            @if( $user->addressBook->count() )
                                @foreach( $user->addressBook as $address )
                                <div class="mb-2">
                                    <p>
                                        <i class="la la-user"></i> {{ $address->full_name }} <br/>
                                        <i class="la la-envelope"></i> {{ $address->email }}<br/>
                                        <i class="la la-phone"></i> {{ $address->phone }}<br/>
                                        <i class="la la-map-marker"></i> {{ $address->address }}, {{ $address->district->name }}, {{ $address->city->name }}
                                    </p>
                                    <div class="clearfix">

                                        <form method="post" action="{{ route('customer.address.delete', $address->id) }}">
                                            @csrf
                                            <input type="hidden" name="_method" value="DELETE">
                                            <button class="btn btn-danger float-right btn-sm" type="submit"><i class="la la-trash"></i> @lang('app.delete')</button>
                                        </form>
                                        <a class="btn btn-info btn-sm float-right" href="{{ route('customer.address.edit', $address->id ) }}"><i class="la la-edit"></i> @lang('app.edit')</a>

                                    </div>

                                </div>
                                @endforeach
                            @else
                                <p class="mb-0">@lang('customer.no_address')</p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
