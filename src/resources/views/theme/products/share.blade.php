<div id="product-share">
    <a href="https://www.facebook.com/sharer.php?u={{ request()->getUri() }}"
       onclick="window.open(this.href,this.title,'width=500,height=500,top=300px,left=300px');  return false;"
       class="btn btn-outline-secondary btn-sm" id="share-facebook">
        <i class="la la-facebook la-2x"></i>
    </a>

    <a href="https://twitter.com/share?url={{ request()->getUri() }}"
       id="share-messenger"
       onclick="window.open(this.href,this.title,'width=500,height=500,top=300px,left=300px');  return false;"
       class="btn btn-outline-secondary btn-sm" >
        <i class="la la-twitter-square la-2x"></i>
    </a>

    <a href="mailto:enteryourfriend?subject={{ $product->title }}" id="" class="btn btn-outline-secondary btn-sm" >
        <i class="la la-envelope la-2x"></i>
    </a>

    <a onclick="window.open(this.href,this.title,'width=500,height=500,top=300px,left=300px');  return false;"
       class="btn btn-outline-secondary btn-sm"
       href="https://www.pinterest.com/pin/create/button/?url={{ request()->getUri()}}"
       title="{{ $product->title }}"
       target="_blank" href="" id="">
        <i class="la la-pinterest la-2x"></i>
    </a>

    <a onclick="window.open(this.href,this.title,'width=500,height=500,top=300px,left=300px');  return false;"
       class="btn btn-outline-secondary btn-sm"
       href="http://linkedin.com/shareArticle?mini=true&url={{ request()->getUri()}}"
       title="{{ $product->title }}"
       target="_blank" href="" id="">
        <i class="la la-linkedin la-2x"></i>
    </a>
</div>