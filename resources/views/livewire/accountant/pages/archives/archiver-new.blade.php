<div class="relative z-0 flex flex-1 w-full h-screen min-w-full mx-auto -mt-20 overflow-hidden bg-transparent max-w-screen"
x-data="{folderSelected : @entangle('folderSelected'),buildingSelected : @entangle('buildingSelected'), shelfSelected:@entangle('shelfSelected'), drawerSelected:@entangle('drawerSelected')}">
    <div class="relative z-0 flex-1 overflow-y-auto focus:outline-none xl:order-last">
        <div class="absolute inset-0 px-4 py-6 sm:px-6 lg:px-8">
            <div class="flex flex-col mx-5">
                <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
                        <div class="overflow-hidden border-b border-gray-200 shadow-md shadow-primary-500/50 sm:rounded-lg bg-gray-50 ">
                            {{-- buildings --}}
                            <div class="flex justify-between max-w-full m-4 " x-show="buildingSelected == false">
                                <div class="flex justify-start max-w-full m-4 ">
                                    @foreach ($buildings as $building)
                                    <div x-data="{isSelected:false}">
                                         <div class="flex p-2 m-3 border-4 border-black rounded-lg group hover:cursor-pointer" :class="isSelected == true ? 'bg-blue-600 text-white' : 'bg-gray-100 text-gray-900'" x-on:click="isSelected = !isSelected; $wire.selectBuilding('{{ $building->id }}')">
                                             <svg xmlns="http://www.w3.org/2000/svg" class="w-auto h-20 font-thin group-hover:cursor-pointer" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1">
                                                 <path stroke-linecap="round" stroke-linejoin="round" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                                             </svg>
                                             <div class="my-2 ml-4 group-hover:cursor-pointer">
                                                 <div class="text-lg font-medium leading-6 ">
                                                     {{ $building->building_name }}
                                                 </div>
                                                 <div class="text-sm leading-5 ">
                                                     Shelves : {{ $building->shelf_slots }}
                                                 </div>
                                                 <div class="text-sm leading-5 ">
                                                     Building Code : {{ $building->building_code }}
                                                 </div>
                                             </div>
                                         </div>
                                     </div>                                     
                                    @endforeach
                                </div>
                            </div>
                            {{-- shelves --}}
                            <div x-cloak x-show="buildingSelected == true && shelfSelected == false"
                             class="flex justify-between max-w-full m-4 ">
                                <div class="flex justify-start max-w-full m-4 ">
                                    @if (isset($shelves))
                                        @foreach ($shelves as $shelf)
                                        <div x-data="{isSelected:false}">
                                            <div class="flex p-2 m-3 border-4 border-black rounded-lg group hover:cursor-pointer" :class="isSelected == true ? 'bg-blue-600 text-white' : 'bg-gray-100 text-gray-900'" x-on:click="isSelected = !isSelected; $wire.selectShelf('{{ $shelf->id }}')">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="w-auto h-20 font-thin group-hover:cursor-pointer"  viewBox="0 0 64 64"><path d="M58,2a3,3,0,0,0-3,3V18H51V8a1,1,0,0,0-1-1H14a1,1,0,0,0-1,1V18H9V5A3,3,0,0,0,3,5V61a1,1,0,0,0,1,1H8a1,1,0,0,0,1-1V55H55v6a1,1,0,0,0,1,1h4a1,1,0,0,0,1-1V5A3,3,0,0,0,58,2ZM27,49V35h2v3a1,1,0,0,0,1,1h4a1,1,0,0,0,1-1V35h2V49ZM15,49V35h2v3a1,1,0,0,0,1,1h4a1,1,0,0,0,1-1V35h2V49Zm4-14h2v2H19Zm12,0h2v2H31Zm8,0h2v3a1,1,0,0,0,1,1h4a1,1,0,0,0,1-1V35h2V49H39Zm4,0h2v2H43Zm7-2H14a1,1,0,0,0-1,1V49H9V24H26v4a1,1,0,0,0,1,1H37a1,1,0,0,0,1-1V24H55V49H51V34A1,1,0,0,0,50,33ZM28,24h8v3H28Zm21-6H39V9h2v3a1,1,0,0,0,1,1h4a1,1,0,0,0,1-1V9h2ZM45,9v2H43V9Zm-8,9H27V9h2v3a1,1,0,0,0,1,1h4a1,1,0,0,0,1-1V9h2ZM33,9v2H31V9ZM21,9v2H19V9ZM15,9h2v3a1,1,0,0,0,1,1h4a1,1,0,0,0,1-1V9h2v9H15ZM55,20v2H9V20ZM7,60H5V5A1,1,0,0,1,7,5Zm2-7V51H55v2Zm50,7H57V5a1,1,0,0,1,2,0Z"/></svg>
                                                <div class="my-2 ml-4 group-hover:cursor-pointer">
                                                    <div class="text-lg font-medium leading-6 ">
                                                        {{ $shelf->shelf_name }} | Code: {{ $shelf->shelf_code }}
                                                    </div>
                                                    <div class="text-sm leading-5 ">
                                                        Shelves : {{ $shelf->drawer_slots }}
                                                    </div>
                                                    <div class="text-sm leading-5 ">
                                                        Building Code : {{ $shelf->building->building_code }}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>                                     
                                        @endforeach
                                    @endif
                                </div>
                            </div>
                            {{-- drawers --}}
                            <div x-cloak x-show="shelfSelected == true && drawerSelected == false"
                            class="flex justify-between max-w-full m-4 ">
                               <div class="flex justify-start max-w-full m-4 ">
                                   @if (isset($drawers))
                                   @foreach ($drawers as $drawer)
                                   <div x-data="{isSelected:false}">
                                        <div class="flex p-2 m-3 border-4 border-black rounded-lg group hover:cursor-pointer" :class="isSelected == true ? 'bg-blue-600 text-white' : 'bg-gray-100 text-gray-900'" x-on:click="isSelected = !isSelected; $wire.selectDrawer('{{ $drawer->id }}')">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-auto h-20" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                                              </svg>
                                            <div class="my-2 ml-4 group-hover:cursor-pointer">
                                                <div class="text-lg font-medium leading-6 ">
                                                    {{ $drawer->drawer_name }} | Code: {{ $drawer->drawer_code }}
                                                </div>
                                                <div class="text-sm leading-5 ">
                                                    Shelves : {{ $drawer->folder_slots }}
                                                </div>
                                                <div class="text-sm leading-5 ">
                                                    Building Code : {{ $drawer->shelf->shelf_code }}
                                                </div>
                                            </div>
                                        </div>
                                    </div>                                     
                                   @endforeach
                                   @endif
                               </div>
                           </div>
                            {{-- folders --}}
                            <div x-cloak x-show="drawerSelected == true && folderSelected == false" class="flex justify-between max-w-full m-4 ">
                                <div class="flex justify-start max-w-full m-4 ">
                                    @if (isset($folders))
                                    @foreach ($folders as $folder)
                                    <div x-data="{isSelected:false}">
                                         <div class="flex p-2 m-3 border-4 border-black rounded-lg group hover:cursor-pointer" :class="isSelected == true ? 'bg-blue-600 text-white' : 'bg-gray-100 text-gray-900'" x-on:click="isSelected = !isSelected; $wire.selectFolder('{{ $folder->id }}')">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-auto h-20" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 19a2 2 0 01-2-2V7a2 2 0 012-2h4l2 2h4a2 2 0 012 2v1M5 19h14a2 2 0 002-2v-5a2 2 0 00-2-2H9a2 2 0 00-2 2v5a2 2 0 01-2 2z" />
                                              </svg>
                                             <div class="my-2 ml-4 group-hover:cursor-pointer">
                                                 <div class="text-lg font-medium leading-6 ">
                                                     {{ $folder->folder_name }} | Code: {{ $folder->folder_code }}
                                                 </div>
                                                 <div class="text-sm leading-5 ">
                                                     Shelves : {{ $folder->slot_number }}
                                                 </div>
                                                 <div class="text-sm leading-5 ">
                                                     Building Code : {{ $folder->drawer->drawer_code }}
                                                 </div>
                                             </div>
                                         </div>
                                     </div>                                     
                                    @endforeach
                                    @endif
                                </div>
                            </div>
                            {{-- documentForm --}}
                            <div x-cloak x-show="folderSelected" class="justify-between block min-w-full p-2 m-4 ">
                                <div class="justify-start block max-w-full m-4">
                                    @if ($selectedFolder != null )
                                        @livewire('archiver.pages.select-disbursement-voucher', ['selectedFolder' => $selectedFolder, 'selectedDrawer' => $selectedDrawer, 'selectedShelf' => $selectedShelf, 'selectedBuilding' => $selectedBuilding])
                                    @endif
                                </div>
                            </div>             
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <aside class="relative flex-shrink-0 hidden overflow-hidden xl:order-first xl:flex xl:flex-col w-96">
        <div class="py-6 pl-8 bg-red">
            <div class="flex-shrink max-w-full max-h-full p-3 space-y-2 rounded-md shadow-md bg-gray-50 shadow-primary-500/50">
                <div class="font-extrabold tracking-wider text-md">Tags:</div>
                @if (isset($selectedBuilding))
                <div class="flex justify-between px-3 py-1 text-sm leading-5 bg-gray-200 rounded-full">
                    <div class="flex my-auto">                       
                            {{ $selectedBuilding->building_name }}                       
                    </div>
                    <div wire:click.prevent="deselectBuilding" class="hover:cursor-pointer" :class="shelfSelected == true ? 'pointer-events-none':''">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                          </svg>
                    </div>
                </div>
                @endif
                @if (isset($selectedShelf))
                <div class="flex justify-between px-3 py-1 ml-4 text-sm leading-5 bg-gray-200 rounded-full">
                    <div class="flex my-auto">                       
                            {{ $selectedShelf->shelf_name }}                       
                    </div>
                    <div wire:click.prevent="deselectShelf" class="hover:cursor-pointer" :class="drawerSelected == true ? 'pointer-events-none':''">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                          </svg>
                    </div>
                </div>
                @endif
                @if (isset($selectedDrawer))
                <div class="flex justify-between px-3 py-1 ml-8 text-sm leading-5 bg-gray-200 rounded-full">
                    <div class="flex my-auto">                       
                            {{ $selectedDrawer->drawer_name }}                       
                    </div>
                    <div wire:click.prevent="deselectDrawer" class="hover:cursor-pointer" :class="folderSelected == true ? 'pointer-events-none':''">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                          </svg>
                    </div>
                </div>
                @endif
                @if (isset($selectedFolder))
                <div class="flex justify-between px-3 py-1 text-sm leading-5 bg-gray-200 rounded-full ml-14">
                    <div class="flex my-auto">                       
                            {{ $selectedFolder->folder_name }}                       
                    </div>
                    <div wire:click.prevent="deselectFolder" class="hover:cursor-pointer">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                          </svg>
                    </div>
                </div>
                @endif
            </div>
        </div>
        @livewire('archiver.components.sidenav')
        
    </aside>
</div>
