<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\Product;
use App\Models\ProductPicture;
use App\Models\ProductInventory;

class Dashboard extends Component
{
    public function render()
    {
        return view('livewire.dashboard',[
            'lainnya' => $this->produk_lainnya(),
            'terbaru' => $this->produk_terbaru(),
        ]);
    }

    public function produk_terbaru()
    {
        $produk_terbaru = Product::orderBy('created_at')
                                 ->get()
                                 ->take(10);

        return $produk_terbaru;
    }

    public function produk_lainnya()
    {
        $produk_lainnya = Product::all();

        return $produk_lainnya;
    }
}
