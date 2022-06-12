<div class="block px-5 py-3 mt-3 bg-gray-100 rounded-lg ">
    {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}
    {{-- Albert Einstein --}}
    <div class="block my-2 ml-2">
        <div class="flex text-lg font-extrabold tracking-wider">Document Details</div>
       <div class="flex text-gray-500 whitespace-nowrap text-md">
           {{-- <p>{{ $building->building_name }} <strong>></strong> {{ $shelf->shelf_name }} <strong>></strong> {{ $drawer->drawer_name }} <strong>></strong> {{ $folder->folder_name }}</p> --}}
       </div>
    </div>
    <div class="block w-full ">
        <form wire:submit.prevent="save">
            <div class="block m-2 text-md">
                
                <div class="w-full form-group">
                    <label for="document_name" class="text-gray-500">Document Name</label>
                    <input type="text" class="w-full text-sm rounded-full form-control focus:border-blue-800" id="document_name" name="document_name" placeholder="Document Name" wire:model.debounce.700ms="name">
                    <span class="text-xs italic text-red-500">{{ $errors->first('name') }}</span>
                </div>
                <div class="w-full form-group">
                    <label for="document_code" class="text-gray-500">Document Code</label>
                    <input type="text" class="w-full text-sm rounded-full form-control focus:border-blue-800" id="document_code" name="document_code" placeholder="Document Code" wire:model.debounce.700ms="document_code">
                    <span class="text-xs italic text-red-500">{{ $errors->first('document_code') }}</span>
                </div>
                <div class="w-full form-group">
                    <label for="document_name" class="text-gray-500">Upload Document</label>
                    <input type="file" class="w-full text-sm rounded-full form-control focus:border-blue-800" id="document_name" name="document_name" placeholder="Document Name" wire:model.debounce.700ms="path">
                    <span class="text-xs italic text-red-500">{{ $errors->first('path') }}</span>
                    @if ($path)
                    <div class="flex mt-3">
                        <iframe src="{{ $path->temporaryUrl() }}" class="h-screen-80 w-screen-80"  frameborder="0"></iframe>    
                    </div>                
                    @endif
                    

                </div>
              
                
            </div>
        </form>
    </div>
    
</div>
