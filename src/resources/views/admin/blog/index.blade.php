@extends('admin.layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            @lang('blog.blog')
        </h1>
    </section>

    <!-- Main content -->
    <section class="content">




        <!-- Default box -->
        <div class="box">
            <div class="box-header with-border">
                <p>
                    <a href="#" class="btn btn-danger btn-sm to-trash">
                        <i class="fa fa-trash"></i> @lang('app.delete')</a>

                    <a href="{{ route('blog.create') }}" class="btn btn-sm btn-success">
                        <i class="fa fa-plus"></i> @lang('app.create')</a>
                </p>
                <form action="" class="form-inline">
                    <div class="form-group">
                        <input type="text" name="post_title"
                               placeholder="@lang('blog.blog_title')"
                               value="{{ Request::get('post_title') }}"
                               class="form-control">
                    </div>

                    <div class="form-group">
                        <select name="category" class="form-control" id="">
                            <option value="">@lang('app.select') @lang('category.category')</option>
                            {!! \App\Utils\Category::renderSelect( $categories , Request::get('category') ) !!}
                        </select>
                    </div>

                    <button type="submit" value="filter" name="filter" class="btn btn-primary">
                        <i class="fa fa-search"></i> {{ trans('app.filter') }}</button>
                </form>


            </div>
            <div class="box-body">
                <table class="table">
                    <thead>
                    <tr>
                        <th width="50"></th>
                        <th width="80">Image</th>
                        <th>{{ trans('blog.blog_title') }}</th>
                        <th>{{ trans('blog.blog_status') }}</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach( $data as $item )
                        <tr id="row-{{ $item->id }}">
                            <td><input type="checkbox" class="data-id i-checks" name="id[]" value="{{ $item->id }}"></td>
                            <td>
                                <img src="{{ $item->blog_thumbnail }}" alt="img-thumbnail" width="80">
                            </td>
                            <td>
                                <a href="{{ route('blog.edit', $item->id) }}">{{ $item->blog_title }}</a> <br>
                                <a href="{{ route('blog.edit', $item->id ) }}" class="">
                                    <i class="fa fa-edit"></i> {{ trans('app.edit') }}</a> |
                                <a href="{{ route('blog.destroy', $item->id ) }}" class="">
                                    <i class="fa fa-trash-o"></i> {{ trans('app.delete') }}</a> |
                                <a target="_blank" href="{{ route('blog.detail', [ 'slug' => $item->slug, 'id' => $item->id ]) }}">
                                    <i class="fa fa-eye"></i> Xem</a>

                            </td>
                            <td><span class="label {{ ($item->blog_status == 1) ? 'label-success' : 'label-warning' }}">
                                    {{ ($item->blog_status == 1) ?  trans('app.show')  : trans('app.hide') }}
                                </span>
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

            var ids = $('.data-id:checked').map(function(){
                return $(this).val();
            });

            if( ids.length <= 0 ){
                swal("Thông báo!", "Chọn dữ liệu để xoá", "warning");
                return false;
            }

            swal({
                title: 'Bạn chắc chắn muốn xoá?',
                text: "Bạn không thể phục hồi",
                type: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Tiếp tục xoá!'
            }, function(){

                $.ajax({
                    url: '{{ route("blog.remove") }}' ,
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