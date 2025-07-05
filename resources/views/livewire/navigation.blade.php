<div>
    <nav class="bg-gray-700">

        <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8 p-10">
            <div class="relative flex items-center justify-between h-19">
                <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
                    <!-- Mobile menu button-->
                </div>
                <div class="flex-1 flex items-center justify-center sm:items-stretch sm:justify-start">
                    <a href="/" class=" flex items-center space-x-2">
                        <img src="{{ asset('/images/mgg_crop.png')}}" alt="Logo" class="w-27 px-1">
                        {{-- <span class="text-white text-2xl font-bold hidden md:inline">Manifest Glory Global</span> --}}
                    </a>
                </div>
                <div class="flex-1/4">
                    <div class="hidden sm:block sm:ml-6">
                        <div class="flex space-x-15">
                            <a href="#" class="text-gray-300 hover:bg-gray-800 hover:text-white px-3 py-2 rounded-md text-xl font-medium">About</a>
                            <a href="#" class="text-gray-300 hover:bg-gray-800 hover:text-white px-3 py-2 rounded-md text-xl font-medium">Giving</a>
                            <a href="#" class="text-gray-300 hover:bg-gray-800 hover:text-white px-3 py-2 rounded-md text-xl font-medium">Events</a>
                            <a href="#" class="text-gray-300 hover:bg-gray-800 hover:text-white px-3 py-2 rounded-md text-xl font-medium">Contact Us</a>
                        </div>
                    </div>
                </div>
                <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
                    <!-- Profile dropdown -->
                    <div class="relative">
                        <div>
                          <button class="bg-amber-300 text-white hover:bg-amber-500 hover:text-gray-100 px-7 py-2 rounded-2xl text-xl font-medium">Join</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Mobile menu, show/hide based on menu state -->
        <div class="sm:hidden">
            <div class="px-2 pt-2 pb-3 space-y-1">
                <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">About</a>
                <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Giving</a>
                <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Events</a>
                <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Contact Us</a>
            </div>
        </div>
    </nav>
</div>
