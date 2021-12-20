<div class="p-5">

    <div class="items-center mx-auto mb-5 text-center">
        <h3 class="font-sans text-4xl font-extrabold text-primary-bg drop-shadow-md">SELECT TRANSACTION</h3>
    </div>

    <ul role="list" class="grid grid-cols-1 gap-3">
        {{-- loop here for type_sorter --}}
        @foreach ($typesorters as $typesorter)



        @if ($typesorter->id != 1 && $typesorter->sorter == 1)
        @if (strtoupper($typesorter->dv_type->dv_type)!="TRAVEL ORDER")
        <li class="flex flex-col col-span-1 text-left rounded-md shadow-sm bg-secondary-bg-alt bg-opacity-70"
            x-data="{showMe : false}">
            @if(strtoupper($typesorter->dv_type->dv_type)=="DISBURSEMENTS")
            <div class="flex justify-between min-w-full p-3" x-on:click="showMe = !showMe ">
                <h3 class="my-auto text-xl font-extrabold text-primary-bg">{{$typesorter->dv_type->dv_type}}</h3>
                <div class="flex">
                    <button> <svg xmlns="http://www.w3.org/2000/svg"
                            class="w-5 h-5 my-auto text-transparent text-primary-bg" id="chevron" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 13l-7 7-7-7m14-8l-7 7-7-7" />
                        </svg>
                    </button>
                </div>
            </div>
            @else
            
            
            <a href="#">
                <div class="flex justify-between min-w-full p-3">
                    <h3 class="my-auto text-xl font-extrabold text-primary-bg">{{$typesorter->dv_type->dv_type}}</h3>
                    <div class="flex">
                        <button> <svg xmlns="http://www.w3.org/2000/svg"
                                class="w-5 h-5 my-auto text-transparent text-primary-bg" id="chevron" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 13l-7 7-7-7m14-8l-7 7-7-7" />
                            </svg>
                        </button>
                    </div>
                </div>
            </a>
            @endif
            <div class="p-3 mt-1 mb-1 ml-3 mr-1 bg-opacity-75 rounded-md bg-secondary-bg-alt " x-cloak x-show="showMe">
                @foreach ($categories as $category)
                <div x-data="{openCA:false}">

                    @if($category->id != 1)
                    @if($category->dv_type_id == 2 &&
                    (App\Models\DVSubCategory::where('dv_category_id',$category->id)->count())!=0)
                    <h3 class="p-2 font-semibold rounded-md text-primary-bg text-md hover:bg-primary-bg hover:text-secondary-text"
                        x-on:click="openCA = !openCA ">{{$category->dv_category}}</h3>
                    <div class="grid flex-col grid-cols-1 p-3 ml-3 rounded-md bg-primary-bg-alt " x-cloak
                        x-show="openCA">
                        @foreach ($sub_categories as $sub_category)
                        @if ($sub_category->dv_category_id == $category->id)
                        <a href="{{route('cdv', ['id' => $sub_category->id, 'sorter' => '3'])}}"
                            class="p-2 rounded-md text-secondary-text text-md hover:bg-gray-300 hover:text-primary-bg">{{$sub_category->dv_sub_category}}</a>
                        @endif
                        @endforeach
                    </div>
                    @else
                    <h3
                        class="p-2 font-semibold rounded-md text-primary-bg text-md hover:bg-primary-bg hover:text-secondary-text">

                        <a
                            href="{{route('cdv', ['id' => $category->id , 'sorter' => '2'])}}">{{$category->dv_category}}</a>
                    </h3>

                    @endif
                    @endif
                </div>
                @endforeach
            </div>
        </li>
        @endif
        @endif

        @endforeach
        {{-- loop here for type_sorter  end--}}
    </ul>

</div>
