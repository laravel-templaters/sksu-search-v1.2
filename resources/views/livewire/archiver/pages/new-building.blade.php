<div class="relative z-0 flex flex-1 w-full h-screen min-w-full mx-auto -mt-20 overflow-hidden bg-transparent max-w-screen"
x-data="{building_added:@entangle('building_added'),show_building_form:@entangle('show_building_form')}"
x-init="$watch('building_added', value => {
    if(value == true){
        setTimeout(function(){ building_added = false; }, 5000);
    }
})">
        {{-- notification --}}
        <!-- Global notification live region, render this permanently at the end of the document -->
        <div aria-live="assertive" class="fixed inset-0 flex items-end px-4 py-6 pointer-events-none sm:p-6 sm:items-start" x-show="building_added" x-cloak
            x-transition-enter =  "transform ease-out duration-300 transition"
            x-transition-enter-start =  "translate-y-2 opacity-0 sm:translate-y-0 sm:translate-x-2"
            x-transition-enter-end =   "translate-y-0 opacity-100 sm:translate-x-0"
            x-transition-leave =  "transition ease-in duration-100"
            x-transition-leave-start =  "opacity-100"
            x-transition-leave-end =  "opacity-0" >
            <div class="flex flex-col items-center w-full space-y-4 sm:items-end">
          
            <div class="w-full max-w-sm overflow-hidden bg-white rounded-lg shadow-lg pointer-events-auto ring-1 ring-black ring-opacity-5" x-show="building_added" x-cloak
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
                    <p class="mt-1 text-sm text-gray-500">Check table to see added building</p>
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
                                    <h1 class="text-xl font-semibold text-gray-900">Buildings</h1>
                                    <p class="mt-2 text-sm text-gray-700"> A list of all the buildings, their codes, and shelf count</p>
                                   
                                </div>
                                <div>
                                    <label for="email" class="block text-sm font-medium text-gray-700">Search Here</label>
                                    <div class="relative mt-1 rounded-md shadow-sm">
                                        <input wire:model.debounce.700ms='searchText' type="email" name="email" id="email" class="block w-full pr-10 text-gray-900 placeholder-gray-300 border-gray-300 rounded-md focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm" placeholder="Building name or code" value="adamwathan" aria-invalid="true" aria-describedby="email-error">
                                    </div>
                                    <p class="mt-1 text-sm text-transparent" id="email-error"><span>----</span></p>
                                </div>
                                <div class="mt-4 sm:mt-0 sm:ml-5 sm:flex-none">
                                    <button type="button" wire:click="showBuildingForm" class="inline-flex items-center justify-center px-4 py-2 text-sm font-medium text-white bg-indigo-600 border border-transparent rounded-md shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 sm:w-auto">Add Building</button>
                                </div>
                                </div>
                                <div class="flex flex-col mt-8">
                                <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                                    <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
                                    <div class="overflow-hidden shadow ring-1 ring-black ring-opacity-5 md:rounded-lg">
                                        <table class="min-w-full divide-y divide-gray-300">
                                        <thead class="bg-gray-50">
                                            <tr>
                                            <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-6">Building Name</th>
                                            <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Code</th>
                                            <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Number of Shelves</th>
                                            <th scope="col" class="relative py-3.5 pl-3 pr-4 sm:pr-6">
                                                <span class="sr-only">Edit</span>
                                            </th>
                                            </tr>
                                        </thead>
                                        <tbody class="bg-white divide-y divide-gray-200">
                                            @if (count($buildings) > 0)
                                                @foreach ($buildings as $building)
                                                <tr>
                                                    <td class="py-4 pl-4 pr-3 text-sm font-medium text-gray-900 whitespace-nowrap sm:pl-6">{{ $building->building_name }}</td>
                                                    <td class="px-3 py-4 text-sm text-gray-500 whitespace-nowrap">{{ $building->building_code }}</td>
                                                    <td class="px-3 py-4 text-sm text-gray-500 whitespace-nowrap">{{ $building->shelf_slots }}</td>
                                                    <td class="relative py-4 pl-3 pr-4 text-sm font-medium text-right whitespace-nowrap sm:pr-6">
                                                        <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit<span class="sr-only">, {{  $building->building_name }}</span></a>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            @else
                                                <tr>
                                                    <td colspan="4" class="py-4 pl-4 pr-3 text-sm italic font-bold text-center text-gray-900 whitespace-nowrap sm:pl-6">No buildings were found</td>
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
        
        <div class="relative z-10" aria-labelledby="modal-title" role="dialog" aria-modal="true" x-cloak x-show="show_building_form" x-transition-enter = "ease-out duration-300"
        x-transition-enter-start =  "opacity-0"
        x-transition-enter-end =  "opacity-100"
        x-transition-leave =  "ease-in duration-200"
        x-transition-leave-start =  "opacity-100"
        x-transition-leave-end = "opacity-0" >
            <div class="fixed inset-0 transition-opacity bg-gray-500 bg-opacity-75" x-cloak x-show="show_building_form" x-transition-enter = "ease-out duration-300"
            x-transition-enter-start = "opacity-0" 
            x-transition-enter-end =  "opacity-100"
            x-transition-leave =  "ease-in duration-200"
            x-transition-leave-start =  "opacity-100"
            x-transition-leave-end =  "opacity-0"></div>
        
            <div class="fixed inset-0 z-10 overflow-y-auto">
            <div class="flex items-end justify-center min-h-full p-4 text-center sm:items-center sm:p-0">
                
                <div class="relative px-4 pt-5 pb-4 overflow-hidden text-left transition-all transform bg-white rounded-lg shadow-xl sm:my-8 sm:max-w-lg sm:w-full sm:p-6" x-cloak x-show="show_building_form"
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
                                <h3 class="text-lg font-medium leading-6 text-gray-900">Building Information</h3>
                                <p class="mt-1 text-sm text-gray-500">Use complete building names and codes</p>
                                </div>
                                <div class="grid grid-cols-1 mt-6 gap-y-6 gap-x-4 sm:grid-cols-6">
                                <div class="sm:col-span-6">
                                    <label for="building_name" class="block text-sm font-medium tracking-wider text-gray-700"> Building name </label>
                                    <div class="mt-1">
                                    <input type="text" wire:model.debounce="building_name" name="building_name" id="building_name" class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                        <span class="text-sm italic text-red-500">{{ $errors->first('building_name') }}</span>
                                    </div>
                                </div>
                        
                                <div class="sm:col-span-6">
                                    <label for="building_code" class="block text-sm font-medium tracking-wider text-gray-700"> Building Code </label>
                                    <div class="mt-1">
                                    <input type="text" wire:model.debounce='building_code' name="building_code" id="building_code" class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                        <span class="text-sm italic text-red-500">{{ $errors->first('building_code') }}</span>
                                    </div>
                                </div>
                        
                                <div class="sm:col-span-6">
                                    <label for="shelf_count" class="block text-sm font-medium tracking-wider text-gray-700"> Number of shelves in the building used for archiving </label>
                                    <div class="mt-1">
                                    <input id="shelf_count" wire:model.debounce='shelf_slots' name="shelf_count" type="number" min="1" step="1" max="999"class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                        <span class="text-sm italic text-red-500">{{ $errors->first('shelf_slots') }}</span>
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
                            <button type="button" wire:click="hideBuildingForm" class="px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-md shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Cancel</button>
                            <button type="submit" class="inline-flex justify-center px-4 py-2 ml-3 text-sm font-medium text-white bg-indigo-600 border border-transparent rounded-md shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Save</button>
                        </div>
                        </div>
                    </form>
  
                </div>
            </div>
            </div>
        </div>
  
    {{-- modal add end --}}
</div>
