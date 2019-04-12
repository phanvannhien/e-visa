<?php $currentRouteName = Route::current(); ?>
<li class="treeview {{ strrpos($currentRouteName->getPrefix(), 'visa') ? 'active' : '' }}">
    <a href="#">
        <i class="fa fa-file"></i><span>Visa</span>
        <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
        </span>
    </a>
    <ul class="treeview-menu">
        <li class="{{ ($currentRouteName->getName() == 'transportation.index') ? 'active' : '' }}">
            <a href="{{ route('transportation.index') }}">
                <i class="fa fa-rocket"></i>
                @lang('visa::transportation.transportation')
            </a>
        </li>

        <li class="{{ ($currentRouteName->getName() == 'government.index') ? 'active' : '' }}">
            <a href="{{ route('government.index') }}">
                <i class="fa fa-archive"></i>
                @lang('visa::government.government')
            </a>
        </li>

        <li class="{{ ($currentRouteName->getName() == 'visa-service.index') ? 'active' : '' }}">
            <a href="{{ route('visa-service.index') }}">
                <i class="fa fa-archive"></i>
                @lang('visa::service.service')
            </a>
        </li>

    </ul>

</li>