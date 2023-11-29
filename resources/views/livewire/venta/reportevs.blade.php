<div x-data="inicio()" x-init=" start() " >
    <div class="container  mx-auto my-auto">

        <div  class=" grid grid-cols-8 grid-rows-7 py-2 gap-2 text-left mt-3">
            <div class="col-span-8 text-white bg-slate-600 py-2 px-2">
                Reporte de Ventas
            </div>
            <!-- cuadro de busqueda bloqueado
            <div class="py-2 col-span-2 px-2 bg-slate-600 ">

                <input wire:model="search" type="text">

            </div>
            -->
            <div class="py-2 col-span-2 px-2 bg-slate-600 ">
                <label class="text-gray-200" for="fechainicio">Fecha de inicio</label>

                <input wire:model="fechainicio" class="block" type="date" name="fechainicio" id="fechainicio">
            </div>
            <div class="py-2 col-span-2 px-2 bg-slate-600 ">

                <label class="text-gray-200" for="fechafin">Fecha final</label>

                <input wire:model="fechafin" class="block" type="date" name="fechafin" id="fechafin">
            </div>

            <div class="mt-5" >
                    <!--<button wire:click="nueva()"
                    class="bg-red-500 w-64 hover:bg-red-300 px-10 py-2 my-3 font-bold text-white display:flex align-items: center">
                    PDF</button>-->
                    <a href="{{URL::to('/reportesventas/'.$fechainicio.'/'.$fechafin)}}"  target="_blank"  class="bg-red-500 w-64 hover:bg-red-300  px-10 py-2 my-3 font-bold text-white display:flex align-items: center" >
                                    PDF
                    </a>


            </div>
            <div class="bg-slate-600 col-span-8 px-2 py-2">
                <table class="bg-gray-700 py-2 text-gray-200 table-auto w-full pb-5 text-center
                dark:bg-white dark:text-gray-900">
                    <thead class="bg-slate-800 h-10 border-2 border-slate-400
                    dark:text-white">
                        <tr>
                            <th>Cod</th>
                            <th>Estado</th>
                            <th>Nombre</th>
                            <th>Fecha</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($listaVentas as $v )
                        <tr class="border-b border-gray-500 ">
                            <td>{{$v->id}}</td>
                            <td>{{$v->estado}}</td>
                            <td>{{$v->nombres}}</td>

                            <td >{{$v->updated_at}}</td>
                            <td >
                                    {{$v->total}}



                            </td>
                        </tr>
                        @endforeach


                    </tbody>
                </table>

            </div>
            <div class="col-start-7 col-end-7 flex justify-end">
                    <label class="py-6 font-bold text-gray-700" for="">Total Ventas</label>

            </div>
            <div class="text-lg font-bold col-start-8 col-end-8 flex  justify-center px-3 py-3" >

                <input class="text-lg font-bold w-full  px-3 py-3 text-gray-700 bg-green-200" type="text" wire:model="b">

            </div>



        </div>



    </div>

</div>

@section('script')
    <script>
        function inicio()
        {
            return{

                vec:@entangle('vectorVentas'),
                suma:0,
                start:function()
                {
                    console.log('saludo');
                    console.log(this.vec);
                    //this.total();
                    console.log(this.suma);
                    this.vec.forEach((element,item,arr)=>
                    {
                        this.suma = this.suma + Number.parseFloat(element.total);
                    });
                    console.log(this.suma);
                    this.suma=this.suma.toFixed(2);



                },
                total:function(){
                this.suma = 0;
                this.vec.forEach((element,item,arr) => {
                console.log(element.total);
                });
                },
            //linea eliminada


            }
        }


    </script>
@endsection

