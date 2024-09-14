<div class="dark:bg-gray-800 max-w-1/2 W-1/2 ">
    <div class="p-1 mb-4 text-xl text-center rounded-lg  text-white bg-gradient-to-r from-gray-400 via-gray-500 to-gray-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-gray-300 dark:focus:ring-gray-800 shadow-lg shadow-gray-500/50 dark:shadow-lg dark:shadow-gray-800/80" role="alert">
                <span class="font-medium border-gray-700 border-spacing-1"> Este boleto es válido siempre y cuando realices tu pago en el tiempo correspondiente y envíes tu comprobante de pago a nuestro WhatsApp. (No ocupas alguna otra confirmación)</span>
            </div>
        <div class="flex gap-12 mb-12 md:grid-cols-1 sm-gap-4 border-gray-500">
            <div class="w-full">
                <x-card title="Apartado" informacion="100" ruta="{{ route('clientes') }}" imagen="{{ asset('storage/'.$data->imagen1) }}" texto='text-left'>
                    <span class="font-bold text-gray-500">{{"Nombre:"}}</span> {{$nombre}}<br/><br>
                    <span class="font-bold text-gray-500">{{"Ubicación:"}}</span> {{$ciudad}} {{", "}} {{$estado}}<br/><br>
                    <span class="font-bold text-gray-500">{{"Monto a Pagar: $"}}</span> {{ number_format((float)$costo_final , 2, '.', '') }}<br/><br>
                    <span class="font-bold text-gray-500">{{"Boletos:"}}</span> {{$cadena_final}}<br/><br>
                </x-card>
            </div>
        </div>
        <div class="p-1 mb-4 text-xl text-white text-center rounded-lg bg-gradient-to-r from-gray-400 via-gray-500 to-gray-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-gray-300 dark:focus:ring-gray-800 shadow-lg shadow-gray-500/50 dark:shadow-lg dark:shadow-gray-800/80" role="alert">
            <span class="font-medium border-gray-700 border-spacing-1"> ⚠️Atención este es tu boleto oficial⚠️, toma una captura de pantalla y guardala.<br> (✅ = pago confirmado, ⏳ = pago pendiente)</span>
        </div>
        <div class="container py-10 px-10 mx-0 min-w-full flex flex-col items-center">
            <button class="text-white bg-gradient-to-r from-gray-400 via-gray-500 to-gray-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-gray-300 dark:focus:ring-gray-800 shadow-lg shadow-gray-500/50 dark:shadow-lg dark:shadow-gray-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2"><a href="https://wa.me/5216684656493?text=Hola+qué+tal!+Aparte+los+siguientes+numeros+{{$cadena_final}}.%0A%0AEn+la+Edición+{{ $datas->descripcion }}%0A%0ANombre:+{{$nombre}}%0A%0AAtención%0A%0A------------------------------------------%0A%0AEl siguiente paso es enviar foto del comprobante de pago por aquí%0A%0ATus boletos quedan apartados por 24 hrs%0A%0A">TERMINAR</a></button>
          </div>
        <div class="grid gap-4 mb-4 w-full bg-gray-200">
            <dl class="max-w-full text-white divide-y divide-gray-200 dark:text-white dark:divide-gray-700">
                <div class="p-1 mb-4 text-xl text-white text-center rounded-lg bg-gray-700 hover:bg-gray-500 dark:text-white" role="alert">
                    <span class="font-medium border-cyan-700 border-spacing-1"> En estas cuentas podras pagar en efectivo desde cualquier tienda OXXO, SUPER, BANCOS O FARMACIAS, ETC.</span>
                </div>
                <div class="container py-10 px-10 mx-0 min-w-full flex flex-col items-center">
                    <span class="mb-1 text-black text-2xl dark:text-gray-400">Bancoppel</span>
                    <dt class="mb-1 text-black md:text-2xl dark:text-gray-400">Tarjeta</dt>
                    <dt class="mb-1 text-black md:text-2xl font-semibold dark:text-gray-400">Paulina Gracia Almaral</dt>
                    <dd class="text-2xl font-bold text-black">4169 1606 0075 1524</dd>
                </div>
                <div class="container py-10 px-10 mx-0 min-w-full flex flex-col items-center">
                    <span class="mb-1 text-black text-2xl dark:text-gray-400">BBVA</span>
                    <dt class="mb-1 text-black md:text-2xl dark:text-gray-400">Tarjeta</dt>
                    <dt class="mb-1 text-black md:text-2xl font-semibold dark:text-gray-400">Jesús Neftali Garcia Padilla</dt>
                    <dd class="text-2xl font-bold text-black">4152 3139 7044 8168</dd>
                </div>
                <div class="container py-10 px-10 mx-0 min-w-full flex flex-col items-center">
                    <span class="mb-1 text-black text-2xl dark:text-gray-400">BBVA</span>
                    <dt class="mb-1 text-black md:text-2xl dark:text-gray-400">N° De Cuenta</dt>
                    <dt class="mb-1 text-black md:text-2xl font-semibold dark:text-gray-400">Jesús Neftali Garcia Padilla</dt>
                    <dd class="text-2xl font-bold text-black">152 112 5503</dd>
                </div>
            </dl>
        </div>
</div>
