<?php

namespace App\Http\Livewire\Fcompra;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use Livewire\Component;
use App\Models\Persona;
use App\Models\Producto;
use App\Models\Movimiento;
use App\Models\User;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class Formularioc extends Component
{
    use LivewireAlert;

    public $ventaCliente,$selectClie,$clientes,$valor,$nombreClie,$apellidos,$ci,$busqueda;
    public $modalClie= false,$modalProd = false,$experimento,$nuevoNumero,$stock;
    public $prod,$descripcion,$precioventa,$preciocompra,$cantidad,$subtotal,$idProd;
    public $datosCliente,$arreglo="",$estado='COMPRA',$listaProd=[],$numeroDoc;
    public $idventa,$dVenta,$lprod,$v=[],$lv=[],$actualizar,$venta,$cliente,$producto,$cont;

    protected $listeners =['cerrarModal','addProv','addProducto','cerrarModal','guardar','editaCompra','nombre'] ;


    public function mount($valor)
    {   if ($valor!=0)
        {
            $this->actualizar = $valor;
            $this->venta =Movimiento::find($valor);
            $this->selectClie = $this->venta->persona->id;
            $this->estado = $this->venta->estado;
            $this->numeroDoc=$this->venta->numeroDoc;


            $p=$this->venta->productos;

           // $this->actualizar = 1;
            for($i=0;$i< count($p);$i++)
            {
                $idlista =  $p[$i]->id;
                $deslista = $p[$i]->descripcion;
                $preciolista =  $p[$i]->precioventa;//kkk
                $cantidadlista =  $p[$i]->pivot->cantidad;
                $v['id'] = $idlista;
                $v['descripcion'] = $deslista;
                $v['cantidad'] =$cantidadlista ;
                $v['precio'] = $preciolista;
                //$v['subtotal'] = $cantidadlista * $preciolista;
                $v['subtotal'] = number_format($cantidadlista * $preciolista,2,'.',' ');
                //$v['subtotal'] = $cantidadlista * $preciolista;
                array_push($this->lv,$v);

                $v=[];
                //$this->bernardo = 'Que pachucas';


            }
            //$this->arreglo = JSON_encode($this->lv);
            $this->arreglo = $this->lv;

            $this->dim = count($this->lv);

        }

    }

    public function render()
    {


        if ($this->selectClie>0)
        {
            $this->cliente = Persona::find($this->selectClie);
            $this->nombreClie = $this->cliente->nombres ;
            $this->apellidos = $this->cliente->apellidos;
            $this->ci = $this->cliente->ci;

        }



        return view('livewire.fcompra.formularioc');
    }

    public function modal($mod)
    {

        if ($mod=='clie') {
            $this->modalClie = true;

        }
        else{
            $this->modalProd = true;
        }
    }



    public function cerrarModal()
    {
        $this->modalClie = false;
        $this->modalProd = false;
    }

    public function addProv($id)
    {
        $this->selectClie = $id;
        $this->cerrarModal();
    }



    public function addProducto($id)
    {
        $this->cerrarModal();
        $this->idProd = $id;
        $this->producto = Producto::find($id);
        $this->descripcion = $this->producto->descripcion;
        $this->precioventa = $this->producto->preciocompra;
        $this->stock = $this->producto->stock;
        $this->cantidad = 0;
        $this->subtotal= $this->preciocompra* $this->cantidad;
        array_push($this->listaProd,$id);
        $this->cont = count($this->listaProd);
    }

    public function nuevoCliente()
    {
        if ($this->cinit!='') {
            $this->cliente = Persona::where('ci',$this->cinit)->get();
            if (is_null($this->cliente)) {
                $nClie = new Persona();
                $nclie->nombres = $this->nombres;
                $nclie->apellidos = $this->apellidos;
                $nClie->ci = $this->ci;
            }

        }
    }
    public function guardar()
    {
        //$this->validate();
        //$this->arreglo = $que;
        if (is_null($this->selectClie)) {
            $newClie = new Persona();
            $newClie->nombres = $this->nombreClie;
            $newClie->apellidos = $this->apellidos;
            $newClie->ci = $this->ci;
            $newClie->tipo = 'prov';
            $newClie->save();
            $c = Persona::where('ci',$this->ci)->get();
            $this->selectClie = $newClie->id;
        }
        /*
            $v = new Venta();
            $v->estado = 'Pendiente';
            $v->cliente_id = $this->selectClie;
            $v->user_id =  Auth::user()->id;
            $v->save();
            $m =JSON_decode($this->arreglo);
            //$this->idUser = $m[0]->descripcion;
        */
        if ($this->actualizar>0)
        {
            $this->idventa = $this->actualizar;
        }
        else {
            $this->idventa = 0;
        }
/*
        switch ($this->estado) {
            case 'PEDIDO':
                $num = Movimiento::where('estado','=','PEDIDO')->count();
                break;
            case 'PROFORMA':
                $num = Movimiento::where('estado','=','PROFORMA')->count();
                break;
            case 'CANCELADO':
                $num = Movimiento::where('estado','=','CANCELADO')->count();
                break;


            default:
                # code...
                break;
        }*/


        $v = Movimiento::updateOrCreate(
            ['id'=>$this->idventa],
            ['numeroDoc'=>$this->numeroDoc,
            'estado'=>$this->estado,
            'persona_id'=>$this->selectClie,
            'user_id'=>Auth::user()->id]);

            $m = JSON_decode($this->arreglo);
            //linea de prueba
            $v->productos()->detach();
            foreach ($m as $elem)
            {
                //insercion de productos
                /*
                if ($elem->id=='')
                {
                    //crea nuevo producto
                    Producto::updateOrCreate(['id'=>$this->idprod],
                    [
                        //'codigo'=>$this->codigo,
                        'descripcion'=>$this->descripcion,
                        'preciocompra'=>$elem->preciocompra,
                        'stockinicial'=>$elem->cantidad,
                        'estado'=>'ACTIVO',
                        'cant_min'=>$elem->cantidad,
                        'categoria_id'=>$this->categoria_id
                    ]);
                }*/

                $v->productos()->attach(
                    $elem->id,
                    ['cantidad'=>$elem->cantidad,
                    'preciocompra'=>$elem->precio
                ]);

                $anterior = Producto::find($elem->id)->entrada;
                //$anteriorEntrada = Producto::find($elem->id)->entrada;
                Producto::updateOrCreate(['id'=>$elem->id],
                [

                    'entrada'=>$anterior+$elem->cantidad,

                ]);




            }
            $this->flash('success', 'Datos guardados exitosamente .',[
                'toast'=>false,
                'position'=>'center'
            ],'http://proyectobbdd1906.me/compra/compras');


            //return view('livewire.compra.compras');


    }

    public function editaVenta($id)
    {
        $this->valor = $id;
    }

    public function nombre($g)
    {
        switch ($g)
        {
        case 'clie':
            $this->alert('warning', 'Faltan datos de cliente',[
                'toast'=>false,
                'position'=>'center'
            ]);
            break;
        case 'prod':
            $this->alert('warning', 'Debe seleccionar productos',[
                'toast'=>false,
                'position'=>'center'
            ]);
            break;
        case 'cant':
            $this->alert('warning', 'La cantidad de productos debe ser mayor a cero',[
                'toast'=>false,
                'position'=>'center'
            ]);
            break;


        default:
            # code...
            break;
    }


    }


}
