<div class="hidden w-64 p-4 bg-white rounded-md shadow-md sm:block h-fit drop-shadow-md">
    {{-- Foto & Username --}}
    <div class="pb-4 border-b-2">
        <img src="{{ asset('images/man.svg') }}" class="inline object-cover rounded-full h-14 w-14" alt="store_ava">
        <p class="inline pl-2 mb-2 text-sm font-bold leading-tight text-slate-700">{{ Auth::user()->name }}</p>
    </div>
    {{-- Menu Penjual --}}
    <div class="py-2 border-b-2"
         x-data="{menuPenjual : true}">
         <button class="flex justify-between w-full px-4 py-2 transition duration-150 ease-in-out rounded-md hover:bg-gray-100"
              data-mdb-ripple="true"
              data-mdb-ripple-color="primary"
              x-on:click="menuPenjual = ! menuPenjual">
              <div class="flex justify-start gap-3">
                <svg aria-hidden="true" focusable="false" data-prefix="fas" class="w-3 h-3 my-auto" role="img"
                     xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                    <path fill="currentColor"
                        d="M216 0h80c13.3 0 24 10.7 24 24v168h87.7c17.8 0 26.7 21.5 14.1 34.1L269.7 378.3c-7.5 7.5-19.8 7.5-27.3 0L90.1 226.1c-12.6-12.6-3.7-34.1 14.1-34.1H192V24c0-13.3 10.7-24 24-24zm296 376v112c0 13.3-10.7 24-24 24H24c-13.3 0-24-10.7-24-24V376c0-13.3 10.7-24 24-24h146.7l49 49c20.1 20.1 52.5 20.1 72.6 0l49-49H488c13.3 0 24 10.7 24 24zm-124 88c0-11-9-20-20-20s-20 9-20 20 9 20 20 20 20-9 20-20zm64 0c0-11-9-20-20-20s-20 9-20 20 9 20 20 20 20-9 20-20z">
                    </path>
                </svg>
                <span class="text-sm font-bold hover:font-extrabold text-slate-700 hover:text-slate-900 ">Menu Penjual</span>
              </div>
            <svg aria-hidden="true" focusable="false" data-prefix="fas" class="w-3 h-3 my-auto" role="img"
                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                <path fill="currentColor"
                    d="M207.029 381.476L12.686 187.132c-9.373-9.373-9.373-24.569 0-33.941l22.667-22.667c9.357-9.357 24.522-9.375 33.901-.04L224 284.505l154.745-154.021c9.379-9.335 24.544-9.317 33.901.04l22.667 22.667c9.373 9.373 9.373 24.569 0 33.941L240.971 381.476c-9.373 9.372-24.569 9.372-33.942 0z">
                </path>
            </svg>
         </button>
        <ul
            x-show="menuPenjual"
            class="flex flex-col gap-1 px-4 py-2"
            x-transition:enter="transition ease-out duration-200 transform"
            x-transition:enter-start="opacity-0 scale-50 -translate-y-8"
            x-transition:enter-end="opacity-100 scale-100 "
            x-transition:leave="transition ease-in duration-200 transform"
            x-transition:leave-start="opacity-100 scale-100"
            x-transition:leave-end="opacity-0 scale-50 -translate-y-8" >
            {{-- Produk Saya --}}
            <li>
                <x-user-nav-link :href="route('product-seller.my-product')" :active="request()->routeIs('product-seller.my-product')">
                    {{ __('Produk Saya') }}
                </x-user-nav-link>
            </li>
            {{-- Tambah Produk --}}
            <li>
                <x-user-nav-link :href="route('product-seller.add-product')" :active="request()->routeIs('product-seller.add-product')">
                    {{ __('Tambah Produk') }}
                </x-user-nav-link>
            </li>
        </ul>
    </div>
    {{-- Menu Profile Saya --}}
    <div class="py-2 border-b-2"
         x-data="{menuProfile : true}">
         <button class="flex justify-between w-full px-4 py-2 transition duration-150 ease-in-out rounded-md hover:bg-gray-100"
              data-mdb-ripple="true"
              data-mdb-ripple-color="primary"
              x-on:click="menuProfile = ! menuProfile">
              <div class="flex justify-start gap-3">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 my-auto ">
                    <path fill-rule="evenodd" d="M18.685 19.097A9.723 9.723 0 0021.75 12c0-5.385-4.365-9.75-9.75-9.75S2.25 6.615 2.25 12a9.723 9.723 0 003.065 7.097A9.716 9.716 0 0012 21.75a9.716 9.716 0 006.685-2.653zm-12.54-1.285A7.486 7.486 0 0112 15a7.486 7.486 0 015.855 2.812A8.224 8.224 0 0112 20.25a8.224 8.224 0 01-5.855-2.438zM15.75 9a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z" clip-rule="evenodd" />
                  </svg>
                <span class="text-sm font-bold hover:font-extrabold text-slate-700 hover:text-slate-900 ">Profile Saya</span>
              </div>
            <svg aria-hidden="true" focusable="false" data-prefix="fas" class="w-3 h-3 my-auto" role="img"
                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                <path fill="currentColor"
                    d="M207.029 381.476L12.686 187.132c-9.373-9.373-9.373-24.569 0-33.941l22.667-22.667c9.357-9.357 24.522-9.375 33.901-.04L224 284.505l154.745-154.021c9.379-9.335 24.544-9.317 33.901.04l22.667 22.667c9.373 9.373 9.373 24.569 0 33.941L240.971 381.476c-9.373 9.372-24.569 9.372-33.942 0z">
                </path>
            </svg>
         </button>
        <ul
            x-show="menuProfile"
            class="flex flex-col gap-1 px-4 py-2"
            x-transition:enter="transition ease-out duration-200 transform"
            x-transition:enter-start="opacity-0 scale-50 -translate-y-8"
            x-transition:enter-end="opacity-100 scale-100 "
            x-transition:leave="transition ease-in duration-200 transform"
            x-transition:leave-start="opacity-100 scale-100 h-full"
            x-transition:leave-end="opacity-0 scale-50 -translate-y-8" >
            {{-- Pengaturan --}}
            <li>
                <x-user-nav-link :href="route('profile')" :active="request()->routeIs('profile')">
                    {{ __('Pengaturan') }}
                </x-user-nav-link>
            </li>
            {{-- Whislist --}}
            <li>
                <x-user-nav-link :href="route('wishlist')" :active="request()->routeIs('wishlist')">
                    {{ __('Wishlist') }}
                </x-user-nav-link>
            </li>
            {{-- Chat --}}
            <li>
                <x-user-nav-link :href="route('chat')" :active="request()->routeIs('chat')">
                    {{ __('Chat') }}
                </x-user-nav-link>
            </li>
            {{-- Diskusi Produk --}}
            <li>
                <x-user-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                    {{ __('Diskusi Produk') }}
                </x-user-nav-link>
            </li>
        </ul>
    </div>
</div>
