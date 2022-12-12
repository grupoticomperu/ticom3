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

        <h1 class="mt-5 text-3xl text-center uppercase">{{ $busine->id}}</h1>
        <h1>{{ $busine->description}}</h1>
        <hr>
       {{--  @livewire('show-empresasporcategoria', ['category' => $category]) --}}
    </div>




    <section class="mt-8">

        <h1 class="mb-6 text-3xl text-center text-gray-600">Mis Productos</h1>
        <div class="grid px-4 mx-auto max-w-7xl sm:px-6 lg:px-8 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-x-6 gap-y-8">

            @foreach ( $busine->products  as $producto)

                <article class="card">
                    <img class="object-cover w-full h-36" src="{{asset('img/home/1.jpg')}}" alt="">
                    <div class="card-body">
                        <h1 class="card-title">{{ Str::limit($producto->name, 40)}}</h1>
                        <p class="mb-2 text-sm text-gray-500">Profe: {{$producto->name}}</p>
                        <div class="flex">
                            <ul class="flex text-sm">
                                <li class="mr-1"><i class="text-yellow-400 fas fa-star"></i></li>
                                <li class="mr-1"><i class="text-yellow-400 fas fa-star"></i></li>
                                <li class="mr-1"><i class="text-yellow-400 fas fa-star"></i></li>
                                <li class="mr-1"><i class="text-yellow-400 fas fa-star"></i></li>
                                <li class="mr-1"><i class="text-yellow-400 fas fa-star"></i></li>

                            </ul>
                            <p class="ml-auto text-sm text-gray-500">
                                <i class="fas fa-users"></i>
                                ({{$producto->name}})
                            </p>
                        </div>

                        <a href="" class="right-0 mt-2 btn btn-primary btn-block">
                            Mostrar Detalle
                        </a>


                    </div>
                </article>

            @endforeach


        </div>

    </section>






</x-app-layout>
