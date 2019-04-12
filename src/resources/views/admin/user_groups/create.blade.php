
@extends('admin.layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">

        <h1>@lang('app.create')</h1>
    </section>

    <!-- Main content -->
    <section class="content">

        <form method="POST" action="{{ route('user_group.store') }}" class="">
            <p class="clearfix">

                <a href="{{ route('user_group.index') }}" class="btn btn-info btn-sm">
                    <i class="fa fa-backward"></i> @lang('app.back')</a>

            </p>
            {{ csrf_field() }}

            <div class="box">
                <div class="box-body">
                    <div class="form-group">
                        <label for="">@lang('user.group_name')</label>
                        <input type="text" class="form-control"
                               name="group_name"
                               id="group_name"
                               value="{{ old('group_name') }}" required/>
                    </div>
                    <button type="submit" name="submit" class="btn btn-sm btn-success">
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
