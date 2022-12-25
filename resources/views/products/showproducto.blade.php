<x-app-layout>

    @section('title'){{ $product->title }}@stop

    @section('meta-title'){{ $product->name }}@stop

    @section('meta-description'){{ $product->shortdescription }}@stop

    @section('keywords'){{ $product->keywords }}@stop


    <x-slot name="header">
        <div class="flex items-center">
            <h2 class="flex text-xl font-semibold leading-tight text-gray-600">
            @if ($product->tipo == 1)
                Producto:
            @else
                Servicio:
            @endif

            <p class="ml-3 uppercase">  {{ $product->name}}</p>

            </h2>


        </div>

    </x-slot>




    <div class="container py-8">
        <div class="grid grid-cols-1 gap-4 md:grid-cols-2 md:gap-6">
                <div>
                    <div class="flexslider">
                        <ul class="slides">
                            @if($product->photos->count())
                                @foreach ($product->photos as $image)

                                    <li data-thumb=" {{ Storage::disk("s3")->url($image->url) }}">
                                        {{-- <img src=" {{ Storage::url($image->url) }}" /> --}}
                                        <img src=" {{ Storage::disk("s3")->url($image->url) }}" />
                                    </li>

                                @endforeach
                            @else
                                <li data-thumb="{{asset('img/home/1.jpg')}}">
                                    {{-- <img src=" {{ Storage::url($image->url) }}" /> --}}

                                    <img class="object-cover w-full h-36" src="{{asset('img/home/1.jpg')}}"  alt="">
                                </li>
                            @endif

                        </ul>
                    </div>


                </div>

                <div>
                    <h1 class="mb-5 text-2xl font-bold uppercase text-trueGray-700">{{$product->name}}</h1>

                    {{-- <div class="flex">
                            <p class="text-trueGray-700">Marca: <a class="underline capitalize hover:text-orange-500" href="">marca</a></p>
                            <p class="mx-6 text-trueGray-700">5 <i class="text-sm text-yellow-400 fas fa-star"></i></p>
                            <a class="text-orange-500 underline hover:text-orange-600" href="">39 reseñas</a>
                        </div> --}}
                    <div class="mb-6 bg-white rounded-lg shadow-lg">
                        <div class="flex ">
                                @if ($product->price )
                                <div class="flex ml-3 mr-4">
                                    <p class="my-2 text-xl text-neutral-600">
                                        Precio:

                                    </p>

                                    <p class="my-2 ml-3 text-xl font-semibold text-trueGray-700">

                                        @if ($product->typecurrency == 1)
                                            S/.
                                        @elseif($product->typecurrency == 2)
                                            US$
                                        @else
                                            €
                                        @endif

                                        @if ($product->priceoffer )
                                        <span style="text-decoration:line-through;"> {{ $product->price }}</span>
                                        @else
                                        {{ $product->price }}
                                        @endif
                                    </p>
                                </div>
                                @endif

                                @if ($product->priceoffer )
                                    <div class="flex">
                                    <p class="my-2 text-xl text-neutral-600">
                                        Precio Oferta:


                                    </p>
                                    <p class="my-2 ml-3 text-xl font-semibold text-trueGray-700">
                                        @if ($product->typecurrency == 1)
                                        S/.
                                        @elseif($product->typecurrency == 2)
                                            US$
                                        @else
                                            €
                                        @endif

                                        {{ $product->priceoffer }}
                                    </p>
                                    </div>
                                @endif
                        </div>


                        <div class="flex">
                                @if ($product->newused )
                                <div class="flex ml-3 mr-3">
                                    <p class="my-2 text-xl text-neutral-600">
                                        Producto:
                                    </p>
                                    <p class="my-2 ml-3 text-xl font-semibold text-trueGray-700">
                                        @if ($product->newused  == 1)
                                        Nuevo
                                        @else
                                        Usado
                                        @endif

                                    </p>
                                </div>
                                @endif


                                @isset($product->datasheet)
                                <div class="flex mr-3">
                                    <p class="my-2 text-xl text-neutral-600">
                                        Ficha Técnica:
                                    </p>
                                    <p class="flex my-2 text-xl font-semibold text-trueGray-700">
                                        <a href="{{ Storage::disk("s3")->url($product->datasheet) }}" target="_blank">
                                            <img class="w-8 ml-3" src="{{ asset('img/logopdf.jpg') }}">
                                        </a>
                                    </p>
                                </div>
                                @endif


                                @isset($product->stock)
                                <div class="flex">
                                    <p class="my-2 text-xl text-neutral-600">
                                        Stock :
                                    </p>
                                    <p class="flex my-2 ml-3 text-xl font-semibold text-trueGray-700">
                                        {{ $product->stock }}


                                    </p>


                                </div>
                                @endif
                        </div>


                        @if ($product->name )

                            <div class="flex ml-3">
                                <p class="my-2 text-xl text-neutral-600"> Compartir Producto en:</p>
                                <a class="my-2 ml-2 " href="https://www.facebook.com/sharer.php?u={{ request()->fullUrl() }} & title={{ $product->name }}"
                                    title="Compartir Facebook"
                                    target="_blank">
                                    <img alt="Compartir este Producto en Facebook" src="/img/Facebook.png">
                                </a>


                                <a class="my-2 ml-2 " href="https://twitter.com/intent/tweet?url={{ request()->fullUrl() }}&text={{  $product->name  }}&via=TICOMPERU&hashtags=TICOM" target="_blank" title="Tweet">
                                    <img alt="Tweet" src="/img/Twitter.png">
                                </a>


                                <a class="my-2 ml-2 " href="https://plus.google.com/share?url={{ request()->fullUrl() }}" target="_blank" title="Compartir en Google+">
                                    <img alt="Share on Google+" src="/img/Google+.png">
                                </a>


                                <a class="my-2 ml-2 " href="http://pinterest.com/pin/create/button/?url={{ request()->fullUrl() }}&description={{  $product->name  }}" target="_blank" title="Pin it">
                                    <img alt="Pin it" src="/img/Pinterest.png">
                                </a>

                            </div>

                        @endif







                        <p class="mt-2 mb-1 ml-3 text-xl text-neutral-600">Descripción:</p>
                        <div class="mb-3 bg-white rounded-lg shadow-lg">
                            <div class="flex items-center py-2">
                                <span class="flex items-center justify-center w-10 h-10 rounded-full bg-greenLime-600">
                                    <i class="text-sm text-white fas fa-truck"></i>
                                </span>

                                <div class="ml-3">
                                    <p class="text-lg font-semibold text-greenLime-600">{!! $product->longdescription !!} </p>
                                    {{-- <p>Recibelo el {{ Date::now()->addDay(7)->locale('es')->format('l j F') }}</p> --}}
                                </div>
                            </div>
                        </div>

                    </div>


                    <p class="my-2 text-xl text-neutral-600">Datos de la Empresa</p>
                    <div class="mb-6 bg-white rounded-lg shadow-lg">
                        @if ($product->user->id )

                        <div class="flex ml-3">
                            <p class="my-2 text-xl text-neutral-600">
                                Empresa :
                            </p>
                            <p class="my-2 ml-3 text-xl font-semibold text-trueGray-700">
                                <a href="{{ route('showempresa', $product->user )}}">{{ $product->user->razonsocial }}</a>
                            </p>
                        </div>
                        @endif


                        @if ($product->user->address )
                        <div class="flex ml-3">
                            <p class="my-2 text-xl text-neutral-600">
                                Dirección :
                            </p>
                            <p class="my-2 ml-3 text-xl font-semibold text-trueGray-700">
                                {{ $product->user->address }}
                            </p>
                        </div>
                        @endif

                        <div class="flex ml-3">
                            @if ($product->user->phone )
                            <div class="flex mr-3">
                                <p class="my-2 text-xl text-neutral-600">
                                    Teléfono :
                                </p>
                                <p class="my-2 ml-2 text-2xl font-semibold text-trueGray-700">
                                    {{ $product->user->phone }}
                                </p>
                            </div>
                            @endif

                            @if ($product->user->whatsapp )
                                <div class="flex">
                                    <p class="my-2 text-xl text-neutral-600">
                                        WhatsApp :
                                    </p>

                                    <p class="flex my-2 ml-3 text-2xl font-semibold text-trueGray-700">
                                        {{ $product->user->whatsapp }}
                                    </p>

                                    <a  href="https://api.whatsapp.com/send?phone=51{{ $product->user->whatsapp }}&text=Hola,%20tengo%20una%20consulta" target="_blank">
                                        <img class="my-2 ml-3 img_wht_avzuno" src="/img/whatsapp.png">
                                    </a>
                                </div>

                                <div class="div_btn_pal">
                                    <div class="palpitar"></div>
                                    <a class="btn_wht_escr" href="https://api.whatsapp.com/send?phone=51{{ $product->user->whatsapp }}&text=Hola,%20tengo%20una%20consulta" target="_blank">
                                        <img class="img_wht_avz" src="/img/whatsapp.png">
                                        <div class="info_num">
                                            <p class="txt_num_hover">{{ $product->user->whatsapp }}</p>
                                        </div>
                                    </a>
                                </div>

                            @endif
                        </div>
                    </div>


                    {{--    @if ($product->user->coordenadas )

                    <p class="flex my-4 text-2xl font-semibold text-trueGray-700">
                        Mapa :

                        <div >
                            {!! $product->user->coordenadas !!}
                        </div>
                    </p>

                    @endif --}}


                    <div class="grid grid-cols-1 divide-y">
                        {{-- <p>Contáctese con el Vendedor</p> --}}
                        <p class="my-2 text-xl text-neutral-600">Contáctese con el Vendedor</p>
                    </div>

                    {{-- aqui pondremos un componente livewire --}}

                    <div class="mb-6 bg-white rounded-lg shadow-lg ">
                        @livewire('contactar', ['product' => $product])
                    </div>


                </div>
        </div>



            <p class="my-2 ml-3 text-xl text-neutral-600">Productos Relacionados</p>
            <div class="grid px-4 mx-auto max-w-7xl sm:px-6 lg:px-8 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-x-6 gap-y-8">

                @foreach ( $productrelacionado->take($cant) as $producto)
                    <article class="card">
                        @if($producto->photos->count() )
                            @foreach ( $producto->photos->take(1) as $photo)
                            <img class="object-cover w-full h-36" src="{{ Storage::disk("s3")->url($photo->url) }}" alt="">
                            @endforeach
                        @else
                            <img class="object-cover w-full h-36" src="{{asset('img/home/1.jpg')}}"  alt="">
                        @endif


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

                            <a href="{{ route('verproducto', $producto )}}" class="right-0 mt-2 btn btn-primary btn-block">
                                Mostrar Detalle
                            </a>


                        </div>
                    </article>
                @endforeach

            </div>



    </div>

    @push('scripts')
        <script>
            $(document).ready(function() {
                $('.flexslider').flexslider({
                    animation: "slide",
                    controlNav: "thumbnails"
                });
            });

        </script>
    @endpush













</x-app-layout>
