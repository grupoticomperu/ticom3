<div>
    <div class="py-1">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-xl sm:rounded-lg">

            <div class="container py-6 mx-auto">

                <x-table-responsive>

                    <div class="px-2 py-1">
                        {{-- <x-button-enlace class="ml-auto" href="{{route('solicitudes.create')}}">
                            Agregar un Producto
                        </x-button-enlace> --}}

                       {{--  @livewire('create-solicitudesp') --}}

                        <div class="flex items-center justify-center mt-8 mb-8 md:mb-2 lg:mb-6">
                            <span>Mostrar </span>
                            <select wire:model="cant" class="block p-7 py-2.5 ml-3 mr-3 text-sm text-gray-900 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">

                                <option value="10"> 10 </option>
                                <option value="25">25</option>
                                <option value="50">50</option>
                                <option value="100">100</option>
                            </select>
                            <span class="mr-3">registros</span>

                            <div class="flex items-center justify-center mb-2 mr-4 md:mb-0 sm:w-full">
                                <x-jet-input type="text"
                                    wire:model="search"
                                    class="flex items-center justify-center w-80 sm:w-full rounded-lg py-2.5"
                                    placeholder="buscar" />
                            </div>
                        </div>




                    </div>



                    @if ($solicitudes->count())

                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                    <tr>

                                    <th scope="col"
                                        class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase cursor-pointer"
                                        wire:click="order('name')">

                                        Nombre y Apellido
                                        @if ($sort == 'name')
                                            @if ($direction == 'asc')
                                            <i class="float-right mt-1 fas fa-sort-alpha-up-alt"></i>
                                            @else
                                            <i class="float-right mt-1 fas fa-sort-alpha-down-alt"></i>
                                            @endif
                                        @else
                                            <i class="float-right mt-1 fas fa-sort"></i>
                                        @endif
                                    </th>

                                    <th scope="col"
                                        class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase cursor-pointer"
                                        wire:click="order('email')">
                                        Email
                                        @if ($sort == 'email')
                                            @if ($direction == 'asc')
                                            <i class="float-right mt-1 fas fa-sort-alpha-up-alt"></i>
                                            @else
                                            <i class="float-right mt-1 fas fa-sort-alpha-down-alt"></i>
                                            @endif
                                        @else
                                            <i class="float-right mt-1 fas fa-sort"></i>
                                        @endif
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase cursor-pointer"
                                        wire:click="order('movil')">
                                        Celular
                                        @if ($sort == 'movil')
                                            @if ($direction == 'asc')
                                            <i class="float-right mt-1 fas fa-sort-alpha-up-alt"></i>
                                            @else
                                            <i class="float-right mt-1 fas fa-sort-alpha-down-alt"></i>
                                            @endif
                                        @else
                                            <i class="float-right mt-1 fas fa-sort"></i>
                                        @endif
                                    </th>

                                    <th scope="col"
                                        class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase cursor-pointer">
                                        Descripción
                                        @if ($sort == 'description')
                                            @if ($direction == 'asc')
                                            <i class="float-right mt-1 fas fa-sort-alpha-up-alt"></i>
                                            @else
                                            <i class="float-right mt-1 fas fa-sort-alpha-down-alt"></i>
                                            @endif
                                        @else
                                            <i class="float-right mt-1 fas fa-sort"></i>
                                        @endif
                                    </th>
                                    <th scope="col"
                                    class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase cursor-pointer">
                                        Estado
                                        @if ($sort == 'state')
                                            @if ($direction == 'asc')
                                            <i class="float-right mt-1 fas fa-sort-alpha-up-alt"></i>
                                            @else
                                            <i class="float-right mt-1 fas fa-sort-alpha-down-alt"></i>
                                            @endif
                                        @else
                                            <i class="float-right mt-1 fas fa-sort"></i>
                                        @endif
                                    </th>
                                    <th scope="col"
                                    class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase cursor-pointer">
                                        Producto
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase cursor-pointer">
                                        Fecha
                                    </th>

                                    <th scope="col" class="relative px-6 py-3">
                                        <span class="sr-only">Editar</span>
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">

                                @foreach ($solicitudes as $solicitud)

                                    <tr>
                                        <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">

                                                {{$solicitud->name}}

                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            {{ $solicitud->email }}
                                        </td>


                                        <td class="px-6 py-4 whitespace-nowrap">
                                            {{ $solicitud->movil }}
                                        </td>



                                        <td class="px-6 py-4 whitespace-nowrap">
                                         {{ Str::limit($solicitud->description, 20) }}

                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            @switch($solicitud->state)

                                                @case(0)
                                                    <span wire:click="activar({{ $solicitud->id }})"
                                                        class="inline-flex px-2 text-xs font-semibold leading-5 text-red-800 bg-red-100 rounded-full cursor-pointer">
                                                        inactivo
                                                    </span>
                                                @break
                                                @case(1)
                                                    <span wire:click="desactivar({{ $solicitud->id }})"
                                                        class="inline-flex px-2 text-xs font-semibold leading-5 text-green-800 bg-green-100 rounded-full cursor-pointer">
                                                        activo
                                                    </span>
                                                @break
                                                @default

                                            @endswitch

                                        </td>
                                        <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">
                                            {{$solicitud->product->name }}
                                        </td>

                                        <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">
                                            {{$solicitud->date }}
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

                @if ($solicitudes->hasPages())
                <div class="px-6 py-4">
                    {{ $solicitudes->links() }}
                </div>

                @endif

            </div>


            </div>
        </div>
    </div>

</div>

