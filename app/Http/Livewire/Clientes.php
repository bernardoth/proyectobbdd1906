<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Cliente;
use App\Models\Persona;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class Clientes extends Component
{
    use LivewireAlert;
    public $clientes,$search,$nombres,$apellidos,$correo,$celular,$ci,$idclie,$tipo='clie';
    public $modal = 0;

    protected $rules=[
        'nombres'=>'required',

        'celular'=>'required',

    ];


    public function render()
    {
        $this->clientes = Persona::where('nombres','like','%'.$this->search.'%')
        ->where('tipo','=','clie')
        ->orWhere('tipo','=','clieprov')
        ->where('ci','like','%'.$this->search.'%')->get();
        return view('livewire.cliente.clientes');
    }

    public function crear()
    {
        $this->limpiar();
        $this->abrirModal();

    }
    public function guardar()
    {
        $this->validate();
        Persona::updateOrCreate(['id'=>$this->idclie],
        [
            'nombres'=>$this->nombres,
            'apellidos'=>$this->apellidos,
            'correo'=>$this->correo,
            'celular'=>$this->celular,
            'ci'=>$this->ci,
            'tipo'=>$this->tipo
        ]);

        $this->alert('success', 'Datos guardados exitosamente .',[
            'toast'=>false,
            'position'=>'center'
        ]);
        $this->cerrarModal();
        $this->limpiar();
    }
    public function editar($id)
    {
        $cliente = Persona::findOrFail($id);
        $this->idclie = $id;
        $this->nombres = $cliente->nombres;
        $this->apellidos = $cliente->apellidos;
        $this->correo = $cliente->correo;
        $this->celular = $cliente->celular;
        $this->ci = $cliente->ci;
        $this->tipo = $cliente->tipo;
        $this->abrirModal();
    }

    public function borrar($id)
    {
        Persona::find($id)->delete();
        $this->alert('warning', 'Cliente eliminado.',[
            'toast'=>false,
            'position'=>'center'
        ]);
    }
    public function abrirModal()
    {
        $this->modal=true;
    }

    public function cerrarModal()
    {
        $this->modal=false;
    }

    public function limpiar()
    {
        $this->nombres='';
        $this->apellidos='';
        $this->correo='';
        $this->celular='';
        $this->ci='';
    }
}
