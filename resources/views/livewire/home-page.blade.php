<div>
    <div class="relative flex justify-center items-center w-full h-[60vh] md:h-[80vh] overflow-hidden">
        <picture>
            <!-- Desktop image -->
            <source media="(min-width: 1024px)" srcset="{{ asset('/images/worship_image.jpg') }}">
            <!-- Tablet image -->
            <source media="(min-width: 640px)" srcset="{{ asset('/images/worship_image_2.jpg') }}">
            <!-- Mobile image -->
            <img src="{{ asset('/images/worship_image.jpg') }}" alt="Worship Image" class="object-cover w-full h-full" loading="lazy">
        </picture>
        <!-- Overlay -->
        <div class="absolute inset-0"></div>
        <!-- Centered Content -->
        <div class="absolute inset-0 flex flex-col items-center justify-center">
            <div class="text-center text-white bg-red-300 bg-opacity-70 p-8 md:p-12 rounded-lg max-w-2xl mx-4 backdrop-blur-sm shadow-xl">
                <h1 class="text-xl">Welcome to </h1>
                <h1 class="text-3xl md:text-7xl font-bold mb-6 leading-tight">Manifest Glory Global</h1>
                <p class="text-lg md:text-xl mb-2 opacity-90">Join us in worship and fellowship</p>
                <p class="text-base md:text-lg mb-8 opacity-90">To Equip the nations for the work of the ministry<br>
                and Edify the body of Christ till it manifests His glory.</p>
                <a href="/register" class="inline-block bg-amber-500 text-white hover:bg-amber-600 hover:text-white px-8 py-3 rounded-full text-lg font-semibold transition duration-300 transform hover:scale-105 shadow-lg">
                    Join Now
                </a>
            </div>
        </div>
    </div>
</div>
