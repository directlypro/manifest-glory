<div class="">
    <!-- Event Popup -->
    <div x-data="{ show: @entangle('showEventPopup') }"
         x-show="show"
         x-transition:enter="transition ease-out duration-300"
         x-transition:enter-start="opacity-0"
         x-transition:enter-end="opacity-100"
         x-transition:leave="transition ease-in duration-200"
         x-transition:leave-start="opacity-100"
         x-transition:leave-end="opacity-0"
         class="fixed inset-0 z-50 overflow-y-auto"
         style="display: none;">
        <div class="flex items-center justify-center min-h-screen px-4">
            <!-- Backdrop -->
            <div class="fixed inset-0 bg-black opacity-50"></div>

            <!-- Modal -->
            <div class="relative bg-white rounded-lg max-w-lg w-full mx-auto shadow-xl z-50">
                <!-- Close Button -->
                <button wire:click="closePopup" class="absolute top-4 right-4 text-gray-500 hover:text-gray-700 ">
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>

                <!-- Content -->
                <div class="p-6">
                    <img src="/images/service_image.webp" alt="Upcoming Event" class="w-full p-4">
                    <h2 class="text-2xl font-bold mb-2">First Sunday Service</h2>
                    <p class="text-gray-600 mb-4">Join us for a night of worship and fellowship on September 7th, 2025. Experience the presence of God with our worship team and Pastor Kennedy.</p>

                    <!-- External Link Button -->
                    <div class="mt-6">
                        <a href="https://docs.google.com/forms/d/e/1FAIpQLSdWQGBdnIBv70lo3_-XCj_Pn7LKs_R_hyCHHWEU2Aa9MWGMMw/viewform"
                           class="block w-full bg-amber-600 text-white text-center rounded-md py-3 px-4 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition duration-150 ease-in-out">
                            RSVP for Event
                        </a>
                        <p class="text-sm text-gray-500 mt-2 text-center">
                            Click to register on our external registration platform
                        </p>
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
