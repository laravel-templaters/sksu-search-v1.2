<div class="mx-auto max-w-7xl sm:px-6 lg:px-8" x-data="{ active : 'myacc' }">

    <div class="">
        <div class="sm:hidden">
            <label for="tabs" class="sr-only">Select a tab</label>
            <!-- Use an "onChange" listener to redirect the user to the selected tab URL. -->
            <select id="tabs" name="tabs"
                class="block w-full py-2 pl-3 pr-10 text-base border-gray-300 rounded-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                <option selected>My Account</option>

                <option>Company</option>

                <option>Team Members</option>

                <option>Billing</option>
            </select>
        </div>
        <div class="hidden sm:block">
            <div class="border-b border-primary-bg">
                <nav class="flex -mb-px space-x-8" aria-label="Tabs">
                    <!-- Current: "border-indigo-500 text-indigo-600", Default: "border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300" -->
                    <a href="#" class="flex px-1 py-4 text-sm font-medium border-b-2 whitespace-nowrap"
                        x-on:click="active = 'myacc'"
                        x-bind:class="active == 'myacc' ? 'border-secondary-text text-primary-bg-alt ' : ' border-transparent text-secondary-text hover:text-primary-bg hover:border-secondary-text'">
                        My Account
                        <span
                            class="bg-gray-100 text-gray-900 hidden ml-3 py-0.5 px-2.5 rounded-full text-xs font-medium md:inline-block">6</span>
                    </a>

                    <a href="#" class="flex px-1 py-4 text-sm font-medium border-b-2 whitespace-nowrap"
                        x-on:click="active = 'pdv'"
                        x-bind:class="active == 'pdv' ? 'border-secondary-text text-primary-bg-alt ' : 'border-transparent text-secondary-text hover:text-primary-bg hover:border-secondary-text'">
                        Pending Disbursement Vouchers
                    </a>
                </nav>
            </div>
        </div>
    </div>


    <div class="mx-auto mt-2 max-w-7xl sm:px-6 lg:px-8">
        <div class="overflow-hidden divide-y divide-gray-500 rounded-lg shadow bg-secondary-bg-alt">
            <div class="flex flex-wrap items-center justify-between px-4 py-5 sm:px-6 sm:flex-nowrap">
                <div class="mt-2 ml-4">
                    <h3 class="text-lg font-medium leading-6 text-primary-bg">
                        Disbursement Vouchers
                    </h3>
                </div>
                <div class="flex-shrink-0 mt-2 ml-4">
                    <input type="text"
                        class="inline-flex items-center px-4 py-2 text-sm font-medium bg-gray-100 border rounded-md shadow-sm border-secondary-bg text-primaty-bg hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-secondary-bg">
                </div>
            </div>
            <div class="px-4 py-5 sm:p-6">
                <ul role="list" class="divide-y divide-secondary-text">
                    <li class="py-4">
                        asd
                    </li>
                    <li class="py-4">
                        asd
                    </li>

                    <!-- More items... -->
                </ul>

            </div>
        </div>
    </div>


</div>
