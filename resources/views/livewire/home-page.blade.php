<div>
    <div class="static items-center w-full h-[60vh] md:h-[80vh] overflow-hidden">
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
        <div class="absolute inset-0 flex flex-col items-center justify-center opacity-">
            <div class="text-center text-white bg-white/20 p-10 md:p-16 rounded-3xl max-w-7xl mx-4 backdrop-blur-xl shadow-2xl border border-white/30" style="backdrop-filter: blur(18px) saturate(160%) brightness(0.9); background-clip: padding-box;">
                <h1 class="text-2xl md:text-3xl font-semibold mb-2 tracking-wide text-amber-100 drop-shadow">Ready to Find Your Spiritual Community?</h1>
                <h1 class="text-4xl md:text-7xl font-extrabold mb-4 md:mb-8 leading-tight text-white drop-shadow-lg">Manifest Glory Global</h1>
                <p class="text-lg md:text-2xl mb-4 md:mb-6 font-medium text-white/90">Join us in worship and fellowship</p>
                <div class="mb-8 md:mb-10">
                    <p class="text-lg md:text-xl font-light text-white/90 leading-relaxed md:px-6">
                        To <span class="font-semibold text-amber-100">Equip the nations</span> for the work of the ministry<br>
                        and <span class="font-semibold text-amber-100">Edify the body of Christ</span> till it manifests His glory.
                    </p>
                </div>
                <a href="/register" class="inline-block bg-amber-500 text-white hover:bg-amber-600 hover:text-white px-10 py-4 rounded-full text-xl font-bold transition duration-300 transform hover:scale-105 shadow-lg ring-2 ring-amber-200/40">Join Now</a>
            </div>
        </div>
    </div>
</div>
