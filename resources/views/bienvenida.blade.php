<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SISTEMA WEB</title>
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    @livewireStyles
</head>
<body class="container bg-fixed mx-auto my-auto" style="background-image:url(imagenes/fondo.png)" bg-gray-800">
    <div >
        <div class="mt-8 text-4xl text-center font-bold  text-orange-500">
            SISTEMA DE COMPRAS VENTAS E INVENTARIO
        </div>
        <div class="relative flex items-top justify-center h-2/3
        sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-lg text-orange-500 dark:text-orange-500 underline">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-lg text-orange-500 dark:text-orange-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-lg text-orange-500 dark:text-orange-500 underline">Register</a>
                        @endif
                    @endauth
            </div>

            <div class="mt-10" >
                <img class="mx-auto mt-1" src="imagenes/hammer2.png" alt="" width="370" height="230">

            </div>

            </div>



                <div class="flex justify-center hover:text-orange-300  font-bold text-3xl text-center text-orange-500">
                    <a class="mt-5 px-10 py-3 bg-gray-900 border-4 hover:bg-slate-600 rounded-md border-orange-500"
                    href="{{ route('login')}}"> INICIO</a>
                </div>
                @endif
            </div>


    </div>


        @stack('modals')

        @yield('script')

        @livewireScripts
</body>
</html>
