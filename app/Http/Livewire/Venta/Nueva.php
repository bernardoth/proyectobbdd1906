<?php

namespace App\Http\Livewire\Venta;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use Livewire\Component;
use App\Models\Cliente;
use App\Models\Producto;
use App\Models\User;
use App\Models\Venta;

class Nueva extends Component
{
    public $modalClie,$modalProd,$ventaCliente,$selecClie,$clientes;
    public $selecProd,$listaProd=[],$cont,$idProd;
    public $producto,$codigo,$descripcion,$precio,$stock,$cantidad;
    public $arreglo='primero';
    public $idUser,$cliente,$subtotal;

    protected $listeners = ['addCliente','addProducto','cerrarModal','guardar'];
    public function render()
    {
        if ($this->selecClie>0)
        {
            $this->cliente = Cliente::find($this->selecClie);
        }

        return view('livewire.venta.nueva');
    }

    public function abrirModal($m)
    {
        if ($m=='clie') {
            $this->modalClie = true;
        }
        else {
            $this->modalProd = true;
        }
    }

    public function cerrarModal()
    {
        $this->modalClie = false;
        $this->modalProd = false;
    }

    public function addCliente($id)
    {
        $this->selecClie = $id;
        $this->cerrarModal();
    }
    public function addProducto($id)
    {
        $this->cerrarModal();
        $this->idProd = $id;
        $this->producto = Producto::find($id);
        $this->descripcion = $this->producto->descripcion;
        $this->precio = $this->producto->precio;
        $this->cantidad = 0;
        $this->subtotal= $this->precio* $this->cantidad;
        array_push($this->listaProd,$id);
        $this->cont = count($this->listaProd);
    }

    public function guardar()
    {
        //$this->arreglo = $que;

        $v = new Venta();
            $v->estado = 'PROFORMA';
            $v->cliente_id = $this->selecClie;
            $v->user_id =  Auth::user()->id;
            $v->save();
            $m =JSON_decode($this->arreglo);
            //$this->idUser = $m[0]->descripcion;
            foreach ($m as $elem)
            {
                //insercion de productos

                $v->productos()->attach(
                    $elem->id,
                    ['cantidad'=>$elem->cantidad,
                    'precio'=>$elem->precio
                ]);


            }


    }


}
