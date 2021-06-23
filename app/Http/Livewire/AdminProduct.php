<?php

namespace App\Http\Livewire;

// Importacion de recursos

use Livewire\Component;
use App\Product;

class AdminProduct extends Component
{

    // Definicion de variables globales
    public $name, $stock, $price, $isEdit=false, $productID;

    // Definicion de Reglas de Validacion
    protected $rules = [
        'name'=> 'required',
        'stock' => 'required',
        'price' => 'required'
    ];

    // Renderizado de la vista con datos
    public function render()
    {
        $products = Product::all();

        return view('livewire.admin-product', compact('products'));
    }

    // Funcion de Creacion de Producto
    public function create(){

        $this->validate();

        Product::create([
            'name'=>$this->name,
            'stock'=>$this->stock,
            'price'=>$this->price,
        ]);

        $this->default();
    }

    public function destroy($id){

        $product = Product::find($id);

        $product->delete();
    }

    public function default(){

        $this->resetErrorBag();

        $this->name = "";
        $this->stock = "";
        $this->price = "";
        
        if($this->isEdit == true){
            $this->isEdit = false;
            $this->productID = "";
        }
    }

    public function update($id){

        $this->productID = $id;
        $product = Product::find($id);

        $this->isEdit = true;

        $this->resetErrorBag();

        $this->name = $product->name;
        $this->stock = $product->stock;
        $this->price = $product->price;
    }

    public function save(){

        $product = Product::find($this->productID);

        $this->resetErrorBag();

        $this->validate();

        $product->update([
            'name'=>$this->name,
            'stock'=>$this->stock,
            'price'=>$this->price,
        ]);

        $this->default();
    }
}
