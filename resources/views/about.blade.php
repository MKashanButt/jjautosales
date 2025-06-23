<x-app-layout>
    <section
        class="min-h-[60vh] sm:min-h-[70vh] lg:min-h-[80vh] py-16 px-4 mx-auto mb-8 flex items-center justify-center bg-[url('/images/warehouse.jpg')] bg-center bg-cover relative overflow-hidden after:content-[''] after:absolute after:inset-0 after:bg-black/50 after:z-40">

        <div class="relative z-50 text-center max-w-4xl">
            <h1 class="text-3xl sm:text-4xl md:text-5xl tracking-widest font-bold text-white uppercase">
                Lorem ipsum dolor sit.
            </h1>
            <p class="text-white mt-4 text-sm sm:text-base md:text-lg w-full sm:w-[90%] md:w-[80%] lg:w-[70%] mx-auto">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur veniam quasi veritatis,
                consequuntur maiores repellat sequi ducimus dolorem? Aspernatur eveniet doloremque aut. Facere quam
                tempora beatae ducimus minima, veniam voluptatibus eaque tenetur obcaecati magni ut, iusto totam?
                Delectus, fugiat totam?
            </p>
        </div>
    </section>

    <section class="flex flex-col lg:flex-row gap-6 w-[90%] mx-auto py-8 px-4 items-center">
        <!-- Image -->
        <img src="{{ asset('images/about.jpg') }}" alt="About"
            class="rounded-lg w-full lg:w-1/3 object-cover max-h-[400px]">

        <!-- Content -->
        <div class="w-full lg:w-2/3 py-4">
            <h2 class="font-bold text-2xl sm:text-3xl uppercase tracking-wide">Lorem Ipsum</h2>
            <p class="my-4 text-sm sm:text-base text-justify">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos cum commodi exercitationem similique
                excepturi id harum ratione debitis quibusdam quam tempore obcaecati incidunt accusamus facere iste quos
                cumque expedita quaerat aliquid eius, sit in saepe modi. Quidem maxime nisi ratione.
            </p>
            <p class="text-sm sm:text-base text-justify">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos cum commodi exercitationem similique
                excepturi id harum ratione debitis quibusdam quam tempore obcaecati incidunt accusamus facere iste quos
                cumque expedita quaerat aliquid eius, sit in saepe modi. Quidem maxime nisi ratione.
            </p>
            <x-primary-button class="mt-4">
                {{ __('Learn More') }}
            </x-primary-button>
        </div>
    </section>

    <section class="flex flex-col lg:flex-row gap-6 w-[90%] mx-auto items-start justify-center py-8 px-4">
        <!-- Left Content -->
        <div class="w-full lg:w-2/3 py-4">
            <h2 class="font-bold text-2xl sm:text-3xl uppercase tracking-wide">Lorem Ipsum</h2>
            <p class="my-4 text-sm sm:text-base text-justify">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos cum commodi exercitationem similique
                excepturi id harum ratione debitis...
            </p>
            <p class="text-sm sm:text-base text-justify">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos cum commodi exercitationem similique
                excepturi id harum ratione debitis...
            </p>
        </div>

        <!-- Right Card -->
        <div class="w-full lg:w-1/3 bg-[#1C3ACC] text-white p-6 rounded-lg text-center h-fit">
            <h2 class="font-bold text-2xl uppercase tracking-wide mb-4">Lorem Ipsum</h2>
            <p class="text-sm sm:text-base">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores culpa quod molestias natus tempora
                odio veniam quis id voluptatibus...
            </p>
        </div>
    </section>

    <section class="w-[90%] mx-auto my-8 relative">
        <div class="swiper mySwiper w-full">
            <div class="swiper-wrapper">
                <!-- Slide -->
                <div class="swiper-slide flex items-center justify-center p-4">
                    <div class="flex flex-col items-center text-center w-full max-w-xs">
                        <div class="rounded-lg overflow-hidden relative w-full">
                            <img src="{{ asset('images/car-placeholder.jpg') }}" alt="Vehicle"
                                class="w-full h-auto object-cover">
                            <img src="{{ asset('images/best-seller-badge.png') }}" alt="Badge"
                                class="w-16 h-16 sm:w-20 sm:h-20 absolute top-2 right-2">
                        </div>
                        <h2 class="text-lg sm:text-xl font-bold tracking-wide uppercase mt-2">Toyota Corolla</h2>
                        <p class="text-xs uppercase my-1">Lorem | Ipsum | Dior | Lipsum</p>
                        <p class="font-bold text-sm sm:text-base">FOB: <span class="text-green-600">$1,000</span></p>
                    </div>
                </div>
                <div class="swiper-slide flex items-center justify-center p-4">
                    <div class="flex flex-col items-center text-center w-full max-w-xs">
                        <div class="rounded-lg overflow-hidden relative w-full">
                            <img src="{{ asset('images/car-placeholder.jpg') }}" alt="Vehicle"
                                class="w-full h-auto object-cover">
                            <img src="{{ asset('images/best-seller-badge.png') }}" alt="Badge"
                                class="w-16 h-16 sm:w-20 sm:h-20 absolute top-2 right-2">
                        </div>
                        <h2 class="text-lg sm:text-xl font-bold tracking-wide uppercase mt-2">Toyota Corolla</h2>
                        <p class="text-xs uppercase my-1">Lorem | Ipsum | Dior | Lipsum</p>
                        <p class="font-bold text-sm sm:text-base">FOB: <span class="text-green-600">$1,000</span></p>
                    </div>
                </div>
                <div class="swiper-slide flex items-center justify-center p-4">
                    <div class="flex flex-col items-center text-center w-full max-w-xs">
                        <div class="rounded-lg overflow-hidden relative w-full">
                            <img src="{{ asset('images/car-placeholder.jpg') }}" alt="Vehicle"
                                class="w-full h-auto object-cover">
                            <img src="{{ asset('images/best-seller-badge.png') }}" alt="Badge"
                                class="w-16 h-16 sm:w-20 sm:h-20 absolute top-2 right-2">
                        </div>
                        <h2 class="text-lg sm:text-xl font-bold tracking-wide uppercase mt-2">Toyota Corolla</h2>
                        <p class="text-xs uppercase my-1">Lorem | Ipsum | Dior | Lipsum</p>
                        <p class="font-bold text-sm sm:text-base">FOB: <span class="text-green-600">$1,000</span></p>
                    </div>
                </div>
                <div class="swiper-slide flex items-center justify-center p-4">
                    <div class="flex flex-col items-center text-center w-full max-w-xs">
                        <div class="rounded-lg overflow-hidden relative w-full">
                            <img src="{{ asset('images/car-placeholder.jpg') }}" alt="Vehicle"
                                class="w-full h-auto object-cover">
                            <img src="{{ asset('images/best-seller-badge.png') }}" alt="Badge"
                                class="w-16 h-16 sm:w-20 sm:h-20 absolute top-2 right-2">
                        </div>
                        <h2 class="text-lg sm:text-xl font-bold tracking-wide uppercase mt-2">Toyota Corolla</h2>
                        <p class="text-xs uppercase my-1">Lorem | Ipsum | Dior | Lipsum</p>
                        <p class="font-bold text-sm sm:text-base">FOB: <span class="text-green-600">$1,000</span></p>
                    </div>
                </div>
            </div>

            <!-- Swiper Pagination -->
            <div class="swiper-pagination mt-4"></div>
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
                slidesPerView: 4,
                pagination: {
                    el: ".swiper-pagination",
                    clickable: true,
                },
                autoplay: true,
                breakpoints: {
                    540: {
                        slidesPerView: 1,
                        spaceBetween: 20,
                    },
                    1024: {
                        slidesPerView: 4,
                        spaceBetween: 50,
                    },
                },
            });
        </script>
    @endpush
</x-app-layout>
