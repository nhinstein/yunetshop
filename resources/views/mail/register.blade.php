@component('mail::message')

Terimakasih telah melakukan transaksi di Yunetshop, 
email Anda terdaftar dengan rincian berikut

#username : {{$user->email}}
#password : {{$password}}

Silahkan login dan ganti password


@component('mail::button', ['url'=> url('/login/'), 'color'=>'green'])
    Login
@endcomponent

Salam Kami,<br>
{{ config('app.name') }}
@endcomponent