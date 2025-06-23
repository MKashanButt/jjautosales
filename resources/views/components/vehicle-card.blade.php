<div class="flex items-center justify-center flex-col">
    <img src="{{ asset($image) }}" alt="" class="w-full rounded-lg">
    <h2 class="text-xl font-bold tracking-wide uppercase mt-2">{{ $title }}</h2>
    <p class="my-1 text-xs uppercase">{{ $tags }}</p>
    <p class="font-bold">FOB: <span class="text-green-700">{{ $price }}</span></p>
</div>
