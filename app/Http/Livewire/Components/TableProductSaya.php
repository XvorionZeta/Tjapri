<?php

namespace App\Http\Livewire\Components;

use Livewire\WithPagination;

use Livewire\Component;
use App\Models\Product;
use App\Models\ProductDiscount;
use App\Models\ProductInventory;

class TableProductSaya extends Component
{

    use WithPagination;

    public function render()
    {
        $product = Product::join('product_inventory','product.id','=','product_inventory.product_id')
                          ->paginate(10);

        return view('livewire.components.table-product-saya',[
            'product' => $product,
        ]);
    }
}
