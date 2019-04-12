@extends('admin.layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>@lang('attribute.attribute')</h1>
    </section>



    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="box">
            <div class="box-header with-border ">
                <a href="{{ route('attribute.create') }}" class="btn btn-success btn-sm">
                    <i class="fa fa-plus"></i> @lang('app.create')</a>
            </div>
            <div class="box-body">
                <form class="form form-inline" action="{{ route('attribute.index') }}">
                    <div class="form-group">
                        <input type="text"
                               name="code" value="{{ Request::get('code') }}" class="form-control" placeholder="@lang('attribute.code')">
                    </div>
                    <div class="form-group">
                        <input type="text"
                               name="attribute_name" value="{{ Request::get('attribute_name') }}" class="form-control"
                               placeholder="@lang('attribute.attribute_name')">
                    </div>

                    <button type="submit" name="submit" value="filter" class="btn btn-success">
                        @lang('app.filter')
                    </button>

                </form>

                <table class="table table-striped">
                    <thead>
                        <tr>
                            <td>@lang('attribute.code')</td>
                            <td>@lang('attribute.attribute_name')</td>
                            <td>@lang('attribute.admin_name')</td>
                            <td>@lang('attribute.type')</td>
                            <td>@lang('attribute.validation')</td>
                            <td>@lang('attribute.is_required')</td>
                            <td>@lang('attribute.is_unique')</td>
                            <td>@lang('attribute.is_filterable')</td>
                            <td>@lang('attribute.is_configurable')</td>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach( $data as $item )
                        <tr>
                            <td>
                                <a href="#">{{ strtoupper($item->code) }}</a>
                                <br>
                                <a href="{{ route('attribute.edit', $item->id ) }}"
                                   class="">
                                    <i class="fa fa-edit"></i> {{ trans('app.edit') }}</a>

                            </td>
                            <td>{{ $item->attribute_name }}</td>
                            <td>{{ $item->admin_name }}</td>
                            <td>{{ $item->type }}</td>
                            <td>{{ $item->validation }}</td>
                            <td>{{ $item->is_required }}</td>
                            <td>{{ $item->is_unique }}</td>
                            <td>{{ $item->is_filterable }}</td>
                            <td>{{ $item->is_configurable }}</td>
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
