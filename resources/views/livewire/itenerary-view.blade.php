<div>
    @php
    $this->per_diem = $per_diem;
    @endphp

    <div class="flex flex-col" wire:init="generateDays">

        <div class="my-3 overflow-x-auto rounded-lg">
            <div class="inline-block py-2 align-middle min-w-ful">
                <div class="overflow-hidden border-b border-white shadow">
                    <table class="min-w-full m-2 divide-y divide-white rounded-lg table-fixed md:max-w-screen lg:max-w-screen xl:max-w-xl" id="itineraryTable">
                        <thead class="break-all bg-primary-bg">

                            <tr>
                                <th scope="col" colspan="8"
                                    class="px-6 py-3 text-xs font-medium tracking-wider text-center text-gray-500 uppercase bg-white">

                                </th>

                                <th scope="col" colspan="4"
                                    class="px-3 pt-3 text-xs font-medium tracking-normal text-center text-gray-700 uppercase bg-white">
                                    <span class="text-sm font-semibold text-secondary-bg">NOTE:</span> Tick the box
                                    below if the registration fee covers it
                                </th>
                                <th scope="col" colspan="2"
                                    class="px-6 py-3 text-xs font-extrabold tracking-wider text-left text-gray-800 uppercase bg-white">
                                </th>
                            </tr>
                            <tr>
                                <th scope="col"
                                    class="px-6 py-3 text-xs font-medium tracking-wider text-center text-white uppercase truncate">
                                    Date ({{Carbon\Carbon::createFromFormat('Y-m-d', $gen)->format('Y')}})
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-xs font-medium tracking-wider text-center text-white uppercase truncate">
                                    Place to be visited
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-xs font-medium tracking-wider text-center text-white uppercase truncate">
                                    Departure Time
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-xs font-medium tracking-wider text-center text-white uppercase truncate">
                                    Arrival Time
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-xs font-medium tracking-wider text-center text-white uppercase truncate">
                                    Mode of Trans.
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-xs font-medium tracking-wider text-center text-white uppercase truncate">
                                    Trans. Exp
                                </th>

                                <th scope="col"
                                    class="px-6 py-3 text-xs font-medium tracking-wider text-center text-white uppercase truncate">
                                    Others
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-xs font-medium tracking-wider text-center text-white uppercase truncate">
                                    Per Diem
                                </th>
                                {{-- <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                    Covered by Registration
                                </th> --}}

                                <th scope="col"
                                    class="px-6 py-3 text-xs font-medium tracking-wider text-left text-white uppercase truncate">
                                    Breakfast
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-xs font-medium tracking-wider text-left text-white uppercase truncate">
                                    Lunch
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-xs font-medium tracking-wider text-left text-white uppercase truncate">
                                    Dinner
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-xs font-medium tracking-wider text-left text-white uppercase truncate">
                                    Lodging
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-xs font-extrabold tracking-wider text-left uppercase truncate text-secondary-bg">
                                    Total
                                <th scope="col" class="relative px-6 py-3">
                                    <span class="sr-only">Edit</span>
                                </th>
                            </tr>
                        </thead>



                        @foreach($input as $key => $value)
                        @if($key == 0|| $key =="0")
                        <tr class="p-2 break-all">
                            <td contenteditable='false' class="px-2 py-4 text-sm font-medium text-gray-900 break-all "
                                disabled>
                                <h1 class="" style="display:none;">
                                    {{$this->input[intval($key)]['date']=Carbon\Carbon::createFromFormat('Y-m-d', $gen)->format('Y-m-d')}}
                                </h1>
                                {{Carbon\Carbon::createFromFormat('Y-m-d', $gen)->format('M. d')}}
                                {{-- <input type="text" wire:model="frick" class="min-w-full min-h-full border-transparent"> --}}
                            </td>
                            <td class="px-6 py-4 text-sm font-medium text-gray-900 break-all ">
                                {{-- <input type="text" class="min-h-full border-transparent min-w-24"> --}}
                                <input wire:model.lazy='input.{{$key}}.place' type="text" name="input.{{$key}}.place"
                                    id="input.{{$key}}.place"
                                    class="block w-24 border-0 border-b border-transparent focus:border-indigo-600 focus:ring-0 sm:text-sm">
                                @if(isset($input[intval($key)]['place']))
                                <h1 class="" style="display:none;">{{$input[intval($key)]['place']}}</h1>
                                <script>
                                    var itExist = !!document.getElementById("input.{{$key}}.place");

                                </script>
                                @endif
                                @error('input.{{$key}}.place')
                                <span class="text-sm tracking-wider text-red-500">{{$message}}</span>
                                @enderror
                            </td>
                            <td class="px-6 py-4 text-sm font-medium text-center text-gray-900 break-all">
                                <input wire:model.lazy='input.{{$key}}.dep_time' wire:change="validateTime({{$key}})"
                                    type="time" name="input.{{$key}}.dep_time" id="input.{{$key}}.dep_time"
                                    class="min-w-full min-h-full border-transparent">

                                @if(isset($input[intval($key)]['dep_time']))
                                <h1 class="" style="display:none;">{{$input[intval($key)]['dep_time']}}</h1>
                                <script>
                                    var itExist = !!document.getElementById("input.{{$key}}.dep_time");

                                </script>
                                @endif
                                @if (session()->has('message'))

                                <span class="text-sm text-red-500"> {{ session('message') }}</span>
                                @endif


                            </td>
                            <td class="px-6 py-4 text-sm font-medium text-gray-900">
                                <input wire:model.defer='input.{{$key}}.arr_time' wire:change="validateTime({{$key}})"
                                    type="time" name="input.{{$key}}.arr_time" id="input.{{$key}}.arr_time"
                                    class="min-w-full min-h-full border-transparent">

                                @if(isset($input[intval($key)]['arr_time']))
                                <h1 class="" style="display:none;">{{$input[intval($key)]['arr_time']}}</h1>
                                <script>
                                    var itExist = !!document.getElementById("input.{{$key}}.arr_time");

                                </script>
                                @endif
                                @if (session()->has('message'))

                                <span class="text-sm text-red-500"> {{ session('message') }}</span>
                                @endif

                            </td>
                            <td class="px-6 py-4 text-sm font-medium text-gray-900 break-all ">
                                <input wire:model.defer='input.{{$key}}.mot' type="text" name="input.{{$key}}.mot"
                                    id="input.{{$key}}.mot"
                                    class="block w-24 border-0 border-b border-transparent focus:border-indigo-600 focus:ring-0 sm:text-sm">

                                @if(isset($input[intval($key)]['mot']))
                                <h1 class="" style="display:none;">{{$input[intval($key)]['mot']}}</h1>
                                <script>
                                    var itExist = !!document.getElementById("input.{{$key}}.mot");

                                </script>
                                @endif
                                @error('input.{{$key}}.mot')
                                <span class="text-sm tracking-wider text-red-500">{{$message}}</span>
                                @enderror
                            </td>
                            <td class="px-6 py-4 text-sm font-medium text-gray-900 break-all ">
                                <input wire:model.lazy='input.{{$key}}.trans_exp' type="number" min="0"
                                    name="input.{{$key}}.trans_exp" id="input.{{$key}}.trans_exp"
                                    class="block w-24 border-0 border-b border-transparent focus:border-indigo-600 focus:ring-0 sm:text-sm"
                                    wire:leave="ComputeDiem({{$key}},'doesntmatter')">
                                @if(isset($input[intval($key)]['trans_exp']))
                                <h1 class="" style="display:none;">{{$input[intval($key)]['trans_exp']}}</h1>

                                <script>
                                    var itExist = !!document.getElementById("input.{{$key}}.trans_exp");

                                </script>
                                @endif
                                @error('input.{{$key}}.trans_exp')
                                <span class="text-sm tracking-wider text-red-500">{{$message}}</span>
                                @enderror

                            </td>

                            <td class="px-6 py-4 text-sm font-medium text-gray-900 ">
                                <input wire:model.lazy='input.{{$key}}.others' type="number" min="0"
                                    name="input.{{$key}}.others" id="input.{{$key}}.others"
                                    class="block w-24 border-0 border-b border-transparent focus:border-indigo-600 focus:ring-0 sm:text-sm">

                                @if(isset($input[intval($key)]['others']))
                                <h1 class="" style="display:none;">{{$input[intval($key)]['others']}}</h1>
                                <script>
                                    var itExist = !!document.getElementById("input.{{$key}}.others");

                                </script>
                                @endif
                                @error('input.{{$key}}.others')
                                <span class="text-sm tracking-wider text-red-500">{{$message}}</span>
                                @enderror

                            </td>

                            <td class="px-6 py-4 text-sm font-medium text-gray-900 ">
                                <input wire:model='input.{{$key}}.per_diem' type="text" name="input.{{$key}}.per_diem"
                                    id="input.{{$key}}.per_diem"
                                    class="block w-24 border-0 border-b border-transparent focus:border-indigo-600 focus:ring-0 sm:text-sm"
                                    value="" readonly>

                                @if(isset($input[intval($key)]['per_diem']))
                                <h1 class="" style="display:none;">{{$input[intval($key)]['per_diem']}}</h1>
                                <script>
                                    var itExist = !!document.getElementById("input.{{$key}}.per_diem");

                                </script>
                                @endif
                                @error('input.{{$key}}.per_diem')
                                <span class="text-sm tracking-wider text-red-500">{{$message}}</span>
                                @enderror

                            </td>

                            <td class="px-6 py-4 text-sm font-medium text-gray-900 ">
                                <input wire:model='input.{{$key}}.breakfast' type="checkbox"
                                    name="input.{{$key}}.breakfast" id="input.{{$key}}.breakfast"
                                    class="w-4 h-4 mx-auto border-gray-300 rounded text-secondary-bg disable-btn focus:ring-primary-bg"
                                    wire:click="ComputeDiem({{$key}},'breakfast')">

                                @if(isset($input[intval($key)]['breakfast']))
                                <h1 class="" style="display:none;">{{$input[intval($key)]['breakfast']}}</h1>

                                <script>
                                    var itExist = !!document.getElementById("input.{{$key}}.breakfast");

                                </script>
                                @endif

                            </td>
                            <td class="px-6 py-4 text-sm font-medium text-gray-900 break-all ">
                                <input wire:model='input.{{$key}}.lunch' type="checkbox" name="input.{{$key}}.lunch"
                                    id="input.{{$key}}.lunch"
                                    class="w-4 h-4 border-gray-300 rounded text-secondary-bg focus:ring-primary-bg"
                                    wire:click="ComputeDiem({{$key}},'lunch')">

                                @if(isset($input[intval($key)]['lunch']))
                                <h1 class="" style="display:none;">{{$input[intval($key)]['lunch']}}</h1>

                                <script>
                                    var itExist = !!document.getElementById("input.{{$key}}.lunch");

                                </script>
                                @endif

                            </td>
                            <td class="px-6 py-4 text-sm font-medium text-gray-900 ">
                                <input wire:model='input.{{$key}}.dinner' type="checkbox" name="input.{{$key}}.dinner"
                                    id="input.{{$key}}.dinner"
                                    class="w-4 h-4 border-gray-300 rounded text-secondary-bg focus:ring-primary-bg"
                                    wire:click="ComputeDiem({{$key}},'dinner')">

                                @if(isset($input[intval($key)]['dinner']))
                                <h1 class="" style="display:none;">{{$input[intval($key)]['dinner']}}</h1>
                                <script>
                                    var itExist = !!document.getElementById("input.{{$key}}.dinner");

                                </script>
                                @endif

                            </td>
                            <td class="px-6 py-4 text-sm font-medium text-gray-900 ">
                                <input wire:model='input.{{$key}}.lodging' type="checkbox"
                                    name="input.{{$key}}.lodging"" id=" input.{{$key}}.lodging""
                                    class="w-4 h-4 border-gray-300 rounded text-secondary-bg focus:ring-primary-bg"
                                    wire:click="ComputeDiem({{$key}},'lodging')">

                                @if(isset($input[intval($key)]['lodging']))
                                <h1 class="" style="display:none;">{{$input[intval($key)]['lodging']}}</h1>
                                <script>
                                    var itExist = !!document.getElementById("input.{{$key}}.lodging");

                                </script>
                                @endif

                            </td>

                            <td class="px-6 py-4 text-sm font-medium text-gray-900 ">
                                <input wire:model='input.{{$key}}.total' type="text" name="input.{{$key}}.total"
                                    id="input.{{$key}}.total"
                                    class="block w-24 border-0 border-b border-transparent focus:border-indigo-600 focus:ring-0 sm:text-sm"
                                    readonly>

                                @if(isset($input[intval($key)]['total']))
                                <h1 class="" style="display:none;">{{$input[intval($key)]['total']}}</h1>
                                <script>
                                    var itExist = !!document.getElementById("input.{{$key}}.total");

                                </script>
                                @endif

                            </td>

                        </tr>
                        @else
                        <tr class="p-2 break-all">
                            <td contenteditable='false' class="px-2 py-4 text-sm font-medium text-gray-900 break-all "
                                disabled>
                                <h1 class="" style="display:none;">
                                    {{$this->input[intval($key)]['date']=Carbon\Carbon::createFromFormat('Y-m-d', $gen)->format('Y-m-d')}}
                                </h1>
                                {{Carbon\Carbon::createFromFormat('Y-m-d', $gen)->format('M. d')}}
                                {{-- <input type="text" wire:model="frick" class="min-w-full min-h-full border-transparent"> --}}
                            </td>
                            <td class="px-6 py-4 text-sm font-medium text-gray-900 break-all ">
                                {{-- <input type="text" class="min-h-full border-transparent min-w-24"> --}}
                                <input wire:model.debounce='input.{{$key}}.place' type="text"
                                    name="input.{{$key}}.place" id="input.{{$key}}.place"
                                    class="block w-24 border-0 border-b border-transparent focus:border-indigo-600 focus:ring-0 sm:text-sm">
                                @if(isset($input[intval($key)]['place']))
                                <h1 class="" style="display:none;">{{$input[intval($key)]['place']}}</h1>
                                <script>
                                    var itExist = !!document.getElementById("input.{{$key}}.place");

                                </script>
                                @endif
                                @error('input.{{$key}}.place')
                                <span class="text-sm tracking-wider text-red-500">{{$message}}</span>
                                @enderror
                            </td>
                            <td class="px-6 py-4 text-sm font-medium text-gray-900 break-all ">
                                <input wire:model.debounce='input.{{$key}}.dep_time'
                                    wire:change="validateTime({{$key}})" type="time" name="input.{{$key}}.dep_time"
                                    id="input.{{$key}}.dep_time" class="min-w-full min-h-full border-transparent">

                                @if(isset($input[intval($key)]['dep_time']))
                                <h1 class="" style="display:none;">{{$input[intval($key)]['dep_time']}}</h1>
                                <script>
                                    var itExist = !!document.getElementById("input.{{$key}}.dep_time");

                                </script>
                                @endif
                                @if (session()->has('message'))

                                <span class="text-sm text-red-500"> {{ session('message') }}</span>
                                @endif

                            </td>
                            <td class="px-6 py-4 text-sm font-medium text-gray-900">
                                <input wire:model.defer='input.{{$key}}.arr_time' type="time"
                                    wire:change="validateTime({{$key}})" name="input.{{$key}}.arr_time"
                                    id="input.{{$key}}.arr_time" class="min-w-full min-h-full border-transparent">

                                @if(isset($input[intval($key)]['arr_time']))
                                <h1 class="" style="display:none;">{{$input[intval($key)]['arr_time']}}</h1>
                                <script>
                                    var itExist = !!document.getElementById("input.{{$key}}.arr_time");

                                </script>
                                @endif
                                @if (session()->has('message'))

                                <span class="text-sm text-red-500"> {{ session('message') }}</span>
                                @endif

                            </td>
                            <td class="px-6 py-4 text-sm font-medium text-gray-900 break-all ">
                                <input wire:model.defer='input.{{$key}}.mot' type="text" name="input.{{$key}}.mot"
                                    id="input.{{$key}}.mot"
                                    class="block w-24 border-0 border-b border-transparent focus:border-indigo-600 focus:ring-0 sm:text-sm">

                                @if(isset($input[intval($key)]['mot']))
                                <h1 class="" style="display:none;">{{$input[intval($key)]['mot']}}</h1>
                                <script>
                                    var itExist = !!document.getElementById("input.{{$key}}.mot");

                                </script>
                                @endif

                            </td>
                            <td class="px-6 py-4 text-sm font-medium text-gray-900 break-all ">
                                <input wire:model.lazy='input.{{$key}}.trans_exp' type="number" min="0"
                                    name="input.{{$key}}.trans_exp" id="input.{{$key}}.trans_exp"
                                    class="block w-24 border-0 border-b border-transparent focus:border-indigo-600 focus:ring-0 sm:text-sm"
                                    wire:leave="ComputeDiem({{$key}},'doesntmatter')">

                                @if(isset($input[intval($key)]['trans_exp']))
                                <h1 class="" style="display:none;">{{$input[intval($key)]['trans_exp']}}</h1>
                                <script>
                                    var itExist = !!document.getElementById("input.{{$key}}.trans_exp");

                                </script>
                                @endif
                                @error('input.{{$key}}.trans_exp')
                                <span class="text-sm tracking-wider text-red-500">{{$message}}</span>
                                @enderror

                            </td>

                            <td class="px-6 py-4 text-sm font-medium text-gray-900 ">
                                <input wire:model.lazy='input.{{$key}}.others' type="number" min="0"
                                    name="input.{{$key}}.others" id="input.{{$key}}.others"
                                    class="block w-24 border-0 border-b border-transparent focus:border-indigo-600 focus:ring-0 sm:text-sm">

                                @if(isset($input[intval($key)]['others']))
                                <h1 class="" style="display:none;">{{$input[intval($key)]['others']}}</h1>
                                <script>
                                    var itExist = !!document.getElementById("input.{{$key}}.others");

                                </script>
                                @endif
                                @error('input.{{$key}}.others')
                                <span class="text-sm tracking-wider text-red-500">{{$message}}</span>
                                @enderror

                            </td>
                            <td class="px-6 py-4 text-sm font-medium text-gray-900 ">
                            </td>
                            <td class="px-6 py-4 text-sm font-medium text-gray-900 ">
                            </td>
                            <td class="px-6 py-4 text-sm font-medium text-gray-900 break-all ">
                            </td>
                            <td class="px-6 py-4 text-sm font-medium text-gray-900 ">
                            </td>
                            <td class="px-6 py-4 text-sm font-medium text-gray-900 ">
                            </td>

                            <td class="px-6 py-4 text-sm font-medium text-gray-900 ">
                                <input wire:model='input.{{$key}}.total' type="text" name="input.{{$key}}.total"
                                    id="input.{{$key}}.total"
                                    class="block w-24 border-0 border-b border-transparent focus:border-indigo-600 focus:ring-0 sm:text-sm"
                                    readonly>

                                @if(isset($input[intval($key)]['total']))
                                <h1 class="" style="display:none;">{{$input[intval($key)]['total']}}</h1>
                                <script>
                                    var itExist = !!document.getElementById("input.{{$key}}.total");

                                </script>
                                @endif

                            </td>
                            <td class="px-6 py-4 text-sm font-medium text-gray-900 ">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-red-500" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" wire:click="removemain({{$key}})">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </td>

                        </tr>
                        @endif


                        @endforeach





                    </table>
                </div>

                <div class="flex">
                    <a class="cursor-pointer mt-2 mr-2 inline-flex items-center px-2.5 py-1.5 border border-white shadow-sm text-xs font-medium rounded text-white bg-primary-bg hover:bg-primary-bg focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-bg"
                        wire:click.prevent="addmain()"> ADD ROWS</a>
                    {{-- <button class="m-5 bg-gray-700" wire:click.prevent="checkModel()" >seasd </button>
                    {{$frick}} --}}
                </div>
            </div>
        </div>
        <div wire:loading wire:target="ComputeDiem"
            class="fixed top-0 left-0 w-screen h-screen bg-gray-600 cursor-wait bg-opacity-20">
        </div>
    </div>

</div>
