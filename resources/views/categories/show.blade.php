<x-app-layout>
    
    <div class="container py-8 mx-auto">
        <figure class="mb-4">
           {{--  <img class="object-cover object-center w-full h-80" src="{{ Storage::url($category->image) }}" alt=""> --}}
        </figure>
             
        @livewire('show-categories', ['categories' => $categories])
        
    </div>

</x-app-layout>