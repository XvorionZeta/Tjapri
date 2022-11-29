<x-app-layout>
    <div class="flex justify-center gap-4 px-4 py-10 mx-auto max-w-7xl">
        @include('layouts.user-nav')
        <div class="w-full p-6 bg-white rounded-lg shadow-lg drop-shadow-lg">
            <h5 class="mb-2 text-xl font-medium leading-tight text-gray-900 border-b-2">Biodata Diri</h5>
            <div class="flex flex-wrap justify-start w-full md:flex-wrap md:p-4">
                {{-- Form ganti foto --}}
                <div class="max-w-sm mr-4 md:basis-2/5">
                    <div class="max-w-sm bg-white rounded-lg shadow-lg drop-shadow-md">
                        <div class="px-6 py-4 max-w-80 max-h-72">
                            <img class="object-cover rounded-md w-80 h-72" src="{{ asset('images/man.svg') }}" alt="" />
                        </div>
                        <div class="p-6">
                            <div class="flex items-center justify-center">
                                <button type="btn"
                                    class="w-full px-4 py-1 mx-auto mb-2 font-medium text-gray-900 border-2 rounded-md text-md">Ubah
                                    Foto</button>
                            </div>
                            <p class="pt-4 mb-4 text-xs text-gray-700">
                                Besar file: maksimum 10.000 bytes (10 Megabytes). Ekstensi file yang diperbolehkan: .JPG
                                .JPEG
                                .PNG
                            </p>
                        </div>
                    </div>
                    {{-- End Form Ganti Foto --}}
                    {{-- Button --}}
                    <div class="grid w-full grid-flow-row grid-rows-2 p-4 mt-2">
                        <button type="btn"
                            class="w-full px-4 py-1 mx-auto mb-2 font-medium text-gray-900 border-2 rounded-md text-md">Ubah
                            Kata Sandi</button>
                        <button type="btn"
                            class="w-full px-4 py-1 mx-auto mb-2 font-medium text-gray-900 border-2 rounded-md text-md">Ubah
                            Pin</button>
                    </div>
                    {{-- End Button --}}
                </div>
                {{-- Data Diri --}}
                <div class="flex flex-col gap-3 md:basis-1/2">
                    <div class="block bg-white rounded-lg md:p-6">
                        <h5 class="mb-2 text-xl font-medium leading-tight text-gray-900 border-b-2">Ubah Biodata Diri</h5>
                        <div class="flex justify-between flex-none gap-4 py-3">
                            <p class="text-sm text-gray-700">Nama</p>
                            <p class="text-sm ">{{ Auth::user()->name }} <a href="#" class="ml-2 text-cyan-500">Ubah</a></p>
                        </div>
                        <div class="flex justify-between flex-none gap-4 py-3">
                            <p class="text-sm text-gray-700">NP</p>
                            <p class="text-sm">{{ Auth::user()->NP }}</p>
                        </div>
                        <div class="flex justify-between flex-none gap-4 py-3">
                            <p class="text-sm text-gray-700">Tanggal Lahir</p>
                            <p class="text-sm">20-05-1999 <a href="#" class="ml-2 text-cyan-500">Ubah</a></p>
                        </div>
                        <div class="flex justify-between flex-none gap-4 py-3">
                            <p class="text-sm text-gray-700">Jenis Kelamin</p>
                            <p class="text-sm">Laki-Laki  <a href="#" class="ml-2 text-cyan-500">Ubah</a></p>
                        </div>
                    </div>
                    <div class="block bg-white rounded-lg md:p-6">
                        <h5 class="mb-2 text-xl font-medium leading-tight text-gray-900 border-b-2">Kontak</h5>
                        <div class="flex justify-between flex-none gap-4 py-3">
                            <p class="text-sm text-gray-700">E - Mail</p>
                            <p class="text-sm">{{ Auth::user()->email }} <a href="#" class="ml-2 text-cyan-500">Ubah</a></p>
                        </div>
                        <div class="flex justify-between flex-none gap-4 py-3">
                            <p class="text-sm text-gray-700">Nomor HP</p>
                            <p class="text-sm">0813-1646-1691  <a href="#" class="ml-2 text-cyan-500">Ubah</a></p>
                        </div>
                    </div>
                    <div class="block bg-white rounded-lg md:p-6">
                        <h5 class="mb-2 text-xl font-medium leading-tight text-gray-900 border-b-2">Alamat</h5>
                        <div class="flex justify-between flex-none gap-4 py-3">
                            <p class="text-sm text-gray-700">Alamat</p>
                            <p class="text-sm">Puri Teluk Jambe Blok C  <a href="#" class="ml-2 text-cyan-500">Ubah</a></p>
                        </div>
                        <div class="flex justify-between flex-none gap-4 py-3">
                            <p class="text-sm text-gray-700">COD</p>
                            <p class="text-sm">Karawang Sekitarnya  <a href="#" class="ml-2 text-cyan-500">Ubah</a></p>
                        </div>
                    </div>
                    <div class="flex justify-center space-x-2">
                        <button
                          type="button"
                          data-mdb-ripple="true"
                          data-mdb-ripple-color="light"
                          class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out"
                        >Ubah Data</button>
                      </div>
                </div>
                {{-- End Data Diri --}}
            </div>
        </div>
    </div>
</x-app-layout>
