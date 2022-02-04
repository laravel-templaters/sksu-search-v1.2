<div class="m-4 bg-white rounded-md" x-init="$watch('show_Banner', value => {
    if(value == true){
        setTimeout(function(){ show_Banner = false;  window.location.replace('/redirects');}, 5000);
       
    }
})"
    x-data="{show_Banner :@entangle('showBanner'),showApplicantError:@entangle('showApplicantError'),showSignatoryError:@entangle('showSignatoryError'),showFromDateError:@entangle('showFromDateError'),showToDateError:@entangle('showToDateError'),pickedSigs:@entangle('pickedSigs'),pickedUsers:@entangle('pickedUsers'), searchedUsers :@entangle('searchedUsers'), searchedSigs :@entangle('searchedSigs'), totype:@entangle('toType')}">
    {{-- implicit submission --}}

    {{-- notif --}}
    <div aria-live="assertive" class="fixed inset-0 flex items-end px-4 py-6 pointer-events-none sm:p-6 sm:items-start"
        x-cloak x-show="show_Banner">
        <div class="flex flex-col items-center w-full space-y-4 sm:items-end">
            <!--
        Notification panel, dynamically insert this into the live region when it needs to be displayed
  
        Entering: "transform ease-out duration-300 transition"
          From: "translate-y-2 opacity-0 sm:translate-y-0 sm:translate-x-2"
          To: "translate-y-0 opacity-100 sm:translate-x-0"
        Leaving: "transition ease-in duration-100"
          From: "opacity-100"
          To: "opacity-0"
      -->
            <div class="w-full max-w-sm overflow-hidden bg-white rounded-lg shadow-lg pointer-events-auto ring-1 ring-black ring-opacity-5"
                x-cloak x-show="show_Banner" x-transition-enter="transform ease-out duration-300 transition"
                x-transition-enter-start="translate-y-2 opacity-0 sm:translate-y-0 sm:translate-x-2"
                x-transition-enter-end="translate-y-0 opacity-100 sm:translate-x-0"
                x-transition-leave="transition ease-in duration-100" x-transition-leave-start="opacity-100"
                x-transition-leave-end="opacity-0">
                <div class="p-4">
                    <div class="flex items-start">
                        <div class="flex-shrink-0">
                            <!-- Heroicon name: outline/check-circle -->
                            <svg class="w-6 h-6 text-green-400" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <div class="ml-3 w-0 flex-1 pt-0.5">
                            <p class="text-sm font-medium text-gray-900">
                                Travel order successfully saved!
                            </p>
                            <p class="mt-1 text-sm text-gray-500">
                                Redirecting to dashboard after a few seconds!
                            </p>
                        </div>
                        <div class="flex flex-shrink-0 ml-4">
                            <button
                                class="inline-flex text-gray-400 bg-white rounded-md hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                <span class="sr-only">Close</span>
                                <!-- Heroicon name: solid/x -->
                                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                    fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                        clip-rule="evenodd" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- notif END--}}

    <form class="p-5 space-y-8 divide-y divide-gray-200" wire:submit.prevent="submit">
        <div class="space-y-8 divide-y divide-gray-200 sm:space-y-5">
            <div>

                <h3 class="text-3xl font-medium leading-6 text-gray-900">
                    Create Travel Order
                </h3>
                <p class="max-w-2xl mt-1 text-sm italic text-gray-500">
                    {{ $isSaved }}
                </p>
            </div>

            <div class="mt-6 space-y-6 sm:mt-5 sm:space-y-5">
                <div
                    class="pt-2 border-t border-gray-200 sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                    <label for="about" class="block font-medium text-md text-primary-bg sm:mt-px sm:pt-2">
                        Please Select One:
                    </label>
                    <div class="mt-1 sm:mt-0 sm:col-span-2">
                        <fieldset class="m-4">
                            <div class="space-y-4 sm:flex sm:items-center sm:space-y-0 sm:space-x-10">

                                <div class="flex items-center">
                                    <input id="official_time" name="toType" wire:model="toType" checked type="radio"
                                        value="offtime"
                                        class="w-4 h-4 text-indigo-600 border-gray-300 focus:ring-indigo-500">
                                    <label for="official_time" class="block ml-3 text-sm font-medium text-gray-700">
                                        Official Time
                                    </label>
                                </div>

                                <div class="flex items-center">
                                    <input id="official_time" name="toType" wire:model="toType" type="radio"
                                        value="offtravel"
                                        class="w-4 h-4 text-indigo-600 border-gray-300 focus:ring-indigo-500">
                                    <label for="official_time" class="block ml-3 text-sm font-medium text-gray-700">
                                        Official Travel
                                    </label>
                                </div>

                            </div>
                        </fieldset>
                    </div>
                </div>
                {{-- USER --}}
                <div class="grid items-start grid-cols-3 gap-4 pt-5 border-t border-gray-200">

                    <label for="username" class="block pt-2 mt-px font-medium text-md text-primary-bg">
                        Applicant(s)
                    </label>
                    <div class="col-span-2 mt-1">
                        <div class="grid max-h-full grid-cols-4 grid-rows-1 gap-2 my-3 bg-opacity-75 rounded-xl bg-primary-500"
                            x-cloak x-show="pickedUsers==true">
                            @if (count($userInfos)==0)
                            <span
                                class="col-span-1 p-3 text-lg tracking-widest text-white uppercase">{{ 'Applicant Needed.'}}<br>{{ 'try Searching Below.' }}</span>
                            @else
                            @foreach ($userInfos as $key =>$userInfo)
                            <a href="#"
                                class="flex items-center m-2 rounded-full shadow-md bg-primary-200 shadow-primary-300"
                                id="{{  $key.rand(1,499) }}">
                                <div class="flex items-center col-span-1">
                                    <div>
                                        @if ($userInfo)
                                        <img class="inline-block w-10 h-10 rounded-full"
                                            src="{{$userInfo->avatar != null ? asset($userInfo->avatar) : asset($userInfo->profile_photo_url)}}"
                                            alt="">
                                        @else
                                        <img class="inline-block w-10 h-10 rounded-full" src="" alt="X">
                                        @endif

                                    </div>
                                    <div class="ml-3">
                                        <p class="text-sm font-medium text-gray-700 group-hover:text-gray-900">
                                            @if ($userInfo)
                                            {{ $userInfo->name }}
                                            @else
                                            NOT SET
                                            @endif
                                        </p>
                                        <p class="text-xs font-semibold tracking-wider text-blue-700 cursor-pointer hover:underline group-hover:text-white"
                                            x-on:click="$wire.unSetUser({{ $userInfo->id }})">
                                            Remove
                                        </p>
                                    </div>
                                </div>
                            </a>
                            @endforeach
                            @endif
                        </div>
                        @error('users_id') <span class="mt-2 text-red-700 error">{{ $message }}</span> @enderror
                        <div class="grid grid-cols-2 grid-rows-1">
                            <p class="text-gray-700 text-md">Search for applicant here</p>
                            <input type="text" id="username"
                                class="block w-full min-w-full col-span-1 col-start-1 border-gray-300 rounded-md shadow-sm focus:ring-primary-bg focus:border-primary-bg sm:max-w-xs sm:text-sm"
                                wire:model.debounce.500ms="searchUsers">
                            <div class="grid w-full grid-cols-4 col-span-2 gap-3 m-2" x-cloak x-show="searchedUsers">

                                @if(count($users)>0)
                                @foreach ($users as $user)

                                <a class="p-2 m-1 rounded-lg hover:cursor-pointer hover:bg-opacity-75 hover:bg-primary-300 group"
                                    x-on:click="$wire.setUser({{ $user->id }})">
                                    <div class="flex items-center col-span-2">
                                        <div>
                                            {{-- gab --}}
                                            <img class="inline-block w-10 h-10 rounded-full"
                                                src="{{$user->avatar != null ? asset($user->avatar) : asset($user->profile_photo_url)}}"
                                                alt="">
                                        </div>
                                        <div class="ml-3">
                                            <p class="text-sm font-medium text-gray-700 group-hover:text-gray-900">
                                                {{ $user->name }}
                                            </p>
                                            <p class="text-xs font-medium text-gray-500 group-hover:text-gray-700">
                                                Click image to select.
                                            </p>
                                        </div>
                                    </div>
                                </a>
                                @endforeach
                                @else
                                <h1 class="col-span-2 text-sm text-secondary-500">User with '{{ $searchUsers }}' on
                                    their name was not found. Check the spelling or Click this <a
                                        href="{{ route('create-new-user') }}" target="_blank"
                                        class="text-indigo-500 hover:underline hover:underline-offset-4">link to
                                        create
                                        a new account</a></h1>
                                @endif


                            </div>
                            <span class="col-span-2 mt-2 text-red-700 uppercase error" x-cloak
                                x-show="showApplicantError==true">atleast 1(one) applicant is needed</span>
                        </div>

                    </div>
                </div>
                {{-- Sigs --}}
                <div class="grid items-start grid-cols-3 gap-4 pt-5 border-t border-gray-200">

                    <label for="signame" class="block pt-2 mt-px font-medium text-md text-primary-bg">
                        Signatory/Signatories
                    </label>
                    <div class="col-span-2 mt-1">
                        <div class="grid max-h-full grid-cols-4 grid-rows-1 gap-2 my-3 bg-opacity-75 rounded-xl bg-primary-500"
                            x-cloak x-show="pickedSigs==true">
                            @if (count($sigsInfos)==0)
                            <span
                                class="col-span-5 p-3 text-lg tracking-widest text-white uppercase">{{ 'Atleast one(1) signatory is Needed.'}}<br>{{ 'try Searching Below.' }}</span>
                            @else
                            @foreach ($sigsInfos as $key =>$sigInfo)
                            <a href="#"
                                class="flex items-center m-2 rounded-full shadow-md bg-primary-200 shadow-primary-300"
                                id="{{ $key.rand(500,999)}}">
                                <div class="flex items-center col-span-1">
                                    <div>
                                        @if ($sigInfo)
                                        <img class="inline-block w-10 h-10 rounded-full"
                                            src="{{$sigInfo->user->avatar != null ? asset($sigInfo->user->avatar) : asset($sigInfo->user->profile_photo_url)}}"
                                            alt="">
                                        @else
                                        <img class="inline-block w-10 h-10 rounded-full" src="" alt="X">
                                        @endif

                                    </div>
                                    <div class="ml-3">
                                        <p class="text-sm font-medium text-gray-700 group-hover:text-gray-900">
                                            @if ($sigInfo)
                                            {{ $sigInfo->user->name }}
                                            @else
                                            NOT SET
                                            @endif
                                        </p>
                                        <p class="text-xs font-semibold tracking-wider text-blue-700 cursor-pointer hover:underline group-hover:text-white"
                                            x-on:click="$wire.unSetSignatory({{ $sigInfo->user->id }})">
                                            Remove
                                        </p>
                                    </div>
                                </div>
                            </a>
                            @endforeach
                            @endif
                        </div>
                        @error('users_id') <span class="mt-2 text-red-700 error">{{ $message }}</span> @enderror
                        <div class="grid grid-cols-2 grid-rows-1">
                            <p class="text-gray-700 text-md">Search for signatory here</p>
                            <input type="text" id="signame"
                                class="block w-full min-w-full col-span-1 col-start-1 border-gray-300 rounded-md shadow-sm focus:ring-primary-bg focus:border-primary-bg sm:max-w-xs sm:text-sm"
                                wire:model.debounce.500ms="searchSigs">
                            <p class="my-auto ml-2 text-sm text-gray-500"><span
                                    class="font-extrabold text-indigo-400">PLEASE NOTE:</span>
                                Signatories will be displayed in your travel order <strong>in the order of your
                                    input.</strong></p>
                            <div class="grid w-full grid-cols-4 col-span-2 gap-3 m-2" x-cloak x-show="searchedSigs">

                                @if(count($sigs)>0)
                                @foreach ($sigs as $user)

                                <a class="p-2 m-1 rounded-lg hover:cursor-pointer hover:bg-opacity-75 hover:bg-primary-300 group"
                                    x-on:click="$wire.setSignatory({{ $user->id }})">
                                    <div class="flex items-center col-span-2">
                                        <div>
                                            {{-- gab --}}
                                            <img class="inline-block w-10 h-10 rounded-full"
                                                src="{{$user->avatar != null ? asset($user->avatar) : asset($user->profile_photo_url)}}"
                                                alt="">
                                        </div>
                                        <div class="ml-3">
                                            <p class="text-sm font-medium text-gray-700 group-hover:text-gray-900">
                                                {{ $user->name }}
                                            </p>
                                            <p class="text-xs font-medium text-gray-500 group-hover:text-gray-700">
                                                Click image to select.
                                            </p>
                                        </div>
                                    </div>
                                </a>
                                @endforeach
                                @else
                                <h1 class="col-span-2 text-sm text-secondary-500">Signatory with '{{ $searchSigs }}' on
                                    their name was not found. Check the spelling or contact support.
                                    @endif


                            </div>
                            <span class="col-span-2 mt-2 text-red-700 uppercase error" x-cloak
                                x-show="showSignatoryError==true">atleast 1(one) signatory is needed</span>
                        </div>

                    </div>
                </div>
            </div>

            <div
                class="pt-2 border-t border-gray-200 sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                <label for="about" class="block font-medium text-md text-primary-bg sm:mt-px sm:pt-2">
                    You are here by directed to: (?)
                </label>
                <div class="mt-1 sm:mt-0 sm:col-span-2">
                    <textarea wire:model="purpose" id="about" name="about" rows="10"
                        class="block w-full max-w-2xl border border-gray-300 rounded-md shadow-sm focus:ring-primary-bg focus:border-primary-bg sm:text-sm"></textarea>
                    <p class="mt-2 text-sm text-gray-500"><span class="font-extrabold text-indigo-400">NOTE:</span>
                        This will also serve as the
                        entry for your disbursement voucher in the future.</p>
                    @error('purpose') <span class="text-red-700 error">{{ $message }}</span> @enderror
                </div>
            </div>
            <div
                class="pt-2 border-t border-gray-200 sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                <label for="dateoftravel" class="block font-medium text-md text-primary-bg sm:mt-px sm:pt-2">
                    Date of Travel
                </label>
                <div class="mt-1 sm:mt-0 sm:col-span-2">
                    <div
                        class="block w-full min-w-full border-gray-300 rounded-md shadow-sm focus:ring-primary-bg focus:border-primary-bg sm:max-w-xs sm:text-sm">
                        <div class="justify-start m-2" id="dateoftravel">
                            <label for="dateoftravelfrom"
                                class="block text-sm font-medium text-gray-600 sm:mt-px sm:pt-2">
                                From
                            </label>
                            <input type="date" id="dateoftravelfrom" wire:model="dateoftravelfrom"
                                wire:change="changeDate" name="dateoftravelfrom"
                                min="{{ date_format(date_add(date_create(date("Y-m-d")),date_interval_create_from_date_string("0 days")),"Y-m-d") }}"
                                class="w-full border-gray-300 rounded-md shadow-sm min-w-fit focus:ring-primary-bg focus:border-primary-bg sm:max-w-xs sm:text-sm">
                        </div>
                        @error('dateoftravelfrom') <span class="mt-3 ml-2 text-red-700 error">{{ $message }}</span>
                        @enderror
                        <div class="justify-start m-2" id="dateoftravel">
                            <label for="dateoftravelto"
                                class="block text-sm font-medium text-gray-600 sm:mt-px sm:pt-2">
                                To
                            </label>
                            <input type="date" id="dateoftravelto" wire:model="dateoftravelto" name="dateoftravelto"
                                wire:change="changeDate" min="{{ $dateoftravelfrom }}"
                                class="w-full border-gray-300 rounded-md shadow-sm min-w-md focus:ring-primary-bg focus:border-primary-bg sm:max-w-xs sm:text-sm">
                        </div>
                        @error('dateoftravelto') <span class="mt-3 ml-2 text-red-700 error">{{ $message }}</span>
                        @enderror
                    </div>
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
                        class="block w-full min-w-full border-gray-300 rounded-md shadow-sm focus:ring-primary-bg focus:border-primary-bg sm:max-w-xs sm:text-sm">
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
                        class="block w-full min-w-full border-gray-300 rounded-md shadow-sm focus:ring-primary-bg focus:border-primary-bg sm:max-w-xs sm:text-sm">
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
                        class="block w-full min-w-full border-gray-300 rounded-md shadow-sm focus:ring-primary-bg focus:border-primary-bg sm:max-w-xs sm:text-sm">
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
                    <input type="text" wire:model="others"
                        class="block w-full min-w-full border-gray-300 rounded-md shadow-sm focus:ring-primary-bg focus:border-primary-bg sm:max-w-xs sm:text-sm">
                    <p class="mt-2 ml-1 text-sm text-gray-500"><span class="font-extrabold text-indigo-400">NOTE:</span>
                        Input specific address excluding
                        the city, province and region of your destination</p>
                </div>
            </div>

            @if ($toType=="offtravel")
            <div class="grid items-start grid-cols-3 gap-4 pt-2 border-t border-gray-200">
                <label for=""
                    class="block col-span-1 col-start-1 row-span-2 font-medium text-md text-primary-bg sm:mt-px sm:pt-2">
                    Registration Fee
                </label>

                <div class="col-span-1 col-start-2 row-span-1 row-start-1 mt-1">

                    <div class="relative flex items-start">
                        <input wire:model="has_registration" x-on:leave="$wire.finalTotalCalculation({{ 0 }})"
                            id="comments" aria-describedby="comments-description" name="comments" type="checkbox"
                            class="w-4 h-4 my-auto border-gray-300 rounded text-primary-500 focus:ring-primary-700">
                        <div class="my-auto ml-3 text-sm">
                            <label for="comments" class="font-medium text-gray-700">Has Registration</label>
                        </div>
                    </div>
                </div>

                <div class="col-span-1 col-start-3 row-span-1 row-start-1 mt-1" x-data="{hovered : false}">

                    @if($has_registration==false)
                    <input type="number" wire:model.lazy="registration_amt"
                        class="hidden w-full min-w-full border-gray-300 rounded-md shadow-sm amount focus:ring-primary-bg focus:border-primary-bg sm:max-w-xs sm:text-sm"
                        readonly>
                    @else
                    <div class="flex>
                                <h3 class="inline ml-1 text-sm text-gray-600 ">Registration Amount
                                </h3>
                                <svg xmlns=" http://www.w3.org/2000/svg" class="inline w-4 h-4 text-primary-bg"
                        @mouseover="hovered = true" @mouseleave="hovered=false" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                            clip-rule="evenodd" />
                        </svg>
                    </div>
                    <input type="number" wire:model.lazy="registration_amt"
                        class="block w-full min-w-full border-gray-300 rounded-md shadow-sm amount focus:ring-primary-bg focus:border-primary-bg sm:max-w-xs sm:text-sm">
                    @error('php artisn serve') <span class="text-red-700 error">{{ $message }}</span> @enderror
                    <h3 x-show="hovered" x-cloak class="text-xs text-indigo-500">If amount is not 0 and "has
                        Registration" checkbox is not checked. Registration amount will not be included in the
                        grand total</h3>
                    @endif


                </div>

            </div>
            @endif

        </div>

        {{-- </div> --}}
        <div class="pt-8 pl-4 space-y-6 sm:pt-10 sm:space-y-5" x-cloak x-show="totype=='offtravel'">
            <div>
                <h3 class="text-3xl font-medium leading-6 text-gray-900">
                    Itinerary
                </h3>
                <p class="max-w-2xl mt-1 text-gray-500 text-md">
                    itinerary for each day will be entered here
                </p>
                <div class="flex mt-5">
                    <div
                        class="relative px-3 py-2 border border-gray-500 rounded-md shadow-sm focus-within:ring-1 focus-within:ring-primary-bg focus-within:border-primary-bg">
                        <label for="date_from"
                            class="absolute inline-block px-1 -mt-px text-xs font-medium text-gray-900 bg-white -top-2 left-2 ">From</label>
                        <input wire:model="dateoftravelfrom" type="date" disabled
                            min="{{ date_format(date_add(date_create(date("Y-m-d")),date_interval_create_from_date_string("0 days")),"Y-m-d") }}"
                            name="date_from" id="date_from"
                            class="block w-48 p-1 text-gray-900 placeholder-gray-500 bg-transparent border-0 rounded-md focus:ring-0 sm:text-sm">
                    </div>

                    <span class="mx-2 my-auto text-3xl">-</span>

                    <div
                        class="relative px-3 py-2 border border-gray-500 rounded-md shadow-sm focus-within:ring-1 focus-within:ring-primary-bg focus-within:border-primary-bg">
                        <label for="date_to"
                            class="absolute inline-block px-1 -mt-px text-xs font-medium text-gray-900 bg-white -top-2 left-2">To</label>
                        <input wire:model="dateoftravelto" type="date" disabled
                            min="{{ date_format(date_add(date_create(date("Y-m-d")),date_interval_create_from_date_string("0 days")),"Y-m-d") }}"
                            name="date_to" id="date_to"
                            class="block w-48 p-1 text-gray-900 placeholder-gray-500 bg-transparent border-0 rounded-md focus:ring-0 sm:text-sm">
                    </div>
                </div>
                <button wire:click.prevent="generateDays" wire:loading.attr="disabled" type="button"
                    class="mt-2 inline-flex items-center px-2.5 py-1.5 border border-gray-300 shadow-sm text-xs font-medium rounded text-white bg-primary-bg hover:bg-primary-bg focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-bg">
                    Generate
                </button>
            </div>
            <div wire:loading wire:target="generateDays">
                Loading...
            </div>
        </div>

        @if($showDays)


        <div x-cloak x-show="totype=='offtravel'">
            @foreach ($gen as $g)
            @include('wrappers.itinerary-daily-wrapper')
            @endforeach
        </div>
        @if(isset($gen))
        <div class="relative min-w-full my-4 ml-4 mr-7" x-cloak x-show="totype=='offtravel'">
            <div class="absolute bottom-0 pr-0 my-3 mt-2 mr-10 bg-white right-2 ">
                {{-- <button type="button" x-on:click="$wire.TotalCalculation()"
                    class="pl-3 pr-2 my-auto mr-10 font-bold text-indigo-300 uppercase bg-indigo-500 border border-transparent rounded text-md hover:bg-indigo-400 hover:text-indigo-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Calculate
                </button> --}}
                <span class="mr-5 font-extrabold text-gray-900 text-md"> GRAND TOTAL:</span><span
                    class="pl-3 mr-2 font-bold text-gray-700 text-md" wire:key='123456789'>{{$finalTotal}}</span></div>
        </div>
        @endif



        @elseif($err_from_to)
        <div wire.loading.remove class="mt-5" x-cloak x-show="totype=='offtravel'">
            <span class="text-red-400">Please fill out all fields. (Don't leave any blanks on the fields)</span>
        </div>
        @elseif($err_diff)
        <div wire.loading.remove class="mt-5" x-cloak x-show="totype=='offtravel'">
            <span class="text-red-400">Check inputs: 'From Date' must be less than the 'To Date'</span>
        </div>
        @elseif($err_diem)
        <div wire.loading.remove class="mt-5" x-cloak x-show="totype=='offtravel'">
            <span class="text-red-400">Pick Region. (Select Region, Province and Municipality from the options
                above)</span>
        </div>
        @endif
        <div class="pt-8">
            <div class="flex justify-end">
                <button type="button"
                    class="px-4 py-2 font-bold bg-white border border-gray-300 rounded-md shadow-sm text-md text-primary-bg hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Cancel
                </button>
                <button type="button" x-cloak x-show="show_Banner==false" wire:click.prevent="submit"
                    class="px-4 py-2 mx-2 font-bold border border-gray-300 rounded-md shadow-sm bg-primary-500 text-md text-secondary-text hover:bg-primary-300 hover:text-primary-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-700">
                    Save
                </button>
            </div>
        </div>
</div>

</div>


<script>
    document.querySelector(".amount").addEventListener("keypress", function (evt) {
        if (evt.which != 8 && evt.which != 0 && evt.which < 48 || evt.which > 57) {
            evt.preventDefault();
        }
    });

</script>
</form>

</div>
