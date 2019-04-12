@extends('theme.layouts.app')
@section('main')
<div id="breadcrumbs">
    <div class="container">
        {{ Breadcrumbs::render('checkout') }}
    </div>
</div>
<div id="main" class="mb-5">
    <div class="container">
        @include('theme.partials.messages')
        <div class="row">
            <div class="col-sm-7">

                <form action="{{ route('cart.checkout.save') }}" method="post">
                    @csrf
                    @include('theme.checkout.payment')
                    @include('theme.checkout.shipping')

                    <div id="customer-info-wrap" class="mb-4">
                        <h3 class="text-uppercase mb-3">@lang('order.customer_shipping_information')</h3>
                        <div class="bg-white p-3">
                            @if( !Auth::check() )
                                @include('theme.checkout.customer_login')
                                @include('theme.checkout.customer_address')
                            @else

                                <label for="">@lang('order.select_address')</label>
                                <div id="exist-address" class="collapse show">
                                    <div class="form-group">
                                        <select name="address_id" class="list-address-book form-control" >
                                            <option {{ (old('address_id') == -1 ) ?'selected':'' }} value="-1">@lang('order.new_address')</option>
                                            @foreach( Auth::user()->addressBook as $address )
                                            <option {{ (old('address_id') == $address->id )?'selected':'' }} value="{{ $address->id }}">
                                                {{ $address->address }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div id="new-address" class="collapse {{ old('address_id', -1 ) == -1 ? 'show' : '' }}" >
                                    @include('theme.checkout.customer_address')
                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox mb-3">
                                            <input type="checkbox" class="custom-control-input" name="is_save_address" id="is_save_address">
                                            <label class="custom-control-label" for="is_save_address">@lang('order.save_to_address')</label>
                                        </div>
                                    </div>
                                </div>

                            @endif
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="">@lang('order.note')</label>
                        <textarea name="note" id="" class="form-control" cols="30" rows="3">{{ old('note') }}</textarea>
                    </div>
                    <button type="submit" class="btn btn-danger btn-lg float-right" name="submit">@lang('order.finish')</button>
                </form>


            </div>
            <div class="col-sm-5">
                @include('theme.checkout.review')
            </div>
        </div>




    </div>
</div>
@stop

