<div class="flex max-h-screen min-h-full">
    <div class="flow-root">
        <ul role="list" class="">
            @foreach ($feeds as $feed)
            @switch($feed->action_type_id)
            @case(1)
            <li class="" id="forwarded">
                <div class="relative pb-8">
                    <span class="absolute top-4 left-4 -ml-px h-full w-0.5 bg-gray-200" aria-hidden="true"></span>
                    <div class="relative inline-flex space-x-3 bg-gray-100 rounded-full ">
                        <div>
                            <span
                                class="flex items-center justify-center w-8 h-8 bg-green-500 rounded-full ring-8 ring-gray-100">
                                <!-- Heroicon name: solid/user -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-white" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M3.293 9.707a1 1 0 010-1.414l6-6a1 1 0 011.414 0l6 6a1 1 0 01-1.414 1.414L11 5.414V17a1 1 0 11-2 0V5.414L4.707 9.707a1 1 0 01-1.414 0z"
                                        clip-rule="evenodd" />
                                </svg>
                            </span>
                        </div>
                        <div class="min-w-0 flex-1 pt-1.5 flex justify-between space-x-4 text-xs">
                            <div>
                                <p class="text-gray-500 ">Forwarded to Budget Office by <strong
                                        class="text-primary-bg">Juan Dela
                                        Cruz</strong></p>
                            </div>
                            <div class="pr-3 text-right text-gray-500 whitespace-nowrap">
                                <time datetime="2020-09-20">Sep 20</time>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            @break
            @case(2)
            <li class="" id="recieved">
                <div class="relative pb-8">

                    <div class="relative inline-flex space-x-3 bg-gray-100 rounded-full ">
                        <div>
                            <span
                                class="flex items-center justify-center w-8 h-8 bg-blue-500 rounded-full ring-8 ring-gray-100">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-white" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                        clip-rule="evenodd" />
                                </svg>
                            </span>
                        </div>
                        <div class="min-w-0 flex-1 pt-1.5 flex justify-between space-x-4 text-xs">
                            <div>
                                <p class="text-gray-500 ">Recieved by ICU From <strong class="text-primary-bg">Juan
                                        Dela Cruz</strong></p>
                            </div>
                            <div class="pr-3 text-right text-gray-500 whitespace-nowrap">
                                <time datetime="2020-09-20">Sep 20</time>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            @break
            @case(3)
            <li class="" id="returned">
                <div class="relative pb-8">
                    <span class="absolute top-4 left-4 -ml-px h-full w-0.5 bg-gray-200" aria-hidden="true"></span>
                    <div class="relative inline-flex space-x-3 bg-gray-100 rounded-full ">
                        <div>
                            <span
                                class="flex items-center justify-center w-8 h-8 bg-yellow-500 rounded-full ring-8 ring-gray-100">
                                <!-- Heroicon name: solid/user -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-white transform scale-y-105"
                                    viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M7.707 3.293a1 1 0 010 1.414L5.414 7H11a7 7 0 017 7v2a1 1 0 11-2 0v-2a5 5 0 00-5-5H5.414l2.293 2.293a1 1 0 11-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                                        clip-rule="evenodd" />
                                </svg>
                            </span>
                        </div>
                        <div class="min-w-0 flex-1 pt-1.5 flex justify-between space-x-4 text-xs">
                            <div>
                                <p class="text-gray-500 ">Returned to Budget Office by <strong
                                        class="text-primary-bg">Juan Dela
                                        Cruz</strong></p>
                            </div>
                            <div class="pr-3 text-right text-gray-500 whitespace-nowrap">
                                <time datetime="2020-09-20">Sep 20</time>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            @break

            @case(4)
            <li class="" id="closed">
                <div class="relative pb-8">
                    <span class="absolute top-4 left-4 -ml-px h-full w-0.5 bg-gray-200" aria-hidden="true"></span>
                    <div class="relative inline-flex space-x-3 bg-gray-100 rounded-full ">
                        <div>
                            <span
                                class="flex items-center justify-center w-8 h-8 bg-green-700 rounded-full ring-8 ring-gray-100">
                                <!-- Heroicon name: solid/user -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-white" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path d="M4 3a2 2 0 100 4h12a2 2 0 100-4H4z" />
                                    <path fill-rule="evenodd"
                                        d="M3 8h14v7a2 2 0 01-2 2H5a2 2 0 01-2-2V8zm5 3a1 1 0 011-1h2a1 1 0 110 2H9a1 1 0 01-1-1z"
                                        clip-rule="evenodd" />
                                </svg>
                            </span>
                        </div>
                        <div class="min-w-0 flex-1 pt-1.5 flex justify-between space-x-4 text-xs">
                            <div>
                                <p class="text-gray-500 ">Closed by Accounting by <strong class="text-primary-bg">Juan
                                        Dela Cruz</strong></p>
                            </div>
                            <div class="pr-3 text-right text-gray-500 whitespace-nowrap">
                                <time datetime="2020-09-20">Sep 20</time>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            @break
            @case(5)
            <li class="" id="rejected">
                <div class="relative pb-8">
                    <span class="absolute top-4 left-4 -ml-px h-full w-0.5 bg-gray-200" aria-hidden="true"></span>
                    <div class="relative inline-flex space-x-3 bg-gray-100 rounded-full ">
                        <div>
                            <span
                                class="flex items-center justify-center w-8 h-8 bg-red-500 rounded-full ring-8 ring-gray-100">
                                <!-- Heroicon name: solid/user -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-white" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                        clip-rule="evenodd" />
                                </svg>
                            </span>
                        </div>
                        <div class="min-w-0 flex-1 pt-1.5 flex justify-between space-x-4 text-xs">
                            <div>
                                <p class="text-gray-500 ">Rejected by Accounting by <strong class="text-primary-bg">Juan
                                        Dela
                                        Cruz</strong></p>
                            </div>
                            <div class="pr-3 text-right text-gray-500 whitespace-nowrap">
                                <time datetime="2020-09-20">Sep 20</time>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            @break

            @default

            @endswitch


            @endforeach




        </ul>
    </div>
</div>
