
@extends('admin.layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>@lang('app.create') @lang('email-template.template')</h1>
    </section>

    <!-- Main content -->
    <section class="content">
        <form method="POST" action="{{ route('email-template.store') }}" id="page-form" class="">
            {{ csrf_field() }}
            <p class="clearfix">
                <a href="{{ route('email-template.index') }}" class="btn btn-info btn-sm">
                    <i class="fa fa-angle-left"></i> @lang('app.back')</a>

                <a href="{{ route('email-template.create') }}" class="btn btn-success btn-sm">
                    <i class="fa fa-plus"></i> @lang('app.create')</a>

            </p>


            <div class="box">
                <div class="box-body">
                    <div class="form-group">
                        <label for="template_name">@lang('email_template.template_name') <span class="text-red">*</span></label>
                        <input type="text" class="form-control" name="template_name" id="template_name" value="{{ old('template_name') }}" required/>
                    </div>

                    <div class="form-group">
                        <label for="template_group">@lang('email_template.template_group')</label>
                        <select name="template_group" class="form-control" id="template_group">
                            @foreach( config('configuration.email_template_group') as $key => $text )
                                <option value="{{ $key }}">{{ $text }}</option>
                                @endforeach
                        </select>

                    </div>

                    <div class="form-group">
                        <label for="template_class">@lang('email_template.template_class')</label>
                        <input type="text" class="form-control" name="template_class" id="template_class" value="{{ old('template_class') }}" required/>
                    </div>

                    <div class="form-group">
                        <label for="mail_from">@lang('email_template.mail_from')</label>
                        <input type="email" class="form-control" name="mail_from" id="mail_from" value="{{ old('mail_from') }}" required/>
                    </div>

                    <div class="form-group">
                        <label for="mail_cc">@lang('email_template.mail_cc')</label>
                        <input type="email" class="form-control" name="mail_cc" id="mail_cc" value="{{ old('mail_cc') }}" />
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
    <script>
        $(document).ready(function(){
            $('.colorpicker').colorpicker().on('changeColor', function(e) {
                $(this)[0].style.backgroundColor = e.color.toString('rgba');
            });
        })
    </script>
@stop
