<div class="container  mx-auto my-auto">
    <div  class="grid grid-cols-8 grid-rows-7 py-2 gap-2 text-left mt-3">
        <div class="col-span-8 text-white bg-slate-600 py-2 px-2">
                    Listado de Proveedores
        </div>


        <div class="py-2 col-span-7 px-2 bg-slate-600 ">

            <input wire:model="search" type="text">

        </div>





        <div>
            <button wire:click="crear()"
                                class="float-right bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-6 my-3">
                                Nuevo</button>
                            @if ($modal)
                                @include('livewire.proveedor.crear')
                            @endif
        </div>

        <div class="bg-slate-600 col-span-8 px-2 py-2">
                    <table class="bg-gray-700 py-2 text-gray-200 table-auto w-full pb-5 text-center">
                        <thead class="bg-slate-800 h-10 border-2 border-slate-400">
                            <tr >
                                <th class="px-4 py-2">id</th>

                                <th class="px-4 py-2">Nombre</th>
                                <th class="px-4 py-2">Apellidos</th>
                                <th class="px-4 py-2">CI Nit</th>

                                <th class="px-4 py-2">Fecha Actualizacion</th>
                                <th class="px-4 py-2">Acciones</th>

                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($listaProv as $p)
                            <tr>
                                <td class="border px-4 py-2">{{ $p->id }}</td>

                                <td class="border px-4 py-2">{{ $p->nombres }}</td>
                                <td class="border px-4 py-2">{{ $p->apellidos}}</td>
                                <td class="border px-4 py-2">{{ $p->cinit}}</td>

                                <td class="border px-4 py-2">{{ $p->updated_at}}</td>

                                <td class="border px-4 py-2 ">
                                    <button wire:click="editar({{ $p->id }})"
                                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-6 ">Edit</button>
                                    <button wire:click="borrar({{ $p->id }})"
                                        class="bg-red-500  hover:bg-red-700 text-white font-bold py-2 px-6 ">Del</button>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
        </div>











    </div>
</div>
