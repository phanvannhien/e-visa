
@extends('admin.layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>@lang('product.product')</h1>
    </section>
    <!-- Main content -->
    <section class="content">

        <form method="get" action="{{ route('product.create') }}" class="">
            <div class="box">
                <div class="box-body">
                    <div class="form-group">
                        <label for="product_type">@lang('product.product_type')</label>
                        <select onchange="$(this).closest('form').submit()" name="product_type" id="product_type" class="form-control">
                            @foreach( config('product')['type'] as $type )
                                <option {{ Request::get('product_type') == $type ? 'selected' : '' }} value="{{ $type }}">{{ strtoupper($type) }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="slug">@lang('type.type')</label>
                        <select onchange="$(this).closest('form').submit()" name="type_id" id="type_id" class="form-control">
                            @foreach( $types as $type )
                                <option {{ Request::get('type_id') == $type->id ? 'selected' : '' }} value="{{ $type->id }}">{{ $type->type_name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-success" value="set_type" name="submit"> @lang('app.next')</button>
        </form>


        <!-- /.box -->
    </section>
    <!-- /.content -->
@stop