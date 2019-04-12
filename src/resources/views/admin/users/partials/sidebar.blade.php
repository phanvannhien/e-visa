<div class="box box-primary">
    <div class="box-body box-profile">
        <img class="profile-user-img img-responsive img-circle" src="{{ ($user->avatar) ? url( $user->avatar )
                        : url('admin/dist/img/user4-128x128.jpg')}}"
             alt="User profile picture">
        <h3 class="profile-username text-center">{{ $user->user_name }}</h3>
        <p class="text-danger text-center">ID: {{ $user->id }}</p>

        <p class="text-muted text-center">
            {!! $user->getStatus() !!}
        </p>

        <ul class="list-group list-group-unbordered">
            <li class="list-group-item">
                <b>@lang('user.full_name')</b> <a class="pull-right">{{ $user->full_name }}</a>
            </li>
            <li class="list-group-item">
                <b>Email:</b> <a class="pull-right">{{ $user->email }}</a>
            </li>
            <li class="list-group-item">
                <b>Phone</b> <a class="pull-right">{{ $user->phone }}</a>
            </li>
            <li class="list-group-item">
                <b>@lang('user.gender')</b> <a class="pull-right">{{ $user->gender }}</a>
            </li>
            <li class="list-group-item">
                <b>@lang('user.dob')</b> <a class="pull-right">{{ $user->dob }}</a>
            </li>
            <li class="list-group-item">
                <b>@lang('user.address')</b> <a class="pull-right">{{ $user->address  }}</a>
            </li>
        </ul>

    </div>
    <!-- /.box-body -->
</div>