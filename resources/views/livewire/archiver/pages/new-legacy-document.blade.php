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
                        <iframe src="https://docs.google.com/gview?url={{ $path->temporaryUrl() }}&embedded=true" style="width:600px; height:500px;" frameborder="0"></iframe>    
                    </div>                
                    @endif
                    

                </div>
                <div class="w-full form-group">
                    <label for="cover-photo" class="block text-sm font-medium text-gray-700"> Cover photo </label>
                    <div class="flex justify-center px-6 pt-5 pb-6 mt-1 border-2 border-gray-300 border-dashed rounded-md">
                    <div class="space-y-1 text-center">
                        <svg class="w-12 h-12 mx-auto text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                        <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        <div class="flex text-sm text-gray-600">
                        <label for="file-upload" class="relative font-medium text-indigo-600 bg-white rounded-md cursor-pointer hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                            <span>Upload a file</span>
                            <input id="file-upload" name="file-upload" type="file" class="sr-only">
                        </label>
                        <p class="pl-1">or drag and drop</p>
                        </div>
                        <p class="text-xs text-gray-500">PNG, JPG, GIF up to 10MB</p>
                    </div>
                    </div>
                </div>
                
            </div>
        </form>
    </div>
    
</div>
