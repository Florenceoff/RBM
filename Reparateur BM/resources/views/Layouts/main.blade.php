<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Réparateur de Brèches Martinique - @yield('title')</title>
</head>
<body>


    <nav class="bg-white border-gray-200 dark:bg-gray-900">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
          <a href="https://flowbite.com/" class="flex items-center space-x-3 rtl:space-x-reverse">
              <img src="https://flowbite.com/docs/images/logo.svg" class="h-8" alt="Flowbite Logo" />
              <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Flowbite</span>
          </a>
          <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-default" aria-expanded="false">
              <span class="sr-only">Open main menu</span>
              <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
              </svg>
          </button>
          <div class="hidden w-full md:block md:w-auto" id="navbar-default">
            <ul class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
              <li>
                <a href="#" class="block py-2 px-3 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 dark:text-white md:dark:text-blue-500" aria-current="page">Home</a>
              </li>
              <li>
                <a href="#" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Articles</a>
              </li>
              <li>
                <a href="#" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Services</a>
              </li>
              <li>
                <a href="#" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Pricing</a>
              </li>
              <li>
                <a href="#" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Contact</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

      <main>
@yield('main')

<footer class="relative bg-transparent bg-no-repeat bg-bottom bg-cover"
style="background-image: url('{{ asset('storage/images/svg/arc_cercle.svg') }}') transform: rotate(180deg);">
<div class="container mx-auto px-4 py-8">
    <div class="border-t border-gray-300 pt-8">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
            <div class="text-left font-semibold">
                <h5 class="font-extrabold text-xl"> Association Réparateur de Brèches Martinique</h5>
                <p>1 Rue </p>
                <p>97200 Fort-de-France</p>
            </div>
            <div class="text-left font-semibold">
                <h5 class="font-extrabold text-xl">Contact</h5>
                <p>association-rbmr@gmail.com</p>
                <p>06 96 11 11 11</p>
            </div>
            <div class="text-left font-semibold">
                <h5 class="font-extrabold text-xl">Horaires</h5>
                <p>Lun-Ven : 9h00 – 17h00</p>
                <p>Samedi : 9h00 – 17h00</p>
            </div>
            <div class="text-left font-semibold">
                <h5 class="font-extrabold text-xl">Suivez-nous !</h5>
                <ul class="flex space-x-4">
                    <li>
                        <a href=""
                            class="flex items-center justify-center w-10 h-10 bg-lime-500/50 hover:bg-lime-500 text-white rounded-full"
                            title="Suivez sur Facebook" target="_blank">
                            <img src="{{ asset('/imagesite/facebook.png') }}" alt="Facebook" width="50" height="50">
                        </a>
                    </li>
                    <li>
                        <a href=""
                            class="flex items-center justify-center w-10 h-10 bg-lime-500/50 hover:bg-lime-500 text-white rounded-full"
                            title="Suivez sur Instagram" target="_blank">
                            <img src="{{ asset('/imagesite/instagram.png') }}" alt="Instagram" width="50" height="50">
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="text-center font-semibold mt-8">
        <p>© Copyright <a href="#" target="_blank" rel="noopener noreferrer"
                class="text-semibold text-blue-300">Florence Dev</a> |
            <a href="/mentions-legales/" class="text-semibold text-lime-500">Mentions Légales</a> et
            <a href="/politique-de-confidentialite" class="text-semibold text-lime-500">Politique de
                confidentialité</a>
        </p>
    </div>
</div>
</footer>



      </main>




</body>
</html>
