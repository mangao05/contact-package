@component('mail::message')
# Introduction

New message from <span class="font-weight-bold">{{ $name }}</span> 

Message
{{ $message }}

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
