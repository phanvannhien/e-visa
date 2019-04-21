@extends('theme.layouts.app')
@section('main')
    @include('theme.pages.apply_visa.apply_header')
    <form action="{{ route('apply.visa.step3.save') }}" method="post">
        @csrf
        <div id="step3" class="mb-4">
            <div class="container">
                @include('theme.partials.messages')
                <h3>PAYMENT</h3>

                <p class="text-center">
                    <img src="{{ url('images/method-paypal.png') }}" alt="">
                </p>
                <p class="text-center">
                    <button type="submit" class="btn btn-warning" >Continue <i class="fa fa-angle-right"></i></button>
                </p>
            </div>
        </div>
    </form>
@stop
@section('footer')
    @include('theme.pages.apply_visa.script')
@stop