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


{{-- slider --}}

    <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="relative max-w-7xl max-auto" x-data="{
            activeSlide: 1,
            slides: [
                { id:1, title: 'Hello 1', image: '/sliderempresas/slide1.jpg', body: '{{ $busine->razonsocial}}'},
                { id:2, title: 'Hello 2', image: '/sliderempresas/slide2.jpg', body: 'bbbLorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates obcaecati temporibus doloremque'},
                { id:3, title: 'Hello 3', image: '/sliderempresas/slide3.jpg', body: 'cccLorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates obcaecati temporibus doloremque'},
                { id:4, title: 'Hello 4', image: '/sliderempresas/slide1.jpg', body: 'dddLorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates obcaecati temporibus doloremque'},
                { id:5, title: 'Hello 5', image: '/sliderempresas/slide2.jpg', body: 'eeeLorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates obcaecati temporibus doloremque'},
            ],
            loop(){
                setInterval(()=>{this.activeSlide=this.activeSlide===5 ? 1:this.activeSlide + 1},4000)
            }
        }"
        x-init="loop"
        >
            {{-- datalopp --}}
            <template x-for="slide in slides" :key="slide.id">
                <div x-show="activeSlide == slide.id" class="flex items-center p-24 text-white rounded-lg h-80 bg-slate-500" style="background-image: url('/img/sliderempresas/slide2.jpg')">
                    <div class="w-full bg-cover" >
                        <div>
                        <h2 class="text-2xl font-bold" x-text="slide.title"></h2>
                        <p class="text-base" x-text="slide.body"></p>
                        </div>
                    </div>
                </div>
            </template>

            {{-- back/next --}}
            <div class="absolute inset-0 flex">
                <div class="flex items-center justify-start w-1/2">
                    <button
                    x-on:click="activeSlide = activeSlide === 1 ? slides.length : activeSlide - 1 "
                    class="flex items-center justify-center w-12 h-12 -ml-16 font-bold transition rounded-full shadow bg-slate-200 text-slate-500 hover:bg-blue-500 hover:text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
                          </svg>
                    </button>
                </div>

                <div class="flex items-center justify-end w-1/2">
                    <button
                    x-on:click="activeSlide = activeSlide === slides.length ? 1 : activeSlide + 1 "
                    class="flex items-center justify-center w-12 h-12 -mr-16 font-bold transition rounded-full shadow bg-slate-200 text-slate-500 hover:bg-blue-500 hover:text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                          </svg>
                    </button>
                </div>

            </div>

            {{-- buttons --}}
            <div class="absolute flex items-center justify-center w-full px-4">
                <template  x-for="slide in slides" :key="slide.id">
                    <button class="flex-1 w-4 h-2 mx-2 mt-4 mb-2 overflow-hidden transition-colors duration-200 ease-out rounded-full hover:bg-slate-600 hover:shadow-lg"
                    :class="{
                        'bg-blue-600' : activeSlide === slide.id,
                        'bg-slate-300' : activeSlide !== slide.id,
                    }"
                    x-on:click="activeSlide = slide.id"
                    >

                    </button>
                </template>
            </div>



        </div>
    </div>





{{-- slider --}}






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
                    <div class="w-full max-w-sm lg:max-w-full lg:flex">
                        <div class="flex-none h-48 overflow-hidden text-center bg-cover rounded-t lg:h-auto lg:w-48 lg:rounded-t-none lg:rounded-l" style="background-image: url('/img/ticomempresas.jpg')" title="Woman holding a mug">
                        </div>
                        <div class="flex flex-col justify-between p-4 leading-normal bg-white border-b border-l border-r border-gray-400 rounded-b lg:border-l-0 lg:border-t lg:border-gray-400 lg:rounded-b-none lg:rounded-r">
                          <div class="mb-8">

                            <div class="mb-2 text-xl font-bold text-gray-900">Contactar Ahora con {{ $busine->razonsocial }} aquí nuestros datos</div>
                            <p class="text-base text-gray-700">{{ $busine->razonsocial }}</p>
                            <p class="text-base text-gray-700">Ruc: {{ $busine->ruc }}</p>

                            <p class="text-base text-gray-700">Web: {{ $busine->web }}</p>
                            <p class="text-base text-gray-700">Email1: {{ $busine->email }}</p>
                            <p class="text-base text-gray-700">Email2: {{ $busine->email2 }}</p>
                            <p class="text-base text-gray-700">Telf.: {{ $busine->phone }}</p>
                            <p class="text-base text-gray-700">Cel: {{ $busine->movil }}</p>
                            <p class="text-base text-gray-700">WhatsApp: {{ $busine->whatsapp }}</p>
                            <p class="text-base text-gray-700">Dirección: {{ $busine->address }}</p>

                            <p class="text-base text-gray-700">Facebook: {{ $busine->address }}</p>
                            <p class="text-base text-gray-700">Instagram: {{ $busine->address }}</p>
                            <p class="text-base text-gray-700">Youtube: {{ $busine->address }}</p>

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

