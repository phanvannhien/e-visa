
<?php
$nowIndia = \Carbon\Carbon::now();
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
        <span class="float-right text-danger">${{ $service_fee['price'] * $quantity }}</span>
    </p>

</div>
<div class="cart-item">
    <p class="clearfix">
        <span class="float-left"><strong>Total Visa Service Fees</strong></span>
        <span class="float-right text-danger big-price">${{ $service_fee['price'] * $quantity }}</span>
    </p>
</div>
<div class="cart-item">
    <p class="clearfix">
        <strong>Processing Time</strong> <br>
        <span class="float-left">{{ $processing_fee['name'] }}</span>
        <span class="float-right text-danger">${{ $processing_fee['price']  }}</span>
    </p>
</div>

<?php
$total = $processing_fee['price'] + ( $service_fee['price'] * $quantity );
?>

@if( session()->has('cart.government') )
    <?php $government = session()->get('cart.government'); ?>
    <div class="cart-item clearfix">
        <strong>India Government Fee (Required) </strong> <br>
        @foreach( $government as $key => $item )
        <p class="clearfix mb-0"><span class="float-left">{{ ($loop->index + 1 ) .'  '.$item['country'] }}</span>
        <span class="float-right text-danger">${{ $item['fee'] }}</span> </p>
        <?php $total += $item['fee'] ?>
        @endforeach
    </div>
@endif


<div class="cart-footer clearfix py-3">

    <p class="clearfix mb-0">
        <strong class="float-left">Sub total</strong>
        <span class="float-right text-danger">${{ $total  }}</span>
    </p>
    @if( session()->has('cart.discount') )
    <p class="clearfix mb-0">
        <strong class="float-left">Discount</strong>
        <span class="float-right text-danger">${{ session()->get('cart.discount')  }}</span>
    </p>
    @endif
    <p class="mb-0 clearfix">
        <strong class="float-left">Total Fees</strong>
        <span class="total float-right text-danger ">{{ config('visa.price_prefix') }}
            <?php
                
                if( session()->has('cart.discount') ){
                    $total = $total - session()->get('cart.discount');
                }
            ?>
        {{ $total }}</span>
    </p>
</div>