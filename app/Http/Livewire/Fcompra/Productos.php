<?php

namespace App\Http\Livewire\Fcompra;

use Livewire\Component;
use App\Models\Producto;

class Productos extends Component
{
    public $productos,$busqueda;

    public function mount()
    {
        $this->busqueda = '';
    }
    public function render()
    {
        if ($this->busqueda!='') {
            $this->productos = Producto::where('codigo','like','%'.$this->busqueda.'%')->
            orWhere('descripcion','like','%'.$this->busqueda.'%')->get();# code...
        }
        return view('livewire.fcompra.productos');
    }

    public function cerrarModal()
    {
        $this->emit('cerrarModal');
    }

    public function seleccionP($id)
    {
        $this->emit('addProducto',$id);
    }
}
