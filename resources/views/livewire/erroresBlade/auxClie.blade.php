<div class="fixed  inset-0 z-50 overflow-y-auto">
    <div class="flex  items-end justify-center min-h-screen px-4 text-center md:items-center sm:block sm:p-0">


        <div class="inline-block align-bottom  rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle " role="dialog" aria-modal="true" aria-labelledby="modal-headline">
            <div class="py-5 bg-zinc-300 shadow-md shadow-indigo-800/50    px-5">
                <div id ="cabeza" class="text-bold font-lg py-2">Lista de Clientes</div>
                <input type="text" class="py-2 mb-2" wire:model="busquedaClie">
                <table  class=" table-auto w-80 text-center">
                    <thead class="bg-gray-700 text-white px-3  ">
                        <tr>
                            <th>id</th>
                            <th>Nombres</th>
                            <th>Apellidos</th>
                            <th>CI/NIT</th>
                            <th>Accion</th>
                        </tr>

                    </thead>
                    <tbody id="lista" >
                        @foreach ($listaClientes as $clie)
                        <tr>
                            <td class="px-5">{{$clie->id}}</td>
                            <td class="px-5">{{$clie->nombres}}</td>
                            <td class="px-5">{{$clie->apellidos}}</td>
                            <td class="px-5">{{$clie->ci}}</td>
                            <td class="px-5">
                                <button wire:click="addCliente({{$clie->id}})"   id="boton" class="bg-green-500  hover:bg-green-700 text-white font-bold py-2 px-6 ">
                                    Seleccionar
                                </button>
                            </td>
                        </tr>
                        @endforeach


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
