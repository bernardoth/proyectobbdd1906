<div>
    <h1 class="py-4 px-10 font-bold text-xl">
        Venta
    </h1>
    <div class="container mx-auto mt-3 text-left bg-gray-300 grid grid-rows-4 ">
        <div class="grid gap-2 grid-cols-2 h-24">
            <div  x-init="{ idcliente: @entangle('seelctedId') }" class="px-3 py-3 font-semibold">
                    <h1 class="text-lg">Datos Cliente </h1>
            @if ($selectedId>0)

                    <p class=" px-4">Nombre:  {{''.'  '.$cliente->nombres.' '.$cliente->apellidos}}</p>
                    <p class=" px-4">CI/NIT:  {{$cliente->ci}}</p>

            @endif
            </div>

                <div x-data="inicio()"  class=" py-2 px-5 items-end  relative">


                    <input class ="mt-0" type="text" id="entrada" value="que" wire:model="selectedId"> palabras </input>

                    <button wire:click="abrirModal('clie')" class="absolute bottom-3 left-0 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-6 ">
                    Agregar Cliente
                </button>
                <div >
                    @if ($modClie)
                        @include('livewire.venta.auxclie',['busquedaClie'=>$busquedaClie])
                    @endif

                </div>


                </div>




            </div>
            <div class="container mx-auto mt-3 text-left bg-gray-400">


            <div class="grid gap-2 grid-cols-5">

            <div  class=" py-2 px-2">
                <label class="block" for="cant">Producto</label>
                <input
                        class="w-full h-3/5 border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
                        placeholder="Escriba lo que busca" type="text"  >
            </div>
                <div  class="  py-2 px-2">
                    <label class="block" for="cant">Cantidad</label>
                    <input
                        class="w-full h-3/5 border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
                        placeholder="Escriba lo que busca" type="number"  >
                </div>
                <div  class=" py-2 px-2">
                    <label class="block" for="pre">Precio</label>

                    <input readonly
                        class="w-full h-3/5 border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
                        placeholder="precio" type="number" step="any"  >
                </div>
                <div  class=" py-2 px-2">
                    <label class="block" for="pre">Sub Total</label>

                    <input readonly
                        class="w-full h-3/5 border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
                        placeholder="subtotal" type="text" value="sub" >
                </div>
                <div  class=" py-2 px-2 items-end inline relative">
                    <div>
                        <button wire:click="abrirModal('prod')"
                    class="absolute bottom-3 left-0 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-6 ">
                        Buscar
                    </button>
                    @if ($modProd)
                    @include('livewire.venta.modprod')
                    @endif
                    </div>
                    <div>
                        <button wire:click="addProducto()"
                    class="absolute bottom-3 right-6 bg-green-500 hover:bg-blue-700 text-white font-bold py-2 px-6 ">
                        Agregar
                    </button>
                    </div>


                </div>


            </div>

        </div><div class="grid grid-cols-1 py-2 px-4 bg-gray-200">
                <label  class="py-2" for="titulo">Productos Seleccionados</label>
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
                    <tbody >

                            <tr>
                            <td></td>
                            <td>dos</td>
                            <td>tres</td>
                            <td>cuatro</td>
                            <td>Boton quitar</td>
                        </tr>


                    </tbody>
                </table>

            </div>
    </div>
    <div>
<div id="tick"  >valor livewire: <span x-text="nombre"></span></div>



</div>

@section('script')
    <script src="{{url('/js/acciones.js')}}">

    </script>
@endsection






