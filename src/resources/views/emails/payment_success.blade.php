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

<hr>
Indian Immigration Services Limited is a a commercial website. We are not the Embassy/Consulate or the representative of any government department of India.
If you choose to utilize our services please be advised that, we charge a handling fee for visa services, these services include consultation, providing advice on the requirements, taking responsibility for ensuring that your documentation is correct, and sending a courier to queue up on your behalf to obtain the visa to India. In additional, you have to pay Indian Government Fee when your application is approved. This fee is included the stamping fee.

This email and any files transmitted with it are confidential and intended solely for the use of the individual or entity to whom they are addressed. If you have received this email in error please notify the system manager. This message contains confidential information and is intended only for the individual named. If you are not the named addressee you should not disseminate, distribute or copy this e-mail. Please notify the sender immediately by e-mail if you have received this e-mail by mistake and delete this e-mail from your system. If you are not the intended recipient you are notified that disclosing, copying, distributing or taking any action in reliance on the contents of this information is strictly prohibited.
All content within the email for reference purposes only. We are consulting company based on customer requirements, the advice given is based on the law of the host country. Therefore, we do not assume any liability from customers's activities when they violate the rules or cheating involved in the home country.

@endcomponent