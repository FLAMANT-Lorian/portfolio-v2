@props([
    'title'
])

    <!DOCTYPE html>
<html class="scroll-smooth" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <x-partials.head
        :title="$title"/>
</head>
<body class="bg-white">
    @if(app()->environment('local'))
        <x-tools.breakpoints/>
    @endif

    <x-sprite/>

    <x-partials.header/>

    {{ $slot }}

    <x-partials.footer/>
</body>
</html>
