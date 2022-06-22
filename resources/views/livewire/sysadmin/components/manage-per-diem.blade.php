<div class="w-full h-full" 
x-data ="{showSaveButton : @entangle('showSaveButton'),changes_saved:@entangle('changes_saved')}"
x-init="$watch('changes_saved', value => {
    if(value == true){
        setTimeout(function(){ changes_saved = false; }, 5000);
    } 
})">

  {{-- notification --}}
        <!-- Global notification live region, render this permanently at the end of the document -->
        <div aria-live="assertive" class="fixed inset-0 flex items-end px-4 py-6 pointer-events-none sm:p-6 sm:items-start" x-show="changes_saved" x-cloak
            x-transition-enter =  "transform ease-out duration-300 transition"
            x-transition-enter-start =  "translate-y-2 opacity-0 sm:translate-y-0 sm:translate-x-2"
            x-transition-enter-end =   "translate-y-0 opacity-100 sm:translate-x-0"
            x-transition-leave =  "transition ease-in duration-100"
            x-transition-leave-start =  "opacity-100"
            x-transition-leave-end =  "opacity-0" >
            <div class="flex flex-col items-center w-full space-y-4 sm:items-end">
          
            <div class="w-full max-w-sm overflow-hidden bg-white rounded-lg shadow-lg pointer-events-auto ring-1 ring-black ring-opacity-5" x-show="changes_saved" x-cloak
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
                    <p class="text-sm font-medium text-gray-900">Changes saved!</p>
                    <p class="mt-1 text-sm text-gray-500"></p>
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

    <form>
        <div class="grid w-full grid-cols-2 gap-x-2">
            
            <div class="col-span-1">
                <div>
                    <label for="name" class="block font-medium text-gray-700 text-md">Region</label>
                    <div class="mt-1 border-b border-gray-300 focus-within:border-indigo-600">
                    <select wire:model="selectedRegion" name="region" id="region" class="block w-full border-0 border-b border-transparent bg-gray-50 focus:border-indigo-600 focus:ring-0 sm:text-sm">
                        <option value="" class="font-bold tracking-wider">SELECT REGION</option>
                        @foreach ($per_diems as $region)
                        <option value="{{ $region->id }}" class="font-bold tracking-wider">{{ $region->region }}</option>
                        @endforeach
                    </select>
                    </div>
                </div>
            </div>
            <div class="col-span-1">
                <div>
                    <label for="per_diem" class="block font-medium text-gray-700 text-md">Per Diem</label>
                    <div class="mt-1 border-b border-gray-300 focus-within:border-indigo-600">
                    <input type="number" wire:model="per_diem" name="per_diem" id="per_diem" class="block w-full border-0 border-b border-transparent bg-gray-50 focus:border-indigo-600 focus:ring-0 sm:text-sm" placeholder="0">
                    </div>
                </div>
            </div>
            <div class="grid grid-cols-1 col-span-2 mt-2 place-items-end" x-show="showSaveButton">
                <div class="col-span-1">
                    <button x-cloak type="button" wire:click.prevent="store" class="inline-flex items-center px-4 py-2 text-sm font-medium text-white bg-indigo-600 border border-transparent rounded-md shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Save Changes</button>
                </div>
            </div>
            
        </div>
    </form>
</div>
