<div id="side-cart">
    <a class="close-mini-cart" href="#" onclick="$(this).parent().fadeOut()">
        <i class="la la-close"></i>
    </a>
    <div id="mini-cart-header" class="mb-3 border-bottom pb-2">
        <h3 class="m-0">@lang('customer.cart')</h3>
    </div>
    <div id="mini-cart-body">
    </div>
    <div style="display: none" class="wrap-loadding justify-content-center align-items-center">
        <div class="spinner-grow text-warning" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
</div>