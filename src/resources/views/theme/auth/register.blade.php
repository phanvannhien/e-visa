<div id="modal-register" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">@lang('customer.register')</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <form action="{{ route('register') }}" id="frm-register">
                    <div id="alert"></div>
                    <div class="form-group">
                        <input id="user_name" type="text" class="form-control" name="user_name" value="" required autofocus placeholder="@lang('customer.user_name')">
                    </div>
                    <div class="form-group">
                        <input name="email" type="email" class="form-control" placeholder="Email" required>
                    </div>
                    <div class="form-group">
                        <input name="password" type="password" class="form-control" placeholder="@lang('customer.password')" required>
                    </div>
                    <div class="form-group">
                        <input name="password_confirmation" type="password" class="form-control" placeholder="@lang('customer.password_confirmation')" required>
                    </div>
                    <div class="form-group">
                        <input minlength="10" maxlength="11" name="phone" type="tel" class="form-control" placeholder="@lang('customer.phone')" required>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                                <a href="#" class="text-success"
                                   data-dismiss="modal" data-toggle="modal"
                                   data-target="#modal-login">@lang('customer.login')</a></p>
                        </div>
                        <div class="col-sm-6">
                            <button id="btn-register" class="btn btn-success btn-block">@lang('customer.register')</button>
                        </div>
                    </div>
                </form>
                <hr>
                @include('theme.auth.social')

            </div>


        </div>
    </div>
</div>