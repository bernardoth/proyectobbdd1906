<div>
    <div  class="px-4 pb-2">
        <div class="border-gray-300">

            <x-label class="inline  h-1/2 ">Cliente: </x-label>
            <x-input class="inline px-4"  placeholder="nombre" type="text" wire:model="nombreCompleto"></x-input>
            <select name="nom" id="nom" class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
            @forelse ($clientes as $clie )

            <option value="{{$clie->id}}">{{$clie->nombres.' '.$clie->apellidos.' '.'    CI/NIT: '.$clie->ci}}</option>
            @empty
            <option value="">No existe cliente</option>

            @endforelse

            </select>
            <x-label class="inline px-4">NIT: </x-label>
            <x-input class="inline px-4" placeholder="Numero de NIT/CI" type="text" wire:model.defer="ci"></x-input>
            <button wire:click="abrirmodal('clie')"
                    class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-6 ml-2 my-3">
                    Buscar Cliente
            </button>
            @if ($modalC)
                @include('livewire.venta.modclie',['idclie'=>$idclie])
            @endif

        </div>

    </div>

</div>
