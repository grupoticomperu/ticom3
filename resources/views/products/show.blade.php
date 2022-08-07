<x-app-layout>
    

    <x-slot name="header">
        <div class="flex items-center">
            <h2 class="text-xl font-semibold leading-tight text-gray-600">
                Productos  :  
            </h2>

           
        </div>




    </x-slot>



    <div class="container py-8 mx-auto">
        <figure class="mb-4">
           {{--  <img class="object-cover object-center w-full h-80" src="{{ Storage::url($category->image) }}" alt=""> --}}
        </figure>
             
        productos de la Empresa 

        <hr>

        @foreach ( $products as $product )
           <p> {{ $product->name }} </p>
        @endforeach


       {{--  @livewire('show-empresasporcategoria', ['category' => $category]) --}}
        
    </div>

</x-app-layout>