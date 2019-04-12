@extends('admin.layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>@lang('visa::transportation.transportation')</h1>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <div class="box">
            <div class="box-header">
                <a href="{{ route('transportation.create') }}" class="btn btn-success btn-sm">
                    <i class="fa fa-plus"></i> @lang('app.create')</a>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <td>@lang('visa::transportation.transport_type')</td>
                        <td>@lang('visa::transportation.transport_name')</td>
                        <td>@lang('visa::transportation.transport_fee')</td>
                        <td>@lang('visa::transportation.country_code')</td>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach( $data as $item )
                        <tr>
                            <td>
                                <a href="#">{{ $item->transport_name }}</a> <br/>
                                <div class="">
                                    <a href="{{ route('transportation.edit', $item->id ) }}" class="">
                                        <i class="fa fa-edit"></i> {{ trans('app.edit') }}</a>
                                </div>
                            </td>
                            <td>
                                {{ $item->transport_type }}
                            </td>
                            <td class="text-danger">
                                {{ $item->transport_fee }}$
                            </td>
                            <td>
                                {{ $item->country_code }}
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

