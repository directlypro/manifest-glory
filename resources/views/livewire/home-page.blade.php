<section class="relative items-center w-full h-[100vh] md:h-[80vh] overflow-hidden">

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

    <picture>
        <!-- Desktop image -->
        <source media="(min-width: 1024px)" srcset="{{ asset('/images/worship_image.webp') }}">
        <!-- Tablet image -->
        <source media="(min-width: 640px)" srcset="{{ asset('/images/worship_image.webp') }}">
        <!-- Mobile image -->
        <img src="{{ asset('/images/worship_image.webp') }}" alt="Worship Image" class="object-cover w-full h-full" loading="lazy">
    </picture>
    <!-- Overlay -->
    <div class="absolute inset-0"></div>
    <!-- Centered Content -->
    <div class="absolute inset-0 flex flex-col items-center justify-center opacity-">
        <div class="text-center text-white bg-white/20 p-10 md:p-16 rounded-3xl max-w-7xl mx-4 backdrop-blur-xl shadow-2xl border border-white/30" style="backdrop-filter: blur(18px) saturate(160%) brightness(0.9); background-clip: padding-box;">
            <h1 class="text-xl md:text-3xl font-semibold mb-2 tracking-wide bg-gradient-to-r from-amber-500 to-amber-400 bg-clip-text text-transparent">Ready to Find Your Spiritual Home?</h1>
            <h1 class="text-3xl md:text-7xl font-extrabold mb-4 md:mb-8 leading-tight text-white drop-shadow-lg">Manifest Glory Global</h1>
            <p class="text-xl md:text-3xl mb-4 md:mb-6 font-medium text-white/90">Join us in worship and fellowship</p>
            <div class="mb-8 md:mb-10">
                {{-- <p class="text-lg md:text-xl text-white/90 leading-relaxed md:px-6">
                    To Equip the nations for the work of the ministry<br>
                    and Edify the body of Christ till it Manifests His Glory.
                </p> --}}
            </div>
            <a href="/register" class="inline-block bg-gradient-to-r from-amber-500 to-red-500 text-white hover:from-amber-600 hover:to-red-600 px-8 py-4 rounded-full text-xl font-bold transition-all duration-300 transform hover:scale-105 shadow-lg ring-2 ring-amber-200/40 hover:ring-4 hover:ring-amber-200/60" style="filter: drop-shadow(0 0 15px rgba(245, 158, 11, 0.3));">
                Plan a Visit
            </a>
        </div>
    </div>

</section>
