<div>
    @slot('leftColumn')
    <!-- This example requires Tailwind CSS v2.0+ -->
    <nav class="pl-5 pr-5 space-y-1" aria-label="Sidebar">
        <!-- Current: " bg-secondary-text text-gray-900", Default: "text-gray-600 hover:bg-gray-50 hover:text-gray-900"
        -->
        <div class="gap-x-5">
            <button class="flex items-center px-3 py-2 text-sm font-medium rounded-md cursor-hand group"
                aria-current="page" x-on:click="active = 'dv'"
                x-bind:class="active=='dv' ? 'text-primary-bg bg-secondary-text' : 'text-primary-bg-alt hover:bg-secondary-bg-alt hover:text-primary-bg'">
                <span class="truncate">
                    Disbursement Vouchers
                </span>

                <!-- Current: "bg-gray-100", Default: "bg-secondary-text text-gray-600 group-hover:bg-gray-200" -->
                @if($disbursement_voucher->count()>0)
                <span class="bg-gray-100 ml-auto inline-block py-0.5 px-3 text-xs rounded-full">
                    {{$disbursement_voucher->count()}}
                </span>
                @endif

            </button>




            <button class="flex items-center px-3 py-2 text-sm font-medium rounded-md cursor-hand group"
                x-on:click="active = 'reim'"
                x-bind:class="active=='reim' ? 'text-primary-bg bg-secondary-text' : 'text-primary-bg-alt hover:bg-secondary-bg-alt hover:text-primary-bg'">
                <span class="truncate">
                    Reimbursements
                </span>


            </button>

            <button class="flex items-center px-3 py-2 text-sm font-medium rounded-md cursor-hand group"
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
    <div x-cloak x-show="active == 'dv'">
        @livewire('client.components.dashboard.disbursement-vouchers')
    </div>

</div>
