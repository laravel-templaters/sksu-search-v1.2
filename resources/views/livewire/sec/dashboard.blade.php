<div class = "p-5">
        
        <div class="items-center mx-auto mb-5 text-center">
            <h3 class="font-sans text-4xl font-extrabold text-primary-text drop-shadow-md">SELECT TRANSACTION</h3>
        </div>

        <ul role="list" class="grid grid-cols-1 gap-3">
        
            <li class="flex flex-col col-span-1 text-left bg-white rounded-md shadow-sm" x-data="{showMe : false}">
                <div class="flex justify-between min-w-full p-3" x-on:click="showMe = !showMe ">
                    <h3 class="my-auto text-xl font-extrabold text-primary-text">DISBURSEMENTS</h3>
                    <div class="flex">
                       <button > <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 my-auto text-transparent text-primary-text" id="chevron" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                             <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 13l-7 7-7-7m14-8l-7 7-7-7" />
                        </svg>
                        </button>
                    </div>
                </div>
                {{-- content --}}
                <div class="p-3 ml-3 bg-gray-200 rounded-md " x-cloak x-show="showMe">
                   <div x-data="{openCA:false, openRe:false }">
                        <h3 class="p-2 text-black rounded-md text-md hover:bg-gray-600 hover:text-white" x-on:click="openCA = !openCA ">Cash Advances</h3>
                        <div class="grid flex-col grid-cols-1 p-3 ml-3 bg-gray-400 rounded-md " x-cloak x-show="openCA">
                            <a href="" class="p-2 text-black rounded-md text-md hover:bg-gray-800 hover:text-white">Local Travel</a>
                            <a href="" class="p-2 text-black rounded-md text-md hover:bg-gray-800 hover:text-white">Foreign Travel</a>
                            <a href="" class="p-2 text-black rounded-md text-md hover:bg-gray-800 hover:text-white">Activity, Program, Project, ETC.</a>
                            <a href="" class="p-2 text-black rounded-md text-md hover:bg-gray-800 hover:text-white">Payroll</a>
                            <a href="" class="p-2 text-black rounded-md text-md hover:bg-gray-800 hover:text-white">Special Disbursing Officer</a>
                            
                        </div>
                        <h3 class="p-2 text-black rounded-md text-md hover:bg-gray-600 hover:text-white" x-on:click="openRe = !openRe ">Reimbursements</h3>
                        <div class="grid flex-col grid-cols-1 p-3 ml-3 bg-gray-400 rounded-md " x-cloak x-show="openRe">
                            <a href="" class="p-2 text-black rounded-md text-md hover:bg-gray-800 hover:text-white">Local Travel</a>
                            <a href="" class="p-2 text-black rounded-md text-md hover:bg-gray-800 hover:text-white">Foreign Travel</a>
                            <a href="" class="p-2 text-black rounded-md text-md hover:bg-gray-800 hover:text-white">Activity, Program, Project, ETC.</a>
                            <a href="" class="p-2 text-black rounded-md text-md hover:bg-gray-800 hover:text-white">Supplies/Materials</a>
                            
                        </div>
                    </div>
                </div>
            </li>

            <li class="flex flex-col col-span-1 text-left bg-white rounded-md shadow-sm" x-data="{showMe : false}">
                <div class="flex justify-between min-w-full p-3" x-on:click="showMe = !showMe ">
                    <h3 class="my-auto text-xl font-extrabold uppercase text-primary-text">Travel Order</h3>
                    <div class="flex">
                       <button > <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 my-auto text-transparent text-primary-text" id="chevron" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                             <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 13l-7 7-7-7m14-8l-7 7-7-7" />
                        </svg>
                        </button>
                    </div>
                </div>
            </li>

            
        </ul>

</div>
