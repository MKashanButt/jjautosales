<button
    {{ $attributes->merge(['type' => 'button', 'class' => 'inline-flex items-center justify-between px-3 py-2 md:px-4 md:py-2 bg-[#1C3ACC] border border-transparent rounded-md font-semibold text-xs md:text-xs text-white uppercase tracking-widest hover:bg-[#1C3ACC]/90 active:bg-[#1C3ACC]/80 focus:outline-none focus:ring-2 focus:ring-[#1C3ACC]/60 focus:ring-offset-1 md:focus:ring-offset-2 transition-all ease-in-out duration-150 cursor-pointer whitespace-nowrap']) }}>
    {{ $slot }}
</button>
