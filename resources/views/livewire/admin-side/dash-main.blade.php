<div x-data="{}">
    @slot('leftColumn')
    <!-- This example requires Tailwind CSS v2.0+ -->
    <nav class="pl-5 pr-5 space-y-1" aria-label="Sidebar">
        <!-- Current: "bg-secondary-text text-gray-900", Default: "text-gray-600 hover:bg-gray-50 hover:text-gray-900" -->
        <a href="#"
            class="flex items-center px-3 py-2 text-sm font-medium text-gray-900 rounded-md bg-secondary-text group"
            aria-current="page">
            <span class="truncate">
                Disbursement Vouchers
            </span>

            <!-- Current: "bg-gray-100", Default: "bg-secondary-text text-gray-600 group-hover:bg-gray-200" -->
            <span class="bg-gray-100 ml-auto inline-block py-0.5 px-3 text-xs rounded-full">
                5
            </span>
        </a>

        <a href="#"
            class="flex items-center px-3 py-2 text-sm font-medium text-gray-600 rounded-md hover:bg-gray-50 hover:text-gray-900 group">
            <span class="truncate">
                Liquidations
            </span>
            <span class="bg-secondary-text ml-auto inline-block py-0.5 px-3 text-xs rounded-full">
                50
            </span>
        </a>

        <a href="#"
            class="flex items-center px-3 py-2 text-sm font-medium text-gray-600 rounded-md hover:bg-gray-50 hover:text-gray-900 group">
            <span class="truncate">
                Reimbursements
            </span>


        </a>

        <a href="#"
            class="flex items-center px-3 py-2 text-sm font-medium text-gray-600 rounded-md hover:bg-gray-50 hover:text-gray-900 group">
            <span class="truncate">
                Communications
            </span>

            <span
                class="bg-secondary-text text-gray-600 group-hover:bg-gray-200 ml-auto inline-block py-0.5 px-3 text-xs rounded-full">
                19
            </span>
        </a>


    </nav>
    <div class="pl-5">


        <dl class="grid grid-cols-1 gap-5 mt-5">
            <div class="relative px-4 pt-5 pb-12 overflow-hidden rounded-lg shadow bg-gray-50 sm:pt-6 sm:px-6">
                <dt>
                    <p class="text-sm font-medium text-gray-500 truncate">D.V. In Progress</p>
                </dt>
                <dd class="flex items-baseline pb-2 sm:pb-5">
                    <p class="text-2xl font-semibold text-gray-900">
                        10
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


    <div class="flex max-h-screen min-h-full">
        <div class="flow-root">
            <ul role="list" class="">
                <li class="" id="rejected">
                    <div class="relative pb-8">
                        <span class="absolute top-4 left-4 -ml-px h-full w-0.5 bg-gray-200" aria-hidden="true"></span>
                        <div class="relative inline-flex space-x-3 bg-gray-100 rounded-full ">
                            <div>
                                <span
                                    class="flex items-center justify-center w-8 h-8 bg-red-500 rounded-full ring-8 ring-gray-100">
                                    <!-- Heroicon name: solid/user -->
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-white"
                                        viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </span>
                            </div>
                            <div class="min-w-0 flex-1 pt-1.5 flex justify-between space-x-4 text-xs">
                                <div>
                                    <p class="text-gray-500 ">Rejected by Accounting by <strong
                                            class="text-primary-bg">Juan Dela Cruz</strong></p>
                                </div>
                                <div class="pr-3 text-right text-gray-500 whitespace-nowrap">
                                    <time datetime="2020-09-20">Sep 20</time>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="" id="closed">
                    <div class="relative pb-8">
                        <span class="absolute top-4 left-4 -ml-px h-full w-0.5 bg-gray-200" aria-hidden="true"></span>
                        <div class="relative inline-flex space-x-3 bg-gray-100 rounded-full ">
                            <div>
                                <span
                                    class="flex items-center justify-center w-8 h-8 bg-green-700 rounded-full ring-8 ring-gray-100">
                                    <!-- Heroicon name: solid/user -->
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-white"
                                        viewBox="0 0 20 20" fill="currentColor">
                                        <path d="M4 3a2 2 0 100 4h12a2 2 0 100-4H4z" />
                                        <path fill-rule="evenodd"
                                            d="M3 8h14v7a2 2 0 01-2 2H5a2 2 0 01-2-2V8zm5 3a1 1 0 011-1h2a1 1 0 110 2H9a1 1 0 01-1-1z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </span>
                            </div>
                            <div class="min-w-0 flex-1 pt-1.5 flex justify-between space-x-4 text-xs">
                                <div>
                                    <p class="text-gray-500 ">Closed by Accounting by <strong
                                            class="text-primary-bg">Juan Dela Cruz</strong></p>
                                </div>
                                <div class="pr-3 text-right text-gray-500 whitespace-nowrap">
                                    <time datetime="2020-09-20">Sep 20</time>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="" id="returned">
                    <div class="relative pb-8">
                        <span class="absolute top-4 left-4 -ml-px h-full w-0.5 bg-gray-200" aria-hidden="true"></span>
                        <div class="relative inline-flex space-x-3 bg-gray-100 rounded-full ">
                            <div>
                                <span
                                    class="flex items-center justify-center w-8 h-8 bg-yellow-500 rounded-full ring-8 ring-gray-100">
                                    <!-- Heroicon name: solid/user -->
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="w-5 h-5 text-white transform scale-y-105" viewBox="0 0 20 20"
                                        fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M7.707 3.293a1 1 0 010 1.414L5.414 7H11a7 7 0 017 7v2a1 1 0 11-2 0v-2a5 5 0 00-5-5H5.414l2.293 2.293a1 1 0 11-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </span>
                            </div>
                            <div class="min-w-0 flex-1 pt-1.5 flex justify-between space-x-4 text-xs">
                                <div>
                                    <p class="text-gray-500 ">Returned to Budget Office by <strong
                                            class="text-primary-bg">Juan Dela Cruz</strong></p>
                                </div>
                                <div class="pr-3 text-right text-gray-500 whitespace-nowrap">
                                    <time datetime="2020-09-20">Sep 20</time>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="" id="forwarded">
                    <div class="relative pb-8">
                        <span class="absolute top-4 left-4 -ml-px h-full w-0.5 bg-gray-200" aria-hidden="true"></span>
                        <div class="relative inline-flex space-x-3 bg-gray-100 rounded-full ">
                            <div>
                                <span
                                    class="flex items-center justify-center w-8 h-8 bg-green-500 rounded-full ring-8 ring-gray-100">
                                    <!-- Heroicon name: solid/user -->
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-white"
                                        viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M3.293 9.707a1 1 0 010-1.414l6-6a1 1 0 011.414 0l6 6a1 1 0 01-1.414 1.414L11 5.414V17a1 1 0 11-2 0V5.414L4.707 9.707a1 1 0 01-1.414 0z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </span>
                            </div>
                            <div class="min-w-0 flex-1 pt-1.5 flex justify-between space-x-4 text-xs">
                                <div>
                                    <p class="text-gray-500 ">Forwarded to Budget Office by <strong
                                            class="text-primary-bg">Juan Dela Cruz</strong></p>
                                </div>
                                <div class="pr-3 text-right text-gray-500 whitespace-nowrap">
                                    <time datetime="2020-09-20">Sep 20</time>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>

                <li class="" id="recieved">
                    <div class="relative pb-8">

                        <div class="relative inline-flex space-x-3 bg-gray-100 rounded-full ">
                            <div>
                                <span
                                    class="flex items-center justify-center w-8 h-8 bg-blue-500 rounded-full ring-8 ring-gray-100">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-white"
                                        viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </span>
                            </div>
                            <div class="min-w-0 flex-1 pt-1.5 flex justify-between space-x-4 text-xs">
                                <div>
                                    <p class="text-gray-500 ">Recieved by ICU From <strong class="text-primary-bg">Juan
                                            Dela Cruz</strong></p>
                                </div>
                                <div class="pr-3 text-right text-gray-500 whitespace-nowrap">
                                    <time datetime="2020-09-20">Sep 20</time>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>

    </div>


    @endslot
    <div class="grid-cols-12 gap-6">
        <div class="col-span-12">
            {{-- //remove later --}}
            <!-- This example requires Tailwind CSS v2.0+ -->
            <div class="mt-3">

                <dl class="grid grid-cols-1 gap-5 mt-5 sm:grid-cols-3">
                    {{-- travel orders start --}}
                    <!-- This example requires Tailwind CSS v2.0+ -->
                    <div class="flex flex-col col-span-3" x-data="{showModal : @entangle('showModal')}">
                        <div class="overflow-hidden bg-gray-100 shadow sm:rounded-md">
                            <ul role="list" class="divide-y divide-gray-200">
                                @if(isset($travelorders))
                                @foreach($travelorders as $travelOrder)
                                <li>
                                    <a href="#" class="block hover:bg-gray-50"
                                        wire:click="setmodalID({{$travelOrder->id}})">
                                        <div class="flex items-center px-4 py-4 sm:px-6">
                                            <div class="flex items-center flex-1 min-w-0">
                                                <div class="flex-shrink-0">
                                                    {{-- need pic dri gab --}}
                                                    <img class="w-12 h-12 rounded-full"
                                                        src="{{ Auth::user()->profile_photo_url }}"
                                                        alt="{{ Auth::user()->name }}">
                                                </div>
                                                <div class="flex-1 min-w-0 px-4 md:grid md:grid-cols-2 md:gap-4">
                                                    <div>
                                                        <p class="text-sm font-medium text-indigo-600 truncate">
                                                            {{$travelOrder->user->first_name.' '.$travelOrder->user->last_name}}
                                                        </p>
                                                        <p class="flex items-center mt-2 text-sm text-gray-500">
                                                            <!-- Heroicon name: solid/mail -->
                                                            <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400"
                                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                                fill="currentColor" aria-hidden="true">
                                                                <path
                                                                    d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                                                                <path
                                                                    d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
                                                            </svg>
                                                            <span class="truncate">{{$travelOrder->user->email}}</span>
                                                        </p>
                                                    </div>
                                                    <div class="hidden md:block">
                                                        <div>
                                                            <p class="text-sm text-gray-900">
                                                                Applied on
                                                                <time
                                                                    datetime="">{{Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $travelOrder->created_at)->format('F d, Y')}}</time>
                                                            </p>
                                                            <p class="flex items-center mt-2 text-sm text-gray-500">
                                                                <!-- Heroicon name: solid/check-circle -->
                                                                {{$travelOrder->purpose}}
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <!-- Heroicon name: solid/chevron-right -->
                                                <svg class="w-5 h-5 text-gray-400" xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                    <path fill-rule="evenodd"
                                                        d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                @endforeach
                                @else
                                <li>
                                    <a href="#" class="block text-center cursor-default">
                                        <span class="flex items-center px-4 py-4 text-gray-600"> No travel orders to
                                            show.</span>
                                    </a>
                                </li>
                                @endif

                            </ul>
                        </div>
                        {{-- modals for to start --}}
                        <div class="fixed inset-0 z-10 overflow-y-auto" aria-labelledby="modal-title" role="dialog"
                            aria-modal="true" x-cloak x-show="showModal" x-transition:enter="ease-out duration-300"
                            x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                            x-transition:leave="ease-in duration-200" x-transition:leave-start="opacity-100"
                            x-transition:leave-end="opacity-0" @click.away="showModal = showFlyout= false"
                            x-data="{showFlyout : false}">

                            <div
                                class="flex items-end justify-center min-h-screen px-4 pt-4 pb-20 overflow-x-auto text-center sm:block sm:p-0">
                                <!-- start of flyout -->

                                <div class="relative top-0" id="flyout" x-show="showFlyout"
                                    @click.away="showFlyout= false">
                                    <div class="absolute z-20 w-screen px-2 mt-3 origin-bottom transform -translate-x-1/2 min-w-max top-20 left-1/2 sm:px-0 "
                                        x-show="showFlyout" @click.away="showFlyout= false"
                                        x-transition:enter="transition ease-out duration-600"
                                        x-transition:enter-start="transform opacity-0 scale-0"
                                        x-transition:enter-end="transform opacity-100 scale-100"
                                        x-transition:leave="transition ease-in duration-75"
                                        x-transition:leave-start="transform opacity-100 scale-100"
                                        x-transition:leave-end="transform opacity-0 scale-0" x-cloak>
                                        <div
                                            class="overflow-hidden rounded-lg shadow-lg ring-1 ring-black ring-opacity-5">
                                            <div class="relative grid grid-cols-1 gap-6 px-5 py-6 bg-gray-100 sm:p-8"
                                                x-data="{ showMe : false }">
                                                <a href="#" x-on:click="showMe = !showMe"
                                                    class="flex items-start p-3 -m-3 transition duration-150 ease-in-out rounded-lg hover:bg-gray-50">
                                                    <div
                                                        class="flex items-center justify-center flex-shrink-0 w-10 h-10 text-white bg-indigo-500 rounded-md sm:h-12 sm:w-12">
                                                        <!-- Heroicon name: outline/chart-bar -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6"
                                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2"
                                                                d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                                        </svg>
                                                    </div>
                                                    <div class="ml-4 text-left">
                                                        <p class="text-base font-medium text-gray-900">
                                                            2021-02-02
                                                        </p>
                                                        <p class="mt-1 text-sm text-gray-500">
                                                            Click To View Itenerary
                                                        </p>
                                                    </div>


                                                </a>
                                                <div x-cloak x-show="showMe"
                                                    class="relative inset-0 bottom-0 right-0 z-30 bg-gray-50">

                                                    <div class="inline-flex">
                                                        <span>
                                                            Covered By Registration Fee: Breakfast | Lunch | Lodging
                                                        </span>
                                                    </div>
                                                    <div class="flex flex-col">
                                                        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                                                            <div
                                                                class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
                                                                <div
                                                                    class="overflow-hidden border-b border-gray-200 shadow sm:rounded-lg">
                                                                    <table class="min-w-full divide-y divide-gray-200">
                                                                        <thead class="bg-gray-50">
                                                                            <tr class="uppercase">
                                                                                <th scope="col"
                                                                                    class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                                                                    Place To Visit
                                                                                </th>
                                                                                <th scope="col"
                                                                                    class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                                                                    Departure Time
                                                                                </th>
                                                                                <th scope="col"
                                                                                    class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                                                                    Arrival Time
                                                                                </th>
                                                                                <th scope="col"
                                                                                    class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                                                                    Mode Of Trans.
                                                                                </th>
                                                                                <th scope="col"
                                                                                    class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                                                                    TRANS. EXP
                                                                                </th>
                                                                                <th scope="col"
                                                                                    class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                                                                    OTHERS
                                                                                </th>
                                                                                <th scope="col"
                                                                                    class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                                                                    TOTAL
                                                                                </th>
                                                                                <th scope="col"
                                                                                    class="relative px-6 py-3">
                                                                                    <span class="sr-only">Edit</span>
                                                                                </th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <!-- Odd row -->
                                                                            <tr class="bg-gray-100">
                                                                                <td
                                                                                    class="px-6 py-4 text-sm font-medium text-gray-900 whitespace-nowrap">
                                                                                    Jane Cooper
                                                                                </td>
                                                                                <td
                                                                                    class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">
                                                                                    Regional Paradigm Technician
                                                                                </td>
                                                                                <td
                                                                                    class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">
                                                                                    jane.cooper@example.com
                                                                                </td>
                                                                                <td
                                                                                    class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">
                                                                                    Admin
                                                                                </td>
                                                                                <td
                                                                                    class="px-6 py-4 text-sm font-medium text-right whitespace-nowrap">
                                                                                    <a href="#"
                                                                                        class="text-indigo-600 hover:text-indigo-900">Edit</a>
                                                                                </td>
                                                                            </tr>

                                                                            <!-- Even row -->
                                                                            <tr class="bg-gray-50">
                                                                                <td
                                                                                    class="px-6 py-4 text-sm font-medium text-gray-900 whitespace-nowrap">
                                                                                    Cody Fisher
                                                                                </td>
                                                                                <td
                                                                                    class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">
                                                                                    Product Directives Officer
                                                                                </td>
                                                                                <td
                                                                                    class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">
                                                                                    cody.fisher@example.com
                                                                                </td>
                                                                                <td
                                                                                    class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">
                                                                                    Owner
                                                                                </td>
                                                                                <td
                                                                                    class="px-6 py-4 text-sm font-medium text-right whitespace-nowrap">
                                                                                    <a href="#"
                                                                                        class="text-indigo-600 hover:text-indigo-900">Edit</a>
                                                                                </td>
                                                                            </tr>

                                                                            <!-- More people... -->
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                            </div>

                                        </div>
                                    </div>
                                </div>
                                {{-- end of flyout --}}

                                <div class="fixed inset-0 transition-opacity bg-opacity-75 bg-primary-bg"
                                    aria-hidden="true"></div>

                                <!-- This element is to trick the browser into centering the modal contents. -->
                                <span class="hidden sm:inline-block sm:align-middle sm:h-screen"
                                    aria-hidden="true">&#8203;</span>


                                <div class="inline-block px-4 pt-5 pb-4 overflow-hidden text-left align-bottom transition-all transform rounded-lg shadow-xl bg-primary-text sm:my-8 sm:align-middle sm:max-w-lg sm:w-full sm:p-6"
                                    x-transition:enter="ease-out duration-300"
                                    x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                                    x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                                    x-transition:leave="ease-in duration-200"
                                    x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
                                    x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95">


                                    <div>

                                        {{-- Start of TO INFO --}}
                                        @if(isset($travelordermodalinfo))
                                        @foreach($travelordermodalinfo as $travelordermodaldet)
                                        <div class="overflow-hidden bg-gray-100 shadow sm:rounded-lg">
                                            <div class="px-4 py-5 sm:px-6">
                                                <h3 class="text-lg font-medium leading-6 text-gray-900">
                                                    Travel Order Information
                                                </h3>
                                                <p class="max-w-2xl mt-1 text-sm text-gray-500">
                                                    Travel order details and itinerary
                                                </p>
                                            </div>
                                            <div class="px-4 py-5 border-t border-gray-200 sm:p-0">
                                                <dl class="sm:divide-y sm:divide-gray-200">
                                                    <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                                        <dt class="text-sm font-medium text-gray-500">
                                                            Applicant
                                                        </dt>
                                                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                                            {{$travelordermodaldet->user->first_name.' '.$travelordermodaldet->user->last_name}}
                                                        </dd>
                                                    </div>
                                                    <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                                        <dt class="text-sm font-medium text-gray-500">
                                                            Purpose
                                                        </dt>
                                                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                                            {{$travelordermodaldet->purpose}}
                                                        </dd>
                                                    </div>
                                                    <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                                        <dt class="text-sm font-medium text-gray-500">
                                                            Total amount
                                                        </dt>
                                                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                                            P {{$travelordermodaldet->total}}
                                                        </dd>
                                                    </div>
                                                    <div class="py-4 cursor-pointer sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6"
                                                        x-on:click="showFlyout = true">

                                                        <dt class="text-sm font-medium text-gray-500">
                                                            Date Range
                                                        </dt>
                                                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                                            {{$travelOrder->date_range}}
                                                        </dd>

                                                    </div>
                                                    {{-- <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                                                <dt class="text-sm font-medium text-gray-500">
                                                                Attachments
                                                                </dt>
                                                                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                                                <ul role="list" class="border border-gray-200 divide-y divide-gray-200 rounded-md">
                                                                    <li class="flex items-center justify-between py-3 pl-3 pr-4 text-sm">
                                                                    <div class="flex items-center flex-1 w-0">
                                                                        <!-- Heroicon name: solid/paper-clip -->
                                                                        <svg class="flex-shrink-0 w-5 h-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                                        <path fill-rule="evenodd" d="M8 4a3 3 0 00-3 3v4a5 5 0 0010 0V7a1 1 0 112 0v4a7 7 0 11-14 0V7a5 5 0 0110 0v4a3 3 0 11-6 0V7a1 1 0 012 0v4a1 1 0 102 0V7a3 3 0 00-3-3z" clip-rule="evenodd" />
                                                                        </svg>
                                                                        <span class="flex-1 w-0 ml-2 truncate">
                                                                        resume_back_end_developer.pdf
                                                                        </span>
                                                                    </div>
                                                                    <div class="flex-shrink-0 ml-4">
                                                                        <a href="#" class="font-medium text-indigo-600 hover:text-indigo-500">
                                                                        Download
                                                                        </a>
                                                                    </div>
                                                                    </li>
                                                                    <li class="flex items-center justify-between py-3 pl-3 pr-4 text-sm">
                                                                    <div class="flex items-center flex-1 w-0">
                                                                        <!-- Heroicon name: solid/paper-clip -->
                                                                        <svg class="flex-shrink-0 w-5 h-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                                        <path fill-rule="evenodd" d="M8 4a3 3 0 00-3 3v4a5 5 0 0010 0V7a1 1 0 112 0v4a7 7 0 11-14 0V7a5 5 0 0110 0v4a3 3 0 11-6 0V7a1 1 0 012 0v4a1 1 0 102 0V7a3 3 0 00-3-3z" clip-rule="evenodd" />
                                                                        </svg>
                                                                        <span class="flex-1 w-0 ml-2 truncate">
                                                                        coverletter_back_end_developer.pdf
                                                                        </span>
                                                                    </div>
                                                                    <div class="flex-shrink-0 ml-4">
                                                                        <a href="#" class="font-medium text-indigo-600 hover:text-indigo-500">
                                                                        Download
                                                                        </a>
                                                                    </div>
                                                                    </li>
                                                                </ul>
                                                                </dd>
                                                            </div> --}}
                                                </dl>
                                            </div>
                                        </div>
                                        @endforeach
                                        @endif

                                        {{-- end of to INFO --}}

                                    </div>
                                    <div class="mt-5 sm:mt-6 sm:grid sm:grid-cols-2 sm:gap-3 sm:grid-flow-row-dense">
                                        <button type="button"
                                            class="inline-flex justify-center w-full px-4 py-2 text-base font-medium text-white border border-transparent rounded-md shadow-sm bg-primary-bg-alt hover:bg-primary-bg focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-transparent focus:ring-secondary-bg sm:col-start-2 sm:text-sm">
                                            Create Voucher
                                        </button>
                                        <button type="button"
                                            class="inline-flex justify-center w-full px-4 py-2 mt-3 text-base font-medium text-gray-700 bg-gray-100 border border-gray-300 rounded-md shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-bg-alt sm:mt-0 sm:col-start-1 sm:text-sm"
                                            @click="showModal=false">
                                            Close
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{--modals for to end--}}
                    </div>
                    {{-- travel orders end --}}
                </dl>
            </div>

        </div>
    </div>



</div>
