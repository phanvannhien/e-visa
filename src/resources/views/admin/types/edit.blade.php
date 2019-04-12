
@extends('admin.layouts.app')

@section('content')

    @php
        $group_attributes = [];

    @endphp

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>@lang('app.edit') </h1>
    </section>

    <!-- Main content -->
    <section class="content">


            <p class="clearfix">

                <a href="{{ route('type.create') }}" class="btn btn-success btn-sm ">
                    <i class="fa fa-plus"></i> @lang('app.create')</a>
                <a href="{{ route('type.index') }}" class="btn btn-info btn-sm ">
                    <i class="fa fa-mail-reply"></i> @lang('app.back')</a>

            </p>

            <div class="row">

                <div class="col-sm-4">
                    <div class="box">
                        <div class="box-header">
                            <h4 class="box-title">@lang('type.type')</h4>
                        </div>
                        <div class="box-body">
                            <form method="POST" action="{{ route('type.update', $data->id ) }}" id="" class="">
                                <input type="hidden" name="_method" value="PUT">

                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="">@lang('type.type_name')</label>
                                    <input type="text" class="form-control" name="type_name" id="type_name" placeholder="" value="{{ $data->type_name }}"/>
                                </div>
                                <button type="submit" name="submit" value="save" class="btn btn-sm btn-success">
                                    <i class="fa fa-save"></i> @lang('app.save')
                                </button>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="box">
                        <div class="box-header">
                            <h4 class="box-title">@lang('type.attributes')</h4>
                        </div>
                        <div class="box-body">
                            <form method="POST" action="{{ route('type.update', $data->id ) }}" id="" class="">
                                <input type="hidden" name="_method" value="PUT">

                                {{ csrf_field() }}
                                <table class="table table-striped">
                                    <tbody>

                                        <tr>
                                            <td>
                                                @if( $attributes = $data->attributes()
                                                    ->select('attributes.id','attributes.code','attributes.type')
                                                    ->get() )
                                                    <table  class="table table-bordered">
                                                        <thead>
                                                            <tr>
                                                                <th width="150">@lang('attribute.code')</th>
                                                                <th width="150">@lang('attribute.type')</th>
                                                                <th></th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>

                                                        @foreach( $attributes as $attribute )
                                                            @php array_push( $group_attributes, $attribute->id ) @endphp
                                                            <tr class="">
                                                                <td width="150">{{ strtoupper($attribute->code) }}</td>
                                                                <td width="150">{{ $attribute->type }}</td>
                                                                <td>
                                                                    <input type="hidden" name="attribute_id" value="{{ $attribute->id }}">
                                                                    <button type="submit" name="submit" value="remove_attribute_from_type" class="btn btn-sm btn-danger">
                                                                        <i class="fa fa-trash-o"></i>
                                                                    </button>
                                                                </td>
                                                            </tr>
                                                        @endforeach

                                                        </tbody>


                                                    </table>
                                                @endif
                                            </td>

                                        </tr>
                                    </tbody>
                                </table>
                            </form>

                        </div>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="box">
                        <div class="box-header">
                            <a href="{{ route('attribute.create') }}" class="btn btn-sm btn-success pull-right">
                                <i class="fa fa-plus"></i>
                                @lang('app.create') @lang('attribute.attribute')
                            </a>
                            <h4 class="box-title">@lang('type.attributes_unsigned')</h4>
                        </div>
                        <div class="box-body">
                            <form method="POST" action="{{ route('type.update', $data->id ) }}" id="" class="">
                                <input type="hidden" name="_method" value="PUT">

                                {{ csrf_field() }}
                                <?php $attr_unsigned = \App\Models\Attribute::whereNotIn( 'id', $group_attributes )
                                    ->select('attributes.id','attributes.code','attributes.type')->get(); ?>
                                <div class="alert alert-success">
                                    @lang('type.select_attribute_to_group')
                                </div>

                                <div class="form-group">
                                    <label for="">@lang('attribute.attribute')</label>
                                    <select name="attribute_id" id="" class="form-control">
                                        @foreach( $attr_unsigned as $attr )
                                            <option value="{{ $attr->id }}">{{ strtoupper($attr->code).' - '.$attr->type  }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <button type="submit" name="submit" value="add_attribute_to_type" class="btn btn-success">
                                    <i class="fa fa-save"></i> @lang('app.save')
                                </button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>



        <!-- /.box -->
    </section>
    <!-- /.content -->

@stop

@section('footer')
    <script>

    </script>
@stop
