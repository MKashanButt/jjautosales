<x-app-layout>
    <section
        class="w-full min-h-screen flex flex-col lg:flex-row items-center justify-center bg-white lg:bg-[linear-gradient(120deg,_white_50%,_#1C3ACC_50%)]">
        <!-- Image Column - Hidden on mobile, visible on lg+ -->
        <div class="hidden lg:flex lg:w-1/2 h-full items-center justify-center">
            <img src="{{ asset('images/half-car-image.png') }}" alt="Hero Half Car Image"
                class="w-full object-contain h-auto max-h-[80vh]" />
        </div>

        <!-- Content Column -->
        <div class="w-full lg:w-1/2 lg:py-0">
            <h1
                class="tracking-wide uppercase bg-[linear-gradient(120deg,_#1C3ACC_60px,_white_60px)] bg-clip-text text-[80px] font-extrabold text-transparent">
                Lorem Ipsum</h1>

            <p class="text-gray-800 lg:text-white px-0 lg:px-2">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione voluptatem rerum quis iste quibusdam
                quisquam quidem nesciunt delectus hic autem.
            </p>

            <form action="" class="w-full max-w-xl bg-white rounded-full flex shadow-lg mt-6">
                <input type="text" placeholder="Search Your New Vehicle"
                    class="p-3 sm:p-4 w-[85%] rounded-l-full focus:outline-none focus:ring-2 focus:ring-[#1C3ACC]/50">
                <button type="submit"
                    class="p-3 sm:p-4 w-[15%] flex items-center justify-center rounded-r-full bg-[#1C3ACC] text-white hover:bg-[#1C3ACC]/90 transition-colors">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5">
                        <path d="m21 21-4.34-4.34" />
                        <circle cx="11" cy="11" r="8" />
                    </svg>
                </button>
            </form>
        </div>
    </section>
    <section class="w-full lg:w-[90%] mx-auto flex flex-col lg:flex-row items-center px-4 lg:px-0 py-8 lg:py-16">
        <!-- Text Content -->
        <div class="w-full lg:w-1/2 px-4 lg:px-8 py-8 lg:py-0 flex flex-col gap-4">
            <h1 class="text-3xl sm:text-4xl font-bold uppercase tracking-wide">Featured Stocks</h1>
            <p class="text-gray-700 text-lg">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos libero natus
                sequi praesentium ratione, suscipit voluptatum! Tenetur sunt quae neque.</p>
            <a href="#stock" class="w-full sm:w-1/2 lg:w-1/3">
                <x-primary-button class="w-full flex items-center justify-between">
                    {{ __('Show More') }}
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5 ml-2">
                        <path
                            d="M2.062 12.348a1 1 0 0 1 0-.696 10.75 10.75 0 0 1 19.876 0 1 1 0 0 1 0 .696 10.75 10.75 0 0 1-19.876 0" />
                        <circle cx="12" cy="12" r="3" />
                    </svg>
                </x-primary-button>
            </a>
        </div>

        <!-- Carousel -->
        <div class="w-full lg:w-1/2 px-4 lg:px-8 py-8 lg:py-0 relative overflow-hidden mySwiper">
            <div class="swiper-wrapper w-full z-40">
                <!-- Slide 1 -->
                <div class="swiper-slide w-full h-full flex items-center justify-center p-2">
                    <div class="flex items-center justify-center flex-col">
                        <div class="w-full max-w-xs rounded-lg overflow-hidden relative shadow-lg">
                            <img src="{{ asset('images/car-placeholder.jpg') }}" alt="Toyota Corolla"
                                class="w-full h-auto aspect-video object-cover">
                            <img src="{{ asset('images/best-seller-badge.png') }}" alt="Best Seller"
                                class="w-16 h-16 sm:w-20 sm:h-20 absolute top-2 right-2">
                        </div>
                        <div class="text-center mt-4">
                            <h2 class="text-xl sm:text-2xl font-bold tracking-wide uppercase">Toyota Corolla</h2>
                            <p class="my-2 text-xs sm:text-sm uppercase text-gray-600">Lorem | Ipsum | Dior | Lipsum</p>
                            <p class="font-bold text-lg">FOB: <span class="text-green-700">$1,000</span></p>
                        </div>
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="swiper-slide w-full h-full flex items-center justify-center p-2">
                    <div class="flex items-center justify-center flex-col">
                        <div class="w-full max-w-xs rounded-lg overflow-hidden relative shadow-lg">
                            <img src="{{ asset('images/car-placeholder.jpg') }}" alt="Toyota Corolla"
                                class="w-full h-auto aspect-video object-cover">
                            <img src="{{ asset('images/best-seller-badge.png') }}" alt="Best Seller"
                                class="w-16 h-16 sm:w-20 sm:h-20 absolute top-2 right-2">
                        </div>
                        <div class="text-center mt-4">
                            <h2 class="text-xl sm:text-2xl font-bold tracking-wide uppercase">Toyota Corolla</h2>
                            <p class="my-2 text-xs sm:text-sm uppercase text-gray-600">Lorem | Ipsum | Dior | Lipsum</p>
                            <p class="font-bold text-lg">FOB: <span class="text-green-700">$1,000</span></p>
                        </div>
                    </div>
                </div>

                <!-- Slide 3 -->
                <div class="swiper-slide w-full h-full flex items-center justify-center p-2">
                    <div class="flex items-center justify-center flex-col">
                        <div class="w-full max-w-xs rounded-lg overflow-hidden relative shadow-lg">
                            <img src="{{ asset('images/car-placeholder.jpg') }}" alt="Toyota Corolla"
                                class="w-full h-auto aspect-video object-cover">
                            <img src="{{ asset('images/best-seller-badge.png') }}" alt="Best Seller"
                                class="w-16 h-16 sm:w-20 sm:h-20 absolute top-2 right-2">
                        </div>
                        <div class="text-center mt-4">
                            <h2 class="text-xl sm:text-2xl font-bold tracking-wide uppercase">Toyota Corolla</h2>
                            <p class="my-2 text-xs sm:text-sm uppercase text-gray-600">Lorem | Ipsum | Dior | Lipsum</p>
                            <p class="font-bold text-lg">FOB: <span class="text-green-700">$1,000</span></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination mt-4"></div>
        </div>
    </section>
    <section class="w-[90%] mx-auto flex flex-col lg:flex-row my-8 gap-4" id="stock">
        <div class="w-full lg:w-1/5 bg-[#1C3ACC] rounded-lg p-2 relative z-40">
            <div class="w-full sticky top-0 pt-4">
                <form action="" class="my-2 bg-white rounded-lg flex">
                    <input type="text" name="" id="" placeholder="Search"
                        class="p-2 w-[80%] rounded-full">
                    <button class="p-2 w-[20%] flex items-center justify-center cursor-pointer">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="w-5 h-5">
                            <path d="m21 21-4.34-4.34" />
                            <circle cx="11" cy="11" r="8" />
                        </svg>
                    </button>
                </form>
                <h3 class="font-bold uppercase tracking-wide text-white mt-8">Filters</h3>
                <form action="" class="flex flex-col gap-2">
                    <select name="" id="" class="w-full bg-white p-2 rounded-lg my-2">
                        <option value="" selected disabled class="font-bold text-gray-100">Select Make</option>
                    </select>
                    <select name="" id="" class="w-full bg-white p-2 rounded-lg my-2">
                        <option value="" selected disabled class="font-bold text-gray-100">Select Model</option>
                    </select>
                    <select name="" id="" class="w-full bg-white p-2 rounded-lg my-2">
                        <option value="" selected disabled class="font-bold text-gray-100">Select Year</option>
                    </select>
                    <select name="" id="" class="w-full bg-white p-2 rounded-lg my-2">
                        <option value="" selected disabled class="font-bold text-gray-100">Select Fuel Type
                        </option>
                    </select>
                    <x-secondary-button>
                        {{ __('Search') }}
                    </x-secondary-button>
                </form>
            </div>
        </div>
        <div class="w-full lg:w-4/5 px-2 sm:px-4">
            <h2 class="text-2xl font-bold tracking-wide uppercase text-center">Vehicle Catalog</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 py-4 mt-4">
                <x-vehicle-card :image="'images/car-placeholder.jpg'" :title="'Toyota Corolla'" :tags="'Lorem | Ipsum | Dior | Lipsum'" :price="'$1,000'" />
                <x-vehicle-card :image="'images/car-placeholder.jpg'" :title="'Toyota Corolla'" :tags="'Lorem | Ipsum | Dior | Lipsum'" :price="'$1,000'" />
                <x-vehicle-card :image="'images/car-placeholder.jpg'" :title="'Toyota Corolla'" :tags="'Lorem | Ipsum | Dior | Lipsum'" :price="'$1,000'" />
                <x-vehicle-card :image="'images/car-placeholder.jpg'" :title="'Toyota Corolla'" :tags="'Lorem | Ipsum | Dior | Lipsum'" :price="'$1,000'" />
                <x-vehicle-card :image="'images/car-placeholder.jpg'" :title="'Toyota Corolla'" :tags="'Lorem | Ipsum | Dior | Lipsum'" :price="'$1,000'" />
                <x-vehicle-card :image="'images/car-placeholder.jpg'" :title="'Toyota Corolla'" :tags="'Lorem | Ipsum | Dior | Lipsum'" :price="'$1,000'" />
                <x-vehicle-card :image="'images/car-placeholder.jpg'" :title="'Toyota Corolla'" :tags="'Lorem | Ipsum | Dior | Lipsum'" :price="'$1,000'" />
                <x-vehicle-card :image="'images/car-placeholder.jpg'" :title="'Toyota Corolla'" :tags="'Lorem | Ipsum | Dior | Lipsum'" :price="'$1,000'" />
                <x-vehicle-card :image="'images/car-placeholder.jpg'" :title="'Toyota Corolla'" :tags="'Lorem | Ipsum | Dior | Lipsum'" :price="'$1,000'" />
                <x-vehicle-card :image="'images/car-placeholder.jpg'" :title="'Toyota Corolla'" :tags="'Lorem | Ipsum | Dior | Lipsum'" :price="'$1,000'" />
                <x-vehicle-card :image="'images/car-placeholder.jpg'" :title="'Toyota Corolla'" :tags="'Lorem | Ipsum | Dior | Lipsum'" :price="'$1,000'" />
                <x-vehicle-card :image="'images/car-placeholder.jpg'" :title="'Toyota Corolla'" :tags="'Lorem | Ipsum | Dior | Lipsum'" :price="'$1,000'" />
                <x-vehicle-card :image="'images/car-placeholder.jpg'" :title="'Toyota Corolla'" :tags="'Lorem | Ipsum | Dior | Lipsum'" :price="'$1,000'" />
                <x-vehicle-card :image="'images/car-placeholder.jpg'" :title="'Toyota Corolla'" :tags="'Lorem | Ipsum | Dior | Lipsum'" :price="'$1,000'" />
                <x-vehicle-card :image="'images/car-placeholder.jpg'" :title="'Toyota Corolla'" :tags="'Lorem | Ipsum | Dior | Lipsum'" :price="'$1,000'" />
                <x-vehicle-card :image="'images/car-placeholder.jpg'" :title="'Toyota Corolla'" :tags="'Lorem | Ipsum | Dior | Lipsum'" :price="'$1,000'" />
            </div>
        </div>
    </section>
    <section
        class="w-[90%] mx-auto mb-8 py-16 px-4 sm:px-6 lg:px-8 rounded-lg flex items-center justify-center bg-[url('/images/warehouse.jpg')] bg-center bg-cover relative overflow-hidden after:content-[''] after:absolute after:inset-0 after:bg-black/50 after:z-40">

        <div class="relative z-50 text-center max-w-4xl">
            <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl tracking-widest font-bold text-white uppercase">
                Lorem ipsum dolor sit.
            </h1>
            <x-secondary-button class="mt-8 w-[200px] mx-auto">
                {{ __('Learn More') }}
            </x-secondary-button>
        </div>
    </section>

    <section class="w-[90%] mx-auto flex flex-col lg:flex-row items-center justify-center gap-8 py-8" id="contact">
        <!-- Left Content -->
        <div class="w-full lg:w-1/2 py-4 px-4">
            <h2 class="font-bold text-2xl sm:text-3xl uppercase tracking-wide">Lorem Ipsum</h2>
            <p class="my-4 text-justify text-sm sm:text-base">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos cum commodi exercitationem similique
                excepturi id harum...
            </p>
            <p class="text-justify text-sm sm:text-base">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos cum commodi exercitationem similique
                excepturi id harum...
            </p>
            <x-primary-button class="mt-4 z-40">
                {{ __('Learn More') }}
            </x-primary-button>
        </div>

        <!-- Right Form -->
        <div class="w-full lg:w-1/2 px-4">
            <h3 class="font-bold tracking-wide uppercase text-2xl mb-4 text-center lg:text-left">Get In Touch</h3>
            <form action="" class="flex flex-col gap-4">
                <div class="flex flex-col sm:flex-row gap-2 sm:gap-4 items-center">
                    <label for="name" class="w-full sm:w-[20%] sm:text-left">Name:</label>
                    <input type="text" name="name" id="name"
                        class="w-full sm:w-[80%] border-2 border-gray-200 rounded-lg p-2">
                </div>
                <div class="flex flex-col sm:flex-row gap-2 sm:gap-4 items-center">
                    <label for="email" class="w-full sm:w-[20%] sm:text-left">Email:</label>
                    <input type="email" name="email" id="email"
                        class="w-full sm:w-[80%] border-2 border-gray-200 rounded-lg p-2">
                </div>
                <div class="flex flex-col sm:flex-row gap-2 sm:gap-4">
                    <label for="message" class="w-full sm:w-[20%] sm:text-left py-2">Message:</label>
                    <textarea name="message" id="message"
                        class="w-full sm:w-[80%] h-40 resize-none border-2 border-gray-200 rounded-lg p-2"></textarea>
                </div>
                <x-primary-button>
                    {{ __('Submit') }}
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5">
                        <path
                            d="M14.536 21.686a.5.5 0 0 0 .937-.024l6.5-19a.496.496 0 0 0-.635-.635l-19 6.5a.5.5 0 0 0-.024.937l7.93 3.18a2 2 0 0 1 1.112 1.11z" />
                        <path d="m21.854 2.147-10.94 10.939" />
                    </svg>
                </x-primary-button>
            </form>
        </div>
    </section>


    @push('scripts')
        <script>
            var swiper = new Swiper(".mySwiper", {
                slidesPerView: 1,
                pagination: {
                    el: ".swiper-pagination",
                    clickable: true,
                },
                autoplay: true,
            });
        </script>
    @endpush
</x-app-layout>
