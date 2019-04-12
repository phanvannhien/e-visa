<div id="product-galleries">
    @foreach( $product->galleries as $gallery )
        <img src="{!! $gallery->image_url !!}" class="img-fluid" alt="">
    @endforeach
</div>

<div id="product-thumbs" class="mb-4">
    @foreach( $product->galleries as $gallery )
        <img src="{!! $gallery->image_url !!}" class="thumb-img img-fluid" alt="">
    @endforeach
</div>