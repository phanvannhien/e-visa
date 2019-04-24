@extends('theme.layouts.app')
@section('main')
    @php
        $pageIds = array(1,2,3,4);
        $pages = \App\Models\Page::whereIn('id',$pageIds )->get();

        $home_block_code = [
            'home_download_form',
            'home_how_it_works',
            'home_how_to_apply',
            'home_welcome',
        ];
        $home_blocks = \App\Models\Block::whereIn('block_code', $home_block_code )->get();

    @endphp
    <div class="container">
        <section class="mb-4">
            <div class="row">
                <div class="col-md-8">
                    <nav>
                        <div class="nav nav-tabs nav-primary" id="nav-tab" role="tablist">
                            @foreach( $home_blocks as $page )
                                <a class="nav-item bg-white nav-link {{ $loop->index == 0 ? 'active' : '' }}"
                                   id="nav-{{ $page->block_code }}-tab" data-toggle="tab" href="#nav-{{ $page->block_code }}" role="tab"
                                   aria-controls="nav-{{ $page->block_code }}" aria-selected="true">{{ $page->block_title }}</a>
                            @endforeach
                            <a class="nav-item bg-white nav-link show"
                               id="nav-home_check_requirement-tab" data-toggle="tab" href="#nav-home_check_requirement"
                               role="tab" aria-controls="nav-home_check_requirement" aria-selected="false">Who need visa?</a>

                        </div>
                    </nav>
                    <div class="tab-content tab-content p-3 bg-white clearfix" id="nav-tabContent">
                        @foreach( $home_blocks as $page )
                        <div class="tab-pane fade show {{ $loop->index == 0 ? 'active' : '' }}" id="nav-{{ $page->block_code }}" role="tabpanel" aria-labelledby="nav-{{ $page->block_code }}-tab">
                            {!! $page->block_content !!}
                        </div>
                        @endforeach
                        <div class="tab-pane fade show" id="nav-home_check_requirement" role="tabpanel" aria-labelledby="nav-home_check_requirement">
                            <h2 class="text-center text-uppercase mt-3 mb-4 text-warning">CHECK IF YOU NEED A E-VISA TO INDIA</h2>
                            <div class="row">
                                <div class="col-lg-8 offset-lg-2">
                                    <form action="{{ route('check.requirement.find') }}" class="form form-inline mb-4" method="post">
                                        @csrf
                                        <select name="code" class="form-control" id="">
                                            @foreach( \App\Models\Countries::orderBy('value')->get() as $country )
                                                <option value="{{ $country->code }}">{{ $country->value }}</option>
                                            @endforeach
                                        </select>
                                        <button class="btn btn-primary btn-info">CHECK NOW</button>
                                    </form>
                                    <ul>
                                        <li>India Embassy List</li>
                                        <li>India Visa Exemption</li>
                                        <li>Diplomatic passport (No need)</li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    @include('theme.partials.sidebar')
                </div>
            </div>
        </section>

        <section class="mb-4">


            <h2>{{ $blogcat->category_name }}</h2>
            <div class="row align-items-stretch">
                @foreach( $posts as $blog )
                    <div class="col-6 col-md-3 mb-3 mb-sm-0">
                        <div class="blog-item">
                            <a title=" {{ $blog->blog_title }}" href="{{ route('blog.detail', [ 'id' => $blog->id, 'slug' => $blog->slug ]) }}">
                                <img class="img-fluid" src="{{ $blog->blog_thumbnail }}" alt=" {{ $blog->blog_title }}">
                            </a>
                            <div class="blog-meta">
                                <h3 class="mt-3">
                                    <a href="{{ route('blog.detail', [ 'id' => $blog->id, 'slug' => $blog->slug ]) }}">
                                        {{ $blog->blog_title }}
                                    </a>
                                </h3>
                                <div class="d-none d-sm-block post-excerpt">
                                    {{ $blog->blog_excerpt }}
                                </div>
                            </div>

                        </div>
                    </div>
                 @endforeach

            </div>
        </section>
    </div>

@stop