<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Categoria;

class Categorias extends Component
{

    public $categorias,$search,$codigo,$nombre,$idcat;
    public $modal=0;

    protected $rules=[
        'codigo'=>'required',
        'nombre'=>'required|min:4'
    ];

    public function render()

    {
        $this->categorias =Categoria::where('codigo','like','%'.$this->search.'%')->
        orWhere('nombre','like','%'.$this->search.'%')->get();
        return view('livewire.categoria.categorias');
    }

    public function crear()
    {
        $this->limpiar();
        $this->abrirModal();

    }

    public function guardar()
    {
        $this->validate();
        Categoria::updateOrCreate(['id'=>$this->idcat],
        [
            'codigo'=>$this->codigo,
            'nombre'=>$this->nombre

        ]);

        session()->flash('message',
        $this->idcat ? '¡Actualización exitosa!' : '¡Alta Exitosa!');
        $this->cerrarModal();
        $this->limpiar();

    }

    public function editar($id)
    {
        $categoria = Categoria::findOrFail($id);
        $this->idcat = $id;
        $this->codigo = $categoria->codigo;
        $this->nombre = $categoria->nombre;

        $this->abrirModal();
    }
    public function borrar($id)
    {
        Categoria::find($id)->delete();
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
        $this->codigo='';
        $this->nombre='';
    }

}
