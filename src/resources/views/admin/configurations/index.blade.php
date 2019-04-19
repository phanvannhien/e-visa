@extends('admin.layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>@lang('configurations.configurations')</h1>
    </section>
    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="box">
            <div class="box-header">
                <a href="#" class="btn btn-danger btn-sm to-trash">
                    <i class="fa fa-trash-o"></i> @lang('app.delete')</a>
                <a href="{{ route('configuration.create') }}" class="btn btn-success btn-sm">
                    <i class="fa fa-plus"></i> @lang('app.create')</a>
            </div>
            <div class="box-body">
                <!-- Custom Tabs -->
                <div class="nav-tabs-custom">
                    <ul class="nav nav-tabs">
                        @foreach( config('configuration.section') as $key => $text )
                            <li class="{{ $loop->index == 0 ? 'active' : '' }}"><a href="#tab_{{$key}}" data-toggle="tab">{{ $text }}</a></li>
                        @endforeach

                    </ul>
                    <div class="tab-content">
                        @foreach( config('configuration.section') as $key => $text )
                            <div class="tab-pane {{ $loop->index == 0 ? 'active' : '' }}" id="tab_{{$key}}">
                                @php
                                    $data =  \App\Models\Configuration::where('section', $key )->get();
                                @endphp

                                @if( count($data) )

                                    <ul class="list-group">
                                    @foreach( $data as $item )
                                    <li class="list-group-item">
                                        <label> {{ $item->label }}
                                            <a href="{{ route('configuration.edit', $item->id ) }}" class="">
                                                <i class="fa fa-edit"></i> {{ trans('app.edit') }}</a>
                                        </label>
                                        <p>
                                            @if( $item->type == 'text' )
                                                <input type="text" readonly class="form-control" value="{{ $item->value }}">

                                            @endif

                                            @if( $item->type == 'image' )
                                                <img src="{{ $item->value }}" width="100" alt="">
                                            @endif
                                        </p>

                                    </li>
                                    @endforeach
                                    </ul>
                                    @endif
                            </div>
                        @endforeach

                    </div>
                    <!-- /.tab-content -->
                </div>
                <!-- nav-tabs-custom -->
            </div>

        </div>

    </section>
    <!-- /.content -->

@stop
