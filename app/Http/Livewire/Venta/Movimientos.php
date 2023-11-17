<?php

namespace App\Http\Livewire\Venta;
use Illuminate\Support\Facades\Auth;
use Livewire\WithPagination;
use Livewire\Component;
//use App\Models\Cliente;
use App\Models\Persona;
use App\Models\Producto;
use App\Models\User;
//use App\Models\Venta;
use App\Models\Movimiento;
use Carbon\Carbon;

class Movimientos extends Component
{
    use WithPagination;
    public $listaVentas,$listaClientes,$nuevaVenta,$usuario;
    public $selectClie,$valor,$search='',$fecha='',$tipo='PROFORMA';

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
        $this->listaVentas = Movimiento::select('ventas.id','ventas.numeroDoc','ventas.estado','ventas.cliente_id','ventas.updated_at','clientes.nombres')
        ->join('clientes','ventas.cliente_id','=','clientes.id')
        ->where('nombres','like','%'.$this->search.'%')
        ->whereDate('ventas.updated_at','>=',$this->fecha)
        ->where('ventas.estado','=',$this->tipo)
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

        $v=Movimiento::find($id);
        $v->productos()->detach();

        $v->delete();
    }
}
