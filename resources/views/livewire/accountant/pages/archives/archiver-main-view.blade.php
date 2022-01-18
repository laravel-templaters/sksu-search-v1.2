<div
    class="relative z-0 flex flex-1 w-full h-screen min-w-full mx-auto -mt-20 overflow-hidden bg-transparent max-w-screen">
    <div class="relative z-0 flex-1 overflow-y-auto focus:outline-none xl:order-last">
        <div class="absolute inset-0 px-4 py-6 sm:px-6 lg:px-8">
            <div class="flex flex-col mx-5">
                <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
                        <div
                            class="overflow-hidden border-b border-gray-200 shadow-md shadow-primary-500/50 sm:rounded-lg bg-gray-50 ">
                            <div class="flex justify-between max-w-full m-4">
                                <div class="flex justify-start max-w-full m-4">
                                    <div class="m-2">
                                        <details open id="filters">
                                            <summary class="text-secondary-700">Filters</summary>
                                            <fieldset>
                                            <div class="grid max-w-sm grid-cols-3 gap-3">
                                                <div class="relative flex items-start col-span-1">
                                                    <div class="flex items-center h-5">
                                                        <input wire:model="dateFilter" id="none" aria-describedby="comments-description"
                                                            name="datefilter" type="radio" value="none"
                                                            class="w-4 h-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500">
                                                    </div>
                                                    <div class="ml-3 text-sm">
                                                        <label for="none"
                                                            class="font-medium text-gray-700 truncate">None</label>
                                                    </div>
                                                </div>
                                                <div class="relative flex items-start col-span-1">
                                                    <div class="flex items-center h-5">
                                                        <input wire:model="dateFilter" id="last7days" aria-describedby="comments-description"
                                                            name="datefilter" type="radio" value="7-d"
                                                            class="w-4 h-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500">
                                                    </div>
                                                    <div class="ml-3 text-sm">
                                                        <label for="last7days"
                                                            class="font-medium text-gray-700 truncate">Last 7
                                                            days</label>
                                                    </div>
                                                </div>
                                                <div class="relative flex items-start col-span-1">
                                                    <div class="flex items-center h-5">
                                                        <input wire:model="dateFilter" id="last15days" aria-describedby="comments-description"
                                                            name="datefilter" type="radio" value="15-d"
                                                            class="w-4 h-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500">
                                                    </div>
                                                    <div class="ml-3 text-sm">
                                                        <label for="last15days"
                                                            class="font-medium text-gray-700 truncate">Last
                                                            15 days</label>
                                                    </div>
                                                </div>
                                                <div class="relative flex items-start col-span-1">
                                                    <div class="flex items-center h-5">
                                                        <input wire:model="dateFilter" id="last30days" aria-describedby="comments-description"
                                                            name="datefilter" type="radio" value="30-d"
                                                            class="w-4 h-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500">
                                                    </div>
                                                    <div class="ml-3 text-sm">
                                                        <label for="last30days"
                                                            class="font-medium text-gray-700 truncate">Last
                                                            30 days</label>
                                                    </div>
                                                </div>
                                                <div class="relative flex items-start col-span-1">
                                                    <div class="flex items-center h-5">
                                                        <input wire:model="dateFilter" id="last3months" aria-describedby="comments-description"
                                                            name="datefilter" type="radio" value="3-m"
                                                            class="w-4 h-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500">
                                                    </div>
                                                    <div class="ml-3 text-sm">
                                                        <label for="last3months"
                                                            class="font-medium text-gray-700 truncate">Last
                                                            3 months</label>
                                                    </div>
                                                </div>
                                                <div class="relative flex items-start col-span-1">
                                                    <div class="flex items-center h-5">
                                                        <input wire:model="dateFilter" id="last6months" aria-describedby="comments-description"
                                                            name="datefilter" type="radio" value="6-m"
                                                            class="w-4 h-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500">
                                                    </div>
                                                    <div class="ml-3 text-sm">
                                                        <label for="last6months"
                                                            class="font-medium text-gray-700 truncate">Last
                                                            6 months</label>
                                                    </div>
                                                </div>
                                                <div class="relative flex items-start col-span-1">
                                                    <div class="flex items-center h-5">
                                                        <input wire:model="dateFilter" id="last12months" aria-describedby="comments-description"
                                                            name="datefilter" type="radio" value="12-m"
                                                            class="w-4 h-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500">
                                                    </div>
                                                    <div class="ml-3 text-sm">
                                                        <label for="last12months"
                                                            class="font-medium text-gray-700 truncate">Last 12
                                                            months</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>
                                        </details>
                                    </div>
                                    <div class="m-2">
                                        <details class="open:" id="filters">
                                            <summary class="text-secondary-700">Location</summary>
                                            <div class="grid max-w-sm grid-cols-3 gap-3">
                                                <div class="relative flex items-start col-span-1">
                                                    <div class="flex items-center h-5">
                                                        <input id="last7days" aria-describedby="comments-description"
                                                            name="last7days" type="checkbox"
                                                            class="w-4 h-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500">
                                                    </div>
                                                    <div class="ml-3 text-sm">
                                                        <label for="last7days"
                                                            class="font-medium text-gray-700 truncate">Building
                                                            A</label>
                                                    </div>
                                                </div>
                                                <div class="relative flex items-start col-span-1">
                                                    <div class="flex items-center h-5">
                                                        <input id="last15days" aria-describedby="comments-description"
                                                            name="last15days" type="checkbox"
                                                            class="w-4 h-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500">
                                                    </div>
                                                    <div class="ml-3 text-sm">
                                                        <label for="last15days"
                                                            class="font-medium text-gray-700 truncate">Building
                                                            B</label>
                                                    </div>
                                                </div>
                                                <div class="relative flex items-start col-span-1">
                                                    <div class="flex items-center h-5">
                                                        <input id="last30days" aria-describedby="comments-description"
                                                            name="last30days" type="checkbox"
                                                            class="w-4 h-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500">
                                                    </div>
                                                    <div class="ml-3 text-sm">
                                                        <label for="last30days"
                                                            class="font-medium text-gray-700 truncate">Building
                                                            C</label>
                                                    </div>
                                                </div>

                                            </div>
                                        </details>
                                    </div>
                                </div>
                                <div>
                                    <input type="text" name="search" id="search" wire:model.debounce='searchText'
                                        placeholder="Search here"
                                        class="px-5 rounded-full max-h-16 w-md active:border-secondary-alt-500 focus:border-secondary-alt-500 focus:border-2 focus:ring-0">
                                </div>
                            </div>

                            <table class="min-w-full divide-y divide-gray-200">
                                <thead class="bg-gray-50">
                                    {{-- <tr> --}}
                                    <th scope="col"
                                        class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                        Folder Tr. No.
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                        Description
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                        Date Archived
                                    </th>
                                    </th>
                                    <th scope="col" class="relative px-6 py-3">
                                        <span class="sr-only">Action</span>
                                    </th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                    @if (count($disbursement_vouchers)>0)
                                    @foreach ($disbursement_vouchers as $disbursement_voucher)
                                    <tr>
                                        {{-- <td class="px-6 py-4 whitespace-nowrap">
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
                                        </td> --}}
                                        <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">
                                            {{ $disbursement_voucher->name }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-900">Construction</div>
                                            <div class="text-sm text-gray-500">Holy fukcing noodles</div>
                                        </td>
                                        {{-- <td class="px-6 py-4 whitespace-nowrap">
                                        <span class="inline-flex px-2 text-xs font-semibold leading-5 text-green-800 bg-green-100 rounded-full">
                                            Active
                                        </span>
                                        </td> --}}
                                        <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">
                                            Dec. 21, 2021
                                        </td>
                                        <td class="px-6 py-4 text-sm font-medium text-right whitespace-nowrap">
                                            <a href="{{  route('archive-detail', ['id'=>1])  }}" target="_blank"
                                                class="inline-flex text-indigo-600 hover:text-indigo-900">
                                                <span class="inline pr-3">View</span>
                                                <svg xmlns="http://www.w3.org/2000/svg" class="inline w-5 h-5"
                                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                                                </svg>
                                            </a>
                                        </td>
                                    </tr>
                                    @endforeach
                                    @else
                                    <tr>
                                        <td class="px-6 py-4 italic text-center text-gray-500 text-md whitespace-nowrap"
                                            colspan="4">
                                            NOTHING TO SHOW
                                        </td>
                                    </tr>
                                    @endif

                                    <!-- More people... -->
                                </tbody>

                            </table>
                            {{ $disbursement_vouchers->onEachSide(1)->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- table end --}}
    <aside class="relative flex-shrink-0 hidden overflow-hidden xl:order-first xl:flex xl:flex-col w-96">
        <div class="absolute inset-0 py-6 pl-8 ">
            <div class="flex-shrink max-w-full max-h-full p-3 rounded-md shadow-md bg-gray-50 shadow-primary-500/50">
            <nav class="space-y-1 " aria-label="Sidebar">
             
                <a href="#" class="flex items-center px-3 py-2 text-sm font-medium text-gray-900 bg-gray-200 rounded-md"
                    aria-current="page">
                    <svg class="flex-shrink-0 w-6 h-6 mr-3 -ml-1 text-gray-500" xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                    </svg>
                    <span class="truncate">
                        Dashboard
                    </span>

                    <!-- Current: "bg-gray-50", Default: "bg-gray-200 text-gray-600" -->
                    <span class="bg-gray-50 ml-auto inline-block py-0.5 px-3 text-xs rounded-full">
                        5
                    </span>
                </a>

                <a href="#"
                    class="flex items-center px-3 py-2 text-sm font-medium text-gray-600 rounded-md hover:bg-gray-50 hover:text-gray-900">
                    <!-- Heroicon name: outline/users -->
                    <svg class="flex-shrink-0 w-6 h-6 mr-3 -ml-1 text-gray-400" xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                    </svg>
                    <span class="truncate">
                        Team
                    </span>
                </a>

                <a href="#"
                    class="flex items-center px-3 py-2 text-sm font-medium text-gray-600 rounded-md hover:bg-gray-50 hover:text-gray-900">
                    <!-- Heroicon name: outline/folder -->
                    <svg class="flex-shrink-0 w-6 h-6 mr-3 -ml-1 text-gray-400" xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z" />
                    </svg>
                    <span class="truncate">
                        Projects
                    </span>

                    <span class="bg-gray-200 text-gray-600 ml-auto inline-block py-0.5 px-3 text-xs rounded-full">
                        19
                    </span>
                </a>

                <a href="#"
                    class="flex items-center px-3 py-2 text-sm font-medium text-gray-600 rounded-md hover:bg-gray-50 hover:text-gray-900">
                    <!-- Heroicon name: outline/calendar -->
                    <svg class="flex-shrink-0 w-6 h-6 mr-3 -ml-1 text-gray-400" xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                    </svg>
                    <span class="truncate">
                        Calendar
                    </span>

                    <span class="bg-gray-200 text-gray-600 ml-auto inline-block py-0.5 px-3 text-xs rounded-full">
                        20+
                    </span>
                </a>

                <a href="#"
                    class="flex items-center px-3 py-2 text-sm font-medium text-gray-600 rounded-md hover:bg-gray-50 hover:text-gray-900">
                    <!-- Heroicon name: outline/inbox -->
                    <svg class="flex-shrink-0 w-6 h-6 mr-3 -ml-1 text-gray-400" xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4" />
                    </svg>
                    <span class="truncate">
                        Documents
                    </span>
                </a>

                <a href="#"
                    class="flex items-center px-3 py-2 text-sm font-medium text-gray-600 rounded-md hover:bg-gray-50 hover:text-gray-900">
                    <!-- Heroicon name: outline/chart-bar -->
                    <svg class="flex-shrink-0 w-6 h-6 mr-3 -ml-1 text-gray-400" xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                    </svg>
                    <span class="truncate">
                        Reports
                    </span>
                </a>
            </nav>
            </div>

        </div>
    </aside>
</div>
