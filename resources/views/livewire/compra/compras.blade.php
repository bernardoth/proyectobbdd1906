<div x-data="inicio()">
    <div class="container  mx-auto my-auto">

        <div  class=" grid grid-cols-8 grid-rows-7 py-2 gap-2 text-left mt-3">
            <div class="col-span-8 text-white bg-slate-600 py-2 px-2">
                Listado de Compras
            </div>
            <div class="py-2 col-span-3 px-2 bg-slate-600 ">

                <input wire:model="search" type="text">

            </div>
            <div class="py-2 col-span-3 px-2 bg-slate-600 ">
                <input wire:model="fecha" type="date" name="fecha" id="fecha">
            </div>
            <div >
                    <button wire:click="nueva()"
                    class="bg-green-500 hover:bg-green-300 text-white font-bold px-2 py-2 display:flex align-items: center">
                    Nueva Compra</button>


            </div>
            <div class="bg-slate-600 col-span-8 px-2 py-2">
                <table class="bg-gray-700 py-2 text-gray-200 table-auto w-full pb-5 text-center
                dark:bg-white dark:text-gray-900">
                    <thead class="bg-slate-800 h-10 border-2 border-slate-400
                    text-white">
                        <tr>
                            <th>Cod</th>
                            <th>Numero Doc</th>
                            <th>Estado</th>
                            <th>Nombre</th>
                            <th>Fecha</th>
                            <th>Accion</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($listaCompras as $v )
                        <tr class="border-b border-gray-500 ">
                            <td>{{$v->id}}</td>
                            <td>{{$v->numeroDoc}}</td>
                            <td>{{$v->estado}}</td>
                            <td>{{$v->nombres . ' '. $v->apellidos}}</td>
                            <td>{{$v->updated_at}}</td>
                            <td>
                                <button wire:click="editar({{$v->id}})"
                                class="bg-green-500 hover:bg-green-400 px-4 py-2 display:flex align-items: center"
                                >Edit</button>

                                <button wire:click="eliminar({{$v->id}})" class="bg-purple-500 hover:bg-purple-400 px-4 py-2 display:flex align-items: center"
                                >Del</button>
                            </td>
                        </tr>
                        @endforeach


                    </tbody>
                </table>
            </div>

        </div>



    </div>

</div>
@section('script')
    <script>
        function inicio(){
            return{
                envio:false

            }
        }
    </script>
@endsection
