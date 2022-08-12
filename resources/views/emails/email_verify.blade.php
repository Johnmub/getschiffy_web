@component('mail::message')
# Introduction

The body of your message.

{{$tokenGenerated}}



@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
