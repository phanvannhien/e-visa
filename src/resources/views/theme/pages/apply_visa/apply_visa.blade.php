@extends('theme.layouts.app')
@section('main')
<?php

    $step = request()->get('step') ?? 1;
    $quantity = session()->get('cart.quantity') ?? 1;

    if( session()->has('cart.service_fee') ){
        $service_fee = session()->get('cart.service_fee');
    }

    if( session()->has('cart.processing_fee') ){
        $processing_fee = session()->get('cart.processing_fee');
    }

    if( session()->has('cart.port') ){
        $port = session()->get('cart.port');
    }


?>

@include('theme.pages.apply_visa.apply_header')

<div id="step1" class="mb-4">
    <div class="container">
        @if( Request::has('rush') && Request::get('rush') == 1)
            <?php
                $rush_visa = \App\Models\Block::where('block_code', 'rush_visa' )->first();

            ?>
            {!! $rush_visa->block_content !!}
            @endif
        <div class="row align-items-stretch">
            <div class="col-md-8">
                <form id="frm-visa" action="{{ route('apply.visa.step1.save') }}" method="post">
                    @csrf
                    <div class="form-group row">
                        <label for="" class="col-md-3">Number of e-Visas</label>
                        <div class="col-md-9">
                            <select onchange="updateCart(this, 'update_qty' )" name="quantity" class="form-control" id="">
                                @for( $i = 1;  $i<= 15; $i++ )
                                    @if( $i == 1 )
                                        <option {{ $quantity == $i ? 'selected' : '' }} value="1">Only 1 applicant</option>
                                    @else
                                        <option {{ $quantity == $i ? 'selected' : '' }} value="{{ $i }}">Group of {{ $i }} applicants</option>
                                    @endif

                                @endfor
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="" class="col-md-3">Type of e-Visa</label>
                        <div class="col-md-9">
                            <select onchange="updateCart(this, 'visa_type')" name="visa_type" class="form-control" id="">
                                @foreach( \Modules\Visa\Entities\VisaService::where('service_type','visa_fee')->get() as $service )
                                    <option {{ $service_fee['id'] == $service->id ? 'selected' : '' }} value="{{ $service->id }}">{{ $service->service_name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="" class="col-md-3">Transportation method</label>
                        <div class="col-md-9">
                            @foreach( config('visa.transport_type') as $key => $text )
                                <label for="port-{{ $key }}">
                                    <input {{ $loop->index == 0 ? 'checked' : '' }} id="port-{{ $key }}" type="radio" name="transport_type" value="{{ $key }}" />
                                    {{ $text }}
                                </label>
                            @endforeach
                        </div>
                    </div>


                    <div class="form-group row">
                        <label for="" class="col-md-3"> Port of arrival</label>
                        <div class="col-md-9">
                            <select onchange="updateCart(this, 'transport')" name="transport" class="form-control" id="">
                                @foreach( \Modules\Visa\Entities\Transportation::where('transport_type','airport')->get() as $port )
                                    <option {{ $port['id'] == $port->id ? 'selected' : '' }} value="{{ $port->id }}">{{ $port->transport_name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="" class="col-md-3">Processing Time</label>
                        <div class="col-md-9">

                            @foreach( \Modules\Visa\Entities\VisaService::where('service_type','visa_processing')->get() as $service )
                                <label for="processing-{{$service->id}}">
                                    <input onchange="updateCart(this, 'visa_processing')" {{ $processing_fee['id'] == $service->id ? 'checked' : '' }} type="radio" name="processing" id="processing-{{$service->id}}" value="{{ $service->id }}" />
                                    {{ $service->service_name }}
                                </label><br>
                            @endforeach

                        </div>
                    </div>
                    <p class="text-center">
                        <button type="submit" class="btn btn-warning" >Continue</button>
                    </p>
                </form>
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

@stop

@section('footer')
    @include('theme.pages.apply_visa.script')
@stop