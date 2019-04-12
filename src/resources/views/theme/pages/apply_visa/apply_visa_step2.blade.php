@extends('theme.layouts.app')
@section('main')

<?php
    $government = \Modules\Visa\Entities\Government::all();
    $quantity = session()->get('cart.quantity');
?>

@include('theme.pages.apply_visa.apply_header')
<form action="{{ route('apply.visa.step2.save') }}" method="post">
    @csrf
    <div id="step2" class="mb-4">
        <div class="container">
            <div class="row align-items-stretch">
                <div class="col-md-8">
                    @include('theme.partials.messages')
                    <h3>PASSPORT DETAILS</h3>
                    <table class="table-passport table-bordered mb-4">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Surname</th>
                            <th>Given Name/s</th>
                            <th>Gender</th>
                            <th>Date of Birth (YYYY-MM-DD)</th>
                            <th>Nationality</th>
                            <th>Passport Number</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                            $person = old('person');

                        ?>

                        @for ( $i = 1; $i <= $quantity ; $i++ )

                            <tr>
                                <td>{{ $i }}</td>
                                <td>
                                    <input type="text" name="person[{{ $i }}][sure_name]" class="form-control" value="{{ $person ? $person[$i]['sure_name']:'' }}" />
                                </td>
                                <td>
                                    <input type="text" name="person[{{ $i }}][given_name]" class="form-control" value="{{ $person ? $person[$i]['given_name']:'' }}" />
                                </td>
                                <td>
                                    <select name="person[{{ $i }}][gender]" id="" class="form-control">
                                        <option {{ $person && ($person[$i]['gender'] == 'male') ? 'selected' : '' }} value="male">Male</option>
                                        <option {{ $person && ($person[$i]['gender'] == 'male') ? 'selected' : '' }} value="female">Female</option>
                                    </select>
                                </td>
                                <td>
                                    <input type="text" name="person[{{ $i }}][dob]" class="form-control datepicker" value="{{ $person ? $person[$i]['dob']:'' }}">
                                </td>
                                <td>
                                    <select name="person[{{ $i }}][government]" class="form-control" id="">
                                        <option value="">Select your government</option>
                                        @foreach( $government as $gov )
                                            <option {{ $person && ($person[$i]['government'] == $gov->code ) ? 'selected' : '' }} value="{{ $gov->code }}">{{ $gov->country->value }}</option>
                                        @endforeach

                                    </select>
                                </td>
                                <td>
                                    <input type="text" name="person[{{ $i }}][passport_number]" class="form-control" value="{{ $person ? $person[$i]['passport_number']:'' }}" />
                                </td>
                            </tr>
                        @endfor

                        </tbody>
                    </table>

                    <h3>ORDER DETAILS</h3>
                    <div class="form-group row">
                        <label for="" class="col-form-label col-md-4">Date of Arrival</label>
                        <div class="col-md-8">
                            <div class="input-group input-daterange">
                                <input type="text" name="start" class="form-control" value="{{ old('start', date('Y-m-d')) }}">
                                <div class="input-group-addon">to</div>
                                <input type="text" name="end" class="form-control" value="{{ old('end', date('Y-m-d')) }}">
                            </div>
                        </div>

                    </div>
                    <div class="form-group row">
                        <label for="" class="col-form-label col-md-4">Special Request</label>
                        <div class="col-md-8">
                            <textarea name="special_request" id="" class="form-control" cols="30" rows="3">{{ old('special_request') }}</textarea>
                            <label for="agree_correct">
                                <input id="agree_correct" type="checkbox" {{ old('agree_correct') ? 'checked': '' }} name="agree_correct" value="1">
                                I would like to confirm the above information is correct.
                            </label>
                            <label for="agree_condition">
                                <input id="agree_condition" type="checkbox" {{ old('agree_condition') ? 'checked': '' }} name="agree_condition" value="1">
                                I have read and agree to the <a href="#">Terms and Conditions.</a>
                            </label>
                        </div>

                    </div>

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