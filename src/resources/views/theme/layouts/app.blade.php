<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="/manifest.json" />
    <link rel="alternate" href="{{ request()->getUri() }}" hreflang="{{ app()->getLocale() }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.1/css/all.min.css">
    <link rel="stylesheet" href="{{ url('css/app.css') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {!! SEO::generate() !!}

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
                "telephone": "{{ app('Configuration')->get('phone') }}"
            }
        ]
    }
    </script>
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "ProfessionalService",
        "name": "{{ app('Configuration')->get('site_title') }}",
        "priceRange": 1000,
        "currenciesAccepted": "VND, USD",
        "paymentAccepted": "Cash, Credit Card",
        "address": "{{ app('Configuration')->get('address') }}",
        "telephone": "{{ app('Configuration')->get('phone') }}",
        "email" : "{{ app('Configuration')->get('email') }}",
        "logo": "{{ url('img/logo.jpg') }}",
        "image": "{{ url('img/logo.jpg') }}",
        "url": "{{ url('/') }}",
        "founders": [
            {
                "@type": "Person",
                "name": "Nhien Phan",
                "gender": "Male",
                "email": "{{ app('Configuration')->get('email') }}",
                "jobTitle" : "CEO",
                "telephone": "{{ app('Configuration')->get('phone') }}"
            }
        ],
        "OpeningHoursSpecification": [
            {
                "@type": "OpeningHoursSpecification",
                "dayOfWeek": [
                    "Monday",
                    "Tuesday",
                    "Wednesday",
                    "Thursday",
                    "Friday"
                ],
                "opens": "08:00",
                "closes": "17:00"
            },
            {
                "@type": "OpeningHoursSpecification",
                "dayOfWeek": [
                    "Saturday",
                    "Sunday"
                ],
                "opens": "08:00",
                "closes": "17:00"
            }
        ]

    }
    </script>
    @yield('header')

    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','IDDDD');</script>
    <!-- End Google Tag Manager -->

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=IDDDD"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      gtag('config', 'IDDDD');
    </script>
    <script>
        <?php
            $ajax = array(
                'get_port' => route('ajax.get.transport')
            )
            ?>
        var ajax = @json($ajax)
    </script>
</head>
<body>
    <!-- Load Facebook SDK for JavaScript -->
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
    @php
        $primaryNav = \App\Models\Menu::where('menu_code','primary')->first();
        $primaryNavItems = $primaryNav->menu_items()->where('menu_status', 1)->get()->toTree();
    @endphp
    <div id="app">
        @include('theme.partials.header')
        <main class="py-4">
        @yield('main')
        </main>
        @include('theme.partials.footer')
        <div id="page-loading">
            <div class="spinner-grow text-danger" role="status">
                <span class="sr-only">Loading...</span>
            </div>
            <div class="spinner-grow text-warning" role="status">
                <span class="sr-only">Loading...</span>
            </div>
            <div class="spinner-grow text-info" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
    </div>
    @if( Agent::isMobile() )
    <div id="mobile-nav">
        {!! App\Utils\Category::renderMenuHTML( $primaryNavItems, 'primary-menu' ) !!}
    </div>
    @endif

    <script src="{{ url('js/app.js') }}"></script>
    @yield('footer')
    {!! app('Configuration')->get('tawkto') !!}

</body>
</html>

