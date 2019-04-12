@extends('theme.layouts.app')

@section('main')
    <div id="breadcrumbs">
        <div class="container">
            {{ Breadcrumbs::render('customer.address') }}
        </div>
    </div>
    <section class="mb-5">
        <div class="container">
            <div class="row align-items-stretch">
                <div class="col-md-4">
                    @include('theme.customers.partials.sidebar')
                </div>
                <div id="primary" class="col-md-8">
                    <div id="primary-inner" class="p-4 bg-white">
                        @include('theme.partials.messages')
                        <div class="">
                            <form action="{{ route('customer.address.update', $address->id ) }}" method="post">
                                @csrf
                                <div class="form-group">
                                    <lalel>@lang('customer.full_name') <span class="text-danger">*</span></lalel>
                                    <input type="text" name="full_name" class="form-control" value="{{ old('full_name', $address->full_name ) }}">
                                </div>
                                <div class="form-group">
                                    <lalel>@lang('customer.phone') <span class="text-danger">*</span></lalel>
                                    <input type="tel" name="phone" class="form-control" value="{{ old('phone', $address->phone) }}">
                                </div>
                                <div class="form-group">
                                    <lalel>@lang('customer.email') <span class="text-danger">*</span></lalel>
                                    <input type="email" name="email" class="form-control" value="{{ old('email', $address->email) }}">
                                </div>
                                <div class="form-group">
                                    <lalel>@lang('customer.address') <span class="text-danger">*</span></lalel>
                                    <input type="text" name="address" class="form-control" value="{{ old('address', $address->address) }}">
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <lalel>@lang('order.matp') <span class="text-danger">*</span></lalel>
                                            <select id="sl-cities" name="matp" class="form-control">
                                                @foreach( \App\Models\Cities::select('matp','name')->orderBy('name')->get() as $tp )
                                                    <?php $selectedCity = old('matp', $address->matp ) == $tp->matp ? 'selected' : '' ?>
                                                    <option {{ $selectedCity }} value="{{ $tp->matp }}">{{ $tp->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-sm-6">
                                            <lalel>@lang('order.maqh') <span class="text-danger">*</span></lalel>
                                            <select id="sl-district" name="maqh" class="form-control">
                                                @if( old('matp', $address->matp ) )
                                                    @foreach( \App\Models\District::where('matp', old('matp', 79) )->orderBy('name')->select('maqh','name')->get() as $qh )
                                                        <option {{ old('maqh', $address->maqh ) == $qh->maqh ? 'selected' : '' }}
                                                                value="{{ $qh->maqh }}">{{ $qh->name }}</option>
                                                    @endforeach
                                                @endif
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <button class="btn btn-success"><i class="la la-save"></i> @lang('app.save')</button>

                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
