<x-app-layout>
    <div class="container px-4 py-10 mx-auto">
        {{-- Poduct Overview --}}
        <div class="px-2 py-4 mt-8 bg-white shadow drop-shadow-md rounded-2xl">
            <div class="flex justify-between flex-wrap md:p-2">
                {{-- Product Image --}}
                <div class="w-full lg:w-1/2 mb-6">
                    <img src="{{ asset('/images/motor.webp') }}"
                        class="block object-fill w-full h-fit mb-6 md:border-2 rounded-xl ">
                    <div class="hidden md:block">
                        <div class="flex overflow-x-scroll gap-3">
                            <img src="{{ asset('/images/motor.webp') }}" class="block object-cover w-28 h-28">
                            <img src="{{ asset('/images/motor.webp') }}" class="block object-cover w-28 h-28">
                            <img src="{{ asset('/images/motor.webp') }}" class="block object-cover w-28 h-28">
                            <img src="{{ asset('/images/motor.webp') }}" class="block object-cover w-28 h-28">
                            <img src="{{ asset('/images/motor.webp') }}" class="block object-cover w-28 h-28">
                        </div>
                    </div>
                </div>
                {{-- End Product Image --}}
                {{-- Product Synopsis --}}
                <div class="w-full lg:w-1/2 p-4">
                    {{-- Product Title --}}
                    <h3 class="block text-sm md:text-base lg:text-lg font-extrabold text-gray-700">Lorem, ipsum dolor.
                    </h3>
                    {{-- End Product Title --}}
                    {{-- Product Title --}}
                    <p class="block text-sm md:text-sm lg:text-base font-medium text-gray-400 ml-4 mt-3">Velit commodo adipisicing
                        dolore consectetur
                        nisi pariatur sunt consectetur consectetur Lorem ad amet qui sunt.</p>
                    {{-- End Product Title --}}
                    {{-- Product Price --}}
                    <h2 class="p-6 text-3xl font-sans font-extrabold py-7 text-gray-900">RP. 23.000.000</h2>
                    {{-- End Product Price --}}
                    {{-- Sumarry Product --}}
                    <div class="grid grid-flow-row w-full px-2 space-y-6">
                        {{-- Summary 1 --}}
                        <div class="flex flex-wrap px-2 py-2">
                            <div class="block w-1/6">
                                <p class="text-sm text-slate-500 font-light">Lokasi</p>
                            </div>
                            <div class="block w-3/4">
                                <p class="text-sm hover:text-blue-500"> Teluk Jambe Karawang </p>
                            </div>
                        </div>
                        {{-- End Summary 1 --}}
                        {{-- Summary 2 --}}
                        <div class="flex flex-row flex-wrap px-2 py-2">
                            <div class="block basis-1/6">
                                <p class="text-sm text-slate-500 font-light"> Variasi </p>
                            </div>
                            <div class="block basis-3/4">
                                <div class="flex flex-row flex-wrap gap-2">
                                    <button type="button" class="border rounded-sm hover:border-blue-500">
                                        <p class="text-sm hover:text-blue-500 px-3 py-2"> Hitam Sangat Boss </p>
                                    </button>
                                    <button type="button" class="border rounded-sm hover:border-blue-500">
                                        <p class="text-sm hover:text-blue-500 px-3 py-2"> Hitam </p>
                                    </button>
                                    <button type="button" class="border rounded-sm hover:border-blue-500">
                                        <p class="text-sm hover:text-blue-500 px-3 py-2"> Hitam </p>
                                    </button>
                                    <button type="button" class="border rounded-sm hover:border-blue-500">
                                        <p class="text-sm hover:text-blue-500 px-3 py-2"> Hitam </p>
                                    </button>
                                    <button type="button" class="border rounded-sm hover:border-blue-500">
                                        <p class="text-sm hover:text-blue-500 px-3 py-2"> Hitam </p>
                                    </button>
                                    <button type="button" class="border rounded-sm hover:border-blue-500">
                                        <p class="text-sm hover:text-blue-500 px-3 py-2"> Hitam </p>
                                    </button>
                                    <button type="button" class="border rounded-sm hover:border-blue-500">
                                        <p class="text-sm hover:text-blue-500 px-3 py-2"> Hitam </p>
                                    </button>
                                    <button type="button" class="border rounded-sm hover:border-blue-500">
                                        <p class="text-sm hover:text-blue-500 px-3 py-2"> Hitam </p>
                                    </button>
                                    <button type="button" class="border rounded-sm hover:border-blue-500">
                                        <p class="text-sm hover:text-blue-500 px-3 py-2"> Hitam </p>
                                    </button>
                                    <button type="button" class="border rounded-sm hover:border-blue-500">
                                        <p class="text-sm hover:text-blue-500 px-3 py-2"> Hitam </p>
                                    </button>
                                </div>
                            </div>
                        </div>
                        {{-- End Summary 2 to ... --}}
                        {{-- Order Button --}}
                        <div class="flex flex-wrap gap-4 justify-center">
                            <button type="button"
                                class="inline-block px-6 py-2.5 bg-green-500 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-green-600 hover:shadow-lg focus:bg-green-600 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-green-700 active:shadow-lg transition duration-150 ease-in-out">
                                <img src="{{ asset('images/logo/whatsapp.svg') }}"
                                    class="inline-block w-6 h-6 mr-2 fill-white text-white">
                                Hubungi
                                Penjual </button>
                            <button type="button"
                                class="inline-block rounded bg-blue-400 px-6 py-2.5 text-sm font-medium leading-tight text-white shadow-md transition duration-150 ease-in-out hover:bg-blue-500 hover:shadow-lg focus:bg-blue-500 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-600 active:shadow-lg">
                                <svg xmlns="http://www.w3.org/2000/svg" class="inline-block w-6 h-6 mr-2" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                                </svg>Keranjang
                            </button>
                            <button></button>
                        </div>
                        {{-- Order Button --}}
                    </div>
                    {{-- End Summary Product --}}
                </div>
                {{-- End Product Synopsis --}}
            </div>
        </div>
        {{-- End Product Oveview --}}
        {{-- Store Credibility --}}
        <div class="p-6 mt-8 bg-white shadow drop-shadow-md rounded-2xl">
            <div class="md:p-2">
                <div class="flex flex-wrap">
                    <img src="{{ asset('images/041.webp') }}" class="rounded-full h-20 w-20" alt="store_ava">
                    <div class="block px-6  ">
                        <p class="text-basic">AutoParts Atlantis</p>
                        <p class="text-sm opacity-70">Aktif 1 Jam Lalu</p>
                        <div class="block mt-2">
                            <button type="btn"
                                class="border border-blue-300 bg-blue-100 bg-opacity-70 hover:bg-blue-200 hover:bg-opacity-70 rounded-sm px-3 py-1 transition ease-in-out">
                                <p class="font-sans text-sm">Chat Sekarang</p>
                            </button>
                            <button type="btn"
                                class="border border-slate-300 bg-slate-100 bg-opacity-70 hover:bg-slate-200 hover:bg-opacity-70 rounded-sm px-3 py-1 transition ease-in-out">
                                <p class="font-sans text-sm">Kunjungi Toko</p>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- End Store Credibility --}}
        {{-- Sesification & Deskription Product --}}
        <div class="p-6 mt-8 bg-white shadow drop-shadow-md rounded-2xl">
            <h5 class="text-gray-900 text-xl leading-tight font-medium mb-2 border-b-2 shadow-sm">Deskripsi Produk</h5>
            <div class="flex flex-wrap py-2">
                <p class="text-gray-700 text-base">Aute do nostrud nisi amet non culpa voluptate fugiat quis.
                    Adipisicing
                    velit quis Lorem nisi cupidatat esse consectetur aliquip ex sint. Aute tempor officia sit proident
                    Lorem
                    enim. Sit qui duis Lorem fugiat cupidatat duis nulla ex cillum.</p>
            </div>
        </div>
        {{-- End Spesification & Deskription Product --}}
        {{-- Diskusi Produk --}}
        <div class="p-6 mt-8 bg-white shadow drop-shadow-md rounded-2xl">
            <h5 class="text-gray-900 text-xl leading-tight font-medium mb-2 border-b-2 shadow-sm">Diskusi Produk</h5>
            <div class="flex justify-start">
                <div class="block p-6 rounded-lg shadow-lg bg-slate-100 max-w-full w-full">
                    <div class="flex justify-start border-b-2 p-2">
                        <div class="basis-auto mx-auto mb-auto min-w-fit">
                            <img src="{{ asset('images/041.webp') }}" class="rounded-full object-cover h-12 w-12"
                                alt="store_ava">
                        </div>
                        <div class="basis-full pl-4 pt-1">
                            <p class="text-gray-700 text-xs mb-2">
                                <span class="font-bold text-sm">User-A</span>
                                15-06-2022
                            </p>
                            <p class="text-gray-700 text-sm mb-1 max-w-lg">
                                Id esse exercitation eu enim dolor quis enim reprehenderit. Enim culpa duis fugiat
                                consectetur
                                dolore. In ea commodo fugiat eu exercitation ullamco proident est exercitation Lorem
                                aliquip
                                laboris
                                veniam.
                            </p>
                        </div>
                    </div>
                    <div class="block p-2 pl-24">
                        <div class="flex justify-start p-2">
                            <div class="basis-auto mx-auto mb-auto min-w-fit">
                                <img src="{{ asset('images/041.webp') }}" class="rounded-full object-cover h-12 w-12"
                                    alt="store_ava">
                            </div>
                            <div class="basis-full pl-4 pt-1">
                                <p class="text-gray-700 text-xs mb-2">
                                    <span class="text-sm font-bold">Seller-A</span>
                                    15-06-2022
                                    <span
                                        class="text-xs inline-block py-1 px-2.5 leading-none text-center whitespace-nowrap align-baseline font-bold bg-blue-400 text-white rounded ml-6">Seller</span>

                                </p>
                                <p class="text-gray-700 text-sm mb-1 max-w-lg">
                                    Id esse exercitation eu enim dolor quis enim reprehenderit. Enim culpa duis fugiat
                                    consectetur
                                    dolore. In ea commodo fugiat eu exercitation ullamco proident est exercitation Lorem
                                    aliquip
                                    laboris
                                    veniam.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="block p-2 pl-24">
                        <div class="flex justify-start p-2">
                            <div class="basis-auto mx-auto mb-auto min-w-fit">
                                <img src="{{ asset('images/041.webp') }}" class="rounded-full object-cover h-12 w-12"
                                    alt="store_ava">
                            </div>
                            <div class="basis-full pl-4 pt-1">
                                <p class="text-gray-700 text-xs mb-2">
                                    <span class="text-sm font-bold">Seller-A</span>
                                    15-06-2022
                                    <span
                                        class="text-xs inline-block py-1 px-2.5 leading-none text-center whitespace-nowrap align-baseline font-bold bg-blue-400 text-white rounded ml-6">Seller</span>

                                </p>
                                <p class="text-gray-700 text-sm mb-1 max-w-lg">
                                    Id esse exercitation eu enim dolor quis enim reprehenderit. Enim culpa duis fugiat
                                    consectetur
                                    dolore. In ea commodo fugiat eu exercitation ullamco proident est exercitation Lorem
                                    aliquip
                                    laboris
                                    veniam.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- End Diskusi Produk --}}
        {{-- Produk Lainnya --}}
        <div class="p-6 mt-8 bg-white shadow drop-shadow-md rounded-2xl">
            <h5 class="text-gray-900 text-xl leading-tight font-medium mb-6 border-b-2 shadow-sm">Pilihan Lainnya</h5>

            {{-- @include('dummy.dummy-item') --}}
        </div>
        {{-- End Produk Lainnya --}}
    </div>
</x-app-layout>
