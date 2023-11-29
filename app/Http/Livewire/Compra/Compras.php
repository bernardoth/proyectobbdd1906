<?php

namespace App\Http\Livewire\Compra;

use Livewire\Component;
use App\Models\Movimiento;
use App\Models\Producto;
use Carbon\Carbon;
use Exception;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class Compras extends Component
{
    use LivewireAlert;
    public $listaCompras,$search,$estado;
    public $fecha,$idc;

    protected $listeners=['confirmed'];

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
        $this->idc=$id;
        $this->alert('question','Esta por borrar la compra seleccioanda '.$id,[
            'toast'=>false,
            'timer'=>4000,
            'position'=>'center',
            'showConfirmButton' => true,
            'confirmButtonText' => 'Si, borrar',
            'onConfirmed' => 'confirmed',
            'showCancelButton' => true,
            'cancelButtonText' => 'Cancelar',


        ]);

    }

    public function confirmed()
    {
        try
        {
            $v=Movimiento::find($this->idc);
        $items = $v->productos;
        foreach ($items as $item)
        {
            $producto= Producto::find($item->id);
            $in = $producto->entrada;
            Producto::updateOrCreate(['id'=>$item->id],
                    [

                        'entrada'=>$in-$item->pivot->cantidad,

                    ]);

        }


            $v->productos()->detach();

            $v->delete();
            $this->alert('warning', 'Compra eliminada.',[
                'toast'=>false,
                'position'=>'center'
            ]);

        }
        catch (Exception  $e)
        {
            $this->alert('warning', 'La Compra no se pudo eliminar.',[
                'toast'=>false,
                'position'=>'center'
            ]);

        }

    }

}
