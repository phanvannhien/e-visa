@extends('theme.layouts.app')

@section('main')
<div id="breadcrumbs">
    <div class="container">
        {{ Breadcrumbs::render('customer.password') }}
    </div>
</div>
<section class="mb-5">
    <div class="container">
        <div class="row align-items-stretch">
            <div class="col-md-4">
                @include('theme.customers.partials.sidebar')
            </div>
            <div id="primary" class="col-md-8">
                <div id="primary-inner" class="p-4 bg-white">
                    @include('theme.partials.messages')
                    <form class="forms-sample" method="POST" action="{{ route('customer.password.save') }}">
                        @csrf
                        <div class="form-group required">
                            <label for="InputPasswordCurrent">Current password <sup class="text-danger"> * </sup> </label>
                            <input type="password" value="{{ old('old_pass') }}" name="old_pass" class="form-control"
                                   id="InputPasswordCurrent" placeholder="******">
                        </div>
                        <div class="form-group">
                            <label for="">New password <sup class="text-danger">*</sup></label>
                            <input name="password"  value="{{ old('password') }}"  type="password" class="form-control"
                                   placeholder="******">
                        </div>
                        <div class="form-group">
                            <label for="">Confirm new password <sup class="text-danger">*</sup></label>
                            <input  value="{{ old('password_confirmation') }}"  name="password_confirmation" type="password"
                                    class="form-control" placeholder="******">
                        </div>

                        <button type="submit" class="btn btn-success mr-2"><i class="fa fa-save"></i> Save</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection
