<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full bg-gray-100">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <meta name="csrf-token" content="{{ csrf_token() }}">
    
        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
        {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/paper-css/0.3.0/paper.css"> --}}



        @livewireStyles

        <!-- Scripts -->
        <style>
        [x-cloak] { display: none !important; }
        </style>
        
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    
    <body class="h-full font-sans" >
        <div>
   
    <!-- Static sidebar for desktop -->
    <div class="hidden md:flex md:w-64 md:flex-col md:fixed md:inset-y-0">
      <!-- Sidebar component, swap this element with another sidebar if you like -->
      <div class="flex flex-col flex-1 min-h-0 bg-gray-800">
        <div class="flex flex-col flex-1 pt-5 pb-4 overflow-y-auto">
          <div class="flex items-center flex-shrink-0 px-4">
            <img class="w-auto h-8" src="https://tailwindui.com/img/logos/workflow-logo-indigo-500-mark-white-text.svg" alt="Workflow">
          </div>
          <nav class="flex-1 px-2 mt-5 space-y-1">
            <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
            <a href="#" class="flex items-center px-2 py-2 text-sm font-medium text-white bg-gray-900 rounded-md group">
              <!--
                Heroicon name: outline/home
  
                Current: "text-gray-300", Default: "text-gray-400 group-hover:text-gray-300"
              -->
              <svg class="flex-shrink-0 w-6 h-6 mr-3 text-gray-300" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
              </svg>
              Dashboard
            </a>
  
            <a href="#" class="flex items-center px-2 py-2 text-sm font-medium text-gray-300 rounded-md hover:bg-gray-700 hover:text-white group">
              <!-- Heroicon name: outline/users -->
              <svg class="flex-shrink-0 w-6 h-6 mr-3 text-gray-400 group-hover:text-gray-300" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
              </svg>
              Team
            </a>
  
            <a href="#" class="flex items-center px-2 py-2 text-sm font-medium text-gray-300 rounded-md hover:bg-gray-700 hover:text-white group">
              <!-- Heroicon name: outline/folder -->
              <svg class="flex-shrink-0 w-6 h-6 mr-3 text-gray-400 group-hover:text-gray-300" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z" />
              </svg>
              Projects
            </a>
  
            <a href="#" class="flex items-center px-2 py-2 text-sm font-medium text-gray-300 rounded-md hover:bg-gray-700 hover:text-white group">
              <!-- Heroicon name: outline/calendar -->
              <svg class="flex-shrink-0 w-6 h-6 mr-3 text-gray-400 group-hover:text-gray-300" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
              </svg>
              Calendar
            </a>
  
            <a href="#" class="flex items-center px-2 py-2 text-sm font-medium text-gray-300 rounded-md hover:bg-gray-700 hover:text-white group">
              <!-- Heroicon name: outline/inbox -->
              <svg class="flex-shrink-0 w-6 h-6 mr-3 text-gray-400 group-hover:text-gray-300" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4" />
              </svg>
              Documents
            </a>
  
            <a href="#" class="flex items-center px-2 py-2 text-sm font-medium text-gray-300 rounded-md hover:bg-gray-700 hover:text-white group">
              <!-- Heroicon name: outline/chart-bar -->
              <svg class="flex-shrink-0 w-6 h-6 mr-3 text-gray-400 group-hover:text-gray-300" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
              </svg>
              Reports
            </a>
          </nav>
        </div>
        <div class="flex flex-shrink-0 p-4 bg-gray-700">
          <a href="#" class="flex-shrink-0 block w-full group">
            <div class="flex items-center">
              <div>
                <img class="inline-block rounded-full h-9 w-9" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
              </div>
              <div class="ml-3">
                <p class="text-sm font-medium text-white">
                  Tom Cook
                </p>
                <p class="text-xs font-medium text-gray-300 group-hover:text-gray-200">
                  View profile
                </p>
              </div>
            </div>
          </a>
        </div>
      </div>
    </div>
    <div class="flex flex-col flex-1 md:pl-64">
      <div class="sticky top-0 z-10 pt-1 pl-1 bg-gray-100 md:hidden sm:pl-3 sm:pt-3">
        <button type="button" class="-ml-0.5 -mt-0.5 h-12 w-12 inline-flex items-center justify-center rounded-md text-gray-500 hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500">
          <span class="sr-only">Open sidebar</span>
          <!-- Heroicon name: outline/menu -->
          <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
          </svg>
        </button>
      </div>
      <main class="flex-1">
        <div class="py-6">
          <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
            <h1 class="text-2xl font-semibold text-gray-900">Dashboard</h1>
          </div>
          <div class="px-4 mx-auto max-w-7xl sm:px-6 md:px-8">
            <!-- Replace with your content -->
              {{ $slot }}
            <!-- /End replace -->
          </div>
        </div>
      </main>
    </div>
  </div>
           @include('footer')
        @stack('modals')
        @stack('scripts')
        @livewireScripts
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
        <x-livewire-alert::scripts />
       
    </body>
</html>
