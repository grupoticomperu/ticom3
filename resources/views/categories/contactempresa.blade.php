<x-app-layout>

    @section('title'){{ $busine->title }}@stop

    @isset($busine->razonsocial)
        @section('meta-title'){{ $busine->razonsocial }}@stop
    @else
        @section('meta-title'){{ $busine->name }}@stop
    @endisset



    @section('meta-description'){{ $busine->description }}@stop

    @section('keywords'){{ $busine->keywords }}@stop


    <x-slot name="header">
        <div class="flex items-center">
            <h2 class="text-xl font-semibold leading-tight text-gray-600">
                Empresas  :  {{ $busine->razonsocial}}
            </h2>


        </div>

    </x-slot>

    {{-- logo y menu --}}


            @include('categories.menu')
            @include('categories.slidercliente')













    <div class="container py-4 mx-auto mt-8">
        <figure class="mb-4">
           {{--  <img class="object-cover object-center w-full h-80" src="{{ Storage::url($category->image) }}" alt=""> --}}
        </figure>

        <h1 class="mt-5 text-3xl text-center uppercase">{{ $busine->razonsocial}}</h1>

        <hr>
       {{--  @livewire('show-empresasporcategoria', ['category' => $category]) --}}
    </div>




    <section class="mt-8">


            <div class="grid px-4 mx-auto max-w-7xl sm:px-6 lg:px-8 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-2 gap-x-6 gap-y-8">

                <div>
                    <h3 class="mb-1 text-3xl text-center text-gray-600">Contactar a </h3>
                    <h3 class="mb-6 text-3xl text-center text-gray-600">{{ $busine->razonsocial}}</h3>
                    <div class="max-w-sm sm:w-full lg:max-w-full lg:flex">
                        <div class="flex-none h-48 overflow-hidden text-center bg-cover rounded-t lg:h-auto lg:w-48 lg:rounded-t-none lg:rounded-l" style="background-image: url('/img/ticomempresas.jpg')" title="Portal de Empresas">
                        </div>
                        <div class="flex flex-col justify-between p-4 leading-normal bg-white rounded-b sm:w-full lg:rounded-b-none lg:rounded-r">
                          <div class="mb-8">

                            <div class="mb-2 text-xl font-bold text-gray-900">Nuestros Datos: </div>
                            <p class="mb-2 text-base text-gray-700">{{ $busine->razonsocial }}</p>
                            <div class="flex mb-2">
                                <p class="text-base text-gray-900">RUC: </p>
                                <p class="ml-2 text-base text-gray-500">{{ $busine->ruc }}</p>
                            </div>

                            <div class="flex mb-2">
                                <p class="text-base text-gray-900">WEB: </p>
                                <p class="ml-2 text-base text-gray-500">{{ $busine->web }}</p>
                            </div>

                            <div class="flex mb-2">
                                <p class="text-base text-gray-900">EMAIL: </p>
                                <p class="ml-2 text-base text-gray-500">{{ $busine->email }}</p>
                            </div>

                            <div class="flex mb-2">
                                <p class="text-base text-gray-900">EMAIL: </p>
                                <p class="ml-2 text-base text-gray-500">{{ $busine->email2 }}</p>
                            </div>

                            <div class="flex mb-2">
                                <p class="text-base text-gray-900">TELF.: </p>
                                <p class="ml-2 text-base text-gray-500">{{ $busine->phone }}</p>
                            </div>

                            <div class="flex mb-2">
                                <p class="text-base text-gray-900">CEL.: </p>
                                <p class="ml-2 text-base text-gray-500">{{ $busine->movil }}</p>
                            </div>

                            <div class="flex mb-2">
                                <p class="text-base text-gray-900">WHATSAPP: </p>
                                <p class="ml-2 text-base text-gray-500">{{ $busine->whatsapp }}</p>
                            </div>

                            <div class="flex mb-2">
                                <p class="text-base text-gray-900">DIRECCIÓN: </p>
                                <p class="ml-2 text-base text-gray-500">{{ $busine->address }}</p>
                            </div>

                            <div class="flex mb-2">
                                <p class="text-base text-gray-900">FACEBOOK: </p>
                                <p class="ml-2 text-base text-gray-500">{{ $busine->address }}</p>
                            </div>

                            <div class="flex mb-2">
                                <p class="text-base text-gray-900">INSTAGRAM: </p>
                                <p class="ml-2 text-base text-gray-500">{{ $busine->address }}</p>
                            </div>

                            <div class="flex mb-2">
                                <p class="text-base text-gray-900">YOUTUBE: </p>
                                <p class="ml-2 text-base text-gray-500">{{ $busine->address }}</p>
                            </div>


                          </div>
                          <div class="flex items-center">


                          </div>
                        </div>
                    </div>
                </div>

                <div>
                    <h3 class="mb-1 text-3xl text-center text-gray-600">Enviar Mensaje a </h3>
                    <h3 class="mb-6 text-3xl text-center text-gray-600">{{ $busine->razonsocial}}</h3>
                    <div class="w-full ">
                        <form class="px-8 pt-6 pb-8 mb-4 bg-white rounded shadow-md">
                          <div class="mb-4">
                            <label class="block mb-2 text-sm font-bold text-gray-700" for="nomap">
                              Nombres y Apellidos
                            </label>
                            <input class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="nomap" type="text" placeholder="Nombres y Apellidos">
                          </div>

                          <div class="mb-4">
                            <label class="block mb-2 text-sm font-bold text-gray-700" for="email">
                              Correo
                            </label>
                            <input class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="email" type="text" placeholder="Correo electrónico">
                          </div>


                          <div class="mb-4">
                            <label class="block mb-2 text-sm font-bold text-gray-700" for="movil">
                              Celular
                            </label>
                            <input class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="movil" type="text" placeholder="Celular">
                          </div>

                          <div class="mb-4">


                            <label class="block mb-2 text-sm font-bold text-gray-700" for="movil">
                                Mensaje
                            </label>
                            <textarea
                                class="w-full border-gray-300 rounded-md shadow-sm form-control focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                rows="3" wire:model="description">
                            </textarea>
                          </div>



                          <div class="flex items-center justify-between">
                            <button class="px-4 py-2 font-bold text-white bg-blue-500 rounded hover:bg-blue-700 focus:outline-none focus:shadow-outline" type="button">
                              Enviar
                            </button>

                          </div>

                        </form>


                    </div>
                </div>


            </div>

    </section>


    <section class="mt-8">
        <div class="grid px-4 mx-auto max-w-7xl sm:px-6 lg:px-8 sm:grid-cols-1 md:grid-cols-1 lg:grid-cols-1 ">
            {!! $busine->coordenadas !!}
        </div>
    </section>





</x-app-layout>

