@extends('layouts.app-laravel-blades')

@section('content')
    <div class="px-10" x-data="{perdiem:false, sigs:true, users:false}">
        <div class="container mx-auto my-5 bg-white rounded-lg sm:px-6 lg:px-8">
            
            <div>
                <div class="sm:hidden">
                <label for="tabs" class="sr-only">Select a tab</label>
                <!-- Use an "onChange" listener to redirect the user to the selected tab URL. -->
                <select id="tabs" name="tabs" class="block w-full border-gray-300 rounded-md focus:ring-indigo-500 focus:border-indigo-500">
                    <option>My Account</option>
            
                    <option>Company</option>
            
                    <option selected>Team Members</option>
            
                    <option>Billing</option>
                </select>
                </div>
                <div class="hidden sm:block">
                <div class="border-b border-gray-200">
                    <nav class="flex -mb-px" aria-label="Tabs">
                    <!-- Current: "border-indigo-500 text-indigo-600", Default: "border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300" -->
                    <a class="hover:cursor-pointer" :class="users == true ? 'w-1/3 px-1 py-4 text-sm font-medium text-center text-primary-600 border-b-2 border-primary-500':'w-1/3 px-1 py-4 text-sm font-medium text-center text-gray-500 border-b-2 border-transparent hover:text-gray-700 hover:border-gray-300'" aria-current="page"  x-on:click="users = true; sigs = perdiem = false;"> Manage Users </a>
            
                    <a class="hover:cursor-pointer" :class="sigs == true ? 'w-1/3 px-1 py-4 text-sm font-medium text-center text-primary-600 border-b-2 border-primary-500':'w-1/3 px-1 py-4 text-sm font-medium text-center text-gray-500 border-b-2 border-transparent hover:text-gray-700 hover:border-gray-300'" aria-current="page"  x-on:click="sigs = true; users = perdiem = false;"> Manage Signatories </a>
            
                    <a class="hover:cursor-pointer" :class="perdiem == true ? 'w-1/3 px-1 py-4 text-sm font-medium text-center text-primary-600 border-b-2 border-primary-500':'w-1/3 px-1 py-4 text-sm font-medium text-center text-gray-500 border-b-2 border-transparent hover:text-gray-700 hover:border-gray-300'" aria-current="page" x-on:click="perdiem = true; sigs = users = false;"> Manage Per Diem </a>
            
                    </nav>
                </div>
                </div>
            </div>
            <div class="w-full h-full p-5" name="perdiem" x-show="perdiem">
               @livewire('sysadmin.components.manage-per-diem')
            </div>
            <div class="w-full h-full p-5" name="signatories" x-show="sigs">
                @livewire('sysadmin.components.manage-signatories')
            </div>
            
        </div>  
    </div>
@endsection