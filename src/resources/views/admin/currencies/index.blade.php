@extends('admin.layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>@lang('currency.currency')
            </h1>
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="box">
            <div class="box-header">
                <a href="{{ route('currency.create') }}" class="btn btn-success btn-sm">
                    <i class="fa fa-plus"></i> @lang('app.create')</a>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <td>@lang('currency.code')</td>
                            <td>@lang('currency.symbol')</td>
                            <td>@lang('currency.name')</td>
                            <td>@lang('currency.exchange_rate')</td>
                            <td>@lang('currency.status')</td>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach( $data as $item )
                        <tr>
                            <td>
                                <a href="#">{{ $item->code }}</a> <br/>
                                <div class="">
                                    <a href="{{ route('currency.edit', $item->id ) }}" class="">
                                        <i class="fa fa-edit"></i> {{ trans('app.edit') }}</a>
                                </div>
                            </td>
                            <td>
                                {{ $item->symbol }}
                            </td>
                            <td>
                                {{ $item->name }}
                            </td>
                            <td>
                                {{ number_format($item->exchange_rate) }}
                            </td>
                            <td>
                                {{ $item->status }}
                            </td>
                        </tr>
                    @endforeach
                    </tbody>

                </table>
            </div>
            <div class="box-footer text-center">
                <div class="clearfix">
                    @if( $data && count($data))
                        <p class="text-right">@lang('app.showing') {{$data->firstItem()}}-{{$data->lastItem()}} @lang('app.of') {{$data->total()}}
                            @lang('app.results')</p>
                    @endif
                </div>

            </div>

        </div>
        <!-- /.box -->
        <div class="text-center">
            {!! $data->appends(request()->input())->links() !!}
        </div>
    </section>
    <!-- /.content -->

@stop
