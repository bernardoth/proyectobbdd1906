<?php

namespace App\Http\Livewire\Venta;
use Illuminate\Support\Facades\DB;
use App\Models\Movimiento;
use App\Models\Persona;
use App\Models\Producto;
use Carbon\Carbon;

use Livewire\Component;

class Reportevs extends Component
{
    public $listaVentas,$venta,$fechainicio,$fechafin,$search;
    public $listaClientes,$vectorVentas,$rep=[],$b=0;

    public function mount()
    {
        $this->fechainicio = Carbon::now()->format('Y-m-d');
        $this->fechafin = Carbon::now()->format('Y-m-d');
    }

    public function render()
    {
        $this->listaClientes = Persona::all();
        $this->b =0;
        $this->listaVentas = Movimiento::select('movimientos.id','movimientos.estado','movimientos.persona_id','movimientos.updated_at',
        'personas.nombres','precioventa','cantidad',DB::raw('precioventa * cantidad as total'))
        ->join('personas','movimientos.persona_id','=','personas.id')->where('nombres','like','%'.$this->search.'%')
        ->join('movimiento_producto','movimientos.id','=','movimiento_producto.movimiento_id')
        ->whereDate('movimientos.updated_at','>=',$this->fechainicio)
        ->whereDate('movimientos.updated_at','<=',$this->fechafin)
        ->where('estado','=','PEDIDO')
        //->whereBetween('ventas.updated_at',[$this->fechainicio,$this->fechafin])
        ->groupBy('movimientos.id')->get();

        //$this->rep = [ $this->fechainicio,$this->fechafin];

        //$prueba= $this->listaVentas->pivot->cantidad;
        $this->vectorVentas = $this->listaVentas->toArray();
        foreach($this->listaVentas as $item)
        {
            $this->b = $this->b + $item->total;
        }
        $this->b=number_format($this->b,2,'.',' ');



        return view('livewire.venta.reportevs');
    }
}
