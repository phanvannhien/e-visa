@extends('theme.layouts.app')
@section('header')

@stop
@section('main')
<div id="breadcrumbs">
    <div class="container">
        {{ Breadcrumbs::render('make_payment') }}
    </div>
</div>

<section class="">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h2 class="text-uppercase text-warning mb-3">SECURE ONLINE PAYMENT</h2>
                <div class="alert alert-info mb-3">
                    Please fill in with your order information
                </div>

                <form action="">
                    @csrf
                    <div class="form-group row">
                        <label for="" class="col-md-3">Amount <span class="text-danger">*</span> </label>
                        <div class="col-md-9">
                            <input class="form-control" type="text" name="amount" value= "{{ old('amount') }}" placeholder="E.g: 19" > USD
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-md-3">Payment for <span class="text-danger">*</span> </label>
                        <div class="col-md-9">
                            <label for="government_fee">
                                <input id="government_fee" type="radio" name="payment_for" checked value="government_fee">
                                Government fee
                            </label>
                            <label for="visa_fee">
                                <input id="visa_fee" type="radio" name="payment_for" checked value="visa_fee">
                                Visa fee
                            </label>
                            <label for="other">
                                <input id="other" type="radio" name="payment_for" checked value="other">
                                Others
                            </label>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="" class="col-md-3">Note(Maximum 50 characters) <span class="text-danger">*</span> </label>
                        <div class="col-md-9">
                            <textarea class="form-control" name="note" id="note" cols="30" rows="5">{{ old('note') }}</textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <p class="text-center">
                            <img src="{{ url('images/method-paypal.png') }}" class="d-block m-auto" alt="">
                        </p>
                    </div>
                    <p>After payment is made, you will receive an email confirming your payment.</p>
                    <p class="text-center">
                        <button type="submit" class="btn btn-warning" name="submit" value="payment">PROCEED TO PAYMENT</button>
                    </p>


                </form>
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
