<div class="m-4 bg-white rounded-md">

    <form class="p-5 space-y-8 divide-y divide-gray-200">
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
                        <input type="text" name="username" id="username" class="flex-1 block w-full min-w-0 border-gray-300 rounded-md focus:ring-indigo-500 focus:border-indigo-500 rounded-r-md sm:text-sm" placeholder="Applicant Name">
                    </div>
                </div>

                <div class="pt-2 border-t border-gray-200 sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                    <label for="about" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">
                        Purpose
                    </label>
                    <div class="mt-1 sm:mt-0 sm:col-span-2">
                        <textarea id="about" name="about" rows="3" class="block w-full max-w-lg border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"></textarea>
                        <p class="mt-2 text-sm text-gray-500"><span class="font-extrabold text-indigo-600">NOTE:</span> This will also serve as the entry for your disbursement voucher in the future.</p>
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
                        <select  class="block w-full min-w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:max-w-xs sm:text-sm">
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
                                <input id="comments" aria-describedby="comments-description" name="comments" type="checkbox" class="w-4 h-4 my-auto text-indigo-600 border-gray-300 rounded focus:ring-indigo-500">                            
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
            {{-- First --}}
                <div class="p-2 space-y-5 bg-gray-600 rounded-md">
                    <div class="grid items-start grid-cols-3 gap-2">
                        <div class="col-span-1">
                            <h3 class="ml-1 text-sm text-gray-300 ">Date</h3>
                            <input type="Date" class="block w-full min-w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:max-w-xs sm:text-sm">
                        </div>                    
                        <div class="col-span-1">
                            <h3 class="ml-1 text-sm text-gray-300 ">Covered by Registration Fee</h3>
                            <div class="relative flex items-start gap-1 ml-3">
                            
                                <input id="breakfast" aria-describedby="comments-description" name="breakfast" type="checkbox" class="w-4 h-4 my-auto ml-3 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500">                            
                                <div class="my-autotext-sm">
                                    <label for="breakfast" class="font-medium text-gray-300 uppercase">Breakfast</label>
                                </div>

                                <input id="lunch" aria-describedby="comments-description" name="lunch" type="checkbox" class="w-4 h-4 my-auto ml-3 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500">                            
                                <div class="my-auto text-sm">
                                    <label for="lunch" class="font-medium text-gray-300 uppercase">lunch</label>
                                </div>

                                <input id="dinner" aria-describedby="comments-description" name="dinner" type="checkbox" class="w-4 h-4 my-auto ml-3 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500">                            
                                <div class="my-auto text-sm">
                                    <label for="dinner" class="font-medium text-gray-300 uppercase">dinner</label>
                                </div>

                                <input id="lodging" aria-describedby="comments-description" name="lodging" type="checkbox" class="w-4 h-4 my-auto ml-3 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500">                            
                                <div class="my-auto text-sm">
                                    <label for="lodging" class="font-medium text-gray-300 uppercase">lodging</label>
                                </div>
                                
                            </div>
                        </div> 
                        <div class="col-span-1">
                            <h3 class="ml-1 text-sm text-gray-300 ">Per Diem</h3>
                            <input type="text" class="block w-full min-w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:max-w-xs sm:text-sm" disabled>
                        </div>
                        
                        <div class="col-span-3 gap-2 p-2 bg-gray-300 rounded-md">
                            <div class="grid grid-cols-2 gap-2 p-2 border border-gray-700 rounded-md">
                                <div class="col-span-2">
                                    <h3 class="ml-1 text-sm text-gray-600 ">Place to be visited</h3>
                                    <input type="text" class="block w-full min-w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:max-w-xs sm:text-sm">
                                </div>
                                <div class="col-span-1">
                                    <h3 class="ml-1 text-sm text-gray-600 ">Departure Time</h3>
                                    <input type="time" class="block w-full min-w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:max-w-xs sm:text-sm">
                                </div>
                                <div class="col-span-1">
                                    <h3 class="ml-1 text-sm text-gray-600 ">Arrival Time</h3>
                                    <input type="time" class="block w-full min-w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:max-w-xs sm:text-sm">
                                </div>
                                <div class="col-span-1">
                                    <h3 class="ml-1 text-sm text-gray-600 ">Mode Of Transport</h3>
                                    <input type="text" class="block w-full min-w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:max-w-xs sm:text-sm">
                                </div>
                                <div class="col-span-1">
                                    <h3 class="ml-1 text-sm text-gray-600 ">Transportation Expense</h3>
                                    <input type="number" class="block w-full min-w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:max-w-xs sm:text-sm">
                                </div>
                            </div>
                            @foreach($inputsSub as $keySub => $subValue)
                                <div class="grid grid-cols-2 gap-2 p-2 mt-2 border border-gray-700 rounded-md">
                                    <div class="col-span-2">
                                        <h3 class="ml-1 text-sm text-gray-600 ">Place to be visited</h3>
                                        <input type="text" class="block w-full min-w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:max-w-xs sm:text-sm">
                                    </div>
                                    <div class="col-span-1">
                                        <h3 class="ml-1 text-sm text-gray-600 ">Departure Time</h3>
                                        <input type="time" class="block w-full min-w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:max-w-xs sm:text-sm">
                                    </div>
                                    <div class="col-span-1">
                                        <h3 class="ml-1 text-sm text-gray-600 ">Arrival Time</h3>
                                        <input type="time" class="block w-full min-w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:max-w-xs sm:text-sm">
                                    </div>
                                    <div class="col-span-1">
                                        <h3 class="ml-1 text-sm text-gray-600 ">Mode Of Transport</h3>
                                        <input type="text" class="block w-full min-w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:max-w-xs sm:text-sm">
                                    </div>
                                    <div class="col-span-1">
                                        <h3 class="ml-1 text-sm text-gray-600 ">Transportation Expense</h3>
                                         <div class="grid grid-cols-9 gap-1">
                                            <input type="number" class="block min-w-full col-span-7 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:max-w-xs sm:text-sm">
                                            <button class="col-span-2 m-1 text-center text-white bg-red-600 rounded-md " wire:click.prevent="removesub({{$keySub}})" >
                                            REMOVE ENTRY
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            <button class="w-full max-w-md m-2 uppercase rounded-lg bg-primary-bg-alt text-primary-text hover:bg-primary-bg hover:text-secondary-text" wire:click.prevent="addsub({{$j}})">ADD Place To Visit</button>
                        </div>

                    </div>
                   
                </div>
            {{-- first End --}}
            @foreach($inputsMain as $key => $value)
                
                <div class="p-2 space-y-5 bg-gray-600 rounded-md">
                    <div class="grid items-start grid-cols-3 gap-2">
                        <div class="col-span-1">
                            <h3 class="ml-1 text-sm text-gray-300 ">Date</h3>
                            <input type="Date" class="block w-full min-w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:max-w-xs sm:text-sm">
                        </div>                    
                        <div class="col-span-1">
                            <h3 class="ml-1 text-sm text-gray-300 ">Covered by Registration Fee</h3>
                            <div class="relative flex items-start gap-1 ml-3">
                            
                                <input id="breakfast" aria-describedby="comments-description" name="breakfast" type="checkbox" class="w-4 h-4 my-auto ml-3 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500">                            
                                <div class="my-autotext-sm">
                                    <label for="breakfast" class="font-medium text-gray-300 uppercase">Breakfast</label>
                                </div>

                                <input id="lunch" aria-describedby="comments-description" name="lunch" type="checkbox" class="w-4 h-4 my-auto ml-3 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500">                            
                                <div class="my-auto text-sm">
                                    <label for="lunch" class="font-medium text-gray-300 uppercase">lunch</label>
                                </div>

                                <input id="dinner" aria-describedby="comments-description" name="dinner" type="checkbox" class="w-4 h-4 my-auto ml-3 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500">                            
                                <div class="my-auto text-sm">
                                    <label for="dinner" class="font-medium text-gray-300 uppercase">dinner</label>
                                </div>

                                <input id="lodging" aria-describedby="comments-description" name="lodging" type="checkbox" class="w-4 h-4 my-auto ml-3 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500">                            
                                <div class="my-auto text-sm">
                                    <label for="lodging" class="font-medium text-gray-300 uppercase">lodging</label>
                                </div>
                                
                            </div>
                        </div> 
                        <div class="col-span-1">
                            <h3 class="ml-1 text-sm text-gray-300 ">Per Diem</h3>
                            <input type="text" class="block w-full min-w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:max-w-xs sm:text-sm" disabled>
                        </div>
                        
                        <div class="col-span-3 gap-2 p-2 bg-gray-300 rounded-md">
                            <div class="grid grid-cols-2 gap-2 p-2 border border-gray-700 rounded-md">
                                <div class="col-span-2">
                                    <h3 class="ml-1 text-sm text-gray-600 ">Place to be visited</h3>
                                    <input type="text" class="block w-full min-w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:max-w-xs sm:text-sm">
                                </div>
                                <div class="col-span-1">
                                    <h3 class="ml-1 text-sm text-gray-600 ">Departure Time</h3>
                                    <input type="time" class="block w-full min-w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:max-w-xs sm:text-sm">
                                </div>
                                <div class="col-span-1">
                                    <h3 class="ml-1 text-sm text-gray-600 ">Arrival Time</h3>
                                    <input type="time" class="block w-full min-w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:max-w-xs sm:text-sm">
                                </div>
                                <div class="col-span-1">
                                    <h3 class="ml-1 text-sm text-gray-600 ">Mode Of Transport</h3>
                                    <input type="text" class="block w-full min-w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:max-w-xs sm:text-sm">
                                </div>
                                <div class="col-span-1">
                                    <h3 class="ml-1 text-sm text-gray-600 ">Transportation Expense</h3>
                                    <input type="number" class="block w-full min-w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:max-w-xs sm:text-sm">
                                </div>
                            </div>
                            @foreach($inputsSub as $keySub => $subValue)
                                <div class="grid grid-cols-2 gap-2 p-2 mt-2 border border-gray-700 rounded-md">
                                    <div class="col-span-2">
                                        <h3 class="ml-1 text-sm text-gray-600 ">Place to be visited</h3>
                                        <input type="text" class="block w-full min-w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:max-w-xs sm:text-sm">
                                    </div>
                                    <div class="col-span-1">
                                        <h3 class="ml-1 text-sm text-gray-600 ">Departure Time</h3>
                                        <input type="time" class="block w-full min-w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:max-w-xs sm:text-sm">
                                    </div>
                                    <div class="col-span-1">
                                        <h3 class="ml-1 text-sm text-gray-600 ">Arrival Time</h3>
                                        <input type="time" class="block w-full min-w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:max-w-xs sm:text-sm">
                                    </div>
                                    <div class="col-span-1">
                                        <h3 class="ml-1 text-sm text-gray-600 ">Mode Of Transport</h3>
                                        <input type="text" class="block w-full min-w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:max-w-xs sm:text-sm">
                                    </div>
                                    <div class="col-span-1">
                                        <h3 class="ml-1 text-sm text-gray-600 ">Transportation Expense</h3>
                                        <div class="grid grid-cols-9 gap-1">
                                            <input type="number" class="block min-w-full col-span-7 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:max-w-xs sm:text-sm">
                                            <button class="col-span-2 m-1 text-center text-white bg-red-600 rounded-md " wire:click.prevent="removesub({{$keySub}})" >
                                            REMOVE ENTRY
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            <button class="w-full max-w-md m-2 uppercase rounded-lg bg-primary-bg-alt text-primary-text hover:bg-primary-bg hover:text-secondary-text" wire:click.prevent="addsub({{$j}})">ADD Place To Visit</button>
                        </div>

                    </div>
                   
                </div>
            @endforeach
            <button class="w-full max-w-md m-2 uppercase rounded-lg bg-primary-bg-alt text-primary-text hover:bg-primary-bg hover:text-secondary-text" wire:click.prevent="addmain({{$i}})">ADD DAY TO ITINERARY</button>
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



