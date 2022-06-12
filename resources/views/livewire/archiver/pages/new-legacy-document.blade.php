<div class="block px-5 py-3 mt-3 bg-gray-100 rounded-lg ">
    {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}
    {{-- Albert Einstein --}}
    <div class="block my-2 ml-2">
        <div class="flex text-lg font-extrabold tracking-wider">Document Details</div>
       <div class="flex text-gray-500 whitespace-nowrap text-md">
           <p>{{ $building->building_name }} <strong>></strong> {{ $shelf->shelf_name }} <strong>></strong> {{ $drawer->drawer_name }} <strong>></strong> {{ $folder->folder_name }}</p>
       </div>
    </div>
    <div class="block w-full ">
        
        <div class="block m-2 text-md">
            <div class="w-full form-group">
                <label for="archived_year" class="text-gray-500">Archived Year</label>
                <input type="number" min="1990" max="{{ date('Y') }}" step="1" class="w-full text-sm rounded-full form-control focus:border-blue-800" id="archived_year" name="archived_year" wire:model.debounce.700ms="year">
                <span class="text-xs italic text-red-500">{{ $errors->first('year') }}</span>
            </div>
            <div class="w-full form-group">
                <label for="document_name" class="text-gray-500">Document Name</label>
                <input type="text" class="w-full text-sm rounded-full form-control focus:border-blue-800" id="document_name" name="document_name" placeholder="Document Name" wire:model.debounce.700ms="name">
                <span class="text-xs italic text-red-500">{{ $errors->first('name') }}</span>
            </div>
            <div class="w-full form-group">
                <label for="document_name" class="text-gray-500">Upload Document</label>
                <input type="file" class="w-full text-sm rounded-full form-control focus:border-blue-800" id="document_name" name="document_name" placeholder="Document Name" wire:model.debounce.700ms="path">
                <span class="text-xs italic text-red-500">{{ $errors->first('path') }}</span>
                @if ($path)
                <div class="flex mt-3">
                    <img src="{{ $path->temporaryUrl() }}"/>           
                </div>                
                @endif
                

            </div>
             
        </div>
    </div>
    
</div>
