<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Proveedor;

class Proveedors extends Component
{
    public $listaProv,$search,$modal=0,$numeroDoc,$estado,$nombres,$apellidos,$correo,$direccion,$cinit;
    public $celular,$idprov;

    protected $rules=[
        'nombres'=>'required|min:2',
        'cinit'=>'required'
    ];

    public function render()
    {
        $this->listaProv = Proveedor::where('nombres','like','%'.$this->search.'%')->
        orWhere('cinit','like','%'.$this->search.'%')->get();
        return view('livewire.proveedor.proveedors');
    }
    public function crear()
    {
        $this->modal = 1;
        $this->limpiar();
        $this->abrirModal();

    }
    public function guardar()
    {
        $this->validate();
        Proveedor::updateOrCreate(['id'=>$this->idprov],
        [

            'estado'=>$this->estado,
            'nombres'=>$this->nombres,
            'apellidos'=>$this->apellidos,
            'correo'=>$this->correo,
            'direccion'=>$this->direccion,
            'celular'=>$this->celular,
            'cinit'=>$this->cinit
        ]);
        session()->flash(
            'message',
            $this->idprov ? '¡Actualización exitosa!' : '¡Alta Exitosa!');

        $this->cerrarModal();
        $this->limpiar();
    }
    public function borrar($id)
    {
        Proveedor::find($id)->delete();
        session()->flash('message', 'Registro eliminado correctamente');
    }



    public function limpiar()
    {

        $this->estado = '';
        $this->nombres = '';
        $this->apellidos = '';
        $this->correo = '';
        $this->direccion = '';
        $this->celular = '';
        $this->cinit = '';
    }

    public function editar($id)
    {
        $prov = Proveedor::findOrFail($id);
        $this->idprov = $id;

        $this->estado = $prov->estado;
        $this->nombres = $prov->nombres;
        $this->apellidos = $prov->apellidos;
        $this->correo = $prov->correo;
        $this->direccion = $prov->direccion;
        $this->celular = $prov->celular;
        $this->cinit = $prov->cinit;
        $this->abrirModal();
    }

    public function abrirModal()
    {
        $this->modal=true;
    }

    public function cerrarModal()
    {
        $this->modal=false;
    }

}
