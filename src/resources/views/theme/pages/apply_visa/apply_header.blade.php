<?php
$nowIndia = \Carbon\Carbon::now();
$step = session()->get('cart.step');
?>
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <h2 class="text-uppercase">Apply for an India e-Visa</h2>
        </div>
        <div class="col-md-6">
            <p class="text-md-right">
                {{ $nowIndia->toDateTimeString().' '. $nowIndia->tzName }}
            </p>
        </div>
    </div>
</div>

<div class="container mb-2 mb-md-5">
    <div class="row mb-4 step-apply">
        <div class="col-3">
            <a class="text-xs-left btn btn-block {{ $step == 1 ? 'btn-success':'btn-primary' }}" href="{{ route('apply.visa.step1') }}"><span class="step-number d-sm-none"><i class="fa fa-info fa-fw"></i>Step 1</span><span class="step-desk d-none d-sm-block">1.Information for e-Visa</span></a></div>
        <div class="col-3"><a class="text-xs-left btn btn-block {{ $step == 2 ? 'btn-info':'btn-primary' }}" href="{{ route('apply.visa.step2') }}"><span class="step-number d-sm-none"><i class="fa fa-user"></i>Step 2</span><span class="step-desk d-none d-sm-block">2. E-Visa Details</span></a></div>
        <div class="col-3"><a class="text-xs-left btn btn-block {{ $step == 3 ? 'btn-info':'btn-primary' }}" href="#"><span class="step-number d-sm-none"><i class="fa fa-credit-card fa-fw"></i>Step 3</span><span class="step-desk d-none d-sm-block">3. Payments</span></a></div>
        <div class="col-3"><a class="text-xs-left btn btn-block {{ $step == 4 ? 'btn-info':'btn-primary' }}" href="#"><span class="step-number d-sm-none"><i class="fa fa-check fa-fw"></i>Step 4</span><span class="step-desk d-none d-sm-block">4. Confirmation</span></a></div>
    </div>
</div>
