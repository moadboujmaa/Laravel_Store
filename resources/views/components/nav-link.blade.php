@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center px-1 pt-1 border-b-2 border-orange-500 dark:border-orange-500 font-semibold leading-5 text-gray-900 text-l focus:outline-none focus:border-indigo-700 transition duration-150 ease-in-out gap-2'
            : 'inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-l font-semibold leading-5 text-gray-800 dark:text-gray-800 hover:text-gray-600 dark:hover:text-gray-600 hover:border-gray-300 dark:hover:border-gray-700 focus:outline-none focus:text-gray-700 dark:focus:text-gray-300 focus:border-gray-300 dark:focus:border-gray-700 transition duration-150 ease-in-out gap-2';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
