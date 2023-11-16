<nav class="bg-gray-800">
    <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
        <div class="relative flex h-16 items-center justify-between">

            <!-- Mobile menu button-->
            <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">

                <button type="button"
                    class="inline-flex items-center justi fy-center rounded-md p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white"
                    aria-controls="mobile-menu" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <!--
            Icon when menu is closed.

            Heroicon name: outline/bars-3

            Menu open: "hidden", Menu closed: "block"
          -->
                    <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                    <!--
            Icon when menu is open.

            Heroicon name: outline/x-mark

            Menu open: "block", Menu closed: "hidden"
          -->
                    <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
                <div class="flex flex-shrink-0 items-center">


                    <img class="block" src="/imagenes/textohammer.png" alt="" width="150" height="40">


                </div>

               {{--  opciones --}}


                <div class="hidden sm:ml-6 sm:block">
                    <div class="flex space-x-4">
                        <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                        <a href="{{url('/dashboard')}}" class="bg-gray-700 text-gray-300  hover:bg-gray-500 hover:text-white w-24 mt-2 px-3 py-2 rounded-md text-sm font-medium"
                            aria-current="page">Inicio</a>
                        <a href="{{}}" class="bg-gray-700 text-gray-300  hover:bg-gray-500 hover:text-white w-24 mt-2 px-3 py-2 rounded-md text-sm font-medium"
                        aria-current="page">Inicio</a>
                            <a href="{{url('/user/users')}}" class="bg-gray-700 text-gray-300 hover:bg-gray-500 hover:text-white w-24 mt-2 px-3 py-2 rounded-md text-sm font-medium"
                            aria-current="page">Usuarios</a>
                        <a href="{{ url('/cliente/clientes') }}"
                            class="bg-gray-700 w-24 mt-2 text-center text-gray-300 hover:bg-gray-500 hover:text-white px-3 py-2 rounded-md text-sm font-medium">
                            Cliente
                        </a>
                        <a href="{{ url('/cliente/clientes') }}"
                            class="bg-gray-700 w-24 mt-2 text-center text-gray-300 hover:bg-gray-500 hover:text-white px-3 py-2 rounded-md text-sm font-medium">
                            Cliente
                        </a>

                        <a href="{{url('/producto/productos')}}"
                            class="bg-gray-700 mt-2 text-gray-300 hover:bg-gray-500 hover:text-white px-3 py-2 rounded-md text-sm font-medium">
                            Productos</a>
                            <a href="{{url('/categoria/categorias')}}"
                            class=" bg-gray-700 text-gray-300 hover:bg-gray-500 hover:text-white mt-2 px-3 py-2 rounded-md text-sm font-medium">
                            Categorias</a>
                        <a href="{{url('/proveedor/proveedors')}}"
                            class="bg-gray-700 text-gray-300 hover:bg-gray-500 hover:text-white mt-2 px-3 py-2 rounded-md text-sm font-medium">
                            Proveedores</a>
                        <a href="{{url('/venta/ventas')}}"
                            class=" bg-gray-700 text-gray-300 hover:bg-gray-500 hover:text-white mt-2 px-3 py-2 rounded-md text-sm font-medium">
                            Ventas</a>

                        <a href="{{url('/compra/compras')}}"
                            class=" bg-gray-700 text-gray-300 hover:bg-gray-500 hover:text-white mt-2 px-3 py-2 rounded-md text-sm font-medium">
                            Compras</a>

                        <div class="ml-3 relative">

                                <x-jet-dropdown align="right" width="48">
                                    <x-slot name="trigger">
                                        @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                                            <button class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                                                <img class="h-8 w-8 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                                            </button>
                                        @else
                                            <span class="inline-flex rounded-md">
                                                <button type="button" class="bg-gray-700 hover:bg-gray-500 inline-flex items-center mt-2 px-3 py-3 border border-transparent text-sm leading-4 font-medium rounded-md text-white hover:text-white focus:outline-none transition">
                                                    Reportes
                                                    <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                                    </svg>
                                                </button>
                                            </span>
                                        @endif
                                    </x-slot>

                                    <x-slot name="content">
                                        <!-- reportes-->
                                        <div class="block px-4 py-2 text-xs bg-slate-300 hover:bg-white text-gray-700">
                                        <x-jet-dropdown-link href="{{url('/venta/reportevs')}}">
                                                Reporte de ventas
                                        </x-jet-dropdown-link>

                                        <x-jet-dropdown-link href="{{url('/inventario/inventarios')}}">
                                            Inventarios
                                        </x-jet-dropdown-link>
                                        <!-- provional
                                        <x-jet-dropdown-link href="{{url('/venta/reportevs')}}">
                                                Reporte de ventas
                                        </x-jet-dropdown-link>
                                        -->


                                        @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                                            <x-jet-dropdown-link href="{{ route('api-tokens.index') }}">
                                                tres
                                            </x-jet-dropdown-link>
                                        @endif

                                        <div class="border-t border-gray-100"></div>

                                        <!-- Authentication -->

                                    </x-slot>
                                </x-jet-dropdown>
                            </div>
                    </div>
                </div>
            </div>
            <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">


                <!-- Profile dropdown -->
                <div class="ml-3 relative">
                    <x-jet-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                                <button class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                                    <img class="h-8 w-8 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                                </button>
                            @else
                                <span class="inline-flex rounded-md">
                                    <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-white bg-gray-900 hover:text-green-700 focus:outline-none transition">
                                        {{ Auth::user()->name }}

                                        <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                        </svg>
                                    </button>
                                </span>
                            @endif
                        </x-slot>

                        <x-slot name="content">
                            <!-- Account Management -->
                            <div class="block px-4 py-2 text-xs text-gray-400">
                                {{ __('Manage Account') }}
                            </div>

                            <x-jet-dropdown-link href="{{ route('profile.show') }}">
                                {{ __('Profile') }}
                            </x-jet-dropdown-link>

                            @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                                <x-jet-dropdown-link href="{{ route('api-tokens.index') }}">
                                    {{ __('API Tokens') }}
                                </x-jet-dropdown-link>
                            @endif

                            <div class="border-t border-gray-100"></div>

                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}" x-data>
                                @csrf

                                <x-jet-dropdown-link href="{{ route('logout') }}"
                                         @click.prevent="$root.submit();">
                                    {{ __('Log Out') }}
                                </x-jet-dropdown-link>
                            </form>
                        </x-slot>
                    </x-jet-dropdown>
                </div>
            </div>
        </div>
    </div>

    <!-- Mobile menu, show/hide based on menu state. -->
    <div class="sm:hidden" id="mobile-menu">
        <div class="space-y-1 px-2 pt-2 pb-3">
            <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
            <a href="#" class="bg-gray-900 text-white block px-3 py-2 rounded-md text-base font-medium"
                aria-current="page">pep</a>

            <a href="#"
                class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Team</a>

            <a href="#"
                class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Projects</a>

            <a href="#"
                class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Calendar</a>
        </div>
    </div>
</nav>
