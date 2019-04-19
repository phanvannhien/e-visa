
@extends('admin.layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>@lang('app.edit') @lang('configurations.configurations')</h1>

    </section>

    <!-- Main content -->
    <section class="content">

        <form method="POST" action="{{ route('configuration.update', $data->id ) }}" id="configuration-form" class="">
            <p class="clearfix">
                <button type="submit" name="submit" class="btn btn-sm btn-success">
                    <i class="fa fa-save"></i> @lang('app.save')
                </button>
                <a href="{{ route('configuration.index') }}" class="btn btn-info btn-sm ">
                    <i class="fa fa-mail-reply"></i> @lang('app.back')</a>

                <a href="{{ route('configuration.create') }}" class="btn btn-success btn-sm">
                    <i class="fa fa-plus"></i> @lang('app.create')</a>
            </p>
            <input type="hidden" name="_method" value="PUT">
            {{ csrf_field() }}

            <div class="row">
                <div class="col-sm-9">
                    <div class="box">
                        <div class="box-body">

                            <div class="form-group">
                                <label for="section">@lang('configurations.section') <span class="text-red">*</span></label>
                                <select name="section"  class="form-control" id="section">
                                    @foreach( config('configuration.section') as $key => $text )
                                        <option {{ $key == $data->section ? 'selected' : '' }} value="{{ $key }}">{{ $text }}</option>
                                    @endforeach
                                </select>

                            </div>

                            <div class="form-group">
                                <label for="name">@lang('configurations.name') <span class="text-red">*</span></label>
                                <input readonly type="text" class="form-control" name="name" id="name" value="{{ old('name', $data->name ) }}" required/>
                            </div>
                            <div class="form-group">
                                <label for="title">@lang('configurations.label') <span class="text-red">*</span></label>
                                <input type="text" class="form-control" name="label" id="label" value="{{ old('label', $data->label ) }}" required/>
                            </div>
                            @if( $data->type == 'text' )
                            <div class="form-group">
                                <label for="value">@lang('configurations.value') <span class="text-red">*</span></label>
                                <input type="text" class="form-control" name="value" id="value" value="{{ old('value', $data->value ) }}" required/>
                            </div>
                            @endif

                            @if( $data->type == 'textarea' )
                                <div class="form-group">
                                    <label for="value">@lang('configurations.value') <span class="text-red">*</span></label>
                                    <textarea class="form-control" name="value" id="value" cols="30" rows="10">{{ old('value', $data->value ) }}</textarea>
                                </div>
                            @endif

                            @if( $data->type == 'image' )
                                <div class="form-group">
                                    <label for="value">@lang('configurations.value') <span class="text-red">*</span></label>
                                    <br/>
                                    <img class="img-thumbnail img-responsive" id="holder" src="{{ old('value', $data->value ) }}" >
                                    <div class="input-group">
                                           <span class="input-group-btn">
                                                 <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
                                                   <i class="fa fa-picture-o"></i> Choose
                                                 </a>
                                           </span>
                                        <input id="thumbnail" class="form-control" readonly type="text" value="{{ old('value', $data->value ) }}" name="value">
                                    </div>
                                </div>

                            @endif



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
