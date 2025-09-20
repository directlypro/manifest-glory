<section id="events" class="py-16 bg-white relative">

    <!-- Background Elements -->
    <div class="absolute inset-0 bg-red-500/5"></div>
    <div class="absolute top-20 left-10 w-72 h-72 bg-amber-300 rounded-full mix-blend-multiply filter blur-xl opacity-20 animate-pulse"></div>
    <div class="absolute top-40 right-10 w-72 h-72 bg-red-500 rounded-full mix-blend-multiply filter blur-xl opacity-20 animate-pulse" style="animation-delay: 2s;"></div>

    {{-- For all the images related to events I suggest that you add a single element that will pull data from the database and populate the view with the number of images that are provided  --}}
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center mb-12">
            <h2 class="text-4xl font-bold text-black mb-4">Event Details</h2>
            <div class="flex justify-center">
                <div class="h-1 w-42 bg-gradient-to-r from-amber-500 to-red-500 rounded-full relative">
                    <div class="absolute inset-0 h-1 w-42 bg-gradient-to-r from-amber-500 to-red-500 rounded-full"></div>
                </div>
            </div>
            <p class="text-xl text-gray-600 pt-4">Join us for these special gatherings</p>
        </div>

        {{--  --}}
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Worship Night -->
            <div class="bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105 border border-amber-100">
                <div class="relative h-48 overflow-hidden">
                    <div class="absolute inset-0 bg-gradient-to-b from-transparent to-black/30 z-10"></div>
                    <img src="https://images.unsplash.com/photo-1507692049790-de58290a4334?q=80&w=1740&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                            alt="Worship Night"
                            class="w-full h-full object-cover transform hover:scale-110 transition-transform duration-700">
                </div>
                <div class="p-6">
                    <h3 class="text-2xl font-bold text-gray-800 mb-2">Worship Night</h3>
                    <div class="flex items-center text-gray-600 mb-2">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                        </svg>
                        <span class="text-sm">13 July, 7:00 PM</span>
                    </div>
                    <div class="flex items-center text-gray-600 mb-4">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                        </svg>
                        <span class="text-sm">Precinct Cinema</span>
                    </div>
                    <p class="text-gray-600 text-sm mb-6">Join us for an evening of powerful worship and prayer</p>
                    <a href="#" class="inline-flex items-center px-4 py-2 bg-gradient-to-r from-amber-500 to-red-500 text-white rounded-lg hover:from-amber-600 hover:to-red-600 transition-all duration-300 transform hover:scale-105 shadow-md">
                        <span>Join Now</span>
                        <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Bible Study -->
            <div class="bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105 border border-amber-100">
                <div class="relative h-48 overflow-hidden">
                    <div class="absolute inset-0 bg-gradient-to-b from-transparent to-black/30 z-10"></div>
                    <img src="https://images.unsplash.com/photo-1574895954820-362f465e10be?q=80&w=2671&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                            alt="Bible Study"
                            class="w-full h-full object-cover transform hover:scale-110 transition-transform duration-700">
                </div>
                <div class="p-6">
                    <h3 class="text-2xl font-bold text-gray-800 mb-2">Bible Study</h3>
                    <div class="flex items-center text-gray-600 mb-2">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                        </svg>
                        <span class="text-sm">7:00 PM</span>
                    </div>
                    <div class="flex items-center text-gray-600 mb-4">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                        </svg>
                        <span class="text-sm">Various locations</span>
                    </div>
                    <p class="text-gray-600 text-sm mb-6">Deep dive into God's Word with interactive discussions, click <span class="text-amber-600">Join Now</span> to find out more information</p>
                    <a href="#" class="inline-flex items-center px-4 py-2 bg-gradient-to-r from-amber-500 to-red-500 text-white rounded-lg hover:from-amber-600 hover:to-red-600 transition-all duration-300 transform hover:scale-105 shadow-md">
                        <span>Join Now</span>
                        <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Combined Cell Group -->
            <div class="bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105 border border-amber-100">
                <div class="relative h-48 overflow-hidden">
                    <div class="absolute inset-0 bg-gradient-to-b from-transparent to-black/30 z-10"></div>
                    <img src="https://images.unsplash.com/photo-1529156069898-49953e39b3ac?q=80&w=1742&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                            alt="Combined Cell Group"
                            class="w-full h-full object-cover transform hover:scale-110 transition-transform duration-700">
                </div>
                <div class="p-6">
                    <h3 class="text-2xl font-bold text-gray-800 mb-2">Combined Cell Group</h3>
                    <div class="flex items-center text-gray-600 mb-2">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                        </svg>
                        <span class="text-sm">Date TBA</span>
                    </div>
                    <div class="flex items-center text-gray-600 mb-4">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                        </svg>
                        <span class="text-sm">Precinct Cinema</span>
                    </div>
                    <p class="text-gray-600 text-sm mb-6">Fellowship, prayer, and sharing in a warm community setting</p>
                    <a href="#" class="inline-flex items-center px-4 py-2 bg-gradient-to-r from-amber-500 to-red-500 text-white rounded-lg hover:from-amber-600 hover:to-red-600 transition-all duration-300 transform hover:scale-105 shadow-md">
                        <span>Join Now</span>
                        <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                        </svg>
                    </a>
                </div>
        </div>
    </div>
</section>
