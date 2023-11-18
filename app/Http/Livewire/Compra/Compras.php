<?php

namespace App\Http\Livewire\Compra;

use Livewire\Component;
use App\Models\Movimiento;
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
        $this->listaCompras = Movimiento::select(
            'movimientos.id','movimientos.numeroDoc','movimientos.estado',
            'movimientos.updated_at','personas.nombres','personas.apellidos')
            ->join('personas','movimientos.persona_id','=','personas.id')
            ->where('estado','=','COMPRA')
            ->get();
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
        $c=Movimiento::find($id);
        $c->productos()->detach();

        $c->delete();
    }

}
