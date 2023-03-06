@component('mail::message')
# Introduction


Hellow, {{ $user->name}}<br>
Welcome to the new world!

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
