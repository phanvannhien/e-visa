@component('mail::message')

Dear <strong>{{ $order->user->full_name }}</strong>,

Thanks for choosing {{ url('/') }}


**Please note: This is not India ETA. Please make sure that you will check your email frequently to <strong style="color: red">UPDATE YOUR VISA STATUS</strong>.
<strong style="color: red">We would like to inform you that YOUR PAYMENT and your application is approved</strong>.
At present, the Indian Immigration Department needs your help on giving some information to cross-check in their system.

We just process your visa when you finished the payment and provide all the documents as we required. Processing time will be counting from all documents received.


Please provide us all information below by email and attachment to address: <a href="mailto:{{ app('Configuration')->get('email') }}">{{ app('Configuration')->get('email') }}</a>

<strong style="color:rgb(255,0,0)">Please provide us all information below:</strong>
@component('mail::panel')
{!! $order->service->email_require_content !!}
@endcomponent

(Acceptable formats include .jpg, .png, .gif and .pdf files. The files may not be larger than 1MB each.)

Thank you for your cooperation.
Best Regards,

{{ app('Configuration')->get('company_name') }} <br>
WE ARE BESIDE YOU 24/7.

@endcomponent