<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\User;
use Illuminate\Support\Facades\Hash;

class UserList extends Component
{

    public $name, $email, $pass, $address, $cedula;
    public $Edit = false, $Create = false; 

    protected $rules = [
        'name' => ['required', 'string', 'max:255'],
        'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        'password' => ['required','string', 'min:8'],
        'address' => 'required',
        "cedula" => "required"
    ];

    public function render()
    {
        $users = User::all();
        return view('livewire.user-list', compact("users"));
    }


    public function getAction($action, $id){
        if($action="edit"){
            $this->Edit=true;
            $this->emit("edit", $id);
        }else{
            $this->Create->true;
        }
    }


    public function deleteUser($id){
        $User = User::find($id);
        
        $User->delete($id);
    }

    public function default(){
        $this->name = "";
        $this->email = "";
        $this->pass = "";
        $this->cedula = "";
        $this->address = "";
        $this->Edit=false;
        $this->Create=false;
        // if ($this->isEdit == true) {
        //     $this->isEdit = false;
        //     return redirect()->to('/');
        // }
    }
}
