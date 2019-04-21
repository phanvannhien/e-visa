@extends('admin.layouts.app')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>@lang('pages.pages')</h1>
    </section>
    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <div class="box">
            <div class="box-header">
                <div class="tool-bars">

                    <a href="{{ route('email-template.create') }}" class="btn btn-success btn-sm">
                        <i class="fa fa-plus"></i> @lang('app.create')</a>
                </div>

            </div>
            <div class="box-body">
                <table class="table">
                    <thead>
                    <tr>
                        <th width="150">@lang('email_template.template_name')</th>
                        <th>@lang('email_template.template_group')</th>
                        <th>@lang('email_template.template_class')</th>
                        <th>@lang('email_template.mail_from')</th>
                        <th>@lang('email_template.mail_cc')</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach( $data as $item )
                        <tr id="row-{{ $item->id }}">
                            <td>
                                <a href="#">{{ $item->template_name }}</a> <br/>
                                <a href="{{ route('email-template.edit', $item->id ) }}" class="">
                                    <i class="fa fa-edit"></i> {{ trans('app.edit') }}</a> |
                                <a target="_blank" href="{{ route('email-template.show', $item->id ) }}" class="">
                                    <i class="fa fa-eye"></i> {{ trans('app.view') }}</a>
                            </td>
                            <td>{{ $item->template_group }}</td>
                            <td>{{ $item->template_class }}</td>
                            <td>{{ $item->mail_from }}</td>
                            <td>{{ $item->mail_cc }}</td>
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

@section('footer')

@stop