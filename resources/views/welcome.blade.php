
<x-app-layout>
    <section class="bg-cover" style="background-image:url({{asset('img/banerticom.jpg')}})">
        <div class="px-4 py-40 mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="w-full md:w-3/4 lg:w-1/2">
                <h1 class="text-4xl text-white font-fold">Busca tu Empresa o Producto</h1>
                <p class="mt-2 mb-4 text-lg text-white">Si deseas comprar encontrarás las empresas más solidas.</p>
                <p class="mt-2 mb-4 text-lg text-white">Si deseas vender registrate</p>

                <div class="relative pt-2 mx-auto text-gray-600" autocomplete="off">
                    <input class="w-full h-10 px-5 pr-16 text-sm bg-white border-2 border-gray-300 rounded-lg focus:outline-none"
                    type="search" name="search" placeholder="Search">
                    
                    <button type="submit" class="absolute top-0 right-0 px-4 py-2 mt-2 font-bold text-white bg-blue-500 rounded hover:bg-blue-700">
                        Buscar
                    </button> 
                </div>
            </div>     
        </div>
    </section>

    <section class="mt-16">
        <h1 class="mb-6 text-3xl text-center text-gray-600">Ultimas Empresas Registradas</h1>
        <div class="grid grid-cols-1 px-4 mx-auto max-w-7xl sm:px-6 lg:px-8 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-x-6 gap-y-8">
            <article>
                <figure>
                    <img class="object-cover w-full rounded-xl h-36" src="{{asset('img/home/1.jpg')}}" alt="">
                </figure>
                <header class="mt-2">
                    <h1 class="text-xl text-center text-gray-700">Cursos y Proyectos1</h1>
                </header>
                <p class="text-sm text-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing adipisicing adipisicing elit.</p>
            </article>

            <article>
                <figure>
                    <img class="object-cover w-full rounded-xl h-36 "  src="{{asset('img/home/2.jpg')}}" alt="">
                </figure>
                <header class="mt-2">
                    <h1 class="text-xl text-center text-gray-700">Cursos y Proyectos2</h1>
                </header>
                <p class="text-sm text-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing adipisicing adipisicing elit.</p>
            </article>

            <article>
                <figure>
                    <img class="object-cover w-full rounded-xl h-36"  src="{{asset('img/home/3.jpg')}}" alt="">
                </figure>
                <header class="mt-2">
                    <h1 class="text-xl text-center text-gray-700">Mysql postgree</h1>
                </header>
                <p class="text-sm text-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing adipisicing adipisicing elit.</p>
            </article>

            <article>
                <figure>
                    <img class="object-cover w-full rounded-xl h-36"  src="{{asset('img/home/4.jpg')}}" alt="">
                </figure>
                <header class="mt-2">
                    <h1 class="text-xl text-center text-gray-700">Desarrollo web</h1>
                </header>
                <p class="text-sm text-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing adipisicing adipisicing elit.</p>
            </article>

        </div>

    </section>


</x-app-layout>

 