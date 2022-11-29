@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex w-full rounded-md items-center px-2 py-1 text-xs  font-bold leading-5 text-slate-100 shadow-md drop-shadow-md bg-blue-500 focus:outline-none focus:bg-gray-100 transition duration-150 ease-in-out'
            : 'inline-flex w-full rounded-md items-center px-2 py-1 text-xs font-semibold leading-5 text-slate-500 hover:text-slate-700 hover:bg-gray-100 focus:outline-none focus:text-slate-700 focus:bg-gray-100 transition duration-150 ease-in-out';
@endphp

<a  data-mdb-ripple="true"
    data-mdb-ripple-color="primary"
    {{ $attributes->merge(['class' => $classes]) }}>

    {{ $slot }}

</a>
