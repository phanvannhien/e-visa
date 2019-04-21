<div id="user-sidebar">
    <ul class="list-group">
        <li class="list-group-item"><a href="{{ route('customer.order') }}"><i class="far fa-folder"></i> @lang('customer.order')</a></li>
        <li class="list-group-item"><a href="{{ route('customer.profile') }}"><i class="far fa-user"></i> @lang('customer.profile')</a></li>
        <li class="list-group-item"><a href="{{ route('customer.password') }}"><i class="fas fa-unlock"></i> @lang('customer.password')</a></li>
        <li class="list-group-item">
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <a onclick="$(this).parent('form').submit()"
                   href="#"><i class="fas fa-sign-out-alt"></i> @lang('customer.logout')</a>
            </form>

        </li>
    </ul>
</div>
