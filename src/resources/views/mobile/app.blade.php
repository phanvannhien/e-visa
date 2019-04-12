<!doctype html>
<html amp lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <script async src="https://cdn.ampproject.org/v0.js"></script>
    <script async custom-element="amp-carousel" src="https://cdn.ampproject.org/v0/amp-carousel-0.1.js"></script>
    <script async custom-element="amp-list" src="https://cdn.ampproject.org/v0/amp-list-0.1.js"></script>
    <script async custom-template="amp-mustache" src="https://cdn.ampproject.org/v0/amp-mustache-0.2.js"></script>
    <script async custom-element="amp-fit-text" src="https://cdn.ampproject.org/v0/amp-fit-text-0.1.js"></script>
    <script async custom-element="amp-sidebar" src="https://cdn.ampproject.org/v0/amp-sidebar-0.1.js"></script>
    <script async custom-element="amp-lightbox" src="https://cdn.ampproject.org/v0/amp-lightbox-0.1.js"></script>
    <title>Hello, AMPs</title>
    <link rel="canonical" href="{{ url('/') }}">
    <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Organization",
        "logo": "{{ url('img/logo.jpg') }}",
        "url": "{{ url('/') }}",
        "address": "{{ app('Configuration')->get('address') }}",
        "sameAs": [
            "{{ app('Configuration')->get('facebook_page_url') }}"
        ],
        "contactPoint": [{
            "@type": "ContactPoint",
            "telephone": "{{ app('Configuration')->get('phone') }}",
            "contactType": "customer service",
            "areaServed": "VN",
            "availableLanguage": "English"
        }],
        "founders": [
            {
                "@type": "Person",
                "name": "Nhien Phan",
                "gender": "Male",
                "email": "{{ app('Configuration')->get('email') }}",
                "jobTitle" : "CEO",
                "telephone": "{{ app('Configuration')->get('address') }}"
            }
        ]
    }
    </script>
    <style amp-boilerplate>body{-webkit-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-moz-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-ms-animation:-amp-start 8s steps(1,end) 0s 1 normal both;animation:-amp-start 8s steps(1,end) 0s 1 normal both}@-webkit-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-moz-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-ms-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-o-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}</style><noscript><style amp-boilerplate>body{-webkit-animation:none;-moz-animation:none;-ms-animation:none;animation:none}</style></noscript>
    <style amp-custom>
        h1 {
            color: red;
        }
    </style>
</head>
<body>
    <amp-sidebar id="sidebar"
                 class="sample-sidebar"
                 layout="nodisplay"
                 side="right">
        <h3>Sidebar</h3>
        <button on="tap:sidebar.close">Close sidebar</button>
        <button on="tap:sidebar.toggle">Toggle sidebar</button>
    </amp-sidebar>
    <div class="header">

        <button on="tap:sidebar.toggle">Toggle sidebar</button>
        <button on="tap:sidebar.open">Open sidebar</button>
    </div>
    <div class="main">
        <amp-carousel id="main-slider"
                      width="1024"
                      height="480"
                      layout="responsive"
                      type="slides"
                      autoplay>
            @foreach( $slider as $slide  )
                <a href="{{ $slide->url }}">
                    <amp-img src="{{ $slide->image }}"
                             layout="fill"
                             alt="{{ $slide->title }}"
                             attribution="visualhunt"></amp-img>
                </a>
            @endforeach

        </amp-carousel>
        <h1>thiet ke web</h1>
    </div>
</body>
</html>