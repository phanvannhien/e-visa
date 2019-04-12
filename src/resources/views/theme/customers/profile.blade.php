@extends('theme.layouts.app')
@section('main')
<div id="breadcrumbs">
    <div class="container">
        {{ Breadcrumbs::render('customer.profile') }}
    </div>
</div>
<section class="mb-5">
    <div class="container">
        <div class="row align-items-stretch">
            <div class="col-md-4">
                @include('theme.customers.partials.sidebar')
            </div>
            <div id="primary" class="col-md-8">
                <div id="primary-inner" class="bg-white p-4">
                    @include('theme.partials.messages')
                    <form class="forms-sample" method="POST" action="{{ route('customer.profile.save') }}">
                        @csrf
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="full_name">@lang('customer.full_name')</label>
                                    <input type="text" class="form-control" id="full_name" name="full_name"  value="{{ old('full_name', $user->full_name) }}">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="gender">@lang('customer.gender')</label>
                                    <select name="gender" id="gender" class="form-control">
                                        <option {{ $user->gender == 0 ? 'selected' : '' }} value="0">Nữ</option>
                                        <option {{ $user->gender == 1 ? 'selected' : '' }} value="1">Nam</option>
                                        <option {{ $user->gender == 2 ? 'selected' : '' }} value="2">Khác</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="email">Email <span class="text-danger">*</span></label>
                            <input type="email" name="email" class="form-control" id="email" value="{{ old('email',$user->email) }}">
                        </div>

                        <div class="form-group">
                            <label for="phone">@lang('customer.phone')<span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="phone" name="phone"  value="{{ old('phone',$user->phone) }}">
                        </div>


                        <div class="form-group">
                            <label for="country" class="col-form-label">Country<span class="text-danger">*</span>
                            </label>

                            <?php
                            $countries = \App\Models\Countries::all();
                            ?>
                            <select name="country" class="form-control" id="">
                                @foreach($countries as $country)
                                    <option {{ old('country', $user->country_code ) ==  $country->code ? 'selected' : '' }}
                                            value="{{ $country->code }}">{{ $country->value }}</option>
                                @endforeach
                            </select>

                        </div>

                        <div class="form-group">
                            <div class="form-group">
                                <label for="address">@lang('customer.address')</label>
                                <input type="text" class="form-control" id="address" name="address"  value="{{ old('address', $user->address) }}">
                            </div>
                        </div>

                        <button type="submit" class="btn btn-success mr-2"><i class="fa fa-save"></i> @lang('app.save')</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
