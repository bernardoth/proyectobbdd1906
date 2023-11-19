<?php

namespace App\Http\Livewire\Compra;

use Livewire\Component;
use App\Models\Movimiento;
use App\Models\Producto;
use Carbon\Carbon;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class Compras extends Component
{
    use LivewireAlert;
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
        $v=Movimiento::find($id);
        $items = $v->productos;
        foreach ($items as $item)
        {
            $producto= Producto::find($item->id);
            $in = $producto->entrada;
            Producto::updateOrCreate(['id'=>$item->id],
                    [

                        'salida'=>$in-$item->pivot->cantidad,

                    ]);

        }

        $this->alert('warning', 'Compra eliminada.'.$item->cantidad,[
            'toast'=>false,
            'position'=>'center'
        ]);
        $v->productos()->detach();

        $v->delete();
    }

}
