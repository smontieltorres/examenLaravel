<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\User;
use Illuminate\Support\Facades\Hash;

class UserList extends Component
{

    public $Edit = false, $Create = false; 

    public function render()
    {
        $users = User::all();
        return view('livewire.user-list', compact("users"));
    }


    public function getAction($id){
            $this->Edit=true;
            $this->emit("edit", $id);
    }


    public function deleteUser($id){
        $User = User::find($id);
        
        $User->delete($id);
    }

}
