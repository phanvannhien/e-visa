
@extends('admin.layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">

        <h1>@lang('app.create')</h1>
    </section>

    <!-- Main content -->
    <section class="content">
        <form method="POST" action="{{ route('store.store') }}" class="">
            <p class="clearfix">
                <button type="submit" name="submit" class="btn btn-sm btn-success">
                    <i class="fa fa-save"></i> @lang('app.save')
                </button>
                <a href="{{ route('store.index') }}" class="btn btn-info btn-sm">
                    <i class="fa fa-mail-reply"></i> @lang('app.back')</a>
            </p>
            {{ csrf_field() }}
            <div class="row">
                <div class="col-sm-9">
                    <div class="box">
                        <div class="box-body">
                            <div class="form-group">
                                <label for="">@lang('inventory.name')</label>
                                <input type="text" class="form-control" name="name" id="name" placeholder="" value="{{ old('name') }}"/>
                            </div>

                            <div class="form-group">
                                <label for="">@lang('inventory.contact_name')</label>
                                <input type="text" class="form-control" name="contact_name" id="contact_name" placeholder="" value="{{ old('contact_name') }}"/>
                            </div>
                            <div class="form-group">
                                <label for="">@lang('inventory.contact_phone')</label>
                                <input type="text" class="form-control" name="contact_phone" id="contact_phone" placeholder="" value="{{ old('contact_phone') }}"/>
                            </div>
                            <div class="form-group">
                                <label for="">@lang('inventory.contact_fax')</label>
                                <input type="text" class="form-control" name="contact_fax" id="contact_fax" placeholder="" value="{{ old('contact_fax') }}"/>
                            </div>
                            <div class="form-group">
                                <label for="">@lang('inventory.contact_email')</label>
                                <input type="email" class="form-control" name="contact_email" id="contact_email" placeholder="" value="{{ old('contact_email') }}"/>
                            </div>
                            <div class="form-group">
                                <label for="lat">@lang('inventory.lat')</label>
                                <input type="text" class="form-control" name="lat" id="lat" placeholder="" value="{{ old('lat') }}"/>
                            </div>
                            <div class="form-group">
                                <label for="lng">@lang('inventory.lng')</label>
                                <input type="text" class="form-control" name="lng" id="lng" placeholder="" value="{{ old('lng') }}"/>
                            </div>

                            <div class="form-group">
                                <label for="">@lang('inventory.description')</label>
                                <textarea class="form-control" name="description" id="description" cols="30" rows="10">{{ old('description') }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="address">@lang('inventory.address')</label>
                                <input type="text" class="form-control" name="address" id="address" placeholder="" value="{{ old('address') }}"/>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <select id="sl-cities" name="matp" class="form-control select2">
                                            <option value="">Chọn Tỉnh/ Thành</option>
                                            @foreach( \App\Models\Cities::select('matp','name')->orderBy('name')->get() as $tp )
                                                <option value="{{ $tp->matp }}">{{ $tp->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-sm-4">
                                        <select id="sl-district" name="maqh" class="form-control select2">
                                        </select>
                                    </div>
                                    <div class="col-sm-4">

                                        <select id="sl-ward" name="xaid" class="form-control select2">
                                        </select>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="box">
                        <div class="box-body">
                            <div class="form-group">
                                <select name="status" id="status" class="form-control">
                                    <option value="1">@lang('app.activate')</option>
                                    <option value="0">@lang('app.deactivate')</option>
                                </select>
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
@stop
