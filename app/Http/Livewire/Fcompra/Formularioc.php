<?php

namespace App\Http\Livewire\Fcompra;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use Livewire\Component;
use App\Models\Movimiento;
use App\Models\Persona;
use App\Models\Producto;
use App\Models\User;

class Formularioc extends Component
{
    public $modProv,$nombreProv,$apellidos,$ci,$valor,$modalProv,$modalProd,$idprod,$proveedor,$idProd;
    public $selectProv,$idcompra,$listaProd=[],$precioventa,$preciocompra,$cantidad,$producto,$descripcion,$subtotal;
    public $actualizar = 0,$compra,$arreglo="primero",$v=[],$lv=[],$estado='PEDIDO',$numeroDoc;
    protected $listeners = ['cerrarModal','addProv','addProducto','cerrarModal','guardarCompra','editaCompra'];

    public function mount($valor)
    {
        if ($valor!=0)
        {
            $this->actualizar = $valor;
            $this->compra = Movimiento::find($valor);
            $this->selectProv = $this->compra->persona->id;
            $this->numeroDoc = $this->compra->numeroDoc;

            $p=$this->compra->productos;

            for($i=0;$i< count($p);$i++)
            {
                $idlista =  $p[$i]->producto_id;
                $deslista = $p[$i]->descripcion;
                $preciolista =  $p[$i]->preciocompra;
                $cantidadlista =  $p[$i]->pivot->cantidad;
                $v['id'] = $idlista;
                $v['descripcion'] = $deslista;
                $v['cantidad'] =$cantidadlista ;
                $v['preciocompra'] = $preciolista;
                //$v['subtotal'] = $cantidadlista * $preciolista;
                $v['subtotal'] =number_format($cantidadlista * $preciolista,2,'.',' ');
                array_push($this->lv,$v);

                $v=[];
                //$this->bernardo = 'Que pachucas';


            }
            $this->arreglo = $this->lv;

            $this->dim = count($this->lv);
        }
    }
    public function render()
    {
        if($this->selectProv>0)
        {
            $this->proveedor = Persona::find($this->selectProv);
            $this->nombreProv = $this->proveedor->nombres;
            $this->apellidos = $this->proveedor->apellidos;
            $this->ci = $this->proveedor->ci;


        }
        return view('livewire.fcompra.formularioc');
    }

    public function modal($mod)
    {

        if ($mod=='prov') {
            $this->modalProv = true;

        }
        else{
            $this->modalProd = true;
        }
    }

    public function cerrarModal()
    {
        $this->modalProv = false;
        $this->modalProd = false;
    }

    public function addProv($id)
    {
        $this->selectProv = $id;
        $this->cerrarModal();
    }

    public function nuevoProveedor()
    {
        if ($this->ci!='') {
            $this->proveedor = Persona::where('ci',$this->ci)->get();
            if (is_null($this->proveedor)) {
                $nProv = new Persona();
                $nProv->nombres = $this->nombres;
                $nProv->apellidos = $this->apellidos;
                $nProv->ci = $this->ci;
            }

        }
    }
    public function addProducto($id)
    {
        $this->cerrarModal();
        $this->idProd = $id;
        $this->producto = Producto::find($id);
        $this->descripcion = $this->producto->descripcion;
        $this->preciocompra = $this->producto->preciocompra;
        $this->cantidad = 0;
        $this->subtotal= $this->preciocompra* $this->cantidad;
        array_push($this->listaProd,$id);
        $this->cont = count($this->listaProd);
    }

    public function guardarCompra()
    {
        //$this->arreglo = $que;
        if (is_null($this->selectProv)) {
            $nProv = new Persona();
            $nProv->nombres = $this->nombreProv;
            $nProv->apellidos = $this->apellidos;
            $nProv->ci = $this->ci;
            $nProv->save();
            $c = Persona::where('ci',$this->ci)->get();
            $this->selectProv = $nProv->id;
        }

        if ($this->actualizar>0)
        {
            $this->idcompra = $this->actualizar;
        }
        else {
            $this->idcompra = 0;
        }
        $v = Movimiento::updateOrCreate(
            ['id'=>$this->idcompra],
            ['numeroDoc' => $this->numeroDoc,
            'estado'=>$this->estado,
            'persona_id'=>$this->selectProv,
            'user_id'=>Auth::user()->id]);

            $m = JSON_decode($this->arreglo);

            foreach ($m as $elem)
            {
                //insercion de productos

                $v->productos()->attach(
                    $elem->id,
                    ['cantidad'=>$elem->cantidad,
                    'preciocompra' => $elem->precio,

                ]);
                $anterior = Producto::find($elem->id)->entrada;
                Producto::updateOrCreate(['id'=>$elem->id],
                [

                    'entrada'=>$anterior+$elem->cantidad,

                ]);


            }
            return view('livewire.compra.compras');


    }
    public function editaCompra($id)
    {
        $this->valor = $id;
    }
}
