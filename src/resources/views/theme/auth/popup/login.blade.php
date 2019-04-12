<div id="modal-login" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">@lang('customer.login')</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form action="{{ route('login') }}" id="frm-login">
					<div id="alert"></div>
					<div class="form-group">
						<input name="phone" type="tel" class="form-control" placeholder="@lang('customer.phone')" required>
					</div>
					<div class="form-group">
						<input name="password" type="password" class="form-control" placeholder="@lang('customer.password')" required>
					</div>
					<div class="row">
						<div class="col-sm-7">
							<p>
								<a class="text-gray" href="{{ route('password.request') }}">@lang('customer.forgot_password')</a><br>
								<a class="text-success" href="#" data-dismiss="modal"
														  data-toggle="modal"
														  data-target="#modal-register">@lang('customer.register')</a>
							</p>
						</div>
						<div class="col-sm-5">
							<button id="btn-login" class="btn btn-success btn-block radius-sm">@lang('customer.login')</button>
						</div>
					</div>
				</form>
				<hr>
				@include('theme.auth.social')
			</div>
		</div>
	</div>
</div>