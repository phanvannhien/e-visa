
@extends('admin.layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>@lang('app.create') @lang('pages.pages')</h1>
    </section>

    <!-- Main content -->
    <section class="content">
        <form method="POST" action="{{ route('page.store') }}" id="page-form" class="">
            {{ csrf_field() }}
            <p class="clearfix">
                <a href="{{ route('page.index') }}" class="btn btn-info btn-sm">
                    <i class="fa fa-angle-left"></i> @lang('app.back')</a>

                <a href="{{ route('page.create') }}" class="btn btn-success btn-sm">
                    <i class="fa fa-plus"></i> @lang('app.create')</a>

            </p>

            <div class="row">
                <div class="col-sm-9">
                    <div class="box">
                        <div class="box-body">
                            <div class="form-group">
                                <label for="level_name">@lang('pages.title') <span class="text-red">*</span></label>
                                <input type="text" class="form-control" name="title" id="title" value="{{ old('title') }}" required/>
                            </div>

                            <div class="form-group">
                                <label for="description">@lang('pages.content')</label>
                                <textarea name="content" id="" class="editor form-control" cols="30" rows="10">{{ old('content') }}</textarea>
                            </div>
                            <hr>
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
                <div class="col-sm-3">
                    <div class="box">
                        <div class="box-body">
                            <div class="form-group">
                                <label for="">@lang('app.status')</label>
                                <select name="status" id="" class="form-control">
                                    <option {{ (old('status') == 1) ? 'selected' : '' }} value="1">@lang('app.activate')</option>
                                    <option {{ (old('status') == 0) ? 'selected' : '' }} value="0">@lang('app.deactivate')</option>
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
                                <img class="img-thumbnail img-responsive" id="holder" src="{{ old('thumbnail',url('admin/dist/img/boxed-bg.jpg')) }}" >
                                <div class="input-group">
                                   <span class="input-group-btn">
                                     <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
                                       <i class="fa fa-picture-o"></i> Choose
                                     </a>
                                   </span>
                                    <input id="thumbnail" class="form-control" readonly type="text" name="thumbnail" value="{{ old('thumbnail') }}">
                                </div>
                            </div>
                        </div>
                    </div>

                    <button type="submit" name="submit" class="btn btn-lg btn-success btn-block">
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
    <script>
        $(document).ready(function(){
            $('.colorpicker').colorpicker().on('changeColor', function(e) {
                $(this)[0].style.backgroundColor = e.color.toString('rgba');
            });
        })
    </script>
@stop
