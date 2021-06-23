<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\User;
use Illuminate\Support\Facades\Hash;

class UserList extends Component
{
    //Variables de estado, estas determinan si se va a editar o crear un nuevo usuario//
    public $Edit = false, $Create = false; 


    //Funcion render, renderiza la vista bajo los parametros especificados
    public function render()
    {
        //variable de usuarios, pasada a la vista para renderizar la lista de usuarios
        $users = User::all();
        /*return de funcion, aqui se devuelve la vista al navegador, junto a la variable especificada por el metodo compact*/
        return view('livewire.user-list', compact("users"));
    }

    //Funcion getAction, determina que accion va a realizarse y genera un evento en consecuencia//
    public function getAction($action, $id){
        if($action="edit"){
            //Setea la variable edit para actualizar la vista a funcion de edicion//
            $this->Edit=true;
            //Envia un evento con el id para identificar al usuario a editar//
            $this->emit("edit", $id);
        }else{
            //Setea la variable para actualizar la vista a la funcion de edicion//
            $this->Create->true;
        }
    }

    //funcion de deleteUser, toma un id pasado por la vista y elimina el usuario de la base de datos//
    public function deleteUser($id){
        //Busca al usuario especificado//
        $User = User::find($id);
        //Elmina al usuario seleccionado//
        $User->delete($id);
    }

    //Configura las variables a un estado por defecto//
    public function default(){
        $this->Edit=false;
        $this->Create=false;
        // if ($this->isEdit == true) {
        //     $this->isEdit = false;
        //     return redirect()->to('/');
        // }
    }
}
