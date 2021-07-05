@component('mail::layout')
{{-- Header --}}
@slot ('header')
@component('mail::header', ['url' => config('app.url')])
    <!-- header -->
    <img src="{{ asset('uploads/00984007f5c6a393a89299dfbbf0ec0d.png') }}" alt="logo" width="150">
@endcomponent
@endslot

{{-- Content here --}}
# Introduction

The body of your message.

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}

{{-- Subcopy --}}
@slot('subcopy')
@component('mail::subcopy')
<!-- subcopy -->
@endcomponent
@endslot

{{-- Footer --}}
@slot ('footer')
@component('mail::footer')
<!-- footer -->
@endcomponent
@endslot
@endcomponent
