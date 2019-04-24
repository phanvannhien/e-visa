@extends('theme.layouts.app')
@section('header')

@stop
@section('main')

<div id="breadcrumbs">
    <div class="container">
        {{ Breadcrumbs::render('check_require',$country  ) }}
    </div>
</div>

<section class="">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h3 class="mb-3">How to apply for an India e-Visa from {{ $country->value }}</h3>
                <h4 class="text-info">1. Check Requirement</h4>
                <p>
                    {{ $country->value }} is not in the 'exempt country' list for an India visa, so <mark class="text-danger">YOU NEED A VISA</mark>.
                </p>
                <h4 class="text-info">2. How to apply for a visa</h4>
                <p>The most common way of applying for a visa is by <a href="{{route('apply.visa.step1')}}">applying online</a>.</p>
                <h4 class="text-info">3. Visa fee for citizens of <strong>{{ $country->value }}</strong> </h4>
                <p>To apply for a visa online, you have to pay two visa fees - a service fee and a government fee.</p>

                <p class="my-4 text-center">
                    <a href="{{route('apply.visa.step1')}}" class="text-uppercase btn btn-warning">Apply for {{ $country->value }} visa now </a>
                </p>

                <h4>Related Countries</h4>

                <ul class="row">
                    @foreach( \App\Models\Countries::where('code','!=',$country->code )->orderBy('code')->get() as $another )
                       <li class="col-3">
                           <a href="{{ route('check.requirement', $another->code) }}">{{ $another->value }}</a>
                       </li>
                        @endforeach
                </ul>

            </div>
            <div id="side-bar" class="col-md-4">
                <div class="side-nav">
                    @include('theme.partials.sidebar')
                </div>
            </div>
        </div>
    </div>
</section>

@stop
