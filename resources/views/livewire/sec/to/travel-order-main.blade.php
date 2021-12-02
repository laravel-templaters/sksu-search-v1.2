<div class="m-4 bg-white rounded-md">
    {{-- implicit submission --}}
    <form class="p-5 space-y-8 divide-y divide-gray-200" wire:submit.prevent="submit"
        onkeydown="return event.key != 'Enter';">
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
                        <label for="username" class="block pt-2 mt-px font-medium text-md text-primary-bg">
                            Name
                        </label>
                        <div class="col-span-1 mt-1">
                            <div class="grid grid-rows-1">
                                <select wire:model="users_id"
                                    class="block w-full min-w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:max-w-xs sm:text-sm">
                                    <option selected>--SELECT USER--</option>
                                    @foreach ($users as $user)
                                    <option value="{{$user->id}}">{{Str::upper($user->name)}}</option>
                                    @endforeach
                                </select>
                                @error('users_id') <span class="mt-2 text-red-700 error">{{ $message }}</span> @enderror
                            </div>
                        </div>
                    </div>

                    <div
                        class="pt-2 border-t border-gray-200 sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                        <label for="about" class="block font-medium text-md text-primary-bg sm:mt-px sm:pt-2">
                            Purpose
                        </label>
                        <div class="mt-1 sm:mt-0 sm:col-span-2">
                            <textarea wire:model="purpose" id="about" name="about" rows="3"
                                class="block w-full max-w-lg border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"></textarea>
                            <p class="mt-2 text-sm text-gray-500"><span
                                    class="font-extrabold text-indigo-600">NOTE:</span> This will also serve as the
                                entry for your disbursement voucher in the future.</p>
                            @error('purpose') <span class="text-red-700 error">{{ $message }}</span> @enderror
                        </div>
                    </div>

                    <div class="grid items-start grid-cols-3 grid-rows-2 gap-4 pt-2 border-t border-gray-200">
                        <label for=""
                            class="block col-span-1 col-start-1 row-span-2 font-medium text-md text-primary-bg sm:mt-px sm:pt-2">
                            Place to visit
                        </label>
                        <div class="col-span-1 row-span-1 mt-1">
                            <h3 class="ml-1 text-sm text-gray-600 ">Region</h3>
                            <select wire:model="region_codes" id="country" name="country" autocomplete="country"
                                class="block w-full min-w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:max-w-xs sm:text-sm">
                                <option selected>--SELECT REGION--</option>
                                @foreach ($regions as $region)
                                <option value="{{$region->region_code}}">{{$region->region_description}}</option>
                                @endforeach

                            </select>
                            @error('region_codes') <span class="mt-3 text-red-700 error">{{ $message }}</span> @enderror
                        </div>
                        <div class="col-span-1 row-span-1 mt-1">
                            <h3 class="ml-1 text-sm text-gray-600 ">Province</h3>
                            <select wire:model="province_codes"
                                class="block w-full min-w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:max-w-xs sm:text-sm">
                                <option selected>--SELECT PROVINCE--</option>
                                @foreach ($provinces as $province)
                                <option value="{{$province->province_code}}">{{$province->province_description}}
                                </option>
                                @endforeach

                            </select>
                            @error('province_codes') <span class="mt-3 text-red-700 error">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-span-1 col-start-2 row-span-1 row-start-2 mt-1">
                            <h3 class="ml-1 text-sm text-gray-600 ">City / Municipality</h3>
                            <select wire:model="city_codes"
                                class="block w-full min-w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:max-w-xs sm:text-sm">
                                <option selected>--SELECT CITY/MUNICIPALITY--</option>
                                @foreach ($cities as $city)
                                <option value="{{$city->city_municipality_code}}">
                                    {{$city->city_municipality_description}}</option>
                                @endforeach
                            </select>
                            @error('city_codes') <span class="mt-3 text-red-700 error">{{ $message }}</span> @enderror
                        </div>
                        <div class="col-span-1 col-start-3 row-span-1 row-start-2 mt-1">
                            <h3 class="ml-1 text-sm text-gray-600 ">Others</h3>
                            <input type="text"
                                class="block w-full min-w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:max-w-xs sm:text-sm">
                            <p class="mt-2 ml-1 text-sm text-gray-500"><span
                                    class="font-extrabold text-indigo-600">NOTE:</span> Input specific address excluding
                                the city, province and region of your destination</p>
                        </div>
                    </div>

                    <div class="grid items-start grid-cols-3 gap-4 pt-2 border-t border-gray-200">
                        <label for=""
                            class="block col-span-1 col-start-1 row-span-2 font-medium text-md text-primary-bg sm:mt-px sm:pt-2">
                            Registration Fee
                        </label>

                        <div class="col-span-1 col-start-2 row-span-1 row-start-1 mt-1">

                            <div class="relative flex items-start">
                                <input wire:model="has_registration" id="comments"
                                    aria-describedby="comments-description" name="comments" type="checkbox"
                                    class="w-4 h-4 my-auto text-indigo-600 border-gray-300 rounded focus:ring-indigo-500">
                                <div class="my-auto ml-3 text-sm">
                                    <label for="comments" class="font-medium text-gray-700">Has Registration</label>
                                </div>
                            </div>
                        </div>

                        <div class="col-span-1 col-start-3 row-span-1 row-start-1 mt-1" x-data="{hovered : false}">
                            <div class="flex>
                                <h3 class="inline ml-1 text-sm text-gray-600 ">Registration Amount
                                </h3>
                                <svg xmlns=" http://www.w3.org/2000/svg" class="inline w-4 h-4 text-blue-600"
                                @mouseover="hovered = true" @mouseleave="hovered=false" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                                    clip-rule="evenodd" />
                                </svg>
                            </div>



                            @if($has_registration==false)
                            <input type="number" wire:model.lazy="registration_amt"
                                class="block w-full min-w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:max-w-xs sm:text-sm"
                                readonly>
                            @else
                            <input type="number" wire:model.lazy="registration_amt"
                                class="block w-full min-w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:max-w-xs sm:text-sm ">
                            @endif
                            <h3 x-show="hovered" x-cloak class="text-xs text-indigo-500">If amount is not 0 and "has
                                Registration" checkbox is not checked. Registration amount will not be included in the
                                grand total</h3>

                        </div>

                    </div>
                </div>
            </div>

            <div class="pt-8 space-y-6 sm:pt-10 sm:space-y-5">
                <div>
                    <h3 class="text-3xl font-medium leading-6 text-gray-900">
                        Itinerary
                    </h3>
                    <p class="max-w-2xl mt-1 text-gray-500 text-md">
                        itinerary for each day will be entered here
                    </p>
                    <div class="flex mt-5">
                        <div
                            class="relative px-3 py-2 border border-gray-200 rounded-md shadow-sm focus-within:ring-1 focus-within:ring-indigo-600 focus-within:border-indigo-600">
                            <label for="date_from"
                                class="absolute inline-block px-1 -mt-px text-xs font-medium text-gray-900 bg-white -top-2 left-2 ">From</label>
                            <input wire:model="date_from" type="date" name="date_from" id="date_from"
                                class="block w-48 p-1 text-gray-900 placeholder-gray-500 border-0 rounded-md focus:ring-0 sm:text-sm">
                        </div>

                        <span class="mx-2 my-auto text-3xl">-</span>

                        <div
                            class="relative px-3 py-2 border border-gray-200 rounded-md shadow-sm focus-within:ring-1 focus-within:ring-indigo-600 focus-within:border-indigo-600">
                            <label for="date_to"
                                class="absolute inline-block px-1 -mt-px text-xs font-medium text-gray-900 bg-white -top-2 left-2">To</label>
                            <input wire:model="date_to" type="date" name="date_to" id="date_to"
                                class="block w-48 p-1 text-gray-900 placeholder-gray-500 border-0 rounded-md focus:ring-0 sm:text-sm">
                        </div>
                    </div>
                    <button wire:click.prevent="generateDays" wire:loading.attr="disabled" type="button"
                        class="mt-2 inline-flex items-center px-2.5 py-1.5 border border-gray-300 shadow-sm text-xs font-medium rounded text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        Generate
                    </button>
                </div>
                <div wire:loading wire:target="generateDays">
                    Loading...
                </div>
                @if($showDays)


                @foreach ($gen as $g)
                {{-- @livewire('itenerary', ['gen' => $g], key($g)) --}}
                @include('wrappers.itinerary-daily-wrapper')
                @endforeach

                @if(isset($gen))
                <div class="relative min-w-full my-4 ml-4 mr-7">
                    <div class="absolute right-0 pr-12 bg-white mr-7"><a
                            class="pl-3 pr-2 my-auto text-sm font-bold uppercase bg-white border-2 border-r-0 hover:bg-primary-bg-alt hover:text-secondary-bg-alt rounded-l-md border-primary-bg-alt text-secondary-bg"
                            wire:click="TotalCalculation">Calculate</a> <span
                            class="font-extrabold text-gray-900 text-md">TOTAL:</span><span
                            class="pl-3 font-bold text-gray-700 text-md">{{$finalTotal}}</span></div>
                </div>
                @endif

                @elseif($err_from_to)
                <div wire.loading.remove class="mt-5">
                    <span class="text-red-400">Please fill out all fields.</span>
                </div>
                @elseif($err_diff)
                <div wire.loading.remove class="mt-5">
                    <span class="text-red-400">Invalid Dates.</span>
                </div>
                @elseif($err_diem)
                <div wire.loading.remove class="mt-5">
                    <span class="text-red-400">Pick Region.</span>
                </div>
                @endif

            </div>

        </div>

        <div class="pt-8">
            <div class="flex justify-end">
                <button type="button"
                    class="px-4 py-2 font-bold bg-white border border-gray-300 rounded-md shadow-sm text-md text-primary-bg hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Cancel
                </button>
                <button type="submit"
                    class="px-4 py-2 mx-2 font-bold border border-gray-300 rounded-md shadow-sm bg-primary-bg-alt text-md text-secondary-text hover:bg-gray-50 hover:text-primary-text-alt focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Save
                </button>
            </div>
        </div>
    </form>
</div>
