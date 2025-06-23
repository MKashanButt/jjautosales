<footer class="flex items-center justify-center bg-black text-white py-16">
    <div class="w-[90%] flex gap-4">
        <div class="w-1/4 flex flex-col gap-4">
            <h3 class="font-bold tracking-wide text-2xl uppercase">About Company</h3>
            <img src="{{ asset('images/logo.jpg') }}" alt="company-logo" class="w-28 md:w-38">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam, non!</p>
        </div>
        <div class="w-1/4 flex flex-col gap-4">
            <h3 class="font-bold tracking-wide text-2xl uppercase">Quick Links</h3>
            <ul class="list-disc ml-5 transition ease-in-out duration-150">
                <a href="{{ route('home') }}">
                    <li class="transition ease-in-out duration-150 hover:ml-6">Home</li>
                </a>
                <a href="{{ route('stocks') }}">
                    <li class="transition ease-in-out duration-150 hover:ml-6">Stock</li>
                </a>
                <a href="{{ route('about') }}">
                    <li class="transition ease-in-out duration-150 hover:ml-6">About Us</li>
                </a>
                <a href="#stock">
                    <li class="transition ease-in-out duration-150 hover:ml-6">Contact Us</li>
                </a>
            </ul>
        </div>
        <div class="w-1/4 flex flex-col gap-4">
            <h3 class="font-bold tracking-wide text-2xl uppercase">Makes</h3>
            <ul class="list-disc ml-5 transition ease-in-out duration-150 grid grid-cols-2 cursor-pointer">
                <li class="transition ease-in-out duration-150 hover:ml-6">Lorem</li>
                <li class="transition ease-in-out duration-150 hover:ml-6">Lorem</li>
                <li class="transition ease-in-out duration-150 hover:ml-6">Lorem</li>
                <li class="transition ease-in-out duration-150 hover:ml-6">Lorem</li>
                <li class="transition ease-in-out duration-150 hover:ml-6">Lorem</li>
                <li class="transition ease-in-out duration-150 hover:ml-6">Lorem</li>
                <li class="transition ease-in-out duration-150 hover:ml-6">Lorem</li>
                <li class="transition ease-in-out duration-150 hover:ml-6">Lorem</li>
            </ul>
        </div>
        <div class="w-1/4 flex flex-col gap-4">
            <h3 class="font-bold tracking-wide text-2xl uppercase">Socials</h3>
            <div class="flex gap-2">
                <span class="cursor-pointer">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5">
                        <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z" />
                    </svg>
                </span>
                <span class="cursor-pointer">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5">
                        <rect width="20" height="20" x="2" y="2" rx="5" ry="5" />
                        <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z" />
                        <line x1="17.5" x2="17.51" y1="6.5" y2="6.5" />
                    </svg>
                </span>
            </div>
        </div>
    </div>
</footer>
<div class="bg-[#1C3ACC] p-2 text-center text-white">
    <p class="uppercase trackng-wide font-bold">All Rights Reserved © JJ Auto Sales</p>
</div>
