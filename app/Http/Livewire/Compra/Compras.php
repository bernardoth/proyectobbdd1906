<?php

namespace App\Http\Livewire\Compra;

use Livewire\Component;
use App\Models\Compra;
use Carbon\Carbon;

class Compras extends Component
{
    public $listaCompras,$search,$estado;
    public $fecha;

    public function mount()
    {
        $this->fecha =  Carbon::now()->format('Y-m-d');;
    }

    public function render()
    {
        $this->listaCompras = Compra::select(
            'compras.id','compras.numeroDoc','compras.estado','compras.updated_at','proveedors.nombres','proveedors.apellidos')
            ->join('proveedors','compras.proveedor_id','=','proveedors.id')->
            get();
        return view('livewire.compra.compras');
    }
    public function nueva()
    {   $id = 0;
        return redirect('fcompra/formularioc/'.$id);
    }
    public function editar($id)
    {
        $this->emit('editaCompra',$id);
        return redirect('fcompra/formularioc/'.$id);
    }
    public function eliminar($id)
    {
        $c=Compra::find($id);
        $c->productos()->detach();

        $c->delete();
    }

}
