<div class="mx-auto max-w-7xl sm:px-6 lg:px-8"
    x-data="{ active : @entangle('active'),personalClicked : @entangle('personalClicked'),pendingClicked : @entangle('pendingClicked'), show_Banner :@entangle('showBanner') }"
    x-init="$watch('show_Banner', value => {
        if(value == true){
            setInterval(function(){ show_Banner = false; }, 5000);
        }
    })">
    {{-- notif --}}
    <div aria-live="assertive" class="fixed inset-0 flex items-end px-4 py-6 pointer-events-none sm:p-6 sm:items-start">
        <div class="flex flex-col items-center w-full space-y-4 sm:items-end">
            <div class="w-full max-w-md overflow-hidden rounded-lg shadow-lg pointer-events-auto bg-opacity-95 bg-primary-bg ring-1 ring-black ring-opacity-5"
                x-cloak x-show="show_Banner" x-transition:enter="transform ease-out duration-300 transition"
                x-transition:enter-start="ranslate-y-2 opacity-0 sm:translate-y-0 sm:translate-x-2"
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


    <div class="mx-auto mt-2 max-w-7xl sm:px-6 lg:px-8" id="personal" x-show="active=='myacc'">
        <div class="overflow-hidden divide-y divide-gray-500 rounded-lg shadow bg-secondary-bg-alt">
            <div class="flex flex-wrap items-center justify-between px-4 py-5 sm:px-6 sm:flex-nowrap">
                <div class="mt-2 ml-4">
                    <h3 class="text-lg font-medium leading-6 text-primary-bg">
                        Disbursement Vouchers
                    </h3>
                </div>
                <div class="flex-shrink-0 mt-2 ml-4">
                    <input type="text"
                        class="inline-flex items-center px-4 py-2 text-sm font-medium bg-gray-100 border rounded-md shadow-sm border-secondary-bg text-primaty-bg hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-secondary-bg">
                </div>
            </div>
            <div class="px-4 py-5 sm:p-6">
                <ul role="list" class="divide-y divide-secondary-text">
                    <li class="py-4">
                        asd
                    </li>
                    <li class="py-4">
                        asd
                    </li>

                    <!-- More items... -->
                </ul>

            </div>
        </div>
    </div>

    <div class="mx-auto mt-2 max-w-7xl sm:px-6 lg:px-8" id="pending" x-show="active=='pdv'">
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
                    <li class="py-4">
                        {{$milestone->disbursement_voucher->dv_tracking_number}}
                    </li>
                    @endforeach


                    <!-- More items... -->
                </ul>

            </div>
        </div>
    </div>


</div>
