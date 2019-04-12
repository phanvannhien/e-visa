
@extends('admin.layouts.app')
@php(

     $service_type = [
        'visa_fee',
        'visa_processing',
    ]
)
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>@lang('app.edit') @lang('visa::service.service'): {{ $data->service_name }}</h1>
    </section>
    <!-- Main content -->
    <section class="content">
        <form method="POST" action="{{ route('visa-service.update', $data->id ) }}" class="">
            @csrf
            @method('PUT')
            <p class="clearfix">
                <a href="{{ route('visa-service.index') }}" class="btn btn-info btn-sm">
                    <i class="fa fa-backward"></i> @lang('app.back')</a>

                <a href="{{ route('visa-service.create') }}" class="btn btn-success btn-sm">
                    <i class="fa fa-plus"></i> @lang('app.create')</a>
            </p>

            <div class="box">
                <div class="box-body">


                    <div class="form-group">
                        <label for="service_type">@lang('visa::service.service_type')</label>
                        <select name="service_type" class="form-control" id="service_type">
                            @foreach( $service_type as $tran )
                                <option {{ old('service_type', $data->service_type ) == $tran ? 'selected' : '' }}
                                        value="{{ $tran }}">{{ $tran }}</option>
                            @endforeach
                        </select>
                    </div>


                    <div class="form-group">
                        <label for="service_name">@lang('visa::service.service_name')</label>
                        <input type="text" class="form-control"
                               name="service_name"
                               id="service_name"
                               value="{{ old('service_name',$data->service_name ) }}" />
                    </div>

                    <div class="form-group">
                        <label for="service_price">@lang('visa::service.service_price')</label>
                        <input type="text" class="form-control"
                               name="service_price"
                               id="service_price"
                               value="{{ old('service_price',$data->service_price) }}" />
                    </div>

                    <div class="form-group">
                        <label for="service_description">@lang('visa::service.service_description')</label>
                        <textarea type="text" class="form-control"
                                  name="service_description"
                                  id="service_description">{{ old('service_description',$data->service_description) }}</textarea>
                    </div>

                    <button type="submit" name="submit" class="btn btn-success btn-sm">
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
