
@extends('admin.layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>Slider</h1>
    </section>
    <!-- Main content -->
    <section class="content">
        <form method="POST" action="{{ route('slider.update', $slider->id ) }}" class="">
            <p class="clearfix">
                <button type="submit" name="submit" class="btn btn-sm btn-success">
                    <i class="fa fa-save"></i> @lang('app.save')
                </button>
                <a href="{{ route('slider.index') }}" class="btn btn-info btn-sm ">
                    <i class="fa fa-mail-reply"></i> @lang('app.back')</a>
                <a href="{{ route('slider.create') }}" class="btn btn-success btn-sm">
                    <i class="fa fa-plus"></i> @lang('app.create')</a>
            </p>
            <input type="hidden" name="_method" value="PUT">
            {{ csrf_field() }}

            <div class="row">
                <div class="col-md-8">
                    <div class="box">
                        <div class="box-body">
                            <div class="form-group">
                                <label for="title">@lang('slider.title')</label>
                                <input type="text" class="form-control"
                                       name="title" id="title" value="{{ old('title', $slider->title ) }}" required/>
                            </div>

                            <div class="form-group">
                                <label for="title">@lang('slider.image')</label>
                                <div class="input-group">
                                   <span class="input-group-btn">
                                     <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
                                       <i class="fa fa-picture-o"></i> Choose
                                     </a>
                                   </span>
                                    <input id="thumbnail" value="{{ $slider->image }}" class="form-control" readonly type="text" name="file_path">
                                </div>
                                <img class="img-thumbnail img-responsive" id="holder" src="{{ $slider->image }}" >
                            </div>

                            <div class="form-group">
                                <label for="url">@lang('slider.url')</label>
                                <input type="text" class="form-control"
                                       name="url" id="url" value="{{ old('url', $slider->url) }}" required/>
                            </div>

                        </div>
                    </div>

                </div>
                <div class="col-md-4">

                    <div class="box">
                        <div class="box-body">

                            <div class="form-group">
                                <label for="">@lang('product.status')</label>
                                <select name="status" id="status" class="form-control">
                                    <option {{ (old('status', $slider->status) == 1) ? 'selected' : '' }} value="1">@lang('app.activate')</option>
                                    <option {{ (old('status', $slider->status) == 0) ? 'selected' : '' }} value="0">@lang('app.deactivate')</option>
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
