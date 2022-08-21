<div>
    
    <div class="py-1">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-xl sm:rounded-lg">  
  
                    <div class="px-4 py-4 mb-2 ">
                        <x-jet-label value="Razón Social" />
                        <x-jet-input type="text" 
                                    class="w-full capitalize"
                                    wire:model="razonsocial"
                                    placeholder="Ingrese la Razón Social de tu Empresa " />
                     <x-jet-input-error for="razonsocial" /> 
                    
                    </div>    

                    <div class="px-4 py-1 mb-2">
                        <x-jet-label value="Slug" />
                        <x-jet-input type="text"
                            disabled
                            wire:model="slug"
                            class="w-full bg-gray-200" 
                            placeholder="Ingrese el slug de la categoria" />

                    <x-jet-input-error for="slug" /> 
                    </div>


{{--                     <div class="px-4 py-1 mb-2 ">
                        <x-jet-label value="Descripción" />
                        <x-jet-input type="text" 
                                    class="w-full capitalize"
                                    wire:model="description"
                                    placeholder="Ingrese la Razón Social de tu Empresa " />
                    <x-jet-input-error for="description" />

                    
                    </div>  --}}   



                        {{-- Descrición --}}
        <div class="mx-4 mb-4">
            <div wire:ignore>
                <x-jet-label value="Descripción" />
                <textarea rows="8" class="w-full form-control" 
                    wire:model="description"
                    x-data 
                    x-init="ClassicEditor.create($refs.miEditor)
                    .then(function(editor){
                        editor.model.document.on('change:data', () => {
                            @this.set('description', editor.getData())
                        })
                    })
                    .catch( error => {
                        console.error( error );
                    } );"
                    
                    x-ref="miEditor"
                    >
                </textarea>
            </div>
            <x-jet-input-error for="description" />
        </div>




            {{--    <div wire:ignore>
                        <select wire:model="categoriess" class="select2" data-placeholder="Select a State" style="width:90%;">
                            @foreach($categories as $category)
                            <option {{ collect(old('categories', $empresa->categories->pluck('id')))->contains($category->id) ? 'selected' : ''}}  value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                            
                        </select>
                    </div> --}}


                <x-jet-section-border />


                <x-jet-danger-button  wire:click="save" wire:loading.attr="disabled" wire:target="save" class="mb-2 ml-2 disabled:opacity-25">
                    Editar mi empresa
                </x-jet-danger-button>


                </div>
            </div>
        </div>




{{--         <script>

            document.addEventListener('livewire:load', function(){
                $('.select2').select2();
                $('.select2').on('change', function(){
                     @this.set('categoriess', this.value); 
                    /*@this.set('categoriess', $(this).value());*/
                })
            })
                                
        </script> --}}

    @push('scripts')
        
        <script src="https://cdn.ckeditor.com/ckeditor5/28.0.0/classic/ckeditor.js"></script>
    @endpush


</div>
