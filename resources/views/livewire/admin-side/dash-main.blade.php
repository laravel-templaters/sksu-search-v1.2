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
                            <div class="flex flex-col col-span-3 ">
                                <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                                    <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
                                    <div class="overflow-hidden border-b border-gray-200 shadow sm:rounded-lg">
                                        <table class="min-w-full divide-y divide-gray-200">
                                        <thead class="bg-gray-50">
                                            <tr>
                                            <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                                Payee/Applicant
                                            </th>
                                            <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                                Purpose
                                            </th>
                                            <th scope="col" class="relative px-6 py-3">
                                                <span class="sr-only">Actions</span>
                                            </th>
                                            </tr>
                                        </thead>
                                        <tbody class="bg-white divide-y divide-gray-200">
                                            <tr>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="flex items-center">
                                                <div class="flex-shrink-0 w-10 h-10">
                                                    <img class="w-10 h-10 rounded-full" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=4&w=256&h=256&q=60" alt="">
                                                </div>
                                                <div class="ml-4">
                                                    <div class="text-sm font-medium text-gray-900">
                                                    Jane Cooper
                                                    </div>
                                                    <div class="text-sm text-gray-500">
                                                    jane.cooper@example.com
                                                    </div>
                                                </div>
                                                </div>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="text-sm text-gray-900">Regional Paradigm Technician</div>
                                                <div class="text-sm text-gray-500">Optimization</div>
                                            </td>
                                            <td class="px-6 py-4 text-sm font-medium text-right whitespace-nowrap" x-data="{tooltip : false}">
                                               
                                                <a href="#" class="text-indigo-600 hover:text-indigo-900"  @mouseover="tooltip=true" @mouseleave="tooltip=false">Create DV</a>
                                                  
                                            </td>
                                            </tr>

                                            <!-- More people... -->
                                        </tbody>
                                        </table>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        {{-- travel orders end --}}
                    </dl>
                </div>

        </div>
    </div>
</div>