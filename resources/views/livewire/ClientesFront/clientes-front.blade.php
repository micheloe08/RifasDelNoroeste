
   @if($updateMode)
        @include('boletos')
    @endif
    <div class="dark:bg-gray-800 max-w-7xl2">
        @if (session()->has('message'))
            @if ($alerta)
                <x-success-alert />
            @else
                <x-danger-alert />
            @endif
        @endif

        <div class="p-1 mb-4 text-xl text-center rounded-lg  text-white bg-gradient-to-r from-gray-400 via-gray-500 to-gray-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-gray-300 dark:focus:ring-gray-800 shadow-lg shadow-gray-500/50 dark:shadow-lg dark:shadow-gray-800/80" role="alert">
            <span class="font-medium"> <h1>Aparta tus Boletos</h1></span>
            <span class="font-medium"> {{ $datas->descripcion }}</span><br/>
            <span class="font-medium"> Precios desde: ${{ $datas->costo }} Pesos!!</span>
          </div>
          <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <img src = "{{ asset('storage/'.$datas->imagen1) }}"/>
        </div>
        <div class="pt-5">

        </div>
 <div class="gap-12 mb-12 cols-1">
    <input type="hidden" wire:model.defer="cliente_id">
    <div class="relative w-full">
        <label for="searchterm" class="block mb-2 text-sm font-medium text-gray">Teléfono</label>
        <input type="text" id="searchterm" wire:model="searchterm" class="{{ $errors->has('searchterm') ? ' border-red-500' : 'border-gray-500' }} bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        @error('searchterm')
        <span class="text-red-500 text-xs italic">{{ $message }}</span>
        @enderror
    </div>
</div>
<div class="pt-5">

</div>
<div class="grid gap-12 mb-12 md:grid-cols-1">
    <button type="submit" class="text-white bg-gradient-to-r from-gray-400 via-gray-600 to-gray-500 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-gray-300 dark:focus:ring-gray-800 font-small rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 w-2" wire:click ="buscarNumeroTel()">
        Buscar Datos 🔎
     </button>
</div>
@if ($show)
<div class="grid gap-12 mb-12 md:grid-cols-1">
    <div>
        <label for="nombre" class="block mb-2 text-sm font-medium">Nombre Completo</label>
        <input type="text" id="nombre" wire:model.defer="nombre" class="{{ $errors->has('nombre') ? ' border-red-500' : 'border-gray-500' }} bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" >
        @error('nombre')
        <span class="text-red-500 text-xs italic">{{ $message }}</span>
        @enderror
    </div>
</div>
<div class="grid gap-6 mb-6 md:grid-cols-2">
    <div>
        <label for="estado" class="block mb-2 text-sm font-medium">Estado</label>
        <input type="text" id="estado" wire:model.defer="estado" class="{{ $errors->has('estado') ? ' border-red-500' : 'border-gray-500' }} bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        @error('estado')
        <span class="text-red-500 text-xs italic">{{ $message }}</span>
        @enderror
    </div>
    <div>
        <label for="ciudad" class="block mb-2 text-sm font-medium">Ciudad</label>
        <input type="text" id="ciudad" wire:model.defer="ciudad" class="{{ $errors->has('ciudad') ? ' border-red-500' : 'border-gray-500' }} bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        @error('ciudad')
        <span class="text-red-500 text-xs italic">{{ $message }}</span>
        @enderror
    </div>
</div>
<div class="grid gap-12 mb-12 md:grid-cols-1">
    <button type="button" wire:loading.attr="disabled" wire:click.prevent ="apartar()" class="text-white bg-gradient-to-r from-gray-400 via-gray-500 to-gray-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-gray-300 dark:focus:ring-gray-800 shadow-lg shadow-gray-500/50 dark:shadow-lg dark:shadow-gray-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">Apartar Boletos 🎫</button>
</div>
@endif


@if ($mostrar)
    <div class="list__buttons">
        <span class="font-medium">Numeros Elegidos</span><br/>
        @foreach ($numerosElegidos as $item)
        <button  class="text-white bg-gradient-to-r from-gray-400 via-gray-500 to-gray-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-gray-300 dark:focus:ring-gray-800 shadow-lg shadow-gray-500/50 dark:shadow-lg dark:shadow-gray-800/80 max-w-12 px-3 py-2 text-xs font-small text-left mb-1" wire:click = "borrar({{$item}})" ><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="0.5" stroke="currentColor" class="w-1/2 h-1/2">
            <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
          </svg> {{mb_str_pad($item, 5, '0', STR_PAD_LEFT)}}</button>
        @endforeach
    </div>
    <div class="pt-5">

    </div>
@endif
<div class="grid gap-12 mb-12 md:grid-cols-1">
    <button type="button" class="text-white bg-gradient-to-r from-gray-200 via-gray-400 to-gray-500 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-gray-300 dark:focus:ring-gray-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2" wire:click ="$set('open', true)">Seleccionar al azar 🤞🏻🍀</button>
</div>
<div class="flex gap-12 mb-12 cols-1">
    <label for="buscar" class="sr-only">Search</label>
    <div class="relative w-full">
        <input type="text" class="{{ $errors->has('buscar') ? ' border-red-500' : 'border-gray-500' }} bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Busca tu número de la Suerte!" id="buscar" wire:model.defer = "buscar" />
        @error('ciubuscardad')
        <span class="text-red-500 text-xs italic">{{ $message }}</span>
        @enderror
    </div>
    <button type="submit" class="text-white bg-gradient-to-r from-gray-200 via-gray-400 to-gray-500 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-gray-300 dark:focus:ring-gray-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2" wire:click ="buscarDato()">
       🔎
    </button>
</div>
<div id = "lista" class="list__buttons w-5/5 bg-gray-50 max-h-screen h-96 overflow-y-auto">
    @foreach ($numeros as $item)
        @if ($item->status == 0)
            <button id="{{$item->boleto}}"  class="max-w-12 px-3 py-2 text-xs font-small text-left text-black bg-white hover:bg-gray-200 border border-black" wire:click = "selecciona({{$item->boleto}})" wire.key ="boleto_{{$item->boleto}}">{{mb_str_pad($item->boleto, 5, '0', STR_PAD_LEFT)}}</button>
        @else
            <button id="{{$item->boleto}}"  class="max-w-12 px-3 py-2 text-xs font-small text-left text-white bg-white border border-black" disabled>00000</button>
        @endif
    @endforeach
<x-dialog-modal wire:model="open">
    <x-slot name="title">
        <span class="font-bold text-center"> <h1>Elige la cantidad de boletos</h1></span>
    </x-slot>

    <x-slot name="content">
        <div class="grid gap-6 mb-6 md:grid-cols-1">
            <div>
                <label for="cantidad_boletos" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Cantidad de Boletos</label>
                <select id="cantidad_boletos" wire:model="cantidad_boletos" class="form-control {{ $errors->has('cantidad_boletos') ? ' border-red-500' : 'border-gray-200' }} bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option selected>Seleccione Una</option>
                    <option value="1">1</option>
                    <option value="5">5</option>
                    <option value="10">10</option>
                    <option value="15">15</option>
                    <option value="20">20</option>
                    <option value="50">50</option>
                    <option value="100">100</option>
                </select>
            </div>
        </div>
    </x-slot>

    <x-slot name="footer">
        <div>
            <button wire:click="aleatorio()" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Generar</button>
        </div>
        <div class="pt-5">

        </div>
        <div>
            <button wire:click="$set('open', false)" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Cancelar</button>
        </div>
        <div class="pt-5">

        </div>
    </x-slot>
</x-dialog-modal>
<x-dialog-modal wire:model="animar">
    <x-slot name="title">

    </x-slot>
    <x-slot name="content">
        <img src="https://rifaselmorrodeculiacan.com/img/rifa.gif" class="items-center ml-4" />
    </x-slot>
    <x-slot name="footer">

    </x-slot>
</x-dialog-modal>
</div>


