
@extends('admin.layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>@lang('app.edit')</h1>
    </section>

    <!-- Main content -->
    <section class="content">

        <form method="POST" action="{{ route('user_group.update', $data->id ) }}" id="" class="">
            <p class="clearfix">

                <a href="{{ route('user_group.index') }}" class="btn btn-info btn-sm">
                    <i class="fa fa-backward"></i> @lang('app.back')</a>
                <a href="{{ route('user_group.create') }}" class="btn btn-success btn-sm">
                    <i class="fa fa-plus"></i> @lang('app.create')</a>


            </p>
            <input type="hidden" name="_method" value="PUT">
            {{ csrf_field() }}

            <div class="box">
                <div class="box-body">
                    <div class="form-group">
                        <label for="">@lang('user.group_name')</label>
                        <input type="text" class="form-control" name="group_name"
                               id="group_name" placeholder=""
                               value="{{ $data->group_name }}"/>
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
