<?php

namespace App\Http\Livewire\Venta;

use Livewire\Component;
use App\Models\Cliente;


class Clientes extends Component
{
    public $busqueda,$modalClie,$selecClie;
    public function render()
    {
        $this->clientes = Cliente::where('nombres','like','%'.$this->busqueda.'%')->
        orWhere('ci','like','%'.$this->busqueda.'%')->get();
        return view('livewire.venta.clientes');
    }

    public function seleccion($id)
    {
        $this->emit('addCliente',$id);
    }

    public function cerrarModal()
    {
        $this->emit('cerrarModal');

    }


}
