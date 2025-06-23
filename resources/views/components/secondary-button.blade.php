<button
    {{ $attributes->merge(['class' => 'p-1.5 sm:p-2 bg-white font-bold uppercase text-xs sm:text-xs border border-gray-100 shadow-sm hover:shadow-md tracking-widest rounded-lg flex items-center justify-center cursor-pointer hover:bg-gray-50 active:bg-gray-100 focus:outline-none focus:ring-1 focus:ring-gray-200 focus:ring-offset-1 transition-all ease-in-out duration-200 whitespace-nowrap']) }}>
    {{ $slot }}
</button>
