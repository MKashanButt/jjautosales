<x-app-layout>
    <section
        class="w-full h-100 bg-[url('images/stock-banner.jpg')] bg-cover bg-center bg-norepeat relative after:content-[''] after:bg-black/70 after:absolute after:w-full after:h-full after:left-0 after:top-0 flex items-center justify-center z-40">
        <h1 class="font-bold tracking-wide text-2xl lg:text-5xl text-white z-50 uppercase">Vehicles You Can Rely On!</h1>
    </section>
    <section class="w-[90%] mx-auto flex flex-col lg:flex-row my-8 gap-4" id="stock">
        <div class="w-full lg:w-1/5 bg-[#1C3ACC] rounded-lg p-2 relative z-40">
            <div class="w-full sticky top-0 pt-4">
                <form action="" class="my-2 bg-white rounded-lg flex">
                    <input type="text" name="" id="" placeholder="Search"
                        class="p-2 w-[80%] rounded-lg">
                    <button class="p-2 w-[20%] flex items-center justify-center cursor-pointer">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5">
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
            <x-primary-button class="mt-4">
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
</x-app-layout>
