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
        //variable de usuarios, pasada a la vista para renderizar la lista de usuarios
        $users = User::all();
        /*return de funcion, aqui se devuelve la vista al navegador, junto a la variable especificada por el metodo compact*/
        return view('livewire.user-list', compact("users"));
    }


    public function getAction($id){
            $this->Edit=true;
            //Envia un evento con el id para identificar al usuario a editar//
            $this->emit("edit", $id);
    }

    //funcion de deleteUser, toma un id pasado por la vista y elimina el usuario de la base de datos//
    public function deleteUser($id){
        //Busca al usuario especificado//
        $User = User::find($id);
        //Elmina al usuario seleccionado//
        $User->delete($id);
    }

}
