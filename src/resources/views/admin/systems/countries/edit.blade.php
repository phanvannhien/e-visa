
@extends('admin.layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>@lang('app.edit') {{ $data->value }}</h1>
    </section>
    <!-- Main content -->
    <section class="content">

        <form method="POST" action="{{ route('country.update', $data->id ) }}" id="" class="">
            <p class="clearfix">
                <button type="submit" name="submit" class="btn btn-sm btn-success">
                    <i class="fa fa-save"></i> @lang('app.save')
                </button>
            </p>

            <input type="hidden" name="_method" value="PUT">
            {{ csrf_field() }}
            <div class="box">
                <div class="box-body">
                    <div class="form-group">
                        <label for="">@lang('country.visa_fee')</label>
                        <input type="text" class="form-control" name="visa_fee"
                               id="visa_fee" placeholder="" value="{{ $data->visa_fee }}"/>
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
