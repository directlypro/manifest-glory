<nav class="menu-container" role="navigation" aria-label="Main Navigation">
    <!-- burger menu button -->
    <button
        aria-label="Toggle menu"
        aria-expanded="{{ $menuOpen ? 'true' : 'false' }}"
        wire:click="toggleMenu"
        class="burger-menu"
        type="button"
    >
        <span class="{{ $menuOpen ? 'open' : '' }}"></span>
        <span class="{{ $menuOpen ? 'open' : '' }}"></span>
        <span class="{{ $menuOpen ? 'open' : '' }}"></span>
    </button>

    <!-- logo -->
    <a href="#" class="menu-logo">
        <img src="about_blank" alt="blank_image" />
    </a>

    <!-- menu items -->
    <div class="menu {{ $menuOpen ? 'menu-open' : 'menu-closed' }}">
        <ul>
            <li><a href="#home">Home</a></li>
            <li><a href="#about_us">About Us</a></li>
            <li><a href="#giving">Giving</a></li>
        </ul>
        <ul>
            <li><a href="#contact">Contact Us</a></li>
        </ul>
    </div>
</nav>
