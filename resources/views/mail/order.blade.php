@component('mail::message')

Terimakasih, order Anda sudah Kami terima

@component('mail::button', ['url'=> url('/invoice/'.$order->id), 'color'=>'green'])
    Lihat Invoice
@endcomponent

Salam Kami,<br>
{{ config('app.name') }}
@endcomponent