<?php

namespace App\Http\Livewire\Fcompra;

use Livewire\Component;
use App\Models\Proveedor;

class Proveedors extends Component
{
    public $search,$proveedores;

    public function render()
    {
        $this->proveedores = Proveedor::where('nombres','like','%'.$this->search.'%')->
        orWhere('cinit','like','%'.$this->search.'%')->get();
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
