<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Product;

class ShowProduct extends Component
{
    public function render()
    {
        $products = Product::orderBy('id',"DESC")->get();

        return view('livewire.show-product', compact('products'));
    }

    public function redirectLogin(){
        return redirect()->to('/login');
    }
}
