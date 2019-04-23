@extends('theme.layouts.app')
@section('main')

    <?php
    $government = \Modules\Visa\Entities\Government::all();
    $quantity = session()->get('cart.quantity');
    ?>

    @include('theme.pages.apply_visa.apply_header')
    <div id="step4" class="">
        <div class="container">
            @include('theme.partials.messages')
            <p class="text-center">
                Thanks for your payment success
            </p>
        </div>
    </div>
@stop
@section('footer')
    @include('theme.pages.apply_visa.script')
@stop