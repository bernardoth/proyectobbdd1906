<div x-data="inicio()" x-init="start()">
    <div class="container  mx-auto my-auto">

        <div  class=" grid grid-cols-8 grid-rows-7 py-2 gap-2 text-left mt-3">
            <div class="col-span-8 text-white bg-slate-600 py-2 px-2">
                Listado de Ventas
            </div>
            <div class="py-2 col-span-2 px-2 bg-slate-600 ">

                <input wire:model="search" type="text" placeholder="Busqueda">
                <label class="ml-3 text-gray-300" for="">Busqueda</label>

            </div>
            <div class="py-2 col-span-2 px-2 bg-slate-600 ">
                <input wire:model="fecha" type="date" name="fecha" id="fecha">
                <label class="ml-3 text-gray-300" for="">Fecha</label>
            </div>
            <div class="col-span-2">
                    <button wire:click="nueva()"
                    class="bg-green-500 hover:bg-green-300 px-2 py-2 my-3 font-bold text-white display:flex align-items: center">
                    Nueva Operacion</button>

            </div>
            <div class="col-span-2 mt-3">
                <select wire:model="tipo" class="bg-green-500 text-white">Tipo
                    <option value="PROFORMA" selected>PROFORMA</option>
                    <option value="PEDIDO">NOTA DE VENTA</option>
                    <option value="CANCELADO">CANCELADO</option>
                </select>
            </div>
            <div class="bg-slate-600 col-span-8 px-2 py-2">
                <table class="bg-gray-700 py-2 text-gray-200 table-auto w-full pb-5 text-center">
                    <thead class="bg-slate-800 h-10 border-2 border-slate-400">
                        <tr>
                            <th>Numero</th>
                            <th>Estado</th>
                            <th>Nombre</th>
                            <th>Fecha</th>
                            <th>Accion</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($listaVentas as $v )
                        <tr class="border-b border-gray-500 ">
                            <td >{{$v->numeroDoc}}</td>
                            <td >{{$v->estado}}</td>
                            <td >{{$v->nombres}}</td>

                            <td>{{$v->updated_at}}</td>
                            <td class="py-3">

                                @if ($usuario->cargo=='ADMIN' )
                                <button wire:click="editar({{$v->id}})"
                                class="bg-green-500 hover:bg-green-400 px-4 py-2 display:flex align-items: center"
                                >Edit</button>

                                <button wire:click="eliminar({{$v->id}})" class="bg-purple-500 hover:bg-purple-400 px-4 py-2 display:flex align-items: center"
                                >Del</button>

                                <a href="{{URL::to('/notaventa/'.$v->id)}}"  target="_blank" class="bg-red-900 hover:bg-red-500 text-white font-bold  py-2 px-6">
                                    PDF
                                </a>
                                @else
                                    @if ($tipo=='PEDIDO')

                                        <a href="{{URL::to('/notaventa/'.$v->id)}}"  target="_blank" class="bg-red-900 hover:bg-red-500 text-white font-bold  py-2 px-6">
                                            PDF
                                        </a>
                                    @else
                                    <button wire:click="editar({{$v->id}})"
                                    class="bg-green-500 hover:bg-green-400 px-4 py-2 display:flex align-items: center"
                                    >Edit</button>
                                    <a href="{{URL::to('/notaventa/'.$v->id)}}"  target="_blank" class="bg-red-900 hover:bg-red-500 text-white font-bold  py-2 px-6">
                                        PDF
                                    </a>

                                    @endif


                                @endif






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
                envio:false,
                start:function()
                {
                    //window.location.reload();
                },

            }
        }
    </script>
@endsection
