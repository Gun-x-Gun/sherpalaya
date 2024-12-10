<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.14.7/dist/cdn.min.js"></script>
</head>

<body>
  <nav class="fixed flex justify-left space-x-4">
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

  
</body>

</html>