@extends('theme.layouts.app')

@section('main')
    <div id="breadcrumbs">
        <div class="container">
            {{ Breadcrumbs::render('customer.password') }}
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

                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
