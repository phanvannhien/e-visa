@extends('admin.layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>@lang('sys_user.users')</h1>
    </section>
    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="box">
            <div class="box-header">
                <a href="#" class="btn btn-danger btn-sm to-trash">
                    <i class="fa fa-trash-o"></i> @lang('app.delete')</a>
                <a href="{{ route('sys_user.create') }}" class="btn btn-success btn-sm">
                    <i class="fa fa-plus"></i> @lang('app.create')</a>
            </div>
            <div class="box-body">
                <table class="table">
                    <thead>
                    <tr>
                        <td><input type="checkbox" name="ids[]" class="i-checks check-all"></td>
                        <td>@lang('sys_user.user_name')</td>
                        <td>@lang('sys_user.email')</td>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach( $data as $item )
                        <tr>
                            <td><input type="checkbox" class="data-id i-checks" name="id[]" value="{{ $item->id }}"></td>
                            <td>
                                <a href="#">{{ $item->user_name }}</a> <br/>
                                <a href="{{ route('sys_user.edit', $item->id ) }}" class="">
                                    <i class="fa fa-edit"></i> {{ trans('app.edit') }}</a>
                            </td>
                            <td>{{ $item->email }}</td>
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
