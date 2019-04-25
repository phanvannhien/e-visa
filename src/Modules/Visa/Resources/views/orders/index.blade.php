@extends('admin.layouts.app')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>@lang('visa::order.order')</h1>
    </section>
    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <div class="box">
            <div class="box-header">

                <form class="form-inline" action="{{ route('order.index') }}">
                    <div class="form-group">
                        <input type="text" name="user_id" value="{{ request('user_id') }}" class="form-control" placeholder="@lang('order.user_id')" />
                    </div>
                    <button class="btn btn-info" type="submit" name="submit" value="search"><i class="fa fa-filter"></i> @lang('app.filter')</button>
                </form>

            </div>
            <div class="box-body">
                <table class="table">
                    <thead>
                    <tr>
                        <th width="100">ID</th>
                        <th>@lang('visa::order.user')</th>
                        <th>@lang('visa::order.date_start')</th>
                        <th>@lang('visa::order.date_end')</th>
                        <td>Payment Status</td>
                        <th>@lang('visa::order.total')</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach( $data as $item )
                        <tr id="row-{{ $item->id }}">
                            <td>
                                {{ $item->id }}
                                
                            </td>
                            <td>
                                <a href="{{ route('user.show',$item->user_id ) }}">{{ $item->user->full_name }}</a> <br/>
                            </td>
                            <td>{{ $item->start }}</td>
                            <td>{{ $item->end }}</td>
                            <td><span class="label label-info">{{ $item->payment_status }}</span></td>
                            <td class="text-red">{{ config('visa.price_prefix').number_format($item->total) }}</td>
                            <td>

                                <a target="_blank" href="{{ route('pdf.view', [
                                    'id' => $item->id,
                                    'type' => $item->payment_status
                                ]) }}" class="btn btn-success btn-sm">
                                    View invoice {{ $item->payment_status }}</a>
                                <a href="{{ route('order.show', $item->id ) }}" class="btn btn-sm btn-info">
                                        <i class="fa fa-eye"></i> {{ trans('app.view') }}
                                    </a>

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
                    url: '{{ route("page.remove") }}' ,
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