@extends('admin.layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>@lang('brand.brand')</h1>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <div class="box">
            <div class="box-header">
                <a href="{{ route('brand.create') }}" class="btn btn-success btn-sm">
                    <i class="fa fa-plus"></i> @lang('app.create')</a>
            </div>
            <div class="box-body">
                <form class="form form-inline" action="{{ route('brand.index') }}">
                    <div class="form-group">
                        <input type="text"
                               name="brand_name" value="{{ Request::get('brand_name') }}" class="form-control"
                               placeholder="@lang('brand.brand_name')">
                    </div>

                    <button type="submit" name="submit" value="filter" class="btn btn-success">
                        @lang('app.filter')
                    </button>

                </form>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <td>@lang('brand.brand_name')</td>
                            <td>@lang('brand.brand_logo')</td>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach( $data as $item )
                        <tr>
                            <td>
                                <a href="#">{{ $item->brand_name }}</a> <br/>
                                <div class="btn-group">
                                    <a href="{{ route('brand.edit', $item->id ) }}" class="">
                                        <i class="fa fa-edit"></i> {{ trans('app.edit') }}</a>
                                </div>
                            </td>
                            <td>
                                <img src="{{ $item->brand_logo }}" width="120" alt="">
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
