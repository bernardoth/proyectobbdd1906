<x-app-layout>



    <div class="py-12">
        <div class ="text-orange-500 text-5xl border-4 border-orange-500 bg-gray-800 py-3 px-4
        mx-56 rounded-lg text-center mb-8">
            Sistema de Ventas Compras e Inventario</div>
        <div class="max-w-7xl mx-auto grid grid-cols-3 gap-5 sm:px-6 lg:px-8">
            <div>
                <a href="{{url('/venta/ventas')}}" class="block max-w-sm p-6 h-full bg-white border border-gray-200 rounded-lg
                shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-500">

                <h5 class="mb-2 text-2xl font-bold tracking-tight text-orange-500 ">
                    Ventas
                </h5>
                <p class="font-normal text-gray-700 dark:text-gray-400">
                    Realice ventas de manera rapida.<br>
                    Seleccione un cliente elija sus productos y listo.<br>
                    Facil y rapido.
                </p>
            </a>
            </div>
            <div>
                <a href="{{url('/compra/compras')}}" class="block max-w-sm p-6 h-full bg-white border border-gray-200 rounded-lg
                shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-500">

                <h5 class="mb-2 text-2xl font-bold tracking-tight text-orange-700 dark:text-orange-500">
                    Compras
                </h5>
                <p class="font-normal text-gray-700 dark:text-gray-400">
                    Registre las compras realizadas de forma rapida.<br>
                    Para mantener un stock variado.
                </p>
            </a>
            </div>
            <div>
                <a href="{{ url('/cliente/clientes') }}" class="block max-w-sm p-6 h-full bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-500">

                <h5 class="mb-2 text-2xl font-bold tracking-tight text-orange-700 dark:text-orange-500">
                    Clientes
                </h5>
                <p class="font-normal text-gray-700 dark:text-gray-400">
                    Administre a sus clientes.<br>Son importantes para el crecimiento del negocio.
                </p>
            </a>
            </div>
            <div>
                <a href="{{url('/proveedor/proveedors')}}" class="block max-w-sm p-6 h-full bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-500">

                <h5 class="mb-2 text-2xl font-bold tracking-tight text-orange-700 dark:text-orange-500">
                    Proveedores
                </h5>
                <p class="font-normal text-gray-700 dark:text-gray-400">
                    Administre a sus proveedores.<br>Son importantes para el crecimiento del negocio.
                </p>
            </a>
            </div>
            <div>
                <a href="{{url('/venta/reportevs')}}" class="block max-w-sm p-6 h-full bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-500">

                <h5 class="mb-2 text-2xl font-bold tracking-tight text-orange-700 dark:text-orange-500">
                    Reporte de ventas
                </h5>
                <p class="font-normal text-gray-700 dark:text-gray-400">
                    Genere reporte de ventas diario o por un rango de fechas.
                </p>
            </a>
            </div>
            <div>
                <a href="{{url('/inventario/inventarios')}}" class="block max-w-sm p-6 h-full bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-500">

                <h5 class="mb-2 text-2xl font-bold tracking-tight text-orange-700 dark:text-orange-500">
                    Inventario
                </h5>
                <p class="font-normal text-gray-700 dark:text-gray-400">
                    Administre de facilmente el inventario, vea los movientos por productos
                    o compruebe que productos estan con baja cantidad.
                </p>
            </a>
            </div>



        </div>
    </div>
</x-app-layout>
