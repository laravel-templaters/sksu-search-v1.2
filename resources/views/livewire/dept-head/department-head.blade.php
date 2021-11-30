<div class="mx-auto max-w-7xl sm:px-6 lg:px-8"
    x-data="{ active : @entangle('active'),personalClicked : @entangle('personalClicked'),pendingClicked : @entangle('pendingClicked'), show_Banner :@entangle('showBanner') }"
    x-init="$watch('show_Banner', value => {
        if(value == true){
            setTimeout(function(){ show_Banner = false; }, 5000);
        }
    })">
    {{-- notif --}}
    <div aria-live="assertive" class="fixed inset-0 flex items-end px-4 py-6 pointer-events-none sm:p-6 sm:items-start">
        <div class="flex flex-col items-center w-full space-y-4 sm:items-end">
            <div class="w-full max-w-md overflow-hidden rounded-lg shadow-lg pointer-events-auto bg-opacity-95 bg-primary-bg ring-1 ring-black ring-opacity-5"
                x-cloak x-show="show_Banner" x-transition:enter="transform ease-out duration-300 transition"
                x-transition:enter-start="translate-y-2 opacity-0 sm:translate-y-0 sm:translate-x-2"
                x-transition:enter-end="translate-y-0 opacity-100 sm:translate-x-0"
                x-transition:leave="opacity-100 duration-500" x-transition:leave-start="opacity-100"
                x-transition:leave-end="opacity-0">
                <div class="p-4">
                    <div class="flex items-start">
                        <div class="flex-shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-secondary-bg" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <div class="ml-3 w-0 flex-1 pt-0.5">
                            <p class="text-sm font-medium text-secondary-bg">
                                {{$greeting}}!
                            </p>
                            <p class="mt-1 text-sm text-primary-text">
                                A new voucher has been forwarded to you!
                            </p>
                        </div>
                        <div class="flex flex-shrink-0 ml-4">
                            <button
                                class="inline-flex bg-transparent rounded-md text-secondary-bg-alt hover:text-gray-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                                x-on:click="show_Banner = false">
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



    <div class="" id="nav">

        <div class="hidden sm:block">
            <div class="border-b border-primary-bg">
                <nav class="flex -mb-px space-x-8" aria-label="Tabs">
                    <!-- Current: "border-indigo-500 text-indigo-600", Default: "border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300" -->
                    <a href="#" class="flex px-1 py-4 text-sm font-medium border-b-2 whitespace-nowrap"
                        x-on:click="active = 'myacc'; personalClicked = true;"
                        x-bind:class="active == 'myacc' ? 'border-secondary-text text-primary-bg-alt ' : ' border-transparent text-secondary-text hover:text-primary-bg hover:border-secondary-text'">
                        My Account

                        <span x-bind:class="personalClicked == false ? 'animate-pulse':'animate-none'" class="bg-gray-100 text-gray-900 ml-3 py-0.5 px-2.5 rounded-full items-center text-center
                            text-xs font-medium md:inline-block">6</span>
                    </a>

                    <a href="#" class="flex px-1 py-4 text-sm font-medium border-b-2 whitespace-nowrap"
                        x-on:click="active = 'pdv'; pendingClicked = true;"
                        x-bind:class="active == 'pdv' ? 'border-secondary-text text-primary-bg-alt ' : 'border-transparent text-secondary-text hover:text-primary-bg hover:border-secondary-text'">
                        Pending Disbursement Vouchers
                        @if (count($milestones)>0)
                        <span x-bind:class="pendingClicked == false ?  'animate-pulse':'animate-none'"
                            class="bg-gray-100 text-gray-900 hidden ml-3 py-0.5 px-2.5 rounded-full text-xs items-center text-center font-medium md:inline-block">{{count($milestones)}}</span>
                        @endif

                    </a>
                </nav>
            </div>
        </div>

    </div>


    <div class="mx-auto mt-2 max-w-7xl sm:px-6 lg:px-8" id="personal" x-cloak x-show="active=='myacc'"
        x-transition:enter="transition ease-in-out duration-500 " x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in-out duration-500"
        x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0">
        <div class="overflow-hidden divide-y divide-gray-500 rounded-lg shadow bg-secondary-bg-alt">
            <div class="flex flex-wrap items-center justify-between px-4 py-5 sm:px-6 sm:flex-nowrap">
                <div class="mt-2 ml-4">
                    <h3 class="text-lg font-medium leading-6 text-primary-bg">
                        Pending Disbursment Vouchers
                    </h3>
                </div>
                <div class="flex-shrink-0 mt-2 ml-4">
                    <input type="text"
                        class="inline-flex items-center px-4 py-2 text-sm font-medium bg-gray-100 border rounded-md shadow-sm border-secondary-bg text-primaty-bg hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-secondary-bg">
                </div>
            </div>
            <div class="px-4 py-5 sm:p-6">
                <ul role="list" class="divide-y divide-secondary-text">
                    @foreach ($milestones as $milestone)
                    <li class="rounded-lg">
                        <a class="block rounded-lg hover:bg-gray-50">
                            <div class="px-4 py-4 sm:px-6">
                                <div class="flex items-center justify-between">
                                    <p class="text-sm font-medium text-indigo-600 truncate">
                                        {{$milestone->disbursement_voucher->dv_tracking_number}} -
                                        {{$milestone->disbursement_voucher->user->name}}
                                    </p>
                                    <div class="flex flex-shrink-0 ml-2">
                                        <button
                                            class="inline-flex px-2 text-xs font-semibold leading-5 text-green-800 bg-green-100 rounded-full">

                                        </button>
                                    </div>
                                </div>
                                <div class="mt-2 sm:flex sm:justify-between">
                                    <div class="sm:flex">
                                        <p class="flex items-center text-sm text-gray-500">
                                            <!-- Heroicon name: solid/users -->
                                            <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                fill="currentColor" aria-hidden="true">
                                                <path
                                                    d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z" />
                                            </svg>
                                            {{$milestone->disbursement_voucher->user->department->department_name}},
                                            {{$milestone->disbursement_voucher->user->department->campus->campus_name}}
                                        </p>
                                        <p class="flex items-center mt-2 text-sm text-gray-500 sm:mt-0 sm:ml-6">
                                            <!-- Heroicon name: solid/location-marker -->
                                            <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd"
                                                    d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                            {{$milestone->disbursement_voucher->user->department->campus->campus_address}}
                                        </p>
                                    </div>
                                    <div class="flex items-center mt-2 text-sm text-gray-500 sm:mt-0">
                                        <!-- Heroicon name: solid/calendar -->
                                        <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                            aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                                                clip-rule="evenodd" />
                                        </svg>
                                        <p>
                                            Closing on
                                            <time datetime="2020-01-07">January 7, 2020</time>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>
                    @endforeach
                </ul>

            </div>
        </div>
    </div>
    <div class="mx-auto mt-2 max-w-7xl sm:px-6 lg:px-8" id="pending" x-cloak x-show="active=='pdv'"
        x-transition:enter="transition ease-in-out delay-700 duration-500 " x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100">
        <div class="overflow-hidden divide-y divide-gray-500 rounded-lg shadow bg-secondary-bg-alt">
            <div class="flex flex-wrap items-center justify-between px-4 py-5 sm:px-6 sm:flex-nowrap">
                <div class="mt-2 ml-4">
                    <h3 class="text-lg font-medium leading-6 text-primary-bg">
                        Pending Disbursment Vouchers
                    </h3>
                </div>
                <div class="flex-shrink-0 mt-2 ml-4">
                    <input type="text" wire:model.debounce.300ms="searchPending"
                        class="inline-flex items-center px-4 py-2 text-sm font-medium bg-gray-100 border rounded-md shadow-sm border-secondary-bg text-primaty-bg hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-secondary-bg">
                </div>
            </div>
            <div class="px-4 py-5 sm:p-6">
                <ul role="list" class="divide-y divide-secondary-text">
                    @foreach ($milestones as $milestone)

                    @if ($searchPending=="")
                    <li class="rounded-lg">
                        <a class="block rounded-lg hover:bg-gray-50">
                            <div class="px-4 py-4 sm:px-6">
                                <div class="flex items-center justify-between">
                                    <p class="text-sm font-medium text-indigo-600 truncate">
                                        {{$milestone->disbursement_voucher->dv_tracking_number}} -
                                        {{$milestone->disbursement_voucher->user->name}}
                                    </p>
                                    <div class="flex flex-shrink-0 ml-2 justify-items-start">
                                        <button
                                            class="inline-flex px-2 py-1 text-xs font-semibold leading-5 rounded-full bg-primary-bg-alt text-primary-text hover:bg-green-800 active:bg-primary-bg active:text-secondary-bg">
                                            View voucher info
                                        </button>
                                        @php
                                        $last_actions=App\Models\LastAction::where('disbursement_voucher_id','=',$milestone->disbursement_voucher->id)->latest()->first();

                                        @endphp
                                        @if ($last_actions->action_type->description == "FORWARDED")
                                        <button
                                            class="inline-flex px-2 py-1 mx-2 my-auto text-xs font-semibold leading-5 text-blue-600 bg-blue-200 rounded-full hover:bg-blue-400 active:bg-secondary-bg"
                                            wire:click="recieveDocument({{$milestone->disbursement_voucher->id}},{{$milestone->id}},{{$milestone->disbursement_voucher->user->id}})">
                                            Physical documents recieved
                                        </button>
                                        @elseif($last_actions->action_type->description == "RECEIVED")
                                        <button
                                            class="inline-flex px-2 py-1 mx-2 my-auto text-xs font-semibold leading-5 text-green-600 bg-blue-200 rounded-full hover:bg-blue-400 active:bg-secondary-bg">
                                            Forward voucher
                                        </button>
                                        @endif
                                        <button
                                            class="inline-flex px-2 py-1 mx-2 my-auto text-xs font-semibold leading-5 text-blue-600 bg-blue-200 rounded-full hover:bg-blue-400 active:bg-secondary-bg">
                                            Return voucher
                                        </button>
                                    </div>
                                </div>
                                <div class="mt-2 sm:flex sm:justify-between">
                                    <div class="sm:flex">
                                        <p class="flex items-center text-sm text-gray-500">
                                            <!-- Heroicon name: solid/users -->
                                            <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                fill="currentColor" aria-hidden="true">
                                                <path
                                                    d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z" />
                                            </svg>
                                            {{$milestone->disbursement_voucher->user->department->department_name}},
                                            {{$milestone->disbursement_voucher->user->department->campus->campus_name}}
                                        </p>
                                        <p class="flex items-center mt-2 text-sm text-gray-500 sm:mt-0 sm:ml-6">
                                            <!-- Heroicon name: solid/location-marker -->
                                            <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd"
                                                    d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                            {{$milestone->disbursement_voucher->user->department->campus->campus_address}}
                                        </p>
                                    </div>
                                    <div class="flex items-center mt-2 text-sm text-gray-500 sm:mt-0">
                                        <!-- Heroicon name: solid/calendar -->
                                        <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                            aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                                                clip-rule="evenodd" />
                                        </svg>
                                        <p>
                                            Closing on
                                            <time datetime="2020-01-07">January 7, 2020</time>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>
                    @else
                    @if(str_contains(strtolower($milestone->disbursement_voucher->dv_tracking_number),strtolower($searchPending)))
                    <li class="rounded-lg">
                        <a class="block rounded-lg hover:bg-gray-50">
                            <div class="px-4 py-4 sm:px-6">
                                <div class="flex items-center justify-between">
                                    <p class="text-sm font-medium text-indigo-600 truncate">
                                        {{$milestone->disbursement_voucher->dv_tracking_number}} -
                                        {{$milestone->disbursement_voucher->user->name}}
                                    </p>
                                    <div class="flex flex-shrink-0 ml-2 justify-items-start">
                                        <button
                                            class="inline-flex px-2 py-1 text-xs font-semibold leading-5 rounded-full bg-primary-bg-alt text-primary-text hover:bg-green-800 active:bg-primary-bg active:text-secondary-bg">
                                            View voucher info
                                        </button>
                                        @php
                                        $last_actions=App\Models\LastAction::where('disbursement_voucher_id','=',$milestone->disbursement_voucher->id)->latest()->first();

                                        @endphp
                                        @if ($last_actions->action_type->description == "FORWARDED")
                                        <button
                                            class="inline-flex px-2 py-1 mx-2 my-auto text-xs font-semibold leading-5 text-blue-600 bg-blue-200 rounded-full hover:bg-blue-400 active:bg-secondary-bg"
                                            wire:click="recieveDocument({{$milestone->disbursement_voucher->id}},{{$milestone->id}},{{$milestone->disbursement_voucher->user->id}})">
                                            Physical documents recieved
                                        </button>
                                        @elseif($last_actions->action_type->description == "RECEIVED")
                                        <button
                                            class="inline-flex px-2 py-1 mx-2 my-auto text-xs font-semibold leading-5 text-green-600 bg-blue-200 rounded-full hover:bg-blue-400 active:bg-secondary-bg">
                                            Forward voucher
                                        </button>
                                        @endif
                                        <button
                                            class="inline-flex px-2 py-1 mx-2 my-auto text-xs font-semibold leading-5 text-blue-600 bg-blue-200 rounded-full hover:bg-blue-400 active:bg-secondary-bg">
                                            Return voucher
                                        </button>
                                    </div>
                                </div>
                                <div class="mt-2 sm:flex sm:justify-between">
                                    <div class="sm:flex">
                                        <p class="flex items-center text-sm text-gray-500">
                                            <!-- Heroicon name: solid/users -->
                                            <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                fill="currentColor" aria-hidden="true">
                                                <path
                                                    d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z" />
                                            </svg>
                                            {{$milestone->disbursement_voucher->user->department->department_name}},
                                            {{$milestone->disbursement_voucher->user->department->campus->campus_name}}
                                        </p>
                                        <p class="flex items-center mt-2 text-sm text-gray-500 sm:mt-0 sm:ml-6">
                                            <!-- Heroicon name: solid/location-marker -->
                                            <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd"
                                                    d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                            {{$milestone->disbursement_voucher->user->department->campus->campus_address}}
                                        </p>
                                    </div>
                                    <div class="flex items-center mt-2 text-sm text-gray-500 sm:mt-0">
                                        <!-- Heroicon name: solid/calendar -->
                                        <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                            aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                                                clip-rule="evenodd" />
                                        </svg>
                                        <p>
                                            Closing on
                                            <time datetime="2020-01-07">January 7, 2020</time>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>
                    @endif
                    @endif
                    @endforeach
                </ul>

            </div>
        </div>
    </div>


</div>
