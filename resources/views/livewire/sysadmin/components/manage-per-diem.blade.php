<div class="w-full h-full" x-data ="{showSaveButton : @entangle('showSaveButton')}">
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
                    <input type="number" wire:model="per_diem" name="per_diem" id="per_diem" class="block w-full border-0 border-b border-transparent bg-gray-50 focus:border-indigo-600 focus:ring-0 sm:text-sm" placeholder="Jane Smith">
                    </div>
                </div>
            </div>
            <div class="grid grid-cols-1 col-span-2 mt-2 place-items-end" x-show="showSaveButton">
                <div class="col-span-1">
                    <button type="button" wire:click.prevent="store" class="inline-flex items-center px-4 py-2 text-sm font-medium text-white bg-indigo-600 border border-transparent rounded-md shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Save Changes</button>
                </div>
            </div>
            
        </div>
    </form>
</div>
