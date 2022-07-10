<div class="block px-5 py-3 mt-3 bg-gray-100 rounded-lg "
x-data="{legacy_added:@entangle('legacy_added'), copiedToClipboard:@entangle('copiedToClipboard'), showQr:false,}"
x-init="$watch('legacy_added', value => {
    if(value == true){
        showQr = true; 
        setTimeout(function(){ legacy_added = false; }, 10000);
    } 
}),$watch('copiedToClipboard', value => {
    if(value == true){
        setTimeout(function(){ copiedToClipboard = false; }, 5000);
    } 
})">


      {{-- notification --}}
        <!-- Global notification live region, render this permanently at the end of the document -->
        <div aria-live="assertive" class="fixed inset-x-0 bottom-0 flex items-end px-4 py-10 pointer-events-none sm:items-start" x-show="legacy_added" x-cloak
            x-transition-enter =  "transform ease-out duration-300 transition"
            x-transition-enter-start =  "translate-y-2 opacity-0 sm:translate-y-0 sm:translate-x-2"
            x-transition-enter-end =   "translate-y-0 opacity-100 sm:translate-x-0"
            x-transition-leave =  "transition ease-in duration-100"
            x-transition-leave-start =  "opacity-100"
            x-transition-leave-end =  "opacity-0" >
            <div class="flex flex-col items-center w-full space-y-4 sm:items-end">
          
            <div class="w-full max-w-sm overflow-hidden bg-white rounded-lg shadow-lg pointer-events-auto ring-1 ring-black ring-opacity-5" x-show="legacy_added" x-cloak
            x-transition-enter =  "transform ease-out duration-300 transition"
            x-transition-enter-start ="translate-y-2 opacity-0 sm:translate-y-0 sm:translate-x-2"  
            x-transition-enter-end =  "translate-y-0 opacity-100 sm:translate-x-0" 
            x-transition-leave =  "transition ease-in duration-100"
            x-transition-leave-start = "opacity-100" 
            x-transition-leave-end =  "opacity-0" >
                <div class="p-4">
                <div class="flex items-start">
                    <div class="flex-shrink-0">
                    <!-- Heroicon name: outline/check-circle -->
                    <svg class="w-6 h-6 text-green-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    </div>
                    <div class="ml-3 w-0 flex-1 pt-0.5">
                    <p class="text-sm font-medium text-gray-900">Successfully saved!</p>
                    <p class="mt-1 text-sm text-gray-500">You can check the archived documents on the dashboard.</p>
                    </div>
                    <div class="flex flex-shrink-0 ml-4">
                    <button type="button" x-on:click="building_added = false" class="inline-flex text-gray-400 bg-white rounded-md hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        <span class="sr-only">Close</span>
                        <!-- Heroicon name: solid/x -->
                        <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </button>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>

        <!-- Small Modal -->
        


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
                
                
                <div class="grid w-full grid-cols-7 form-group gap-x-2">
                    <label for="fundcluster" class="inline-block col-span-7 text-gray-700 form-label">Document Code</label>
                    <select wire:model="fundcluster" name="fundcluster" id="fundcluster" class="block w-full col-span-2 m-0 text-sm font-normal transition ease-in-out bg-white border border-gray-300 border-solid rounded-full form-control bg-clip-padding focus:text-gray-700 focus:bg-white focus:outline-none focus:border-blue-800">
                        <option value="0" class="font-bold text-gray-500 text-md">Select Fund Cluster</option>
                        @foreach ($fundclusters as $fc)
                            <option value="{{ $fc->id }}" class="font-bold text-gray-500 text-md">{{ $fc->fund_cluster_type }}</option> 
                        @endforeach
                    </select>
                    <input type="text" class="block w-full col-span-5 m-0 text-sm font-normal transition ease-in-out bg-white border border-gray-300 border-solid rounded-full form-control bg-clip-padding focus:text-gray-700 focus:bg-white focus:outline-none focus:border-blue-800" id="document_code" name="document_code" placeholder="Document Code" wire:model.debounce.700ms="document_code">
                    <p class="col-span-7 text-sm italic text-red-500">{{ $errors->first('document_code') }}</p>
                    <p class="col-span-7 text-sm italic text-primary-500" x-show="copiedToClipboard == false"><strong class="italic">Note:</strong> you may click <span x-on:click="copiedToClipboard=true;navigator.clipboard.writeText('{{ $document_code }}');" class="font-bold text-indigo-500 underline hover:cursor-pointer hover:text-indigo-700">this to copy document code to clipboard.</span></p>
                    <p class="col-span-7 text-sm italic font-extrabold text-indigo-700" x-show="copiedToClipboard">Copied!</p>
                </div>
                 
                  <div class="w-full form-group">
                    <label for="payee" class="inline-block text-gray-700 form-label">Payee Name</label>
                    <input type="text" class="block w-full m-0 text-sm font-normal transition ease-in-out bg-white border border-gray-300 border-solid rounded-full form-control bg-clip-padding focus:text-gray-700 focus:bg-white focus:outline-none focus:border-blue-800 " id="payee" name="payee" placeholder="Full Name" wire:model.debounce.700ms="payee">
                    <span class="text-sm italic text-red-500">{{ $errors->first('payee') }}</span>
                </div>

                 <div class="w-full form-group">
                    <label for="particular" class="inline-block text-gray-700 form-label">Particular</label>
                    <textarea cols="10" rows="5" class="block w-full m-0 text-sm font-normal transition ease-in-out bg-white border border-gray-300 border-solid rounded-lg form-control bg-clip-padding focus:text-gray-700 focus:bg-white focus:outline-none focus:border-blue-800" id="particular" name="particular" placeholder="Particular" wire:model.debounce.700ms="particular">
                    </textarea>
                    <span class="text-sm italic text-red-500">{{ $errors->first('particular') }}</span>
                </div>

                 <div class="w-full form-group">
                    <label for="archive_date" class="inline-block text-gray-700 form-label">Archive Date</label>
                    <input type="date" class="block w-1/4 m-0 text-sm font-normal transition ease-in-out bg-white border border-gray-300 border-solid rounded-full form-control bg-clip-padding focus:text-gray-700 focus:bg-white focus:outline-none focus:border-blue-800" id="archive_date" name="archive_date" placeholder="mm/dd/yyyy" wire:model.debounce.700ms="date">
                    <span class="text-sm italic text-red-500">{{ $errors->first('date') }}</span>
                </div>
                
                <div class="grid grid-cols-4 gap-3">
                    <div class="w-full col-span-1 form-group">
                        <label for="Building" class="inline-block text-gray-700 form-label">Building</label>
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
                    <div wire:loading wire:target="path" class="italic">
                    Uploading...
                    </div>
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

    {{-- modal para sa qr --}}
    <div class="relative z-10" aria-labelledby="modal-title" role="dialog" aria-modal="true" x-cloak x-show="showQr" x-transition-enter = "ease-out duration-300"
    x-transition-enter-start =  "opacity-0"
    x-transition-enter-end =  "opacity-100"
    x-transition-leave =  "ease-in duration-200"
    x-transition-leave-start =  "opacity-100"
    x-transition-leave-end = "opacity-0" >
        <div class="fixed inset-0 transition-opacity bg-gray-500 bg-opacity-75" x-cloak x-show="showQr" x-transition-enter = "ease-out duration-300"
        x-transition-enter-start = "opacity-0" 
        x-transition-enter-end =  "opacity-100"
        x-transition-leave =  "ease-in duration-200"
        x-transition-leave-start =  "opacity-100"
        x-transition-leave-end =  "opacity-0"></div>
    
        <div class="fixed inset-0 z-10 overflow-y-auto">
        <div class="flex items-end justify-center min-h-full p-4 text-center sm:items-center sm:p-0">
            
            <div class="relative px-4 pt-5 pb-4 overflow-hidden text-left transition-all transform bg-white rounded-lg shadow-xl sm:my-8 sm:max-w-lg sm:w-full sm:p-6" x-cloak x-show="showQr"
            x-transition-enter = "ease-out duration-300"
            x-transition-enter-start = "opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" 
            x-transition-enter-end =  "opacity-100 translate-y-0 sm:scale-100"
            x-transition-leave =  "ease-in duration-200"
            x-transition-leave-start =  "opacity-100 translate-y-0 sm:scale-100"
            x-transition-leave-end =  "opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95">
             
                <form class="space-y-8 divide-y divide-gray-200" wire:submit.prevent=''>
                    <div class="space-y-8 divide-y divide-gray-200">
                    
                 
                        <div class="pt-4">
                            <div>
                            <h3 class="text-lg font-medium leading-6 text-gray-900">Download Qr</h3>
                            
                            </div>
                            <div class="grid grid-cols-1 mt-6 gap-y-6 gap-x-4 sm:grid-cols-6">
                            <div class="sm:col-span-6">
                                @if(isset($document))
                                <img src="{{ asset( 'storage/'.$document->qr_path ) }}" alt="QRCODE" class="w-full h-full">                          
                                @endif
                            </div>
                    
                            
                            </div>
                        </div>
                
                   
                    </div>
                
                    <div class="pt-5">
                    <div class="flex justify-end">
                        <button type="button" x-on:click="showQr=false" class="px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-md shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Cancel</button>
                        @if(isset($document))
                        <a href ="{{ asset( 'storage/'.$document->qr_path ) }}" download class="inline-flex justify-center px-4 py-2 ml-3 text-sm font-medium text-white bg-indigo-600 border border-transparent rounded-md shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Download QRCode</a>
                        @endif
                    </div>
                    </div>
                </form>

            </div>
        </div>
        </div>
    </div>
    {{-- modal qr end --}}
    
</div>
