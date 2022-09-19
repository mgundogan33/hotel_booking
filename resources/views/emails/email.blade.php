@component('mail::message')
    # Merhaba

    <p>{!! $body !!}</p>

    {{ config('app.name') }}
@endcomponent
