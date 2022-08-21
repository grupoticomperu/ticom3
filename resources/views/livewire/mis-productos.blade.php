<div>
    <div class="py-1">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-xl sm:rounded-lg">  
        

            <div class="container py-6 mx-auto">

                <x-table-responsive>
        
                    <div class="px-2 py-1">
                        <x-button-enlace class="ml-auto" href="{{route('products.create')}}">
                            Agregar un Producto
                        </x-button-enlace>

                        @livewire('create-productsp')

                        <x-jet-input type="text" 
                            wire:model="search" 
                            class="w-full "
                            placeholder="Ingrese el nombre del Prodcucto que quiere buscar" />
        
                    </div>


        
                    @if ($products->count())
                        
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                    <tr>
               
                                    <th scope="col"
                                        class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                        Producto
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                        Slug
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                        Descripción
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                        Precio
                                    </th>
                                    <th scope="col" class="relative px-6 py-3">
                                        <span class="sr-only">Editar</span>
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
        
                                @foreach ($products as $product)
        
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="flex items-center">

                                                <div class="ml-4">
                                                    <div class="text-sm font-medium text-gray-900">
                                                        {{ $product->name }}
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
        
                                        <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">
                                            {{$product->slug}} 
                                        </td>
        
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            {{$product->slug}} 
        
                                        </td>
                                        <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">
                                            {{$product->price}} 
                                        </td>
        
        
        
                                        <td class="px-6 py-4 text-sm font-medium text-right whitespace-nowrap">

                                            <a href="{{route('products.edit', $product )}}" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                                            

                                        </td>
                                    </tr>
        
                                @endforeach
                                <!-- More people... -->
                            </tbody>
                        </table>
        
                    @else
                        <div class="px-6 py-4">
                            No hay ningún registro coincidente
                        </div>
                    @endif
        
                    

                        
        
                </x-table-responsive>

                @if ($products->hasPages())              
                <div class="px-6 py-4">
                    {{ $products->links() }}
                </div>
                
                @endif 

            </div>
            
                
            </div>
        </div>
    </div>

</div>
