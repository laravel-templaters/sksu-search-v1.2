<div class="sticky left-0 flex p-2" x-data="{ lt: false, ft:false, payroll:false, appe:false, sdo:false}">
    <nav class="space-y-1" aria-label="Sidebar">
    <!-- Current: "bg-gray-100 text-gray-900", Default: "text-gray-600 hover:bg-gray-50 hover:text-gray-900" -->
        <a href="#" class="flex items-center px-3 py-2 font-medium text-gray-900 bg-gray-100 rounded-md text-md" aria-current="page" x-on:click="lt = true; ft = payroll = appe= sdo = false;">
            <span class="truncate">
            Local Travel
            </span>
        </a>

        <a href="#" class="flex items-center px-3 py-2 font-medium text-gray-600 rounded-md text-md hover:bg-gray-50 hover:text-gray-900" x-on:click="ft = true; lt = payroll = appe= sdo = false;">
            <span class="truncate">
            Foreign Travel
            </span>
        </a>

        <a href="#" class="flex items-center px-3 py-2 font-medium text-gray-600 rounded-md text-md hover:bg-gray-50 hover:text-gray-900" x-on:click="payroll = true; ft = lt = appe= sdo = false;">
            <span class="truncate">
            Payroll
            </span>
        </a>

        <a href="#" class="flex items-center px-3 py-2 font-medium text-gray-600 rounded-md text-md hover:bg-gray-50 hover:text-gray-900"
        x-on:click="appe = true; ft = lt = payroll= sdo = false;">
            <span class="truncate">
            Activity, Program, Project, Etc.
            </span>
        </a>
        
        <a href="#" class="flex items-center px-3 py-2 font-medium text-gray-600 rounded-md text-md hover:bg-gray-50 hover:text-gray-900"
        x-on:click="sdo = true; ft = lt = appe= payroll = false;">
            <span class="truncate">
            Special Disbursing Officer
            </span>
        </a>
    </nav>

    <div class="flex p-2 rounded-md">
        <template x-if="lt">
           @livewire('disbursement.cash-advances.local-travel')
        </template>
        <template x-if="ft">
            @livewire('disbursement.cash-advances.foreign-travel')
        </template>
        <template x-if="payroll">
            @livewire('disbursement.cash-advances.payroll')
        </template>
        <template x-if="appe">
            @livewire('disbursement.cash-advances.act-pro-pro-etc')
        </template>
        <template x-if="sdo">
           @livewire('disbursement.cash-advances.s-d-o')
        </template>
    </div>




</div>
