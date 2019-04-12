
<div class="form-group">
    <lalel>@lang('customer.full_name') <span class="text-danger">*</span></lalel>
    <input type="text" name="full_name" class="form-control" value="{{ old('full_name') }}">
</div>
<div class="form-group">
    <lalel>@lang('customer.phone') <span class="text-danger">*</span></lalel>
    <input type="tel" name="phone" class="form-control" value="{{ old('phone') }}">
</div>
<div class="form-group">
    <lalel>@lang('customer.email') <span class="text-danger">*</span></lalel>
    <input type="email" name="email" class="form-control" value="{{ old('email') }}">
</div>
<div class="form-group">
    <lalel>@lang('customer.address') <span class="text-danger">*</span></lalel>
    <input type="text" name="address" class="form-control" value="{{ old('address') }}">
</div>

<div class="form-group">
    <div class="row">
        <div class="col-sm-6">
            <lalel>@lang('order.matp') <span class="text-danger">*</span></lalel>
            <select id="sl-cities" name="matp" class="form-control">
                @foreach( \App\Models\Cities::select('matp','name')->orderBy('name')->get() as $tp )
                    <?php $selectedCity = old('matp', 79) == $tp->matp ? 'selected' : '' ?>
                    <option {{ $selectedCity }} value="{{ $tp->matp }}">{{ $tp->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="col-sm-6">
            <lalel>@lang('order.maqh') <span class="text-danger">*</span></lalel>
            <select id="sl-district" name="maqh" class="form-control">
                @if( old('matp', 79) )
                    @foreach( \App\Models\District::where('matp', old('matp', 79) )->orderBy('name')->select('maqh','name')->get() as $qh )
                        <option {{ old('maqh') == $qh->maqh ? 'selected' : '' }}
                                value="{{ $qh->maqh }}">{{ $qh->name }}</option>
                    @endforeach
                @endif
            </select>
        </div>
    </div>
</div>
