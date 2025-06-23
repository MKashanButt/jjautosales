<footer class="flex items-center justify-center bg-black text-white py-16">
    <div class="w-[90%] flex flex-wrap gap-8 md:gap-4">
        <!-- About Company -->
        <div class="w-full sm:w-1/2 md:w-1/4 flex flex-col gap-4">
            <h3 class="font-bold tracking-wide text-2xl uppercase">About Company</h3>
            <img src="{{ asset('images/logo.jpg') }}" alt="company-logo" class="w-28 md:w-38">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam, non!</p>
        </div>

        <!-- Quick Links -->
        <div class="w-full sm:w-1/2 md:w-1/4 flex flex-col gap-4">
            <h3 class="font-bold tracking-wide text-2xl uppercase">Quick Links</h3>
            <ul class="list-disc ml-5 transition ease-in-out duration-150 space-y-1">
                <li><a href="{{ route('home') }}" class="hover:ml-2 transition">Home</a></li>
                <li><a href="{{ route('stocks') }}" class="hover:ml-2 transition">Stock</a></li>
                <li><a href="{{ route('about') }}" class="hover:ml-2 transition">About Us</a></li>
                <li><a href="#stock" class="hover:ml-2 transition">Contact Us</a></li>
            </ul>
        </div>

        <!-- Makes -->
        <div class="w-full sm:w-1/2 md:w-1/4 flex flex-col gap-4">
            <h3 class="font-bold tracking-wide text-2xl uppercase">Makes</h3>
            <ul class="grid grid-cols-2 gap-x-4 gap-y-1 list-disc ml-5">
                <li class="hover:ml-1 transition">Lorem</li>
                <li class="hover:ml-1 transition">Lorem</li>
                <li class="hover:ml-1 transition">Lorem</li>
                <li class="hover:ml-1 transition">Lorem</li>
                <li class="hover:ml-1 transition">Lorem</li>
                <li class="hover:ml-1 transition">Lorem</li>
                <li class="hover:ml-1 transition">Lorem</li>
                <li class="hover:ml-1 transition">Lorem</li>
            </ul>
        </div>

        <!-- Socials -->
        <div class="w-full sm:w-1/2 md:w-1/4 flex flex-col gap-4">
            <h3 class="font-bold tracking-wide text-2xl uppercase">Socials</h3>
            <div class="flex gap-4">
                <span class="cursor-pointer hover:scale-110 transition">
                    <!-- Facebook Icon -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" stroke="currentColor"
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z" />
                    </svg>
                </span>
                <span class="cursor-pointer hover:scale-110 transition">
                    <!-- Instagram Icon -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" stroke="currentColor"
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <rect width="20" height="20" x="2" y="2" rx="5" ry="5" />
                        <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z" />
                        <line x1="17.5" x2="17.51" y1="6.5" y2="6.5" />
                    </svg>
                </span>
            </div>
        </div>
    </div>
</footer>

<!-- Bottom Copyright -->
<div class="bg-[#1C3ACC] p-2 text-center text-white">
    <p class="uppercase tracking-wide font-bold text-sm md:text-base">All Rights Reserved © JJ Auto Sales</p>
</div>
