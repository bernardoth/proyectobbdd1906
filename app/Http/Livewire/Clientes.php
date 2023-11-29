<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Cliente;
use App\Models\Persona;
use Exception;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class Clientes extends Component
{
    use LivewireAlert;
    public $clientes,$search,$nombres,$apellidos,$correo,$celular,$ci,$idclie,$tipo='clie';
    public $modal = 0,$idc;

    protected $listeners=['confirmed'];

    protected $rules=[
        'nombres'=>'required',

        'ci'=>'required',

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
        $this->idc=$id;
        $this->alert('question','Esta por borrar el Cliente seleccioando '.$id,[
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
        try {
            Persona::find($this->idc)->delete();

        $this->alert('warning', 'Cliente eliminado.',[
            'toast'=>false,
            'position'=>'center'
        ]);
        } catch (Exception $e) {


        $this->alert('warning', 'No se puede eliminar al cliente.',[
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
        $this->nombres='';
        $this->apellidos='';
        $this->correo='';
        $this->celular='';
        $this->ci='';
    }
}
