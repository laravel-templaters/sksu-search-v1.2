<div>
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
                                                        src="{{ Auth::user()->avatar != null ? Auth::user()->avatar : Auth::user()->profile_photo_url }}"
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
                                            class="flex-shrink max-w-full overflow-hidden rounded-lg shadow-lg md:mx-5 lg:mx-10 xl:mx-12 sm:mx-auto ring-1 ring-black ring-opacity-5">

                                            @if(isset($iteneraries))
                                            @foreach ($iteneraries as $itenerary)
                                            <div class="relative grid grid-cols-1 gap-6 px-5 py-6 bg-gray-100 sm:p-8"
                                                x-data="{ showMe{{$itenerary->id}} : false }">
                                                <a href="#"
                                                    x-on:click="showMe{{$itenerary->id}} = ! showMe{{$itenerary->id}}"
                                                    class="flex items-start p-3 -m-3 transition duration-150 ease-in-out rounded-lg hover:bg-gray-50">

                                                    <div
                                                        class="flex items-center justify-center flex-shrink-0 w-10 h-10 rounded-md text-primary-text bg-primary-bg-alt hover:bg-primary-bg sm:h-12 sm:w-12">
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
                                                            {{Carbon\Carbon::createFromFormat('Y-m-d', $itenerary->date)->format('F d, Y')}}
                                                        </p>
                                                        <p class="mt-1 text-sm text-gray-500">
                                                            Click To View Itenerary
                                                        </p>
                                                    </div>
                                                </a>

                                                <div x-cloak x-show="showMe{{$itenerary->id}}"
                                                    class="relative inset-0 bottom-0 right-0 z-30 bg-gray-50">

                                                    <div class="inline-flex">
                                                        <span>
                                                            {{$travelOrder = 0 ? 'Covered By Registration Fee: Breakfast | Lunch | Lodging' : ''}}
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
                                                                            <tr class="text-center uppercase">
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
                                                                            @if (isset($itenerary))
                                                                            @php
                                                                            $i_entries =
                                                                            App\Models\IteneraryEntry::where('itenerary_id','=',$itenerary->id)->get();

                                                                            @endphp
                                                                            @if ($i_entries)
                                                                            @foreach ($i_entries as $i_entry)


                                                                            <tr class="text-justify bg-gray-100">
                                                                                <td
                                                                                    class="px-6 py-4 text-sm font-medium text-gray-900 whitespace-nowrap">
                                                                                    {{$i_entry->place_to_be_visited}}
                                                                                </td>
                                                                                <td
                                                                                    class="px-6 py-4 text-sm font-medium text-gray-900 whitespace-nowrap">
                                                                                    <time>{{$i_entry->departure_time}}</time>
                                                                                </td>
                                                                                <td
                                                                                    class="px-6 py-4 text-sm font-medium text-gray-900 whitespace-nowrap">
                                                                                    <time>{{$i_entry->arrival_time}}</time>
                                                                                </td>
                                                                                <td
                                                                                    class="px-6 py-4 text-sm font-medium text-gray-900 whitespace-nowrap">
                                                                                    {{$i_entry->mode_of_transport}}
                                                                                </td>
                                                                                <td
                                                                                    class="px-6 py-4 text-sm font-medium text-gray-900 whitespace-nowrap">
                                                                                    {{$i_entry->transport_expenses}}
                                                                                </td>
                                                                                <td
                                                                                    class="px-6 py-4 text-sm font-medium text-gray-900 whitespace-nowrap">
                                                                                    {{$i_entry->others}}
                                                                                </td>
                                                                                <td
                                                                                    class="px-6 py-4 text-sm font-medium text-gray-900 whitespace-nowrap">
                                                                                    {{$i_entry->total}}
                                                                                </td>
                                                                                <td
                                                                                    class="px-6 py-4 text-sm font-medium text-gray-900 whitespace-nowrap">

                                                                                </td>

                                                                            </tr>
                                                                            @endforeach
                                                                            @endif
                                                                            @endif
                                                                            <!-- Even row -->

                                                                            <!-- More people... -->
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach
                                            @endif



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
                                                            {{$travelordermodaldet->user->name}}
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
                                                            {{$travelordermodaldet->date_range}}
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
