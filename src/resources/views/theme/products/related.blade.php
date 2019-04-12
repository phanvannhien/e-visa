<section id="product-related" class="py-4">
    <div class="container">
        <h3 class="mb-3 text-uppercase">@lang('product.related')</h3>
        <div class="row align-items-stretch">
            @foreach ( $related as $product )
                <div class="col-md-6 col-lg-3 mb-3">
                    {!! view('theme.products.view',[ 'product' => $product ])->render() !!}
                </div>
            @endforeach
        </div>
    </div>
</section>