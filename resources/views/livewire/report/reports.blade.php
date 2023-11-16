<div class="px-4  bg-gray-800 ">

    <div class="text-white mt-3 w-full mx-auto">
        <div class="text-lg py-2 ">
            Filtros
        </div>
        <div class="flex py-2">
            <article class="bg-slate-600 float-lef w-1/5 px-2 py-5 ">
                <div>
                    <label for="tipo">Entrada/Salida</label>
                    <select class="bg-gray-800" name="opcion" id="tipo">
                        <option value="0"></option>
                        <option value="1">Entrada</option>
                        <option value="2">Salida</option>
                    </select>
                </div>
                <div class="inline-block">
                <label class="block my-1" for="feacha1">Fecha inicio</label>
                    <input class ="bg-gray-800 text-white " type="date" name="fecha1" id="feacha1">

                </div>
                <div class="inline-block">
                    <label class="block my-1" for="feacha2">Fecha final</label>
                    <input class ="bg-gray-800 text-white " type="date" name="feacha2" id="feacha2">
                </div>
                <div>
                    <label  class="block  my-1" for="prod">Producto</label>
                    <select class="bg-gray-800" name="opcion" id="prod">
                        <option value="0"></option>
                        <option value="1">Entrada</option>
                        <option value="2">Salida</option>
                    </select>
                </div>
                <div>
                    <label class="block my-1 " for="persona">Nombre Empleado</label>
                    <select class="bg-gray-800" name="opcion" id="persona">
                        <option value="0">Todos</option>
                        <option value="1">Entrada</option>
                        <option value="2">Salida</option>
                    </select>
                </div>
                <div>
                        <button
                            class="bg-violet-500 hover:bg-violet-400 mx-1 w-16 px-3 py-2 mt-5 display:flex align-items: center">
                            Ver
                        </button>
                        <button
                            class="bg-green-500 hover:bg-green-400 mx-1 px-3 py-2 mt-5 display:flex align-items: center">
                            Excel
                        </button>
                        <button
                            class="bg-red-700 hover:bg-red-400 mx-1 px-3 py-2 mt-5 display:flex align-items: center">
                            PDF
                        </button>
                    </div>
            </article>
            <aside class="bg-red-700 float-right w-4/5 px-2 ml-3">
                tablas de datos
            </aside>
        </div>


    </div>

</div>
