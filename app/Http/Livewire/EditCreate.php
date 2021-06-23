<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\User;
use Illuminate\Support\Facades\Hash;

class EditCreate extends Component
{

    public $name, $email, $pass, $address, $cedula, $userID, $isEdit=false;

    protected $listeners = ["edit"=>"setUpdateData"];

    protected $rules = [
        'name' => ['required'],
        'email' => ['required'],
        'address' => 'required',
        "cedula" => "required"
    ];

    public function render()
    {
        return view('livewire.edit-create');
    }

    public function updateUser(){
        $user = User::find($this->userID);

        $this->resetErrorBag();
        $this->validate();

        if ($this->pass == "") {
            $user->update([
                'name' => $this->name,
                'email' => $this->email,
                'address' => $this->address,
                'cedula' => $this->cedula
            ]);
        }else {
            $user->update([
                'name' => $this->name,
                'email' => $this->email,
                'password' => Hash::make($this->pass),
                'address' => $this->address,
                'cedula' => $this->cedula
            ]);
        }
        $this->default();
    }

    public function setUpdateData($id){
        $this->isEdit=true;

        $this->userID=$id;
        $UserEdit = User::find($id);

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

        $this->default();
    }

    public function default(){
        $this->name = "";
        $this->email = "";
        $this->pass = "";
        $this->cedula = "";
        $this->address = "";
        if ($this->isEdit == true) {
            $this->isEdit = false;
            return redirect()->to('/home');
        }
    }
}
