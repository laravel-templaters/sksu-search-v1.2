<div id="toPrint"
    class="grid h-full grid-cols-4 m-10 text-center bg-white divide-x-2 divide-gray-700 rounded-lg print:divide-y-4 print:rounded-none print:m-0 divide-solid"
    x-data="{showModal : @entangle('showModal'),showConfirmApproval : @entangle('showConfirmApproval'),showConfirmDisapproval : @entangle('showConfirmDisapproval'), showError : @entangle('showError'),show_Banner :@entangle('showBanner')}"
    x-init="$watch('show_Banner', value => {
        if(value == true){
            setTimeout(function(){ show_Banner = false;}, 5000);
           
        }
    }), $watch('showConfirmApproval', value => {
        if(value == true){
            setTimeout(function(){ showConfirmApproval = false;}, 3000);
           
        }
    }), $watch('showConfirmDisapproval', value => {
        if(value == true){
            setTimeout(function(){ showConfirmDisapproval = false;}, 5000);
           
        }
    })">





    <div class="col-span-2">
        {{-- modal --}}
        <div class="fixed inset-0 z-10 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true"
            x-cloak x-show="showModal" x-transition-enter="ease-out duration-500" x-transition-enter-start="opacity-0"
            x-transition-enter-end="opacity-100" x-transition-leave="ease-in duration-200"
            x-transition-leave-start="opacity-100" x-transition-leave-end="opacity-0">
            <div class="flex items-end justify-center min-h-screen px-4 pt-4 pb-20 text-center sm:block sm:p-0">

                <div class="fixed inset-0 transition-opacity bg-gray-500 bg-opacity-75" aria-hidden="true" x-cloak
                    x-show="showModal" x-transition-enter="ease-out duration-500" x-transition-enter-start="opacity-0"
                    x-transition-enter-end="opacity-100" x-transition-leave="ease-in duration-200"
                    x-transition-leave-start="opacity-100" x-transition-leave-end="opacity-0"></div>

                <!-- This element is to trick the browser into centering the modal contents. -->
                <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
                <div class="inline-block px-4 pt-5 pb-4 overflow-hidden text-left align-bottom transition-all transform bg-white rounded-lg shadow-xl sm:my-8 sm:align-middle sm:max-w-lg sm:w-full sm:p-6"
                    x-cloak x-show="showModal" x-transition-enter="ease-out duration-300"
                    x-transition-enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                    x-transition-enter-end="opacity-100 translate-y-0 sm:scale-100"
                    x-transition-leave="ease-in duration-200"
                    x-transition-leave-start="opacity-100 translate-y-0 sm:scale-100"
                    x-transition-leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95">
                    <div>
                        <div class="flex items-center justify-center w-12 h-12 mx-auto bg-green-100 rounded-full">
                            <!-- Heroicon name: outline/check -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-auto text-green-600 h-9" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                            </svg>
                        </div>
                        <div class="mt-3 text-center sm:mt-5">
                            <h3 class="text-lg font-medium leading-6 text-gray-900" id="modal-title">Add Side Note</h3>
                            <div class="mt-2">
                                <textarea name="note" id="note" rows="10" class="w-full text-sm rounded-lg"
                                    wire:model="noteText" placeholder="Enter Note"></textarea>
                                <span class="text-xs text-red-500" x-cloak x-show="showError">Enter a note before
                                    saving!
                                    Thank you!</span>
                            </div>
                        </div>
                    </div>
                    <div class="mt-5 sm:mt-6 sm:grid sm:grid-cols-2 sm:gap-3 sm:grid-flow-row-dense">
                        <button type="button" wire:click="saveSideNote"
                            class="inline-flex justify-center w-full px-4 py-2 text-base font-medium text-white bg-indigo-600 border border-transparent rounded-md shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:col-start-2 sm:text-sm">Finish</button>
                        <button type="button" x-on:click="showModal = false"
                            class="inline-flex justify-center w-full px-4 py-2 mt-3 text-base font-medium text-gray-700 bg-white border border-gray-300 rounded-md shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:col-start-1 sm:text-sm">Cancel</button>
                    </div>
                </div>
            </div>
        </div>
        {{-- approval --}}
        <div class="fixed inset-0 z-10 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true"
            x-cloak x-show="showConfirmApproval" x-transition-enter="ease-out duration-500"
            x-transition-enter-start="opacity-0" x-transition-enter-end="opacity-100"
            x-transition-leave="ease-in duration-200" x-transition-leave-start="opacity-100"
            x-transition-leave-end="opacity-0">
            <div class="flex items-end justify-center min-h-screen px-4 pt-4 pb-20 text-center sm:block sm:p-0">

                <div class="fixed inset-0 transition-opacity bg-gray-500 bg-opacity-75" aria-hidden="true" x-cloak
                    x-show="showConfirmApproval" x-transition-enter="ease-out duration-500"
                    x-transition-enter-start="opacity-0" x-transition-enter-end="opacity-100"
                    x-transition-leave="ease-in duration-200" x-transition-leave-start="opacity-100"
                    x-transition-leave-end="opacity-0"></div>

                <!-- This element is to trick the browser into centering the modal contents. -->
                <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
                <div class="inline-block px-4 pt-5 pb-4 overflow-hidden text-left align-bottom transition-all transform bg-white rounded-lg shadow-xl sm:my-8 sm:align-middle sm:max-w-lg sm:w-full sm:p-6"
                    x-cloak x-show="showConfirmApproval" x-transition-enter="ease-out duration-300"
                    x-transition-enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                    x-transition-enter-end="opacity-100 translate-y-0 sm:scale-100"
                    x-transition-leave="ease-in duration-200"
                    x-transition-leave-start="opacity-100 translate-y-0 sm:scale-100"
                    x-transition-leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                    @click.away="showConfirmApproval = false">
                    <div>
                        <div class="flex items-center justify-center w-12 h-12 mx-auto bg-green-100 rounded-full">
                            <!-- Heroicon name: outline/check -->
                            <svg class="w-6 h-6 text-green-600" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7" />
                            </svg>
                        </div>
                        <div class="mt-3 text-center sm:mt-5">
                            <h3 class="text-lg font-medium leading-6 text-gray-900" id="modal-title">Travel Order
                                Approved!</h3>
                            <div class="mt-2">
                                <p class="text-sm text-gray-500 uppercase">Your approval of travel order <span
                                        class="italic">{{ $travel_order->tracking_code }}</span> has been updated!</p>
                                <p class="text-xs text-gray-300">This modal will close in a few seconds. Or just click
                                    away!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- disapproval --}}
        <div class="fixed inset-0 z-10 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true"
            x-cloak x-show="showConfirmDisapproval" x-transition-enter="ease-out duration-500"
            x-transition-enter-start="opacity-0" x-transition-enter-end="opacity-100"
            x-transition-leave="ease-in duration-200" x-transition-leave-start="opacity-100"
            x-transition-leave-end="opacity-0">
            <div class="flex items-end justify-center min-h-screen px-4 pt-4 pb-20 text-center sm:block sm:p-0">

                <div class="fixed inset-0 transition-opacity bg-gray-500 bg-opacity-75" aria-hidden="true" x-cloak
                    x-show="showConfirmDisapproval" x-transition-enter="ease-out duration-500"
                    x-transition-enter-start="opacity-0" x-transition-enter-end="opacity-100"
                    x-transition-leave="ease-in duration-200" x-transition-leave-start="opacity-100"
                    x-transition-leave-end="opacity-0"></div>

                <!-- This element is to trick the browser into centering the modal contents. -->
                <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
                <div class="inline-block px-4 pt-5 pb-4 overflow-hidden text-left align-bottom transition-all transform bg-white rounded-lg shadow-xl sm:my-8 sm:align-middle sm:max-w-lg sm:w-full sm:p-6"
                    x-cloak x-show="showConfirmDisapproval" x-transition-enter="ease-out duration-300"
                    x-transition-enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                    x-transition-enter-end="opacity-100 translate-y-0 sm:scale-100"
                    x-transition-leave="ease-in duration-200"
                    x-transition-leave-start="opacity-100 translate-y-0 sm:scale-100"
                    x-transition-leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                    @click.away="showConfirmDisapproval = false">
                    <div>
                        <div class="flex items-center justify-center w-12 h-12 mx-auto bg-red-100 rounded-full">
                            <!-- Heroicon name: outline/check -->
                            <svg class="w-6 h-6 text-red-600" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7" />
                            </svg>
                        </div>
                        <div class="mt-3 text-center sm:mt-5">
                            <h3 class="text-lg font-medium leading-6 text-gray-900" id="modal-title">Travel Order
                                Declined!</h3>
                            <div class="mt-2">
                                <p class="text-sm text-gray-500 uppercase">Your approval of travel order <span
                                        class="italic">{{ $travel_order->tracking_code }}</span> has been updated!</p>
                                <p class="text-xs text-gray-300">This modal will close in a few seconds. Or just click
                                    away!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- notif --}}
        <div aria-live="assertive"
            class="fixed inset-0 flex items-end px-4 py-6 pointer-events-none sm:p-6 sm:items-start" x-cloak
            x-show="show_Banner">
            <div class="flex flex-col items-center w-full space-y-4 sm:items-end">
                <div class="w-full max-w-sm overflow-hidden rounded-lg shadow-lg pointer-events-auto bg-primary-400 ring-1 ring-black ring-opacity-5"
                    x-cloak x-show="show_Banner" x-transition-enter="transform ease-out duration-300 transition"
                    x-transition-enter-start="translate-y-2 opacity-0 sm:translate-y-0 sm:translate-x-2"
                    x-transition-enter-end="translate-y-0 opacity-100 sm:translate-x-0"
                    x-transition-leave="transition ease-in duration-100" x-transition-leave-start="opacity-100"
                    x-transition-leave-end="opacity-0">
                    <div class="p-4 text-left">
                        <div class="flex items-start">
                            <div class="flex-shrink-0 animate-ping">
                                <!-- Heroicon name: outline/check-circle -->
                                <svg class="w-6 h-6 text-green-400" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <div class="ml-3 w-0 flex-1 pt-0.5 drop-shadow-sm">
                                <p class="font-bold tracking-wider text-green-400 text-md">Successfully saved!</p>
                                <p class="mt-1 text-xs font-semibold text-white">Anyone with access to the file can view
                                    the
                                    side note!</p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>



        <div class="flex w-full p-6 border-b-4 border-black print:flex">
            <div class="justify-between">
                <div class="inline my-auto"><img src="http://sksu.edu.ph/wp-content/uploads/2020/09/512x512-1.png"
                        alt="sksu logo" class="object-scale-down w-20 h-full">
                </div>
                <div class="col-span-2 pr-2 m-2">
                    <div class="m-3"> {!! QrCode::size(80)->margin(2)->backgroundColor(0, 0, 0,
                        0)->generate((string)$travel_order->tracking_code); !!}
                    </div>
                </div>
            </div>
            <div id="header" class="inline ml-3 -space-y-2 text-left">

                <div class="my-auto">
                    <div class="block">
                        <span class="text-sm font-semibold tracking-wide text-left text-black">Republic of the
                            Philippines</span>
                    </div>
                    <div class="block">
                        <span class="text-sm font-semibold tracking-wide text-left uppercase text-primary-600">sultan
                            kudarat
                            state university</span>
                    </div>
                    <div class="block">
                        <span class="text-sm font-semibold tracking-wide text-black">ACCESS, EJC Montilla, 9800 City of
                            Tacurong</span>
                    </div>
                    <div class="block">
                        <span class="text-sm font-semibold tracking-wide text-black">Province of Sultan Kudarat</span>
                    </div>
                </div>
            </div>
        </div>

        @if (isset($travel_order))
        @if ($isDraft == true)
        <div class="w-full">
            <div class="m-6 divide-y divide-black divide-solid print:divide-y-2">
                <div class="flex items-start w-full h-auto p-6 print:block ">
                    <div id="header" class="items-start block w-full space-y-4 text-left">
                        <div class="block">
                            <span
                                class="text-sm font-semibold tracking-wide text-left text-black">{{ $travel_order->created_at == '' ? 'Date Not Set':$travel_order->created_at->format('F d, Y') }}</span>
                        </div>
                        <div class="flex">
                            <span
                                class="mx-auto text-5xl font-extrabold tracking-wide text-black uppercase print:text-xl">travel
                                order</span>
                        </div>
                        <div class="grid grid-cols-4 ">
                            <span class="col-span-1 text-sm font-semibold tracking-wide text-black uppercase">Memorandum
                                to:</span>
                            <div class="col-span-1 text-sm font-semibold tracking-wide text-black uppercase">
                                @if(isset($applicants))
                                @foreach ($applicants as $applicant)
                                <span class="block">{{ $applicant->user->name }}</span>
                                @endforeach
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <div id="contents" class="flex w-full h-auto px-6 pt-10 print:pt-5">
                    <div id="header" class="items-start block w-full space-y-4 text-left">
                        <div class="flex-wrap block -space-y-1">
                            <span class="font-semibold tracking-wide text-left text-black text-md">You are hereby
                                directed
                                to proceed to <strong>
                                    @if ($travel_order->others!="")
                                    {{$travel_order->others == '' ? '':$travel_order->others}},
                                    {{$travel_order->philippine_cities_id == '' ? 'City Not Set': $travel_order->city->city_municipality_description}},
                                    {{$travel_order->philippine_provinces_id == 0 ? 'Province Not Set':$travel_order->province->province_description}},
                                    {{$travel_order->philippine_regions_id == 0 ? 'City Not Set':$travel_order->region->region_description }}
                                    @else
                                    {{$travel_order->philippine_cities_id == 0 ? 'City Not Set': $travel_order->city->city_municipality_description}},
                                    {{$travel_order->philippine_provinces_id == 0 ? 'Province Not Set':$travel_order->province->province_description}},
                                    {{$travel_order->philippine_regions_id == 0 ? 'Region Not Set':$travel_order->region->region_description }}
                                    @endif
                                </strong> on the <strong class="underline">
                                    @if ($travel_order->date_of_travel_from == $travel_order->date_of_travel_to)
                                    @if ($travel_order->date_of_travel_from != '')
                                    {{Carbon\Carbon::createFromFormat('Y-m-d',$travel_order->date_of_travel_from)->format('jS').' of '.Carbon\Carbon::createFromFormat('Y-m-d',$travel_order->date_of_travel_from)->format('F Y')}}
                                    @endif
                                    @else
                                    @if ($travel_order->date_of_travel_from != '' && $travel_order->date_of_travel_from
                                    != '')
                                    <strong
                                        class="underline">{{ Carbon\Carbon::createFromFormat('Y-m-d',$travel_order->date_of_travel_from)->format('jS').' of '.Carbon\Carbon::createFromFormat('Y-m-d',$travel_order->date_of_travel_from)->format('F Y')}}</strong>
                                    to <strong
                                        class="underline">{{ Carbon\Carbon::createFromFormat('Y-m-d',$travel_order->date_of_travel_to)->format('jS').' of '.Carbon\Carbon::createFromFormat('Y-m-d',$travel_order->date_of_travel_to)->format('F Y')}}</strong>

                                    @endif
                                    @endif

                                </strong>
                                to do the following:
                            </span>
                            <span
                                class="block pl-5 font-semibold tracking-wide text-left text-black whitespace-pre-line text-md">
                                {{$travel_order->purpose == '' ? 'Purpose not Found': $travel_order->purpose}}
                            </span>
                            @if (isset($signatories))
                            @foreach ($signatories as $signatory)
                            <span class="block pt-16 font-semibold tracking-wide text-center text-black text-md">
                                {{ $signatory->user->name}}
                            </span>

                            @php
                            $sigpositions =
                            App\Models\Department::orWhere('admin_user_id','=',$signatory->user_id)->orWhere('head_user_id','=',$signatory->user_id)->get();
                            $campuses = App\Models\Campus::orWhere('admin_user_id','=',$signatory->user_id)->get();
                            $campusCount= count($campuses);
                            $posCount= count($sigpositions);
                            @endphp
                            <span class="block pt-3 font-semibold tracking-wide text-center text-black text-md">
                                @if ($campusCount >= 1)

                                @foreach ($campuses as $campus)

                                @if (strtoupper($campus->campus_name)=="PRESIDENT'S OFFICE")
                                @if ($campusCount==$loop->index+1)
                                {{ $signatory->user->position->position_name}}
                                @else
                                {{ $signatory->user->position->position_name}} /
                                @endif
                                @else
                                @if ($campusCount==$loop->index+1)
                                {{ $signatory->user->position->position_name}} of {{ $campus->campus_name}} Campus
                                @else
                                {{ $signatory->user->position->position_name}} of {{ $campus->campus_name}} /
                                @endif
                                @endif

                                @endforeach

                                @elseif ($campusCount == 0 && $posCount >= 1)
                                @foreach ($sigpositions as $sigpos)

                                @if (strtoupper($sigpos->department_name)=="PRESIDENT'S OFFICE")
                                @if ($posCount==$loop->index+1)
                                {{ $signatory->user->position->position_name}}
                                @else
                                {{ $signatory->user->position->position_name}} /
                                @endif
                                @else
                                @if ($posCount==$loop->index+1)
                                {{ $signatory->user->position->position_name}} of {{ $sigpos->department_name}}
                                @else
                                {{ $signatory->user->position->position_name}} of {{ $sigpos->department_name}} /
                                @endif
                                @endif

                                @endforeach
                                @endif

                            </span>
                            @endforeach

                            @endif


                        </div>
                    </div>
                </div>

            </div>

        </div>
        @else
        <div class="w-full">
            <div class="m-6 divide-y divide-black divide-solid print:divide-y-2">
                <div class="flex items-start w-full h-auto p-6 print:block ">
                    <div id="header" class="items-start block w-full space-y-4 text-left">
                        <div class="block">
                            <span
                                class="text-sm font-semibold tracking-wide text-left text-black">{{ $travel_order->created_at->format('F d, Y') }}</span>
                        </div>
                        <div class="flex">
                            <span
                                class="mx-auto text-5xl font-extrabold tracking-wide text-black uppercase print:text-xl">travel
                                order</span>
                        </div>
                        <div class="grid grid-cols-4 ">
                            <span class="col-span-1 text-sm font-semibold tracking-wide text-black uppercase">Memorandum
                                to:</span>
                            <div class="col-span-1 text-sm font-semibold tracking-wide text-black uppercase">
                                @foreach ($applicants as $applicant)
                                <span class="block">{{ $applicant->user->name }}</span>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div id="contents" class="flex w-full h-auto px-6 pt-10 print:pt-5">
                    <div id="header" class="items-start block w-full space-y-4 text-left">
                        <div class="flex-wrap block -space-y-1">
                            <span class="font-semibold tracking-wide text-left text-black text-md">You are hereby
                                directed
                                to proceed <strong>
                                    @if ($travel_order->others!="")
                                    {{$travel_order->others}}, {{$travel_order->city->city_municipality_description}},
                                    {{$travel_order->province->province_description}},
                                    {{ $travel_order->region->region_description }}
                                    @else
                                    {{$travel_order->city->city_municipality_description}},
                                    {{$travel_order->province->province_description}},
                                    {{ $travel_order->region->region_description }}
                                    @endif
                                </strong> on the <strong
                                    class="underline">{{ Carbon\Carbon::createFromFormat('Y-m-d',$travel_order->date_of_travel_from)->format('jS').' of '.Carbon\Carbon::createFromFormat('Y-m-d',$travel_order->date_of_travel_from)->format('F Y')}}</strong>
                                to do the following:
                            </span>
                            <span
                                class="block pl-5 font-semibold tracking-wide text-left text-black whitespace-pre-line text-md">
                                {{ $travel_order->purpose}}
                            </span>
                            @foreach ($signatories as $signatory)
                            <span class="block pt-16 font-semibold tracking-wide text-center text-black text-md">
                                {{ $signatory->user->name}}
                            </span>

                            @php
                            $sigpositions =
                            App\Models\Department::orWhere('admin_user_id','=',$signatory->user_id)->orWhere('head_user_id','=',$signatory->user_id)->get();
                            $campuses = App\Models\Campus::orWhere('admin_user_id','=',$signatory->user_id)->get();
                            $campusCount= count($campuses);
                            $posCount= count($sigpositions);
                            @endphp
                            <span class="block pt-3 font-semibold tracking-wide text-center text-black text-md">
                                @if ($campusCount >= 1)

                                @foreach ($campuses as $campus)

                                @if (strtoupper($campus->campus_name)=="PRESIDENT'S OFFICE")
                                @if ($campusCount==$loop->index+1)
                                {{ $signatory->user->position->position_name}}
                                @else
                                {{ $signatory->user->position->position_name}} /
                                @endif
                                @else
                                @if ($campusCount==$loop->index+1)
                                {{ $signatory->user->position->position_name}} of {{ $campus->campus_name}} Campus
                                @else
                                {{ $signatory->user->position->position_name}} of {{ $campus->campus_name}} /
                                @endif
                                @endif

                                @endforeach

                                @elseif ($campusCount == 0 && $posCount >= 1)
                                @foreach ($sigpositions as $sigpos)

                                @if (strtoupper($sigpos->department_name)=="PRESIDENT'S OFFICE")
                                @if ($posCount==$loop->index+1)
                                {{ $signatory->user->position->position_name}}
                                @else
                                {{ $signatory->user->position->position_name}} /
                                @endif
                                @else
                                @if ($posCount==$loop->index+1)
                                {{ $signatory->user->position->position_name}} of {{ $sigpos->department_name}}
                                @else
                                {{ $signatory->user->position->position_name}} of {{ $sigpos->department_name}} /
                                @endif
                                @endif

                                @endforeach
                                @endif

                            </span>
                            @endforeach


                        </div>
                    </div>
                </div>

            </div>

        </div>
        @endif
        @if ($isDraft == true)
        <button wire:click="deleteTO('{{ $travel_order->to_type }}')" id="printto"
            class="max-w-sm px-4 py-2 font-semibold tracking-wider text-white bg-red-500 rounded-full w-sm hover:bg-red-200 hover:text-primary-500 active:bg-primary-500 active:text-white">Delete
            Travel Order</button>
        <a href="{{route('travel-order', ['id'=>3,'isEdit'=>1,'travelOrderID'=>$travelorderID])}}" target="_blank"
            id="printto"
            class="max-w-sm px-4 py-2 font-semibold tracking-wider text-white rounded-full w-sm bg-primary-500 hover:bg-primary-200 hover:text-primary-500 active:bg-primary-700 active:text-white">Edit
            Travel Order</a>
        @else
        @if ($isSignatory==1)
        <button wire:click="declineTO('{{ $travel_order->to_type }}')" id="decline"
            class="max-w-sm px-4 py-2 font-semibold tracking-wider text-white bg-red-500 rounded-full w-sm hover:bg-red-200 hover:text-primary-500 active:bg-primary-500 active:text-white">Decline
            Travel Order</button>
        <button wire:click="approveTO('{{ $travel_order->to_type }}')" id="approve"
            class="max-w-sm px-4 py-2 font-semibold tracking-wider text-white rounded-full bg-primary-500 w-sm hover:bg-indigo-200 hover:text-primary-500 active:bg-primary-500 active:text-white">Approve
            Travel Order</button>
        <button x-on:click="showModal = true" id="side_note_show"
            class="max-w-sm px-4 py-2 font-semibold tracking-wider text-white bg-indigo-800 rounded-full w-sm hover:bg-indigo-200 hover:text-primary-500 active:bg-primary-500 active:text-white">Add
            Side Note</button>
        @else
        <a href="{{route('print-to', $travelorderID)}}" target="_blank" id="printto"
            class="max-w-sm px-4 py-2 font-semibold tracking-wider text-white rounded-full w-sm bg-primary-500 hover:bg-primary-200 hover:text-primary-500 active:bg-primary-700 active:text-white">Print
            Travel Order</a>
        @endif
        @endif
        @else
        <div class="w-full">
            <div class="m-6 divide-y divide-black divide-solid print:divide-y-2">
                <div class="flex py-10 my-auto">
                    <span
                        class="mx-auto text-5xl font-extrabold tracking-wide text-black uppercase print:text-xl">travel
                        order not found</span>
                </div>
            </div>

        </div>
        <a href="{{route('redirect')}}" id="printto"
            class="max-w-sm px-4 py-2 font-semibold tracking-wider rounded-full w-sm bg-primary-500 text-primary-200 hover:bg-primary-200 hover:text-primary-500 active:bg-primary-700 active:text-white">Go
            to dashboard</a>
        @endif

    </div>

    <div class="col-span-1 p-4 text-left">
        <span class="text-lg font-semibold tracking-wider text-left uppercase text-primary-700">Side Notes</span>
        <div class="">
            <div class="flow-root mt-6">
                <ul role="list" class="-my-5 divide-y divide-gray-200">
                    @if (isset($side_notes))
                    @if (count($side_notes)>0)
                    @foreach ($side_notes as $side_note)
                    <li class="py-5">
                        <div class="relative focus-within:ring-2 focus-within:ring-indigo-500">
                            <div class="flex justify-between text-sm font-semibold text-gray-800">
                                <div class="flex ">
                                    <!-- Extend touch target to entire panel -->
                                    <span class="absolute inset-0" aria-hidden="true"></span>
                                    {{ $side_note->user->name }}
                                </div>
                                <div class="flex">
                                    <!-- Extend touch target to entire panel -->
                                    <span class="absolute inset-0" aria-hidden="true"></span>
                                    {{ $side_note->created_at->diffForHumans() }}
                                </div>
                            </div>
                            <p class="mt-1 text-sm text-gray-600 line-clamp-2">{{ $side_note->message }}</p>
                        </div>
                    </li>
                    @endforeach
                    @else
                    <li class="py-5">
                        <div class="relative focus-within:ring-2 focus-within:ring-indigo-500">
                            <h3 class="text-sm font-semibold text-gray-800">
                                <a href="#" class="hover:underline focus:outline-none">
                                    <!-- Extend touch target to entire panel -->
                                    <span class="absolute inset-0" aria-hidden="true"></span>
                                    Hi {{ auth()->user()->name }}!
                                </a>
                            </h3>
                            <p class="mt-1 text-sm text-gray-600 line-clamp-2">We found no side note(s) for this travel
                                order! Have a nice day!</p>
                        </div>
                    </li>
                    @endif
                    @else
                    <li class="py-5">
                        <div class="relative focus-within:ring-2 focus-within:ring-indigo-500">
                            <h3 class="text-sm font-semibold text-gray-800">
                                <a href="#" class="hover:underline focus:outline-none">
                                    <!-- Extend touch target to entire panel -->
                                    <span class="absolute inset-0" aria-hidden="true"></span>
                                    Hi {{ auth()->user()->name }}!
                                </a>
                            </h3>
                            <p class="mt-1 text-sm text-gray-600 line-clamp-2">We found no side note(s) for this travel
                                order! Have a nice day!</p>
                        </div>
                    </li>
                    @endif



                </ul>
            </div>
            @if ($sideNoteNumber < $side_notes_count) <div class="mt-6">
                <button x-on:click="$wire.set('sideNoteNumber',$wire.sideNoteNumber+5)"
                    class="flex items-center justify-center w-full px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-md shadow-sm hover:bg-gray-50">
                    View More
                </button>
        </div>
        @endif
    </div>

</div>
<div class="col-span-1 p-4 text-left">
    <span class="text-lg font-semibold tracking-wider text-left uppercase text-primary-700">Approval Status </span>
    <div class="">
        <div class="flow-root mt-6">
            <ul role="list" class="-my-5 divide-y divide-gray-200">
                @if (isset($signatories))
                @if (count($signatories)>0)
                @foreach ($signatories as $signatory)
                <li class="py-5">
                    <div class="relative focus-within:ring-2 focus-within:ring-indigo-500">
                        <div class="flex justify-between text-sm font-semibold text-gray-800">
                            <div class="flex ">
                                <!-- Extend touch target to entire panel -->
                                <span class="absolute inset-0" aria-hidden="true"></span>
                                {{ $signatory->user->name }}
                            </div>
                            <div class="flex">
                                <!-- Extend touch target to entire panel -->
                                <span class="absolute inset-0" aria-hidden="true"></span>
                                {{ $signatory->updated_at->diffForHumans() }}
                            </div>
                        </div>
                        @if ($signatory->approval_status == 'pending')
                        <p class="mt-1 text-sm text-gray-700 line-clamp-2">Approval from {{ $signatory->user->name }} is
                            still <strong class="italic text-yellow-600 uppercase">pending</strong>. </p>
                        @elseif ($signatory->approval_status == 'approved')
                        <p class="mt-1 text-sm text-gray-700 line-clamp-2">{{ $signatory->user->name }} has <strong
                                class="italic text-green-700 uppercase">approved</strong> of this travel order! </p>
                        @elseif ($signatory->approval_status == 'declined')
                        <p class="mt-1 text-sm text-gray-700 line-clamp-2">{{ $signatory->user->name }} has <strong
                                class="italic text-red-500 uppercase">Vetoed/declined</strong> this travel order.*See
                            side notes(if any) </p>
                        @endif

                    </div>
                </li>
                @endforeach
                @else
                <li class="py-5">
                    <div class="relative focus-within:ring-2 focus-within:ring-indigo-500">
                        <h3 class="text-sm font-semibold text-gray-800">
                            <a href="#" class="hover:underline focus:outline-none">
                                <!-- Extend touch target to entire panel -->
                                <span class="absolute inset-0" aria-hidden="true"></span>
                                Hi {{ auth()->user()->name }}!
                            </a>
                        </h3>
                        <p class="mt-1 text-sm text-gray-600 line-clamp-2">We found no side note(s) for this travel
                            order! Have a nice day!</p>
                    </div>
                </li>
                @endif
                @else
                <li class="py-5">
                    <div class="relative focus-within:ring-2 focus-within:ring-indigo-500">
                        <h3 class="text-sm font-semibold text-gray-800">
                            <a href="#" class="hover:underline focus:outline-none">
                                <!-- Extend touch target to entire panel -->
                                <span class="absolute inset-0" aria-hidden="true"></span>
                                Hi {{ auth()->user()->name }}!
                            </a>
                        </h3>
                        <p class="mt-1 text-sm text-gray-600 line-clamp-2">We found no side note(s) for this travel
                            order! Have a nice day!</p>
                    </div>
                </li>
                @endif



            </ul>
        </div>

    </div>
</div>
