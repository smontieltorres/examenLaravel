<?php

namespace App\Http\Livewire;

// Importacion de recursos

use Livewire\Component;
use App\Product;

class ShowProduct extends Component
{

    // Renderizado de la vista con datos
    public function render()
    {
        $products = Product::orderBy('id', "DESC")->get();

        return view('livewire.show-product', compact('products'));
    }

    // Funcion de Redireccion al inicio de Sesion
    public function redirectLogin()
    {
        return redirect()->to('/login');
    }
}
