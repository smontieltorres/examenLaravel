<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\User;
use Illuminate\Support\Facades\Hash;

class EditCreate extends Component
{

    public $name, $email, $pass, $address, $cedula, $idUser;

    protected $listeners = ["edit"=>"setUpdateData"];

    protected $rules = [
        'name' => ['required', 'string', 'max:255'],
        'email' => ['required', 'string', 'email', 'max:255'],
        'address' => 'required',
        "cedula" => "required"
    ];

    public function render()
    {
        return view('livewire.edit-create');
    }

    public function updateUser(){
        $user = User::find($this->idUser);

        $this->resetErrorBag();
        $this->validate();

        if($this->pass == ""){
            $user->update([
                'name' => $this->name,
                'email' => $this->email,
                'address' => $this->address,
                'cedula' => $this->cedula
            ]);
        }else{
            $user->update([
                'name' => $this->name,
                'email' => $this->email,
                'pass' => Hash::make($this->pass),
                'address' => $this->address,
                'cedula' => $this->cedula
            ]);
        }

    }

    public function setUpdateData($id){
        $UserEdit = User::find($id);
        $this->idUser = $UserEdit->id;

        $this->name = $UserEdit->name;
        $this->email = $UserEdit->email;
        $this->pass = "";
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
