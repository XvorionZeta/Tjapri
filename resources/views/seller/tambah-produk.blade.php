@extends('layouts.app')
@section('content')
<div class="flex justify-center gap-4 px-4 py-10 mx-auto lg:px-36">
    @include('layouts.user-nav')
    <div class="w-full p-4 overflow-hidden bg-white rounded-lg shadow-lg md:p-6 drop-shadow-lg">
        {{-- Header --}}
        <h5 class="mb-2 text-lg font-bold leading-tight text-gray-900 border-b-2">Tambah Produk</h5>
        <form method="post" action="{{ route('product-seller.add-product.store') }}">
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
              <label for="deskripsi" class="inline-block mb-2 text-gray-700 form-label">Deskripsi</label>
              <input type="text" class="form-control block
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
                placeholder="Deskripsi Produk">
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
              <label for="harga" class="inline-block mb-2 text-gray-700 form-label">Jumlah Qantity</label>
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
              <div class="w-full mb-3">
                <label for="formFile" class="inline-block mb-2 text-gray-700 form-label">Gambar Produk</label>
                <input class="form-control
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
                focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" type="file" id="formFile">
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
