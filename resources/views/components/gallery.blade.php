<div class="w-full h-full">
    <div class="bg-white p-4 rounded-lgs w-full relative">
        <button class="absolute top-2 right-2 text-gray-500" onclick="closeModal()">&times;</button>
        <div class="relative w-full h-3/4">
            <img id="mainImage" src="{{ $showMedia }}"
                class="w-full h-64 object-cover rounded" alt="Gallery Image">
            <button class="absolute left-2 top-1/2 transform -translate-y-1/2 bg-gray-800 text-white px-2 py-1 rounded"
                onclick="prevImage()">&#10094;</button>
            <button class="absolute right-2 top-1/2 transform -translate-y-1/2 bg-gray-800 text-white px-2 py-1 rounded"
                onclick="nextImage()">&#10095;</button>
        </div>
        <div class="flex pt-2 space-x-2 max-h-1/4s">
            @foreach ($medias as $media)
            <img src="{{ $media }}"
            class="w-1/3 h-20 object-cover cursor-pointer" onclick="changeImage(this.src)">
            @endforeach
        </div>
    </div>

    <script defer>
        let images = JSON.parse(@json($medias));
        let currentIndex = 0;

        function openModal() {
            document.getElementById("galleryModal").classList.remove("hidden");
        }

        function closeModal() {
            document.getElementById("galleryModal").classList.add("hidden");
        }

        function changeImage(src) {
            document.getElementById("mainImage").src = src;
        }

        function prevImage() {
            currentIndex = (currentIndex - 1 + images.length) % images.length;
            document.getElementById("mainImage").src = images[currentIndex];
        }

        function nextImage() {
            currentIndex = (currentIndex + 1) % images.length;
            document.getElementById("mainImage").src = images[currentIndex];
        }
    </script>
</div>
