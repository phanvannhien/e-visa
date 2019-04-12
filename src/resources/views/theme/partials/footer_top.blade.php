<div id="footer-top" class="py-5">
    <div class="container">
        <div class="row align-items-stretch">
            <div class="col-md-6">
                @foreach( $stores as $store )
                    <div class="mb-3">
                        <h3 class="mb-0">{{ $store->name }}</h3>
                        <p class="mb-0">
                            <i class="la la-map-signs"></i>
                            {{ $store->getFullAddress() }}.</p>
                        <p class="mb-0">
                            <i class="la la-mobile-phone"></i>
                            <a rel="nofollow" href="tel:{{ $store->contact_phone }}">{{ $store->contact_phone }}</a>
                        </p>
                        <p class="mb-0">
                            <i class="la la-envelope-o"></i>
                            <a rel="nofollow" href="mailto:{{ $store->contact_phone }}">{{ $store->contact_email }}</a>
                        </p>

                    </div>
                @endforeach
            </div>
        </div>

    </div>
</div>