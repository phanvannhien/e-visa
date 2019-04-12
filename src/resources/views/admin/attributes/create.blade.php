@extends('admin.layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>@lang('attribute.attribute')</h1>
    </section>

    <!-- Main content -->
    <section class="content">

        <form action="{{ route('attribute.store') }}" method="POST">
            {{ csrf_field() }}
            <p class="clearfix">
                <button class="btn btn-success" type="submit" name="submit">
                    <i class="fa fa-save"></i> @lang('app.save')</button>
                <a class="btn btn-success btn-sm" href="{{route('attribute.index')}}">{{ trans('app.create') }}</a>
            </p>
            {{ csrf_field() }}
            <div class="box">
                <div class="box-header with-border">
                    <h4 class="box-title">@lang('attribute.attribute')</h4>
                </div>
                <div class="box-body">

                    <div class="form-group">
                        <label for="">@lang('attribute.code')</label>
                        <input type="text" class="form-control"
                               name="code" id="code" value="{{ old('code' ) }}" required/>
                    </div>

                    <div class="form-group">
                        <label for="">@lang('attribute.attribute_name')</label>
                        <input type="text" class="form-control"
                               name="attribute_name" id="attribute_name" value="{{ old('attribute_name' ) }}" required/>
                    </div>

                    <div class="form-group">
                        <label for="">@lang('attribute.admin_name')</label>
                        <input type="text" class="form-control"
                               name="admin_name" id="admin_name" value="{{ old('admin_name' ) }}" required/>
                    </div>

                    <div class="form-group">
                        <label for="">@lang('attribute.type')</label>
                        <select name="type" id="attribute-type" class="form-control">
                            @foreach( config('attribute')['type'] as $type  )
                                <option value="{{ $type }}">{{ $type }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>



            <div id="attribute-option-wrap" class="box" style="display: none">
                <div class="box-header with-border">
                    <h4 class="box-title">@lang('attribute.options')</h4>
                </div>
                <div class="box-body">
                    <div  class="">
                        <table class="table-striped table">
                            <thead>
                            <tr>
                                <th width="200">@lang('attribute.option_admin_name')</th>
                                <th for="">@lang('attribute.option_value')</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody id="attribute-options">
                            <tr class="attribute-option-row" data-row="0">
                                <td>
                                    <input type="text" class="form-control option_admin_name"
                                           name="options[0][option_admin_name]" id="option_admin_name" value="{{ old('option_admin_name' ) }}" />
                                </td>

                                <td class="col-sm-2">
                                    <input type="text" class="form-control option_value"
                                           name="options[0][option_value]" value="{{ old('option_value' ) }}" />
                                </td>

                                <td>
                                    <button type="button" class="btn btn-success btn-add" >
                                        <span class="fa fa-plus" aria-hidden="true"></span>
                                    </button>
                                </td>
                            </tr>
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
                               name="validation" id="validation" value="{{ old('validation' ) }}" required/>

                    </div>

                    <div class="form-group">
                        <label for="">@lang('attribute.is_required')</label>
                        <select name="is_required" id="" class="form-control">
                            <option value="1">@lang('app.yes')</option>
                            <option value="0">@lang('app.no')</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="">@lang('attribute.is_unique')</label>
                        <select name="is_unique" id="" class="form-control">
                            <option value="1">@lang('app.yes')</option>
                            <option value="0">@lang('app.no')</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="">@lang('attribute.is_filterable')</label>
                        <select name="is_filterable" id="" class="form-control">
                            <option value="1">@lang('app.yes')</option>
                            <option value="0">@lang('app.no')</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="">@lang('attribute.is_configurable')</label>
                        <select name="is_configurable" id="" class="form-control">
                            <option value="1">@lang('app.yes')</option>
                            <option value="0">@lang('app.no')</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="">@lang('attribute.is_visible_on_front')</label>
                        <select name="is_visible_on_front" id="" class="form-control">
                            <option value="1">@lang('app.yes')</option>
                            <option value="0">@lang('app.no')</option>
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