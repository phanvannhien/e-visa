@extends('theme.layouts.app')
@section('header')
    @php
        $schemaListItem = array();
        $schemaSiteNavigationElement = array();
    @endphp
@stop
@section('main')


<div id="breadcrumbs">
    <div class="container">
        {{ Breadcrumbs::render('blog.category',$category  ) }}
    </div>
</div>

<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                @foreach( $posts as $post )
                    @php(
                       $schemaListItem[] = [
                          '@type' => 'ListItem',
                          "position" => $loop->index,
                          "url" => route('blog.detail',['slug' => $post->slug,'id' => $post->id]),
                          "name" => $post->blog_title,
                          "image" => $post->blog_thumbnail,
                          "aggregateRating" => [
                             "@type" => "AggregateRating",
                             "ratingValue" => "5",
                             "reviewCount" => "100"
                          ]
                       ]
                   )
                    <div class="post-item border-bottom mb-4">
                        <h3>
                            <a title="{{ $post->blog_title }}" href="{{ route('blog.detail', ['slug'=> $post->slug, 'id' => $post->id ] ) }}">
                                {{ $loop->index + 1 }}. {{ $post->blog_title }}
                            </a>
                        </h3>
                        <div class="blog-excerpt ">
                            {{ $post->blog_excerpt }}
                        </div>
                        <p class="clearfix my-3">
                            <a href="{{ route('blog.detail', ['slug'=> $post->slug, 'id' => $post->id ] ) }}" class="btn btn-primary float-right">
                                Read more</a>
                        </p>
                    </div>

                @endforeach
                <div class="pagination">
                    {!! $posts->appends(request()->input())->links() !!}
                </div>
            </div>
            <div id="side-bar" class="col-md-4">
                <div class="side-nav">
                    <div class="list-group">
                        @foreach( $categories as $cat )
                            <?php
                            $schemaSiteNavigationElement['name'][] = $cat->category_name;
                            $schemaSiteNavigationElement['url'][] = route('blog.category',['slug' => $cat->slug,'id' => $cat->id])
                            ?>

                            <a class="list-group-item list-group-item-action" href="{{ route('blog.category',['slug' => $cat->slug,'id' => $cat->id]) }}">{{ $cat->category_name }}</a>

                        @endforeach
                    </div>
                </div>
            </div>
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