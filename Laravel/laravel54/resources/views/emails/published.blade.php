@component('mail::message')
# {{ $user->name }}

The body of your message.

- 哈哈哈哈
- hhhh
- Yes

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

@component('mail::panel')
    Lorum ipsum dolor sit amet,Lorum ipsum dolor sit amet,Lorum ipsum dolor sit amet,
    Lorum ipsum dolor sit amet,Lorum ipsum dolor sit amet,Lorum ipsum dolor sit amet,
    Lorum ipsum dolor sit amet,Lorum ipsum dolor sit amet,Lorum ipsum dolor sit amet,
    Lorum ipsum dolor sit amet,Lorum ipsum dolor sit amet,Lorum ipsum dolor sit amet,
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
