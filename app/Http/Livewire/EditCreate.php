<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\User;
use Illuminate\Support\Facades\Hash;

class EditCreate extends Component
{

    public $name, $email, $pass, $address, $cedula;

    protected $listener = ["edit", "setUpdateData"];

    public function render()
    {
        return view('livewire.edit-create');
    }

    public function updateUser($id){
        $user = User::find($id);

        $this->resetErrorBag();
        $this->validate();

        $product->update([
            'name' => $this->name,
            'email' => $this->email,
            'pass' => Hash::make($this->pass),
            'address' => $this->address,
            'cedula' => $this->cedula
        ]);
    }

    public function setUpdateData($id){
        $UserEdit = User::find($id);


        $this->name = $UserEdit->name;
        $this->email = $UserEdit->email;
        $this->password = "";
        $this->cedula = $UserEdit->cedula;
        $this->address = $UserEdit->address;
    }

    public function createUser(){
        $this-> validate();

        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->pass),
            "cedula" => $this->cedula,
            "address" => $this->address,
        ]);
    }
}
