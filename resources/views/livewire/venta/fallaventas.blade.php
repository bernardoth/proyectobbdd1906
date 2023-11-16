<div >
    <div x-data="inicio()">
        <h1 class="py-4 px-10 font-bold text-xl">
            Venta componente
        </h1>
        <div class="container mx-auto mt-3 text-left bg-gray-300 grid h-50 grid-rows-4 ">
            <div class="grid gap-2 grid-cols-2">
                <div class="px-3 py-3 font-semibold h-24">
                    <h1 class="text-lg">Datos Cliente </h1>
                    @if ($selecClie>0)

                    <p class=" px-4">Nombre: {{''.' '.$cliente->nombres.' '.$cliente->apellidos}}</p>
                    <p class=" px-4">CI/NIT: {{$cliente->ci}}</p>

                    @endif
                </div>

                <div class=" py-2 px-5 items-end  relative">


                    <button wire:click="abrirModal('clie')"
                        class="absolute bottom-3 left-0 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-6 ">
                        Agregar Cliente
                    </button>
                    <div>
                        @if ($modalClie)

                        @livewire('venta.clientes')
                        @endif

                    </div>


                </div>

            </div>


            <div class="container mx-auto mt-3 text-left bg-gray-400">




                <div class="grid gap-2 grid-cols-5 h-30">
                    <input type="number" hidden id="id" wire:model="idProd">
                    <div class=" py-2 px-2">
                        <label class="block" for="cant">Producto</label>
                        <input id="descripcion"
                            class="w-full h-3/5 border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
                            placeholder="Escriba lo que busca" type="text" wire:model="descripcion">
                    </div>
                    <div class="  py-2 px-2">
                        <label class="block" for="cant">Cantidad</label>
                        <input id="cantidad"
                            class="w-full h-3/5 border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
                            placeholder="Escriba lo que busca" type="number" @click="cambio()">
                    </div>
                    <div class=" py-2 px-2">
                        <label class="block" for="pre">Precio</label>

                        <input readonly id="precio"
                            class="w-full h-3/5 border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
                            placeholder="precio" id="precio" type="number" step="any" wire:model="precio">
                    </div>
                    <div class=" py-2 px-2">
                        <label class="block"  for="subtotal">Sub Total</label>

                        <input readonly id="subtotal"
                            class="w-full h-3/5 border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
                            placeholder="subtotal" type="number" step="any" >
                    </div>
                    <div class=" py-2 px-2 items-end inline relative">
                        <div>
                            <button wire:click="abrirModal('prod')"
                                class="absolute bottom-3 left-0 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-6 ">
                                Buscar
                            </button>
                            @if ($modalProd)
                            @livewire('venta.productos')
                            @endif
                        </div>
                        <div>
                            <button x-on:click="agregar()"
                                class="absolute bottom-3 right-6 bg-green-500 hover:bg-blue-700 text-white font-bold py-2 px-6 ">
                                Agregar
                            </button>
                        </div>


                    </div>


                </div>


            </div>
            <div class="grid grid-cols-1 py-2 px-4 bg-gray-200">
                <label class="py-2" for="titulo">Productos Seleccionados</label>
                <table class="table-auto py-4 text-center ">
                    <thead class="bg-gray-700 text-white ">
                        <tr>
                            <th>Item</th>
                            <th>Descripcion</th>
                            <th>Cantidad</th>
                            <th>Precio</th>
                            <th>Accion</th>
                        </tr>
                    </thead>

                    <tbody id="tabla">
                        <template x-if="numero>0">
                            <template x-for="row in prod" >
                                    <tr>
                                        <td x-text="row.id"></td>
                                        <td x-text="row.descripcion"></td>                                                                 </td>
                                        <td x-text="row.cantidad"></td>
                                        <td x-text="row.precio"></td>
                                        <td x-text="row.subtotal"></td>
                                    </tr>

                                </template>
                        </template>



                    </tbody>
                </table>

            </div>
        </div>



    </div>
    <div id="tick">valor livewire: <span x-text="nombre"></span></div>




</div>
</div>
@section('script')
<script src="{{url('/js/personal.js')}}">

</script>
@endsection
