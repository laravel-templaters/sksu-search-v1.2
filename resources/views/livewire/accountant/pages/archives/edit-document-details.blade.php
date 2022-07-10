<div class="w-full h-screen min-w-full px-4 mx-auto max-w-screen">
    <div class="container mx-auto my-4">
        <div class="flex flex-col">
            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="min-w-full py-2 align-middle sm:px-6 lg:px-8 ">
                    <div class="overflow-hidden border-b border-gray-200 shadow-md shadow-primary-500/50 sm:rounded-lg bg-gray-50 ">
                        <div class="overflow-hidden bg-white shadow sm:rounded-lg">
                            <div class="sticky top-0 px-4 py-5 sm:px-6">
                                <h3 class="text-lg font-medium leading-6 text-gray-900">Document Information</h3>
                                <p class="max-w-2xl mt-1 text-sm text-gray-500">@if ($islegacy)
                                   Edit Legacy Document Details
                                @endif</p>
                            </div>
                            @if ($islegacy)
                              <div class="p-10 border-t border-gray-200 sm:p-0">
                                 <div class="block w-full p-4">
                                <form wire:submit.prevent="store" enctype="multipart/form-data">
                                 <div class="grid grid-cols-1 gap-3 m-2 text-md">
                
                
                                <div class="grid w-full grid-cols-7 form-group gap-x-2">
                                    <label for="fundcluster" class="inline-block col-span-7 text-gray-700 form-label">Document Code</label>
                                    <select {{$edit_fc != true ? 'disabled' : '' }} wire:model="fundcluster" name="fundcluster" id="fundcluster" class="block w-full col-span-2 m-0 text-sm font-normal transition ease-in-out bg-white border border-gray-300 border-solid rounded-full form-control bg-clip-padding focus:text-gray-700 focus:bg-white focus:outline-none focus:border-blue-800">
                                        <option value="0" class="font-bold text-gray-500 text-md">Select Fund Cluster</option>
                                        @foreach ($fundclusters as $fc)
                                            <option value="{{ $fc->id }}"  class="font-bold text-gray-500 text-md">{{ $fc->fund_cluster_type }}</option> 
                                        @endforeach
                                    </select>

                                    <input type="text" class="block w-full col-span-2 m-0 text-sm font-normal transition ease-in-out bg-white border border-gray-300 border-solid rounded-full form-control bg-clip-padding focus:text-gray-700 focus:bg-white focus:outline-none focus:border-blue-800" id="document_code" name="document_code" placeholder="Document Code" wire:model="document_code">
                                    
                                    
                                    <p class="col-span-7 text-sm italic text-red-500">{{ $errors->first('document_code') }}</p>
                                    {{-- check box --}}
                                    <div class="col-span-1 flex items-center mt-4">
                                        <input type="checkbox" class="p-2 mr-2  outline-none form-checkbox h-4 w-4 text-green-600 border-gray-300 rounded transition duration-150 ease-in-out focus:outline-none" id="edit_fc" name="edit_fc" wire:click="changeFund" wire:model="edit_fc" value="1">
                                        <label for="edit_fc" class="font-medium text-gray-700">Edit Fund Cluster</label>
                                    </div>
                                    {{-- <p class="col-span-7 text-sm italic text-primary-500" x-show="copiedToClipboard == false"><strong class="italic">Note:</strong> you may click <span x-on:click="copiedToClipboard=true;navigator.clipboard.writeText('{{ $document_code }}');" class="font-bold text-indigo-500 underline hover:cursor-pointer hover:text-indigo-700">this to copy document code to clipboard.</span></p>
                                    <p class="col-span-7 text-sm italic font-extrabold text-indigo-700" x-show="copiedToClipboard">Copied!</p> --}}
                                    </div>
                 
                                            <div class="w-full form-group">
                                                <label for="payee" class="inline-block text-gray-700 form-label">Payee Name</label>
                                                <input type="text" class="block w-full m-0 text-sm font-normal transition ease-in-out bg-white border border-gray-300 border-solid rounded-full form-control bg-clip-padding focus:text-gray-700 focus:bg-white focus:outline-none focus:border-blue-800 " id="payee" name="payee" placeholder="Full Name" wire:model="payee">
                                                <span class="text-sm italic text-red-500">{{ $errors->first('payee') }}</span>
                                            </div>

                                            <div class="w-full form-group">
                                                <label for="particular" class="inline-block text-gray-700 form-label">Particular</label>
                                                <textarea cols="10" rows="5" class="block w-full m-0 text-sm font-normal transition ease-in-out bg-white border border-gray-300 border-solid rounded-lg form-control bg-clip-padding focus:text-gray-700 focus:bg-white focus:outline-none focus:border-blue-800" id="particular" name="particular" placeholder="Particular" wire:model="particular">
                                                </textarea>
                                                <span class="text-sm italic text-red-500">{{ $errors->first('particular') }}</span>
                                            </div>

                                            <div class="w-full form-group">
                                                <label for="archive_date" class="inline-block text-gray-700 form-label">Archive Date</label>
                                                <input type="date" class="block w-1/4 m-0 text-sm font-normal transition ease-in-out bg-white border border-gray-300 border-solid rounded-full form-control bg-clip-padding focus:text-gray-700 focus:bg-white focus:outline-none focus:border-blue-800" id="archive_date" name="archive_date" placeholder="mm/dd/yyyy" wire:model="date">
                                                <span class="text-sm italic text-red-500">{{ $errors->first('date') }}</span>
                                            </div>
                                            
                                            <div class="grid grid-cols-4 gap-3">
                                                <div class="w-full col-span-1 form-group">
                                                    <label for="Building" class="inline-block text-gray-700 form-label">Building</label>
                                                    <select {{$edit_lc != true ? 'disabled' : '' }} wire:model="building_id" class="block w-full m-0 text-sm font-normal transition ease-in-out bg-white border border-gray-300 border-solid rounded-full form-control bg-clip-padding focus:text-gray-700 focus:bg-white focus:outline-none focus:border-blue-800" id="building_id" name="building_id">
                                                        <option value="">Select Building</option>
                                                        @foreach ($buildings as $building)
                                                            <option value="{{ $building->id }}">{{ $building->building_name }}</option>
                                                        @endforeach
                                                    </select>
                                                     <div class="col-span-1 flex items-center mt-4">
                                                        <input type="checkbox" class="p-2 mr-2  outline-none form-checkbox h-4 w-4 text-green-600 border-gray-300 rounded transition duration-150 ease-in-out focus:outline-none" id="edit_lc" name="edit_lc" wire:click="changeLoc" wire:model="edit_lc" value="1">
                                                        <label for="edit_lc" class="font-medium text-gray-700">Edit File Storage</label>
                                                    </div>
                                                    <span class="text-sm italic text-red-500">{{ $errors->first('building_id') }}</span>
                                                </div>
                                                @if (isset($shelves ) && $building_id != "")
                                                <div class="w-full col-span-1 form-group">
                                                    <label for="Shelf" class="inline-block ml-3 text-gray-700 form-label">Shelf</label>
                                                    <select {{$edit_lc != true ? 'disabled' : '' }} wire:model="shelf_id" class="block w-full m-0 text-sm font-normal transition ease-in-out bg-white border border-gray-300 border-solid rounded-full form-control bg-clip-padding focus:text-gray-700 focus:bg-white focus:outline-none focus:border-blue-800" id="shelf_id" name="shelf_id">
                                                        <option value="">Select Shelf</option>
                                                        @foreach ($shelves as $shelf)
                                                            <option value="{{ $shelf->id }}">{{ $shelf->shelf_name }}</option>
                                                        @endforeach
                                                    </select>
                                                    <span class="text-sm italic text-red-500">{{ $errors->first('shelf_id') }}</span>
                                                </div>
                                                @endif
                                                @if (isset($drawers) && $shelf_id != "")
                                                <div class="w-full col-span-1 form-group">
                                                    <label for="Drawer" class="inline-block ml-3 text-gray-700 form-label">Drawer</label>
                                                    <select {{$edit_lc != true ? 'disabled' : '' }} wire:model="drawer_id" class="block w-full m-0 text-sm font-normal transition ease-in-out bg-white border border-gray-300 border-solid rounded-full form-control bg-clip-padding focus:text-gray-700 focus:bg-white focus:outline-none focus:border-blue-800" id="drawer_id" name="drawer_id">
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
                                                        <select {{$edit_lc != true ? 'disabled' : '' }} wire:model="folder_id" class="block w-full m-0 text-sm font-normal transition ease-in-out bg-white border border-gray-300 border-solid rounded-full form-control bg-clip-padding focus:text-gray-700 focus:bg-white focus:outline-none focus:border-blue-800" id="folder_id" name="folder_id">
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
                                       <label for="attatchments" class="inline-block text-gray-700 form-label">Attatchments</label>
                                       <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                             <ul role="list"
                                                class="border border-gray-200 divide-y divide-gray-200 rounded-md" x-data="{showPreview:false}">
                                                <li class="flex items-center justify-between py-3 pl-3 pr-4 text-sm">
                                                   <div class="flex items-center flex-1 w-0">
                                                         <!-- Heroicon name: solid/paper-clip -->
                                                         <svg class="flex-shrink-0 w-5 h-5 text-gray-400"
                                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                            fill="currentColor" aria-hidden="true">
                                                            <path fill-rule="evenodd"
                                                               d="M8 4a3 3 0 00-3 3v4a5 5 0 0010 0V7a1 1 0 112 0v4a7 7 0 11-14 0V7a5 5 0 0110 0v4a3 3 0 11-6 0V7a1 1 0 012 0v4a1 1 0 102 0V7a3 3 0 00-3-3z"
                                                               clip-rule="evenodd" />
                                                         </svg>
                                                         <span class="flex-1 w-0 ml-2 truncate">
                                                            {{ str_replace(' ','_',$document->name) }}.pdf </span>
                                                   </div>
                                                   <div class="flex-shrink-0 ml-4" x-cloak x-show="showPreview == false">
                                                      <a href="{{ asset( 'storage/'.$document->path ) }}" target="_blank" 
                                                         class="font-medium text-indigo-600 hover:text-indigo-500 hover:cursor-pointer">
                                                         Show Preview
                                                      </a>
                                                   </div>
                                                   <div class="flex-shrink-0 ml-4" x-cloak x-show="showPreview">
                                                      <a x-on:click="showPreview = false"
                                                         class="font-medium text-indigo-600 hover:text-indigo-500 hover:cursor-pointer">
                                                         Hide Preview
                                                      </a>
                                                   </div>
                                                   {{-- <div class="flex-shrink-0 ml-4">
                                                         <a wire:click.prevent="downloadLegacyDocument"
                                                            class="font-medium text-indigo-600 hover:text-indigo-500 hover:cursor-pointer">
                                                            Download </a>
                                                   </div> --}}
                                                </li>
                                                <li class="flex items-center justify-between py-3 pl-3 pr-4 text-sm" x-cloak x-show="showPreview">
                                                   <div class="flex items-center flex-1 w-0">
                                                         <iframe src="{{ asset( 'storage/'.$document->path ) }}" class="block w-screen h-96" frameborder="0"></iframe>
                                                   </div>
                                                </li>
                                             </ul>
                                       </dd>
                                    </div>
                                            {{-- <div class="w-full form-group">
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
                                            </div> --}}
                                            {{-- <div class="w-full form-group">
                                                <label for="document_name" class="inline-block text-gray-700 form-label">Document Name</label>
                                                <input type="text" class="block w-full m-0 text-sm font-normal transition ease-in-out bg-white border border-gray-300 border-solid rounded-full form-control bg-clip-padding focus:text-gray-700 focus:bg-white focus:outline-none focus:border-blue-800" id="document_name" name="document_name" placeholder="Document Name" wire:model.debounce.700ms="name">
                                                <span class="text-sm italic text-red-500">{{ $errors->first('name') }}</span>
                                            </div> --}}

                                        
                                        
                                        </div>
                                       
                                    </form>
                                     <div x-data="{ open: false }">
                                        <button x-on:click="open = ! open" class="inline-flex items-center px-3 py-2 mt-10 ml-2 font-medium leading-4 text-white bg-indigo-600 border border-transparent rounded-md shadow-sm text-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                            Update
                                            <svg xmlns="http://www.w3.org/2000/svg" class="ml-2 -mr-0.5 h-6 w-7"viewBox="0 0 20 20" fill="currentColor">
                                                <path d="M5.5 13a3.5 3.5 0 01-.369-6.98 4 4 0 117.753-1.977A4.5 4.5 0 1113.5 13H11V9.413l1.293 1.293a1 1 0 001.414-1.414l-3-3a1 1 0 00-1.414 0l-3 3a1 1 0 001.414 1.414L9 9.414V13H5.5z" />
                                                <path d="M9 13h2v5a1 1 0 11-2 0v-5z" />
                                            </svg>
                                        </button>

                                          {{-- modal --}}
                    <!-- This example requires Tailwind CSS v2.0+ -->
<div x-cloak x-show="open" class="relative z-10" aria-labelledby="modal-title" role="dialog" aria-modal="true">
  <!--
    Background backdrop, show/hide based on modal state.

    Entering: "ease-out duration-300"
      From: "opacity-0"
      To: "opacity-100"
    Leaving: "ease-in duration-200"
      From: "opacity-100"
      To: "opacity-0"
  -->
  <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>

  <div class="fixed z-10 inset-0 overflow-y-auto">
    <div class="flex items-end sm:items-center justify-center min-h-full p-4 text-center sm:p-0">
      <!--
        Modal panel, show/hide based on modal state.

        Entering: "ease-out duration-300"
          From: "opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
          To: "opacity-100 translate-y-0 sm:scale-100"
        Leaving: "ease-in duration-200"
          From: "opacity-100 translate-y-0 sm:scale-100"
          To: "opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
      -->
      <div class="relative bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:max-w-lg sm:w-full">
        <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
          <div class="sm:flex sm:items-start">
            <div class="mx-auto flex-shrink-0 flex items-center justify-center h-12 w-12 rounded-full bg-red-100 sm:mx-0 sm:h-10 sm:w-10">
              <!-- Heroicon name: outline/exclamation -->
              <svg class="h-6 w-6 text-red-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
              </svg>
            </div>
            <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
              <h3 class="text-lg leading-6 font-medium text-gray-900" id="modal-title">Update Document</h3>
              <div class="mt-2">
                <p class="text-sm text-gray-500">Are you sure you want to update this document?</p>
              </div>
            </div>
          </div>
        </div>
        <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
          <button type="button" wire:click="updateDocument" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-red-600 text-base font-medium text-white hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 sm:ml-3 sm:w-auto sm:text-sm">Update</button>
          <button x-on:click="open = false" type="button" class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm" >Cancel</button>
        </div>
      </div>
    </div>
  </div>
</div>
 {{-- modal end --}} 
                                        </div>
                                </div>
                              </div>
                            @endif                            
                        </div>

                    </div>
                  
                </div>
            </div>
        </div>
    </div>
</div>
