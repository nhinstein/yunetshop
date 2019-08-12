@component('mail::message')

Pembayaran Anda ditolak dengan alasan

@component('mail::button', ['url'=> url('/invoice/'.$order->id), 'color'=>'green'])
    Lihat Invoice
@endcomponent

Salam Kami,<br>
{{ config('app.name') }}
@endcomponent