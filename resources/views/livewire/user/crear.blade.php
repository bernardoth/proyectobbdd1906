
<div class="fixed z-10 inset-0 overflow-y-auto ease-out duration-400">
    <div class="flex justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">

        <div class="fixed inset-0 transition-opacity">
            <div class="absolute inset-0 bg-gray-700 opacity-75"></div>
        </div>

        <span class="hidden sm:inline-block sm:align-middle sm:h-screen"></span>

            <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full" role="dialog" aria-modal="true" aria-labelledby="modal-headline">
                <form>
                    <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                        <div class="mb-4">
                            <h1 class="font-bold">Datos Usuario</h1>
                        </div>
                        <div class="mb-4">
                            <label for="nombres" class="block text-gray-700 text-sm font-bold mb-2">Nombres:</label>
                            <input type="text" required
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                             id="name" wire:model="name">
                             @error('name') <span class="error text-red-500">{{ $message }}</span> @enderror
                        </div>

                        <div class="grid grid-cols-2 gap-1">
                            <div class="mb-4">
                                <label for="apellidopaterno" class="block text-gray-700 text-sm font-bold mb-2">Apellido Paterno</label>
                                <input type="text" required
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                             id="apellidopaterno" wire:model="apellidopaterno">
                             @error('apellidopaterno') <span class="error text-red-500">{{ $message }}</span> @enderror
                            </div>
                            <div class="mb-4">
                                <label for="apellidopaterno" required
                                 class="block text-gray-700 text-sm font-bold mb-2">Apellido Materno</label>
                                <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                             id="apellidomaterno" wire:model="apellidomaterno">
                             @error('apellidomaterno') <span class="error text-red-500">{{ $message }}</span> @enderror

                            </div>


                            <div class="mb-4">
                            <label for="carnet" class="block text-gray-700 text-sm font-bold mb-2">Carnet</label>
                            <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            id="carnet" wire:model="carnet">
                            @error('carnet') <span class="error text-red-500">{{ $message }}</span> @enderror
                            </div>

                            <div class="mb-4">
                            <label for="celular" class="block text-gray-700 text-sm font-bold mb-2">Celular</label>
                            <input type="number" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            id="celular" wire:model="celular">
                            @error('celular') <span class="error text-red-500">{{ $message }}</span> @enderror
                            </div>
                            <div>
                                <label for="cargo" class="block text-gray-700 text-sm font-bold mb-2">Cargo</label>
                                <select wire:model="cargo" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="cargo" id="cargo">Cargo
                                    <option selected value="">SELECCIONAR</option>
                                    <option value="VENDEDOR">VENDEDOR</option>
                                    <option  value="NOOB" >NOOB</option>
                                    <option  value="ADMIN">ADMIN</option>
                                </select>
                                @error('cargo') <span class="error text-red-500">{{ $message }}</span> @enderror
                            </div>
                            <div class="mb-4">
                                <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Correo:</label>
                                <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                id="email" wire:model="email">
                                @error('email') <span class="error text-red-500">{{ $message }}</span> @enderror
                            </div>
                        </div>









                        <!-- dfgd
                        </div>
                        <div class="mb-4">
                            <label for="apellidopaterno" class="block text-gray-700 text-sm font-bold mb-2">Apellidos Paterno:</label>
                            <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                             id="apellidopaterno" wire:model="apellidopaterno">
                        </div>
                        <div class="mb-4">
                            <label for="apellidomaterno" class="block text-gray-700 text-sm font-bold mb-2">Apellidos Materno:</label>
                            <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                             id="apellidomaterno" wire:model="apellidomaterno">
                        </div>

                        <div class="mb-4">
                            <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Correo:</label>
                            <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            id="email" wire:model="email">
                        </div>
                         -->
                         <div class="mb-4">
                            <label for="direccion" class="block text-gray-700 text-sm font-bold mb-2">Direccion</label>
                            <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            id="direccion" wire:model="direccion">
                        </div>
                        <div class="mb-4">
                            <label for="password" class="block text-gray-700 text-sm font-bold mb-2">Password:</label>
                            <input type="password" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            id="password" wire:model="password">
                        </div>
                        <!--<div class="mb-4">
                            <label for="ci" class="block text-gray-700 text-sm font-bold mb-2">CI:</label>
                            <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            id="ci" wire:model="ci">
                        </div> -->


                        <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                            <span class="flex w-full rounded-md shadow-sm sm:ml-3 sm:w-auto">
                                <button wire:click.prevent="guardar()" type="button" class="inline-flex justify-center w-full rounded-md border border-transparent px-4 py-2 bg-purple-600 text-base leading-6 font-medium text-white shadow-sm hover:bg-purple-800 focus:outline-none focus:border-green-700 focus:shadow-outline-green transition ease-in-out duration-150 sm:text-sm sm:leading-5">Guardar</button>
                            </span>

                            <span class="flex w-full rounded-md shadow-sm sm:ml-3 sm:w-auto">
                                <button wire:click="cerrarModal()" type="button" class="inline-flex justify-center w-full rounded-md border border-gray-300 px-4 py-2 bg-gray-200 text-base leading-6 font-medium text-gray-700 shadow-sm hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue transition ease-in-out duration-150 sm:text-sm sm:leading-5">Cancelar</button>
                            </span>
                        </div>

                    </div>
                </form>
            </div>


    </div>
</div>
