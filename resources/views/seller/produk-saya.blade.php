@extends('layouts.app')
@section('content')
<div class="flex justify-center gap-4 px-4 py-10 mx-auto max-w-7xl">
    @include('layouts.user-nav')
    <div class="w-full p-2 md:p-6 bg-white rounded-lg shadow-lg drop-shadow-lg">
        {{-- Header --}}
        <h5 class="mb-2 text-lg font-bold leading-tight text-gray-900 border-b-2">Produk Saya</h5>
        <div class="flex flex-wrap gap-2 md:gap-4 items-center">
            {{-- Item 1 --}}
                <div class="inline-block w-40 max-w-sm border rounded-lg shadow-sm drop-shadow-sm overflow-hidden">
                    <a href="#">
                        <div class="flex flex-col justify-center">
                            <div class="h-40">
                                <img class="object-cover w-full h-full rounded-t-md"
                                    src="https://images.unsplash.com/photo-1475855581690-80accde3ae2b?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80"
                                    alt="">
                            </div>
                            <div class="flex flex-col justify-start">
                                {{-- Penjelasan Produk --}}
                                <div class="p-3 mt-2">
                                    <p class="text-sm font-light leading-tight text-gray-600 line-clamp-2">Lorem ipsum dolor sit amet
                                        consectetur
                                        adipisicing
                                        elit.</p>
                                    <div class="flex mt-3 flex-nowrap">
                                        <span class="text-sm font-semibold text-orange-600">Rp.</span>
                                        <h6 class="inline-block text-base font-bold text-orange-600">850.000.000</h6>
                                    </div>
                                </div>
                                <div class="p-1 border">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                        class="inline-block w-5 h-5 my-auto text-gray-500">
                                        <path fill-rule="evenodd"
                                            d="M11.54 22.351l.07.04.028.016a.76.76 0 00.723 0l.028-.015.071-.041a16.975 16.975 0 001.144-.742 19.58 19.58 0 002.683-2.282c1.944-1.99 3.963-4.98 3.963-8.827a8.25 8.25 0 00-16.5 0c0 3.846 2.02 6.837 3.963 8.827a19.58 19.58 0 002.682 2.282 16.975 16.975 0 001.145.742zM12 13.5a3 3 0 100-6 3 3 0 000 6z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    <span class="text-sm font-light text-gray-500">Karawang</span>
                                </div>
                                {{-- Rating Produk --}}
                                <div class="p-1 border">
                                    <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                                        class="inline-block w-5 h-5 text-yellow-500 fill-current">
                                        <path
                                            d="M8.128 19.825a1.586 1.586 0 0 1-1.643-.117 1.543 1.543 0 0 1-.53-.662 1.515 1.515 0 0 1-.096-.837l.736-4.247-3.13-3a1.514 1.514 0 0 1-.39-1.569c.09-.271.254-.513.475-.698.22-.185.49-.306.776-.35L8.66 7.73l1.925-3.862c.128-.26.328-.48.577-.633a1.584 1.584 0 0 1 1.662 0c.25.153.45.373.577.633l1.925 3.847 4.334.615c.29.042.562.162.785.348.224.186.39.43.48.704a1.514 1.514 0 0 1-.404 1.58l-3.13 3 .736 4.247c.047.282.014.572-.096.837-.111.265-.294.494-.53.662a1.582 1.582 0 0 1-1.643.117l-3.865-2-3.865 2z">
                                        </path>
                                    </svg>
                                    <span class="text-sm font-light text-gray-500">4.8 | <span
                                            class="font-semibold text-blue-500">45</span>
                                        Terjual</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            {{-- End Item 1 --}}
        </div>
    </div>
</div>
@endsection
