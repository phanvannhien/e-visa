<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Invoice</title>
    <style>
        .page-break {
            page-break-after: always;
        }

        table{
            width: 100%;
        }
        .border{
            border: 1px solid #333;
            border-collapse: collapse;
        }
        .border tr {
            border: 1px solid #333;
        }
        .border tr td{
            border: 1px solid #333;
            font-weight: bold;

        }
        tr.heading td{
            text-align: center;
            font-weight: bold;
        }
        .text-end{
            text-align: right;
        }
        .text-center{
            text-align: center;
        }
        .text-red{
            color: red;
        }
    </style>
</head>
<body>

<table style="margin-bottom: 30px">
    <tr>
        <td>
            <img id="logo" width="300" src="{{ app('Configuration')->get('logo') }}" alt="">
        </td>
        <td>
            {{ app('Configuration')->get('company_name') }} <br/>
            Add: {{ app('Configuration')->get('address') }} <br/>
            Tel: {{ app('Configuration')->get('phone') }} <br/>
            Email: {{ app('Configuration')->get('email') }}
        </td>
    </tr>
</table>

<table style="margin-bottom: 30px" class="border" cellpadding="5" cellspacing="1" >
    <tr>
        <td>Order ID:</td>
        <td>#{{ $order->id  }}</td>
        <td rowspan="2" align="center">
            Status: <span style="font-size: 3rem; text-transform: uppercase; color: green; font-size: 30px">{{ $order->status }}</span>
        </td>
    </tr>
    <tr>
        <td>Customer ID:</td>
        <td>#{{ $order->user->id  }}</td>
    </tr>

</table>

<table style="margin-bottom: 30px" class="border" cellpadding="5" cellspacing="0">
    <tr>
        <td align="center" style="background: red; color: #FFF; font-weight: bold; font-size: 20px">RECEIPT</td>
    </tr>
</table>

<table style="margin-bottom: 30px" class="border" cellpadding="5" cellspacing="0">
    <tr>
        <td>Transaction ID</td>
        <td>{{ $order->payment_id }}</td>
        <td>Transaction Date</td>
        <td>{{ $order->created_at }}</td>
    </tr>
</table>


<h3> Order Informations</h3>
<table class="border" cellpadding="5" cellspacing="0">
    <tr class="heading">
        <td>Item</td>
        <td>Description</td>
        <td>Quantity</td>
        <td>Services fee <br>(USD) </td>
        <td>Amount <br>(USD)</td>
        <td>Paid <br>(USD)</td>
    </tr>


    <tr>
        <td class="text-center">1</td>
        <td>
            + {{ config('visa.make_payment')[ $order->payment_for ] }} <br>
            + {{ $order->note }}
        </td>
        <td class="text-center">1</td>
        <td class="text-end">
            {{ config('visa.price_prefix').number_format($order->amount) }}
        </td>
        <td class="text-end"> {{ config('visa.price_prefix').number_format($order->amount) }}</td>
        <td class="text-end"> {{ config('visa.price_prefix').number_format($order->amount) }}</td>
    </tr>

    <tr>
        <td colspan="4" class="text-end">
            Total (USD)
        </td>
        <td class="text-red text-end">
            {{ config('visa.price_prefix').number_format($order->amount) }}
        </td>
        <td class="text-red text-end"> {{ config('visa.price_prefix').number_format($order->amount) }}</td>
    </tr>
</table>


<p>
    <strong>Detail of transaction:</strong> {{ $order->id }} <br/>
    {{ app('Configuration')->get('company_name') }} Payment Order ID: #{{ $order->id }} <br/>
    For detail of our Term of Services, please find at {{ url('/') }}
</p>

<p style="color: red">Note: In your credit/debit card bank statement for this transaction will show: Paypal*GLOBAL VISA,
    Paypal*GLOBAL VISA SERVICE.</p>


</body>
</html>