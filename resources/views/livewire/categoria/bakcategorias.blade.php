<x-slot name="header">
    <h2 class="font-bold text-xl text-white leading-tight">
        Listado de Categorias
    </h2>
</x-slot>
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px6 lg:px-8">
        <div class="bg-slate-600 overflow-hidden shadow-xl sm:rounded-lg px-4 py-4 ">
            @if (session()->has('message'))
                <div class="bg-teal-100 rounded-b text-teal-900 px-4 py-4 shadow-md my-3" role="alert">
                    <div class="flex">
                        <div>
                            <h4>{{ session('message') }}</h4>
                        </div>
                    </div>
                </div>
            @endif

            <div class="px-4 py-4  ">
                <div class="float-left py-3 px-4">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                      </svg>
                </div>

                <input
                    class=" border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
                    placeholder="Escriba lo que busca" type="text" wire:model="search">
                <button wire:click="crear()"
                    class="float-right bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-6 my-3">
                    Nuevo</button>
                @if ($modal)
                    @include('livewire.categoria.crear')
                @endif
            </div>






            <table class="table-fixed w-full ">
                <thead>
                    <tr class="bg-gray-600 text-white">
                        <th class="px-4 py-2">id</th>
                        <th class="px-4 py-2">Codigo</th>
                        <th class="px-4 py-2">Nombre</th>
                        <th class="px-4 py-2">Acciones</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($categorias as $cat)
                        <tr>
                            <td class="border px-4 py-2">{{ $cat->id }}</td>
                            <td class="border px-4 py-2">{{ $cat->codigo }}</td>
                            <td class="border px-4 py-2">{{ $cat->nombre }}</td>

                            <td class="border px-4 py-2 ">
                                <button wire:click="editar({{ $cat->id }})"
                                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-6 ">Edit</button>
                                <button wire:click="borrar({{ $cat->id }})"
                                    class="bg-red-500  hover:bg-red-700 text-white font-bold py-2 px-6 ">Del</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
