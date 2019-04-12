
@extends('admin.layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>@lang('app.create')</h1>
    </section>

    <!-- Main content -->
    <section class="content">
        <form method="POST" action="{{ route('brand.store') }}" class="">
            <p class="clearfix">
                <button type="submit" name="submit" class="btn btn-success btn-sm">
                    <i class="fa fa-save"></i> @lang('app.save')
                </button>
                <a href="{{ route('brand.index') }}" class="btn btn-info btn-sm">
                    <i class="fa fa-mail-reply"></i> @lang('app.back')</a>
            </p>
            {{ csrf_field() }}

            <div class="box">
                <div class="box-body">
                    <div class="form-group">
                        <label for="">@lang('brand.brand_name')</label>
                        <input type="text" class="form-control"
                               name="brand_name"
                               id="brand_name"
                               value="{{ old('brand_name') }}" required/>
                    </div>


                    <div class="form-group">
                        <label for="">@lang('brand.brand_website')</label>
                        <input type="text" class="form-control"
                               name="brand_website"
                               id="brand_website"
                               value="{{ old('brand_website') }}" />
                    </div>

                    <div class="form-group">
                        <label for="">@lang('brand.brand_logo')</label>
                        <div class="form-group">
                            <img class="img-thumbnail img-responsive" id="holder" src="{{ old('brand_logo') }}" >
                            <div class="input-group">
                                   <span class="input-group-btn">
                                     <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
                                       <i class="fa fa-picture-o"></i> Choose
                                     </a>
                                   </span>
                                <input id="thumbnail" class="form-control" readonly type="text" name="brand_logo">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="">@lang('brand.brand_description')</label>
                        <textarea class="form-control editor" name="brand_description" id="" cols="30" rows="10">{{ old('brand_description') }}</textarea>
                    </div>
                </div>
            </div>

        </form>

        <!-- /.box -->
    </section>
    <!-- /.content -->

@stop

@section('footer')
@stop
