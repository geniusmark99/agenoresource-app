<x-mail::message>
Hello {{ $user->firstname }}, Welcome to Agenoresource
Your account has been created successfully.
**Here is your login information:** <br>


Please login to the system

<x-mail::button url="{{ route('login') }}">
Click here to login
</x-mail::button>

Thank you, <br>
{{ config('app.name') }}
</x-mail::message>