<?php

namespace App\Http\Livewire\Venta;
use Illuminate\Support\Facades\DB;
use App\Models\Venta;
use App\Models\Cliente;
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
        $this->listaClientes = Cliente::all();
        $this->b =0;
        $this->listaVentas = Venta::select('ventas.id','ventas.estado','ventas.cliente_id','ventas.updated_at',
        'clientes.nombres','precioventa','cantidad',DB::raw('precioventa * cantidad as total'))
        ->join('clientes','ventas.cliente_id','=','clientes.id')->where('nombres','like','%'.$this->search.'%')
        ->join('producto_venta','ventas.id','=','producto_venta.venta_id')
        ->whereDate('ventas.updated_at','>=',$this->fechainicio)
        ->whereDate('ventas.updated_at','<=',$this->fechafin)
        //->whereBetween('ventas.updated_at',[$this->fechainicio,$this->fechafin])
        ->groupBy('ventas.id')->get();

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
