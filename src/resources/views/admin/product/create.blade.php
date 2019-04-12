
@extends('admin.layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>@lang('product.product')</h1>
    </section>
    <!-- Main content -->
    <section class="content">
        <form method="post" action="{{ route('product.store') }}" class="">
            {{ csrf_field() }}

            <input type="hidden" name="product_type" value="{{ Request::has('product_type') ? Request::get('product_type') : 'simple' }}" >
            <input type="hidden" name="type_id" value="{{ Request::has('type_id') ? Request::get('type_id') : '' }}" >


            @if( $attributes && Request::get('product_type') == 'configurable' )
                <div class="box">
                    <div class="box-body">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>@lang('attribute.attribute')</th>
                                <th>@lang('attribute.attribute_options')</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach( $attributes as $attribute )
                                <tr>
                                    <td>{{ $attribute->admin_name }}</td>
                                    <td>
                                        @foreach( $attribute->options as $option )
                                            <span class="btn btn-success">
                                        <input type="hidden" name="super_attributes[{{$attribute->id}}][]" value="{{ $option->id }}">
                                                {{ $option->option_value }}
                                                | <span onclick="$(this).parent().remove()"><i class="fa fa-trash-o"></i></span>
                                    </span>
                                        @endforeach
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>


                    </div>
                </div>

            @endif


            <div class="row">
                <div class="col-md-8">
                    @if( $attributes && Request::get('product_type') == 'simple' )

                        <div class="box">
                            <div class="box-header">
                                <h5 class="box-title">@lang('product.attributes')</h5>
                            </div>
                            <div class="box-body">
                                @foreach( $attributes as $attribute )
                                    <div class="form-group">
                                        {!! App\Utils\HTMLBuilder::buildElement( $attribute ) !!}
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endif

                    <div class="box">
                        <div class="box-header"><h5 class="box-title">@lang('product.info')</h5></div>
                        <div class="box-body">
                            <div class="form-group">
                                <label for="sku">@lang('product.sku')</label>
                                <input type="text" class="form-control"
                                       name="sku" id="sku" value="{{ old('sku') }}"/>
                            </div>

                            <div class="form-group">
                                <label for="title">@lang('product.title')</label>
                                <input type="text" class="form-control"
                                       name="title" id="title" value="{{ old('title') }}" required/>
                            </div>

                            <div class="form-group">
                                <label for="price">@lang('product.price')</label>
                                <input type="text" class="form-control"
                                       name="price" id="price" value="{{ old('price') }}" />
                            </div>


                            <div class="form-group">
                                <label for="sale_price">@lang('product.sale_price')</label>
                                <input type="text" class="form-control"
                                       name="sale_price" id="sale_price" value="{{ old('sale_price') }}" />
                            </div>


                            <div class="form-group">
                                <label for="slug">@lang('product.slug')</label>
                                <input type="text" class="form-control"
                                       name="slug" id="slug" value="{{ old('slug') }}"/>
                            </div>

                            <div class="form-group">
                                <label for="url">@lang('product.url')</label>
                                <input type="text" class="form-control"
                                       name="url" id="url" value="{{ old('url') }}" />
                            </div>



                            <hr/>
                            <div class="form-group">
                                <label for="is_new">
                                    <input class="i-checks" type="checkbox" {{ old('is_new') ? 'checked' : '' }} name="is_new" value="1">
                                    @lang('product.is_new')
                                </label>
                            </div>
                            <div class="form-group">
                                <label for="is_featured">
                                    <input class="i-checks" type="checkbox" {{ old('is_featured') ? 'checked' : '' }} name="is_featured" value="1">
                                    @lang('product.is_featured')
                                </label>
                            </div>

                            <hr/>

                        </div>
                    </div>

                    <div class="box">
                        <div class="box-header"><h5 class="box-title">@lang('product.galleries')</h5></div>
                        <div class="box-body">
                            <div class="form-group">
                                <p>
                                    <a href="#" data-preview="galleries-wrap" class="btn btn-success select-multiple-images">
                                        <i class="fa fa-file-photo-o"></i> Select photos</a>
                                </p>

                                <div id="galleries-wrap" class="clearfix">
                                    @if( count(old('galleries')) )
                                        @foreach( old('galleries') as $img )
                                            <div class="text-center col-sm-3">
                                                <img width="100" src="{{$img->image_url}}">
                                                <input type="hidden" name="galleries[]" value="{!! $img->image_url !!}">
                                                <p><a class="btn btn-block btn-danger" onclick="$(this).closest('div').remove() ">Xoá</a></p>
                                            </div>
                                        @endforeach
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="box">
                        <div class="box-header"><h5 class="box-title">@lang('product.content')</h5></div>
                        <div class="box-body">
                            <div class="form-group">
                                <label for="sort_description">@lang('product.sort_description')</label>
                                <textarea class="editor form-control" name="sort_description" id="sort_description" cols="30" rows="10">{{ old('sort_description') }}</textarea>
                            </div>

                            <div class="form-group">
                                <label for="description">@lang('product.description')</label>
                                <textarea class="editor form-control" name="description" id="description" cols="30" rows="10">{{ old('description') }}</textarea>
                            </div>
                        </div>
                    </div>

                    <div class="box">
                        <div class="box-header">
                            <h5 class="box-title"> @lang('product.shipping')</h5>
                        </div>
                        <div class="box-body">
                            <div class="form-group">
                                <label for="">{{ trans('product.width') }}</label>
                                <input type="text" name="width"  class="form-control" value="{{  old('width') }}">
                            </div>
                            <div class="form-group">
                                <label for="">{{ trans('product.height') }}</label>
                                <input type="text" name="height"  class="form-control" value="{{  old('height') }}">
                            </div>
                            <div class="form-group">
                                <label for="">{{ trans('product.weight') }}</label>
                                <input type="text" name="weight"  class="form-control" value="{{  old('weight') }}">
                            </div>
                            <div class="form-group">
                                <label for="">{{ trans('product.depth') }}</label>
                                <input type="text" name="depth"  class="form-control" value="{{  old('depth') }}">
                            </div>
                        </div>
                    </div>


                    <div class="box">
                        <div class="box-header"><h5 class="box-title">@lang('product.seo')</h5></div>
                        <div class="box-body">
                            <div class="form-group">
                                <label for="">@lang('app.meta_title')</label>
                                <textarea name="meta_title" id="meta_title" class="form-control"
                                          cols="30" rows="5">{{ old('meta_title' ) }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="">{{ trans('app.meta_keyword') }}</label>
                                <input type="text" name="meta_keyword"  class="form-control" value="{{  old('meta_keyword') }}">
                            </div>
                            <div class="form-group">
                                <label for="meta_description">@lang('app.meta_description')</label>
                                <textarea id="meta_description" name="meta_description" class="form-control"
                                          cols="30" rows="5">{{ old('meta_description' ) }}</textarea>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-md-4">
                    <div class="box">
                        <div class="box-header">
                            @lang('product.category')
                        </div>
                        <div class="box-body">
                            <div class="form-group">
                                {!! \App\Utils\Category::renderCheckbox( $categories, old('cat_id') ?: array() ) !!}
                            </div>
                        </div>

                    </div>

                    <div class="box">
                        <div class="box-header">
                            <h5 class="box-title"> @lang('product.brand')</h5>
                        </div>
                        <div class="box-body">
                            <div class="form-group">
                                <select class="form-control" name="brand_id" id="brand_id">
                                    @foreach( \App\Models\Brand::all()  as $brand )
                                        <option {{ old('brand_id') == $brand->id ? 'selected' : '' }}
                                                value="{{ $brand->id }}">{{ $brand->brand_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                    </div>



                    <div class="box">
                        <div class="box-header">
                            @lang('product.thumbnail')
                        </div>
                        <div class="box-body">
                            <div class="form-group">
                                <img class="img-thumbnail img-responsive" id="holder" src="{{ old('thumbnail') }}" >
                                <div class="input-group">
                               <span class="input-group-btn">
                                 <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
                                   <i class="fa fa-picture-o"></i> Choose
                                 </a>
                               </span>
                                    <input id="thumbnail" value="{{ old('thumbnail') }}" class="form-control" readonly type="text" name="thumbnail">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="">@lang('product.status')</label>
                                <select name="status" id="" class="form-control">
                                    <option {{ (old('status') == 1) ? 'selected' : '' }} value="1">Hoạt động</option>
                                    <option {{ (old('status') == 0) ? 'selected' : '' }} value="0">Khoá hoạt động</option>
                                </select>

                            </div>
                            <div class="form-group">
                                <button type="submit" name="submit" class="btn btn-success btn-block">
                                    <i class="fa fa-save"></i> @lang('app.save')
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </form>
        <!-- /.box -->
    </section>
    <!-- /.content -->
@stop