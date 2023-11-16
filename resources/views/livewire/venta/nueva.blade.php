<div x-data="inicio()" class="bg-gray-800 h-screen mt-0 py-0">
    <div class="container  mx-auto my-auto">
        <div class=" grid grid-cols-8 grid-rows-7 py-2 gap-2 text-left mt-3">
            <div class="bg-slate-600 text-gray-300 col-span-8 ">Datos Ventasss
                <div>{{$idUser}}</div>
            </div>

            <div class=" bg-gray-700 text-gray-300 col-span-7  row-span-2 font-bold px-3 py-3 ">
                <div class="text-lg">Datos Cliente</div>
                @if ($selecClie>0)
                <p class=" px-4">Nombre: {{''.' '.$cliente->nombres.' '.$cliente->apellidos}}</p>
                <p class=" px-4">CI/NIT: {{$cliente->ci}}</p>

                @endif


            </div>
            <div class="col-span-1 self-center text-white">


                <button wire:click="abrirModal('clie')"
                class="bg-green-500 hover:bg-green-400 px-2 py-2 display:flex align-items: center">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19 7.5v3m0 0v3m0-3h3m-3 0h-3m-2.25-4.125a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zM4 19.235v-.11a6.375 6.375 0 0112.75 0v.109A12.318 12.318 0 0110.374 21c-2.331 0-4.512-.645-6.374-1.766z" />
                </svg>
                <div class="px-2">
                    Cliente
                </div>
            </button>
            @if ($modalClie)

            @livewire('venta.clientes')
            @endif
            </div>

            <div class="text-gray-300 py-2 px-5 col-span-8">
                Detalle del Producto Selecciondo
            </div>
            <input type="number" hidden id="id" wire:model="idProd">
                <div class="col-span-3">
                <label class="block text-gray-200" for="cant">Producto</label>
                <input wire:model="descripcion"
                type="text" placeholder="Descriocion" id="descripcion"
                class=" w-full px-5 hover:bg-amber-200 mx-auto border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">

                </div>
                <div>
                    <label class="text-gray-200">Cantidad </label>
                <input @click="cambio()" type="number" placeholder="Cantidad" id="cantidad"
                class="w-full mx-auto border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">

                </div>
                <div>
                    <label class="text-gray-200">Precio</label>
                    <input wire:model="precio" id="precio"
                    readonly type="number" step="any" placeholder="Precio"
                    class="w-full  mx-auto border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">

                </div>
                <div>
                    <label class="text-gray-200">Sub Total</label>
                    <input
                    readonly type="number" step="any" id="subtotal"
                    class="w-full  mx-auto border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">

                </div>



            <div class="h-12 mx-0.5 mt-5  text-white" >
                <button wire:click="abrirModal('prod')"
                class="bg-blue-500 hover:bg-blue-400 px-3 py-2  pt-3 w-15 display: flex align-items: center  ">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                </svg>
                    Producto
                </button>
                @if ($modalProd)
                    @livewire('venta.productos')
                @endif
                </div>
                <div class="h-12 mx-0.5  mt-5 text-white">
                <button x-on:click="agregar()"
                class="bg-green-500 hover:bg-green-400 px-3 py-2  pt-3 w-15 display: flex align-items: center">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                    Agregar
                </button>

            </div>
            <div class="py-2 px-5 text-gray-300 col-span-8 mx-1">
                Lista de Prodcutos Selecionados
            </div>
            <div class=" col-span-8 ">
                <table class="bg-gray-700 py-2 text-gray-200 table-auto w-full pb-5 text-center">
                    <thead class="bg-slate-800 h-10 border-2 border-slate-400">
                        <th>Item</th>
                        <th>Descripcion</th>
                        <th>Cantidad</th>
                        <th>Precio</th>
                        <th>SubTotal</th>
                        <th>Accion</th>
                    </thead>
                    <tbody id="tabla" >
                    <template x-if="numero>0">
                            <template x-for="row in prod" >
                                    <tr class="border-b border-gray-500 ">

                                        <td x-text="row.item"></td>
                                        <td class="w-96" x-text="row.descripcion"></td>

                                        <td x-text="row.cantidad"></td>
                                        <td x-text="row.precio"></td>
                                        <td x-text="row.subtotal"></td>
                                        <td>
                                            <button @click="eliminar(row.item)"
                                            class="text-red-500 hover:text-red-300">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                            </svg>


                                            </button>
                                        </td>
                                    </tr>

                                </template>
                        </template>


                    </tbody>
                </table>

            </div>
            <div class="bg-green-200 col-start-6 col-end-7 font-bold px-5 flex justify-end ">
                    Total:
                </div>
                <div  x-text="suma" class="bg-green-200 col-start-7 col-end-8 px-3">

                </div>
                <div class=" col-start-8 col-span-2  font-bold px-5 flex justify-end ">
                    <button @click="datos()"
                    class="bg-green-500 hover:bg-green-400 px-3 py-2  pt-3 w-15 display: flex align-items: center" >
                        Guardar
                    </button>
                </div>

        </div>
    </div>
</div>
@section('script')
<script >
/*
src="{{url('/js/personal.js')}}"*/

function inicio(){
    return{
        nombre:'Bernardo',
        idcliente:'',
        numero:0,
        prod:[],
        suma:0,
        nuevo:@entangle('arreglo'),
        uno:function(){

            this.nombre = "copito";
            console.log(this.nombre);


        },
        cambio:function(){
            //let valor = document.getElementById('cantidad').value;
            let precio = document.querySelector('#precio').value;
            let cantidad = document.querySelector('#cantidad');
            let subtotal = document.querySelector('#subtotal');

            cantidad.addEventListener('input', actualizar);
            function actualizar(e){
                cantidad.value = e.target.value;
                let valor = cantidad.value * precio;
                subtotal.value = valor;
                //console.log('cambio change: '+valor);

            }


        },
        agregar:function(){

            let lista = {};

            lista.id = document.querySelector('#id').value,
            lista.descripcion = document.querySelector('#descripcion').value;
            lista.cantidad = document.querySelector('#cantidad').value;
            lista.precio = document.querySelector('#precio').value;
            lista.subtotal = document.querySelector('#subtotal').value;
            this.prod.push(lista);

            this.limpiar();
            this.mostrar();

            //console.log(this.prod[0]);


        },
        limpiar:function(){
            document.querySelector('#descripcion').value = '';
            document.querySelector('#cantidad').value = '';
            document.querySelector('#precio').value = '';
            document.querySelector('#subtotal').value = '';
        },
        mostrar:function(){
            this.numero = this.prod.length;
            let cont = 1;
            this.prod.forEach(element => { element.item= cont;
                cont++;

            });
            this.total();


        },
        alternativa:function(){
            let fila = document.querySelector('#tabla');

        },
        total:function(){
            this.suma = 0;
            this.prod.forEach(element => {
                this.suma = this.suma + Number.parseFloat(element.subtotal);
            });
        },
        eliminar:function(a){
            console.log(this.prod);
            console.log('item: '+ a);
            this.prod.splice(a-1,1);
            this.mostrar();

        },
        enviar:function(){
            const http = new XMLHttpRequest();
            const url = 'http://proyecto1905.me/venta/ventas';
            http.onreadystatechange = function(){
                if (this.readyState==4 && this.status==200) {
                    console.log(this.responseText);
                }
            }
            http.open("GET",url);
            http.send();
        },
        convertir:function(){
            this.nuevo = JSON.stringify(this.prod);

            console.log(this.nuevo);

        },
        datos:function(){
            this.convertir();

            Livewire.emit('guardar');
            window.location.reload();
        }


    }
}

</script>
@endsection
