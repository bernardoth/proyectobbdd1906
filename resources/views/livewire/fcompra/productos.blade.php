<div class="fixed  inset-0 z-50 overflow-y-auto">
    <div class="flex  items-end justify-center min-h-screen px-4 text-center md:items-center sm:block sm:p-0">


        <div class="inline-block align-bottom w-2/3 rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle " role="dialog" aria-modal="true" aria-labelledby="modal-headline">
            <div class="py-5 bg-slate-600 shadow-md shadow-indigo-800/50   px-5">
                <div id ="cabeza" class="text-bold w-full font-lg py-2">Lista de Productos</div>
                <input type="text" class="py-2 mb-2 bg-gray-700 text-white" wire:model="busqueda">
                <button wire:click="cerrarModal()" class="bg-blue-500 absolute top-3  right-6 hover:bg-blue-700 text-white font-bold py-2 px-6 ">
                    Cerrar
                </button>
                <table  class=" table-fixed w-full text-center">
                    <thead class="bg-gray-700 text-white px-3  ">
                        <tr>
                            <th>Codigo</th>
                            <th>Descripcion</th>
                            <th>Precio</th>
                            <th>Stock</th>
                            <th>Accion</th>

                        </tr>

                    </thead>
                    <tbody id="lista" >
                        @if ($busqueda!='')
                        @foreach ($productos as $prod)
                        <tr>
                            <td class="px-5">{{$prod->codigo}}</td>
                            <td class="px-5">{{$prod->descripcion}}</td>
                            <td class="px-5">{{$prod->preciocompra}}</td>
                            @if ($prod->stock < $prod->cant_min)
                                <td class=" px-5 bg-yellow-600 text-gray-800">
                                    {{ $prod->stock}}</td>
                            @else
                                <td class="px-5">{{ $prod->stock}}</td>
                            @endif

                            <td class="px-5">
                                <button wire:click="seleccionP({{$prod->id}})"   id="boton" class="bg-green-500  hover:bg-green-700 text-white font-bold py-2 px-6 ">
                                    Seleccionar
                                </button>
                            </td>
                        </tr>
                        @endforeach
                        @endif



                    </tbody>
                </table>
                <div class=" py-3 mt-5">
                    <button wire:click="cerrarModal()" class="bg-blue-500 absolute bottom-3  right-6 hover:bg-blue-700 text-white font-bold py-2 px-6 ">
                    Cerrar
                </button>
                </div>


            </div>
        </div>

    </div>
</div>
