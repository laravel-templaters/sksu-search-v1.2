<div class="w-full h-screen min-w-full px-4 mx-auto max-w-screen">
    <div class="container mx-auto my-4">
        <div class="flex flex-col">
            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
                    <div
                        class="overflow-hidden border-b border-gray-200 shadow-md shadow-primary-500/50 sm:rounded-lg bg-gray-50 ">
                        <div class="overflow-hidden bg-white shadow sm:rounded-lg">
                            <div class="sticky top-0 px-4 py-5 sm:px-6">
                                <h3 class="text-lg font-medium leading-6 text-gray-900">Document Information</h3>
                                <p class="max-w-2xl mt-1 text-sm text-gray-500">@if ($islegacy)
                                   Legacy Document Details
                                @endif</p>
                            </div>
                            @if ($islegacy)
                              <div class="px-4 py-5 border-t border-gray-200 sm:p-0">
                                 <dl class="sm:divide-y sm:divide-gray-200">
                                    <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                       <dt class="text-sm font-medium text-gray-500">Document Name</dt>
                                       <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">{{ $document->name }}</dd>
                                    </div>
                                    <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                       <dt class="text-sm font-medium text-gray-500">Document Code</dt>
                                       <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2"> {{ $document->document_code }}</dd>
                                       </dd>
                                    </div>
                                    
                                    <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                       <dt class="text-sm font-medium text-gray-500">Document Location <br/>( Building / Shelf / Drawer / Folder )</dt>
                                       <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">{{ $document->building->building_name }} / {{ $document->shelf->shelf_name }} / {{ $document->drawer->drawer_name }} / {{ $document->folder->folder_name }}</dd>
                                       </dd>
                                    </div>
                                    <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                       <dt class="text-sm font-medium text-gray-500">Upload Date</dt>
                                       <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">{{ $document->created_at->format('F d, Y') }}</dd>
                                    </div>
                                    <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                       <dt class="text-sm font-medium text-gray-500">Attachments</dt>
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
                                                      <a x-on:click="showPreview = true"
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
                                                   <div class="flex-shrink-0 ml-4">
                                                         <a wire:click.prevent="downloadLegacyDocument"
                                                            class="font-medium text-indigo-600 hover:text-indigo-500 hover:cursor-pointer">
                                                            Download </a>
                                                   </div>
                                                </li>
                                                <li class="flex items-center justify-between py-3 pl-3 pr-4 text-sm" x-cloak x-show="showPreview">
                                                   <div class="flex items-center flex-1 w-0">
                                                         <iframe src="{{ asset( 'storage/'.$document->path ) }}" class="block w-screen h-96" frameborder="0"></iframe>
                                                   </div>
                                                </li>
                                             </ul>
                                       </dd>
                                    </div>
                                 </dl>
                              </div>
                            @endif                            
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
