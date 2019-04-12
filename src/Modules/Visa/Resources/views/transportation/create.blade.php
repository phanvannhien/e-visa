
@extends('admin.layouts.app')

@php(

    $transport_type = [
        'airport',
        'seaport',
    ]
)

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>@lang('app.create') @lang('visa::transportation.transportation')</h1>
    </section>
    <!-- Main content -->
    <section class="content">
        <form method="POST" action="{{ route('transportation.store') }}" class="">
            <p class="clearfix">
                <a href="{{ route('transportation.index') }}" class="btn btn-info btn-sm">
                    <i class="fa fa-backward"></i> @lang('app.back')</a>
            </p>
            {{ csrf_field() }}

            <div class="box">
                <div class="box-body">
                    <div class="form-group">
                        <label for="transport_type">@lang('visa::transportation.transport_type')</label>
                        <select name="transport_type" class="form-control" id="transport_type">
                            @foreach( $transport_type as $tran )
                            <option  value="{{ $tran }}">{{ $tran }}</option>
                            @endforeach
                        </select>
                    </div>


                    <div class="form-group">
                        <label for="transport_name">@lang('visa::transportation.transport_name')</label>
                        <input type="text" class="form-control"
                               name="transport_name"
                               id="transport_name"
                               value="{{ old('transport_name') }}" />
                    </div>

                    <div class="form-group">
                        <label for="transport_fee">@lang('visa::transportation.transport_fee')</label>
                        <input type="text" class="form-control"
                               name="transport_fee"
                               id="transport_fee"
                               value="{{ old('transport_fee',0) }}" />
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
