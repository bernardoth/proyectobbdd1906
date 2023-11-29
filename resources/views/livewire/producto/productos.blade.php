<div class="container  mx-auto my-auto">
    <div class="grid grid-cols-8 grid-rows-7 py-2 gap-2 text-left mt-3">
        <div class="col-span-8 text-white bg-slate-600 py-2 px-2">
            Listado de Productos
        </div>

        <div class="py-2 col-span-2 px-2 bg-slate-600 ">

            <input wire:model="search" type="text" placeholder="Descri/codigo">

        </div>
        <div class="py-2 col-span-2 px-2 bg-slate-600" >
            <select wire:model="cate" name="" id="">
                <option selected value="">Categoria</option>
            @foreach ($cat as $c)
                <option value="{{$c->id}}">{{$c->nombre}}</option>

            @endforeach
            </select>
        </div>
        <div>
            <button wire:click="crear()"
                                class="float-right bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-6 my-3">
                                Nuevo</button>
                            @if ($modal)
                                @include('livewire.producto.crear')
                            @endif
        </div>

        <div class="bg-slate-600 col-span-8 px-2 py-2">
            <table class="bg-gray-700 py-2 text-gray-200 table-auto w-full pb-5 text-center
            dark:bg-white dark:text-gray-900">
                <thead class="bg-slate-800 h-10 border-2 border-slate-400
                dark:text-white">
                        <tr >
                            <th class="px-4 py-2">id</th>
                            <th class="px-4 py-2">Codigo</th>
                            <th class="px-4 py-2">Descripcion</th>
                            <th class="px-4 py-2">Precio</th>
                            <th class="px-4 py-2">Stock</th>
                            <th class="px-4 py-2">Estado</th>
                            <th class="px-4 py-2">Categoria</th>
                            <th class="px-4 py-2">Acciones</th>

                        </tr>
                </thead>
                <tbody>
                    @foreach ($productos as $prod)
                        <tr >
                            <td class="border px-4 py-2">{{ $prod->ids }}</td>
                            <td class="border px-4 py-2">{{ $prod->codigo }}</td>
                            <td class="border px-4 py-2">{{ $prod->descripcion}}</td>
                            <td class="border px-4 py-2">{{ $prod->precioventa}}</td>
                            @if ($prod->s < $prod->cant_min and $prod->s!=0)
                                <td class="border px-4 py-2 bg-yellow-600 text-gray-800">
                                    {{ $prod->s}}</td>
                            @else
                            @if ($prod->s==0)
                            <td class="border px-4 py-2 bg-red-500 text-gray-300">{{ $prod->s}}</td>
                            @else

                                <td class="border px-4 py-2">{{ $prod->s}}</td>
                            @endif
                            @endif
                            <td class="border px-4 py-2">{{ $prod->estado}}</td>


                            <td class="border px-4 py-2">{{ $prod->cat}}</td>


                            <td class="border px-4 py-2 ">
                                <button wire:click="editar({{ $prod->id }},{{$c->id}})"
                                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-6 ">Edit</button>
                                <button wire:click="borrar({{ $prod->id }})"
                                    class="bg-red-500  hover:bg-red-700 text-white font-bold py-2 px-6 ">Del</button>
                            </td>
                        </tr>
                    @endforeach

                </tbody>

            </table>
            <div class="py-4  text-gray-100">
                {{$productos->links()}}
            </div>
        </div>
    </div>
</div>

<script>
    Swal.fire({
  title: 'Error!',
  text: 'Do you want to continue',
  icon: 'error',
  confirmButtonText: 'Cool'
})




</script>




