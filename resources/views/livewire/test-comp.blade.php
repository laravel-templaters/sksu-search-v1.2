<div class="relative z-0 flex flex-1 w-full h-screen min-w-full mx-auto -mt-20 overflow-hidden bg-transparent max-w-screen"
    x-data="{folderSelected : @entangle('folderSelected'),buildingSelected : @entangle('buildingSelected'), shelfSelected:@entangle('shelfSelected'), drawerSelected:@entangle('drawerSelected')}">
    <div class="relative z-0 flex-1 overflow-y-auto focus:outline-none xl:order-last">
        <div class="absolute inset-0 px-4 py-6 sm:px-6 lg:px-8">
            <div class="flex flex-col mx-5">
                <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
                        <div
                            class="overflow-hidden border-b border-gray-200 shadow-md shadow-primary-500/50 sm:rounded-lg bg-gray-50 ">
                            {{-- buildings --}}
                            <div class="flex justify-between max-w-full m-4 ">
                                <div class="flex justify-start max-w-full m-4 ">

                                    <div x-data="{isSelected:false}">
                                        <div class="flex p-2 m-3 border-4 border-black rounded-lg group hover:cursor-pointer"
                                            :class="isSelected == true ? 'bg-blue-600 text-white' : 'bg-gray-100 text-gray-900'">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                class="w-auto h-20 font-thin group-hover:cursor-pointer" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="1">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                                            </svg>
                                            <div class="my-2 ml-4 group-hover:cursor-pointer">
                                                <div class="text-lg font-medium leading-6 ">

                                                </div>
                                                <div class="text-sm leading-5 ">
                                                    Shelves : aaaa
                                                </div>
                                                <div class="text-sm leading-5 ">
                                                    Building Code : aaaa
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <aside class="relative flex-shrink-0 hidden overflow-hidden xl:order-first xl:flex xl:flex-col w-96">


    </aside>
</div>
