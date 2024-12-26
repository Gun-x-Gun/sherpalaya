<!DOCTYPE html>
<html lang="en" data-theme="corporate">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }}</title>

    @vite('resources/css/app.css')


</head>

<body>

    <x-partials.navbar />

    <div class="m-2">
        {{ $slot }}
    </div>
    <div class="m-2">
        <x-partials.footer />

    </div>

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
