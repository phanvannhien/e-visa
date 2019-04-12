@extends('admin.layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>@lang('product.product') </h1>
    </section>
    <!-- Main content -->
    <section class="content">
        <form action="{{ route('product.index') }}" class="form-inline">
        <!-- Default box -->
            <div class="box">
                <div class="box-header">
                    <a href="#" class="btn btn-danger btn-sm to-trash">
                        <i class="fa fa-trash-o"></i> @lang('app.delete')</a>
                    <a href="{{ route('product.create') }}" class="btn btn-success btn-sm">
                        <i class="fa fa-plus"></i> @lang('app.create')</a>
                </div>
                <div class="box-body">
                        <div class="form-group">
                            <input type="text" name="title" value="{{ Request::get('title') }}" class="form-control" placeholder="@lang('product.title')">
                        </div>
                        <div class="form-group">
                            <select name="category" class="form-control" id="">
                                <option value="">@lang('app.select') @lang('category.category')</option>
                                {!! \App\Utils\Category::renderSelect( $categories , Request::get('category') ) !!}
                            </select>

                        </div>
                        <button type="submit" value="filter" name="filter" class="btn btn-primary"><i class="fa fa-search"></i> {{ trans('app.filter') }}</button>

                        <table class="table">
                            <thead>
                            <tr>
                                <td><input type="checkbox" name="ids[]" class="i-checks check-all"></td>
                                <td>@lang('product.title')</td>
                                <td>@lang('product.thumbnail')</td>
                                <td>@lang('product.category')</td>

                            </tr>
                            </thead>
                            <tbody>
                            @foreach( $data as $item )
                                <tr id="row-{{ $item->id }}" >
                                    <td><input type="checkbox" class="data-id i-checks" name="id[]" value="{{ $item->id }}"></td>
                                    <td>
                                        <a href="#">{{ $item->title }}</a>
                                        <br>
                                        <a href="{{ route('product.edit', $item->id ) }}" class="">
                                                <i class="fa fa-edit"></i> {{ trans('app.edit') }}</a>

                                    </td>
                                    <td><img src="{{ $item->thumbnail }}" width="50" alt=""></td>
                                    <td>
                                        {!! $item->getCategories() !!}
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>

                </div>
                <div class="box-footer text-center">
                    <div class="clearfix">
                        @if( $data && count($data))
                            <p class="text-right">@lang('app.showing') {{$data->firstItem()}}-{{$data->lastItem()}} @lang('app.of') {{$data->total()}}
                                @lang('app.results')</p>
                        @endif
                    </div>
                </div>

            </div>
            <!-- /.box -->
            <div class="text-center">
                {!! $data->appends(request()->input())->links() !!}
            </div>
        </form>
    </section>
    <!-- /.content -->

@stop

@section('footer')
    <script>
        $(function(){

            $('.check-all').on('ifToggled', function(e){
                $('.data-id').iCheck('toggle');
            });
        });

        $('.to-trash').on('click', function(e){
            e.preventDefault();

            swal({
                title: 'Bạn chắc chắn muốn xoá?',
                text: "Bạn không thể phục hồi",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Tiếp tục xoá!'
            }, function(){
                var ids = $('.data-id:checked').map(function(){
                    return $(this).val();
                });

                if( ids.length <= 0 ){
                    swal("Thông báo!", "Chọn dữ liệu để xoá", "warning");
                    return false;
                }

                $.ajax({
                    url: '{{ route("product.remove") }}' ,
                    type: 'POST',
                    data: { id: ids.get() },
                    beforeSend: function(){
                    },
                    success: function( res ){
                        if( res.success ){
                            toastr.success( res.msg , '{{ config('app.name') }}')
                            ids.get().map( function(id){
                                $('#row-'+id).remove();
                            })
                        }else{
                            swal("Thông báo!", res.msg , "error");
                        }

                    }
                });
            });



        })
    </script>
@stop