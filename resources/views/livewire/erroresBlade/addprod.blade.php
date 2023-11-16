<div>
<div class=" px-4 pt-4 pb-8 h-px">
        <div class="border-gray-300">
        <button wire:click="abrirmodal('prod')" id="btn"
                    class="float-right bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-6 my-3">
                    Listado Productos
        </button>
        @if ($modalP)
            @include('livewire.venta.modprod')
        @endif

        <x-input type="number" wire:model="idprod"></x-input>


        </div>
</div>
