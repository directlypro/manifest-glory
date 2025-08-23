<div class="">
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
                            Sunday Service
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

    <!-- Hero Section with Background Image -->
    <div class="relative h-[400px] w-full">
        <div class="absolute inset-0">
            <img src="https://images.unsplash.com/photo-1724006347656-fb54765412b8?q=80&w=1742&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                 alt="Events"
                 class="w-full h-full object-cover"
                 style="max-height: 600px;">
            <!-- Overlay to make text more readable -->
            <div class="absolute inset-0 bg-opacity-500"></div>
        </div>
        <!-- Hero Text -->
        <div class="relative z-10 h-full flex flex-col items-center justify-center text-center px-4">
            <div class="backdrop-blur-md bg-white/10 rounded-2xl p-6 mb-4 shadow-2xl"
                 style="border: 1px solid rgba(255, 255, 255, 0.18);">
                <h1 class="text-5xl md:text-6xl font-bold text-white tracking-wide">
                    MGG Events
                </h1>
                <p class="text-xl md:text-2xl pt-3 text-white/90 max-w-3xl">
                    Join us for life-changing gatherings, worship services, and community events that strengthen our faith and fellowship
                </p>
            </div>
        </div>
    </div>
</div>
