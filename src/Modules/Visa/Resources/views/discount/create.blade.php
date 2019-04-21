
@extends('admin.layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>@lang('app.create') Visa discount</h1>
    </section>
    <!-- Main content -->
    <section class="content">
        <form method="POST" action="{{ route('visa_discount.store') }}" class="">
            <p class="clearfix">
                <a href="{{ route('visa_discount.index') }}" class="btn btn-info btn-sm">
                    <i class="fa fa-backward"></i> @lang('app.back')</a>
            </p>
            {{ csrf_field() }}

            <div class="box">
                <div class="box-body">
                 

                    <div class="form-group">
                        <label for="quantity_min">Min quantity</label>
                        <input type="text" class="form-control"
                               name="quantity_min"
                               id="quantity_min"
                               value="{{ old('quantity_min') }}" />
                    </div>

                    <div class="form-group">
                        <label for="quantity_max">Max quantity</label>
                        <input type="text" class="form-control"
                                name="quantity_max"
                                id="quantity_max"
                                value="{{ old('quantity_max') }}" />
                    </div>
                    
                    <div class="form-group">
                        <label for="discount">Discount ($)</label>
                        <input type="text" class="form-control"
                                name="discount"
                                id="discount"
                                value="{{ old('discount') }}" />
                    </div>


                    <button type="submit" name="submit" class="btn btn-success btn-sm">
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
