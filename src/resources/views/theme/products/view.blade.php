<div class="product-item shadow-sm">
    @if( $product->getDiscount() != 0 )
    <div class="tag-sales">
        {!! $product->getDiscount() !!}
    </div>
    @endif

    <a title="{{ $product->title }}" href="{{ route('product.detail', [ 'slug' => $product->slug, 'id' => $product->id ] ) }}">
        <figure>
            <img title="{{ $product->name }}" class="img-fluid product-thumbnail" src="{{ $product->thumbnail }}" alt="{{ $product->title }}" />
        </figure>
    </a>
    <h3 class="product-name">
        <a href="{{ route('product.detail', [ 'slug' => $product->slug, 'id' => $product->id ] ) }}"
           title="{{ $product->name }}">{{ Str::words($product->title, 7) }}</a>
    </h3>
    <div class="product-price">
        {!! $product->getPriceHTML() !!}
    </div>
</div>