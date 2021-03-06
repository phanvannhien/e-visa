
@extends('admin.layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>@lang('app.edit') </h1>
    </section>

    <!-- Main content -->
    <section class="content">

        <form method="POST" action="{{ route('currency.update', $data->id ) }}" id="" class="">
            <p class="clearfix">
                <button type="submit" name="submit" class="btn btn-sm btn-success">
                    <i class="fa fa-save"></i> @lang('app.save')
                </button>
                <a href="{{ route('currency.create') }}" class="btn btn-success btn-sm">
                    <i class="fa fa-plus"></i> @lang('app.create')</a>
                <a href="{{ route('currency.index') }}" class="btn btn-info btn-sm"><i class="fa fa-mail-reply"></i> @lang('app.back')</a>
            </p>
            <input type="hidden" name="_method" value="PUT">
            {{ csrf_field() }}
            <div class="row">

                <div class="col-sm-9">
                    <div class="box">
                        <div class="box-body">
                            <div class="form-group">
                                <label for="">@lang('currency.code')</label>
                                <input type="text" class="form-control" name="code" id="code" placeholder="" value="{{ old('',$data->code) }}"/>
                            </div>

                            <div class="form-group">
                                <label for="">@lang('currency.symbol')</label>
                                <input type="text" class="form-control" name="symbol" id="symbol" placeholder="" value="{{ old('symbol',$data->symbol) }}"/>
                            </div>

                            <div class="form-group">
                                <label for="">@lang('currency.name')</label>
                                <input type="text" class="form-control" name="name" id="name" placeholder="" value="{{ old('name',$data->name) }}"/>
                            </div>
                            <div class="form-group">
                                <label for="">@lang('currency.exchange_rate')</label>
                                <input type="text" class="form-control" name="exchange_rate" id="exchange_rate" placeholder="" value="{{ old('exchange_rate',$data->exchange_rate) }}"/>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-sm-3">
                    <div class="box">
                        <div class="box-body">
                            <div class="form-group">
                                <div class="form-group">
                                    <select name="status" id="status" class="form-control">
                                        <option value="1">@lang('app.activate')</option>
                                        <option value="0">@lang('app.deactivate')</option>
                                    </select>
                                </div>



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

@section('footer')
@stop
