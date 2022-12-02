<div class="flex flex-col">
    <div class="overflow-x-auto">
        <div class="inline-block min-w-full py-2">
            <div class="overflow-hidden">
                <table class="min-w-full">
                    <thead class="bg-white border-b">
                        <tr>
                            <th scope="col" class="px-6 py-4 text-sm font-bold text-center text-gray-900">
                                No
                            </th>
                            <th scope="col" class="px-6 py-4 text-sm font-bold text-left text-gray-900">
                                Gambar Produk
                            </th>
                            <th scope="col" class="px-6 py-4 text-sm font-bold text-left text-gray-900">
                                Nama Produk
                            </th>
                            <th scope="col" class="px-6 py-4 text-sm font-bold text-left text-gray-900">
                                Deskripsi
                            </th>
                            <th scope="col" class="px-6 py-4 text-sm font-bold text-left text-gray-900">
                                Kategori
                            </th>
                            <th scope="col" class="px-6 py-4 text-sm font-bold text-left text-gray-900">
                                Harga
                            </th>
                            <th scope="col" class="px-6 py-4 text-sm font-bold text-left text-gray-900">
                                Stock Barang
                            </th>
                            <th scope="col" class="px-6 py-4 text-sm font-bold text-center text-gray-900">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($product as $products)
                        <tr class="transition duration-300 ease-in-out bg-white border-b hover:bg-gray-100">
                            <td class="px-6 py-4 text-sm font-medium text-center text-gray-900 whitespace-nowrap">
                                {{ $product->firstItem() + $loop->index }}
                            </td>
                            <td class="px-6 py-4 text-sm font-light text-gray-900 whitespace-nowrap">
                                <img src="{{ asset('images/product/'.App\Models\ProductPicture::where('product_id',$products->id)->value('foto'))}}" class="h-16 rounded-md">
                            </td>
                            <td class="max-w-sm px-6 py-4 text-sm font-light text-gray-900">
                                {{ $products->nama }}
                            </td>
                            <td class="max-w-sm px-6 py-4 text-sm font-light text-gray-900">
                                {{ $products->deskripsi }}
                            </td>
                            <td class="px-6 py-4 text-sm font-light text-gray-900 whitespace-nowrap">
                                {{ $products->category_id }}
                            </td>
                            <td class="px-6 py-4 text-sm font-light text-right text-gray-900 whitespace-nowrap">
                                <div class="flex justify-between">
                                    <span>Rp. </span>
                                    <span>{{ number_format($products->harga,0) }}</span>
                                </div>
                            </td>
                            <td class="px-6 py-4 text-sm font-light text-center text-gray-900 whitespace-nowrap">
                                {{ number_format($products->quantity,0) }}
                            </td>
                            <td class="px-6 py-4 text-sm font-light text-center text-gray-900 whitespace-nowrap">
                                <div class="flex justify-center gap-2">
                                    {{-- Delete Button --}}
                                    <button
                                        data-mdb-ripple="true"
                                        data-mdb-ripple-color="success"
                                        type="button"
                                        class="inline-block px-2 py-1 border-2 border-green-500 text-green-500 font-medium text-xs leading-tight uppercase rounded hover:bg-black hover:bg-opacity-5 focus:outline-none focus:ring-0 transition duration-150 ease-in-out">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                                            <path d="M5.433 13.917l1.262-3.155A4 4 0 017.58 9.42l6.92-6.918a2.121 2.121 0 013 3l-6.92 6.918c-.383.383-.84.685-1.343.886l-3.154 1.262a.5.5 0 01-.65-.65z" />
                                            <path d="M3.5 5.75c0-.69.56-1.25 1.25-1.25H10A.75.75 0 0010 3H4.75A2.75 2.75 0 002 5.75v9.5A2.75 2.75 0 004.75 18h9.5A2.75 2.75 0 0017 15.25V10a.75.75 0 00-1.5 0v5.25c0 .69-.56 1.25-1.25 1.25h-9.5c-.69 0-1.25-.56-1.25-1.25v-9.5z" />
                                          </svg>
                                    </button>
                                    {{-- Delete Button --}}
                                    <button
                                        data-mdb-ripple="true"
                                        data-mdb-ripple-color="danger"
                                        type="button"
                                        class="inline-block px-2 py-1 border-2 border-red-600 text-red-600 font-medium text-xs leading-tight uppercase rounded hover:bg-black hover:bg-opacity-5 focus:outline-none focus:ring-0 transition duration-150 ease-in-out">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                                            <path fill-rule="evenodd" d="M8.75 1A2.75 2.75 0 006 3.75v.443c-.795.077-1.584.176-2.365.298a.75.75 0 10.23 1.482l.149-.022.841 10.518A2.75 2.75 0 007.596 19h4.807a2.75 2.75 0 002.742-2.53l.841-10.52.149.023a.75.75 0 00.23-1.482A41.03 41.03 0 0014 4.193V3.75A2.75 2.75 0 0011.25 1h-2.5zM10 4c.84 0 1.673.025 2.5.075V3.75c0-.69-.56-1.25-1.25-1.25h-2.5c-.69 0-1.25.56-1.25 1.25v.325C8.327 4.025 9.16 4 10 4zM8.58 7.72a.75.75 0 00-1.5.06l.3 7.5a.75.75 0 101.5-.06l-.3-7.5zm4.34.06a.75.75 0 10-1.5-.06l-.3 7.5a.75.75 0 101.5.06l.3-7.5z" clip-rule="evenodd" />
                                          </svg>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
