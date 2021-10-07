<div>
    <div class="flex flex-col" wire:init="generateDays">
        <div class="my-2 overflow-x-auto">
            <div class="inline-block min-w-full py-2 align-middle sm:px-2 lg:px-2">
            <div class="border-b border-gray-200 shadow sm:rounded-lg">
                <table class="min-w-full divide-y divide-gray-200 table-fixed" id="itineraryTable">
                <thead class="bg-gray-50">
                    <tr>
                    <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-center text-gray-500 uppercase">
                        Date ({{Carbon\Carbon::createFromFormat('Y-m-d', $gen)->format('Y')}})
                    </th>
                    <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-center text-gray-500 uppercase">
                        Place to be visited
                    </th>
                    <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-center text-gray-500 uppercase">
                        Departure Time
                    </th>
                    <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-center text-gray-500 uppercase">
                        Arrival Time
                    </th>
                    <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-center text-gray-500 uppercase">
                        Mode of Trans.
                    </th>
                    <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-center text-gray-500 uppercase">
                        Trans. Exp
                    </th>
                    <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-center text-gray-500 uppercase">
                        Per Diem
                    </th><th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-center text-gray-500 uppercase">
                        Others
                    </th>
                    {{-- <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                        Covered by Registration
                    </th> --}}
                    <th scope="col" class="px-6 py-3 text-xs font-extrabold tracking-wider text-left text-gray-800 uppercase">
                        Total
                    </th>
                    <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                        Breakfast
                    </th>
                    <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                        Lunch
                    </th>
                    <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                        Dinner
                    </th>
                    <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                        Lodging
                    </th>
                    {{-- <th scope="col" class="px-6 py-3"> --}}
                        <span class="sr-only">Edit</span>
                    </th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Odd row -->
                    {{-- add ROW!! --}}

                    @foreach($input as $key => $value)
                    <tr class="break-all bg-white ">
                            <td wire:model='input.{{$key}}.date' contenteditable='false' class="px-2 py-4 text-sm font-medium text-gray-900 break-all " >
                                {{Carbon\Carbon::createFromFormat('Y-m-d', $gen)->format('M')}} . {{Carbon\Carbon::createFromFormat('Y-m-d', $gen)->format('d')}}
                                {{-- <input type="text" wire:model="frick" class="min-w-full min-h-full border-transparent"> --}}
                            </td>
                        <td class="px-6 py-4 text-sm font-medium text-gray-900 break-all ">
                             {{-- <input type="text" class="min-w-24 min-h-full border-transparent"> --}}
                             <input wire:model='input.{{$key}}.place' type="text" name="place" id="place" class="w-24 block  border-0 border-b border-transparent focus:border-indigo-600 focus:ring-0 sm:text-sm">

                            </td>
                        <td class="px-6 py-4 text-sm font-medium text-gray-900 break-all ">
                            <input wire:model='input.{{$key}}.dep_time' type="time" name="departure_time" id="departure_time" class="min-w-full min-h-full border-transparent">
                        </td>
                        <td class="px-6 py-4 text-sm font-medium text-gray-900">
                            <input wire:model='input.{{$key}}.arr_time' type="time" name="arrival_time" id="arrival_time"class="min-w-full min-h-full border-transparent">
                        </td>
                        <td class="px-6 py-4 text-sm font-medium text-gray-900 break-all ">
                            <input wire:model='input.{{$key}}.mot' type="text" name="mot" id="mot" class="w-24 block  border-0 border-b border-transparent focus:border-indigo-600 focus:ring-0 sm:text-sm">
                        </td>
                        <td class="px-6 py-4 text-sm font-medium text-gray-900 break-all ">
                            <input wire:model='input.{{$key}}.trans_exp' type="number" name="travel_expense" id="travel_expense" class="w-24 block  border-0 border-b border-transparent focus:border-indigo-600 focus:ring-0 sm:text-sm">
                        </td>
                        <td class="px-6 py-4 text-sm font-medium text-gray-900 ">
                            <input type="text" name="per_diem" id="per_diem" class="w-24 block  border-0 border-b border-transparent focus:border-indigo-600 focus:ring-0 sm:text-sm" value="{{isset($per_diem['amount']) ? ''.number_format($per_diem['amount'],2) : "0.00"}}">
                        </td>
                        <td class="px-6 py-4 text-sm font-medium text-gray-900 ">
                            <input wire:model='input.{{$key}}.others' type="number" name="others" id="others" class="w-24 block  border-0 border-b border-transparent focus:border-indigo-600 focus:ring-0 sm:text-sm">
                        </td>
                        <td class="px-6 py-4 text-sm font-medium text-gray-900 ">
                            <input wire:model='input.{{$key}}.total' type="number" name="total" id="total" class="w-24 block  border-0 border-b border-transparent focus:border-indigo-600 focus:ring-0 sm:text-sm">
                        </td>
                        <td class="px-6 py-4 text-sm font-medium text-gray-900 ">
                            <input wire:model='input.{{$key}}.breakfast' type="checkbox" name="breakfast" id="breakfast" class="w-4 h-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500">
                        </td>
                        <td class="px-6 py-4 text-sm font-medium text-gray-900 ">
                            <input wire:model='input.{{$key}}.lunch' type="checkbox" name="lunch" id="lunch" class="w-4 h-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500">
                        </td>
                        <td class="px-6 py-4 text-sm font-medium text-gray-900 ">
                            <input wire:model='input.{{$key}}.dinner' type="checkbox" name="dinner" id="dinner" class="w-4 h-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500">
                        </td>
                        <td class="px-6 py-4 text-sm font-medium text-gray-900 ">
                            <input wire:model='input.{{$key}}.lodging' type="checkbox" name="lodging" id="lodging" class="w-4 h-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500">
                        </td>
                        {{-- <td class="px-6 py-4 text-sm font-medium text-gray-900">
                            <div class="grid grid-cols-1 gap-2">
                                <div class="flex items-start col-span-1"> 
                                    <div class="flex items-center h-5">
                                        <input id="breakfast" aria-describedby="breakfast-description" name="breakfast" type="checkbox" class="w-4 h-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500">
                                    </div>
                                    <div class="ml-3 text-sm">
                                        <label for="breakfast" class="font-medium text-gray-700">Breakfast</label>
                                    </div>
                                </div>
                                <div class="flex items-start col-span-1 ">
                                    <div class="flex items-center h-5">
                                        <input id="lunch" aria-describedby="lunch-description" name="lunch" type="checkbox" class="w-4 h-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500">
                                    </div>
                                    <div class="ml-3 text-sm">
                                        <label for="lunch" class="font-medium text-gray-700">Lunch</label>
                                    </div>
                                </div>
                                <div class="flex items-start col-span-1 ">
                                    <div class="flex items-center h-5">
                                        <input id="dinner" aria-describedby="dinner-description" name="dinner" type="checkbox" class="w-4 h-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500">
                                    </div>
                                    <div class="ml-3 text-sm">
                                        <label for="dinner" class="font-medium text-gray-700">Dinner</label>
                                    </div>
                                </div>
                                <div class="flex items-start col-span-1 ">
                                    <div class="flex items-center h-5">
                                        <input id="lodging" aria-describedby="lodging-description" name="lodging" type="checkbox" class="w-4 h-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500">
                                    </div>
                                    <div class="ml-3 text-sm">
                                        <label for="lodging" class="font-medium text-gray-700">Lodging</label>
                                    </div>
                                </div>
                        
                        </div>
                        
                        </td> --}}
                        {{-- <td class="px-6 py-4 text-sm font-medium text-gray-900 ">
                            
                        </td> --}}
                   
                    </tr>

                    <!-- Even row -->
                    {{-- <tr class="bg-gray-200">
                        <td contenteditable='true' class="px-6 py-4 text-sm font-medium text-gray-900 break-all ">
                            
                        </td>
                        <td contenteditable='true' class="px-6 py-4 text-sm font-medium text-gray-900 break-all ">
                            
                        </td>
                        <td contenteditable='true' class="px-6 py-4 text-sm font-medium text-gray-900 break-all ">
                            
                        </td>
                        <td contenteditable='true' class="px-6 py-4 text-sm font-medium text-gray-900 break-all ">
                            
                        </td>
                        <td contenteditable='true' class="px-6 py-4 text-sm font-medium text-gray-900 break-all ">
                            
                        </td>
                        <td contenteditable='true' class="px-6 py-4 text-sm font-medium text-gray-900 break-all ">
                            
                        </td>
                        <td  class="px-6 py-4 text-sm font-medium text-gray-900 ">
                            {{isset($per_diem) ? ''.number_format($per_diem['amount'],2) : ""}}
                        </td>
                        <td contenteditable='true' class="px-6 py-4 text-sm font-medium text-gray-900 ">
                            
                        </td>
                         <td class="px-6 py-4 text-sm font-medium text-gray-900">
                            <div class="grid grid-cols-1 gap-2">
                                <div class="flex items-start col-span-1 ">
                                    <div class="flex items-center h-5">
                                        <input id="breakfast" aria-describedby="breakfast-description" name="breakfast" type="checkbox" class="w-4 h-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500">
                                    </div>
                                    <div class="ml-3 text-sm">
                                        <label for="breakfast" class="font-medium text-gray-700">Breakfast</label>
                                    </div>
                                </div>
                                <div class="flex items-start col-span-1 ">
                                    <div class="flex items-center h-5">
                                        <input id="lunch" aria-describedby="lunch-description" name="lunch" type="checkbox" class="w-4 h-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500">
                                    </div>
                                    <div class="ml-3 text-sm">
                                        <label for="lunch" class="font-medium text-gray-700">Lunch</label>
                                    </div>
                                </div>
                                <div class="flex items-start col-span-1 ">
                                    <div class="flex items-center h-5">
                                        <input id="dinner" aria-describedby="dinner-description" name="dinner" type="checkbox" class="w-4 h-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500">
                                    </div>
                                    <div class="ml-3 text-sm">
                                        <label for="dinner" class="font-medium text-gray-700">Dinner</label>
                                    </div>
                                </div>
                                <div class="flex items-start col-span-1 ">
                                    <div class="flex items-center h-5">
                                        <input id="lodging" aria-describedby="lodging-description" name="lodging" type="checkbox" class="w-4 h-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500">
                                    </div>
                                    <div class="ml-3 text-sm">
                                        <label for="lodging" class="font-medium text-gray-700">Lodging</label>
                                    </div>
                                </div>
                        
                        </div>
                        
                        </td>
                        <td class="px-6 py-4 text-sm font-medium text-gray-900 ">
                            
                        </td>
                    </tr> --}}


                </tbody>

                @endforeach

                {{-- <tfoot class="bg-gray-100 display:block">
                <button wire:click.prevent="addmain({{$i}})" > ADD ROWS</button><button class="m-5 bg-gray-700" wire:click.prevent="checkModel()" >seasd </button>
                {{$frick}}
                </tfoot> --}}
                </table>
            </div>

            <div class="flex">
                <button class="mt-2 mr-2 inline-flex items-center px-2.5 py-1.5 border border-gray-300 shadow-sm text-xs font-medium rounded text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" 
                wire:click.prevent="addmain({{$i}})" > ADD ROWS</button>
                {{-- <button class="m-5 bg-gray-700" wire:click.prevent="checkModel()" >seasd </button>
                {{$frick}} --}}
            </div>
            </div>
        </div>
        </div>
       
</div>



