
@extends('admin.layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>@lang('blog.blog')</h1>
    </section>

    <!-- Main content -->
    <section class="content">
        <p>
            <a href="{{ route('blog.create') }}" class="btn btn-success btn-sm"><i class="fa fa-plus"></i> @lang('app.create')</a>
            <a href="{{ route('blog.index') }}" class="btn btn-info btn-sm"> <i class="fa fa-angle-left"></i> @lang('app.back')</a>
        </p>
        <form action="{{ route('blog.update', $post->id) }}" method="POST">
            <input type="hidden" name="_method" value="PUT">
            {{ csrf_field() }}
            <div class="row">
                <div class="col-sm-9">
                    <div class="box">
                        <div class="box-body">
                            <div class="form-group">
                                <label for="">{{ trans('blog.blog_title') }}</label>
                                <input type="text" name="blog_title" required class="form-control" value="{{ old('blog_title',$post->blog_title) }}">
                            </div>

                            <div class="form-group">
                                <label for="">{{ trans('blog.blog_slug') }}</label>
                                <input type="text" name="blog_slug" readonly class="form-control" value="{{ old('slug',$post->slug ) }}">
                            </div>

                            <div class="form-group">
                                <label for="">{{ trans('blog.blog_excerpt') }}</label>
                                <textarea id="" name="blog_excerpt" id="" class="form-control" cols="30" rows="10">{{ old('blog_excerpt',$post->blog_excerpt) }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="">{{ trans('blog.blog_content') }}</label>
                                <textarea id="" name="blog_content" id="" class="form-control editor" cols="30" rows="10">{{ old('blog_content',$post->blog_content) }}</textarea>
                            </div>
                            <hr>
                            <div class="form-group">
                                <label for="">{{ trans('app.meta_title') }}</label>
                                <input type="text" name="meta_title"  class="form-control" value="{{  old('blog_excerpt',$post->meta_title) }}">
                            </div>
                            <div class="form-group">
                                <label for="">{{ trans('app.meta_keyword') }}</label>
                                <input type="text" name="meta_keyword"  class="form-control" value="{{  old('meta_keyword',$post->meta_keyword) }}">
                            </div>
                            <div class="form-group">
                                <label for="">{{ trans('app.meta_description') }}</label>
                                <textarea name="meta_description"  class="form-control">{{  old('blog_excerpt',$post->meta_description) }}</textarea>
                            </div>
                            <button type="submit" class="btn btn-success" name="submit">
                                <i class="fa fa-save"></i> {{ trans('app.save') }}</button>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="box">
                        <div class="box-header"><label for="">@lang('blog.category')</label></div>
                        <div class="box-body">
                            <div class="form-group">
                                {!! \App\Utils\Category::renderCheckbox( $cats, $post->categories()->pluck('blogcategory_id')->toArray() ) !!}
                            </div>
                        </div>
                    </div>

                    <div class="box">
                        <div class="box-header"><label for="">{{ trans('blog.post_thumbnail') }}</label></div>
                        <div class="box-body">
                            <div class="form-group">
                                <div class="select-single-image">
                                    <div class="img-item">
                                        <img id="blog-thumbnail-review" class="img-responsive" src="{{ old('blog_thumbnail',$post->blog_thumbnail) }}" alt="">
                                        <input type="hidden" value="{{ old('image',$post->blog_thumbnail) }}" name="blog_thumbnail" id="blog-thumbnail" class="form-control ">
                                    </div>
                                    <a id="select-single-image"
                                       data-input="blog-thumbnail"
                                       data-preview="blog-thumbnail-review"  href="#">Select Image</a>
                                </div>


                            </div>
                        </div>
                    </div>
                    <div class="box">
                        <div class="box-header">{{ trans('app.published') }}</div>
                        <div class="box-body">
                            <div class="form-group">
                                <label for="">{{ trans('app.status') }}</label>
                                <select name="blog_status" id="" class="form-control">
                                    <option {{ ($post->blog_status == 1) ? 'selected' : ''  }} value="1">{{ trans('app.show') }}</option>
                                    <option {{ ($post->blog_status == 0) ? 'selected' : ''  }} value="0">{{ trans('app.hide') }}</option>
                                </select>
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
@section('footer')
    <script>
        $(function(){
            $('#select-single-image').filemanager('image',{
                prefix: '/administration/file-manager'
            });
        })

    </script>
@stop
