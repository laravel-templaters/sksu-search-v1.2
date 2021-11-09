<div>
    <div class="grid-cols-12 gap-6">
        <div class="col-span-12">
            {{-- //remove later --}}
                        <!-- This example requires Tailwind CSS v2.0+ -->
                <div class="mt-3">
                    <h3 class="text-lg font-medium leading-6 text-primary-bg" x-data="{showOptions : false}">
                       <span class="inline">Travel Order</span>
                       <!-- This example requires Tailwind CSS v2.0+ -->
                            <div class="relative inline-block mx-auto">
                                <div>
                                    <button type="button" class="flex items-center bg-transparent rounded-full text-primary-bg hover:text-gray-600 focus:outline-none focus:ring-2 focus:ring-primary-bg-alt" id="menu-button" aria-expanded="true" aria-haspopup="true" x-on:click="showOptions = !showOptions ">
                                    <span class="sr-only">Open options</span>
                                    <!-- Heroicon name: solid/dots-vertical -->
                                    <svg class="w-auto h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z" />
                                    </svg>
                                    </button>
                                </div>

                            <!--
                                Dropdown menu, show/hide based on menu state.

                                Entering: "transition ease-out duration-100"
                                From: "transform opacity-0 scale-95"
                                To: "transform opacity-100 scale-100"
                                Leaving: "transition ease-in duration-75"
                                From: "transform opacity-100 scale-100"
                                To: "transform opacity-0 scale-95"
                            -->
                                <div class="absolute left-0 w-56 mt-2 origin-bottom-left bg-white rounded-md shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1" @click.away="showOptions=false" x-show="showOptions"
                                x-transition:enter="transition ease-out duration-100"
                                x-transition:enter-start="transform opacity-0 scale-95"
                                x-transition:enter-end="transform opacity-100 scale-100"
                                x-transition:leave="transition ease-in duration-75"
                                x-transition:leave-start="transform opacity-100 scale-100"
                                x-transition:leave-end= "transform opacity-0 scale-95" x-cloak>
                                    <div class="py-1" role="none">
                                    <!-- Active: "bg-gray-100 text-gray-900", Not Active: "text-gray-700" -->
                                    <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="menu-item-0">Disbursement Vouchers</a>
                                    <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="menu-item-0">Change with</a>
                                    <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="menu-item-1">Other</a>
                                    <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="menu-item-2">Transaction types</a>
                                    
                                    </div>
                                </div>
                            </div>
                    </h3>
                    <dl class="grid grid-cols-1 gap-5 mt-5 sm:grid-cols-3">
                       {{-- travel orders start --}}
                           <!-- This example requires Tailwind CSS v2.0+ -->
                            <div class="flex flex-col col-span-3" x-data = "{showModal : @entangle('showModal')}">
                                <div class="overflow-hidden bg-white shadow sm:rounded-md">
                                    <ul role="list" class="divide-y divide-gray-200">
                                        @if(isset($travelorders))
                                            @foreach($travelorders as $travelOrder)
                                                <li>
                                                    <a href="#" class="block hover:bg-gray-50" wire:click="setmodalID({{$travelOrder->id}})">
                                                        <div class="flex items-center px-4 py-4 sm:px-6">
                                                            <div class="flex items-center flex-1 min-w-0">
                                                                <div class="flex-shrink-0">
                                                                {{-- need pic dri gab --}}
                                                                <img class="w-12 h-12 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                                                                </div>
                                                                <div class="flex-1 min-w-0 px-4 md:grid md:grid-cols-2 md:gap-4">
                                                                    <div>
                                                                    <p class="text-sm font-medium text-indigo-600 truncate">{{$travelOrder->user->first_name.' '.$travelOrder->user->last_name}}</p>
                                                                        <p class="flex items-center mt-2 text-sm text-gray-500">
                                                                        <!-- Heroicon name: solid/mail -->
                                                                        <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                                            <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                                                                            <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
                                                                        </svg>
                                                                        <span class="truncate">{{$travelOrder->user->email}}</span>
                                                                        </p>
                                                                    </div>
                                                                    <div class="hidden md:block">
                                                                        <div>
                                                                        <p class="text-sm text-gray-900">
                                                                            Applied on
                                                                            <time datetime="">{{Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $travelOrder->created_at)->format('F d, Y')}}</time>
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
                                                                <svg class="w-5 h-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                                                                </svg>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                            @endforeach
                                        @else
                                        <li>
                                            <a href="#" class="block text-center cursor-default">
                                                <span class="flex items-center px-4 py-4 text-gray-600"> No travel orders to show.</span>
                                            </a>
                                        </li>
                                        @endif
                                        
                                    </ul>
                                </div>
                                {{-- modals for to start --}}
                                        <div class="fixed inset-0 z-10 overflow-y-auto"  aria-labelledby="modal-title" role="dialog" aria-modal="true" x-cloak x-show="showModal" x-transition:enter="ease-out duration-300"
                                        x-transition:enter-start="opacity-0"
                                        x-transition:enter-end="opacity-100"
                                        x-transition:leave="ease-in duration-200"
                                        x-transition:leave-start="opacity-100"
                                        x-transition:leave-end="opacity-0">
                                        <div class="flex items-end justify-center min-h-screen px-4 pt-4 pb-20 text-center sm:block sm:p-0">
                                            
                                            <div class="fixed inset-0 transition-opacity bg-opacity-75 bg-primary-bg" aria-hidden="true"></div>

                                            <!-- This element is to trick the browser into centering the modal contents. -->
                                            <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>

                                            
                                            <div class="inline-block px-4 pt-5 pb-4 overflow-hidden text-left align-bottom transition-all transform rounded-lg shadow-xl bg-primary-text sm:my-8 sm:align-middle sm:max-w-lg sm:w-full sm:p-6" @click.away="showModal = false"
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
                                                    <div class="overflow-hidden bg-white shadow sm:rounded-lg">
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
                                                                ${{$travelordermodaldet->total}}
                                                                </dd>
                                                            </div>
                                                            <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
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
                                                <button type="button" class="inline-flex justify-center w-full px-4 py-2 text-base font-medium text-white border border-transparent rounded-md shadow-sm bg-primary-bg-alt hover:bg-primary-bg focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-transparent focus:ring-secondary-bg sm:col-start-2 sm:text-sm">
                                                Create Voucher
                                                </button>
                                                <button type="button" class="inline-flex justify-center w-full px-4 py-2 mt-3 text-base font-medium text-gray-700 bg-white border border-gray-300 rounded-md shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-bg-alt sm:mt-0 sm:col-start-1 sm:text-sm" @click="showModal=false">
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