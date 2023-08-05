@component('mail::message')
# Register Camp {{$checkout->Camp->title}}

Hi, {{$checkout->User->name}}
<br>
Thank your for register on <b>{{$checkout->User->title}}</b>, please see payment instruction by click the button below.

@component('mail::button', ['url' => route('user.checkout.invoice', $checkout->id )])
Get invoice
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
