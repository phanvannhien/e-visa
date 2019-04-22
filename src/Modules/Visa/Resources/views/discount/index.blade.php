@extends('admin.layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>Visa discount</h1>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <div class="box">
            <div class="box-header">
                <a href="{{ route('visa_discount.create') }}" class="btn btn-success btn-sm">
                    <i class="fa fa-plus"></i> @lang('app.create')</a>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <td>Min - Max quantity</td>
                        <td>Discount ($)</td>
                        <td></td>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach( $data as $item )
                        <tr>
                        
                            <td class="text-danger"> 
                                {{ $item->quantity_min }} - {{ $item->quantity_max }}
                            </td>
                    
                            <td class="text-danger">
                                {{ $item->discount }}
                            </td>
                            <td>
                                <a href="{{ route('visa_discount.edit', $item->id ) }}" class="btn btn-sm btn-success">Edit</a>
                                <form class="form form-inline pull-left" method="post" action="{{ route('visa_discount.destroy', $item->id ) }}">
                                    @method('DELETE')
                                    @csrf
                                    <button onclick="return confirm('Are you sure')" type="submit" name="submit" class="btn btn-danger btn-sm">Delete</button>
                                </form>
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

