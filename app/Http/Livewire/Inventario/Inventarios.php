<?php

namespace App\Http\Livewire\Inventario;
use Livewire\WithPagination;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
use App\Models\Producto;
use App\Models\Categoria;
use Livewire\Component;

class Inventarios extends Component
{
    //use WithPagination;
    public $productosl,$search,$codigo,$descripcion,$precioventa,$preciocompra,$stock,$estado,$categoria_id,$idprod;
    public $cat,$nomcat,$idcat,$cant_min,$productos;
    public $modal,$fechainicio,$fechafin,$tipo='TODOS';

    public function mount()
    {
        $this->search = '';
        //$this->fechainicio = Carbon::now()->format('Y-m-d');
        $this->fechainicio = Carbon::now()->format('Y-m-d');
        $this->fechafin = Carbon::now()->format('Y-m-d');
    }

    public function render()
    {
        $this->cat = Categoria::all();

            if ($this->search !='' )
            {
                $this->productos = Producto::select(
                    'productos.id',
                    'productos.descripcion',
                    'productos.preciocompra',
                    'productos.precioventa',
                    'productos.stockinicial',
                    'productos.entrada',
                    'productos.salida',
                    'productos.estado',
                    'categorias.nombre')->
                join('categorias','categorias.id','=','productos.categoria_id')->
                where('productos.descripcion','like','%'.$this->search.'%')->
                get();

            }
            else
            {
                if($this->tipo=='MINIMOS')
                {
                $this->productos = DB::select('call prodMin()');
               //
                }
                else
                {
                    $this->productos = null;
                }

            }

        return view('livewire.inventario.inventarios');

    }


        /*
        return view('livewire.inventario.inventarios',[
            'productos'=>Producto::where('codigo','like','%'.$this->search.'%')->
            orWhere('descripcion','like','%'.$this->search.'%')->paginate(10),
            'cat'=>$this->cat]);
            */


}


