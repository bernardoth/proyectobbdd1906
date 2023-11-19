<?php

namespace App\Http\Livewire\User;

use Livewire\Component;
use App\Models\User;
use Jantinnerezo\LivewireAlert\LivewireAlert;

//use Illuminate\Support\Facades\Auth;

class Users extends Component
{
    use LivewireAlert;
    public $usuarios,$iduser,$name,$apellidopaterno,$apellidomaterno,$password,$cargo='',$email;
    public $carnet,$celular,$direccion,$estado;
    public $modal=0;

    protected function rules()
    {
        return
     [
        'name' => 'required|min:3',
        'email' => ['required', 'email', 'not_in:' . auth()->user()->email],
        'apellidopaterno'=>'required',
        'apellidomaterno'=>'required',
        'carnet'=>'required',
        'celular'=>'required',
        'cargo'=>'required'
    ];
    }

    public function render()
    {
        $this->usuarios =User::where('estado','=','ACTIVO')->get();
        return view('livewire.user.users');
    }
    public function crear()
    {
        $this->limpiar();
        $this->abrirModal();
    }
    public function guardar()
    {
        $this->validate();
        User::updateOrCreate(
            ['id'=>$this->iduser],
            [
                'name'=>$this->name,
                'apellidopaterno'=>$this->apellidopaterno,
                'apellidomaterno'=>$this->apellidomaterno,
                'carnet'=>$this->carnet,
                'celular'=>$this->celular,
                'email'=>$this->email,
                'cargo'=>$this->cargo,
                'direccion'=>$this->direccion,
                'password'=>bcrypt($this->password),
                'estado'=>'ACTIVO',


            ]);
            $this->alert('success', 'Datos de usuario guardados exitosamente .',[
                'toast'=>false,
                'position'=>'center'
            ]);
            $this->cerrarModal();
            $this->limpiar();
    }
    public function editar($id)
    {
        $usuario = User::findOrFail($id);
        $this->iduser = $id;
        $this->name = $usuario->name;
        $this->apellidopaterno = $usuario->apellidopaterno;
        $this->apellidomaterno = $usuario->apellidomaterno;
        $this->carnet = $usuario->carnet;
        $this->celular = $usuario->celular;
        $this->email = $usuario->email;
        $this->cargo = $usuario->cargo;
        $this->direccion = $usuario->direccion;
        $this->password = $usuario->password;
        $this->abrirModal();

    }
    public function borrar($id)
    {
        //User::find($id)->delete();
        User::updateOrCreate(
            ['id'=>$id],
            [

                'estado'=>'INACTIVO',
                'password'=>bcrypt('ELEFANTE'),


            ]);

    }
    public function abrirModal()
    {
        $this->modal-=true;
    }
    public function cerrarModal()
    {
        $this->modal= false;
    }
    public function limpiar()
    {
        $this->iduser ='';
        $this->name ='';
        $this->apellidopaterno = '';
        $this->apellidomaterno = '';
        $this->carnet='';
        $this->celular='';
        $this->email ='';
        $this->cargo = '';
        $this->password = '';
        $this->direccion='';
    }
}
