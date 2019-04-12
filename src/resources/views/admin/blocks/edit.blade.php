
@extends('admin.layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>@lang('app.edit') {{ $data->block_code }}</h1>
    </section>
    <!-- Main content -->
    <section class="content">
        <form method="POST" action="{{ route('block.update', $data->id ) }}" id="" class="">
            <p class="clearfix">
                <button type="submit" name="submit" class="btn btn-sm btn-success">
                    <i class="fa fa-save"></i> @lang('app.save')
                </button>
                <a href="{{ route('block.create') }}" class="btn btn-sm btn-success">
                    <i class="fa fa-plus"></i> @lang('app.create')</a>
                <a href="{{ route('block.index') }}" class="btn btn-info btn-sm"><i class="fa fa-mail-reply"></i> @lang('app.back')</a>
            </p>
            <input type="hidden" name="_method" value="PUT">
            {{ csrf_field() }}

            <div class="box">
                <div class="box-body">
                    <div class="form-group">
                        <label for="">@lang('blocks.block_code')</label>
                        <input type="text" class="form-control" name="block_code"
                               id="block_code" placeholder="" value="{{ old('block_code',$data->block_code ) }}"/>
                    </div>

                    <div class="form-group">
                        <label for="block_title">@lang('blocks.block_title')</label>
                        <input type="text" class="form-control" name="block_title"
                               id="block_title" placeholder="" value="{{ old('block_title',$data->block_title ) }}"/>
                    </div>



                    <div class="form-group">
                        <label for="">@lang('blocks.block_content')</label>
                        <textarea class="form-control editor" name="block_content" id="" cols="30"
                                  rows="10">{{ old('block_content',$data->block_content) }}</textarea>
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
