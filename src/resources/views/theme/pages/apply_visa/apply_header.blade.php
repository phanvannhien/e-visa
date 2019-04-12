<?php
$nowIndia = \Carbon\Carbon::now(new DateTimeZone('Indian/Antananarivo'));
$step = session()->get('cart.step');
?>
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <h2>Apply for an India e-Visa</h2>
        </div>
        <div class="col-md-6">
            <p class="text-right">
                {{ $nowIndia->toDateTimeString().' '. $nowIndia->tzName }}
            </p>
        </div>
    </div>
</div>

<div class="container  mb-5">
    <div class="row mb-4">
        <div class="col-md-3"><a class="btn btn-block {{ $step == 1 ? 'btn-info':'btn-primary' }}" href="{{ route('apply.visa.step1') }}">1. Information for e-Visa</a></div>
        <div class="col-md-3"><a class="btn btn-block {{ $step == 2 ? 'btn-info':'btn-primary' }}" href="{{ route('apply.visa.step2') }}">2. E-Visa Details</a></div>
        <div class="col-md-3"><a class="btn btn-block {{ $step == 3 ? 'btn-info':'btn-primary' }}" href="{{ route('apply.visa.step3') }}">3. Payments</a></div>
        <div class="col-md-3"><a class="btn btn-block {{ $step == 4 ? 'btn-info':'btn-primary' }}" href="{{ route('apply.visa.step4') }}">4. Confirmation</a></div>
    </div>
</div>
