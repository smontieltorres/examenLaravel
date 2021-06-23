<?php

namespace App\Http\Livewire;

// Importacion de recursos

use Livewire\Component;
use App\Product;

class AdminProduct extends Component
{

    // Definicion de variables globales
    public $name, $stock, $price, $isEdit = false, $productID;

    // Definicion de Reglas de Validacion
    protected $rules = [
        'name' => 'required',
        'stock' => 'required',
        'price' => 'required'
    ];

    // Renderizado de la vista con datos
    public function render()
    {
        // Peticion a la BD de los Productos
        $products = Product::all();

        // Renderizado de la vista con los datos
        return view('livewire.admin-product', compact('products'));
    }

    // Funcion de Creacion de Producto
    public function create()
    {

        // Validacion de los campos afectados
        $this->validate();

        // Creacion del Producto en la BD
        Product::create([
            'name' => $this->name,
            'stock' => $this->stock,
            'price' => $this->price,
        ]);

        // Llamada a funcion de default
        $this->default();
    }

    // Funcion para eliminar Productos
    public function destroy($id)
    {
        // Peticion a la BD con el Producto a Eliminar
        $product = Product::find($id);

        // Eliminacion de un producto
        $product->delete();
    }

    // Funcion de Limpiado de variables
    public function default()
    {
        // Funcion de reseteo de Bags de Error
        $this->resetErrorBag();

        // Limpieza de variables globales de campos editables
        $this->name = "";
        $this->stock = "";
        $this->price = "";

        // Condicional de Limpieza de variables globales si esta editando
        if ($this->isEdit == true) {
            $this->isEdit = false;
            $this->productID = "";
        }
    }

    // Funcion para comenzar la Edicion de un Producto
    public function update($id)
    {
        // Guardando el ID del producto a editar
        $this->productID = $id;

        // Peticion a la BD con el Producto a Editar
        $product = Product::find($id);

        // Seteo de Variable Flag para la edicion de un Producto
        $this->isEdit = true;

        // Funcion de reseteo de Bags de Error
        $this->resetErrorBag();

        // Seteo de Variables globales, con la informacion del producto a editar
        $this->name = $product->name;
        $this->stock = $product->stock;
        $this->price = $product->price;
    }

    // Funcion de Guardado de un Producto editado en la BD
    public function save()
    {

        // Peticion a la BD con el Producto a Editar
        $product = Product::find($this->productID);

        // Validacion de los campos afectados
        $this->validate();

        // Actualizacion de Datos de Producto en BD 
        $product->update([
            'name' => $this->name,
            'stock' => $this->stock,
            'price' => $this->price,
        ]);

        // Llamada a funcion de default
        $this->default();
    }
}
