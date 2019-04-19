
@extends('admin.layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>@lang('app.create') @lang('configurations.configurations')</h1>
    </section>
    <!-- Main content -->
    <section class="content">
        <p class="clearfix">
            <a href="{{ route('configuration.index') }}" class="btn btn-info btn-sm ">
                <i class="fa fa-angle-left"></i> @lang('app.back')</a>

            <a href="{{ route('configuration.create') }}" class="btn btn-success btn-sm">
                <i class="fa fa-plus"></i> @lang('app.create')</a>
        </p>

        <form method="POST" action="{{ route('configuration.store') }}" id="configuration-form" class="">
            {{ csrf_field() }}

            <div class="row">
                <div class="col-sm-9">
                    <div class="box">
                        <div class="box-body">
                            <div class="form-group">
                                <label for="name">@lang('configurations.name') <span class="text-red">*</span></label>
                                <input type="text" class="form-control" name="name" id="name" value="{{ old('name' ) }}" required/>
                            </div>
                            <div class="form-group">
                                <label for="title">@lang('configurations.label') <span class="text-red">*</span></label>
                                <input type="text" class="form-control" name="label" id="label" value="{{ old('label' ) }}" required/>
                            </div>

                            <div class="form-group">
                                <label for="type">@lang('configurations.type') <span class="text-red">*</span></label>
                                <select name="type"  class="form-control" id="type">
                                    @foreach( config('configuration.type') as $type )
                                        <option value="{{ $type }}">{{ $type }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="section">@lang('configurations.section') <span class="text-red">*</span></label>
                                <select name="section"  class="form-control" id="section">
                                    @foreach( config('configuration.section') as $key => $text )
                                        <option value="{{ $key }}">{{ $text }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="value">@lang('configurations.value') <span class="text-red">*</span></label>
                                <input type="text" class="form-control" name="value" id="value" value="{{ old('value') }}" required/>
                            </div>

                            <button type="submit" name="submit" class="btn btn-sm btn-success">
                                <i class="fa fa-save"></i> @lang('app.save')
                            </button>

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

@stop
