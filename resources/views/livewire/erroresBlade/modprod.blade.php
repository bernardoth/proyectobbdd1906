<div class="fixed z-10 inset-0 overflow-y-auto ease-out duration-400">
    <div class="flex   min-h-screen pt-4 px-4 pb-20 text-center ">


            <div class="inline-block align-bottom  rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle " role="dialog" aria-modal="true" aria-labelledby="modal-headline">
                <form>
                    <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                        <div class="mb-4">
                            <h1 class="font-bold">Listado</h1>
                        </div>
                        <input
                    class=" border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
                    placeholder="Escriba lo que busca" type="text" wire:model="busquedaProd">
                        <table class="table-auto">
                            <thead>
                                <tr class="bg-gray-600 text-white">
                                    <th class="px-4 py-2">id</th>

                                    <th class="px-4 py-2">Descripcion</th>
                                    <th class="px-4 py-2">Precio</th>
                                    <th class="px-4 py-2">Stock</th>
                                    <th class="px-4 py-2">Accion</th>



                                </tr>
                            </thead>
                            <tbody>
                            @foreach ($productos as $pro)
                            <tr>
                                <td class="border px-4 py-2">{{ $pro->id }}</td>

                                <td class="border px-4 py-2">{{ $pro->descripcion}}</td>
                                <td class="border px-4 py-2">{{ $pro->precio}}</td>
                                <td class="border px-4 py-2">{{ $pro->stock}}</td>

                                <td>
                                <button wire:click.ignore="addProducto({{ $pro->id }})"
                                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-6 ">Seleccionar</button>
                                </td>


                            </tr>
                                @endforeach

                            </tbody>
                        </table>
                        </div>
                        <div class="bg-gray-500 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">


                            <span class="flex w-full rounded-md shadow-sm sm:ml-3 sm:w-auto">
                                <button wire:click="cerrarModal()" type="button" class="inline-flex justify-center w-full rounded-md border border-gray-300 px-4 py-2 bg-gray-200 text-base leading-6 font-medium text-gray-700 shadow-sm hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue transition ease-in-out duration-150 sm:text-sm sm:leading-5">Cancelar</button>
                            </span>
                        </div>

                    </div>

                </form>

            </div>


    </div>
</div>
