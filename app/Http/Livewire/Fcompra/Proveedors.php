<?php

namespace App\Http\Livewire\Fcompra;

use Livewire\Component;
use App\Models\Persona;

class Proveedors extends Component
{
    public $search,$proveedores;

    public function render()
    {
        $this->proveedores = Persona::where('nombres','like','%'.$this->search.'%')
        ->Where('ci','like','%'.$this->search.'%')
        ->where('tipo','=','prov')
        ->orWhere('tipo','=','clieprov')
        ->get();
        return view('livewire.fcompra.proveedors');
    }
    public function seleccion($id)
    {
        $this->emit('addProv',$id);
    }

    public function cerrarModal()
    {
        $this->emit('cerrarModal');

    }


}
