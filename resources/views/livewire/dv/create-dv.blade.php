<div class="p-0 m-0" x-data="{showNotif : @entangle('showNotif'),dvSaved : @entangle('dvSaved'),newDV : @entangle('newDV') ,isstep4open : @entangle('isstep4open')
    ,step1finished : @entangle('step1finished'), step2finished : @entangle('step2finished'), step3finished :
    @entangle('step3finished'), step4finished : @entangle('step4finished'),showToModal : @entangle('showToModal')}"
    x-init="$watch('dvSaved', value => {
    if(value == true){
    setTimeout(function(){ showNotif = false; }, 5000);
    }
    })">
    <div class=""
        x-data="{ isstep1open : @entangle('isstep1open'),isstep2open : @entangle('isstep2open'),isstep3open : @entangle('isstep3open')}">
        {{-- steps --}}
        <div class="bg-primary-bg lg:border-b lg:border-gray-100">
            <nav class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8" aria-label="Progress">
                <ol role="list"
                    class="overflow-hidden rounded-md lg:flex lg:border-l lg:border-r lg:border-gray-200 lg:rounded-none">
                    {{-- step 1 --}}
                    <li class="relative overflow-hidden lg:flex-1">
                        <div class="overflow-hidden border border-b-0 border-gray-200 rounded-t-md lg:border-0">
                            <!-- step 1-->
                            {{-- wire:click.prevent="validateForm(1)" --}}
                            <div class="group">
                                <span
                                    x-bind:class="isstep1open ? 'absolute top-0 left-0 w-1 h-full bg-secondary-bg lg:w-full lg:h-1 lg:bottom-0 lg:top-auto' : 'absolute top-0 left-0 w-1 h-full bg-transparent  lg:w-full lg:h-1 lg:bottom-0 lg:top-auto'"
                                    aria-hidden="true"></span>
                                <span class="flex items-start px-6 py-5 text-sm font-medium">
                                    <span class="flex-shrink-0">
                                        @if($step1finished)
                                        <span
                                            class="flex items-center justify-center w-10 h-10 rounded-full bg-secondary-bg">
                                            <!-- Heroicon name: solid/check -->
                                            <svg class="w-6 h-6 text-secondary-text" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd"
                                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                        </span>

                                        @elseif(!$step1finished)
                                        <h1 class="hidden">{{$step1finished}}</h1>
                                        <span
                                            class="flex items-center justify-center w-10 h-10 border-2 rounded-full border-primary-text">
                                            <span class="text-primary-text">01</span>
                                        </span>
                                        @endif
                                    </span>
                                    <span class="mt-0.5 ml-4 min-w-0 flex flex-col">
                                        <span
                                            x-bind:class="isstep1open ? 'text-xs font-bold tracking-wide uppercase text-primary-text' : 'text-xs font-bold tracking-wide uppercase text-gray-400'">DV
                                            Main
                                            Information Form</span>
                                        <span class="text-sm font-medium text-gray-400">Fill up the form for DV.</span>
                                    </span>
                                </span>
                            </div>
                        </div>
                    </li>


                    {{-- step 2 --}}

                    <li class="relative overflow-hidden lg:flex-1">
                        <div class="overflow-hidden border border-t-0 border-gray-200 rounded-b-md lg:border-0">
                            <!-- Upcoming Step -->
                            {{-- setsignatory({{1}}) --}}
                            {{-- wire:click.prevent="validateForm(2)" --}}
                            <div class="group">
                                <span
                                    x-bind:class="isstep2open ? 'absolute top-0 left-0 w-1 h-full bg-secondary-bg lg:w-full lg:h-1 lg:bottom-0 lg:top-auto' : 'absolute top-0 left-0 w-1 h-full bg-transparent  lg:w-full lg:h-1 lg:bottom-0 lg:top-auto'"
                                    aria-hidden="true"></span>
                                <span class="flex items-start px-6 py-5 text-sm font-medium lg:pl-9">
                                    <span class="flex-shrink-0">
                                        @if($step2finished)
                                        <span
                                            class="flex items-center justify-center w-10 h-10 rounded-full bg-secondary-bg">
                                            <!-- Heroicon name: solid/check -->
                                            <svg class="w-6 h-6 text-secondary-text" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd"
                                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                        </span>
                                        @elseif(!$step2finished)
                                        <span
                                            x-bind:class="isstep2open ? 'flex items-center justify-center w-10 h-10 border-2 rounded-full border-primary-text' : step2finished ?'flex items-center justify-center w-10 h-10 border-2 rounded-full border-secondary-bg':'flex items-center justify-center w-10 h-10 border-2 rounded-full border-gray-400'">
                                            <span
                                                x-bind:class="isstep2open ? 'text-primary-text' : 'text-gray-400'">02</span>
                                        </span>
                                        @endif
                                    </span>
                                    <span class="mt-0.5 ml-4 min-w-0 flex flex-col">
                                        <span
                                            x-bind:class="isstep2open ? 'text-xs font-bold tracking-wide uppercase text-primary-text' : 'text-xs font-bold tracking-wide uppercase text-gray-400'">Upload
                                            Related Documents</span>
                                        <span class="text-sm font-medium text-gray-400">Please upload PDF files
                                            only</span>
                                    </span>
                                </span>
                            </div>

                            <!-- Separator -->
                            <div class="absolute inset-0 top-0 left-0 hidden w-3 lg:block" aria-hidden="true">
                                <svg class="w-full h-full text-gray-300" viewBox="0 0 12 82" fill="none"
                                    preserveAspectRatio="none">
                                    <path d="M0.5 0V31L10.5 41L0.5 51V82" stroke="currentcolor"
                                        vector-effect="non-scaling-stroke" />
                                </svg>
                            </div>
                        </div>
                    </li>

                    {{-- step 3 --}}


                    <li class="relative overflow-hidden lg:flex-1">
                        <div class="overflow-hidden border border-gray-200 lg:border-0">
                            <!-- Current Step -->
                            {{-- wire:click.prevent="validateForm(3)" --}}
                            <div class="group" aria-current="step">
                                <span
                                    x-bind:class="isstep3open ? 'absolute top-0 left-0 w-1 h-full bg-secondary-bg lg:w-full lg:h-1 lg:bottom-0 lg:top-auto' : 'absolute top-0 left-0 w-1 h-full bg-transparent  lg:w-full lg:h-1 lg:bottom-0 lg:top-auto'"
                                    aria-hidden="true"></span>
                                <span class="flex items-start px-6 py-5 text-sm font-medium lg:pl-9">
                                    <span class="flex-shrink-0">
                                        @if($step3finished)
                                        <span
                                            class="flex items-center justify-center w-10 h-10 rounded-full bg-secondary-bg">
                                            <!-- Heroicon name: solid/check -->
                                            <svg class="w-6 h-6 text-secondary-text" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd"
                                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                        </span>
                                        @elseif(!$step3finished)
                                        <span
                                            x-bind:class="isstep3open ? 'flex items-center justify-center w-10 h-10 border-2 rounded-full border-primary-text' : step3finished ? 'flex items-center justify-center w-10 h-10 border-2 rounded-full border-secondary-bg' : 'flex items-center justify-center w-10 h-10 border-2 rounded-full border-gray-400'">
                                            <span
                                                x-bind:class="isstep3open ? 'text-primary-text' : 'text-gray-400'">03</span>
                                        </span>
                                        @endif
                                    </span>
                                    <span class="mt-0.5 ml-4 min-w-0 flex flex-col">
                                        <span
                                            x-bind:class="isstep3open ? 'text-xs font-bold tracking-wide uppercase text-primary-text' : 'text-xs font-bold tracking-wide uppercase text-gray-400'">Signatory</span>
                                        <span class="text-sm font-medium text-gray-400">Choose Signatory</span>
                                    </span>
                                </span>
                            </div>

                            <!-- Separator -->
                            <div class="absolute inset-0 top-0 left-0 hidden w-3 lg:block" aria-hidden="true">
                                <svg class="w-full h-full text-gray-300" viewBox="0 0 12 82" fill="none"
                                    preserveAspectRatio="none">
                                    <path d="M0.5 0V31L10.5 41L0.5 51V82" stroke="currentcolor"
                                        vector-effect="non-scaling-stroke" />
                                </svg>
                            </div>
                        </div>
                    </li>
                    {{-- step 4  --}}

                    <li class="relative overflow-hidden lg:flex-1">
                        <div class="overflow-hidden border border-gray-200 lg:border-0">
                            <!-- Current Step -->
                            {{-- wire:click.prevent="validateForm(4)"> --}}
                            <div href="#" class="group" aria-current="step">
                                <span
                                    x-bind:class="isstep4open ? 'absolute top-0 left-0 w-1 h-full bg-secondary-bg lg:w-full lg:h-1 lg:bottom-0 lg:top-auto' : 'absolute top-0 left-0 w-1 h-full bg-transparent  lg:w-full lg:h-1 lg:bottom-0 lg:top-auto'"
                                    aria-hidden="true"></span>
                                <span class="flex items-start px-6 py-5 text-sm font-medium lg:pl-9">
                                    <span class="flex-shrink-0">
                                        <span
                                            x-bind:class="isstep4open ? 'flex items-center justify-center w-10 h-10 border-2 rounded-full border-secondary-bg' : step4finished ? 'flex items-center justify-center w-10 h-10 border-2 rounded-full border-secondary-bg' : 'flex items-center justify-center w-10 h-10 border-2 rounded-full border-gray-400'">
                                            <span
                                                x-bind:class="isstep4open ? 'text-primary-text' : 'text-gray-400'">04</span>
                                        </span>
                                    </span>
                                    <span class="mt-0.5 ml-4 min-w-0 flex flex-col">
                                        <span
                                            x-bind:class="isstep4open ? 'text-xs font-bold tracking-wide uppercase text-primary-text' : 'text-xs font-bold tracking-wide uppercase text-gray-400'">Preview</span>
                                        <span class="text-sm font-medium text-gray-400">Review and confirm information
                                            for <voucher></voucher></span>
                                    </span>
                                </span>
                            </div>

                            <!-- Separator -->
                            <div class="absolute inset-0 top-0 left-0 hidden w-3 lg:block" aria-hidden="true">
                                <svg class="w-full h-full text-gray-300" viewBox="0 0 12 82" fill="none"
                                    preserveAspectRatio="none">
                                    <path d="M0.5 0V31L10.5 41L0.5 51V82" stroke="currentcolor"
                                        vector-effect="non-scaling-stroke" />
                                </svg>
                            </div>
                        </div>
                    </li>

                </ol>
            </nav>
        </div>






        {{-- container sang tanan --}}


        {{-- first step --}}

        <div class="">
            {{-- <div class="px-4 py-5 sm:px-6">
                        <!-- Content goes here -->
                        <!-- We use less vertical padding on card headers on desktop than on body sections -->
                    </div> --}}
            <div x-cloak x-show="isstep1open" class="px-4 py-5 overflow-hidden sm:p-6"
                x-transition:enter="transform transition ease-in-out duration-700 sm:duration-700"
                x-transition:enter-start="-translate-x-full" x-transition:enter-end="-translate-x-0"
                x-transition:leave="transform transition ease-in-out duration-300 sm:duration-300"
                x-transition:leave-start="-translate-x-0" x-transition:leave-end="-translate-x-full">
                <div class="px-4 py-5 bg-white shadow sm:rounded-lg sm:p-6">
                    <div class="grid grid-cols-3 gap-6 divide-x-2 divide-gray-300">
                        @if(strtoupper($voucher_type)=="LOCAL TRAVEL")
                        <div class="space-y-2 md:col-span-1">
                            <h3 class="text-xl font-medium leading-6 text-gray-900">Disbursement Voucher</h3>
                            <br>
                            <p class="mt-1 text-sm text-gray-500">
                                Import Travel Order
                            </p>
                            <input class="p-2 text-sm border-gray-500 rounded-lg" type="text"
                                wire:model.debounce.500ms="searchto" placeholder="Search Purpose Here">
                            <div class="grid grid-cols-1 gap-2 px-2 pt-2 mx-auto">
                                @if(isset($searchedto)==true)
                                @if($searchedto->count() > 0)
                                @foreach($searchedto as $to)
                                <div class="break-normal">
                                    <button class="text-left " wire:click="sTOid({{$to->id}},false)">
                                        <p class="mt-1 text-sm text-blue-53">
                                            {{$to->purpose}}
                                        </p>
                                    </button>
                                </div>
                                @endforeach
                                @else
                                <div class="col-span-3">
                                    <p class="mt-1 text-sm text-gray-500">
                                        No Travel order with purpose '{{$searchto}}' found ...
                                    </p>
                                </div>
                                @endif
                                @endif
                            </div>
                        </div>
                        @else
                        <div class="space-y-2 md:col-span-1">
                            <h3 class="text-xl font-medium leading-6 text-gray-900">Disbursement Voucher</h3>
                            <p class="mt-1 text-sm text-gray-500">
                            </p>
                            <input class="p-2 text-sm border-gray-500 rounded-lg" type="text"
                                wire:model.debounce.500ms="searchuser" placeholder="Search here first...">
                            <div class="grid grid-cols-3 gap-2 px-2 pt-2 mx-auto">
                                @if(isset($searchedusers)==true)
                                @if($searchedusers->count() > 0)
                                @foreach($searchedusers as $searcheduser)
                                <div class="col-span-1 space-x-1">
                                    <button class="" wire:click="sUid({{$searcheduser->id}})">
                                        <img src="{{$searcheduser->avatar != null ? asset($searcheduser->avatar) : asset($searcheduser->profile_photo_url)}}"
                                            class="w-20 h-20 mx-auto rounded-full lg:w-24 lg:h-24">
                                        <p class="mt-1 text-sm text-blue-53">
                                            {{$searcheduser->name}}
                                        </p>
                                    </button>
                                </div>
                                @endforeach
                                @else
                                <div class="col-span-3">
                                    <p class="mt-1 text-sm text-gray-500">
                                        No Employee found with '{{$searchuser}}'
                                    </p>
                                </div>
                                @endif


                                @endif
                            </div>
                        </div>
                        @endif
                        <div class="col-span-2 pl-2 mt-0">
                            {{-- form here --}}
                            <form action="#" method="">
                                <div class="grid grid-cols-6 gap-6">




                                    <div class="col-span-6">
                                        <label for="first-name"
                                            class="block text-sm font-medium text-gray-700 uppercase">Payee</label>
                                        <input type="text" wire:model="fn" name="first-name" id="first-name"
                                            autocomplete="given-name"
                                            class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                                            disabled>
                                        @error('fn')
                                        <span class="text-sm text-red-500">{{$message}}</span>
                                        @enderror
                                    </div>

                                    <!-- <div class="col-span-3">
                                        <label for="last-name" class="block text-sm font-medium text-gray-700">Payee
                                            last
                                            name</label>
                                        <input type="text" wire:model="ln" name="last-name" id="last-name"
                                            autocomplete="family-name"
                                            class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                                            disabled>
                                        @error('ln')
                                        <span class="text-sm text-red-500">{{$message}}</span>
                                        @enderror
                                    </div> -->

                                    {{-- mode of payment --}}
                                    <div class="col-span-2">
                                        <label for="mode_of_payment"
                                            class="block text-sm font-medium text-gray-700">Mode Of Payment</label>
                                        <select wire:model="mode_id"
                                            class="block w-full px-3 py-2 mt-1 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                            <option selected>--SELECT MODE OF PAYMENT--</option>
                                            @foreach ($mode_of_payment as $payment)
                                            <option value="{{$payment->id}}">{{$payment->mode_of_payment}}</option>
                                            @endforeach
                                        </select>
                                        @error('mode_id')
                                        <span class="text-sm text-red-500">{{$message}}</span>
                                        @enderror </div>

                                    {{-- DV Category --}}
                                    <div class="col-span-4">
                                        <label for="dv_category" class="block text-sm font-medium text-gray-700">Voucher
                                            Type</label>
                                        <input type="text" wire:model="voucher_type"
                                            class="block w-full px-3 py-2 mt-1 uppercase bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                                            disabled>

                                    </div>

                                    <div class="col-span-6">
                                        <h3 class="font-bold text-md">Particular/s</h3>
                                        <div class="grid grid-cols-9 gap-3 pt-2">
                                            {{-- input group start --}}
                                            <div
                                                class="grid grid-cols-3 col-span-9 border-2 border-gray-400 rounded-md shadow-sm ">
                                                <div class="col-span-3 m-2">
                                                    <label for="first-name"
                                                        class="block text-sm font-medium text-gray-700">Entry</label>

                                                    @if(strtoupper($voucher_type)=="LOCAL TRAVEL")
                                                    <input type="text" wire:model.defer="entry.0"
                                                        wire:key="{{rand(0,15555)}}"
                                                        class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                                                        readonly>
                                                    @else
                                                    <input type="text" wire:model.defer="entry.0"
                                                        wire:key="{{rand(0,15555)}}"
                                                        class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                                    @endif

                                                    @error('entry.0')
                                                    <span class="text-sm text-red-500">{{$message}}</span>
                                                    @enderror
                                                </div>
                                                <div class="col-span-1 m-2">
                                                    <label for="first-name"
                                                        class="block text-sm font-medium text-gray-700">Responsibility
                                                        Center</label>
                                                    <input type="text" wire:model.defer="responsibility_center.0"
                                                        wire:key="{{rand(0,15555)}}"
                                                        class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                                    @error('responsibility_center.0')
                                                    <span class="text-sm text-red-500">{{$message}}</span>
                                                    @enderror
                                                </div>
                                                <div class="col-span-1 m-2">
                                                    <label for="first-name"
                                                        class="block text-sm font-medium text-gray-700">MFO/PAP</label>
                                                    <input type="text" wire:model.defer="mfo_pap.0" wire:key="-5"
                                                        class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                                    @error('mfo_pap.0')
                                                    <span class="text-sm text-red-500">{{$message}}</span>
                                                    @enderror
                                                </div>
                                                <div class="col-span-1 m-2">
                                                    <label for="first-name"
                                                        class="block text-sm font-medium text-gray-700">Amount</label>
                                                    @if(strtoupper($voucher_type)=="LOCAL TRAVEL")
                                                    <input type="number" min="0" wire:model.defer="amount.0"
                                                        wire:key="-2"
                                                        class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                                                        readonly>

                                                    @else
                                                    <input type="number" min="0" wire:model.defer="amount.0"
                                                        wire:key="-3"
                                                        class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                                    @endif
                                                    @error('amount.0')
                                                    <span class="text-sm text-red-500">{{$message}}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            {{-- input group end --}}
                                            {{-- loops HERE start --}}
                                            @foreach($inputs as $key => $value)
                                            <div
                                                class="grid grid-cols-3 col-span-8 border-2 border-gray-400 rounded-md shadow-sm ">
                                                <div class="col-span-3 m-2">
                                                    <label for="first-name"
                                                        class="block text-sm font-medium text-gray-700">Entry</label>
                                                    <input type="text" wire:model.defer="entry.{{ $value }}"
                                                        wire:key="{{$key}}"
                                                        class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                                    @error('entry.'.$value)
                                                    <span class="text-sm text-red-500">{{$message}}</span>
                                                    @enderror
                                                </div>
                                                <div class="col-span-1 m-2">
                                                    <label for="first-name"
                                                        class="block text-sm font-medium text-gray-700 truncate">Responsibility
                                                        Center</label>
                                                    <input type="text"
                                                        wire:model.defer="responsibility_center.{{ $value }}"
                                                        wire:key="{{$key}}"
                                                        class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                                    @error('responsibility_center.'.$value)
                                                    <span class="text-sm text-red-500">{{$message}}</span>
                                                    @enderror
                                                </div>
                                                <div class="col-span-1 m-2">
                                                    <label for="first-name"
                                                        class="block text-sm font-medium text-gray-700">MFO/PAP</label>
                                                    <input type="text" wire:model.defer="mfo_pap.{{ $value }}"
                                                        wire:key="{{$key}}"
                                                        class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                                    @error('mfo_pap.'.$value)
                                                    <span class="text-sm text-red-500">{{$message}}</span>
                                                    @enderror
                                                </div>
                                                <div class="col-span-1 m-2">
                                                    <label for="first-name"
                                                        class="block text-sm font-medium text-gray-700">Amount</label>
                                                    <input type="number" wire:model.defer="amount.{{ $value }}"
                                                        wire:key="{{$key}}"
                                                        class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                                    @error('amount.'.$value)
                                                    <span class="text-sm text-red-500">{{$message}}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-span-1 shadow-sm ">
                                                <button class="w-full h-full bg-red-600 rounded-md"
                                                    wire:click.prevent="remove({{$key}})">
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                        class="w-6 h-6 mx-auto text-blue-51" fill="none"
                                                        viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                                    </svg>
                                                </button>
                                            </div>
                                            @endforeach
                                            {{-- loops HERE end --}}
                                            {{-- add button --}}
                                            @if(strtoupper($voucher_type)=="LOCAL TRAVEL")
                                            @else
                                            <button
                                                class="col-span-3 col-start-4 m-2 text-gray-800 rounded-full hover:bg-primary-bg-alt hover:text-secondary-text"
                                                wire:click.prevent="add({{$i}})"><span
                                                    class="m-2 text-sm font-extrabold">ADD ENTRY</span>
                                            </button>
                                            @endif

                                        </div>
                                    </div>

                                    <div class="justify-end col-span-4 col-start-2">
                                        <button
                                            class="block w-full py-2 mt-3 text-lg border-gray-300 rounded-lg shadow-sm bg-primary-bg text-secondary-bg-alt hover:bg-primary-text hover:text-primary-bg"
                                            wire:click.prevent="validateStep1()"> Next </button>


                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="px-4 py-4 sm:px-6">
                        <!-- Content goes here -->
                        <!-- We use less vertical padding on card footers at all sizes than on headers or body sections -->
                    </div> --}}
        </div>


        {{-- 2nd step upload --}}

        <div class="">
            {{-- <div class="px-4 py-5 sm:px-6">
                        <!-- Content goes here -->
                        <!-- We use less vertical padding on card headers on desktop than on body sections -->
                    </div> --}}
            <div x-cloak x-show="isstep2open" class="px-4 py-5 overflow-hidden sm:p-6"
                x-transition:enter="transform transition ease-in-out duration-700 sm:duration-700"
                x-transition:enter-start="translate-x-full" x-transition:enter-end="translate-x-0">
                <div class="bg-white rounded-md">
                    {{-- 
                                    <div class="space-y-12">
                                        <button class="block w-full py-2 mt-3 text-lg border-gray-300 rounded-lg shadow-sm bg-blue-54 focus:ring-indigo-500 focus:border-indigo-500" wire:click.prevent="validateForm(3)"> Proceed </button>
                                        {{-- <form method="POST" wire:submit.prevent="submit">
    
                                            <input id="name" wire:model.debounce.500ms="name">
                                        
                                            <x-media-library-attachment name="myUpload" />
                                        
                                            <button type="submit">Submit</button>
                                        </form> --}}

                    {{-- make form for medialib here--




                                        
                                    </div>
                                </div> --}}
                    <div class="px-4 py-8 mx-auto max-w-7xl">
                        <h3 class="mb-5 text-4xl font-extrabold drop-shadow-lg">Documents required :</h3>
                        @if ($related_docs->count() > 0)
                        <div class="mx-auto overflow-hidden bg-white border border-gray-300 rounded-md">

                            <ol role="list" class="space-y-3">

                                @foreach ($related_docs as $doc)

                                <li class="justify-start block px-6">


                                    <div class="block">
                                        @php
                                        $related_doc_arr = explode('<',$doc->related_document_list_entry);
                                            $doc_arr= explode('*',$doc->related_document_list_entry);
                                            @endphp
                                            <h3 class="my-auto uppercase"> <span class="my-auto">•</span> <span
                                                    class="ml-1">{{$doc_arr[0]}}</span></h3>
                                            @if (count($doc_arr)>1)
                                            <span
                                                class="ml-2 text-sm font-extrabold tracking-widest text-indigo-600">*{{$doc_arr[1]}}</span>
                                            @endif
                                            @if (count($related_doc_arr) > 1)
                                            @php
                                            $related_doc_divided= explode('>',$related_doc_arr[1]); @endphp
                                            <ul role="list" class="ml-3 space-y-4">
                                                @foreach($related_doc_divided as $docu)
                                                <li class="block max-w-full ml-2">
                                                    <span class="font-light tracking-wide text-gray-600 text-md">
                                                        @php
                                                        $doc_arr= explode('*',$docu);
                                                        @endphp
                                                        @if (count($doc_arr)>1)
                                                        {{$docu}} <span class="ml-2 text-sm font-extrabold tracking-widest text-indigo-600">*$doc_arr[1]</span>
                                                        @else
                                                        {{$docu}}
                                                        @endif

                                                    </span>
                                                </li>
                                                @endforeach
                                            </ul>
                                            @endif
                                    </div>
                                </li>
                                @endforeach
                            </ol>
                            <div class="m-2"><span class="text-indigo-600 text-md">Note: Click proceed if documents
                                    required for your disbursement voucher is <strong
                                        class="font-bold uppercase text-md text-primary-text-alt">compiled and ready
                                        for
                                        submission</strong></span></div>

                        </div>
                        @else
                        <h1>No documents here</h1>
                        @endif
                        <div class="grid grid-cols-9 m-3">
                            <div class="justify-end col-span-3 col-start-1">
                                <button
                                    class="block w-full py-2 mt-3 text-lg bg-gray-200 border-gray-300 rounded-lg shadow-sm text-primary-bg hover:bg-primary-text hover:text-primary-bg"
                                    wire:click.prevent="openstep1()"> Previous </button>
                            </div>
                            <div class="justify-end col-span-3 col-start-7">
                                <button
                                    class="block w-full py-2 mt-3 text-lg border-gray-300 rounded-lg shadow-sm bg-primary-bg text-secondary-bg-alt hover:bg-primary-text hover:text-primary-bg"
                                    wire:click.prevent="openstep3()"> Next </button>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
            {{-- <div class="px-4 py-4 sm:px-6">
                        <!-- Content goes here -->
                        <!-- We use less vertical padding on card footers at all sizes than on headers or body sections -->
                    </div> --}}
        </div>


        {{-- 3rd --}}

        <div class="">
            {{-- <div class="px-4 py-5 sm:px-6">
                        <!-- Content goes here -->
                        <!-- We use less vertical padding on card headers on desktop than on body sections -->
                    </div> --}}
            <div x-cloak x-show="isstep3open" class="px-4 py-5 overflow-hidden sm:p-6"
                x-transition:enter="transform transition ease-in-out duration-700 sm:duration-700"
                x-transition:enter-start="translate-x-full" x-transition:enter-end="translate-x-0">
                <div class="bg-white rounded-md">
                    <div class="px-4 py-8 mx-auto max-w-7xl">
                        <div class="space-y-12">
                            <div class="space-y-5 sm:space-y-4 md:max-w-xl lg:max-w-3xl xl:max-w-none">
                                <h2 class="text-3xl font-extrabold tracking-tight sm:text-4xl">Select Signatory</h2>
                                <p class="text-xl text-gray-500">Please select appropriate signatory for your
                                    Disbursement voucher application. You may start by searching...</p>
                            </div>
                            <input class="w-1/2 p-2 text-sm border-gray-500 rounded-lg" type="text"
                                wire:model.debounce.500ms="searchsignatory" placeholder="Search here...">
                            <ul role="list"
                                class="space-y-12 sm:grid sm:grid-cols-2 sm:gap-x-6 sm:gap-y-12 sm:space-y-0 lg:grid-cols-3 lg:gap-x-8">

                                @if($searchedsignatories->count() > 0)

                                @foreach($searchedsignatories as $searchedsignatory)

                                <li>
                                    <div class="space-y-4 text-left">
                                        <button class="flex-shrink-0 block group"
                                            wire:click.prevent="setsignatory({{$searchedsignatory->id}})">
                                            <!-- This example requires Tailwind CSS v2.0+ -->

                                            <div class="flex items-center">
                                                <div>
                                                    <img class="inline-block rounded-full h-14 w-14"
                                                        src="{{$searchedsignatory->avatar != null ? asset($searchedsignatory->avatar) : asset($searchedsignatory->profile_photo_url)}}"
                                                        alt="{{$searchedsignatory->name}}">
                                                </div>
                                                <div class="ml-3 text-left">
                                                    <p
                                                        class="text-sm font-medium text-gray-700 group-hover:text-gray-900">
                                                        {{$searchedsignatory->name}}
                                                    </p>
                                                    <p
                                                        class="text-xs font-medium text-gray-500 group-hover:text-gray-700">
                                                        @if ($searchedsignatory->position != null)
                                                        {{$searchedsignatory->position->position_name}}
                                                        @endif
                                                    </p>
                                                    <p
                                                        class="text-xs font-medium text-gray-500 group-hover:text-gray-700">
                                                        @if ($searchedsignatory->department != null)
                                                        {{$searchedsignatory->department->department_name}}
                                                        @endif
                                                    </p>


                                                </div>
                                            </div>



                                        </button>
                                    </div>
                                </li>

                                @endforeach

                                @else

                                <p class="text-gray-500 text-md">The system found no one with '{{$searchsignatory}}' on
                                    his/her name (╯°□°）╯︵ ┻━┻</p>

                                @endif

                                <!-- More people... -->
                            </ul>
                        </div>
                        <div class="grid grid-cols-9 mt-4">
                            <div class="justify-end col-span-3 col-start-4">
                                <button
                                    class="block w-full py-2 mt-3 text-lg bg-gray-200 border-gray-300 rounded-lg shadow-sm text-primary-bg hover:bg-primary-text hover:text-primary-bg"
                                    wire:click.prevent="openstep2()"> Previous</button>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
            {{-- <div class="px-4 py-4 sm:px-6">
                        <!-- Content goes here -->
                        <!-- We use less vertical padding on card footers at all sizes than on headers or body sections -->
                    </div> --}}
        </div>



        {{-- 4th --}}

        <div class="p-2">

            {{-- outermost wrapper --}}
            <div id="dvPrint" class="grid w-full h-full grid-cols-8 font-serif bg-white border-collapse" x-cloak
                x-show="isstep4open" x-transition:enter="transform transition ease-in-out duration-700 sm:duration-700"
                x-transition:enter-start="translate-x-full" x-transition:enter-end="translate-x-0">


                {{-- G1 header part --}}
                <div class="col-span-8 bg-white border-t-4 border-l-4 border-r-4 border-black" id="toPrint">
                    <div class="grid grid-cols-7 bg-white grid-rows-7 ">
                        {{-- logo --}}
                        <div
                            class="flex grid-cols-10 col-span-5 col-start-1 row-span-3 row-start-1 leading-none border-b-2 border-r-2 border-black place-items-center">
                            {{-- <div class="grid grid-cols-10 grid-rows-5 m-2">
                                                <div class="col-span-2 col-start-1 row-span-3 row-start-1 pl-6 text-right">
                                                    <img src="http://sksu.edu.ph/wp-content/uploads/2020/09/512x512-1.png" alt="sksu logo" class="object-scale-down w-20 h-full mx-auto">
                                                </div>
                                                <div class="col-span-3 col-start-1 row-span-2 row-start-1 pl-6 text-right">
                                                    
                                                </div>
                                                <div class="col-span-4 col-start-4 row-span-2 row-start-1 text-left"><span class="text-sm font-bold text-green-600 uppercase">Sultan Kudarat State University</span></div>
                                                <div class="col-span-1 col-start-10 row-span-5 row-start-1 mr-3 ">
                                                
                                                    {!! QrCode::size(100)->margin(2)->generate((string)$dvno_temp); !!}

                                                </div>
                                            </div> --}}
                            <div class="col-span-3 m-2">
                                <div class="text-center">
                                    <img src="http://sksu.edu.ph/wp-content/uploads/2020/09/512x512-1.png"
                                        alt="sksu logo" class="object-scale-down h-full mx-auto w-14">
                                    <span class="text-xs text-center text-black">SKSU Works for Success!</span><br>
                                    <span class="text-sm font-bold text-center text-black"> ISO 9001:2015</span>
                                </div>
                            </div>
                            <div class="col-span-5 m-2 place-items-center">
                                <div class="ext-left ">
                                    <span class="block text-sm font-bold text-green-600 uppercase">SULTAN KUDARAT STATE
                                        UNIVERSITY</span>
                                    <span class="block text-xs text-black">ACCESS, EJC Montilla, 9800 City of
                                        Tacurong</span>
                                    <span class="block text-xs text-black">Province of Sultan Kudarat</span>
                                </div>
                            </div>
                            <div class="col-span-2 pr-2 m-2">
                                <div class="m-3"> {!! QrCode::size(80)->margin(2)->backgroundColor(0, 0, 0,
                                    0)->generate((string)$trackingNumber); !!}</div>
                            </div>
                        </div>
                        {{-- dV --}}
                        <div
                            class="flex col-span-5 col-start-1 row-span-1 row-start-4 text-center border-b-2 border-r-2 border-black">
                            <span class="mx-auto font-sans font-extrabold text-black uppercase text-md">Disbursement
                                Voucher</span>
                        </div>
                        {{-- fund cluster --}}
                        <div class="col-span-2 col-start-6 row-span-2 border-b-2 border-black">
                            <span class="ml-2 font-sans text-sm font-bold text-black uppercase o">Fund Cluster:</span>
                        </div>
                        {{-- Date and DV no --}}
                        <div class="col-span-2 col-start-6 row-span-2 border-b-2 border-black">
                            <div class="grid grid-rows-2 text-left">
                                <div>
                                    <span
                                        class="inline row-span-1 ml-2 font-sans text-sm font-extrabold text-black uppercase">Date:</span>
                                    <span class="inline font-sans text-xs font-extrabold text-black uppercase">{!!
                                        date('M d, Y', strtotime($date)) !!}</span>
                                </div>
                                <span class="ml-2 font-sans text-sm font-extrabold text-black uppercase ">DV No.:</span>
                                <span class="mx-auto ml-2 font-sans text-xs font-extrabold text-black uppercase ">DV No
                                    HERE</span>
                            </div>

                        </div>

                        <div class="flex col-span-4 row-span-1 text-right border-b-2 border-r-2 border-black">
                            <span class="flex px-2 text-sm font-semibold text-black border-r border-black">Address:
                            </span>
                            <span class="flex pl-2 my-auto text-xs font-semibold text-black uppercase"> ACCESS
                                CAMPUS</span>
                        </div>
                        <div class="flex col-span-3 row-span-1 text-right border-b-2 border-black">
                            <span class="flex px-2 font-semibold text-black border-r border-black">Mode of
                                Payment:</span>
                            <span class="pl-2 my-auto text-xs font-semibold text-black">{{$mop_text}}</span>
                        </div>
                        <div class="flex col-span-3 row-span-1 text-right border-b-2 border-r-2 border-black">
                            <span class="flex px-2 text-sm font-semibold text-black border-r border-black">Payee:
                            </span>
                            <span class="flex pl-2 my-auto text-xs font-semibold text-black uppercase">
                                {{$fn}}</span>
                        </div>
                        <div class="flex col-span-2 row-span-1 text-right border-b-2 border-r-2 border-black">
                            <span class="flex px-2 text-xs font-normal text-black border-r border-black">TIN/Employee
                                No.: </span>
                            <span class="pl-2 my-auto text-xs font-semibold text-black"></span>
                        </div>
                        <div class="flex col-span-2 row-span-1 text-right border-b-2 border-black">
                            <span class="flex px-2 text-xs border-r border-black font-normaltext-black">ORS/BURS No.:
                            </span>
                            <span class="pl-2 my-auto text-xs font-semibold text-black"></span>
                        </div>
                        {{-- table for particulars --}}
                        <div class="col-span-8 bg-white">
                            <table class="min-w-full table-fixed ">
                                <thead class="text-sm border-2">
                                    <tr class="bg-gray-300 border-b-2 border-black ">
                                        <th class='w-2/5 uppercase border-r-2 border-black'>Particulars</th>
                                        <th class='w-1/5 text-xs uppercase border-r-2 border-black'>responsibility
                                            center</th>
                                        <th class='w-1/5 uppercase border-r-2 border-black'>mfo/pap</th>
                                        <th class='w-1/5 uppercase'>amount</th>
                                    </tr>
                                </thead>
                                <tbody class="text-xs bg-white border-black">

                                    <tr class="">
                                        <td class="p-2 whitespace-normal bg-blue-200 border-r-2 border-black">
                                            @if(isset($entry['0']))
                                            {{$entry['0']}}
                                            @endif
                                        </td>
                                        <td class="border-r-2 border-black ">
                                            @if(isset($responsibility_center['0']))
                                            {{$responsibility_center['0']}}
                                            @endif
                                        </td>
                                        <td class="border-r-2 border-black ">
                                            @if(isset($mfo_pap['0']))
                                            {{$mfo_pap['0']}}
                                            @endif
                                        </td>
                                        <td class="pr-2 text-right border-black ">
                                            @if(isset($amount['0']))
                                            {{$amount['0']}}
                                            @endif
                                        </td>
                                    </tr>
                                    @foreach ($inputs as $key => $value)
                                    <tr class="py-2">
                                        <td class="whitespace-normal bg-blue-200 border-r-2 border-black">
                                            @if(isset($entry[(string)$value]))
                                            {{$entry[(string)$value]}}
                                            @endif
                                        </td>
                                        <td class="border-r-2 border-black ">
                                            @if(isset($responsibility_center[(string)$value]))
                                            {{$responsibility_center[(string)$value]}}
                                            @endif
                                        </td>
                                        <td class="border-r-2 border-black ">
                                            @if(isset($mfo_pap[(string)$value]))
                                            {{$mfo_pap[(string)$value]}}
                                            @endif
                                        </td>
                                        <td class="pr-2 text-right border-black ">
                                            @if(isset($amount[(string)$value]))
                                            {{$amount[(string)$value]}}
                                            @endif
                                        </td>
                                    </tr>
                                    @endforeach
                                    <tr class="py-2">
                                        <td class="whitespace-normal bg-blue-400 border-r-2 border-black">
                                            Additional information:
                                        </td>
                                        <td class="border-r-2 border-black"></td>
                                        <td class="border-r-2 border-black"></td>
                                        <td class="border-black"></td>
                                    </tr>
                                    <tr class="py-2">
                                        <td class="whitespace-normal bg-pink-300 border-r-2 border-black">
                                            Status of accountability:

                                        </td>
                                        <td class="border-r-2 border-black"></td>
                                        <td class="border-r-2 border-black"></td>
                                        <td class="border-black"></td>
                                    </tr>
                                    <tr class="py-2">
                                        <td class="whitespace-normal bg-pink-300 border-r-2 border-black">
                                            BTr fidelity bond CLTN:
                                        </td>
                                        <td class="border-r-2 border-black"></td>
                                        <td class="border-r-2 border-black"></td>
                                        <td class="border-black"></td>
                                    </tr>
                                    <tr class="py-2">
                                        <td class="pr-2 whitespace-normal bg-pink-300 border-r-2 border-black">
                                            Period covered:
                                        </td>
                                        <td class="border-r-2 border-black"></td>
                                        <td class="border-r-2 border-black"></td>
                                        <td class="border-b-2 border-black"></td>
                                    </tr>
                                </tbody>
                                <tfoot class="text-xs bg-white border-b-2 border-black ">
                                    <tr>
                                        <td
                                            class="tracking-wide text-left whitespace-normal bg-pink-300 border-b-2 border-r-2 border-black">
                                            Maximum accountability:
                                        </td>
                                        <td class="border-b-2 border-r-2 border-black ">

                                        </td>
                                        <td class="border-b-2 border-r-2 border-black ">

                                        </td>
                                        <td class="pr-2 text-xs text-right border-b border-black">{{$total}}</td>
                                    </tr>
                                </tfoot>

                            </table>
                        </div>
                        {{-- table for particulars end--}}
                        {{-- signatory A--}}
                        <div class="col-span-8 bg-white">
                            <div class="grid grid-cols-5 grid-rows-4 border-b-2 border-black ">
                                <div class="col-span-5 row-span-1 text-sm text-left"><span
                                        class="border-b border-r border-black ">&nbsp;A.&nbsp;</span> Certified:
                                    Expenses/Cash Advance necessary, lawful and incurred under my direct supervision
                                </div>
                                @if(isset($signatory))
                                <div
                                    class="col-span-3 col-start-2 row-span-1 row-start-3 font-bold text-center border-b border-black">
                                    {{$signatory->name}}</div>
                                {{-- {{$responsibility_center[(string)$value]}} --}}
                                @endif
                                @if(isset($position))
                                <div class="col-span-3 col-start-2 row-span-1 row-start-4 font-semibold text-center">
                                    {{$position->position_name}} of {{$department->department_name}}</div>
                                @endif
                            </div>
                        </div>
                        {{-- signatory A--}}
                        <div class="col-span-8 text-sm border-b-2 border-black">
                            <span class="font-bold border-b border-r border-black ">&nbsp;B.&nbsp;</span>
                            Accounting Entry:
                        </div>
                        {{-- signatory A end--}}

                        {{-- accounting entry --}}
                        <div class="col-span-8">
                            <table class="min-w-full border-b-2 border-collapse border-black table-fixed ">
                                <thead class="">
                                    <tr class="bg-gray-300 border-t border-b-2 border-black ">
                                        <th class='w-3/6 font-bold uppercase border-r-2 border-black'>Account Title</th>
                                        <th class='w-1/6 uppercase border-r-2 border-black '>UACS CODE</th>
                                        <th class='w-1/6 uppercase border-r-2 border-black '>Debit</th>
                                        <th class='w-1/6 uppercase border-black '>Credit</th>
                                    </tr>
                                </thead>
                                <tbody class="border-b-2 border-black">

                                    <tr>
                                        <td class="border-r-2 border-black ">&nbsp;</td>
                                        <td class="border-r-2 border-black ">&nbsp;</td>
                                        <td class="border-r-2 border-black ">&nbsp;</td>
                                        <td class="">&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td class="border-r-2 border-black ">&nbsp;</td>
                                        <td class="border-r-2 border-black ">&nbsp;</td>
                                        <td class="border-r-2 border-black ">&nbsp;</td>
                                        <td class="">&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td class="border-r-2 border-black ">&nbsp;</td>
                                        <td class="border-r-2 border-black ">&nbsp;</td>
                                        <td class="border-r-2 border-black ">&nbsp;</td>
                                        <td class="">&nbsp;</td>
                                    </tr>

                                </tbody>

                            </table>
                        </div>
                        {{-- accounting entry end--}}
                        <div class="col-span-8 border-b-2 border-black">
                            <div class="grid grid-cols-6 grid-rows-9">
                                {{-- cd --}}
                                <div
                                    class="col-span-3 col-start-1 row-span-1 row-start-1 border-b-2 border-r-2 border-black">
                                    <span
                                        class="font-bold border-t border-b border-r-2 border-black">&nbsp;C.&nbsp;</span>
                                    Certified:
                                </div>
                                <div class="col-span-3 col-start-4 row-span-1 row-start-1 border-b-2 border-black">
                                    <span
                                        class="font-bold border-t border-b border-r-2 border-black ">&nbsp;D.&nbsp;</span>
                                    Approved for Payment
                                </div>
                                {{-- cd --}}
                                <div
                                    class="col-span-3 col-start-1 row-span-3 row-start-2 text-xs border-b-2 border-r-2 border-black">
                                    <div class="relative flex items-start m-3 ">
                                        <div class="flex items-center h-5">
                                            <input id="comments" aria-describedby="comments-description" name="comments"
                                                type="checkbox"
                                                class="w-4 h-4 text-indigo-600 border-gray-800 rounded focus:ring-indigo-500">
                                        </div>
                                        <div class="my-auto ml-3">
                                            <label for="comments" class="text-xs font-medium text-gray-700">Cash
                                                Available</label>
                                        </div>
                                    </div>
                                    <div class="relative flex items-start m-3">
                                        <div class="flex items-center h-5">
                                            <input id="comments" aria-describedby="comments-description" name="comments"
                                                type="checkbox"
                                                class="w-4 h-4 text-indigo-600 border-gray-800 rounded focus:ring-indigo-500">
                                        </div>
                                        <div class="my-auto ml-3">
                                            <label for="comments" class="text-xs font-medium text-gray-700">Subject to
                                                Authority to Debit Account (when applicable)</label>
                                        </div>
                                    </div>
                                    <div class="relative flex items-start m-3">
                                        <div class="flex items-center h-5">
                                            <input id="comments" aria-describedby="comments-description" name="comments"
                                                type="checkbox"
                                                class="w-4 h-4 text-indigo-600 border-gray-800 rounded focus:ring-indigo-500">
                                        </div>
                                        <div class="my-auto ml-3">
                                            <label for="comments" class="text-xs font-medium text-gray-700">Supporting
                                                documents complete and amount claimed proper</label>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-span-3 col-start-4 row-span-3 row-start-2 border-b-2 border-black">
                                </div>


                                <div class="col-span-1 row-span-1 border-b-2 border-r-2 border-black">
                                    <span class="ml-2">Signature</span>
                                </div>
                                <div class="col-span-2 col-start-2 row-span-1 border-b-2 border-r-2 border-black"></div>

                                <div class="col-span-1 col-start-4 row-span-1 border-b-2 border-r-2 border-black">
                                    <span class="ml-2">Signature</span>
                                </div>
                                <div class="col-span-2 col-start-5 row-span-1 border-b-2 border-black"></div>

                                <div class="col-span-1 row-span-1 border-b-2 border-r-2 border-black">
                                    <span class="ml-2">Printed Name</span>
                                </div>
                                {{-- accountant name --}}
                                <div
                                    class="col-span-2 col-start-2 row-span-1 text-center border-b border-r-2 border-black">
                                    <span class="text-sm font-semibold uppercase">JESHER Y. PALOMARIA, CPA</span>
                                </div>
                                <div class="col-span-1 col-start-4 row-span-1 border-b-2 border-r-2 border-black">
                                    <span class="ml-2">Printed Name</span>
                                </div>
                                <div class="col-span-2 col-start-5 row-span-1 text-center border-b border-black">
                                    <span class="text-sm font-semibold uppercase">ROLANDO F. HECHANOVA, PhD</span>
                                </div>
                                <div class="col-span-1 col-start-1 row-span-1 border-b-2 border-r-2 border-black">
                                    <span class="my-auto ml-2">Position</span>
                                </div>
                                <div
                                    class="grid col-span-2 col-start-2 grid-rows-2 row-span-1 text-center border-b-2 border-r-2 border-black">
                                    <div class="col-span-1 text-xs text-center border-b border-black"><span class="">
                                            Accountant</span></div>
                                    <div class="col-span-1 text-xs border-black">Head, Accounting Unit/Authorized
                                        Representative</div>
                                </div>
                                <div class="col-span-1 col-start-4 row-span-1 border-b-2 border-r-2 border-black">
                                    <span class="my-auto ml-2">Position</span>
                                </div>
                                <div
                                    class="grid col-span-2 col-start-5 grid-rows-2 row-span-1 text-center border-b-2 border-black">

                                    <div class="col-span-1 text-xs text-center border-b border-black">
                                        <span class=""> University President</span>
                                    </div>
                                    <div class="col-span-1 text-xs border-black">Agency Head/Authorized Representative
                                    </div>
                                </div>
                                <div class="col-span-1 col-start-1 row-span-1 border-b-2 border-r-2 border-black">
                                    <span class="ml-2">Date</span>
                                </div>
                                <div
                                    class="col-span-2 col-start-2 row-span-1 text-center border-b-2 border-r-2 border-black">
                                    <span class="font-extrabold"></span>
                                </div>
                                <div class="col-span-1 col-start-4 row-span-1 border-b-2 border-r-2 border-black">
                                    <span class="ml-2">Date</span>
                                </div>
                                <div class="col-span-2 col-start-5 row-span-1 text-center border-b-2 border-black">
                                    <span class="font-extrabold"></span>
                                </div>
                            </div>
                            <div class="grid grid-cols-8 col-span-8 border-black grid-rows-10">
                                <div class="col-span-7 row-span-1 text-xs border border-black">
                                    <span
                                        class="font-bold border-t border-b border-r border-black ">&nbsp;E.&nbsp;</span>
                                    Reciept of Payment
                                </div>
                                <div class="col-span-7 col-start-1 row-span-1 row-start-4 text-xs border-black">
                                    <span class="ml-2">Official Receipt No. & Date/Other Documents</span>
                                </div>

                                <div class="col-span-1 row-span-1 row-start-2 text-xs border border-black "><span
                                        class="ml-2">Check/ADA No. :</span></div>
                                <div class="col-span-1 row-span-1 row-start-3 border border-black text-md"><span
                                        class="ml-2">Signature :</span></div>
                                <div class="col-span-2 col-start-2 row-span-1 row-start-2 border border-black"></div>
                                <div class="col-span-2 col-start-2 row-span-1 row-start-3 border border-black"></div>
                                <div class="col-span-1 col-start-4 row-span-1 row-start-2 border border-black">Date:
                                </div>
                                <div class="col-span-1 col-start-4 row-span-1 row-start-3 border border-black">Date:
                                </div>

                                <div class="col-span-3 col-start-5 row-span-1 row-start-2 text-xs border border-black">
                                    <span class="ml-2">Bank Name & Account Number:</span></div>
                                <div class="col-span-3 col-start-5 row-span-1 row-start-3 text-xs border border-black">
                                    <span class="ml-2">Printed Name:</span></div>

                                <div class="col-span-1 col-start-8 row-span-2 text-sm border border-black"><span
                                        class="ml-2">JEV No.</span></div>
                                <div class="col-span-1 col-start-8 row-span-2 row-start-3 text-sm border border-black">
                                    <span class="ml-2">Date</span></div>

                            </div>

                        </div>

                    </div>
                </div>

            </div>
            <div class="grid grid-cols-9 mt-4">
                <div class="justify-end col-span-3 col-start-1">
                    <button
                        class="block w-full py-2 mt-3 text-lg bg-gray-200 border-gray-300 rounded-lg shadow-sm text-primary-bg hover:bg-primary-bg hover:text-primary-text"
                        wire:click.prevent="openstep3()" x-cloak x-show="isstep4open"
                        x-transition:enter="transform transition ease-in-out duration-700 sm:duration-700"
                        x-transition:enter-start="translate-x-full" x-transition:enter-end="translate-x-0"> Previous
                    </button>
                </div>
                <div class="justify-end col-span-1 col-start-8 mr-2" :class="dvSaved ? '' : 'hidden'">
                    <input type="button"
                        class="block w-full py-2 mt-3 text-lg border-gray-300 rounded-lg shadow-sm bg-primary-bg text-secondary-bg-alt hover:bg-primary-text-alt hover:text-primary-bg"
                        x-cloak x-show="isstep4open"
                        x-transition:enter="transform transition ease-in-out duration-700 sm:duration-700"
                        x-transition:enter-start="translate-x-full" x-transition:enter-end="translate-x-0"
                        onclick="printDiv('dvPrint')" value="Print DV" />
                </div>
                <div class="justify-end col-span-2 col-start-9" :class="dvSaved ? 'hidden' : ''">
                    <button
                        class="block w-full py-2 mt-3 text-lg border-gray-300 rounded-lg shadow-sm bg-primary-bg text-secondary-bg-alt hover:bg-primary-text-alt hover:text-primary-bg"
                        x-cloak x-show="isstep4open"
                        x-transition:enter="transform transition ease-in-out duration-700 sm:duration-700"
                        x-transition:enter-start="translate-x-full" x-transition:enter-end="translate-x-0"
                        wire:click="saveDV" value="Save" />Save<button>
                </div>
            </div>








        </div>


        <div class="fixed inset-0 z-10 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true"
            x-cloak x-show="showToModal">
            <div class="flex items-end justify-center min-h-screen px-4 pt-4 pb-20 text-center sm:block sm:p-0">
                <!--
      Background overlay, show/hide based on modal state.

      Entering: "ease-out duration-300"
        From: "opacity-0"
        To: "opacity-100"
      Leaving: "ease-in duration-200"
        From: "opacity-100"
        To: "opacity-0"
    -->
                <div class="fixed inset-0 transition-opacity bg-gray-500 bg-opacity-75" aria-hidden="true" x-cloak
                    x-show="showToModal" x-transition:enter="transform transition ease-out duration-300"
                    x-transition:enter-start="translate-x-full" x-transition:enter-end="translate-x-0"></div>

                <!-- This element is to trick the browser into centering the modal contents. -->
                <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>

                <!--
      Modal panel, show/hide based on modal state.

      Entering: "ease-out duration-300"
        From: "opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
        To: "opacity-100 translate-y-0 sm:scale-100"
      Leaving: "ease-in duration-200"
        From: "opacity-100 translate-y-0 sm:scale-100"
        To: "opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
    -->
                <div class="inline-block px-4 pt-5 pb-4 overflow-hidden text-left align-bottom transition-all transform bg-white rounded-lg shadow-xl sm:my-8 sm:align-middle sm:max-w-lg sm:w-full sm:p-6"
                    x-cloak x-show="showToModal" x-transition:enter="ease-out duration-300"
                    x-transition:enter-start="opacity-0 translate-y-4"
                    x-transition:enter-end="opacity-100 translate-y-0 " x-transition:leave="ease-in duration-200"
                    x-transition:leave-start="opacity-100 translate-y-0"
                    x-transition:leave-end="opacity-0 translate-y-4 ">
                    <div>
                        <div class="flex items-center justify-center w-12 h-12 mx-auto bg-green-100 rounded-full">
                            <!-- Heroicon name: outline/check -->

                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-green-600" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                        <div class="mt-3 text-center sm:mt-5">
                            <h3 class="text-lg font-medium leading-6 text-gray-900" id="modal-title">
                                Travel Order Information
                            </h3>
                            <div class="mt-2">
                                <p class="text-left text-gray-500 text-md">
                                    Applied By: <span class="font-semibold text-gray-700">{{$modaltoowner}}</span>
                                </p>
                                <p class="mt-1 text-sm text-left text-gray-500">
                                    Purpose: <span class="font-semibold text-gray-700">{{$modaltopurpose}}</span>
                                </p>

                            </div>
                        </div>
                    </div>
                    <div class="mt-5 sm:mt-6 sm:grid sm:grid-cols-2 sm:gap-3 sm:grid-flow-row-dense">
                        <button type="button"
                            class="inline-flex justify-center w-full px-4 py-2 text-base font-medium text-white bg-indigo-600 border border-transparent rounded-md shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:col-start-2 sm:text-sm"
                            wire:click="sTOid({{$modaltoid}},true)">
                            Import Travel Order
                        </button>
                        <button type="button"
                            class="inline-flex justify-center w-full px-4 py-2 mt-3 text-base font-medium text-gray-700 bg-white border border-gray-300 rounded-md shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:col-start-1 sm:text-sm"
                            x-on:click="showToModal = ! showToModal">
                            Close
                        </button>
                    </div>
                </div>
            </div>
        </div>














        @push('scripts')
        <script>
            function printDiv(divName) {


                var originalContents = document.body.innerHTML;
                var element = document.getElementById("toPrint");

                //element.classList.add("transform");
                //element.classList.add("scale-95");
                var printContents = document.getElementById(divName).innerHTML;


                document.body.innerHTML = printContents;

                window.print();

                document.body.innerHTML = originalContents;


            }

        </script>
        @endpush
    </div>

    <div id="notif" aria-live="assertive"
        class="fixed inset-0 flex items-end px-4 py-6 pointer-events-none sm:p-6 sm:items-start">
        <div class="flex flex-col items-center w-full space-y-4 sm:items-end">
            <div class="w-full max-w-sm overflow-hidden bg-white rounded-lg shadow-lg pointer-events-auto ring-1 ring-black ring-opacity-5"
                x-cloak x-show="showNotif" x-transition:enter="transform ease-out duration-300 transition"
                x-transition:enter-start="translate-y-2 opacity-0 sm:translate-y-0 sm:translate-x-2"
                x-transition:enter-end="translate-y-0 opacity-100 sm:translate-x-0"
                x-transition:leave="opacity-100 duration-500" x-transition:leave-start="opacity-100"
                x-transition:leave-end="opacity-0">
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
                                Successfully saved!
                            </p>
                            <p class="mt-1 text-sm text-gray-500">
                                Your disbursement voucher has been saved and forwarded!
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

</div>
