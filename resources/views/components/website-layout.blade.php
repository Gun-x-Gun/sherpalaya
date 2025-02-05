<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }}</title>

    @vite('resources/css/app.css')
    @livewireStyles

    @stack('styles')

</head>

<body class="bg-white font-mono">

    {{-- top --}}
    <x-partials.navbar />

    {{-- start --}}

    {{ $slot }}

    {{-- stop --}}

    @if ($showFooter)
        <x-partials.footer />
    @endif
    {{-- bottom --}}


    @vite('resources/js/app.js')
    @livewireScripts
    @stack('scripts')
    @stack('modals')
</body>

</html>


{{--
Home
About Us
Trekking
Peaks
Expeditions
Tour
Sightseeing Tours (Helicopter/Vehicle)
Photography Tours
Cycling Tours
Running Tours
Cultural Tours/Meditation
Contact Us  --}}
