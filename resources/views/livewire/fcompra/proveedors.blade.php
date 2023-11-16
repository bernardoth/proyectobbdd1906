
<div class="fixed  inset-0 z-50 overflow-y-auto">
    <div class="flex  items-end justify-center min-h-screen px-4 text-center md:items-center sm:block sm:p-0">


        <div class="inline-block align-bottom  rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle " role="dialog" aria-modal="true" aria-labelledby="modal-headline">
            <div class="py-5 bg-slate-600 shadow-md shadow-indigo-800/50 px-5">
                <div id ="cabeza" class="text-white text-bold font-lg py-2">Lista de Proveedores</div>
                <input type="text" class="py-2 mb-2 bg-gray-700 text-white" wire:model="search">
                <table  class=" table-auto w-80 text-center">
                    <thead class="bg-gray-700 text-white px-3  ">
                        <tr>
                            <th>id</th>
                            <th>Nombres</th>
                            <th>Apellidos</th>
                            <th>CI/NIT</th>
                            <th>Celular</th>
                            <th>Accion</th>
                        </tr>

                    </thead>
                    <tbody id="lista" >
                        @foreach ($proveedores as $prov)
                        <tr>
                            <td class="text-white px-5">{{$prov->id}}</td>
                            <td class="text-white px-5">{{$prov->nombres}}</td>
                            <td class="text-white px-5">{{$prov->apellidos}}</td>
                            <td class="text-white px-5">{{$prov->ci}}</td>
                            <td class="text-white px-5">{{$prov->celular}}</td>
                            <td class="text-whitepx-5">
                                <button wire:click="seleccion({{$prov->id}})"   id="boton" class="bg-green-500  hover:bg-green-700 text-white  py-2 px-6 ">
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
