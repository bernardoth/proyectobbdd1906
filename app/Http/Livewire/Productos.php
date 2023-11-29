<?php

namespace App\Http\Livewire;
use Livewire\WithPagination;
use Livewire\Component;
use App\Models\Producto;
use App\Models\Categoria;
use Illuminate\Support\Facades\DB;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class Productos extends Component
{
    use LivewireAlert;

    use WithPagination;
    public $productosl,$search='',$codigo,$descripcion,$precioventa,$preciocompra,$stockinicial,$estado='ACTIVO',$categoria_id='',$idprod;
    public $cat,$nomcat,$idcat,$cant_min,$idc,$cate='';
    public $modal = 0,$sw=true;

    protected $listeners=['confirmed'];
    protected $rules =[
        'codigo'=>'required',
        'descripcion'=>'required',
        'precioventa'=>'required',
        'categoria_id'=>'required|min:1'
    ];
    public function render()
    {
        /*
        $this->productos = Producto::where('codigo','like','%'.$this->search.'%')->
        orWhere('descripcion','like','%'.$this->search.'%')->paginate(10);
        */
        $this->cat = Categoria::all();
        if ($this->cate=='')
        {
            return view('livewire.producto.productos',[
                'productos'=>Producto::
                select(DB::raw('productos.id as ids'),'productos.codigo','productos.descripcion',
                'productos.precioventa','productos.cant_min',
                DB::raw('(productos.stockinicial+productos.entrada-productos.salida) as s'),
                'productos.estado','categorias.nombre as cat')
                ->join('categorias','categorias.id','=','productos.categoria_id')
                ->where('productos.codigo','like','%'.$this->search.'%')
                ->orWhere('descripcion','like','%'.$this->search.'%')
                ->orWhere('categorias.id','=',$this->cate)
                ->orderBy('ids','asc')
                ->paginate(10)
                ]);
                /*
                return view('livewire.producto.productos',[
                    'productos'=>Producto::where('codigo','like','%'.$this->search.'%')->
                    orWhere('descripcion','like','%'.$this->search.'%')->paginate(10),
                    'cat'=>$this->cat]);*/

        }



    }

    public function crear()
    {
        $this->limpiar();
        $this->abrirModal();


    }
    public function guardar()
    {
        $this->validate();
        Producto::updateOrCreate(['id'=>$this->idprod],
        [
            'codigo'=>$this->codigo,
            'descripcion'=>$this->descripcion,
            'precioventa'=>$this->precioventa,
            'stockinicial'=>$this->stockinicial,
            'estado'=>$this->estado,
            'cant_min'=>$this->cant_min,
            'categoria_id'=>$this->categoria_id
        ]);
        /*session()->flash(
            'message',
            $this->idprod ? '¡Actualización exitosa!' : '¡Alta Exitosa!');*/


            $this->alert('success', 'Datos guardados exitosamente .',[
                'toast'=>false,
                'position'=>'center'
            ]);

        $this->cerrarModal();
        $this->limpiar();
    }
    public function editar($id,$idcat)
    {
        $cat = Categoria::findOrFail($idcat);
        $nomcat = $cat->nombre;
        $productol = Producto::findOrFail($id);
        $this->idprod = $id;
        $this->codigo = $productol->codigo;
        $this->descripcion = $productol->descripcion;
        $this->precioventa = $productol->precioventa;
        $this->stockinicial = $productol->stockinicial;
        $this->estado = $productol->estado;
        $this->cant_min = $productol->cant_min;
        $this->categoria_id =$productol->categoria_id;

        $this->sw=false;
        $this->abrirModal();

    }

    public function borrar($id)
    {
/*
        Producto::find($id)->delete();
        //session()->flash('message', 'Registro eliminado correctamente');
        $this->alert('warning', 'Producto eliminado.',[
            'toast'=>false,
            'position'=>'center'
        ]);*/
        $this->idc=$id;
        $this->alert('question','Esta por borrar el producto seleccioando '.$id,[
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
        $this->alert('warning','e elimino el producto',[
            'toast'=>false,
            'position'=>'center'
        ]);

        Producto::find($this->idc)->delete();
        //session()->flash('message', 'Registro eliminado correctamente');
        $this->alert('warning', 'Producto eliminado.',[
            'toast'=>false,
            'position'=>'center'
        ]);

    }
    public function abrirModal()
    {
        $this->modal=true;
    }

    public function cerrarModal()
    {
        $this->modal=false;
    }

    public function limpiar()
    {
        $this->codigo='';
        $this->descripcion='';
        $this->precioventa='';
        $this->stockinicial='';
        $this->estado='';
        $this->cant_min='';
        $this->categoria_id='';
    }
}
