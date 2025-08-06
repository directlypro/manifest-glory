<section class="relative items-center w-full h-[100vh] md:h-[80vh] overflow-hidden">
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
                <p class="text-lg md:text-xl text-white/90 leading-relaxed md:px-6">
                    To Equip the nations for the work of the ministry<br>
                    and Edify the body of Christ till it Manifests His Glory.
                </p>
            </div>
            <a href="/register" class="inline-block bg-gradient-to-r from-amber-500 to-red-500 text-white hover:from-amber-600 hover:to-red-600 px-8 py-4 rounded-full text-xl font-bold transition-all duration-300 transform hover:scale-105 shadow-lg ring-2 ring-amber-200/40 hover:ring-4 hover:ring-amber-200/60" style="filter: drop-shadow(0 0 15px rgba(245, 158, 11, 0.3));">
                Plan a Visit
            </a>
        </div>
    </div>

</section>
