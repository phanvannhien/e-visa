@php
    $count5 = $product->reviews()->where('score', 5 )->count();
    $count4 = $product->reviews()->where('score', 4 )->count();
    $count3 = $product->reviews()->where('score', 3 )->count();
    $count2 = $product->reviews()->where('score', 2 )->count();
    $count1 = $product->reviews()->where('score', 1 )->count();

    $total = $count5 + $count4 + $count3 + $count2 + $count1 ;
    $total = $total > 0 ? $total : 1;
    $countRating = $product->reviews->count();

@endphp
<div id="product-reviews" class="bg-white py-4">
    <div class="container">
        <h3 class="text-uppercase border-bottom pb-2">@lang('product.reviews')</h3>
        <div class="row">
            <div class="col-md-6">

                <form action="{{ route('customer.review') }}" method="post">
                    {{ csrf_field() }}
                    <input type="hidden" name="product_id" value="{{ $product->id }}">
                    <div class="form-group row">
                        <label for="" class="col-sm-4 col-form-label">@lang('product.your_rating')</label>
                        <div class="col-sm-8">
                            <div class="rating-wrap">
                                <select name="rating" id="" class="star-rating">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="your_rating_title" class="col-sm-4 col-form-label">@lang('product.your_rating_title')</label>
                        <div class="col-sm-8">
                            <input type="text" name="your_rating_title" class="form-control" id="your_rating_title" value="">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="your_rating_content" class="col-sm-4 col-form-label">@lang('product.your_rating_content')</label>
                        <div class="col-sm-8">
                            <textarea class="form-control" name="your_rating_content" id="your_rating_content" cols="30" rows="2"></textarea>
                        </div>
                    </div>


                    <div class="form-group clearfix">
                        @if( Auth::check() )
                            <button id="btn-review" class=" btn btn-warning pull-right ">
                                <span class="">@lang('app.send')</span>
                            </button>
                        @else
                            <a data-toggle="modal" data-target="#modal-login" class="btn btn-warning pull-right">
                                <span class="">@lang('app.send')</span></a>
                        @endif
                    </div>


                    <div style="display: none" class="wrap-loadding justify-content-center align-items-center">
                        <div class="spinner-grow text-warning" role="status">
                            <span class="sr-only">Loading...</span>
                        </div>
                    </div>

                </form>
            </div>
            <div class="col-md-6">
                <div id="product-rating-table" class="row align-items-center">
                    <div class="col-4 text-center">
                        <span id="product-rating-total">{{ round( $countRating/ $total ) }}/5</span>
                        <span class="text-warning"><i class="la la-lg la-star"></i></span>
                    </div>
                    <div class="col-8">
                        <ul class="rating-list">

                            <li>
                                <span>5</span>
                                <span class="text-secondary"><i class="la la-lg la-star"></i></span>
                                <span class="rating-bar">
                                    <span class="rating-bar-value" style="width: {{ ceil($count5/$total*100) }}%"></span>
                                </span>
                                <span class="rating-num">{{ $count5 }}</span>
                            </li>
                            <li>
                                <span>4</span>
                                <span class="text-secondary"><i class="la la-lg la-star"></i></span>
                                <span class="rating-bar">
                                    <span class="rating-bar-value" style="width: {{ ceil($count4/$total*100) }}%"></span>
                                </span>
                                <span class="rating-num">{{ $product->reviews()->where('score', 4 )->count() }}</span>
                            </li>
                            <li>
                                <span>3</span>
                                <span class="text-secondary"><i class="la la-lg la-star"></i></span>
                                <span class="rating-bar">
                                    <span class="rating-bar-value" style="width: {{ ceil($count3/$total*100) }}%"></span>
                                </span>
                                <span class="rating-num">{{ $product->reviews()->where('score', 3 )->count() }}</span>
                            </li>
                            <li>
                                <span>2</span>
                                <span class="text-secondary"><i class="la la-lg la-star"></i></span>
                                <span class="rating-bar">
                                    <span class="rating-bar-value" style="width: {{ ceil($count2/$total*100) }}%"></span>
                                </span>
                                <span class="rating-num">{{ $product->reviews()->where('score', 2 )->count() }}</span>
                            </li>
                            <li>
                                <span>1</span>
                                <span class="text-secondary"><i class="la la-lg la-star"></i></span>
                                <span class="rating-bar">
                                    <span class="rating-bar-value" style="width: {{ ceil($count1/$total*100) }}%"></span>
                                </span>
                                <span class="rating-num">{{ $product->reviews()->where('score', 1 )->count() }}</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div id="reviews-list-wrapper" class="clearfix">
            <reviews-manager product="{{ $product->id }}" ></reviews-manager>
        </div>

    </div>
</div>