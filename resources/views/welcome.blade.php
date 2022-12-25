
<x-app-layout>
   {{--  <section class="bg-cover" style="background-image:url({{asset('img/banerticom.jpg')}})"> --}}
        {{-- <div class="px-4 py-20 mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="w-full md:w-3/4 lg:w-1/2">
                <h1 class="text-4xl text-white font-fold">Busca tu Empresa o Producto</h1>
                <p class="mt-2 mb-4 text-lg text-white">Si deseas comprar encontrarás las empresas más solidas.</p>
                <p class="mt-2 mb-4 text-lg text-white">Si deseas vender registrate</p> --}}

                {{-- <div class="relative pt-2 mx-auto text-gray-600" autocomplete="off">
                    <input class="w-full h-10 px-5 pr-16 text-sm bg-white border-2 border-gray-300 rounded-lg focus:outline-none"
                    type="search" name="search" placeholder="Search">

                    <button type="submit" class="absolute top-0 right-0 px-4 py-2 mt-2 font-bold text-white bg-blue-500 rounded hover:bg-blue-700">
                        Buscar
                    </button>
                </div> --}}

               {{--  @livewire('search') --}}
            {{-- </div>
        </div>
    </section> --}}


    <div id="default-carousel" class="relative" data-carousel="slide">
        <!-- Carousel wrapper -->
        <div class="relative h-56 overflow-hidden md:h-96">

             <!-- Item 1 -->
            <div class="ease-in-out duration-16000" data-carousel-item>
                <span class="absolute flex flex-col text-2xl font-semibold text-white -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 sm:text-3xl lg:text-6xl dark:text-gray-800">
                    <p class="mb-4 text-center">Registra tu Empresa Gratis</p>
                    <p class="mb-4 text-xl text-center">Aumenta tus ventas</p>
                    <div class="inline-flex items-center justify-center">
                        {{-- <x-jet-danger-button class="sm:m-3 lg:m-3 "> --}}
                        <a href="{{ route('register') }}" class="inline-flex items-center justify-center px-4 py-2 text-xs font-semibold tracking-widest text-white uppercase transition bg-red-600 border border-transparent rounded-md hover:bg-red-500 focus:outline-none focus:border-red-700 focus:ring focus:ring-red-200 active:bg-red-600 disabled:opacity-25">
                            Registrarme
                        </a>

                       {{--  </x-jet-danger-button> --}}
                    </div>
                </span>

                <img
                src="{{asset('img/slideradmin/registra-tu-empresa.jpg')}}"
                class="block w-full"
                alt="..."
                />
            </div>
            <!-- Item 1 -->

            <!-- Item 2 -->
            <div class="ease-in-out duration-16 000" data-carousel-item>
                <span class="absolute flex flex-col text-2xl font-semibold text-white -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 sm:text-3xl lg:text-6xl dark:text-gray-800">
                    <p class="mb-4 text-center">Directorio Empresarial</p>
                    <p class="mb-4 text-xl text-center">Inscripción Gratuita</p>
                    <div class="inline-flex items-center justify-center">
                        <a href="{{ route('register') }}" class="inline-flex items-center justify-center px-4 py-2 text-xs font-semibold tracking-widest text-white uppercase transition bg-red-600 border border-transparent rounded-md hover:bg-red-500 focus:outline-none focus:border-red-700 focus:ring focus:ring-red-200 active:bg-red-600 disabled:opacity-25">
                            Inscribete
                        </a>
                    </div>
                </span>

                <img
                src="{{asset('img/slideradmin/registra-tu-empresa3.jpg')}}"
                class="block w-full"
                alt="..."
                />
            </div>
            <!-- Item 2 -->

        </div>

        <!-- Slider indicators -->
        <div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2">
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 1" data-carousel-slide-to="0"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
{{--             <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button> --}}
        </div>
        <!-- Slider controls -->
        <button type="button" class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
            <span class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                <span class="sr-only">Previous</span>
            </span>
        </button>
        <button type="button" class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
            <span class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                <span class="sr-only">Next</span>
            </span>
        </button>
    </div>








    {{-- lista de productos del home --}}

    @livewire('list-products-home')

    {{-- lista de productos del home --}}


    <div class="mt-4">
        <hr>
    </div>

    <section class="mt-16">


        <h1 class="mb-6 text-3xl text-center text-gray-600">Ultimas Empresas Registradas</h1>
        <div class="grid grid-cols-1 px-4 mx-auto max-w-7xl sm:px-6 lg:px-8 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-x-6 gap-y-8">
            @foreach ( $bussiness as $bussines)

                <article class="card">
                    @if ($bussines->logo)
                        <figure>
                            <a href="{{ route('showempresa', $bussines )}}">
                                <img class="object-cover w-full rounded-t-xl h-36" src="{{ Storage::disk("s3")->url($bussines->logo) }}" alt="{{ $bussines->razonsocial }}">
                            </a>
                        </figure>
                    @else
                        <figure>
                            <a href="{{ route('showempresa', $bussines )}}"><img class="object-cover w-full rounded-t-xl h-36" src="{{asset('img/home/1.jpg')}}" alt="{{ $bussines->razonsocial }}"></a>
                        </figure>
                    @endif





                    <header class="mt-2">
                        <h1 class="text-xl text-center text-gray-700"><a href="{{ route('showempresa', $bussines )}}">{{ Str::limit($bussines->razonsocial, 20)}}</a></h1>
                    </header>
                    <a href="{{ route('showempresa', $bussines )}}" class="right-0 mt-2 btn btn-primary btn-block">
                        Ver Empresa
                    </a>

                </article>

            @endforeach


        </div>

    </section>




    @push('css')
        <link rel="stylesheet" href="https://unpkg.com/flowbite@latest/dist/flowbite.min.css" />
        {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/index.min.css" /> --}}
    @endpush

    @push('scripts')

     <script src="https://unpkg.com/flowbite@latest/dist/flowbite.js"></script>
{{--      <script src="https://cdn.tailwindcss.com"></script> --}}

    <script>
         const carousel = new Carousel(items, options);
         const items = [
    {
        position: 0,
        el: document.getElementById('carousel-item-1')
    },
    {
        position: 1,
        el: document.getElementById('carousel-item-2')
    },
    {
        position: 2,
        el: document.getElementById('carousel-item-3')
    },
    {
        position: 3,
        el: document.getElementById('carousel-item-4')
    },
];

const options = {
    activeItemPosition: 1,
    interval: 300000,

    indicators: {
        activeClasses: 'bg-white dark:bg-gray-800',
        inactiveClasses: 'bg-white/50 dark:bg-gray-800/50 hover:bg-white dark:hover:bg-gray-800',
        items: [
            {
                position: 0,
                el: document.getElementById('carousel-indicator-1')
            },
            {
                position: 1,
                el: document.getElementById('carousel-indicator-2')
            },
            {
                position: 2,
                el: document.getElementById('carousel-indicator-3')
            },
            {
                position: 3,
                el: document.getElementById('carousel-indicator-4')
            },
        ]
    },

    // callback functions
    onNext: () => {
        console.log('next slider item is shown');
    },
    onPrev: ( ) => {
        console.log('previous slider item is shown');
    },
    onChange: ( ) => {
        console.log('new slider item has been shown');
    }
};
    </script>




    @endpush



</x-app-layout>

