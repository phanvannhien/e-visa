@extends('admin.layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            @lang('category.category')
            <a class="btn btn-success btn-sm" href="{{route('categories.index')}}">{{ trans('app.create') }}</a>
        </h1>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-sm-6">
                <div class="box">
                    <div class="box-body">
                        <form action="{{ route('categories.store') }}" method="POST">
                            {{ csrf_field() }}

                            <div class="form-group">
                                <label for="">@lang('category.category_name')</label>
                                <input type="text" class="form-control"
                                       name="category_name" id="category_name"
                                       value="{{ old('category_name') }}" required/>
                            </div>
                            <div class="form-group">
                                <label for="">@lang('category.category_description')</label>
                                <textarea id="" name="description" id="category_description" class="form-control editor"
                                          cols="30" rows="5">{{ old('description' ) }}</textarea>
                            </div>
    
                            <div class="form-group">
                                <label for="">@lang('category.category_image')</label><br>
                                <span class="input-group-btn">
                                     <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
                                       <i class="fa fa-picture-o"></i> Choose
                                     </a>
                                </span><br>
                                <img id="holder" class="img-responsive" style="max-width: 200px" src="" alt="">
                                <input id="thumbnail" class="form-control" readonly type="hidden" name="image">

                            </div>

                            <div class="form-group">
                                <label for="">@lang('category.category_parent')</label>
                                <select name="parent_id" class="form-control" id="">
                                    <option value="0">@lang('app.select')</option>
                                    {!! \App\Utils\Category::renderSelect($data) !!}
                                </select>

                            </div>

                            <div class="form-group">
                                <label for="">@lang('app.status')</label>
                                <select name="status" id="" class="form-control">
                                    <option value="1">@lang('app.activate')</option>
                                    <option value="0">@lang('app.deactivate')</option>
                                </select>
                            </div>
                            <hr>
                            <div class="form-group">
                                <label for="">@lang('app.meta_title')</label>
                                <textarea name="meta_title" id="meta_title" class="form-control"
                                          cols="30" rows="5">{{ old('meta_title' ) }}</textarea>
                            </div>

                            <div class="form-group">
                                <label for="">{{ trans('app.meta_keyword') }}</label>
                                <input type="text" name="meta_keyword"  class="form-control" value="{{  old('meta_keyword' ) }}">
                            </div>

                            <div class="form-group">
                                <label for="meta_description">@lang('app.meta_description')</label>
                                <textarea id="meta_description" name="meta_description" class="form-control"
                                          cols="30" rows="5">{{ old('meta_description' ) }}</textarea>
                            </div>

                            <button class="btn btn-success" type="submit" name="submit">
                                <i class="fa fa-save"></i> @lang('app.save')</button>


                        </form>

                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="box">
                    <div class="box-body">
                        {!! \App\Utils\Category::renderAdminHtml( $data, 'categories.edit','categories.destroy','category.product','admin-product-category' ) !!}
                    </div>
                </div>
            </div>
        </div>





    </section>
    <!-- /.content -->

@stop
@section('footer')
    <script>
        $(document).ready(function () {
           $('body').on('click','.admin-product-category .btn-delete', function (e) {
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
                       dataType: 'json',
                       url: $(that).attr('href'),
                       method: 'DELETE',
                       success: function(response){
                           if( response.success ){
                               window.location.href = '{{ route('categories.index') }}' ;
                           }else{
                               swal("Thông báo!", response.msg , "error");
                           }
                       }
                   });
               });



           });
        });
    </script>
@stop
