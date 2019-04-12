@extends('theme.layouts.app')
@section('header')
    @php
        $schemaListItem = array();
        $schemaSiteNavigationElement = array();

    @endphp
@stop
@section('main')
<section class="bg-bussiness overlay page-heading py-5">
    <div class="container">
        <h1 class="text-white m-0 relative">GIAO DIỆN MẪU WEBSITE</h1>
    </div>
</section>
<section class="py-5 bg-white">
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="text-center">
                    Chúng tôi không ngừng phát triển hệ thống <strong>giao diện website mẫu</strong>, với đầy đủ mọi
                    lĩnh vực và ngành nghề cho Quý khách hàng tham khảo. Website mẫu chỉ mang tính tham khảo.
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-5">
    <div class="container">
        <div class="nav-categories mb-3">
            <ul>
                @foreach( $categories as $cat )
                    @php
                        $schemaSiteNavigationElement['name'][] = $cat->category_name;
                        $schemaSiteNavigationElement['url'][] = route('category.product',['slug' => $cat->slug,'id' => $cat->id])
                    @endphp
                    <li>
                        <a href="{{ route('category.product',[
                            'slug' => $cat->slug,
                            'id' => $cat->id,
                        ]) }}">{{ $cat->category_name }}</a>
                    </li>
                @endforeach    
            </ul>
        </div>
        <div class="row align-items-stretch justify-content-center">
            @foreach ( $templates as $template )
                @php(
                    $schemaListItem[] = [
                       '@type' => 'ListItem',
                       "position" => $loop->index,
                       "url" => route('product.detail',['slug' => $template->slug,'id' => $template->id,]),
                       "name" => $template->title,
                       "image" => $template->thumbnail,
                       "aggregateRating" => [
                          "@type" => "AggregateRating",
                          "ratingValue" => "5",
                          "reviewCount" => "100"
                       ]

                    ]
                )
                <div class="col-md-6 col-lg-4 mb-3">
                    <div class="box-item shadow-lg">
                        <figure>
                            <a href="{{ route('product.detail', [ 'slug' => $template->slug, 'id' => $template->id ] ) }}">
                                <img class="img-fluid" src="{{ $template->thumbnail }}" alt="{{ $template->name }}">
                            </a>

                        </figure>
                        <h3>{{ $template->title }}</h3>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="pagination">
            {!! $templates->appends(request()->input())->links() !!}
        </div>
    </div>

</section>

@stop
@section('footer')
<script type="application/ld+json">
{
    "@context":"https://schema.org",
    "@type":"ItemList",
    "itemListElement": @json($schemaListItem)
    }
</script>
<script type="application/ld+json">
{
    "@context": "http://schema.org",
    "@type": "SiteNavigationElement",
    "name": @json($schemaSiteNavigationElement['name']),
    "url": @json($schemaSiteNavigationElement['url'])
}
</script>
@stop