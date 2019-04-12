@extends('theme.layouts.app')

@section('main')
<div id="breadcrumbs">
	<div class="container">
		{{ Breadcrumbs::render('login') }}
	</div>
</div>
<section class="py-4">
	<div class="container">
		<div class="row">
			<div class="col-sm-6">
				<form action="{{ route('login') }}" id="frm-login" class="p-0 pr-md-5">
					<div id="alert"></div>
					<p><strong>I am a return customer – Login here</strong></p>
					<div class="form-group row">
						<label for="email" class="col-sm-2 col-form-label">Email</label>
						<div class="col-sm-10">
							<input id="email" name="email" type="email" class="form-control" placeholder="@lang('customer.email')" required>
						</div>
					</div>
					<div class="form-group row">
						<label for="password" class="col-sm-2 col-form-label">Password</label>
						<div class="col-sm-10">
							<input name="password" type="password" class="form-control" placeholder="@lang('customer.password')" required>
						</div>
					</div>
					<div class="form-group">
						<p>Did you forget your password? <a class="text-gray" href="{{ route('password.request') }}">
								@lang('customer.forgot_password')</a>
						</p>

						<button id="btn-login" class="btn btn-info">@lang('customer.login')</button>

					</div>
				</form>
				@include('theme.auth.social')
			</div>
			<div class="col-sm-6">

				<form action="{{ route('register') }}" id="frm-register" class="p-0 pl-md-5">
					<div id="alert"></div>
					<p><strong>I am a new customer - Create account here</strong></p>
					<div class="form-group row">
						<label for="full_name" class="col-sm-4 col-form-label">Your full name <span class="text-danger">*</span></label>
						<div class="col-sm-8">
							<input id="full_name" type="text" class="form-control" name="full_name" value="{{ old('full_name') }}"
								   required autofocus placeholder="Ex: John">
						</div>
					</div>
					<div class="form-group row">
						<label for="email" class="col-sm-4 col-form-label">Your email address<span class="text-danger">*</span></label>
						<div class="col-sm-8">
							<input id="email" value="{{ old('email') }}" name="email" type="email" class="form-control" placeholder="Ex: john@gmail.com" required>
						</div>
					</div>
					<div class="form-group row">
						<label for="password" class="col-sm-4 col-form-label">Password<span class="text-danger">*</span></label>
						<div class="col-sm-8">
							<input name="password" value="{{ old('password') }}" type="password" class="form-control" placeholder="Type your password" required>
						</div>
					</div>
					<div class="form-group row">
						<label for="password" class="col-sm-4 col-form-label">Confirm password<span class="text-danger">*</span></label>
						<div class="col-sm-8">
							<input name="password_confirmation" value="{{ old('password_confirmation') }}" type="password" class="form-control" placeholder="Retype your password" required>
						</div>
					</div>

					<div class="form-group row">
						<label for="phone" class="col-sm-4 col-form-label">Phone number<span class="text-danger">*</span></label>
						<div class="col-sm-8">
						<input id="phone" name="phone" value="{{ old('phone') }}" type="tel" class="form-control" placeholder="@lang('customer.phone')" required>
						</div>
					</div>

					<div class="form-group row">
						<label for="country" class="col-sm-4 col-form-label">Country<span class="text-danger">*</span>
						</label>
						<div class="col-sm-8">
							<?php
								$countries = \App\Models\Countries::all();
							?>
							<select name="country" class="form-control" id="">
								@foreach($countries as $country)
									<option {{ old('country') ==  $country->code ? 'selected' : '' }}
											value="{{ $country->code }}">{{ $country->value }}</option>
								@endforeach
							</select>
						</div>
					</div>

					<div class="form-group row">
						<label for="address" class="col-sm-4 col-form-label">Address<span class="text-danger">*</span></label>
						<div class="col-sm-8">
							<input name="address" type="text" class="form-control" placeholder="Type your address" required>
						</div>
					</div>


					<button id="btn-register" class="btn btn-info">@lang('customer.register')</button>

				</form>
			</div>
		</div>
	</div>
</section>

@endsection