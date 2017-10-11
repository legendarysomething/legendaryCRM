@component('mail::message')

Bug Report Made By: {{$user->name}}
<br><br>

{!!$message!!}


Regrads,<br>
{{ config('app.name') }}
@endcomponent
