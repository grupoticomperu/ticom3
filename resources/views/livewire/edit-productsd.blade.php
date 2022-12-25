<div>

    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Mis productos') }}
        </h2>
    </x-slot>


    <div class="py-10 mx-auto max-w-7xl sm:px-6 lg:px-8">


        <div>

            <div class="py-1">
                <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                    <div class="overflow-hidden bg-white shadow-xl sm:rounded-lg">





{{--                               <div class="form-group">
                                <div class="dropzone">


                                </div>
                            </div>  --}}



{{--                             <form action="{{ route('products.photos.store', $product)}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div>
                                    <input type="file" name="file" id="file" accept="image/*">
                                </div>

                                <button type="submit" class="px-4 py-2 mt-5 font-bold text-white bg-blue-500 rounded hover:bg-blue-700">
                                    Subir Imagen
                                </button>

                                @error('file')
                                    <small class="mb-5 text-red-600">{{ $message }}</small>
                                @enderror

                            </form>  --}}
                            <div class="flex justify-center m-2">
                            <p>Ingrese máximo 10 imagenes por producto (arrastre sus imagenes en el rectangulo inferior)</p>
                            </div>
                            <div class="grid grid-cols-1 mx-4 bg-gray-200">
                                <form method="POST" action="{{route('products.photos.store', $product )}}" class="dropzone" id="my-awesome-dropzone">


                                </form>
                            </div>






                            <section class="mt-16">

                                <div class="grid grid-cols-1 px-4 mx-auto max-w-7xl sm:px-6 lg:px-8 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-x-6 gap-y-8">
                                    @forelse($product->photos as $photo)

                                        <form method="POST" action="{{ route('products.photos.destroy', $photo)}}">
                                            {{ method_field('DELETE') }} {{ csrf_field() }}
                                            <article class="my-4">
                                                <button class="px-4 py-2 font-bold text-white bg-red-600 rounded hover:bg-red-700" style="position:absolute">
                                                    <i class="fa-solid fa-trash-can"></i>
                                                </button>
                                    {{--           <button class="btn btn-danger btn-xs" style="position:absolute">
                                                    <i class="fas fa-times-circle"></i>
                                                </button> --}}
                                                <figure>
                                                    <img class="object-cover w-full rounded-xl h-36" src="{{ Storage::disk("s3")->url($photo->url) }}" alt="">
                                                </figure>

                                            </article>

                                        </form>

                                    @empty
                                        <div class="flex justify-center col-span-5 my-3 ">
                                            <div class="px-4 py-2 m-2 text-center text-gray-700 bg-gray-400 ">
                                                 Aún no tienes imagenes para este producto... <i class="fa-regular fa-face-frown"></i></div>



                                        </div>
                                    @endforelse
                                </div>
                            </section>


                            <div class="grid px-4 py-1 mb-2 sm:grid-cols-3 md:grid-cols-3 lg:grid-cols-3 gap-x-1">
                                <div class="col-span-2 px-4 py-1 mb-2 ">
                                    <x-jet-label value="Producto" />
                                    <x-jet-input type="text" class="w-full capitalize"
                                        wire:model="name"
                                        placeholder="Ingrese el nombre del producto" />
                                    <x-jet-input-error for="name" />
                                </div>

                                <div>
                                    <x-jet-label value="Rubro" />

                                    <select class="w-full form-control block p-7 py-2.5 ml-3 mr-3 text-sm text-gray-900 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" wire:model="item_id">

                                        <option value="" disabled selected>Seleccione un Rubro</option>

                                        @foreach ($items as $item)
                                            <option value="{{$item->id}}">{{$item->name}}</option>
                                        @endforeach
                                    </select>

                                    <x-jet-input-error for="item_id" />
                                </div>
                            </div>


                            <div class="grid px-4 py-1 mb-2 sm:grid-cols-4 md:grid-cols-4 lg:grid-cols-6 gap-x-1">

                                <div>
                                    <x-jet-label value="Moneda" />
                                    <select class="form-control block p-7 py-2.5 ml-3 mr-3 text-sm text-gray-900 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" wire:model="typecurrency">
                                        <option value="" disabled selected>Seleccione</option>
                                        <option value="1">S/ </option>
                                        <option value="2">US$  </option>
                                        <option value="3">EUR  </option>
                                    </select>
                                    <x-jet-input-error for="typecurrency" />
                                </div>

                                <div >
                                    <x-jet-label value="Precio" />
                                    <x-jet-input type="text" class="w-full capitalize"
                                        wire:model="price"
                                        placeholder="Precio" />
                                    <x-jet-input-error for="price" />
                                </div>


                                <div >
                                    <x-jet-label value="Precio de Oferta" />
                                    <x-jet-input type="text" class="w-full capitalize"
                                        wire:model="priceoffer"
                                        placeholder="Precio de Oferta" />
                                    <x-jet-input-error for="priceoffer" />
                                </div>

                                <div>
                                    <x-jet-label value="Nuevo Usado ?" />
                                    <select class="form-control p-7 py-2.5 ml-3 mr-3 text-sm text-gray-900 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" wire:model="newused">
                                        <option value="" disabled selected>Seleccione</option>
                                        <option value="1">NUEVO</option>
                                        <option value="2">USADO</option>
                                    </select>
                                    <x-jet-input-error for="newused" />
                                </div>

                                <div >
                                    <x-jet-label value="Stock" />
                                    <x-jet-input type="text" class="w-full capitalize"
                                        wire:model="stock"
                                        placeholder="Stock" />
                                    <x-jet-input-error for="stock" />
                                </div>

                                <div >
                                    <x-jet-label value="Orden" />
                                    <x-jet-input type="text" class="w-full capitalize"
                                        wire:model="order"
                                        placeholder="Orden" />
                                    <x-jet-input-error for="order" />
                                </div>


                            </div>

                            {{-- Slug --}}
                        {{--<div class="px-4 py-1 mb-2">
                                <x-jet-label value="Slug" />
                                <x-jet-input type="text" disabled wire:model="slug" class="w-full bg-gray-200"
                                    placeholder="Ingrese el slug de la categoria" />

                                <x-jet-input-error for="slug" />
                            </div> --}}


                        <div class="grid px-4 py-1 mb-2 sm:grid-cols-1 md:grid-cols-1 lg:grid-cols-1 gap-x-1">
                            {{-- Short Descrición --}}
                            <div class="px-4 py-1 mb-2">
                                <div wire:ignore>
                                    <x-jet-label value="Descripción corta" />
                                    <textarea
                                        class="w-full border-gray-300 rounded-md shadow-sm form-control focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                        rows="3" wire:model="shortdescription">
                                    </textarea>
                                </div>
                                <x-jet-input-error for="shortdescription" />
                            </div>

                            {{-- Long Descrición --}}


                            <div class="px-4 py-1 mb-2">
                                <div wire:ignore>
                                    <x-jet-label value="Descripción Larga" />
                                    <textarea class="w-full form-control" rows="4"
                                        wire:model="longdescription"
                                        x-data
                                        x-init="ClassicEditor.create($refs.miEditor)
                                        .then(function(editor){
                                            editor.model.document.on('change:data', () => {
                                                @this.set('longdescription', editor.getData())
                                            })
                                        })
                                        .catch( error => {
                                            console.error( error );
                                        } );"
                                        x-ref="miEditor">
                                    </textarea>
                                </div>
                                <x-jet-input-error for="longdescription" />
                            </div>

                        </div>

                            <div class="flex">


                                <div class="px-6 py-4 text-sm font-medium whitespace-nowrap">
                                    <x-jet-label value="Estado" />
                                    <label>
                                        {{-- <input value="1" type="radio" name="state" checked> --}}
                                        <x-jet-input type="radio" value="1" name="state" wire:model="state"
                                            checked />
                                        Activado
                                    </label>

                                    <label class="ml-2">
                                        <x-jet-input type="radio" value="0" name="state" wire:model="state" />
                                        Desactivado
                                    </label>
                                </div>

                                <div class="px-4 py-1 mb-2">
                                    <x-jet-label value="Ficha Técnica" />
                                    <div>
                                        @isset($datasheetback)
                                            <a href="{{ Storage::disk("s3")->url($datasheetback) }}" target="_blank">
                                                <img src="{{ asset('img/logopdf.jpg') }}">
                                            </a>
                                        @else
                                            <a href="#">No hay Brochure o Ficha Técnica</a>
                                        @endif
                                    </div>
                                    <x-jet-input type="file" wire:model="datasheet" placeholder="ficha técnica" />
                                    <x-jet-input-error for="datasheet" />
                                </div>

                            </div>

                            <div class="px-4 py-1 mb-2">

                                    {{-- <div class="px-4 py-1 mb-2">
                                        <x-jet-label value="Title (maximo 50 caracteres)" />
                                        <x-jet-input type="text" class="w-full" wire:model="title"
                                            placeholder="Title para Google " />
                                        <x-jet-input-error for="title" />
                                    </div> --}}



                                    {{-- Description de Google --}}
                                    {{-- <div class="px-4 py-1 mb-2">
                                        <div wire:ignore>
                                            <x-jet-label value="Description para Google" />
                                            <textarea
                                                class="w-full border-gray-300 rounded-md shadow-sm form-control focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                                rows="6" wire:model="description">
                                            </textarea>
                                        </div>
                                        <x-jet-input-error for="description" />
                                    </div> --}}

                                    <div class="px-4 py-1 mb-2">
                                        <x-jet-label value="Palabras claves" />
                                        <x-jet-input type="text" class="w-full" wire:model="keywords"
                                            placeholder="Palabras claves para Google " />
                                        <x-jet-input-error for="keywords" />
                                    </div>

                            </div>







                            <div class="px-4 py-4 mb-2">

                                <a href="{{ route('showproductos') }}" class="btn btn-xs btn-info">
                                    Cancelar
                                </a>

                                <x-jet-danger-button wire:click="save" wire:loading.attr="disabled"
                                    wire:target="save, image" class="disabled:opacity-25">
                                    Modificar Producto
                                </x-jet-danger-button>
                            </div>





                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@push('css')

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/dropzone.min.css"
    integrity="sha512-jU/7UFiaW5UBGODEopEqnbIAHOI8fO6T99m7Tsmqs2gkdujByJfkCbbfPSN4Wlqlb9TGnsuC0YgUgWkRBK7B9A=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />



@endpush

@push('scripts')
    <script src="https://cdn.ckeditor.com/ckeditor5/28.0.0/classic/ckeditor.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/min/dropzone.min.js"
    integrity="sha512-oQq8uth41D+gIH/NJvSJvVB85MFk1eWpMK6glnkg6I7EdMqC1XVkW7RxLheXwmFdG03qScCM7gKS/Cx3FYt7Tg=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>


    <script>

        Dropzone.options.myAwesomeDropzone = {
            headers:{
                'X-CSRF-TOKEN' : "{{csrf_token()}}"
            },
            //paramName: "file",
            maxFilesize: 10,
            dictDefaultMessage: "Click aqui para subir imagenes del producto o arrastre sus imagenes aquí",
            acceptedFiles:"image/*",

        };
    </script>
@endpush

