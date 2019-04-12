@extends('admin.layouts.app')
@section('header')
    <style>
        .todo-list > .todo-list{ padding-left: 20px; margin-bottom: 2px }
    </style>

@stop
@section('content')
    @if( $selected_menu )
        @php
            $menuItems = $selected_menu->menu_items()->withDepth()->get()->toTree();
        @endphp
    @endif
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>{{ trans('menus.menu') }}</h1>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-4">
                        <form action="" class="form-inline">
                            @csrf
                            <input type="hidden" name="menu_code" value="{{  Request::get('menu') }}">
                            <label for="">@lang('menus.select_menu')</label>
                            <select name="menu" class="form-control" id="">
                                <option value="">@lang('app.select')</option>
                                @foreach( $menus as $menu )
                                    <option {{ ( Request::get('menu') == $menu->id ) ? 'selected' : '' }}
                                            value="{{ $menu->id }}">{{ $menu->menu_title }}</option>
                                @endforeach
                            </select>
                            <button type="submit" class="btn btn-primary" value="submit" name="select_menu">@lang('app.select')</button>
                            @if( Request::get('menu') )
                                <button id="btn-remove-menu"
                                    data-route-delete="{{ route('menu.destroy', Request::get('menu') ) }}"
                                    type="button" class="btn btn-danger"
                                    value="remove_menu" name="remove_menu"><i class="fa fa-trash"></i> @lang('app.delete')</button>
                            @endif
                        </form>
                    </div>
                    <div class="col-md-8">
                        <form class="form-inline" action="{{ route('menu.store') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="">@lang('menus.menu_code')</label>
                                <input type="text" name="menu_code" class="form-control" value="{{ old('menu_code') }}" />
                            </div>
                            <div class="form-group">
                                <label for="">@lang('menus.menu_title')</label>
                                <input type="text" name="menu_title" class="form-control" value="{{ old('menu_title') }}">
                            </div>
                            <button type="submit" name="submit_create_menu"  value="" class="btn btn-success"><i class="fa fa-save"></i> @lang('app.save')</button>
                        </form>
                    </div>
                </div>

                <hr/>

                @if( $selected_menu )
                <div class="row">
                    <div class="col-md-6">
                        <h4>@lang('app.create') @lang('menus.create_menu_item') </h4>
                        <form action="{{ route('menu_item.store') }}" method="post">
                            <input type="hidden" name="menu_id" value="{{ $selected_menu->id }}">
                            @csrf
                            <div class="form-group">
                                <label for="menu_title">@lang('menus.menu_title')</label>
                                <input type="text" class="form-control" name="menu_title" id="menu_title" value="{{ old('menu_title') }}" />
                            </div>
                            <div class="form-group">
                                <label for="menu_icon">@lang('menus.menu_icon')</label>

                                <input type="text" class="form-control icp icp-auto" name="menu_icon" id="menu_icon" value="{{ old('menu_icon') }}" />
                            </div>

                            <div class="form-group">
                                <label for="menu_link">@lang('menus.menu_link')</label>
                                <input type="text" class="form-control" name="menu_link" id="menu_link" value="{{ old('menu_link') }}"  />
                            </div>
                            <div class="form-group">
                                <label for="type">@lang('menus.type')</label>
                                <select class="form-control" name="type" id="type">
                                    <option  {{ old('type') == 'fly' ? 'selected' : '' }} value="fly">Fly</option>
                                    <option {{ old('type') == 'mega' ? 'selected' : '' }} value="mega">Mega</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="classes">@lang('menus.classes')</label>
                                <input type="text" class="form-control" name="classes" id="classes" value="{{ old('classes') }}"  />
                            </div>
                            <div class="form-group">
                                <label for="status">@lang('menus.status')</label>
                                <select class="form-control" name="status" id="status">
                                    <option {{ old('status') == 1 ? 'selected' : '' }} value="1">@lang('app.activate')</option>
                                    <option {{ old('status') == 0 ? 'selected' : '' }} value="0">@lang('app.deactivate')</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="parent">@lang('menus.parent')</label>
                                <select name="parent" id="parent" class="form-control">
                                    <option value="">Root</option>
                                    @if( $selected_menu )
                                        {!! App\Utils\Category::renderSelect($menuItems, old('parent'), 'menu_title' ) !!}
                                    @endif
                                </select>

                            </div>
                            <button class="btn btn-primary" type="submit" name="submit"><i class="fa fa-save"></i> @lang('app.save')</button>
                        </form>


                    </div>
                    <div class="col-md-6">
                        <h4>{{  $selected_menu ? $selected_menu->menu_title : ''  }}</h4>
                        @if( $selected_menu )
                            {!! App\Utils\Category::renderMenuTree($menuItems) !!}
                        @endif
                    </div>
                </div>
                @endif
                </div>
            </div>
        </div>


    </section>
    <!-- /.content -->
@stop

@section('footer')
    <script>

        $('#btn-remove-menu').on('click', function (e) {
            e.preventDefault();
            var that = this;
            swal({
                title: 'Bạn chắc chắn muốn xoá?',
                text: "Bạn không thể phục hồi",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Tiếp tục xoá!'
            }, function(){
                $.ajax({
                    url: $(that).attr('data-route-delete'),
                    method: 'DELETE',
                    dataType: 'json',
                    success: function( response ){
                        if( response.success ){
                            window.location.href = '/administration/module/menu' ;

                        }else{
                            swal("Thông báo!", response.msg , "error");
                        }

                    }
                });
            });
            return false;
        });

        $('.edit-menu').on('click', function (e) {
            e.preventDefault();
            $.ajax({
                url: $(this).attr('href'),
                method: 'GET',
                dataType: 'html',
                success: function( response ){
                    var modal = $('#app-modal');
                    modal.find('.modal-body').html('').append(response);
                    modal.modal();

                }
            })
        });

        $('.destroy-menu').on('click', function (e) {
            e.preventDefault();
            var that = this;
            swal({
                title: 'Bạn chắc chắn muốn xoá?',
                text: "Bạn không thể phục hồi",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Tiếp tục xoá!'
            }, function(){
                $.ajax({
                    url: $(that).attr('href'),
                    method: 'DELETE',
                    dataType: 'json',
                    data: {

                    },
                    success: function( response ){
                        if( response.success ){
                            swal({
                                title: "@lang('global.success')",
                                text: "@lang('global.success')",
                                type: "success",
                            }, function(){
                                window.location.reload();
                            });

                        }else{
                            swal("Thông báo!", response.msg , "error");
                        }

                    }
                });


            });



        });

        $(document).ready(function(){
            $('#app-modal').on('hidden.bs.modal', function () {
                window.location.reload();
            });

            $('.icp-auto').iconpicker();


        });


    </script>
@stop
