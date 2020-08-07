@component('mail::message')
# Welcome to my App

This is a fun place to test laravel.

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
