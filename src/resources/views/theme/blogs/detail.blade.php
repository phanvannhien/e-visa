@extends('theme.layouts.app')
@section('main')
<div id="breadcrumbs">
    <div class="container">
        {{ Breadcrumbs::render('blog',$blog ) }}
    </div>
</div>

<section class="py-4">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="blog-single">
                    <div class="alert alert-light" >
                        {!! $blog->blog_excerpt !!}
                    </div>

                    <div class="blog-content">
                        {!! $blog->blog_content !!}
                    </div>
                    <p class="text-black-50"><i class="far fa-calendar-check"></i> {{ $blog->created_at }}</p>
                </div>

                <p class="text-center">
                    <a href="{{ route('apply.visa.step1') }}" class="btn btn-primary text-uppercase">Apply for Visa Now</a>
                </p>

                @if( $related )
                    <hr/>
                    <div class="blog-related">
                        <h3 class="text-uppercase">@lang('blog.related')</h3>
                        <ul class="px-3">
                            @foreach( $related as $post )
                                <li>
                                    <h4 class="font-weight-light">
                                        <a title="{{ $post->blog_title }}" href="{{ route('blog.detail', ['slug'=> $post->slug, 'id' => $post->id ] ) }}">
                                            {{ $post->blog_title }}
                                        </a>
                                    </h4>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                @endif


            </div>
            <div id="side-bar" class="col-md-4">
                <div class="side-nav">
                    @include('theme.partials.sidebar')
                    <div class="list-group mt-3">
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
@endsection
@section('footer')
    <script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "Article",
    "headline": "{{ $blog->blog_title }}",
    "name": "{{ $blog->blog_title }}",
    "mainEntityOfPage": "{{ request()->getUri() }}",
    "dateModified": "{{ $blog->updated_at }}",
    "datePublished": "{{ $blog->created_at }}",
    "dateCreated": "{{ $blog->created_at }}",
    "image" : "{{ $blog->blog_thumbnail }}",
    "author": {
        "@type": "Person",
        "name": "Nhien Phan"
    },
    "publisher": {
        "@type": "Organization",
        "name": "{{ app('Configuration')->get('site_title') }}",
        "logo": {
              "@type": "ImageObject",
              "url": "{{ url('/') }}"
        }
    },
    "description": "",
    "review": {
        "@type": "Review",
        "url": "{{ request()->getUri() }}",
        "author": {
            "@type": "Person",
            "name": "Michael Nhien",
            "sameAs": "https://plus.google.com/110882598925562567554"
        },
        "datePublished": "{{ $blog->created_at }}",
        "description": "Thiết kế website đẹp, tốc độ nhanh, phục vụ tốt, cảm thấy hài lòng",
        "inLanguage": "vi",
        "reviewRating": {
            "@type": "Rating",
            "worstRating": 1,
            "bestRating": 5,
            "ratingValue":5
        }
    }
}
</script>
@stop
