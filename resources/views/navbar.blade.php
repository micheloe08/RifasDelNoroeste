

<nav class="border-gray-200 bg-black dark:bg-gray-800 dark:border-gray-700">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <a  wire:navigate href="/"">
            <x-application-mark class="block h-9 w-auto" />
        </a>
      <button data-collapse-toggle="navbar-solid-bg" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-solid-bg" aria-expanded="false">
          <span class="sr-only">Open main menu</span>
          <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
          </svg>
      </button>
      <div class="hidden w-full md:block md:w-auto" id="navbar-solid-bg">
        <ul class="flex flex-col font-medium mt-4 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-transparent dark:bg-gray-800 md:dark:bg-transparent dark:border-gray-700">
          <li>
            <a wire:navigate href="/" class="block py-2 px-3 md:p-0 text-white bg-gray-400 rounded md:bg-transparent md:text-white dark:bg-black md:dark:bg-transparent" aria-current="page">Inicio</a>
          </li>
          <li>
            <a wire:navigate href="/venta" class="block py-2 px-3 md:p-0 text-gray-100 md:text-gray-300 bg-gray-500 rounded md:bg-transparent hover:bg-gray-700 md:hover:bg-transparent md:border-0 md:hover:text-gray-300 dark:text-white md:dark:hover:text-gray-100 dark:hover:bg-gray-600 dark:hover:text-white md:dark:hover:bg-transparent">Ver Sorteo</a>
          </li>
          <li>
            <a wire:navigate href="/metodos" class="block py-2 px-3 md:p-0 text-gray-100 bg-gray-600 rounded md:bg-transparent hover:bg-gray-700 md:hover:bg-transparent md:border-0 md:hover:text-gray-300 dark:text-white md:dark:hover:text-gray-100 dark:hover:bg-gray-600 dark:hover:text-white md:dark:hover:bg-transparent">Metodos de Pago</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
