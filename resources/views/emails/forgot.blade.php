@component('mail::message')
    # OTP CODE

    Your six-digit code is {{ $pin }}

    Thanks, <br> code is expired in 60 seconds
    {{ config('app.name') }}
@endcomponent
