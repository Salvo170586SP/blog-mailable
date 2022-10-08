@component('mail::message')
# Introduction

Email inviata da: {{ $email }}

Contenuto della mail: {{ $text }}

{{ config('app.name') }}
@endcomponent
