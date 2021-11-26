<div class="flex flex-col" wire:init="loadPosts">
    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8 xl:-mx-8">
        <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
            <div class="overflow-hidden border-b border-gray-200 shadow sm:rounded-lg">
                <table class="min-w-full divide-y divide-gray-200" id="dataTable">
                    <thead class="bg-gray-50">
                        <tr>
                            <th scope="col"
                                class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                DV Tracking No
                            </th>
                            <th scope="col"
                                class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                DV Type
                            </th>
                            <th scope="col"
                                class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                Status
                            </th>
                            <th scope="col" class="relative px-6 py-3">
                                <span class="sr-only">Edit</span>
                            </th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @if($disbursement_vouchers != null)
                        @foreach($disbursement_vouchers as $dv)
                        <tr>
                            <td class="px-6 py-4 text-sm font-medium text-gray-900 whitespace-nowrap">
                                {{$dv->dv_tracking_number}}
                            </td>
                            <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">

                                @switch($dv->dv_type_sorter->sorter)
                                @case(1)
                                {{$dv->dv_type_sorter->dv_type->dv_type}}
                                @break
                                @case(2)
                                {{$dv->dv_type_sorter->dv_categories->dv_category}}
                                @break
                                @case(3)
                                {{$dv->dv_type_sorter->dv_sub_categories->dv_sub_category}}
                                @break

                                @default

                                @endswitch
                            </td>
                            <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">
                                @php
                                $desc =
                                App\Models\LastAction::latest()->where('disbursement_voucher_id','=',$dv->id)->value('description');
                                $actiontype =
                                App\Models\LastAction::latest()->where('disbursement_voucher_id','=',$dv->id)->value('action_type_id');
                                $actiontype =
                                App\Models\ActionType::where('id','=',$actiontype)->value('description');
                                @endphp
                                {{$actiontype.' '.$desc}}
                            </td>
                            <td class="px-6 py-4 text-sm font-medium text-right whitespace-nowrap">
                                <button type="button" class="text-indigo-600 bg-transparent hover:text-indigo-900"
                                    x-on:click="showFeed=true" wire:click="$emit('dvClicked',{{$dv->id}})"><span
                                        class="text-xs"> View
                                        Progress </span></button>
                            </td>
                        </tr>
                        @endforeach
                        @else
                        <tr>
                            <td colspan="5" class="p-5 text-center">
                                <span class="text-sm text-gray-500">No Disbursement Voucher Found</span>
                            </td>
                        </tr>
                        @endif



                        <!-- More people... -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
