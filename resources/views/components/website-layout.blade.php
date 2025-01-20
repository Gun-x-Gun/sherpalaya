<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }}</title>

    @vite('resources/css/app.css')

</head>

<body class="bg-white font-mono">

    {{-- top --}}
    <x-partials.navbar />

    {{-- start --}}

    {{ $slot }}

    {{-- stop --}}

    <x-partials.footer />
    {{-- bottom --}}


    @vite('resources/js/app.js')

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
