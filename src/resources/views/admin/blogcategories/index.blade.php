@extends('admin.layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            @lang('blog.category')
            <a class="btn btn-success btn-sm" href="{{ route('blog-category.create') }}"><i class="fa fa-plus"></i> {{ trans('app.create') }}</a>
        </h1>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-sm-6">
                <div class="box">
                    <div class="box-body">
                        <form action="{{ route('blog-category.store') }}" method="POST">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="">@lang('blog.category_name')</label>
                                <input type="text" name="category_name" required class="form-control"
                                       value="{{ old('category_name') }}">
                            </div>
                            <div class="form-group">
                                <label for="">Slug</label>
                                <input type="text" name="slug" class="form-control"
                                       value="{{ old('slug') }}">
                            </div>
                            <div class="form-group">
                                <label for="">@lang('blog.category_description')</label>
                                <textarea id="" name="category_description" id="" class="form-control" cols="30"
                                          rows="5">{{ old('category_description' ) }}</textarea>
                            </div>



                            <div class="form-group">
                                <label for="">@lang('category.category_image')</label><br>
                                <span class="input-group-btn">
                                     <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
                                       <i class="fa fa-image"></i> Choose
                                     </a>
                                </span><br>
                                <img id="holder" class="img-responsive" style="max-width: 200px" src="{{ old('image') }}" alt="">
                                <input id="thumbnail" value="{{ old('image') }}" class="form-control" readonly type="hidden" name="image">

                            </div>

                            <div class="form-group">
                                <label for="">@lang('blog.category_parent')</label>
                                <select name="parent_id" class="form-control" id="">
                                    <option value="0">@lang('app.select')</option>
                                    {!! \App\Utils\Category::renderSelect($data) !!}
                                </select>

                            </div>

                            <div class="form-group">
                                <label for="">@lang('app.status')</label>
                                <select name="status" id="" class="form-control">
                                    <option value="1">@lang('app.activate')</option>
                                    <option value="0">@lang('app.deactivate')</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="">@lang('app.meta_title')</label>
                                <textarea name="meta_title" id="meta_title" class="form-control"
                                          cols="30" rows="5">{{ old('meta_title') }}</textarea>
                            </div>

                            <div class="form-group">
                                <label for="">@lang('app.meta_keyword')</label>
                                <textarea name="meta_keyword" id="meta_keyword" class="form-control"
                                          cols="30" rows="5">{{ old('meta_keyword') }}</textarea>
                            </div>

                            <div class="form-group">
                                <label for="meta_description">@lang('app.meta_description')</label>
                                <textarea id="meta_description" name="meta_description" class="form-control"
                                          cols="30" rows="5">{{ old('meta_description')  }}</textarea>
                            </div>


                            <button class="btn btn-success" type="submit" name="submit"><i class="fa fa-save"></i> @lang('app.save')</button>


                        </form>

                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="box">
                    <div class="box-body">
                        {!! \App\Utils\Category::renderAdminHtml( $data, 'blog-category.edit', 'blog-category.destroy','blog.category' ) !!}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
@stop
