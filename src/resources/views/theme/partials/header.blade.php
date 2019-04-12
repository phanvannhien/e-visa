
<header>
    <div id="header-main" class="container">

        <div class="row align-items-center no-gutters">
            <div class="col-4">
                <div id="logo">
                    <a title="{{ config('app.name') }}" href="{{ url('/') }}">
                        <img src="{{ url('images/logo.png') }}" alt="{{ config('app.name') }}" />
                    </a>
                </div>
            </div>
            <div class="col col-lg-4">
                <div id="search-form">
                    <div>
                        <a href="">Q&A</a> / <a href="">Check status</a>
                        @if( !Auth::check() )
                        <a href=""><i class="la la-user"></i> Hello: Guest</a>
                        @else
                            <a href="{{ route('customer.dashboard') }}">
                                <i class="la la-user"></i> Hello: {{ auth()->user()->full_name }}</a> |
                            <form class="d-inline" action="{{ route('logout') }}" method="post">
                            @csrf
                            <a href="#" onclick="$(this).parent('form').submit()">Logout</a>
                            </form>

                        @endif
                    </div>
                    <form action="" method="">
                        @csrf
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="@lang('app.search')"
                                   aria-label="" aria-describedby="">
                            <div class="input-group-append">
                                <button class="btn btn-primary text-white" type="button" id="button-addon2">@lang('app.search')</button>
                            </div>
                        </div>
                    </form>
                </div><!-- end search-form -->
            </div>
        </div>

    </div><!-- end header-main -->

    <div id="header-nav" class="clearfix">
        <div class="container">
            <nav id="main-navigation">
                @if( $primaryNav )
                    @php
                        $primaryNavItems = $primaryNav->menu_items()->where('menu_status', 1)->get()->toTree()
                    @endphp
                    {!! App\Utils\Category::renderMenuHTML( $primaryNavItems, 'primary-menu' ) !!}
                @endif
                <div id="user-nav">
                    @if( Auth::check() )
                        <a href="{{ route('customer.dashboard') }}">
                            <span class="menu-icon"><i class="fa fa-clock-o"></i></span>
                            MY ACCOUNT</a>
                        @else
                        <a href="{{ route('login') }}"><span class="menu-icon d-block text-center">
                                <i class="fa fa-lock"></i></span>LOGIN/ REGISTER</a>
                    @endif
                </div>
            </nav>

        </div>
    </div>
</header>
