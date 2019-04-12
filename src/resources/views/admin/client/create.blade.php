
@extends('admin.layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>Client</h1>
    </section>
    <!-- Main content -->
    <section class="content">
        <form method="POST" action="{{ route('client.store') }}" class="">
            <p class="clearfix">
                <a href="{{ route('client.create') }}" class="btn btn-success btn-sm">
                    <i class="fa fa-plus"></i> @lang('app.create')</a>
                <a href="{{ route('client.index') }}" class="btn btn-info btn-sm">
                    <i class="fa fa-mail-reply"></i> @lang('app.back')</a>
                <button type="submit" name="submit" class="btn btn-success btn-sm">
                    <i class="fa fa-save"></i> @lang('app.save')
                </button>
            </p>
            {{ csrf_field() }}
            <div class="row">
                <div class="col-md-8">
                    <div class="box">
                        <div class="box-body">
                            <div class="form-group">
                                <label for="title">@lang('client.name')</label>
                                <input type="text" class="form-control"
                                       name="name" id="name" value="{{ old('name') }}" required/>
                            </div>

                            <div class="form-group">
                                <label for="title">@lang('client.logo')</label>
                                <div class="input-group">
                                   <span class="input-group-btn">
                                     <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
                                       <i class="fa fa-picture-o"></i> Choose
                                     </a>
                                   </span>
                                    <input id="thumbnail" class="form-control" readonly type="text" name="file_path">
                                </div>
                                <img style="max-width: 200px" class="img-thumbnail img-responsive" id="holder" src="" >

                            </div>

                            <div class="form-group">
                                <label for="url">@lang('client.url')</label>
                                <input type="text" class="form-control"
                                       name="url" id="url" value="{{ old('url') }}" required/>
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