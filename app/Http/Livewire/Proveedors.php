<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Persona;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class Proveedors extends Component
{
    use LivewireAlert;
    public $listaProv,$search,$modal=0,$numeroDoc,$estado,$nombres,$apellidos,$correo,$direccion,$ci;
    public $celular,$idprov,$tipo='prov';

    protected $rules=[
        'nombres'=>'required|min:2',

    ];

    public function render()
    {
        $this->listaProv = Persona::where('nombres','like','%'.$this->search.'%')
        ->where('tipo','=','prov')
        ->orWhere('tipo','=','clieprov')
        ->Where('ci','like','%'.$this->search.'%')->get();
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
        Persona::updateOrCreate(['id'=>$this->idprov],
        [

            'estado'=>$this->estado,
            'nombres'=>$this->nombres,
            'apellidos'=>$this->apellidos,
            'correo'=>$this->correo,
            'direccion'=>$this->direccion,
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
    public function borrar($id)
    {
        Persona::find($id)->delete();
        $this->alert('warning', 'Proveedor eliminado.',[
            'toast'=>false,
            'position'=>'center'
        ]);
    }



    public function limpiar()
    {

        $this->estado = '';
        $this->nombres = '';
        $this->apellidos = '';
        $this->correo = '';
        $this->direccion = '';
        $this->celular = '';
        $this->ci = '';
    }

    public function editar($id)
    {
        $prov = Persona::findOrFail($id);
        $this->idprov = $id;

        $this->estado = $prov->estado;
        $this->nombres = $prov->nombres;
        $this->apellidos = $prov->apellidos;
        $this->correo = $prov->correo;
        $this->direccion = $prov->direccion;
        $this->celular = $prov->celular;
        $this->ci = $prov->ci;
        $this->tipo =$prov->tipo;
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
