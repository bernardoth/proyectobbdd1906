<div x-data="mifuncion()" x-init="start()"  class="bg-gray-800 h-screen mt-0 py-0">
    <div class="container mx-auto my-auto ">

            <div class=" grid grid-cols-8 grid-rows-7 py-2 gap-2 text-left mt-3">
                <div class="col-span-8 text-white bg-slate-700 px-3 py-3">
                    Datos Compra


                    <div class="col-span-3 mt-6 text-gray-300">
                        <select wire:model ="estado"class="bg-green-600 border-white" name="" id="estado">
                            <option  selected value="COMPRA">NOTA DE COMPRA</option>

                            <option value="CANCELADO">CANCELADO</option>
                        </select>
                    </div>
                    <div class="col-span-2 text-white">
                        <label for="">Numero de Documento: </label>
                        <input class="text-gray-500 bg-green-200" wire:model="numeroDoc" type="text" name="numeroDoc" id="numeroDoc" >
                    </div>

                </div>
                <div class="col-span-8 text-white bg-slate-700 px-3 py-3">
                    Datos del Proveedor
                </div>

                <div class="col-span-2 text-white  ">
                    <label class="block" for="nombreProv">Nombre: </label>
                    <input wire:model="nombreProv"
                    class="bg-gray-500 mx-auto w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
                    type="text" name="nombreProv" id="nombreProv">

                </div>
                <div class="col-span-2 text-white  ">
                    <label class="block" for="nombreClie">Apellidos: </label>
                    <input wire:model="apellidos"
                    class="bg-gray-500 mx-auto w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
                    type="text" name="apellidos" id="apellidos">

                </div>

                <div class="col-span-2 text-white">

                    <label class="block" for="cinit">CI/NIT: / </label>
                    <input wire:model="ci"
                    class="bg-gray-500 mx-auto border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
                    type="text" name="ci" id="ci">
                </div>

                <div class="col-span-2 text-white self-center">
                    <button wire:click="modal('prov')"
                        class="bg-green-500 hover:bg-green-400 px-2 py-2 mt-6 inline-flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19 7.5v3m0 0v3m0-3h3m-3 0h-3m-2.25-4.125a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zM4 19.235v-.11a6.375 6.375 0 0112.75 0v.109A12.318 12.318 0 0110.374 21c-2.331 0-4.512-.645-6.374-1.766z" />
                        </svg>
                        <div class="px-5">Proveedor</div>



                    </button>
                </div>
                    @if ($modalProv)
                        @livewire('fcompra.proveedors')
                    @endif
                    <div class="col-span-8 text-white mt-10 bg-slate-700 px-3 py-3 ">
                        Detalle de Productos Seleccionados
                    </div>

                    <input type="number" hidden name="" id="id" wire:model="idProd">
                    <div class="col-span-3 text-gray-300">
                        <label class="block "  for="prod">Producto:  </label>
                        <input wire:model="descripcion"
                        class="w-full bg-gray-500" type="text" name="prod" id="descripcion">
                    </div>
                    <div class="cols-span-1 text-gray-300">
                        <label class="block " for="cant" >Cantidad:  </label>
                        <input @click="subTotal()"
                        class="w-full bg-gray-500" type="number"  min=1 max=9999999 name="cant" id="cantidad">
                    </div>
                    <div class="cols-span-1 text-gray-300">
                        <label class="block " for="preciocompra">Precio:  </label>
                        <input wire:model="preciocompra"
                        class="w-full bg-gray-500" type="number" readonly name="preciocompra" id="preciocompra">
                    </div>
                    <div class="cols-span-1 text-gray-300">
                        <label class="block " for="precio">Sub Total:  </label>
                        <input class="w-full bg-gray-500" type="number" readonly name="subtotal" id="subtotal">
                    </div>
                    <div class="h-12 text-white">
                        <button wire:click="modal('prod')"
                        class="bg-green-500 hover:bg-green-400 mx-10 px-5 py-2 mt-5 inline-flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                </svg> Productos

                        </button>
                        @if ($modalProd)
                            @livewire('fcompra.productos')
                        @endif
                    </div>
                    <div>
                        <button @click="agregar()"
                            class="bg-green-500 hover:bg-green-400 mx-10 px-5 py-2 mt-5 display:flex align-items: center">
                            Agregar
                        </button>
                    </div>





                <div class="col-span-8 text-white px-2 py-2 bg-gray-700">
                    Productos Seleccionados
                    <table class="bg-gray-700 py-2 text-gray-200 table-auto w-full pb-5 text-center">
                        <thead class="bg-slate-800 h-10 border-2 border-slate-400">
                            <tr>
                                <th>Item</th>
                                <th>Descripcion</th>
                                <th>Cantidad</th>
                                <th>Precio</th>
                                <th>SubTotal</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <template x-if="numero>0">

                            <template x-for="row in prod">
                            <tr class="border-b border-gray-500 ">

                                <td x-text="row.item"></td>
                                <td x-text="row.descripcion"></td>
                                <td x-text="row.cantidad"></td>
                                <td x-text="row.preciocompra"></td>
                                <td x-text="row.subtotal"></td>
                                <td>
                                <button  class="bg-red-500 hover:bg-green-400 px-2 py-2  display:flex align-items: center">
                                    Quitar
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
                    <div>
                        <button @click="validacion()"
                        class="bg-green-500 hover:bg-green-400 col-start-8 col-end-8 px-3 py-2  pt-3 w-15 display: flex align-items: center">
                            Guardar
                        </button>
                    </div>


            </div>


    </div>
</div>

@section('script')
<script>
    function mifuncion() {
        return{
            proceso:@entangle('actualizar'),
            prod:[],
            numero:@entangle('dim'),
            suma:0,
            cliente:[],
            nuevo:@entangle('arreglo'),

            start:function () {
                if (this.proceso>0)
                {
                console.log(this.numero);
                console.log(this.nuevo);
                this.prod = this.nuevo;
                this.mostrar();
                console.log(this.prod);
                }
            },
            subTotal:function(){
                let precio = document.querySelector('#preciocompra').value;
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
            limpiar:function(){
                document.querySelector('#descripcion').value = '';
                document.querySelector('#cantidad').value = '';
                document.querySelector('#preciocompra').value = '';
                document.querySelector('#subtotal').value = '';
            },
            agregar:function(){

                let lista = {};

                lista.id = document.querySelector('#id').value,
                lista.descripcion = document.querySelector('#descripcion').value;
                lista.cantidad = document.querySelector('#cantidad').value;
                lista.preciocompra = document.querySelector('#preciocompra').value;
                lista.subtotal = document.querySelector('#subtotal').value;
                this.prod.push(lista);

                this.limpiar();
                this.mostrar();

                console.log(this.prod);


                },
                mostrar:function(){
            this.numero = this.prod.length;
            let cont = 1;
            this.prod.forEach(element => { element.item= cont;
                cont++;

            });
            this.total();
            this.limpiar();


        },
        total:function(){
            this.suma = 0;
            this.prod.forEach(element => {
                this.suma = this.suma + Number.parseFloat(element.subtotal);
            });
        },
        nuevoguardar:function () {
            let nombre='';
            let cinit='';
            let estado='';
            let ape='';
            nombre = document.querySelector('#nomclie').value;
            cinit = document.querySelector('#cinit').value;
            estado = document.querySelector('#estado').value;
            ape = document.querySelector('#apellidos').value;
            console.log(nombre);
            console.log(cinit);
            this.cliente.push(nombre);
            console.log(this.cliente);
            console.log(estado);
        },
        convertir:function(){


            this.nuevo = JSON.stringify(this.prod);
            //console.log(this.prod);
            //console.log(this.nuevo);

        },
        validacion:function()
        {
            var que = document.querySelector('#nombreProv').value;
            var doc = document.querySelector('#numeroDoc').value;
                    console.log(que.length);
                    if (que.length==0 ) {
                        alert('Debe llenar el nombre');


                    }
                    if (doc.length==0 ) {
                        alert('Debe llenar el Numero de documento');


                    }
                    if(this.prod.length==0){
                        alert('Debe seleccionar productos');
                    }
                    else
                    {
                        this.datos();
                        console.log(this.prod);
                    }

        },
        datos:function(){
            //this.convertir();
            this.nuevo = JSON.stringify(this.prod);
            console.log(this.nuevo);
            Livewire.emit('guardarCompra');
            window.location.href="http://proyectobbdd1906.me/compra/compras";


        }


        }//llave return
    }
</script>

@endsection
