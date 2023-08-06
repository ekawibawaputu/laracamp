@component('mail::message')
# Register Camp {{$checkout->Camp->title}}

Hi, {{$checkout->User->name}}
<br>
Thank your for register on <b>{{$checkout->User->title}}</b>, please see payment instruction by click the button below.

@component('mail::button', ['url' => route('dashboard')])
My Dashboard
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
