<!-- <div class="navbar bg-base-100">
    <div class="navbar-start">
        <a class="btn btn-ghost text-3xl">Sherpalaya</a>
    </div>
    <div class="navbar-center hidden lg:flex">
        <ul class="text-xl menu menu-horizontal px-20" style="display: flex; justify-content: center; align-items: center; width: 100%;">
            <li><a href="/#">Home</a></li>
            <li><a href="/about">About Us</a></li>
            <li><a href="/trekking">Trekking</a></li>
            <li><a href="/peaks">Peaks</a></li>
            <li><a href="/expeditions">Expeditions</a></li>
            <li>
                <details>
                    <summary>Tour</summary>
                    <ul class="bg-base-100 rounded-t-none p-2">
                        <li><a href="/tour/sight_seeing">Sightseeing Tours (Helicopter/Vehicle)</a></li>
                        <li><a href="/tour/photography">Photography Tours</a></li>
                        <li><a href="/tour/cycling">Cycling Tours</a></li>
                        <li><a href="/tour/running">Running Tours</a></li>
                        <li><a href="/tour/cultural">Cultural Tours/Meditation</a></li>
                    </ul>
                </details>
            </li>
            <li><a href="/contact">Contact Us</a></li>

        </ul>
        
    </div>
</div> -->

<!-- navbar absolute top-0 left-0 w-full bg-opacity-70 bg-black text-white z-50 -->
<!-- sticky top-0 left-0 w-full -->
<style>
    .navbar {
        position: absolute;
        /* Initially, the navbar is absolute */
        top: 0;
        left: 0;
        width: 100%;
        transition: position 0.3s ease, background-color 0.3s ease;
        /* Smooth transitions */
        z-index: 50;
    }

    /* .carousel {
        margin-top: 0;
        z-index: 0;
    } */

    .sticky-navbar {
        position: sticky;
        /* Switch to sticky when scrolled */
        background-color: rgba(0, 0, 0, 0.9);
        /* Optional: Darken the navbar when sticky */
    }
</style>
<div id="navbar" class="navbar sticky top-0 left-0 w-full bg-opacity-40 bg-black text-white z-50">
    <div class="navbar-start ">
        <div class="dropdown">
            <div tabindex="0" role="button" class="btn btn-ghost lg:hidden">
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="h-5 w-5"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M4 6h16M4 12h8m-8 6h16" />
                </svg>
            </div>
            <ul
                tabindex="0"
                class="menu menu-sm dropdown-content bg-base-100 rounded-box z-[1] mt-3 w-52 p-2 shadow">
                <li><a href="/#">Home</a></li>
                <li><a href="/about">About Us</a></li>
                <li><a href="/trekking">Trekking</a></li>
                <li><a href="/peaks">Peaks</a></li>
                <li><a href="/expeditions">Expeditions</a></li>
                <li>
                    <details>
                        <summary>Tour</summary>
                        <ul class="bg-base-100 rounded-t-none p-2">
                            <li><a href="/tour/sight_seeing">Sightseeing Tours (Helicopter/Vehicle)</a></li>
                            <li><a href="/tour/photography">Photography Tours</a></li>
                            <li><a href="/tour/cycling">Cycling Tours</a></li>
                            <li><a href="/tour/running">Running Tours</a></li>
                            <li><a href="/tour/cultural">Cultural Tours/Meditation</a></li>
                        </ul>
                    </details>
                </li>
                <li><a href="/contact">Contact Us</a></li>
            </ul>
        </div>
        <a class="btn btn-ghost text-3xl">SherpaLayaaaa</a>
    </div>

    <div class="navbar-center hidden lg:flex ">
        <ul class="menu menu-horizontal px-1 text-xl bg-opacity-70">
            <li><a href="/#">Home</a></li>
            <li><a href="/about">About Us</a></li>
            <li><a href="/trekking">Trekking</a></li>
            <li><a href="/peaks">Peaks</a></li>
            <li><a href="/expeditions">Expeditions</a></li>
            <div class="dropdown dropdown-hover">
                <div tabindex="0" role="button" class="menu menu-horizontal text-xl">Tour</div>
                <ul tabindex="0" class="dropdown-content menu bg-base-100 rounded-box z-[1] w-auto p-1 shadow text-xl">
                    <li><a href="/tour/sight_seeing">Sightseeing Tours (Helicopter/Vehicle)</a></li>
                    <li><a href="/tour/photography">Photography Tours</a></li>
                    <li><a href="/tour/cycling">Cycling Tours</a></li>
                    <li><a href="/tour/running">Running Tours</a></li>
                    <li><a href="/tour/cultural">Cultural Tours/Meditation</a></li>
                </ul>
            </div>
            <li><a href="/contact">Contact Us</a></li>
        </ul>
    </div>
    <div class="navbar-end ">
        <input type="text" placeholder="Search" class="input input-bordered w-24 md:w-auto" />
    </div>
</div>
<script>
    const navbar = document.getElementById('navbar');

    window.addEventListener('scroll', () => {
        if (window.scrollY > 0) {
            navbar.classList.add('sticky-navbar');
            navbar.style.position = 'sticky';
        } else {
            navbar.classList.remove('sticky-navbar');
            navbar.style.position = 'absolute';
        }
    });
</script>