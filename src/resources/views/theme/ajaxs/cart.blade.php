
<?php
$nowIndia = \Carbon\Carbon::now(new DateTimeZone('Europe/London'));
$step = request()->get('step') ?? 1;

if( session()->has('cart.quantity') ){
    $quantity = session()->get('cart.quantity');
}

if( session()->has('cart.service_fee') ){
    $service_fee = session()->get('cart.service_fee');
}

if( session()->has('cart.processing_fee') ){
    $processing_fee = session()->get('cart.processing_fee');
}

if( session()->has('cart.port') ){
    $port = session()->get('cart.port');
}


?>

<div class="cart-item">
    <p><strong>Number of e-Visas</strong>: {{ $quantity }} appliciant </p>
</div>
<div class="cart-item">
    <p><strong>Type of e-Visa</strong> {{ $service_fee['name'] }}  </p>
</div>
<div class="cart-item">
    <p><strong>Transportation method</strong> {{ $port['method'] }}</p>
    <p><strong>Port of arrival</strong> {{ $port['transport_name'] }}</p>
</div>

<div class="cart-item">
    <p><strong>Visa Service Fees</strong></p>
    <p class="clearfix">
        <span class="float-left">Normal fee ( ${{ $service_fee['price'] }}x{{ $quantity }} )</span>
        <span class="float-right">${{ $service_fee['price'] * $quantity }}</span>
    </p>
</div>
<div class="cart-item">
    <p class="clearfix">
        <span class="float-left"><strong>Total Visa Service Fees</strong></span>
        <span class="float-right">${{ $service_fee['price'] * $quantity }}</span>
    </p>
</div>
<div class="cart-item">
    <p class="clearfix">
        <strong>Processing Time</strong> <br>
        <span class="float-left">{{ $processing_fee['name'] }}</span>
        <span class="float-right">${{ $processing_fee['price']  }}</span>
    </p>
</div>

@if( session()->has('cart.government') )
    <?php $government = session()->get('cart.government'); ?>
    <div class="cart-item">
        @foreach( $government as $gov )
        <p class="clearfix">
            <strong>India Government Fee (Required) </strong> <br>
            <span class="float-left">{{ ($loop->index + 1 ) .'  '.$gov->country->value }}</span>
            <span class="float-right">${{ $gov->visa_fee  }}</span>
        </p>
        @endforeach
    </div>
@endif

<div class="cart-footer clearfix">
    <strong class="float-left">Total Service Fees</strong>
    <span class="total float-right">{{ $processing_fee['price'] + ( $service_fee['price'] * $quantity ) }}</span>
</div>