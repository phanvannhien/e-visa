@component('mail::message')

Dear <strong>{{ $order->user->full_name }}</strong>,

<h2 class="mb-4">Application information: ID ORDER: #{{ $order->id }}</h2>

Thank you for ordering our Visa Service. This is confirmation from us to show that we have received your order request from www.indiaimmigration.org and your payment was pending. For secure reason, we accept payment from third party only as: Credit/ Debit Card, Paypal or Bank Transfer
**Please note: This email is not India ETA, not valid for entering in India. Please make sure that you will check your email frequently to UPDATE YOUR VISA STATUS.
We just process your visa when you finished the payment and provide all the documents as we required. Processing time will be counting from all documents received.
A.


<p><strong>Apply date:</strong> {{ $order->created_at }}</p>
<p><strong>This order have Payment status:</strong>
    <span style="color: red; font-size: 1.2rem; text-transform: uppercase">{{ $order->payment_status }}</span></p>


## Information for Order Detail
<div class="table">
    <table cellspacing="0" cellpadding="5" class="">
        <tr>
            <td>Order ID</td>
            <td><span class="label label-info">{{ $order->id }}</span></td>
        </tr>
        <tr>
            <td>Start Date of Arrival</td>
            <td>{{ $order->start }}</td>
        </tr>
        <tr>
            <td>End Date of Arrival</td>
            <td>{{ $order->end }}</td>
        </tr>
        <tr>
            <td>Special Request</td>
            <td>{{ $order->special_request }}</td>
        </tr>
        <tr>
            <td>Transport</td>
            <td>{{ $order->transport->transport_name }} - {{ $order->transport->transport_type }}</td>
        </tr>
        <tr>
            <td>Discount</td>
            <td>{{ config('visa.price_prefix').$order->discount }}</td>
        </tr>
    </table>
</div>


## Service fee

<div class="table">
    <table class="">
        <thead>
            <tr>
                <th>Service</th>
                <th>Service type</th>
                <th>Price</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
        @foreach( $order->items as $item )
            <tr>
                <td>{{ $item->service_name }}</td>
                <td>{{ $item->service_type }}</td>
                <td class="text-danger">
                    {{ config('visa.price_prefix').number_format($item->price) }}
                </td>
                <td class="text-danger"> {{ config('visa.price_prefix').number_format($item->total) }}</td>
            </tr>
        @endforeach
        </tbody>
        <tfooter>
            <tr>
                <td colspan="5" class="text-right">
                    Total: <span class="text-danger">{{ config('visa.price_prefix').number_format($order->total) }}</span>
                </td>
            </tr>
        </tfooter>
    </table>
</div>

## DETAIL OF APPLICANTS

<div class="order-products">
    <ul class="list-group">
        @foreach( $order->persons as $item )
            <li class="list-group-item">
                <strong>Sure name</strong>: {{ $item->sure_name }} <br>
                <strong>Given name</strong>: {{ $item->given_name }} <br>
                <strong>Gender</strong>: {{ $item->gender }}, <strong>Date of birth</strong>: {{ $item->dob }} <br>
                <strong>Government</strong>: {{ $item->government->country->value }} <br>
                <strong>Passport number</strong>: {{ $item->passport_number }}
            </li>
        @endforeach
    </ul>

</div>


## Account informations
<div class="table">
    <table cellspacing="0" cellpadding="5" class="">
        <tr>
            <td>ID</td>
            <td><span class="label label-info">{{ $order->user->id }}</span></td>
        </tr>
        <tr>
            <td>Full name</td>
            <td>{{ $order->user->full_name }}</td>
        </tr>
        <tr>
            <td>Email</td>
            <td>{{ $order->user->email }}</td>
        </tr>
        <tr>
            <td>Country</td>
            <td>{{ $order->user->country->value }}</td>
        </tr>
        <tr>
            <td>Address</td>
            <td>{{ $order->user->address }}</td>
        </tr>
        <tr>
            <td>Telephone</td>
            <td>{{ $order->user->phone }}</td>
        </tr>
    </table>
</div>


@component('mail::button', ['url' => route('apply.visa.step3', $order->id ) , 'color' => 'red' ])
    Payment Order
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent