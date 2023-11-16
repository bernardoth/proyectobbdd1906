<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Cliente;

class Clientes extends Component
{
    public $clientes,$search,$nombres,$apellidos,$correo,$celular,$ci,$idclie;
    public $modal = 0;

    protected $rules=[
        'nombres'=>'required',

        'celular'=>'required',

    ];


    public function render()
    {
        $this->clientes = Cliente::where('nombres','like','%'.$this->search.'%')->
        orWhere('ci','like','%'.$this->search.'%')->get();
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
        Cliente::updateOrCreate(['id'=>$this->idclie],
        [
            'nombres'=>$this->nombres,
            'apellidos'=>$this->apellidos,
            'correo'=>$this->correo,
            'celular'=>$this->celular,
            'ci'=>$this->ci
        ]);
        session()->flash(
            'message',
            $this->idclie ? '¡Actualización exitosa!' : '¡Alta Exitosa!');

        $this->cerrarModal();
        $this->limpiar();
    }
    public function editar($id)
    {
        $cliente = Cliente::findOrFail($id);
        $this->idclie = $id;
        $this->nombres = $cliente->nombres;
        $this->apellidos = $cliente->apellidos;
        $this->correo = $cliente->correo;
        $this->celular = $cliente->celular;
        $this->ci = $cliente->ci;
        $this->abrirModal();
    }

    public function borrar($id)
    {
        Cliente::find($id)->delete();
        session()->flash('message', 'Registro eliminado correctamente');
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
