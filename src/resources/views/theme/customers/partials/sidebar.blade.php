<div id="user-sidebar">
    <ul class="list-group">

        <li class="list-group-item"><a href="{{ route('customer.profile') }}"><i class="la la-user"></i> @lang('customer.profile')</a></li>
        <li class="list-group-item"><a href="{{ route('customer.order') }}"><i class="la la-cubes"></i> @lang('customer.order')</a></li>
        <li class="list-group-item"><a href="{{ route('customer.address') }}"><i class="la la-map-marker"></i> @lang('customer.address')</a></li>
        <li class="list-group-item"><a href="{{ route('customer.password') }}"><i class="la la-unlock"></i> @lang('customer.password')</a></li>
        <li class="list-group-item">
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <a onclick="$(this).parent('form').submit()"
                   href="#"><i class="la la-sign-out"></i> @lang('customer.logout')</a>
            </form>

        </li>
    </ul>
</div>
