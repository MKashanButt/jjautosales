<header class="w-full flex items-center justify-center relative fixed z-50">
    <div
        class="w-full md:w-[90%] flex items-center justify-between my-0 md:my-4 mx-auto rounded-none md:rounded-lg shadow-sm p-2 fixed bg-white/30 backdrop-blur-md top-0">
        <!-- Logo -->
        <img src="{{ asset('images/logo.png') }}" alt="company-logo" class="w-28 md:w-38">

        <!-- Desktop Navigation -->
        <nav class="hidden md:block w-4/5">
            <ul class="flex justify-end items-center gap-2">
                <x-nav-link :href="route('home')" :active="request()->routeIs('home')">
                    {{ __('Home') }}
                </x-nav-link>
                <x-nav-link :href="route('stocks')" :active="request()->routeIs('stocks')">
                    {{ __('Stocks') }}
                </x-nav-link>
                <x-nav-link :href="route('about')" :active="request()->routeIs('about')">
                    {{ __('About Us') }}
                </x-nav-link>
                <li>
                    <a href="#contact">
                        <x-primary-button>
                            {{ __('Contact Us') }}
                        </x-primary-button>
                    </a>
                </li>
            </ul>
        </nav>

        <!-- Mobile Menu Button -->
        <button class="md:hidden text-gray-700 focus:outline-none" id="mobile-menu-button">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16">
                </path>
            </svg>
        </button>
    </div>

    <!-- Mobile Menu -->
    <div class="md:hidden fixed top-16 left-0 right-0 bg-white shadow-md hidden" id="mobile-menu">
        <ul class="flex flex-col items-center gap-4 py-4">
            <x-nav-link :href="route('home')" :active="request()->routeIs('home')" class="block w-full text-center">
                {{ __('Home') }}
            </x-nav-link>
            <x-nav-link :href="route('stocks')" :active="request()->routeIs('stocks')" class="block w-full text-center">
                {{ __('Stocks') }}
            </x-nav-link>
            <x-nav-link :href="route('about')" :active="request()->routeIs('about')" class="block w-full text-center">
                {{ __('About Us') }}
            </x-nav-link>
            <li class="w-full px-4">
                <x-primary-button class="w-full justify-center">
                    {{ __('Contact Us') }}
                </x-primary-button>
            </li>
        </ul>
    </div>
</header>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');

        mobileMenuButton.addEventListener('click', function() {
            mobileMenu.classList.toggle('hidden');
        });
    });
</script>
