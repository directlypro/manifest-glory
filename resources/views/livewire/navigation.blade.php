
<div>
    <nav class="bg-white sticky top-0 z-50 shadow" aria-label="Main Navigation">
        <div class="
        max-w-7xl
        mx-auto
        px-2
        sm:px-6
        lg:px-8
        p-4">
            <div class="
            relative
            flex
            items-center
            justify-between
            h-16">
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
                        <img src="{{ asset('/images/mgg_crop.png')}}" alt="Logo" class="w-15 h-15 transition-transform duration-300 group-hover:scale-110">
                        <span class="text-gray-900 text-2xl font-bold hidden md:inline">Manifest Glory Global</span>
                    </a>
                </div>
                <!-- Main navigation links -->
                <div class="flex-1/4">
                    <div class="hidden sm:block sm:ml-6">
                        <div class="flex space-x-6">
                            <a href="#" class="{{ request()->is('about') ? 'bg-gray-200 text-gray-900' : 'text-gray-700' }} hover:bg-gray-100 hover:text-gray-900 px-3 py-2 rounded-md text-xl font-medium">About</a>
                            <a href="#" class="{{ request()->is('giving') ? 'bg-gray-200 text-gray-900' : 'text-gray-700' }} hover:bg-gray-100 hover:text-gray-900 px-3 py-2 rounded-md text-xl font-medium">Giving</a>
                            <div class="relative group">
                                <a href="#" class="{{ request()->is('events*') ? 'bg-gray-200 text-gray-900' : 'text-gray-700' }} hover:bg-gray-100 hover:text-gray-900 px-3 py-2 rounded-md text-xl font-medium inline-flex items-center">Events
                                    <svg class="ml-1 h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" /></svg>
                                </a>
                                <!-- Dropdown -->
                                <div class="absolute left-0 mt-2 w-40 bg-white rounded-md shadow-lg py-2 z-20 hidden group-hover:block">
                                    <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Upcoming</a>
                                    <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Past Events</a>
                                </div>
                            </div>
                            <a href="#" class="{{ request()->is('contact') ? 'bg-gray-200 text-gray-900' : 'text-gray-700' }} hover:bg-gray-100 hover:text-gray-900 px-3 py-2 rounded-md text-xl font-medium">Contact Us</a>
                        </div>
                    </div>
                </div>
                <!-- Social Media & Join Button -->
                <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0 space-x-3">
                    <a href="https://facebook.com" target="_blank" aria-label="Facebook" class="text-gray-300 hover:text-white">
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24"><path d="M22.675 0h-21.35C.6 0 0 .6 0 1.326v21.348C0 23.4.6 24 1.326 24H12.82v-9.294H9.692v-3.622h3.128V8.413c0-3.1 1.893-4.788 4.659-4.788 1.325 0 2.463.099 2.797.143v3.24l-1.92.001c-1.504 0-1.797.715-1.797 1.763v2.313h3.587l-.467 3.622h-3.12V24h6.116C23.4 24 24 23.4 24 22.674V1.326C24 .6 23.4 0 22.675 0"/></svg>
                    </a>
                    <a href="https://twitter.com" target="_blank" aria-label="Twitter" class="text-gray-300 hover:text-white">
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24"><path d="M24 4.557a9.93 9.93 0 01-2.828.775 4.932 4.932 0 002.165-2.724c-.951.555-2.005.959-3.127 1.184A4.916 4.916 0 0016.616 3c-2.717 0-4.92 2.206-4.92 4.917 0 .386.044.762.127 1.124C7.728 8.77 4.1 6.797 1.671 3.149c-.423.724-.666 1.562-.666 2.475 0 1.708.87 3.216 2.188 4.099a4.904 4.904 0 01-2.229-.616c-.054 1.997 1.397 3.872 3.448 4.292a4.936 4.936 0 01-2.224.084c.627 1.956 2.444 3.377 4.6 3.417A9.867 9.867 0 010 21.543a13.94 13.94 0 007.548 2.212c9.058 0 14.009-7.513 14.009-14.009 0-.213-.005-.425-.014-.636A10.025 10.025 0 0024 4.557z"/></svg>
                    </a>
                    <div class="relative">
                        <button class="bg-amber-300 text-white hover:bg-amber-500 hover:text-gray-100 px-7 py-2 rounded-2xl text-xl font-medium">Join us</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Mobile menu, show/hide based on menu state -->
        <div class="sm:hidden hidden" id="mobile-menu">
            <div class="px-2 pt-2 pb-3 space-y-1">
                <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">About</a>
                <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Giving</a>
                <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Events</a>
                <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Contact Us</a>
                <div class="flex space-x-3 mt-2">
                    <a href="https://facebook.com" target="_blank" aria-label="Facebook" class="text-gray-300 hover:text-white">
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24"><path d="M22.675 0h-21.35C.6 0 0 .6 0 1.326v21.348C0 23.4.6 24 1.326 24H12.82v-9.294H9.692v-3.622h3.128V8.413c0-3.1 1.893-4.788 4.659-4.788 1.325 0 2.463.099 2.797.143v3.24l-1.92.001c-1.504 0-1.797.715-1.797 1.763v2.313h3.587l-.467 3.622h-3.12V24h6.116C23.4 24 24 23.4 24 22.674V1.326C24 .6 23.4 0 22.675 0"/></svg>
                    </a>
                    <a href="https://twitter.com" target="_blank" aria-label="Twitter" class="text-gray-300 hover:text-white">
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24"><path d="M24 4.557a9.93 9.93 0 01-2.828.775 4.932 4.932 0 002.165-2.724c-.951.555-2.005.959-3.127 1.184A4.916 4.916 0 0016.616 3c-2.717 0-4.92 2.206-4.92 4.917 0 .386.044.762.127 1.124C7.728 8.77 4.1 6.797 1.671 3.149c-.423.724-.666 1.562-.666 2.475 0 1.708.87 3.216 2.188 4.099a4.904 4.904 0 01-2.229-.616c-.054 1.997 1.397 3.872 3.448 4.292a4.936 4.936 0 01-2.224.084c.627 1.956 2.444 3.377 4.6 3.417A9.867 9.867 0 010 21.543a13.94 13.94 0 007.548 2.212c9.058 0 14.009-7.513 14.009-14.009 0-.213-.005-.425-.014-.636A10.025 10.025 0 0024 4.557z"/></svg>
                    </a>
                </div>
            </div>
        </div>
    </nav>
</div>
