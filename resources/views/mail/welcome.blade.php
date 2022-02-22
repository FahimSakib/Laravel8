@component('mail::message')
# Introduction

Hello {{ $data['name'] }},<br>
Your account crteated successfully.<br>
you details are:<br>
Name: {{ $data['name'] }}<br>
Email: {{ $data['email'] }}<br>
Password: {{ $data['password'] }}<br>

@component('mail::button', ['url' => 'http://laravel8.test/home'])
Go to dashborad
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
