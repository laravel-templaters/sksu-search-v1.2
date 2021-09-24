<div class="m-4 bg-white rounded-md">

    <form class="p-5 space-y-8 divide-y divide-gray-200"  wire:submit.prevent="submit">
    <div class="space-y-8 divide-y divide-gray-200 sm:space-y-5">
        <div>
            <div>
                <h3 class="text-3xl font-medium leading-6 text-gray-900">
                Create Travel Order
                </h3>
                <p class="max-w-2xl mt-1 text-sm text-gray-500">
                </p>
            </div>
            

            <div class="mt-6 space-y-6 sm:mt-5 sm:space-y-5">
                <div class="grid items-start grid-cols-3 gap-4 pt-5 border-t border-gray-200">
                    <label for="username" class="block pt-2 mt-px text-sm font-medium text-gray-700">
                        Name
                    </label>
                    <div class="col-span-1 mt-1">
                        <select wire:model="users_id" class="block w-full min-w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:max-w-xs sm:text-sm">
                            <option selected>--SELECT USER--</option>
                            @foreach ($users as $user)   
                            <option value="{{$user->id}}">{{$user->first_name}} {{ \Illuminate\Support\Str::limit($user->middle_name, 1, $end='.') }} {{$user->last_name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="pt-2 border-t border-gray-200 sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                    <label for="about" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">
                        Purpose
                    </label>
                    <div class="mt-1 sm:mt-0 sm:col-span-2">
                        <textarea wire:model="purpose" id="about" name="about" rows="3" class="block w-full max-w-lg border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"></textarea>
                        <p class="mt-2 text-sm text-gray-500"><span class="font-extrabold text-indigo-600">NOTE:</span> This will also serve as the entry for your disbursement voucher in the future.</p>
                        @error('purpose') <span class="text-red-700 error">{{ $message }}</span> @enderror
                    </div>
                </div>

                <div class="grid items-start grid-cols-3 grid-rows-2 gap-4 pt-2 border-t border-gray-200">
                    <label for="" class="block col-span-1 col-start-1 row-span-2 text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">
                        Place to visit
                    </label>
                    <div class="col-span-1 row-span-1 mt-1">
                        <h3 class="ml-1 text-sm text-gray-600 ">Region</h3>
                        <select wire:model="region_codes" id="country" name="country" autocomplete="country" class="block w-full min-w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:max-w-xs sm:text-sm">
                            <option selected>--SELECT REGION--</option>
                        @foreach ($regions as $region)                    
                         <option value="{{$region->region_code}}">{{$region->region_description}}</option>
                         @endforeach
                        
                        </select>
                    </div>
                    <div class="col-span-1 row-span-1 mt-1">
                        <h3 class="ml-1 text-sm text-gray-600 ">Province</h3>
                        <select wire:model="province_codes" class="block w-full min-w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:max-w-xs sm:text-sm">
                            <option selected>--SELECT PROVINCE--</option>
                        @foreach ($provinces as $province)
                        <option value="{{$province->province_code}}">{{$province->province_description}}</option>
                        @endforeach

                        </select>
                    </div>
                    <div class="col-span-1 col-start-2 row-span-1 row-start-2 mt-1">
                        <h3 class="ml-1 text-sm text-gray-600 ">City / Municipality</h3>
                        <select wire:model="city_codes" class="block w-full min-w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:max-w-xs sm:text-sm">
                            <option selected>--SELECT CITY/MUNICIPALITY--</option>
                            @foreach ($cities as $city)   
                            <option value="{{$city->city_municipality_code}}">{{$city->city_municipality_description}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-span-1 col-start-3 row-span-1 row-start-2 mt-1">
                        <h3 class="ml-1 text-sm text-gray-600 ">Others</h3>
                        <input type="text" class="block w-full min-w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:max-w-xs sm:text-sm">
                        <p class="mt-2 ml-1 text-sm text-gray-500"><span class="font-extrabold text-indigo-600">NOTE:</span> Input specific address excluding the city, province and region of your destination</p>
                    </div>
                </div>

                <div class="grid items-start grid-cols-3 gap-4 pt-2 border-t border-gray-200">
                    <label for="" class="block col-span-1 col-start-1 row-span-2 text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">
                        Registration Fee
                    </label>
                    
                        <div class="col-span-1 col-start-2 row-span-1 row-start-1 mt-1">
                            
                            <div class="relative flex items-start">
                                <input value="0" wire:model="has_registration" id="comments" aria-describedby="comments-description" name="comments" type="checkbox" class="w-4 h-4 my-auto text-indigo-600 border-gray-300 rounded focus:ring-indigo-500">                            
                                <div class="my-auto ml-3 text-sm">
                                    <label for="comments" class="font-medium text-gray-700">Has Registration</label>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-span-1 col-start-3 row-span-1 row-start-1 mt-1">
                            <h3 class="ml-1 text-sm text-gray-600 ">Registration Amount</h3>
                            <input type="text" class="block w-full min-w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:max-w-xs sm:text-sm">
                        </div>
                    
                </div>   
            </div>
        </div>

        <div class="pt-8 space-y-6 sm:pt-10 sm:space-y-5">
            <div>
                <h3 class="text-3xl font-medium leading-6 text-gray-900">
            Itinerary
                </h3>
                <p class="max-w-2xl mt-1 text-sm text-gray-500">
                itinerary for each day will be entered here
                </p>
            </div>           
        </div>

    </div>

    <div class="pt-5">
        <div class="flex justify-end">
        <button type="button" class="px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-md shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
            Cancel
        </button>
        <button type="submit" class="inline-flex justify-center px-4 py-2 ml-3 text-sm font-medium text-white bg-indigo-600 border border-transparent rounded-md shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
            Save
        </button>
        </div>
    </div>
    </form>

</div>



