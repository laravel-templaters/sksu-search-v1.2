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
        <form wire:submit.prevent="store" enctype="multipart/form-data">
            <div class="grid grid-cols-1 gap-3 m-2 text-md">
                
               
                <div class="w-full form-group">
                    <label for="document_code" class="inline-block text-gray-700 form-label">Document Code</label>
                    <input type="text" class="block w-full m-0 text-sm font-normal transition ease-in-out bg-white border border-gray-300 border-solid rounded-full form-control bg-clip-padding focus:text-gray-700 focus:bg-white focus:outline-none focus:border-blue-800" id="document_code" name="document_code" placeholder="Document Code" wire:model.debounce.700ms="document_code">
                    <span class="text-sm italic text-red-500">{{ $errors->first('document_code') }}</span>
                </div>
                <div class="grid grid-cols-4 gap-3">
                    <div class="w-full col-span-1 form-group">
                        <label for="Building" class="inline-block ml-3 text-gray-700 form-label">Building</label>
                        <select wire:model.debounce.700ms="building_id" class="block w-full m-0 text-sm font-normal transition ease-in-out bg-white border border-gray-300 border-solid rounded-full form-control bg-clip-padding focus:text-gray-700 focus:bg-white focus:outline-none focus:border-blue-800" id="building_id" name="building_id">
                            <option value="">Select Building</option>
                            @foreach ($buildings as $building)
                                <option value="{{ $building->id }}">{{ $building->building_name }}</option>
                            @endforeach
                        </select>
                        <span class="text-sm italic text-red-500">{{ $errors->first('building_id') }}</span>
                    </div>
                    @if (isset($shelves ) && $building_id != "")
                    <div class="w-full col-span-1 form-group">
                        <label for="Shelf" class="inline-block ml-3 text-gray-700 form-label">Shelf</label>
                        <select wire:model.debounce.700ms="shelf_id" class="block w-full m-0 text-sm font-normal transition ease-in-out bg-white border border-gray-300 border-solid rounded-full form-control bg-clip-padding focus:text-gray-700 focus:bg-white focus:outline-none focus:border-blue-800" id="shelf_id" name="shelf_id">
                            <option value="">Select Shelf</option>
                            @foreach ($shelves as $shelf)
                                <option value="{{ $shelf->id }}">{{ $shelf->shelf_name }}</option>
                            @endforeach
                        </select>
                        <span class="text-sm italic text-red-500">{{ $errors->first('shelf_id') }}</span>
                    </div>
                    @endif
                    @if (isset($drawers ) && $shelf_id != "")
                    <div class="w-full col-span-1 form-group">
                        <label for="Drawer" class="inline-block ml-3 text-gray-700 form-label">Drawer</label>
                        <select wire:model.debounce.700ms="drawer_id" class="block w-full m-0 text-sm font-normal transition ease-in-out bg-white border border-gray-300 border-solid rounded-full form-control bg-clip-padding focus:text-gray-700 focus:bg-white focus:outline-none focus:border-blue-800" id="drawer_id" name="drawer_id">
                            <option value="">Select Drawer</option>
                            @foreach ($drawers as $drawer)
                                <option value="{{ $drawer->id }}">{{ $drawer->drawer_name }}</option>
                            @endforeach
                        </select>
                        <span class="text-sm italic text-red-500">{{ $errors->first('drawer_id') }}</span>
                    </div>
                    @endif
                    @if (isset($folders ) && $drawer_id != "")
                    <div class="flex justify-center">
                        <div class="mb-3 w-96">

                            <label for="Folder" class="inline-block ml-3 text-gray-700 form-label">Folder</label>
                            <select wire:model.debounce.700ms="folder_id" class="block w-full m-0 text-sm font-normal transition ease-in-out bg-white border border-gray-300 border-solid rounded-full form-control bg-clip-padding focus:text-gray-700 focus:bg-white focus:outline-none focus:border-blue-800" id="folder_id" name="folder_id">
                                <option value="">Select Folder</option>
                                @foreach ($folders as $folder)
                                    <option value="{{ $folder->id }}">{{ $folder->folder_name }}</option>
                                @endforeach
                            </select>
                            <span class="text-sm italic text-red-500">{{ $errors->first('folder_id') }}</span>
                        </div>
                    </div>
                    @endif
               </div>
                <div class="w-full form-group">
                    <label for="upload_doc" class="inline-block text-gray-700 form-label">Upload Document</label>
                    <input type="file" class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-green-100 file:text-green-700 hover:file:bg-green-200 file:shadow-md file:shadow-green-900 py-1.5 pl-1" id="upload_doc" name="upload_doc" placeholder="Document" wire:model.debounce.700ms="path">
                    <span class="text-sm italic text-red-500">{{ $errors->first('path') }}</span>
                    @if ($path && $errors->first('path') == "")
                    <div class="relative inline-block mt-3" x-data="{showPreview:false}">
                        <div x-cloak x-show="showPreview"> 
                            <label for="preview" class="inline-block mb-2 text-gray-700 form-label">Document Preview</label>
                            <iframe id="preview" name="preview" src="{{ $path->temporaryUrl() }}" class="mx-auto shadow-md h-screen-80 w-screen-80 rounded-xl shadow-green-800"  frameborder="0"></iframe>    
                        </div>
                        <div class="" x-cloak x-show="showPreview==false">
                            <button type="button" class="inline-flex items-center p-1 text-sm font-medium tracking-wide text-indigo-700 bg-indigo-100 border border-transparent rounded hover:bg-indigo-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" x-on:click="showPreview = !showPreview">Show Preview</button>
                        </div>
                        <div class="absolute bottom-0 right-0 flex mt-3" x-cloak x-show="showPreview">
                            <button type="button" class="inline-flex items-center px-3 py-1.5  border border-transparent text-md tracking-wide font-medium rounded-lg text-white drop-shadow-sm bg-transparent hover:bg-red-200 hover:text-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" x-on:click="showPreview = !showPreview">Hide Preview</button>
                        </div>
                       
                    </div>                
                    @endif
                </div>
                <div class="w-full form-group">
                    <label for="document_name" class="inline-block text-gray-700 form-label">Document Name</label>
                    <input type="text" class="block w-full m-0 text-sm font-normal transition ease-in-out bg-white border border-gray-300 border-solid rounded-full form-control bg-clip-padding focus:text-gray-700 focus:bg-white focus:outline-none focus:border-blue-800" id="document_name" name="document_name" placeholder="Document Name" wire:model.debounce.700ms="name">
                    <span class="text-sm italic text-red-500">{{ $errors->first('name') }}</span>
                </div>
              
            </div>
            <button type="submit" class="inline-flex items-center px-3 py-2 mt-10 ml-2 font-medium leading-4 text-white bg-indigo-600 border border-transparent rounded-md shadow-sm text-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                Save to archive
                <svg xmlns="http://www.w3.org/2000/svg" class="ml-2 -mr-0.5 h-6 w-7"viewBox="0 0 20 20" fill="currentColor">
                    <path d="M5.5 13a3.5 3.5 0 01-.369-6.98 4 4 0 117.753-1.977A4.5 4.5 0 1113.5 13H11V9.413l1.293 1.293a1 1 0 001.414-1.414l-3-3a1 1 0 00-1.414 0l-3 3a1 1 0 001.414 1.414L9 9.414V13H5.5z" />
                    <path d="M9 13h2v5a1 1 0 11-2 0v-5z" />
                  </svg>
              </button>
            
        </form>
    </div>
    
</div>
