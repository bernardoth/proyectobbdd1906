<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <img src="imagenes/logoHammer.png" width="100" height="80" alt="">
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <x-jet-label for="name" value="{{ __('Name') }}" />
                <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>
            <!--
            <div>
                <x-jet-label for="apellidopaterno" value="Apellido Paterno" />
                <x-jet-input id="apellidopaterno" class="block mt-1 w-full" type="text" name="apellidopaterno" :value="old('apellidopaterno')" required autofocus autocomplete="name" />
            </div>

            <div>
                <x-jet-label for="apellidomaterno" value="Apellido Materno" />
                <x-jet-input id="apellidomaterno" class="block mt-1 w-full" type="text" name="apellidomaterno" :value="old('apellidomaterno')" required autofocus autocomplete="name" />
            </div>
            -->
            <div class="grid grid-cols-2 gap-1">
                <label class="block font-medium text-sm text-gray-700 mt-1" for="apellidopaterno">Apellidos Paterno</label>
                <label class="block font-medium text-sm text-gray-700 mt-1" for="carnet">Apellido Materno</label>

                <input id="apellidopaterno" name="apellidopaterno" :value="old('apellidopaterno')"
                    class=" border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"  type="text">
                <input id="apellidomaterno" name="apellidomaterno" :value="old('apellidomaterno')"
                    class=" border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"  type="text">

                <label class="block font-medium text-sm text-gray-700 mt-1" for="carnet">Carnet</label>
                <label class="block font-medium text-sm text-gray-700 mt-1" for="celular">Celular</label>
                <input id="carnet"  name="carnet" :value="old('carnet')"
                    class=" border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"  type="text">
                <input id="celular" name="celular" :value="old('celular')"
                    class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm" type="text">

                <label class="block font-medium text-sm text-gray-700 mt-1" for="cargo">Cargo</label>
                <label class="block font-medium text-sm text-gray-700 mt-1" for="email">Email</label>
                <select  class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm" name="cargo" id="cargo">Cargo
                    <option value="Vendedor" selected>Vendedor</option>
                    <option value="noob">Noob</option>
                </select>
                <input id="email" name="email" :value="old('email')"
                    class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm" type="text">



            </div>
            <div>
                <x-jet-label for="direccion" value="{{ __('Direccion') }}" />
                <x-jet-input id="direccion" class="block mt-1 w-full" type="text" name="direccion" :value="old('direccion')" required autofocus autocomplete="name" />
            </div>

            <!--
            <div>
            <x-jet-label for="cargo" value="Cargo" />
                <select class="w-full" name="cargo" id="cargo">Cargo
                    <option value="Vendedor" selected>Vendedor</option>
                    <option value="noob">Noob</option>
                </select>
            </div>

            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>
            -->

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-jet-label for="terms">
                        <div class="flex items-center">
                            <x-jet-checkbox name="terms" id="terms"/>

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-jet-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-jet-button class="ml-4">
                    {{ __('Register') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
