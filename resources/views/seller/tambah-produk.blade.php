@extends('layouts.app')
@section('content')
<div class="flex justify-center gap-4 px-4 py-10 mx-auto max-w-7xl">
    @include('layouts.user-nav')
    <div class="w-full p-4 overflow-hidden bg-white rounded-lg shadow-lg md:p-6 drop-shadow-lg">
        {{-- Header --}}
        <h5 class="mb-2 text-lg font-bold leading-tight text-gray-900 border-b-2">Tambah Produk</h5>
        <form method="post" action="{{ route('product-seller.add-product.store') }}" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="mb-6 form-group">
              <label for="nama" class="inline-block mb-2 text-gray-700 form-label">Nama Produk</label>
              <input type="text" class="form-control
                block
                w-full
                px-3
                py-1.5
                text-base
                font-normal
                text-gray-700
                bg-white bg-clip-padding
                border border-solid border-gray-300
                rounded
                transition
                ease-in-out
                m-0
                focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="nama" name="nama"
                aria-describedby="emailHelp" placeholder="Nama Produk">
            </div>
            <div class="mb-6 form-group">
              <label for="harga" class="inline-block mb-2 text-gray-700 form-label">Harga</label>
              <input type="number" class="form-control block
                w-full
                px-3
                py-1.5
                text-base
                font-normal
                text-gray-700
                bg-white bg-clip-padding
                border border-solid border-gray-300
                rounded
                transition
                ease-in-out
                m-0
                focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="harga" name="harga"
                placeholder="Rp.">
            </div>
            <div class="mb-6 form-group">
              <label for="harga" class="inline-block mb-2 text-gray-700 form-label">Stok Barang</label>
              <input type="number" class="form-control block
                w-full
                px-3
                py-1.5
                text-base
                font-normal
                text-gray-700
                bg-white bg-clip-padding
                border border-solid border-gray-300
                rounded
                transition
                ease-in-out
                m-0
                focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="qty" name="qty"
                placeholder="Qty">
            </div>
            <div class="mb-6 form-group">
              <!-- Required form plugin -->
                <link
                href="https://cdn.jsdelivr.net/npm/@tailwindcss/custom-forms@0.2.1/dist/custom-forms.css"
                rel="stylesheet"
                />

                <label class="block text-left" style="max-width: 300px">
                <span class="text-gray-700">Kategori</span>
                <select class="block w-full mt-1 form-multiselect" id="category" name="category">
                  <option value="1">Produk Eksklusif</option>
                  <option value="2">Makanan</option>
                  <option value="3">jasa</option>
                  <option value="4">Elektronik</option>
                  <option value="5">Otomotif</option>
                </select>
                </label>
            </div>
            <div class="mb-6 form-group">
              <label for="deskripsi" class="inline-block mb-2 text-gray-700 form-label">Deskripsi Produk</label>
              <textarea rows="5" class="form-control block
                w-full
                px-3
                py-1.5
                text-base
                font-normal
                text-gray-700
                bg-white bg-clip-padding
                border border-solid border-gray-300
                rounded
                transition
                ease-in-out
                m-0
                focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="deskripsi" name="deskripsi"
                placeholder="Deskripsi Produk"></textarea>
            </div>
            <div class="mb-6 form-group">
              <label for="deskripsi" class="inline-block mb-2 text-gray-700 form-label">Spesifikasi Produk</label>
              <textarea rows="5" class="form-control block
                w-full
                px-3
                py-1.5
                text-base
                font-normal
                text-gray-700
                bg-white bg-clip-padding
                border border-solid border-gray-300
                rounded
                transition
                ease-in-out
                m-0
                focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="spec" name="spec"
                placeholder="Deskripsi Produk"></textarea>
            </div>
            <div class="mb-6 form-group">
              <div class="w-full mb-3 flex flex-col gap-3">
                <span>Foto</span>
                <div class="flex justify-start gap-4">
                    <div>
                        <label for="image" class="inline-block mb-2 text-gray-700 form-label">
                            <div class="border drop-shadow-md shadow p-4 w-20 h-20 flex justify-center items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                                  </svg>
                            </div>
                        </label>
                        <input class="" type="file" id="image" name="image">
                    </div>
                    {{-- <div>
                        <label for="image" class="inline-block mb-2 text-gray-700 form-label">
                            <div class="border drop-shadow-md shadow p-4 w-20 h-20 flex justify-center items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                                  </svg>
                            </div>
                        </label>
                        <input class="hidden" type="file" id="image" name="image">
                    </div> --}}
                </div>
              </div>
            </div>

            <button type="submit" class="
              px-6
              py-2.5
              bg-blue-600
              text-white
              font-medium
              text-xs
              leading-tight
              uppercase
              rounded
              shadow-md
              hover:bg-blue-700 hover:shadow-lg
              focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0
              active:bg-blue-800 active:shadow-lg
              transition
              duration-150
              ease-in-out">Simpan Produk</button>
          </form>
    </div>
</div>
@endsection
