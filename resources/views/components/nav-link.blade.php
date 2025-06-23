@props(['active'])

@php
    $classes =
        $active ?? false
            ? 'p-2 border-b-2 border-[#1C3ACC]/70'
            : 'p-2 border-b-2 border-transparent hover:border-[#1C3ACC]/70 transition ease-in-out duration-150';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
