
@extends('admin.layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>@lang('app.edit') @lang('pages.pages')</h1>
    </section>

    <!-- Main content -->
    <section class="content">

        <form method="POST" action="{{ route('page.update', $page->id ) }}" id="level-form" class="">
            <p class="clearfix">

                <a href="{{ route('page.index') }}" class="btn btn-info btn-sm ">
                    <i class="fa fa-backward"></i> @lang('app.back')</a>

                <a href="{{ route('page.create') }}" class="btn btn-success btn-sm">
                    <i class="fa fa-plus"></i> @lang('app.create')</a>
            </p>
            <input type="hidden" name="_method" value="PUT">
            {{ csrf_field() }}


            <div class="row">
                <div class="col-sm-9">
                    <div class="box">
                        <div class="box-body">
                            <div class="form-group">
                                <label for="title">@lang('pages.title') <span class="text-red">*</span></label>
                                <input type="text" class="form-control" name="title" id="title" value="{{ old('title', $page->title ) }}" required/>
                            </div>

                            <div class="form-group">
                                <label for="slug">@lang('pages.slug') <span class="text-red">*</span></label>
                                <input type="text" class="form-control" name="slug" id="slug" value="{{ old('slug', $page->slug ) }}" />
                            </div>

                            <div class="form-group">
                                <label for="content">@lang('pages.content')</label>
                                <textarea name="content" id="" class="editor form-control" cols="30" rows="10">{{ old('content', $page->content) }}</textarea>
                            </div>
                            <hr>
                            <div class="form-group">
                                <label for="">@lang('app.meta_title')</label>
                                <textarea name="meta_title" id="meta_title" class="form-control"
                                          cols="30" rows="5">{{ old('meta_title', $page->meta_title ) }}</textarea>
                            </div>

                            <div class="form-group">
                                <label for="">{{ trans('app.meta_keyword') }}</label>
                                <input type="text" name="meta_keyword"  class="form-control" value="{{  old('meta_keyword', $page->meta_keyword ) }}">
                            </div>

                            <div class="form-group">
                                <label for="meta_description">@lang('app.meta_description')</label>
                                <textarea id="meta_description" name="meta_description" class="form-control"
                                          cols="30" rows="5">{{ old('meta_description', $page->meta_description ) }}</textarea>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="box">
                        <div class="box-body">
                            <div class="form-group">
                                <label for="">@lang('app.status')</label>
                                <select name="status" id="" class="form-control">
                                    <option {{ (old('status', $page->status) == 1) ? 'selected' : '' }} value="1">@lang('app.activate')</option>
                                    <option {{ (old('status', $page->status) == 0) ? 'selected' : '' }} value="0">@lang('app.deactivate')</option>
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

                                <img class="img-thumbnail img-responsive" id="holder" src="{{ old('thumbnail',$page->thumbnail ) }}" >
                                <div class="input-group">
                                   <span class="input-group-btn">
                                     <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
                                       <i class="fa fa-picture-o"></i> Choose
                                     </a>
                                   </span>
                                    <input id="thumbnail" class="form-control" readonly type="text" value="{{ old('thumbnail',$page->thumbnail) }}" name="thumbnail">
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="submit" name="submit" class="btn  btn-success btn-block btn-lg">
                        <i class="fa fa-save"></i> @lang('app.save')
                    </button>
                </div>
            </div>
        </form>

        <!-- /.box -->
    </section>
    <!-- /.content -->

@stop

@section('footer')

@stop
