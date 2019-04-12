@extends('admin.layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>@lang('attribute.attribute')</h1>
    </section>

    <!-- Main content -->
    <section class="content">

        <form action="{{ route('attribute.update', $data->id ) }}" method="POST">
            <input type="hidden" name="_method" value="PUT">
            {{ csrf_field() }}
            <p class="clearfix">
                <button type="submit" name="submit" class="btn btn-sm btn-success">
                    <i class="fa fa-save"></i> @lang('app.save')
                </button>
                <a href="{{ route('attribute.create') }}" class="btn btn-success btn-sm">
                    <i class="fa fa-plus"></i> @lang('app.create')</a>
                <a href="{{ route('attribute.index') }}" class="btn btn-info btn-sm"><i class="fa fa-mail-reply"></i> @lang('app.back')</a>
            </p>

            <div class="box">
                <div class="box-header with-border">
                    <h4 class="box-title">@lang('attribute.attribute')</h4>
                </div>
                <div class="box-body">

                    <div class="form-group">
                        <label for="">@lang('attribute.attribute_name') </label>
                        <input type="text" class="form-control"
                               name="attribute_name" id="attribute_name" value="{{ old('attribute_name', $data->attribute_name  ) }}" required/>
                    </div>

                    <div class="form-group">
                        <label for="">@lang('attribute.code')</label>
                        <input type="text" class="form-control"
                               name="code" id="code" value="{{ old('code', $data->code ) }}" readonly/>
                    </div>

                    <div class="form-group">
                        <label for="">@lang('attribute.admin_name')</label>
                        <input type="text" class="form-control"
                               name="admin_name" id="admin_name" value="{{ old('admin_name', $data->admin_name ) }}" required/>
                    </div>

                    <div class="form-group">
                        <label for="">@lang('attribute.type')</label>
                        <select name="type" id="attribute-type" class="form-control">
                            @foreach( config('attribute')['type'] as $type  )
                                <option {{ $data->type == $type ? 'selected' : '' }} value="{{ $type }}">{{ $type }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>

            <div id="attribute-option-wrap" class="box" style="display: {{ $data->type == 'select' ? 'block' : 'none' }};">
                <div class="box-header with-border">
                    <h4 class="box-title">@lang('attribute.options')</h4>
                </div>
                <div class="box-body">
                    <div  class="">
                        <table class="table-striped table">
                            <thead>
                            <tr>
                                <th width="200">@lang('attribute.option_admin_name')</th>
                                <th for="">@lang('attribute.option_name')</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody id="attribute-options">
                            <?php $i = 0 ?>
                            @if( $data->options->count() )
                                <?php $options = old('options', $data->options) ?>
                                @foreach( $options as $option )
                                <tr class="attribute-option-row" data-row="{{ $i }}">
                                    <td>
                                        <input type="text" class="form-control option_admin_name"
                                               name="options[{{ $i }}][option_admin_name]" id="option_admin_name" value="{{ $option->admin_name }}" />
                                    </td>

                                    <td class="col-sm-2">
                                        <input type="text" class="form-control option_value"
                                               name="options[{{ $i }}][option_value]" value="{{ $option->option_value }}" />
                                    </td>

                                    <td>
                                        <button type="button" class="btn btn-success btn-add" >
                                            <span class="fa fa-plus" aria-hidden="true"></span>
                                        </button>
                                    </td>
                                </tr>
                                <?php $i++ ?>
                                    @endforeach
                            @else
                                <tr class="attribute-option-row" data-row="{{ $i }}">
                                    <td>
                                        <input type="text" class="form-control option_admin_name"
                                               name="options[{{ $i }}][option_admin_name]" id="option_admin_name" value="" />
                                    </td>

                                    <td class="col-sm-2">
                                        <input type="text" class="form-control option_value"
                                               name="options[{{ $i }}][option_value]" value="" />
                                    </td>

                                    <td>
                                        <button type="button" class="btn btn-success btn-add" >
                                            <span class="fa fa-plus" aria-hidden="true"></span>
                                        </button>
                                    </td>
                                </tr>
                            @endif
                            </tbody>
                        </table>


                    </div>
                </div>
            </div>


            <div class="box">
                <div class="box-header with-border">
                    <h4 class="box-title">@lang('attribute.config')</h4>
                </div>
                <div class="box-body">
                    <div class="form-group">
                        <label for="">@lang('attribute.validation')</label>
                        <input type="text" class="form-control"
                               name="validation" id="validation" value="{{ old('validation', $data->validation ) }}" />

                    </div>

                    <div class="form-group">
                        <label for="">@lang('attribute.is_required')</label>
                        <select name="is_required" id="" class="form-control">
                            <option {{ old('is_required',$data->is_required) ? 'selected' : '' }} value="1">@lang('app.yes')</option>
                            <option {{ !old('is_required',$data->is_required) ? 'selected' : '' }} value="0">@lang('app.no')</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="">@lang('attribute.is_unique')</label>
                        <select name="is_unique" id="" class="form-control">
                            <option {{ old('is_unique',$data->is_unique) ? 'selected' : '' }} value="1">@lang('app.yes')</option>
                            <option {{ !old('is_unique',$data->is_unique) ? 'selected' : '' }} value="0">@lang('app.no')</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="">@lang('attribute.is_filterable')</label>
                        <select name="is_filterable" id="" class="form-control">
                            <option {{ old('is_filterable',$data->is_filterable) ? 'selected' : '' }} value="1">@lang('app.yes')</option>
                            <option {{ !old('is_filterable',$data->is_filterable) ? 'selected' : '' }} value="0">@lang('app.no')</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="">@lang('attribute.is_configurable')</label>
                        <select name="is_configurable" id="" class="form-control">
                            <option {{ old('is_configurable',$data->is_filterable) ? 'selected' : '' }} value="1">@lang('app.yes')</option>
                            <option {{ !old('is_configurable',$data->is_filterable) ? 'selected' : '' }} value="0">@lang('app.no')</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="">@lang('attribute.is_visible_on_front')</label>
                        <select name="is_visible_on_front" id="" class="form-control">
                            <option {{ old('is_visible_on_front',$data->is_visible_on_front) ? 'selected' : '' }} value="1">@lang('app.yes')</option>
                            <option {{ !old('is_visible_on_front',$data->is_visible_on_front) ? 'selected' : '' }} value="0">@lang('app.no')</option>
                        </select>
                    </div>
                </div>
            </div>


        </form>

    </section>
    <!-- /.content -->

@stop


@section('footer')

    <script>

        $(document).ready(function () {
            $('#attribute-type').on('change', function (e) {
                if( $(this).val() == 'select' ){
                    $('#attribute-option-wrap').slideDown();
                }else{
                    $('#attribute-option-wrap').slideUp();
                }
            })
        });

        $(document).on('click', '.btn-add', function(e)
        {
            e.preventDefault();

            var controlForm = $('#attribute-options'),
                currentEntry = $('.attribute-option-row:last'),
                newEntry = $(currentEntry.clone());

            var num = parseInt( $(currentEntry).attr('data-row') ) + 1;
            $(newEntry).attr('data-row',num);

            newEntry.find('.option_admin_name').attr('name','options['+num+'][option_admin_name]');

            newEntry.find('.option_value').attr('name','options['+num+'][option_value]').val('');


            newEntry.appendTo(controlForm);

            controlForm.find('.btn-add:not(:last)')
                .removeClass('btn-default').addClass('btn-danger')
                .removeClass('btn-add').addClass('btn-remove')
                .html('<span class="glyphicon glyphicon-minus" aria-hidden="true"></span>');
        }).on('click', '.btn-remove', function(e)
        {
            $(this).parents('.attribute-option-row:first').remove();
            e.preventDefault();
            return false;
        });
    </script>
@endsection