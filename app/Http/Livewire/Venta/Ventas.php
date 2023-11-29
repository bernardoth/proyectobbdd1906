<?php

namespace App\Http\Livewire\Venta;
use Illuminate\Support\Facades\Auth;
use Livewire\WithPagination;
use Livewire\Component;
use App\Models\Persona;
use App\Models\Producto;
use App\Models\User;
use App\Models\Movimiento;
use Carbon\Carbon;
use Exception;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class Ventas extends Component
{
    use LivewireAlert;
    use WithPagination;
    public $listaVentas,$listaClientes,$nuevaVenta,$usuario,$idc;
    public $selectClie,$valor,$search='',$fecha='',$tipo='PROFORMA';

    protected $listeners=['confirmed'];

    public function mount()
    {
        $this->fecha = Carbon::now()->format('Y-m-d');
    }
    public function render()
    {
        $this->usuario =Auth::user();
        $this->listaClientes = Persona::all();
        //$this->listaVentas = Venta::where('cliente_id','like','%'.$this->search.'%')->get();
        //$this->fecha = '2023-01-01';
        $this->listaVentas = Movimiento::select('movimientos.id','movimientos.numeroDoc',
        'movimientos.estado','movimientos.persona_id','movimientos.updated_at','personas.nombres')
        ->join('personas','movimientos.persona_id','=','personas.id')
        ->where('nombres','like','%'.$this->search.'%')
        ->whereDate('movimientos.updated_at','>=',$this->fecha)
        ->where('movimientos.estado','=',$this->tipo)
        ->orderby('id','desc')->get();


        return view('livewire.venta.ventas');
    }

    public function nueva()
    {   $id= 0;
        return redirect('formulario/formulario/'.$id);
    }
    public function editar($id)
    {   $this->emit('EditaVenta',$id);
        return redirect('formulario/formulario/'.$id);
    }


    public function eliminar($id)
    {
        $this->idc=$id;
        $this->alert('question','Esta por borrar la venta/prof '.$id,[
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
        //
        $items = $v->productos;
        foreach ($items as $item)
        {
            $producto= Producto::find($item->id);
            $in = $producto->salida;
            Producto::updateOrCreate(['id'=>$item->id],
                    [

                        'salida'=>$in-$item->pivot->cantidad,

                    ]);

        }

        $v->productos()->detach();
        $v->delete();

        $this->alert('warning', 'Venta eliminada.',[
            'toast'=>false,
            'position'=>'center'
        ]);
        }
        catch(Exception $e)
        {
            $this->alert('warning', 'Venta no se elimino.'.$item->cantidad,[
                'toast'=>false,
                'position'=>'center'
            ]);
        }

    }
}
