<div class="mx-auto max-w-7xl sm:px-6 lg:px-8" x-data="{showStatus: false,showModal : @entangle('showViewModal'),showModalForward : @entangle('showForwardModal'),showModalReturn :
    @entangle('showReturnModal'), active :
    @entangle('active'),personalClicked :
    @entangle('personalClicked'),pendingClicked : @entangle('pendingClicked'), show_Banner :@entangle('showBanner') }"
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
                            @if ($isHeadOrAdmin || $isAssigned)
                            <p class="mt-1 text-sm text-primary-text">
                                  A new voucher has been forwarded to you!
                            </p>
                            @else
                            <p class="mt-1 text-sm text-primary-text">
                                A voucher of yours has been updated!
                            </p>
                            @endif
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


                        @if (count($pending_dv)>0)
                        <span x-bind:class="personalClicked == false ? 'animate-pulse':'animate-none'" class="bg-gray-100 text-gray-900 ml-3 py-0.5 px-2.5 rounded-full items-center text-center
                            text-xs font-medium md:inline-block">{{count($pending_dv)}}</span>
                        @endif
                    </a>

                    @if ($isHeadOrAdmin || $isAssigned)
                    <a href="#" class="flex px-1 py-4 text-sm font-medium border-b-2 whitespace-nowrap"
                        x-on:click="active = 'pdv'; pendingClicked = true;"
                        x-bind:class="active == 'pdv' ? 'border-secondary-text text-primary-bg-alt ' : 'border-transparent text-secondary-text hover:text-primary-bg hover:border-secondary-text'">
                        Pending Disbursement Vouchers
                        @if (count($milestones)>0)
                        <span x-bind:class="pendingClicked == false ?  'animate-pulse':'animate-none'"
                            class="bg-gray-100 text-gray-900 hidden ml-3 py-0.5 px-2.5 rounded-full text-xs items-center text-center font-medium md:inline-block">{{count($milestones)}}</span>
                        @endif

                    </a>
                    @endif
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
                        Personal Disbursement Vouchers
                    </h3>
                </div>
                <div class="flex-shrink-0 mt-2 ml-4">
                    <input type="text" placeholder="Enter tracking number" wire:model.debounce.300ms="searchPersonal"
                        class="inline-flex items-center px-4 py-2 text-sm font-medium bg-gray-100 border rounded-md shadow-sm border-secondary-bg text-primaty-bg hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-secondary-bg">
                </div>
            </div>
            <div class="px-4 py-5 sm:p-6">
                <ul role="list" class="divide-y divide-secondary-text">
                    @if(count($pending_dv)==0)
                    <li class="rounded-lg">
                        <a class="block rounded-lg ">
                            <div class="px-4 py-4 mx-auto text-center sm:px-6">
                                <span class="text-sm tracking-widest text-center text-gray-600 uppercase">No Pending
                                    Personal Vouchers</span>
                            </div>
                        </a>
                    </li>
                    @else
                    @foreach ($pending_dv as $dv)
                    @if ($searchPersonal=="")
                    <li class="rounded-lg">
                        <a class="block rounded-lg hover:bg-gray-50">
                            <div class="px-4 py-4 sm:px-6">
                                <div class="flex items-center justify-between">
                                    <p class="text-sm font-medium text-indigo-600 truncate">
                                        {{$dv->dv_tracking_number}} -
                                        {{$dv->user->name}}
                                    </p>
                                    <div class="flex flex-shrink-0 ml-2">
                                        <button x-on:click="$wire.showModal({{$dv->id}})"
                                            class="inline-flex px-3 text-xs font-semibold leading-5 text-green-800 bg-green-100 rounded-full">
                                            View voucher information
                                        </button>
                                        <button x-on:click="showStatus = true; $wire.emit('dvClicked',{{$dv->id}});"
                                            class="inline-flex px-3 text-xs font-semibold leading-5 text-indigo-500 bg-indigo-100 rounded-full">
                                            View voucher feed
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
                                            {{$dv->user->department->department_name}},
                                            {{$dv->user->department->campus->campus_name}}
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
                                            {{$dv->user->department->campus->campus_address}}
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
                                            Created on
                                            <time datetime="2020-01-07">{{$dv->created_at}}</time>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>
                    @else
                    @if(str_contains(strtolower($dv->dv_tracking_number),strtolower($searchPending)))
                    <li class="rounded-lg">
                        <a class="block rounded-lg hover:cursor-pointer hover:bg-gray-50"
                            x-on:click="$wire.showModal({{$dv->id}})">
                            <div class="px-4 py-4 sm:px-6">
                                <div class="flex items-center justify-between">
                                    <p class="text-sm font-medium text-indigo-600 truncate">
                                        {{$dv->dv_tracking_number}} -
                                        {{$dv->user->name}}
                                    </p>
                                    <div class="flex flex-shrink-0 ml-2">
                                          <button x-on:click="$wire.showModal({{$dv->id}})"
                                              class="inline-flex px-3 text-xs font-semibold leading-5 text-green-800 bg-green-100 rounded-full">
                                              View voucher information
                                          </button>
                                          <button x-on:click="showStatus = true; $wire.emit('dvClicked',{{$dv->id}});"
                                              class="inline-flex px-3 text-xs font-semibold leading-5 text-indigo-500 bg-indigo-100 rounded-full">
                                              View voucher feed
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
                                            {{$dv->user->department->department_name}},
                                            {{$dv->user->department->campus->campus_name}}
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
                                            {{$dv->user->department->campus->campus_address}}
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
                                            Created on
                                            <time datetime="2020-01-07">{{$dv->created_at}}</time>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>
                    @endif
                    @endif
                    @endforeach
                    @endif
                </ul>

            </div>
        </div>
    </div>

    @if ($isHeadOrAdmin || $isAssigned)
    <div class="mx-auto mt-2 max-w-7xl sm:px-6 lg:px-8" id="pending" x-cloak x-show="active=='pdv'"
        x-transition:enter="transition ease-in-out delay-700 duration-500 " x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100">
        <div class="overflow-hidden divide-y divide-gray-500 rounded-lg shadow bg-secondary-bg-alt">
            <div class="flex flex-wrap items-center justify-between px-4 py-5 sm:px-6 sm:flex-nowrap">
                <div class="mt-2 ml-4">
                    <h3 class="text-lg font-medium leading-6 text-primary-bg">
                        Pending Disbursement Vouchers
                    </h3>
                </div>
                <div class="flex-shrink-0 mt-2 ml-4">
                    <input type="text" placeholder="Enter tracking number" wire:model.debounce.300ms="searchPending"
                        class="inline-flex items-center px-4 py-2 text-sm font-medium bg-gray-100 border rounded-md shadow-sm border-secondary-bg text-primaty-bg hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-secondary-bg">
                </div>
            </div>
            <div class="px-4 py-5 sm:p-6">
                <ul role="list" class="divide-y divide-secondary-text">
                    @if(count($milestones)==0)
                    <li class="rounded-lg">
                        <a class="block rounded-lg ">
                            <div class="px-4 py-4 mx-auto text-center sm:px-6">
                                <span class="text-sm tracking-widest text-center text-gray-600 uppercase">No Pending
                                    Vouchers</span>
                            </div>
                        </a>
                    </li>
                    @else
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
                                        <button x-on:click="$wire.showModal({{$milestone->disbursement_voucher->id}})"
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
                                            class="inline-flex px-2 py-1 mx-2 my-auto text-xs font-semibold leading-5 text-green-600 bg-blue-200 rounded-full hover:bg-blue-400 active:bg-secondary-bg"
                                            wire:click="forwardDocument({{$milestone->disbursement_voucher->id}},{{$milestone->id}},{{$milestone->disbursement_voucher->user->id}})">
                                            Forward voucher
                                        </button>
                                        @endif
                                        <button
                                            wire:click="showModalReturn({{$milestone->disbursement_voucher->id}},{{$milestone->id}},{{$milestone->disbursement_voucher->user->id}})"
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
                                            Created on
                                            <time
                                                datetime="2020-01-07">{{$milestone->disbursement_voucher->created_at}}</time>
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
                                        <button x-on:click="$wire.showModal({{$milestone->disbursement_voucher->id}})"
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
                                            class="inline-flex px-2 py-1 mx-2 my-auto text-xs font-semibold leading-5 text-green-600 bg-blue-200 rounded-full hover:bg-blue-400 active:bg-secondary-bg"
                                            wire:click="forwardDocument({{$milestone->disbursement_voucher->id}},{{$milestone->id}},{{$milestone->disbursement_voucher->user->id}})">
                                            Forward voucher
                                        </button>
                                        @endif
                                        <button
                                            wire:click="showModalReturn({{$milestone->disbursement_voucher->id}},{{$milestone->id}},{{$milestone->disbursement_voucher->user->id}})"
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
                                            Created on
                                            <time
                                                datetime="2020-01-07">{{$milestone->disbursement_voucher->created_at}}</time>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>
                    @endif
                    @endif
                    @endforeach
                    @endif
                </ul>

            </div>
        </div>
    </div>

     <!-- modal forward start-->
     <div class="fixed inset-0 z-10 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true"
     x-cloak x-show="showModalForward">
     <div class="flex items-end justify-center min-h-screen px-4 pt-4 pb-20 text-center sm:block sm:p-0">

         <div class="fixed inset-0 transition-opacity bg-opacity-75 bg-primary-text" aria-hidden="true" x-cloak
             x-show="showModalForward"></div>


         <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>

         <div x-cloak x-show="showModalForward" @click.away="showModalForward=false"
             x-transition:enter="ease-out duration-300"
             x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
             x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
             x-transition:leave="ease-in duration-200"
             x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
             x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
             class="inline-block px-4 pt-5 pb-4 mx-auto overflow-hidden text-left align-bottom transition-all transform rounded-lg shadow-xl bg-primary-bg-alt max-w-7xl sm:px-6 lg:px-8 sm:my-8 sm:align-middle sm:w-full sm:p-6">
             <div class="max-w-full mx-auto">
                 <div class="p-10 bg-gray-100">
                     <ul role="list"
                         class="space-y-12 sm:grid sm:grid-cols-2 sm:gap-x-6 sm:gap-y-12 sm:space-y-0 lg:grid-cols-3 lg:gap-x-8">

                     </ul>
                 </div>

             </div>
         </div>
     </div>
 </div>

 <!-- modal forward end -->
 <!-- modal return start-->
 <div class="fixed inset-0 z-10 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true"
     x-cloak x-show="showModalReturn">
     <div class="flex items-end justify-center min-h-screen px-4 pt-4 pb-20 text-center sm:block sm:p-0">

         <div class="fixed inset-0 transition-opacity bg-opacity-75 bg-primary-text" aria-hidden="true" x-cloak
             x-show="showModalReturn"></div>


         <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>

         <div x-cloak x-show="showModalReturn" @click.away="showModalReturn=false"
             x-transition:enter="ease-out duration-300"
             x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
             x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
             x-transition:leave="ease-in duration-200"
             x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
             x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
             class="inline-block px-4 pt-5 pb-4 mx-auto overflow-hidden text-left align-bottom transition-all transform rounded-lg shadow-xl bg-primary-bg-alt max-w-7xl sm:px-6 lg:px-8 sm:my-8 sm:align-middle sm:w-full sm:p-6">
             <div class="max-w-full mx-auto">
                 <div class="p-10 rounded-lg bg-secondary-text">
                     <h1 class="mb-10 font-sans text-lg font-bold tracking-wider drop-shadow-sm text-primary-bg">
                         SELECT WHERE
                         TO RETURN VOUCHER</h1>
                     <ul role="list"
                         class="space-y-12 sm:grid sm:grid-cols-2 sm:gap-x-6 sm:gap-y-12 sm:space-y-0 lg:grid-cols-3 lg:gap-x-8">
                         @if ($sigsReturn)
                         @foreach ($sigsReturn as $key => $mssig)
                         <li>
                             <div class="space-y-4 text-left">
                                 <button class="flex-shrink-0 block "
                                     wire:click.prevent="returnDoc({{$mssig->disbursement_voucher_id}},{{$mssig->id}},{{$mssig->assigned_user}})">
                                     <!-- This example requires Tailwind CSS v2.0+ -->

                                     <div
                                         class="flex items-center rounded-lg group-hover:bg-primary-text group-hover:bg-opacity-95 group-focus:ring-2 group-focus:ring-primary-text">
                                         <div>
                                             <img class="inline-block truncate rounded-full h-14 w-14"
                                                 src="{{$mssig->assigned->avatar != null ? asset($mssig->assigned->avatar) : asset($mssig->assigned->profile_photo_url)}}"
                                                 alt="{{$mssig->assigned->name}}">
                                         </div>
                                         <div class="ml-3 text-left">
                                             <p class="text-sm font-medium text-gray-700 group-hover:text-gray-900">
                                                 {{$mssig->assigned->name}}
                                             </p>
                                             <p class="text-xs font-medium text-gray-500 group-hover:text-gray-700">
                                                 @if ($mssig->assigned->position != null)
                                                 {{$mssig->assigned->position->position_name}}
                                                 @endif
                                             </p>
                                             <p class="text-xs font-medium text-gray-500 group-hover:text-gray-700">
                                                 @if ($mssig->assigned->department != null)
                                                 {{$mssig->assigned->department->department_name}}
                                                 @endif
                                             </p>


                                         </div>
                                     </div>



                                 </button>
                             </div>
                         </li>
                         @endforeach

                         @else
                         Nothing to show...
                         @endif
                     </ul>
                 </div>

             </div>
         </div>
     </div>
 </div>

 <!-- modal return end -->
 @endif

    <!-- modal view Info start -->
    <div class="fixed inset-0 z-10 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true"
        x-cloak x-show="showModal">
        <div class="flex items-end justify-center min-h-screen px-4 pt-4 pb-20 text-center sm:block sm:p-0">

            <div class="fixed inset-0 transition-opacity bg-opacity-75 bg-primary-text" aria-hidden="true" x-cloak
                x-show="showModal"></div>


            <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>

            <div x-cloak x-show="showModal" @click.away="showModal=false" x-transition:enter="ease-out duration-300"
                x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                x-transition:leave="ease-in duration-200"
                x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
                x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                class="inline-block px-4 pt-5 pb-4 mx-auto overflow-hidden text-left align-bottom transition-all transform rounded-lg shadow-xl bg-primary-bg-alt max-w-7xl sm:px-6 lg:px-8 sm:my-8 sm:align-middle sm:w-full sm:p-6">
                <div class="max-w-full mx-auto" x-data="{showInput : false}">
                    <!-- card start -->
                    <!-- This example requires Tailwind CSS v2.0+ -->
                    <div class="overflow-hidden bg-gray-100 shadow sm:rounded-lg" @click.away="showInput = false">
                        <div class="px-4 py-5 sm:px-6">
                            <h3 class="text-lg font-medium leading-6 text-gray-900">
                                Disbursement Voucher Information
                            </h3>
                            <p class="max-w-2xl mt-1 text-sm text-gray-500">
                                Voucher Details
                            </p>
                        </div>
                        <div class="px-4 py-5 border-t border-gray-200 sm:p-0">
                            @if ($dvInfo)
                            <dl class="sm:divide-y sm:divide-gray-200">
                                <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                    <dt class="text-sm font-medium text-gray-500">
                                        Disbursement Voucher Number
                                    </dt>
                                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">

                                        @if ($dvInfo->dv_number == null || $dvInfo->dv_number =="")
                                        Voucher number not yet set
                                        @else
                                        {{$dvInfo->dv_number}}
                                        @endif
                                    </dd>
                                </div>
                                <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                    <dt class="text-sm font-medium text-gray-500">
                                        Disbursement Voucher Tracking Number
                                    </dt>
                                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                        {{$dvInfo->dv_tracking_number}}
                                    </dd>
                                </div>
                                <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                    <dt class="text-sm font-medium text-gray-500">
                                        Payee
                                    </dt>
                                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                        {{$dvInfo->user->name}}
                                    </dd>
                                </div>
                                <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                    <dt class="text-sm font-medium text-gray-500">
                                        Application for
                                    </dt>
                                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                        @php
                                        $dv_type ="";

                                        if($dvInfo->dv_type_sorter->sorter == '3'){
                                        $dv_type =$dvInfo->dv_type_sorter->dv_sub_categories->dv_sub_category;
                                        }elseif ($dvInfo->dv_type_sorter->sorter == '2') {
                                        $dv_type =$dvInfo->dv_type_sorter->dv_categories->dv_category;
                                        }elseif ($dvInfo->dv_type_sorter->sorter == '1'){
                                        $dv_type =$dvInfo->dv_type_sorter->dv_type->dv_type;
                                        }else{
                                        $dv_type = "Couldn't be Found";
                                        }
                                        @endphp
                                        {{$dv_type}}
                                    </dd>
                                </div>
                                <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                    <dt class="text-sm font-medium text-gray-500">
                                        Email address
                                    </dt>
                                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                        {{$dvInfo->user->email}}
                                    </dd>
                                </div>
                                <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                    <dt class="text-sm font-medium text-gray-500">
                                        Amount Expected
                                    </dt>
                                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                        {{$dvModalTotalAmount}}
                                    </dd>
                                </div>
                                <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                    <dt class="text-sm font-medium text-gray-500">
                                        Fund Cluster
                                    </dt>
                                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">

                                        @if ($isHead)
                                            @if ($dvInfo->fund_cluster == null || $dvInfo->fund_cluster =="")
                                            Fund cluster not set yet
                                            @else
                                            {{$dvInfo->fund_cluster}}
                                            @endif
                                        @elseif ($isAdmin)
                                            @if (($dvInfo->fund_cluster == null || $dvInfo->fund_cluster =="")&&
                                            $dvInfo->user_id != auth()->user()->id)
                                            <span x-show="showInput==false"> Fund cluster not set yet</span> <a
                                                x-show="showInput==false" x-on:click="showInput=true"
                                                class="p-2 ml-3 text-gray-800 bg-green-300 border border-gray-200 rounded-lg hover:bg-primary-text hover:border-gray-100 hover:text-gray-300 active:bg-green-600 focus:ring-1 focus:ring-green-600">Set
                                                Fund Cluster</a>
                                            <div class="flex" x-show="showInput">
                                                <input id="fundcluster" name="fundcluster" type="text"
                                                    wire:model.defer="fundcluster"
                                                    class="flex p-2 mx-2 border rounded-lg text-md focus:ring-1 focus:ring-offset-primary-text" />
                                                @error('fundcluster')
                                                <span class="my-auto text-sm text-red-500">{{$message}}</span>
                                                @enderror
                                            </div> <button x-show="showInput" wire:click="setfundcluster({{$dvInfo->id}})"
                                                class="p-2 m-3 text-gray-800 bg-green-300 border border-gray-200 rounded-lg hover:bg-primary-text hover:border-gray-100 hover:text-gray-300 active:bg-green-600 focus:ring-1 focus:ring-green-600">
                                                Save Fund cluster Number</button>
                                            @else
                                            {{$dvInfo->fund_cluster}}
                                            @endif
                                        @endif

                                       
                                    </dd>
                                </div>
                                <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                    <dt class="text-sm font-medium text-gray-500">
                                        Mode of Payment
                                    </dt>
                                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                        {{$dvInfo->mop->mode_of_payment}}
                                    </dd>
                                </div>
                            </dl>
                            @else
                            <dl class="sm:divide-y sm:divide-gray-200"> <span
                                    class="tracking-widest text-gray-400 uppercase">nothing to show</span></dl>
                            @endif
                        </div>
                        <div class="px-4 py-5 border-t border-gray-200 sm:px-6">
                            <h3 class="text-lg font-medium leading-6 text-gray-900">
                                Particulars
                            </h3>
                            <p class="max-w-2xl mt-1 text-sm text-gray-500">
                                Voucher Entries
                            </p>
                        </div>
                        <div class="px-4 py-5 border-t border-gray-200 sm:p-0">
                            @if ($dvInfo)
                            @php
                            $dvparticulars =
                            App\Models\Particular::where('disbursement_voucher_id','=',$dvInfo->id)->get();
                            @endphp
                            @if($dvparticulars)
                            @foreach ($dvparticulars as $key => $dvparticular)
                            <dl class="sm:divide-y sm:divide-gray-200">
                                <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                    <dt class="text-sm font-medium text-gray-500">
                                        Entry No. {{$key +1}}
                                    </dt>
                                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                        {{$dvparticular->entry}}
                                    </dd>
                                </div>
                                <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                    <dt class="text-sm font-medium text-gray-500">
                                        Responsibility Center
                                    </dt>
                                    <dd class="mt-1 text-sm text-gray-900 uppercase sm:mt-0 sm:col-span-2">

                                        @if ($dvparticular->responsibility_center== null
                                        ||$dvparticular->responsibility_center=="")
                                        -----
                                        @else
                                        {{$dvparticular->responsibility_center}}
                                        @endif
                                    </dd>
                                </div>
                                <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                    <dt class="text-sm font-medium text-gray-500">
                                        MFO/PAP
                                    </dt>
                                    <dd class="mt-1 text-sm text-gray-900 uppercase sm:mt-0 sm:col-span-2">

                                        @if ($dvparticular->mfo_pap== null ||$dvparticular->mfo_pap=="")
                                        -----
                                        @else
                                        {{$dvparticular->mfo_pap}}
                                        @endif
                                    </dd>
                                </div>
                                <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                    <dt class="text-sm font-medium text-gray-500">
                                        Amount
                                    </dt>
                                    <dd class="mt-1 text-sm text-gray-900 uppercase sm:mt-0 sm:col-span-2">

                                        @if ($dvparticular->amount== null || $dvparticular->amount==0)
                                        -----
                                        @else
                                        {{$dvparticular->amount}}
                                        @endif
                                    </dd>
                                </div>
                            </dl>
                            @endforeach
                            @else
                            <dl class="sm:divide-y sm:divide-gray-200"> <span
                                    class="tracking-widest text-gray-400 uppercase">nothing to show</span></dl>
                            @endif
                            @else
                            <dl class="sm:divide-y sm:divide-gray-200"> <span
                                    class="tracking-widest text-gray-400 uppercase">nothing to show</span></dl>
                            @endif
                        </div>
                    </div>

                    <!-- card end -->


                </div>
            </div>
        </div>
    </div>

    <!-- modal view Info end -->
   
    <!-- feed slide over start -->
    <div class="fixed inset-0 overflow-hidden" x-cloak x-show="showStatus" aria-labelledby="slide-over-title"
        role="dialog" aria-modal="true">
        <div class="absolute inset-0 overflow-hidden">
            <div class="absolute inset-0" aria-hidden="true" x-cloak x-show="showStatus">
                <div class="fixed inset-y-0 right-0 flex max-w-full pl-10 sm:pl-16">

                    <div class="w-screen max-w-2xl" x-cloak x-show="showStatus"
                        x-transition:enter="transform transition ease-in-out duration-500 sm:duration-700"
                        x-transition:enter-start="translate-x-full" x-transition:enter-end="translate-x-0"
                        x-transition:leave="transform transition ease-in-out duration-500 sm:duration-700"
                        x-transition:leave-start="translate-x-0" x-transition:leave-end="translate-x-0">
                        <div class="flex flex-col h-full py-6 overflow-y-scroll shadow-xl bg-orange-ripe-light">
                            <div class="px-4 sm:px-6">
                                <div class="flex items-start justify-between">
                                    <h2 class="text-lg font-medium text-gray-900" id="slide-over-title">
                                        Disbursement Feed
                                    </h2>
                                    <div class="flex items-center ml-3 h-7">
                                        <button type="button" x-on:click="showStatus =false"
                                            class="text-gray-400 bg-white rounded-md hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                            <span class="sr-only">Close panel</span>
                                            <!-- Heroicon name: outline/x -->
                                            <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M6 18L18 6M6 6l12 12" />
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="relative flex-1 px-4 mt-6 sm:px-6">
                                <!-- Replace with your content -->
                                @livewire('client.components.dashboard.feed-status');
                                <!-- /End replace -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- feed slide over end -->
</div>
