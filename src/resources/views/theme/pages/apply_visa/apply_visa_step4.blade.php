@extends('theme.layouts.app')
@section('main')

    <?php
    $government = \Modules\Visa\Entities\Government::all();
    $quantity = session()->get('cart.quantity');
    ?>

    @include('theme.pages.apply_visa.apply_header')
    <form action="{{ route('apply.visa.step2.save') }}" method="post">
        @csrf
        <div id="step3" class="mb-4">
            <div class="container">
                <div class="row align-items-stretch">
                    <div class="col-md-8">
                        @include('theme.partials.messages')
                        <h3>PASSPORT DETAILS</h3>

                        <p class="text-center">
                            <button type="submit" class="btn btn-warning" >Continue</button>
                        </p>

                    </div>
                    <div class="col-md-4">
                        <div id="cart">
                            <div class="wrap-loadding justify-content-center align-items-center">
                                <div class="spinner-grow text-warning" role="status">
                                    <span class="sr-only">Loading...</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
@stop
@section('footer')
    @include('theme.pages.apply_visa.script')
@stop