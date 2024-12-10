<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trekking Adventures</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 text-gray-800">
    <nav class="sticky flex justify-left space-x-4">
        <a href="/#" class="font-bold px-3 py-2 text-slate-700 rounded-lg hover:bg-slate-100 hover:text-slate-900">Home</a>
        <a href="/#" class="font-bold px-3 py-2 text-slate-700 rounded-lg hover:bg-slate-100 hover:text-slate-900">About Us</a>
        <a href="/trekking" class="font-bold px-3 py-2 text-slate-700 rounded-lg hover:bg-slate-100 hover:text-slate-900">Trekking</a>
        <a href="/#" class="font-bold px-3 py-2 text-slate-700 rounded-lg hover:bg-slate-100 hover:text-slate-900">Peaks</a>
        <a href="/#" class="font-bold px-3 py-2 text-slate-700 rounded-lg hover:bg-slate-100 hover:text-slate-900">Expeditions</a>
        <!-- <a href="#" id="tours" class="font-bold px-3 py-2 text-slate-700 rounded-lg hover:bg-slate-100 hover:text-slate-900">Tour</a> -->
        <div class="relative group font-bold px-3 py-2 text-slate-700 rounded-lg hover:bg-slate-100 hover:text-slate-900">
            <a href="#" id="tours" class="font-bold px-3 py-2 text-slate-700 rounded-lg hover:bg-slate-100 hover:text-slate-900">Tour</a>
            <div class="absolute left-0 hidden group-hover:block bg-white shadow-lg rounded-lg mt-1 z-10">
                <ul class="p-2">
                    <li>
                        <a href="/#" class="block font-medium px-3 py-2 text-slate-700 rounded-lg hover:bg-slate-100 hover:text-slate-900">
                            Sightseeing Tours (Helicopter/Vehicle)
                        </a>
                    </li>
                    <li>
                        <a href="/#" class="block font-medium px-3 py-2 text-slate-700 rounded-lg hover:bg-slate-100 hover:text-slate-900">
                            Photography Tours
                        </a>
                    </li>
                    <li>
                        <a href="/#" class="block font-medium px-3 py-2 text-slate-700 rounded-lg hover:bg-slate-100 hover:text-slate-900">
                            Cycling Tours
                        </a>
                    </li>
                    <li>
                        <a href="/#" class="block font-medium px-3 py-2 text-slate-700 rounded-lg hover:bg-slate-100 hover:text-slate-900">
                            Running Tours
                        </a>
                    </li>
                    <li>
                        <a href="/#" class="block font-medium px-3 py-2 text-slate-700 rounded-lg hover:bg-slate-100 hover:text-slate-900">
                            Cultural Tours/Meditation
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <a href="/#" class="font-bold px-3 py-2 text-slate-700 rounded-lg hover:bg-slate-100 hover:text-slate-900">Contact Us</a>
    </nav>

    <!-- Hero Section -->
    <section class="bg-cover bg-center h-[60vh]" style="background-image: url('https://source.unsplash.com/1600x900/?mountains');">
        <div class="h-full bg-black bg-opacity-50 flex flex-col justify-center items-center text-center text-white">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">Discover the Beauty of Nature</h1>
            <p class="text-lg md:text-xl mb-6">Join our trekking adventures and explore breathtaking landscapes.</p>
            <a href="#packages" class="bg-green-600 hover:bg-green-700 text-white px-6 py-3 rounded-full text-lg">Explore Packages</a>
        </div>
    </section>

    <!-- Trekking Packages -->
    <section id="packages" class="py-12">
        <div class="container mx-auto text-center">
            <h2 class="text-3xl font-bold mb-6">Our Trekking Packages</h2>
            <div class="grid gap-6 grid-cols-1 md:grid-cols-3">
                <!-- Package 1 -->
                <div class="bg-white shadow-lg rounded-lg p-6">
                    <img src="https://source.unsplash.com/400x300/?hiking" alt="Trekking 1" class="w-full h-48 object-cover rounded-t-lg">
                    <h3 class="text-xl font-bold mt-4">Himalayan Adventure</h3>
                    <p class="text-gray-600 mt-2">Experience the thrill of trekking in the Himalayas.</p>
                    <p class="mt-4 text-green-600 font-bold">$300 / person</p>
                    <a href="#" class="mt-4 block bg-green-600 hover:bg-green-700 text-white text-center py-2 rounded-lg">Book Now</a>
                </div>
                <!-- Package 2 -->
                <div class="bg-white shadow-lg rounded-lg p-6">
                    <img src="https://source.unsplash.com/400x300/?mountains" alt="Trekking 2" class="w-full h-48 object-cover rounded-t-lg">
                    <h3 class="text-xl font-bold mt-4">Alpine Exploration</h3>
                    <p class="text-gray-600 mt-2">Discover the stunning alpine trails and breathtaking views.</p>
                    <p class="mt-4 text-green-600 font-bold">$250 / person</p>
                    <a href="#" class="mt-4 block bg-green-600 hover:bg-green-700 text-white text-center py-2 rounded-lg">Book Now</a>
                </div>
                <!-- Package 3 -->
                <div class="bg-white shadow-lg rounded-lg p-6">
                    <img src="https://source.unsplash.com/400x300/?forest" alt="Trekking 3" class="w-full h-48 object-cover rounded-t-lg">
                    <h3 class="text-xl font-bold mt-4">Rainforest Expedition</h3>
                    <p class="text-gray-600 mt-2">Immerse yourself in the beauty of tropical rainforests.</p>
                    <p class="mt-4 text-green-600 font-bold">$200 / person</p>
                    <a href="#" class="mt-4 block bg-green-600 hover:bg-green-700 text-white text-center py-2 rounded-lg">Book Now</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-green-600 text-white">
        <div class="container mx-auto py-6 px-6 text-center">
            <p class="text-sm">&copy; 2024 Trekking Adventures. All rights reserved.</p>
        </div>
    </footer>
</body>

</html>