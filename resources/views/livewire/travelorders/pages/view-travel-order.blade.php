<div id="toPrint"
    class="h-full m-10 text-center bg-white divide-y divide-black rounded-lg print:divide-y-4 print:rounded-none print:m-0 divide-solid">
    <div class="flex w-full p-6 print:block ">
        <div class="inline my-auto"><img src="http://sksu.edu.ph/wp-content/uploads/2020/09/512x512-1.png"
                alt="sksu logo" class="object-scale-down w-20 h-full"></div>
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
    <div class="w-full">
        <div class="m-6 divide-y divide-black divide-solid print:divide-y-2">
            <div class="flex items-start w-full h-auto p-6 print:block ">
                <div id="header" class="items-start block w-full space-y-4 text-left">
                    <div class="block">
                        <span
                            class="text-sm font-semibold tracking-wide text-left text-black">{{ $travel_order->created_at->format('F d, Y') }}</span>
                    </div>
                    <div class="flex">
                        <span class="mx-auto text-5xl font-extrabold tracking-wide text-black uppercase print:text-xl">travel
                            order</span>
                    </div>
                    <div class="flex">
                        <span class="text-sm font-semibold tracking-wide text-black uppercase">Memorandum to: <span
                                class="ml-3">{{ $travel_order->user->name }}</span></span>
                    </div>
                </div>
            </div>
            <div id="contents" class="flex w-full h-auto px-6 pt-10 print:pt-5">
                <div id="header" class="items-start block w-full space-y-4 text-left">
                    <div class="flex-wrap block -space-y-1">
                        <span class="font-semibold tracking-wide text-left text-black text-md">You are hereby directed
                            to proceed <strong>
                            @if ($travel_order->others!="")
                            {{$travel_order->others}}, {{$travel_order->city->city_municipality_description}}, {{$travel_order->province->province_description}}, {{ $travel_order->region->region_description }}
                            @else
                            {{$travel_order->city->city_municipality_description}}, {{$travel_order->province->province_description}}, {{ $travel_order->region->region_description }}
                            @endif
                        </strong> on the <strong class="underline">{{ Carbon\Carbon::createFromFormat('Y-m-d',$travel_order->date_of_travel_from)->format('jS').' of '.Carbon\Carbon::createFromFormat('Y-m-d',$travel_order->date_of_travel_from)->format('F Y')}}</strong> to do the following:
                        </span>
                        <span class="block pl-5 font-semibold tracking-wide text-left text-black whitespace-pre-line text-md">
                            {{ $travel_order->purpose}}
                        </span>
                        <span class="block font-semibold tracking-wide text-center text-black pt-28 text-md">
                            {{ $travel_order->user->department->admin_user->name}}
                        </span>
                        <span class="block pt-3 font-semibold tracking-wide text-center text-black text-md">
                            {{ $travel_order->user->department->admin_user->role->role_name}}/{{ $travel_order->user->department->admin_user->position->position_name}}
                        </span>
                        <span class="block pt-16 font-semibold tracking-wide text-center text-black text-md">
                            Approved:
                        </span>
                        <span class="block pt-16 font-semibold tracking-wide text-center text-black text-md">
                            <span class="uppercase">rolando f. hechanova, rpae.</span> Ph.D.
                        </span>
                        <span class="block pt-3 font-semibold tracking-wide text-center text-black text-md">
                            {{ $travel_order->user->department->admin_user->role->role_name}}/{{ $travel_order->user->department->admin_user->position->position_name}}
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
