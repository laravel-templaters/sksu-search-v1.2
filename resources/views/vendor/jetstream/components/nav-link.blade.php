@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center m-2 leading-5 bg-white text-primary-500 px-3 py-1 rounded-md text-sm font-medium transition'
            : 'inline-flex items-center  px-3 py-1 m-2 text-sm font-medium leading-5 text-gray-200 hover:bg-primary-200 hover:text-primary-600 rounded-md text-sm font-medium  transition';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
