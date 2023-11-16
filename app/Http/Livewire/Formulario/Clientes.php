<?php

namespace App\Http\Livewire\Formulario;

use Livewire\Component;
use App\Models\Cliente;

class Clientes extends Component
{
    public $search,$modalClie,$selecClie,$clientes;

    public function render()
    {
        $this->clientes = Cliente::where('nombres','like','%'.$this->search.'%')->
        orWhere('ci','like','%'.$this->search.'%')->get();
        return view('livewire.formulario.clientes');
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
