<div >
<?php
$this->per_diem = $per_diem;
?>
 
    <div class="flex flex-col" wire:init="generateDays">
    
        <div class="my-3 overflow-x-auto rounded-lg">
            <div class="inline-block py-2 align-middle min-w-ful">
                <div class="overflow-hidden border-b border-gray-200 shadow">
                    <table class="min-w-full m-2 divide-y divide-gray-200 rounded-lg table-fixed" id="itineraryTable">
                        <thead class="bg-gray-200">
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
                                </th>
                                <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-center text-gray-500 uppercase">
                                    Others
                                </th>
                                {{-- <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                    Covered by Registration
                                </th> --}}
                                
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
                                <th scope="col" class="px-6 py-3 text-xs font-extrabold tracking-wider text-left text-gray-800 uppercase">
                                    Total
                                <th scope="col" class="relative px-6 py-3">
                                    <span class="sr-only">Edit</span>
                                </th>
                            </tr>
                           </thead>

                            @foreach($input as $key => $value)
                              @if($key%2==0)
                            <tr class="p-2 break-all">
                                    <td wire:model='input.{{$key}}.date' contenteditable='false' class="px-2 py-4 text-sm font-medium text-gray-900 break-all " >
                                        {{Carbon\Carbon::createFromFormat('Y-m-d', $gen)->format('M. d')}}
                                        {{-- <input type="text" wire:model="frick" class="min-w-full min-h-full border-transparent"> --}}
                                    </td>
                                    <td class="px-6 py-4 text-sm font-medium text-gray-900 break-all ">
                                        {{-- <input type="text" class="min-h-full border-transparent min-w-24"> --}}
                                        <input wire:model.debounce='input.{{$key}}.place' type="text" name="input.{{$key}}.place" id="input.{{$key}}.place" class="block w-24 border-0 border-b border-transparent focus:border-indigo-600 focus:ring-0 sm:text-sm"
                                        wire:click="fix()">
                                        @if(isset($input[intval($key)]['place']))
                                        <h1 class="" style="display:none;">{{$input[intval($key)]['place']}}</h1>
                                        <script>
                                            var itExist = !!document.getElementById("input.{{$key}}.place");
                                            
                                        </script>
                                        @endif
                                        </td>
                                    <td class="px-6 py-4 text-sm font-medium text-gray-900 break-all ">
                                        <input wire:model.debounce='input.{{$key}}.dep_time' type="time" name="input.{{$key}}.dep_time" id="input.{{$key}}.dep_time" class="min-w-full min-h-full border-transparent">

                                        @if(isset($input[intval($key)]['dep_time']))
                                        <h1 class="" style="display:none;">{{$input[intval($key)]['dep_time']}}</h1>
                                        <script>
                                            var itExist = !!document.getElementById("input.{{$key}}.dep_time");
                                            
                                        </script>
                                        @endif
                                        
                                    </td>
                                    <td class="px-6 py-4 text-sm font-medium text-gray-900">
                                        <input wire:model='input.{{$key}}.arr_time' type="time" name="input.{{$key}}.arr_time" id="input.{{$key}}.arr_time"class="min-w-full min-h-full border-transparent">

                                        @if(isset($input[intval($key)]['arr_time']))
                                        <h1 class="" style="display:none;">{{$input[intval($key)]['arr_time']}}</h1>
                                        <script>
                                            var itExist = !!document.getElementById("input.{{$key}}.arr_time");
                                            
                                        </script>
                                        @endif

                                    </td>
                                    <td class="px-6 py-4 text-sm font-medium text-gray-900 break-all ">
                                        <input wire:model='input.{{$key}}.mot' type="text" name="input.{{$key}}.mot" id="input.{{$key}}.mot" class="block w-24 border-0 border-b border-transparent focus:border-indigo-600 focus:ring-0 sm:text-sm">

                                        @if(isset($input[intval($key)]['mot']))
                                        <h1 class="" style="display:none;">{{$input[intval($key)]['mot']}}</h1>
                                        <script>
                                            var itExist = !!document.getElementById("input.{{$key}}.mot");
                                            
                                        </script>
                                        @endif

                                    </td>
                                    <td class="px-6 py-4 text-sm font-medium text-gray-900 break-all ">
                                        <input wire:model='input.{{$key}}.trans_exp' type="number" name="input.{{$key}}.trans_exp" id="input.{{$key}}.trans_exp" class="block w-24 border-0 border-b border-transparent focus:border-indigo-600 focus:ring-0 sm:text-sm">
                                        
                                        @if(isset($input[intval($key)]['trans_exp']))
                                        <h1 class="" style="display:none;">{{$input[intval($key)]['trans_exp']}}</h1>
                                        <script>
                                            var itExist = !!document.getElementById("input.{{$key}}.trans_exp");
                                        </script>
                                        @endif

                                    </td>
                                    <td class="px-6 py-4 text-sm font-medium text-gray-900 ">
                                        <input wire:model='input.{{$key}}.per_diem' type="text" name="input.{{$key}}.per_diem" id="input.{{$key}}.per_diem" class="block w-24 border-0 border-b border-transparent focus:border-indigo-600 focus:ring-0 sm:text-sm" value="" readonly>
                                        
                                        @if(isset($input[intval($key)]['per_diem']))
                                        <h1 class="" style="display:none;">{{$input[intval($key)]['per_diem']}}</h1>
                                        <script>
                                            var itExist = !!document.getElementById("input.{{$key}}.per_diem");
                                        </script>
                                        @endif

                                    </td>
                                    <td class="px-6 py-4 text-sm font-medium text-gray-900 ">
                                        <input wire:model='input.{{$key}}.others' type="number" name="input.{{$key}}.others" id="input.{{$key}}.others" class="block w-24 border-0 border-b border-transparent focus:border-indigo-600 focus:ring-0 sm:text-sm">
                                        
                                        @if(isset($input[intval($key)]['others']))
                                        <h1 class="" style="display:none;">{{$input[intval($key)]['others']}}</h1>
                                        <script>
                                            var itExist = !!document.getElementById("input.{{$key}}.others");
                                        </script>
                                        @endif

                                    </td>
                                    <td class="px-6 py-4 text-sm font-medium text-gray-900 ">
                                        <input wire:model='input.{{$key}}.breakfast' type="checkbox" name="input.{{$key}}.breakfast" id="input.{{$key}}.breakfast" class="w-4 h-4 mx-auto text-indigo-600 border-gray-300 rounded disable-btn focus:ring-indigo-500" wire:click="ComputeDiem({{$key}},'breakfast')" >
                                    
                                        @if(isset($input[intval($key)]['breakfast']))
                                        <h1 class="" style="display:none;">{{$input[intval($key)]['breakfast']}}</h1>
                                        
                                        <script>
                                            var itExist = !!document.getElementById("input.{{$key}}.breakfast");
                                        </script>
                                        @endif

                                    </td>
                                    <td class="px-6 py-4 text-sm font-medium text-gray-900 ">
                                        <input wire:model='input.{{$key}}.lunch' type="checkbox" name="input.{{$key}}.lunch" id="input.{{$key}}.lunch" class="w-4 h-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500" wire:click="ComputeDiem({{$key}},'lunch')" >
                                    
                                        @if(isset($input[intval($key)]['lunch']))
                                        <h1 class="" style="display:none;">{{$input[intval($key)]['lunch']}}</h1>
                                        
                                        <script>
                                            var itExist = !!document.getElementById("input.{{$key}}.lunch");
                                        </script>
                                        @endif

                                    </td>
                                    <td class="px-6 py-4 text-sm font-medium text-gray-900 ">
                                        <input wire:model='input.{{$key}}.dinner' type="checkbox" name="input.{{$key}}.dinner" id="input.{{$key}}.dinner" class="w-4 h-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500" wire:click="ComputeDiem({{$key}},'dinner')" >
                                            
                                        @if(isset($input[intval($key)]['dinner']))
                                        <h1 class="" style="display:none;">{{$input[intval($key)]['dinner']}}</h1>
                                        <script>
                                            var itExist = !!document.getElementById("input.{{$key}}.dinner");
                                        </script>
                                        @endif

                                    </td>
                                    <td class="px-6 py-4 text-sm font-medium text-gray-900 ">
                                        <input wire:model='input.{{$key}}.lodging' type="checkbox" name="input.{{$key}}.lodging"" id="input.{{$key}}.lodging"" class="w-4 h-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500" wire:click="ComputeDiem({{$key}},'lodging')" >
                                        
                                        @if(isset($input[intval($key)]['lodging']))
                                        <h1 class="" style="display:none;">{{$input[intval($key)]['lodging']}}</h1>
                                        <script>
                                            var itExist = !!document.getElementById("input.{{$key}}.lodging");
                                        </script>
                                        @endif

                                    </td>
                                    
                                    <td class="px-6 py-4 text-sm font-medium text-gray-900 ">
                                        <input wire:model='input.{{$key}}.total' type="number" name="input.{{$key}}.total" id="input.{{$key}}.total" class="block w-24 border-0 border-b border-transparent focus:border-indigo-600 focus:ring-0 sm:text-sm" readonly>
                                        
                                        @if(isset($input[intval($key)]['total']))
                                        <h1 class="" style="display:none;">{{$input[intval($key)]['total']}}</h1>
                                        <script>
                                            var itExist = !!document.getElementById("input.{{$key}}.total");
                                        </script>
                                        @endif

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
                            @else
                            <tr class="p-2 break-all bg-gray-50">
                                    <td wire:model='input.{{$key}}.date' contenteditable='false' class="px-2 py-4 text-sm font-medium text-gray-900 break-all bg-gray-50 " >
                                        {{Carbon\Carbon::createFromFormat('Y-m-d', $gen)->format('M. d')}}
                                        {{-- <input type="text" wire:model="frick" class="min-w-full min-h-full border-transparent"> --}}
                                    </td>
                                    <td class="px-6 py-4 text-sm font-medium text-gray-900 break-all ">
                                        {{-- <input type="text" class="min-h-full border-transparent min-w-24"> --}}
                                        <input wire:model.debounce='input.{{$key}}.place' type="text" name="input.{{$key}}.place" id="input.{{$key}}.place" class="block w-24 border-0 border-b border-transparent focus:border-indigo-600 focus:ring-0 sm:text-sm"
                                        wire:click="fix()">
                                        @if(isset($input[intval($key)]['place']))
                                        <h1 class="" style="display:none;">{{$input[intval($key)]['place']}}</h1>
                                        <script>
                                            var itExist = !!document.getElementById("input.{{$key}}.place");
                                            
                                        </script>
                                        @endif
                                        </td>
                                    <td class="px-6 py-4 text-sm font-medium text-gray-900 break-all ">
                                        <input wire:model.debounce='input.{{$key}}.dep_time' type="time" name="input.{{$key}}.dep_time" id="input.{{$key}}.dep_time" class="min-w-full min-h-full border-transparent">

                                        @if(isset($input[intval($key)]['dep_time']))
                                        <h1 class="" style="display:none;">{{$input[intval($key)]['dep_time']}}</h1>
                                        <script>
                                            var itExist = !!document.getElementById("input.{{$key}}.dep_time");
                                            
                                        </script>
                                        @endif
                                        
                                    </td>
                                    <td class="px-6 py-4 text-sm font-medium text-gray-900">
                                        <input wire:model='input.{{$key}}.arr_time' type="time" name="input.{{$key}}.arr_time" id="input.{{$key}}.arr_time"class="min-w-full min-h-full border-transparent">

                                        @if(isset($input[intval($key)]['arr_time']))
                                        <h1 class="" style="display:none;">{{$input[intval($key)]['arr_time']}}</h1>
                                        <script>
                                            var itExist = !!document.getElementById("input.{{$key}}.arr_time");
                                            
                                        </script>
                                        @endif

                                    </td>
                                    <td class="px-6 py-4 text-sm font-medium text-gray-900 break-all ">
                                        <input wire:model='input.{{$key}}.mot' type="text" name="input.{{$key}}.mot" id="input.{{$key}}.mot" class="block w-24 border-0 border-b border-transparent focus:border-indigo-600 focus:ring-0 sm:text-sm">

                                        @if(isset($input[intval($key)]['mot']))
                                        <h1 class="" style="display:none;">{{$input[intval($key)]['mot']}}</h1>
                                        <script>
                                            var itExist = !!document.getElementById("input.{{$key}}.mot");
                                            
                                        </script>
                                        @endif

                                    </td>
                                    <td class="px-6 py-4 text-sm font-medium text-gray-900 break-all ">
                                        <input wire:model='input.{{$key}}.trans_exp' type="number" name="input.{{$key}}.trans_exp" id="input.{{$key}}.trans_exp" class="block w-24 border-0 border-b border-transparent focus:border-indigo-600 focus:ring-0 sm:text-sm">
                                        
                                        @if(isset($input[intval($key)]['trans_exp']))
                                        <h1 class="" style="display:none;">{{$input[intval($key)]['trans_exp']}}</h1>
                                        <script>
                                            var itExist = !!document.getElementById("input.{{$key}}.trans_exp");
                                        </script>
                                        @endif

                                    </td>
                                    <td class="px-6 py-4 text-sm font-medium text-gray-900 ">
                                        <input wire:model='input.{{$key}}.per_diem' type="text" name="input.{{$key}}.per_diem" id="input.{{$key}}.per_diem" class="block w-24 border-0 border-b border-transparent focus:border-indigo-600 focus:ring-0 sm:text-sm" value="" readonly>
                                        
                                        @if(isset($input[intval($key)]['per_diem']))
                                        <h1 class="" style="display:none;">{{$input[intval($key)]['per_diem']}}</h1>
                                        <script>
                                            var itExist = !!document.getElementById("input.{{$key}}.per_diem");
                                        </script>
                                        @endif

                                    </td>
                                    <td class="px-6 py-4 text-sm font-medium text-gray-900 ">
                                        <input wire:model='input.{{$key}}.others' type="number" name="input.{{$key}}.others" id="input.{{$key}}.others" class="block w-24 border-0 border-b border-transparent focus:border-indigo-600 focus:ring-0 sm:text-sm">
                                        
                                        @if(isset($input[intval($key)]['others']))
                                        <h1 class="" style="display:none;">{{$input[intval($key)]['others']}}</h1>
                                        <script>
                                            var itExist = !!document.getElementById("input.{{$key}}.others");
                                        </script>
                                        @endif

                                    </td>
                                    <td class="px-6 py-4 text-sm font-medium text-gray-900 ">
                                        <input wire:model='input.{{$key}}.breakfast' type="checkbox" name="input.{{$key}}.breakfast" id="input.{{$key}}.breakfast" class="w-4 h-4 mx-auto text-indigo-600 border-gray-300 rounded disable-btn focus:ring-indigo-500" wire:click="ComputeDiem({{$key}},'breakfast')" >
                                    
                                        @if(isset($input[intval($key)]['breakfast']))
                                        <h1 class="" style="display:none;">{{$input[intval($key)]['breakfast']}}</h1>
                                        
                                        <script>
                                            var itExist = !!document.getElementById("input.{{$key}}.breakfast");
                                        </script>
                                        @endif

                                    </td>
                                    <td class="px-6 py-4 text-sm font-medium text-gray-900 ">
                                        <input wire:model='input.{{$key}}.lunch' type="checkbox" name="input.{{$key}}.lunch" id="input.{{$key}}.lunch" class="w-4 h-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500" wire:click="ComputeDiem({{$key}},'lunch')" >
                                    
                                        @if(isset($input[intval($key)]['lunch']))
                                        <h1 class="" style="display:none;">{{$input[intval($key)]['lunch']}}</h1>
                                        
                                        <script>
                                            var itExist = !!document.getElementById("input.{{$key}}.lunch");
                                        </script>
                                        @endif

                                    </td>
                                    <td class="px-6 py-4 text-sm font-medium text-gray-900 ">
                                        <input wire:model='input.{{$key}}.dinner' type="checkbox" name="input.{{$key}}.dinner" id="input.{{$key}}.dinner" class="w-4 h-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500" wire:click="ComputeDiem({{$key}},'dinner')" >
                                            
                                        @if(isset($input[intval($key)]['dinner']))
                                        <h1 class="" style="display:none;">{{$input[intval($key)]['dinner']}}</h1>
                                        <script>
                                            var itExist = !!document.getElementById("input.{{$key}}.dinner");
                                        </script>
                                        @endif

                                    </td>
                                    <td class="px-6 py-4 text-sm font-medium text-gray-900 ">
                                        <input wire:model='input.{{$key}}.lodging' type="checkbox" name="input.{{$key}}.lodging"" id="input.{{$key}}.lodging"" class="w-4 h-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500" wire:click="ComputeDiem({{$key}},'lodging')" >
                                        
                                        @if(isset($input[intval($key)]['lodging']))
                                        <h1 class="" style="display:none;">{{$input[intval($key)]['lodging']}}</h1>
                                        <script>
                                            var itExist = !!document.getElementById("input.{{$key}}.lodging");
                                        </script>
                                        @endif

                                    </td>
                                    
                                    <td class="px-6 py-4 text-sm font-medium text-gray-900 ">
                                        <input wire:model='input.{{$key}}.total' type="number" name="input.{{$key}}.total" id="input.{{$key}}.total" class="block w-24 border-0 border-b border-transparent focus:border-indigo-600 focus:ring-0 sm:text-sm" readonly>
                                        
                                        @if(isset($input[intval($key)]['total']))
                                        <h1 class="" style="display:none;">{{$input[intval($key)]['total']}}</h1>
                                        <script>
                                            var itExist = !!document.getElementById("input.{{$key}}.total");
                                        </script>
                                        @endif

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
                              @endif
                            <!-- Even row -->

                            @endforeach
                      

                    

                   
                    </table>
                </div>  

                <div class="flex">
                    <button class="mt-2 mr-2 inline-flex items-center px-2.5 py-1.5 border border-gray-300 shadow-sm text-xs font-medium rounded text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" 
                    wire:click.prevent="addmain()" > ADD ROWS</button>
                    {{-- <button class="m-5 bg-gray-700" wire:click.prevent="checkModel()" >seasd </button>
                    {{$frick}} --}}
                </div>
            </div>
        </div>
        <div wire:loading wire:target="ComputeDiem" class="fixed top-0 left-0 w-screen h-screen bg-gray-600 cursor-wait bg-opacity-20">
</div>
    </div>
       
</div>



