@component('mail::message')

Terimakasih, pembayaran Anda sudah Kami terima dan akan segera kami proses
Anda dapat melihat info resi di halaman invoice di bawah ini

@component('mail::button', ['url'=> url('/invoice/'.$order->id), 'color'=>'green'])
    Lihat Invoice
@endcomponent

Salam Kami,<br>
{{ config('app.name') }}
@endcomponent