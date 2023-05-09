<div class="px-4 py-10 mx-auto lg:px-24">
    {{-- Poduct Overview --}}
    <div class="px-2 py-4 mt-8 bg-white shadow rounded-2xl drop-shadow-md">
        <div class="flex flex-wrap justify-between md:p-2">
            {{-- Product Image --}}
            <div class="w-full mb-6 lg:w-1/2">
                <img src="{{ asset('images/product/'.$this->product->pic->first()->foto) }}"
                    class="block object-fill w-full mb-6 h-fit rounded-xl md:border-2">
                <div class="hidden md:block">
                    <div class="flex gap-3 overflow-x-scroll">
                        {{-- <img src="{{ asset('/images/motor.webp') }}" class="block object-cover h-28 w-28">
                        <img src="{{ asset('/images/motor.webp') }}" class="block object-cover h-28 w-28">
                        <img src="{{ asset('/images/motor.webp') }}" class="block object-cover h-28 w-28">
                        <img src="{{ asset('/images/motor.webp') }}" class="block object-cover h-28 w-28">
                        <img src="{{ asset('/images/motor.webp') }}" class="block object-cover h-28 w-28"> --}}
                    </div>
                </div>
            </div>
            {{-- End Product Image --}}
            {{-- Product Synopsis --}}
            <div class="w-full p-4 lg:w-1/2">
                {{-- Product Title --}}
                <h3 class="block text-sm font-extrabold text-gray-700 md:text-base lg:text-lg">
                    {{ $this->product->nama }}
                </h3>
                {{-- End Product Title --}}
                {{-- Product Title --}}
                <p class="block mt-3 ml-4 text-sm font-medium text-gray-400 md:text-sm lg:text-base">
                    {{ $this->product->deskripsi }}
                </p>
                {{-- End Product Title --}}
                {{-- Product Price --}}
                <h2 class="p-6 font-sans text-3xl font-extrabold text-gray-900 py-7">
                    Rp. {{ $this->product->harga }}
                </h2>
                {{-- End Product Price --}}
                {{-- Sumarry Product --}}
                <div class="grid w-full grid-flow-row px-2 space-y-6">
                    {{-- Summary 1 --}}
                    <div class="flex flex-wrap px-2 py-2">
                        <div class="block w-1/6">
                            <p class="text-sm font-light text-slate-500">Lokasi</p>
                        </div>
                        <div class="block w-3/4">
                            <p class="text-sm hover:text-blue-500"> {{ $this->product->seller_details->cod }} </p>
                        </div>
                    </div>
                    {{-- End Summary 1 --}}
                    {{-- Summary 2 --}}
                    <div class="flex flex-row flex-wrap px-2 py-2">
                        <div class="block basis-1/6">
                            <p class="text-sm font-light text-slate-500"> Spesifikasi </p>
                        </div>
                        <div class="block basis-3/4">
                            <div class="flex flex-row flex-wrap gap-2">
                                <p>{{ $this->product->spesifikasi }}</p>
                            </div>
                        </div>
                    </div>
                    {{-- End Summary 2 to ... --}}
                    {{-- Order Button --}}
                    <div class="flex flex-wrap justify-center gap-4">
                        <button type="button"
                            class="inline-block rounded bg-green-500 px-6 py-2.5 text-xs font-medium uppercase leading-tight text-white shadow-md transition duration-150 ease-in-out hover:bg-green-600 hover:shadow-lg focus:bg-green-600 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-green-700 active:shadow-lg">
                            <img src="{{ asset('images/logo/whatsapp.svg') }}"
                                class="inline-block w-6 h-6 mr-2 text-white fill-white">
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
    <div class="p-6 mt-8 bg-white shadow rounded-2xl drop-shadow-md">
        <div class="md:p-2">
            <div class="flex flex-wrap">
                <img src="{{ asset('images/041.webp') }}" class="w-20 h-20 rounded-full" alt="store_ava">
                <div class="block px-6">
                    <p class="text-basic">AutoParts Atlantis</p>
                    <p class="text-sm opacity-70">Aktif 1 Jam Lalu</p>
                    <div class="block mt-2">
                        <button type="btn"
                            class="px-3 py-1 transition ease-in-out bg-blue-100 border border-blue-300 rounded-sm bg-opacity-70 hover:bg-blue-200 hover:bg-opacity-70">
                            <p class="font-sans text-sm">Chat Sekarang</p>
                        </button>
                        <button type="btn"
                            class="px-3 py-1 transition ease-in-out border rounded-sm border-slate-300 bg-slate-100 bg-opacity-70 hover:bg-slate-200 hover:bg-opacity-70">
                            <p class="font-sans text-sm">Kunjungi Toko</p>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- End Store Credibility --}}
    {{-- Sesification & Deskription Product --}}
    <div class="p-6 mt-8 bg-white shadow rounded-2xl drop-shadow-md">
        <h5 class="mb-2 text-xl font-medium leading-tight text-gray-900 border-b-2 shadow-sm">Deskripsi Produk</h5>
        <div class="flex flex-wrap py-2">
            <p class="text-base text-gray-700">
               {{ $this->product->spesifikasi }}
            </p>
        </div>
    </div>
    {{-- End Spesification & Deskription Product --}}
    {{-- Diskusi Produk --}}
    <div class="p-6 mt-8 bg-white shadow rounded-2xl drop-shadow-md">
        <h5 class="mb-2 text-xl font-medium leading-tight text-gray-900 border-b-2 shadow-sm">Diskusi Produk</h5>
        <div class="flex justify-start">
            <div class="block w-full max-w-full p-6 rounded-lg shadow-lg bg-slate-100">
                <div class="flex justify-start p-2 border-b-2">
                    <div class="mx-auto mb-auto min-w-fit basis-auto">
                        <img src="{{ asset('images/041.webp') }}" class="object-cover w-12 h-12 rounded-full"
                            alt="store_ava">
                    </div>
                    <div class="pt-1 pl-4 basis-full">
                        <p class="mb-2 text-xs text-gray-700">
                            <span class="text-sm font-bold">User-A</span>
                            15-06-2022
                        </p>
                        <p class="max-w-lg mb-1 text-sm text-gray-700">
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
                        <div class="mx-auto mb-auto min-w-fit basis-auto">
                            <img src="{{ asset('images/041.webp') }}" class="object-cover w-12 h-12 rounded-full"
                                alt="store_ava">
                        </div>
                        <div class="pt-1 pl-4 basis-full">
                            <p class="mb-2 text-xs text-gray-700">
                                <span class="text-sm font-bold">Seller-A</span>
                                15-06-2022
                                <span
                                    class="ml-6 inline-block whitespace-nowrap rounded bg-blue-400 py-1 px-2.5 text-center align-baseline text-xs font-bold leading-none text-white">Seller</span>

                            </p>
                            <p class="max-w-lg mb-1 text-sm text-gray-700">
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
                        <div class="mx-auto mb-auto min-w-fit basis-auto">
                            <img src="{{ asset('images/041.webp') }}" class="object-cover w-12 h-12 rounded-full"
                                alt="store_ava">
                        </div>
                        <div class="pt-1 pl-4 basis-full">
                            <p class="mb-2 text-xs text-gray-700">
                                <span class="text-sm font-bold">Seller-A</span>
                                15-06-2022
                                <span
                                    class="ml-6 inline-block whitespace-nowrap rounded bg-blue-400 py-1 px-2.5 text-center align-baseline text-xs font-bold leading-none text-white">Seller</span>

                            </p>
                            <p class="max-w-lg mb-1 text-sm text-gray-700">
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
    <div class="p-6 mt-8 bg-white shadow rounded-2xl drop-shadow-md">
        <h5 class="mb-6 text-xl font-medium leading-tight text-gray-900 border-b-2 shadow-sm">Pilihan Lainnya</h5>

        {{-- @include('dummy.dummy-item') --}}
    </div>
    {{-- End Produk Lainnya --}}
</div>
