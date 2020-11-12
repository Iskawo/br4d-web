@component('mail::message')

<strong>Email from </strong> {{ $data['username'] }} ({{ $data['email'] }})<br />

<strong>Cc:</strong> {{ $data['subject'] }}<br />


<strong>Content:</strong><br /><br />

{{ $data['message'] }}

@endcomponent
