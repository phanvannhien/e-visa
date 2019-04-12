@extends('theme.layouts.app')
@section('main')

    <?php
    $government = \Modules\Visa\Entities\Government::all();
    $quantity = session()->get('cart.quantity');
    ?>

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
                    <button type="submit" class="btn btn-warning" >Continue</button>
                </p>


            </div>
        </div>
    </form>
@stop
@section('footer')
    @include('theme.pages.apply_visa.script')
@stop