@component('mail::message')
# A Message from Travel Agency

{{ $message['msg'] }}


Thanks,<br>
{{ config('app.name') }}
@endcomponent
