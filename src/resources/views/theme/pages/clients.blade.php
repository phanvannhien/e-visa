@extends('theme.layouts.app')
@section('main')
<section class="bg-bussiness overlay page-heading py-5">
    <div class="container">
        <h1 class="text-white m-0 relative">KHÁCH HÀNG</h1>
    </div>
</section>
<section class="py-5 bg-white">
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="text-center">
                    Với hơn 5 năm hoạt động trong lĩnh vực thiết kế Website, Chúng tôi chân thành cám ơn Quý Khách hàng đã tin tưởng chúng tôi. Nhờ đó Công ty chúng tôi đã đạt được những con số đáng kể.
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="counter">
                    <p>
                        <span class="number">500</span>
                        <span class="plust">+</span>
                    </p>
                    <h2>Website Doanh nghiệp</h2>
                </div>
            </div>
            <div class="col-md-4">
                <div class="counter">
                    <p>
                        <span class="number">1,600</span>
                        <span class="plust">+</span>
                    </p>
                    <h2>Dự án</h2>
                </div>
            </div>
            <div class="col-md-4">
                <div class="counter">
                    <p>
                        <span class="number">1,000</span>
                        <span class="plust">+</span>
                    </p>
                    <h2>Cá nhân</h2>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="py-5">
    <div class="container">
        <div class="row align-items-stretch justify-content-center">
            @foreach ( $clients as $client )
            <div class="col-md-4 col-lg-3 mb-3">
                <div class="box-item shadow-lg">
                    <figure>
                        <a target="_blank" href="{{ $client->url }}" rel="nofollow">
                            <img class="img-fluid" src="{{ $client->logo }}" alt="{{ $client->name }}">
                        </a>
                    </figure>
                </div>
            </div>
            @endforeach
        </div>
        <p class="text-center py-4">Và nhiều website khác nữa ...</p>
    </div>

</section>

@stop