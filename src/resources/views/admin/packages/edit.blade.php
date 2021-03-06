
@extends('admin.layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>Tạo gói bậc thành viên</h1>
    </section>

    <!-- Main content -->
    <section class="content">
        <form method="POST" action="{{ route('package.update', $package->package_id ) }}" id="level-form" class="">
            <input type="hidden" name="_method" value="PUT">
            {{ csrf_field() }}
            <div class="row">
                <div class="col-sm-9">
                    <div class="box">
                        <div class="box-body">

                            <div class="form-group">
                                <label for="package_name">Tên gói</label>
                                <input type="text" class="form-control" name="package_name" id="package_name" value="{{ $package->package_name }}" required/>
                            </div>
                            <div class="form-group">
                                <label for="">Giá gói <span class="text-red">*</span></label>
                                <input type="text" class="form-control" name="package_price" id="package_price" value="{{ $package->package_price }}" required/>
                            </div>
                            <div class="form-group">
                                <label for="">Màu sắc gói <span class="text-red">*</span></label>
                                <input type="text" class="form-control colorpicker" style="background-color: {{ $package->package_color }}"
                                       name="package_color" id="package_color" value="{{ $package->package_color }}" required/>
                            </div>


                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="box">
                        <div class="box-body">
                            <div class="form-group">
                                <label for="">Trạng thái</label>
                                <select name="status" id="" class="form-control">
                                    <option {{ ($package->status == 1) ? 'selected' : '' }} value="1">Hoạt động</option>
                                    <option {{ ($package->status == 0) ? 'selected' : '' }} value="0">Khoá hoạt động</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <button type="submit" name="submit" class="btn btn-lg btn-block btn-success">
                                    <i class="fa fa-save"></i> LƯU LẠI
                                </button>
                            </div>
                            <div class="form-group">
                                <a href="{{ route('package.index') }}" class="btn btn-info btn-block btn-lg "><i class="fa fa-mail-reply"></i> Quay lại</a>
                            </div>
                        </div>
                    </div>
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
