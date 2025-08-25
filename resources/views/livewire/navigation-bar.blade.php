
<nav class="bg-white sticky top-0 z-50 shadow" aria-label="Main Navigation">

    <!-- Event Popup -->
    <div x-data="{ show: @entangle('showEventPopup') }"
         x-show="show"
         x-transition:enter="transition ease-out duration-900"
         x-transition:enter-start="opacity-0"
         x-transition:enter-end="opacity-100"
         x-transition:leave="transition ease-in duration-300"
         x-transition:leave-start="opacity-100"
         x-transition:leave-end="opacity-0"
         class="fixed inset-0 z-50 overflow-y-auto"
         style="display: none;">
        <div class="flex items-center justify-center min-h-screen px-4">
            <!-- Backdrop -->
            <div class="fixed inset-0 bg-black opacity-50"></div>

            <!-- Modal -->
            <div class="relative max-w-2xl w-full mx-auto z-50">
                <div class="text-center text-white bg-white/20 rounded-3xl overflow-hidden backdrop-blur-xl shadow-2xl border border-white/30"
                     style="backdrop-filter: blur(18px) saturate(160%) brightness(0.9); background-clip: padding-box;">

                    <!-- Close Button -->
                    <button wire:click="closePopup" class="absolute top-4 right-4 text-white/90 hover:text-white z-50 bg-black/20 hover:bg-black/30 rounded-full p-2 backdrop-blur-sm transition-all duration-300">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                        </svg>
                    </button>

                    <!-- Image Section -->
                    <div class="relative overflow-hidden">
                        <img src="{{ asset('/images/service_image.webp') }}" alt="Worship Service" class="w-full">
                        <div class="absolute inset-0"></div>
                    </div>

                    <!-- Content -->
                    <div class="p-2 md:p-4">
                        <!-- Header -->
                        <h2 class="text-3xl md:text-4xl font-bold mb-4 text-white drop-shadow-lg">
                            First Sunday Service
                        </h2>

                        <!-- Date Badge -->
                        <div class="inline-block px-4 py-1 bg-white/10 backdrop-blur-md rounded-full text-white/90 text-lg font-medium mb-6">
                            {{ \Carbon\Carbon::parse($eventDate)->format('d.m.Y') }}
                        </div>

                        <!-- Main Content -->
                        <div class="space-y-6">
                            <p class="text-white/90 text-lg">
                                Join us for our first in-person Sunday Worship Service at our new location! Experience powerful worship, inspiring messages, and a vibrant community as we come together to celebrate faith and fellowship.
                            </p>

                            <!-- RSVP Button -->
                            <div class="mt-2">
                                <a href="https://docs.google.com/forms/d/e/1FAIpQLSdWQGBdnIBv70lo3_-XCj_Pn7LKs_R_hyCHHWEU2Aa9MWGMMw/viewform"
                                   target="_blank"
                                   class="inline-block bg-gradient-to-r from-amber-500 to-red-500 text-white hover:from-amber-600 hover:to-red-600 px-8 py-4 rounded-full text-xl font-bold transition-all duration-300 transform hover:scale-105 shadow-lg ring-2 ring-amber-200/40 hover:ring-4 hover:ring-amber-200/60"
                                   style="filter: drop-shadow(0 0 15px rgba(245, 158, 11, 0.3));">
                                    RSVP NOW
                                </a>
                                <p class="text-sm text-white/70 mt-3">
                                    Secure your spot for this powerful service
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>


    <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8 p-4">
        <div class="relative flex items-center justify-between h-16">
            <!-- Mobile menu button -->
            <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
                <button type="button" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-gray-800 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" aria-controls="mobile-menu" aria-expanded="false" onclick="document.getElementById('mobile-menu').classList.toggle('hidden')">
                    <span class="sr-only">Open main menu</span>
                    <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
            <!-- Logo -->
            <div class="flex-1 flex items-center justify-center sm:items-stretch sm:justify-start">
                <a href="/" class="flex items-center space-x-2 group">
                    <img src="{{ asset('/images/mgg_crop.webp')}}" alt="Logo" class="w-15 h-15 transition-transform duration-300 group-hover:scale-110">
                    <span class="text-gray-900 text-2xl font-bold hidden md:inline bg-gradient-to-r from-amber-500 to-red-500 bg-clip-text text-transparent">Manifest Glory Global</span>
                </a>
            </div>

            <!-- Main navigation links -->
            <div class="flex-1/4">
                <div class="hidden sm:block sm:ml-6">
                    <div class="flex space-x-6">
                        <div class="relative group">
                            <a href="about"
                            class="{{ request()->is('about*') ? 'bg-gradient-to-r from-amber-500 to-red-500 text-gray-700 shadow-lg' : 'hover:bg-gradient-to-r hover:from-amber-500 hover:to-red-500 hover:text-white' }}
                                    px-4 py-2 rounded-xl text-xl font-medium inline-flex items-center transition-all duration-300 transform hover:scale-105">
                                About
                                <svg class="ml-2 -mr-1 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </a>

                            <!-- Dropdown items -->
                            <div class="absolute left-0 mt-2 w-58 rounded-xl bg-white shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 ease-in-out z-50">
                                <div class="py-2 px-4 space-y-2">
                                    <a href="statement" class="block px-4 py-2 text-lg text-gray-700 hover:bg-gradient-to-r hover:from-amber-500 hover:to-red-500 hover:text-white rounded-lg transition-colors duration-200">Statement of Faith</a>
                                    <a href="leadership" class="block px-4 py-2 text-lg text-gray-700 hover:bg-gradient-to-r hover:from-amber-500 hover:to-red-500 hover:text-white rounded-lg transition-colors duration-200">Leadership</a>
                                </div>
                            </div>
                        </div>

                        <div class="relative group">
                            <a href="ministries" class="{{ request()->is('ministries*') ? 'bg-gradient-to-r from-amber-500 to-red-500 text-gray-700 shadow-lg' : 'hover:bg-gradient-to-r hover:from-amber-500 hover:to-red-500 hover:text-white' }} px-4 py-2 rounded-xl text-xl font-medium inline-flex items-center transition-all duration-300 transform hover:scale-105">
                                Ministries
                            </a>
                        </div>

                        <a href="campus" class="{{ request()->is('campus*') ? 'bg-gradient-to-r from-amber-500 to-red-500 text-gray-700 shadow-lg' : 'hover:bg-gradient-to-r hover:from-amber-500 hover:to-red-500 hover:text-white' }} px-4 py-2 rounded-xl text-xl font-medium inline-flex items-center transition-all duration-300 transform hover:scale-105">
                            Campus
                        </a>

                        <a href="events" class="{{ request()->is('events*') ? 'bg-gradient-to-r from-amber-500 to-red-500 text-gray-700 shadow-lg' : 'hover:bg-gradient-to-r hover:from-amber-500 hover:to-red-500 hover:text-white' }} px-4 py-2 rounded-xl text-xl font-medium transition-all duration-300 transform hover:scale-105">
                            Events
                        </a>

                    </div>
                </div>
            </div>

            <!-- Social Media & Join Button -->
            <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0 space-x-3">
                <a href="https://facebook.com" target="_blank" aria-label="Facebook" class="text-gray-600 hover:text-white p-2 rounded-full hover:bg-gradient-to-r hover:from-amber-500 hover:to-red-500 transition-all duration-300 transform hover:scale-110" style="filter: drop-shadow(0 0 5px rgba(245, 158, 11, 0.2));">
                    <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M22.675 0h-21.35C.6 0 0 .6 0 1.326v21.348C0 23.4.6 24 1.326 24H12.82v-9.294H9.692v-3.622h3.128V8.413c0-3.1 1.893-4.788 4.659-4.788 1.325 0 2.463.099 2.797.143v3.24l-1.92.001c-1.504 0-1.797.715-1.797 1.763v2.313h3.587l-.467 3.622h-3.12V24h6.116C23.4 24 24 23.4 24 22.674V1.326C24 .6 23.4 0 22.675 0"/>
                    </svg>
                </a>
                <a href="https://www.instagram.com/manifest_glory_global?igsh=MWwxcWJpNWQ1Ym43&utm_source=qr" target="_blank" aria-label="Instagram" class="text-gray-600 hover:text-white p-2 rounded-full hover:bg-gradient-to-r hover:from-amber-500 hover:to-red-500 transition-all duration-300">
                    <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                    </svg>
                </a>
                <div class="relative">
                    {{-- <button class="bg-amber-300 text-white hover:bg-amber-500 hover:text-gray-100 px-7 py-2 rounded-2xl text-xl font-medium">Join us</button> --}}
                    <a href="giving" class="inline-block bg-gradient-to-r from-amber-500 to-red-500 text-white hover:from-amber-600 hover:to-red-600 px-6 py-3 rounded-full text-lg font-bold transition-all duration-300 transform hover:scale-105 shadow-lg ring-2 ring-amber-200/40 hover:ring-4 hover:ring-amber-200/60" style="filter: drop-shadow(0 0 15px rgba(245, 158, 11, 0.3));">
                        Giving
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Mobile menu, show/hide based on menu state -->
    <!-- Mobile menu -->
    <div class="sm:hidden hidden" id="mobile-menu">
        <div class="px-4 pt-2 pb-6 space-y-2 bg-white/95 backdrop-blur-md border-t border-amber-500/20">
            <a href="about" class="text-gray-700 hover:bg-gradient-to-r hover:from-amber-500 hover:to-red-500 hover:text-white block px-4 py-3 rounded-xl text-lg font-medium transition-all duration-300">
                About
            </a>
            <a href="statement" class="text-gray-700 hover:bg-gradient-to-r hover:from-amber-500 hover:to-red-500 hover:text-white block px-4 py-3 rounded-xl text-lg font-medium transition-all duration-300">
                Statement of Faith
            </a>
            <a href="mission_and_vision" class="text-gray-700 hover:bg-gradient-to-r hover:from-amber-500 hover:to-red-500 hover:text-white block px-4 py-3 rounded-xl text-lg font-medium transition-all duration-300">
                Mission & Vision
            </a>
            <a href="leadership" class="text-gray-700 hover:bg-gradient-to-r hover:from-amber-500 hover:to-red-500 hover:text-white block px-4 py-3 rounded-xl text-lg font-medium transition-all duration-300">
                Leadership
            </a>
            <a href="ministries" class="text-gray-700 hover:bg-gradient-to-r hover:from-amber-500 hover:to-red-500 hover:text-white block px-4 py-3 rounded-xl text-lg font-medium transition-all duration-300">
                Ministries
            </a>
            <a href="campus" class="text-gray-700 hover:bg-gradient-to-r hover:from-amber-500 hover:to-red-500 hover:text-white block px-4 py-3 rounded-xl text-lg font-medium transition-all duration-300">
                Campus
            </a>
            <a href="events" class="text-gray-700 hover:bg-gradient-to-r hover:from-amber-500 hover:to-red-500 hover:text-white block px-4 py-3 rounded-xl text-lg font-medium transition-all duration-300">
                Events
            </a>
            <div class="flex space-x-4 pt-4 px-4">
                <a href="https://facebook.com" target="_blank" aria-label="Facebook" class="text-gray-600 hover:text-white p-2 rounded-full hover:bg-gradient-to-r hover:from-amber-500 hover:to-red-500 transition-all duration-300">
                    <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M22.675 0h-21.35C.6 0 0 .6 0 1.326v21.348C0 23.4.6 24 1.326 24H12.82v-9.294H9.692v-3.622h3.128V8.413c0-3.1 1.893-4.788 4.659-4.788 1.325 0 2.463.099 2.797.143v3.24l-1.92.001c-1.504 0-1.797.715-1.797 1.763v2.313h3.587l-.467 3.622h-3.12V24h6.116C23.4 24 24 23.4 24 22.674V1.326C24 .6 23.4 0 22.675 0"/>
                    </svg>
                </a>
                <a href="https://www.instagram.com/manifest_glory_global?igsh=MWwxcWJpNWQ1Ym43&utm_source=qr" target="_blank" aria-label="Instagram" class="text-gray-600 hover:text-white p-2 rounded-full hover:bg-gradient-to-r hover:from-amber-500 hover:to-red-500 transition-all duration-300">
                    <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</nav>

