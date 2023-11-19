<?php

namespace App\Http\Livewire\Venta;

use Livewire\Component;
use App\Models\Persona;


class Clientes extends Component
{
    public $busqueda,$modalClie,$selecClie,$clientes;
    public function render()
    {
        $this->clientes = Persona::where('nombres','like','%'.$this->busqueda.'%')
        //->where('tipo','=','clie')
        ->Where('tipo','=','clieprov')
        ->orWhere('ci','like','%'.$this->busqueda.'%')
        ->get();
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
