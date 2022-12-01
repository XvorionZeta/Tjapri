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
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
