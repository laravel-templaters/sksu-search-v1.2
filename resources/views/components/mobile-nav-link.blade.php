@props(['active'])

@php
$classes = ($active ?? false)
            ? 'block px-3 py-2 text-base font-medium text-white bg-primary-900 rounded-md'
            : 'block px-3 py-2 text-base font-medium text-gray-300 rounded-md hover:bg-primary-700 hover:text-white';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
