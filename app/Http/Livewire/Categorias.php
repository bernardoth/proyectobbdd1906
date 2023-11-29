<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Categoria;
use Exception;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class Categorias extends Component
{
    use LivewireAlert;

    public $categorias,$search,$codigo,$nombre,$idcat,$idc;
    public $modal=0;

    protected $listeners=['confirmed'];

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



        $this->alert('success', 'Datos guardados exitosamente .',[
            'toast'=>false,
            'position'=>'center'
        ]);
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
        $this->idc=$id;
        $this->alert('question','Esta por borrar el producto seleccioando '.$id,[
            'toast'=>false,
            'timer'=>4000,
            'position'=>'center',
            'showConfirmButton' => true,
            'confirmButtonText' => 'Si, borrar',
            'onConfirmed' => 'confirmed',
            'showCancelButton' => true,
            'cancelButtonText' => 'Cancelar',


        ]);

    }
    public function confirmed()
    {
        try
        {
            Categoria::find($this->idc)->delete();
            $this->alert('warning', 'Categoria eliminada.',[
            'toast'=>false,
            'position'=>'center'
        ]);
        }
        catch (Exception $e)
        {
            $this->alert('warning', 'La categoria no se pudo eliminar.',[
                'toast'=>false,
                'position'=>'center'
            ]);

        }



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
