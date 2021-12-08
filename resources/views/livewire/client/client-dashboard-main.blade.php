<div x-data="{showDvUpdated: @entangle('showDvUpdated')}">

    @slot('leftColumn')
    <!-- This example requires Tailwind CSS v2.0+ -->
    <nav class="pl-5 pr-5 space-y-1" aria-label="Sidebar">
        <!-- Current: " bg-secondary-text text-gray-900", Default: "text-gray-600 hover:bg-gray-50 hover:text-gray-900"
        -->
        <div class="gap-x-5">
            <button class="flex items-center px-3 py-2 my-1 text-sm font-medium rounded-md w-54 cursor-hand group"
                aria-current="page" x-on:click="active = 'dv'"
                x-bind:class="active=='dv' ? 'text-primary-bg bg-secondary-text' : 'text-primary-bg-alt hover:bg-secondary-bg-alt hover:text-primary-bg'">
                <span class="mr-2 truncate">
                    Disbursement Vouchers
                </span>

                <!-- Current: "bg-gray-100", Default: "bg-secondary-text text-gray-600 group-hover:bg-gray-200" -->
                @if($disbursement_voucher->count()>0)
                <span class="bg-gray-100 inline-block py-0.5 px-3 text-xs rounded-full">
                    {{$disbursement_voucher->count()}}
                </span>
                @endif

            </button>

            <button class="flex items-center px-3 py-2 my-1 text-sm font-medium rounded-md w-52 cursor-hand group"
                x-on:click="active = 'to'"
                x-bind:class="active=='to' ? 'text-primary-bg bg-secondary-text' :'text-primary-bg-alt hover:bg-secondary-bg-alt hover:text-primary-bg'">
                <span class="truncate">
                    Travel Orders
                </span>

                @if($travelorders->count()>0)
                <span class="bg-gray-100 ml-auto inline-block py-0.5 px-3 text-xs float-right rounded-full">
                    {{$travelorders->count()}}
                </span>
                @endif
            </button>




            <button class="flex items-center px-3 py-2 my-1 text-sm font-medium rounded-md w-52 cursor-hand group"
                x-on:click="active = 'reim'"
                x-bind:class="active=='reim' ? 'text-primary-bg bg-secondary-text' : 'text-primary-bg-alt hover:bg-secondary-bg-alt hover:text-primary-bg'">
                <span class="truncate">
                    Reimbursements
                </span>


            </button>

            <button class="flex items-center px-3 py-2 my-1 text-sm font-medium rounded-md w-52 cursor-hand group"
                x-on:click="active = 'comms'"
                x-bind:class="active=='comms' ? 'text-primary-bg bg-secondary-text' :'text-primary-bg-alt hover:bg-secondary-bg-alt hover:text-primary-bg'">
                <span class="truncate">
                    Communications
                </span>

                <span
                    class="bg-secondary-text text-gray-600 group-hover:bg-gray-200 ml-auto inline-block py-0.5 px-3 text-xs rounded-full">
                    19
                </span>
            </button>

        </div>


    </nav>

    <div class="pl-5">


        <dl class="grid grid-cols-1 gap-5 mt-5">
            <div class="relative px-4 pt-5 pb-12 overflow-hidden rounded-lg shadow bg-gray-50 sm:pt-6 sm:px-6">
                <dt>
                    <p class="text-sm font-medium text-gray-500 truncate">D.V. In Progress</p>
                </dt>
                <dd class="flex items-baseline pb-2 sm:pb-5">
                    <p class="text-2xl font-semibold text-gray-900">
                        {{$disbursement_voucher->count()}}
                    </p>
                    <div class="absolute inset-x-0 bottom-0 px-4 py-4 bg-gray-100 ">
                        <div class="text-sm">
                            <a href="#" class="font-medium text-primary-bg hover:text-primary-text"> View all</a>
                        </div>
                    </div>
                </dd>
            </div>
            <div class="relative px-4 pt-5 pb-12 overflow-hidden rounded-lg shadow bg-gray-50 sm:pt-6 sm:px-6">
                <dt>
                    <p class="text-sm font-medium text-gray-500 truncate">Unliquidated DV</p>
                </dt>
                <dd class="flex items-baseline pb-2 sm:pb-5">
                    <p class="text-2xl font-semibold text-gray-900">
                        50
                    </p>
                    <div class="absolute inset-x-0 bottom-0 px-4 py-4 bg-gray-100 ">
                        <div class="text-sm">
                            <a href="#" class="font-medium text-primary-bg hover:text-primary-text"> View all</a>
                        </div>
                    </div>
                </dd>
            </div>
            <div class="relative px-4 pt-5 pb-12 overflow-hidden rounded-lg shadow bg-gray-50 sm:pt-6 sm:px-6">
                <dt>
                    <p class="text-sm font-medium text-gray-500 truncate">D.V. In Progress</p>
                </dt>
                <dd class="flex items-baseline pb-2 sm:pb-5">
                    <p class="text-2xl font-semibold text-gray-900">
                        10,000
                    </p>
                    <div class="absolute inset-x-0 bottom-0 px-4 py-4 bg-gray-100 ">
                        <div class="text-sm">
                            <a href="#" class="font-medium text-primary-bg hover:text-primary-text"> View all</a>
                        </div>
                    </div>
                </dd>
            </div>
        </dl>
    </div>

    <!-- stats end -->

    @endslot
    @slot('rightCol')
    @livewire('client.components.dashboard.feed-status')
    @endslot
    <div x-cloak x-show="active == 'dv'" x-data="{emitCalled : @entangle('emitCalled')}">
        @livewire('client.components.dashboard.disbursement-vouchers')
        <div aria-live="assertive"
            class="fixed inset-0 flex items-end px-4 py-6 pointer-events-none sm:p-6 sm:items-start">
            <div class="flex flex-col items-center w-full space-y-4 sm:items-end">

                <div class="w-full max-w-sm overflow-hidden bg-white rounded-lg shadow-lg pointer-events-auto ring-1 ring-black ring-opacity-5"
                    x-cloak x-show="showDvUpdated" x-transition:enter="transform ease-out duration-300 transition"
                    x-transition:enter-start="translate-y-2 opacity-0 sm:translate-y-0 sm:translate-x-2"
                    x-transition:enter-end="translate-y-0 opacity-100 sm:translate-x-0"
                    x-transition:leave="opacity-100 duration-500" x-transition:leave-start="opacity-100"
                    x-transition:leave-end="opacity-0">
                    <div class="p-4">
                        <div class="flex items-start">
                            <div class="flex-shrink-0">
                                <!-- Heroicon name: outline/inbox -->
                                <svg class="w-6 h-6 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4" />
                                </svg>
                            </div>
                            <div class="ml-3 w-0 flex-1 pt-0.5">
                                <p class="text-sm font-medium text-gray-900">
                                    Disbursement voucher updated!
                                </p>
                                <p class="mt-1 text-sm text-gray-500">
                                    One of your vouchers have been updated click view to open progress panel!
                                </p>
                                <div class="flex mt-3 space-x-7">
                                    @php
                                    if(count(App\Models\DisbursementVoucher::get())>0){
                                    $dvID =
                                    App\Models\DisbursementVoucher::first()->orderBy('updated_at','desc')->value('id');
                                    }else{
                                    $dvID = 0;
                                    }
                                    @endphp
                                    <button type="button"
                                        class="text-sm font-medium text-indigo-600 bg-white rounded-md hover:text-indigo-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                                        wire:click="$emit('dvClicked',{{$dvID}})" x-on:click="showFee   =true;
                                        showDvUpdated = false;">
                                        View

                                    </button>
                                    <button type="button"
                                        class="text-sm font-medium text-gray-700 bg-white rounded-md hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                                        x-on:click="showDvUpdated = false">
                                        Dismiss
                                    </button>
                                </div>
                            </div>
                            <div class="flex flex-shrink-0 ml-4">
                                <button
                                    class="inline-flex text-gray-400 bg-white rounded-md hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                                    x-on:click="showDvUpdated = false">
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
    <div x-cloak x-show="active == 'to'">
        @livewire('client.components.dashboard.travel-order-list')
    </div>
</div>
