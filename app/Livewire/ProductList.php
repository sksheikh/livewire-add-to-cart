<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;

class ProductList extends Component
{
    public $products;

    public function render()
    {
        $this->products = Product::get();
        return view('livewire.product-list');
    }

    public function addToCart($id){
        if(auth()->user()){

        }else{
            return redirect()->route('login');
        }
    }
}
