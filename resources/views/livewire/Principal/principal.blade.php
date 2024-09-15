<div class="dark:bg-gray-800 max-w-7xl2">
    <div class="p-1 mb-4 text-xl text-center rounded-lg  text-white bg-black">
        <span class="font-medium"> {{ $data->descripcion }} 🎰🎲</span><br/>
        <span class="font-medium"> Precios desde: ${{ $data->costo }} Pesos!!</span>
      </div>

    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <img src = "{{ asset('storage/'.$data->imagen1) }}"/>
    </div>
    <div class="pt-5">

    </div>
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        @include('faqs')
    </div>
</div>

