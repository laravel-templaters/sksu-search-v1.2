<div class="relative z-0 flex flex-1 w-full h-screen min-w-full mx-auto -mt-20 overflow-hidden bg-transparent max-w-screen"
x-data="{drawer_added:@entangle('drawer_added'),show_drawer_form:@entangle('show_drawer_form'), show_edit_drawer:@entangle('show_edit_drawer')}"
x-init="$watch('drawer_added', value => {
    if(value == true){
        setTimeout(function(){ drawer_added = false; }, 5000);
    }
})">
        {{-- notification --}}
        <!-- Global notification live region, render this permanently at the end of the document -->
        <div aria-live="assertive" class="fixed inset-0 flex items-end px-4 py-6 pointer-events-none sm:p-6 sm:items-start" x-show="drawer_added" x-cloak
            x-transition-enter =  "transform ease-out duration-300 transition"
            x-transition-enter-start =  "translate-y-2 opacity-0 sm:translate-y-0 sm:translate-x-2"
            x-transition-enter-end =   "translate-y-0 opacity-100 sm:translate-x-0"
            x-transition-leave =  "transition ease-in duration-100"
            x-transition-leave-start =  "opacity-100"
            x-transition-leave-end =  "opacity-0" >
            <div class="flex flex-col items-center w-full space-y-4 sm:items-end">
          
            <div class="w-full max-w-sm overflow-hidden bg-white rounded-lg shadow-lg pointer-events-auto ring-1 ring-black ring-opacity-5" x-show="drawer_added" x-cloak
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
                    <p class="mt-1 text-sm text-gray-500">Check table to see added drawer</p>
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
        
    <div class="relative z-0 flex-1 overflow-y-auto focus:outline-none xl:order-last">
        <div class="absolute inset-0 px-4 py-6 sm:px-6 lg:px-8">
            <div class="flex flex-col mx-5">
                <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
                        <div class="overflow-hidden border-b border-gray-200 shadow-md shadow-primary-500/50 sm:rounded-lg bg-gray-50 ">
                           
                            <div class="px-4 py-8 sm:px-6 lg:px-8">
                                <div class="sm:flex sm:items-center">
                                <div class="sm:flex-auto">
                                    <h1 class="text-xl font-semibold text-gray-900">Drawers</h1>
                                    <p class="mt-2 text-sm text-gray-700"> A list of all the drawers, their codes, folder count, and what shelf and building they're in.</p>
                                   
                                </div>
                                <div>
                                    <label for="email" class="block text-sm font-medium text-gray-700">Search Here</label>
                                    <div class="relative mt-1 rounded-md shadow-sm">
                                        <input wire:model.debounce.700ms='searchText' type="email" name="email" id="email" class="block w-full pr-10 text-gray-900 placeholder-gray-300 border-gray-300 rounded-md focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm" placeholder="Drawer name or code" value="" aria-invalid="true" aria-describedby="email-error">
                                    </div>
                                    <p class="mt-1 text-sm text-transparent" id="email-error"><span>----</span></p>
                                </div>
                                <div class="mt-4 sm:mt-0 sm:ml-5 sm:flex-none">
                                    <button type="button" wire:click="showDrawerForm" class="inline-flex items-center justify-center px-4 py-2 text-sm font-medium text-white bg-indigo-600 border border-transparent rounded-md shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 sm:w-auto">Add Drawer</button>
                                </div>
                                </div>
                                <div class="flex flex-col mt-8">
                                <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                                    <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
                                    <div class="overflow-hidden shadow ring-1 ring-black ring-opacity-5 md:rounded-lg">
                                        <table class="min-w-full divide-y divide-gray-300">
                                        <thead class="bg-gray-50">
                                            <tr>
                                            <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-6">Drawer Name</th>
                                            <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Code</th>
                                            <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Number of Folders</th>
                                            <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Shelf</th>
                                            <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Building</th>
                                            <th scope="col" class="relative py-3.5 pl-3 pr-4 sm:pr-6">
                                                <span class="sr-only">Edit</span>
                                            </th>
                                            </tr>
                                        </thead>
                                        <tbody class="bg-white divide-y divide-gray-200">
                                            @if (count($drawers) > 0)
                                                @foreach ($drawers as $drawer)
                                                <tr>
                                                    <td class="py-4 pl-4 pr-3 text-sm font-medium text-gray-900 whitespace-nowrap sm:pl-6">{{ $drawer->drawer_name }}</td>
                                                    <td class="px-3 py-4 text-sm text-gray-500 whitespace-nowrap">{{ $drawer->drawer_code }}</td>
                                                    <td class="px-3 py-4 text-sm text-gray-500 whitespace-nowrap">{{ $drawer->folder_slots }}</td>
                                                    <td class="px-3 py-4 text-sm text-gray-500 whitespace-nowrap">{{ $drawer->shelf->shelf_name }}</td>
                                                    <td class="px-3 py-4 text-sm text-gray-500 whitespace-nowrap">{{ $drawer->shelf->building->building_name }}</td>
                                                    <td class="relative py-4 pl-3 pr-4 text-sm font-medium text-right whitespace-nowrap sm:pr-6">
                                                        <a wire:click="showEditDrawerForm({{$drawer->id}})" class="text-indigo-600 hover:text-indigo-900 hover:cursor-pointer">Edit<span class="sr-only">, {{ $drawer->drawer_name }}</span></a>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            @else
                                                <tr>
                                                    <td colspan="5" class="py-4 pl-4 pr-3 text-sm italic font-bold text-center text-gray-900 whitespace-nowrap sm:pl-6">No drawers were found</td>
                                                </tr>
                                            @endif
                                        </tbody>
                                        </table>
                                    </div>
                                    </div>
                                </div>
                                </div>
                            </div>
  
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- modal add --}}
        
        <div class="relative z-10" aria-labelledby="modal-title" role="dialog" aria-modal="true" x-cloak x-show="show_drawer_form" x-transition-enter = "ease-out duration-300"
        x-transition-enter-start =  "opacity-0"
        x-transition-enter-end =  "opacity-100"
        x-transition-leave =  "ease-in duration-200"
        x-transition-leave-start =  "opacity-100"
        x-transition-leave-end = "opacity-0" >
            <div class="fixed inset-0 transition-opacity bg-gray-500 bg-opacity-75" x-cloak x-show="show_drawer_form" x-transition-enter = "ease-out duration-300"
            x-transition-enter-start = "opacity-0" 
            x-transition-enter-end =  "opacity-100"
            x-transition-leave =  "ease-in duration-200"
            x-transition-leave-start =  "opacity-100"
            x-transition-leave-end =  "opacity-0"></div>
        
            <div class="fixed inset-0 z-10 overflow-y-auto">
            <div class="flex items-end justify-center min-h-full p-4 text-center sm:items-center sm:p-0">
                
                <div class="relative px-4 pt-5 pb-4 overflow-hidden text-left transition-all transform bg-white rounded-lg shadow-xl sm:my-8 sm:max-w-lg sm:w-full sm:p-6" x-cloak x-show="show_drawer_form"
                x-transition-enter = "ease-out duration-300"
                x-transition-enter-start = "opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" 
                x-transition-enter-end =  "opacity-100 translate-y-0 sm:scale-100"
                x-transition-leave =  "ease-in duration-200"
                x-transition-leave-start =  "opacity-100 translate-y-0 sm:scale-100"
                x-transition-leave-end =  "opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95">
                 
                    <form class="space-y-8 divide-y divide-gray-200" wire:submit.prevent='store'>
                        <div class="space-y-8 divide-y divide-gray-200">
                        
                    
                            <div class="pt-8">
                                <div>
                                <h3 class="text-lg font-medium leading-6 text-gray-900">Drawer Information</h3>
                                <p class="mt-1 text-sm text-gray-500">Use complete drawer names and codes</p>
                                </div>
                                <div class="grid grid-cols-1 mt-6 gap-y-6 gap-x-4 sm:grid-cols-6">
                                    <div class="sm:col-span-3">
                                        <label for="building_id" class="block text-sm font-medium text-gray-700">Select Building</label>
                                        <div class="mt-1">
                                        <select id="building_id" name="building_id" wire:model="building_id"  class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                            <option value="">---Select Building---</option>
                                            @foreach ($buildings as $building)
                                                <option value="{{ $building->id }}">{{ $building->building_name }}</option>
                                           @endforeach
                                        </select>
                                        <span class="text-sm italic text-red-500">{{ $errors->first('building_id') }}</span>
                                        </div>
                                    </div>
                                    <div class="sm:col-span-3">
                                        <label for="shelf_id" class="block text-sm font-medium text-gray-700">Select Shelf</label>
                                        <div class="mt-1">
                                        <select id="shelf_id" name="shelf_id" wire:model="shelf_id"  class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                            <option value="">---Select shelf---</option>
                                           @if ($building_id != null)
                                               @if (isset($shelves))
                                                    @foreach ($shelves as $shelf)
                                                    <option value="{{ $shelf->id }}">{{ $shelf->shelf_name }}</option>
                                                    @endforeach
                                               @endif
                                           @endif
                                        </select>
                                        <span class="text-sm italic text-red-500">{{ $errors->first('shelf_id') }}</span>
                                        </div>
                                    </div>
                                <div class="sm:col-span-6">
                                    <label for="drawer_name" class="block text-sm font-medium tracking-wider text-gray-700"> Drawer name </label>
                                    <div class="mt-1">
                                    <input type="text" wire:model.debounce="drawer_name" name="drawer_name" id="drawer_name" class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                        <span class="text-sm italic text-red-500">{{ $errors->first('drawer_name') }}</span>
                                    </div>
                                </div>
                        
                                <div class="sm:col-span-6">
                                    <label for="drawer_code" class="block text-sm font-medium tracking-wider text-gray-700"> Drawer Code </label>
                                    <div class="mt-1">
                                    <input type="text" wire:model.debounce='drawer_code' name="drawer_code" id="drawer_code" class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                        <span class="text-sm italic text-red-500">{{ $errors->first('drawer_code') }}</span>
                                    </div>
                                </div>
                        
                                <div class="sm:col-span-6">
                                    <label for="folder_slots" class="block text-sm font-medium tracking-wider text-gray-700"> Number of folders in the drawer</label>
                                    <div class="mt-1">
                                    <input id="folder_slots" wire:model.debounce='folder_slots' name="folder_slots" type="number" min="1" step="1" max="999"class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                        <span class="text-sm italic text-red-500">{{ $errors->first('folder_slots') }}</span>
                                    </div>
                                </div>
{{--                         
                                <div class="sm:col-span-3">
                                    <label for="country" class="block text-sm font-medium text-gray-700"> Country </label>
                                    <div class="mt-1">
                                    <select id="country" name="country" autocomplete="country-name" class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                        <option>United States</option>
                                        <option>Canada</option>
                                        <option>Mexico</option>
                                    </select>
                                    </div>
                                </div> --}}
                        
                        
                                {{-- <div class="sm:col-span-2">
                                    <label for="postal-code" class="block text-sm font-medium text-gray-700"> ZIP / Postal code </label>
                                    <div class="mt-1">
                                    <input type="text" name="postal-code" id="postal-code" autocomplete="postal-code" class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                    </div>
                                </div> --}}
                                </div>
                            </div>
                    
                       
                        </div>
                    
                        <div class="pt-5">
                        <div class="flex justify-end">
                            <button type="button" wire:click="hideDrawerForm" class="px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-md shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Cancel</button>
                            <button type="submit" class="inline-flex justify-center px-4 py-2 ml-3 text-sm font-medium text-white bg-indigo-600 border border-transparent rounded-md shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Save</button>
                        </div>
                        </div>
                    </form>
  
                </div>
            </div>
            </div>
        </div>
  
    {{-- modal add end --}}
       {{-- modal edit --}}
        
        <div class="relative z-10" aria-labelledby="modal-title" role="dialog" aria-modal="true" x-cloak x-show="show_edit_drawer" x-transition-enter = "ease-out duration-300"
        x-transition-enter-start =  "opacity-0"
        x-transition-enter-end =  "opacity-100"
        x-transition-leave =  "ease-in duration-200"
        x-transition-leave-start =  "opacity-100"
        x-transition-leave-end = "opacity-0" >
            <div class="fixed inset-0 transition-opacity bg-gray-500 bg-opacity-75" x-cloak x-show="show_edit_drawer" x-transition-enter = "ease-out duration-300"
            x-transition-enter-start = "opacity-0" 
            x-transition-enter-end =  "opacity-100"
            x-transition-leave =  "ease-in duration-200"
            x-transition-leave-start =  "opacity-100"
            x-transition-leave-end =  "opacity-0"></div>
        
            <div class="fixed inset-0 z-10 overflow-y-auto">
            <div class="flex items-end justify-center min-h-full p-4 text-center sm:items-center sm:p-0">
                
                <div class="relative px-4 pt-5 pb-4 overflow-hidden text-left transition-all transform bg-white rounded-lg shadow-xl sm:my-8 sm:max-w-lg sm:w-full sm:p-6" x-cloak x-show="show_edit_drawer"
                x-transition-enter = "ease-out duration-300"
                x-transition-enter-start = "opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" 
                x-transition-enter-end =  "opacity-100 translate-y-0 sm:scale-100"
                x-transition-leave =  "ease-in duration-200"
                x-transition-leave-start =  "opacity-100 translate-y-0 sm:scale-100"
                x-transition-leave-end =  "opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95">
                 
                    <form class="space-y-8 divide-y divide-gray-200" wire:submit.prevent='updateDrawer'>
                        <div class="space-y-8 divide-y divide-gray-200">
                        
                    
                            <div class="pt-8">
                                <div>
                                <h3 class="text-lg font-medium leading-6 text-gray-900">Drawer Information</h3>
                                <p class="mt-1 text-sm text-gray-500">Use complete drawer names and codes</p>
                                </div>
                                <div class="grid grid-cols-1 mt-6 gap-y-6 gap-x-4 sm:grid-cols-6">
                                    <div class="sm:col-span-3">
                                        <label for="building_id" class="block text-sm font-medium text-gray-700">Select Building</label>
                                        <div class="mt-1">
                                        <select id="building_id" name="building_id" wire:model="building_id"  class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                            <option value="">---Select Building---</option>
                                            @foreach ($buildings as $building)
                                                <option value="{{ $building->id }}">{{ $building->building_name }}</option>
                                           @endforeach
                                        </select>
                                        <span class="text-sm italic text-red-500">{{ $errors->first('building_id') }}</span>
                                        </div>
                                    </div>
                                    <div class="sm:col-span-3">
                                        <label for="edited_shelf_id" class="block text-sm font-medium text-gray-700">Select Shelf</label>
                                        <div class="mt-1">
                                        <select id="edited_shelf_id" name="edited_shelf_id" wire:model="edited_shelf_id"  class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                            <option value="">---Select shelf---</option>
                                           @if ($building_id != null)
                                               @if (isset($shelves))
                                                    
                                                    @foreach ($shelves as $shelves)
                                                    <option value="{{ $shelves->id }}">{{ $shelves->shelf_name }}</option>
                                                    @endforeach
                                               @endif
                                           @endif
                                        </select>
                                        <span class="text-sm italic text-red-500">{{ $errors->first('edited_shelf_id') }}</span>
                                        </div>
                                    </div>
                                <div class="sm:col-span-6">
                                    <label for="edited_drawer_name" class="block text-sm font-medium tracking-wider text-gray-700"> Drawer name </label>
                                    <div class="mt-1">
                                    <input type="text" wire:model.debounce="edited_drawer_name" name="edited_drawer_name" id="edited_drawer_name" class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                        <span class="text-sm italic text-red-500">{{ $errors->first('edited_drawer_name') }}</span>
                                    </div>
                                </div>
                        
                                <div class="sm:col-span-6">
                                    <label for="drawer_code" class="block text-sm font-medium tracking-wider text-gray-700"> Drawer Code </label>
                                    <div class="mt-1">
                                    <input type="text" wire:model.debounce='edited_drawer_code' name="edited_drawer_code" id="edited_drawer_code" class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                        <span class="text-sm italic text-red-500">{{ $errors->first('edited_drawer_code') }}</span>
                                    </div>
                                </div>
                        
                                <div class="sm:col-span-6">
                                    <label for="edited_folder_slots" class="block text-sm font-medium tracking-wider text-gray-700"> Number of folders in the drawer</label>
                                    <div class="mt-1">
                                    <input id="edited_folder_slots" wire:model.debounce='edited_folder_slots' name="edited_folder_slots" type="number" min="1" step="1" max="999"class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                        <span class="text-sm italic text-red-500">{{ $errors->first('edited_folder_slots') }}</span>
                                    </div>
                                </div>
{{--                         
                                <div class="sm:col-span-3">
                                    <label for="country" class="block text-sm font-medium text-gray-700"> Country </label>
                                    <div class="mt-1">
                                    <select id="country" name="country" autocomplete="country-name" class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                        <option>United States</option>
                                        <option>Canada</option>
                                        <option>Mexico</option>
                                    </select>
                                    </div>
                                </div> --}}
                        
                        
                                {{-- <div class="sm:col-span-2">
                                    <label for="postal-code" class="block text-sm font-medium text-gray-700"> ZIP / Postal code </label>
                                    <div class="mt-1">
                                    <input type="text" name="postal-code" id="postal-code" autocomplete="postal-code" class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                    </div>
                                </div> --}}
                                </div>
                            </div>
                    
                       
                        </div>
                    
                        <div class="pt-5">
                        <div class="flex justify-end">
                            <button type="button" wire:click="hideEditDrawerForm" class="px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-md shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Cancel</button>
                            <button type="submit" class="inline-flex justify-center px-4 py-2 ml-3 text-sm font-medium text-white bg-indigo-600 border border-transparent rounded-md shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Save</button>
                        </div>
                        </div>
                    </form>
  
                </div>
            </div>
            </div>
        </div>
  
    {{-- modal edit end --}}
</div>
