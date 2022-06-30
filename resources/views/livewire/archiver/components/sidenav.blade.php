<div class="py-6 pl-8 ">
    <div class="flex-shrink max-w-full max-h-full p-3 rounded-md shadow-md bg-gray-50 shadow-primary-500/50">
    <nav class="space-y-1 " aria-label="Sidebar">
     
        <a href="{{ route('archiver-main') }}" class="{{ request()->routeIs('archiver-main') ? 'bg-gray-200':''}} flex items-center px-3 py-2 text-sm font-medium text-gray-900  rounded-md"
            aria-current="page">
            <svg class="flex-shrink-0 w-6 h-6 mr-3 -ml-1 text-gray-500" xmlns="http://www.w3.org/2000/svg"
                fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
            </svg>
            <span class="truncate">
                Dashboard
            </span>

            <!-- Current: "bg-gray-50", Default: "bg-gray-200 text-gray-600" -->
            {{-- <span class="bg-gray-50 ml-auto inline-block py-0.5 px-3 text-xs rounded-full">
                5
            </span> --}}
        </a>

        <a href="{{ route('archive-new') }}"
            class="{{ request()->routeIs('archive-new') ? 'bg-gray-200':''}} flex items-center px-3 py-2 text-sm font-medium text-gray-900 rounded-md">
            <!-- Heroicon name: outline/users -->
            <svg xmlns="http://www.w3.org/2000/svg" class="flex-shrink-0 w-6 h-6 mr-3 -ml-1 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
              </svg>
            
            <span class="truncate">
               Archive New Document
            </span>
        </a>
        
        <a href="{{ route('manage-buildings') }}" target="_blank"
        class="{{ request()->routeIs('manage-buildings') ? 'bg-gray-200':''}} flex items-center px-3 py-2 text-sm font-medium text-gray-900 rounded-md">
         
            <svg xmlns="http://www.w3.org/2000/svg" class="flex-shrink-0 w-6 h-6 mr-3 -ml-1 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
            </svg>
            
            <span class="truncate">
               Manage Buildings
            </span>
         </a>
         <a href="{{ route('manage-shelves') }}" target="_blank"
         class="{{ request()->routeIs('manage-shelves') ? 'bg-gray-200':''}} flex items-center px-3 py-2 text-sm font-medium text-gray-900 rounded-md">
           
             <svg xmlns="http://www.w3.org/2000/svg" class="flex-shrink-0 w-6 h-6 mr-3 -ml-1 text-gray-400 fill-gray-400" viewBox="0 0 64 64"><path d="M58,2a3,3,0,0,0-3,3V18H51V8a1,1,0,0,0-1-1H14a1,1,0,0,0-1,1V18H9V5A3,3,0,0,0,3,5V61a1,1,0,0,0,1,1H8a1,1,0,0,0,1-1V55H55v6a1,1,0,0,0,1,1h4a1,1,0,0,0,1-1V5A3,3,0,0,0,58,2ZM27,49V35h2v3a1,1,0,0,0,1,1h4a1,1,0,0,0,1-1V35h2V49ZM15,49V35h2v3a1,1,0,0,0,1,1h4a1,1,0,0,0,1-1V35h2V49Zm4-14h2v2H19Zm12,0h2v2H31Zm8,0h2v3a1,1,0,0,0,1,1h4a1,1,0,0,0,1-1V35h2V49H39Zm4,0h2v2H43Zm7-2H14a1,1,0,0,0-1,1V49H9V24H26v4a1,1,0,0,0,1,1H37a1,1,0,0,0,1-1V24H55V49H51V34A1,1,0,0,0,50,33ZM28,24h8v3H28Zm21-6H39V9h2v3a1,1,0,0,0,1,1h4a1,1,0,0,0,1-1V9h2ZM45,9v2H43V9Zm-8,9H27V9h2v3a1,1,0,0,0,1,1h4a1,1,0,0,0,1-1V9h2ZM33,9v2H31V9ZM21,9v2H19V9ZM15,9h2v3a1,1,0,0,0,1,1h4a1,1,0,0,0,1-1V9h2v9H15ZM55,20v2H9V20ZM7,60H5V5A1,1,0,0,1,7,5Zm2-7V51H55v2Zm50,7H57V5a1,1,0,0,1,2,0Z"/></svg>
                                                            
             <span class="truncate">
                 Manage Shelves
             </span>
          </a>
          <a href="{{ route('manage-drawers') }}" target="_blank"
         class="{{ request()->routeIs('manage-drawers') ? 'bg-gray-200':''}} flex items-center px-3 py-2 text-sm font-medium text-gray-900 rounded-md">
           
            
             <svg xmlns="http://www.w3.org/2000/svg" class="flex-shrink-0 w-6 h-6 mr-3 -ml-1 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
              </svg>                                                
             <span class="truncate">
                 Manage Drawers
             </span>
          </a>
          <a href="{{ route('manage-folders') }}" target="_blank"
          class="{{ request()->routeIs('manage-folders') ? 'bg-gray-200':''}} flex items-center px-3 py-2 text-sm font-medium text-gray-900 rounded-md">
          
          <svg xmlns="http://www.w3.org/2000/svg" class="flex-shrink-0 w-6 h-6 mr-3 -ml-1 text-gray-400"  fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1">
            <path stroke-linecap="round" stroke-linejoin="round" d="M5 19a2 2 0 01-2-2V7a2 2 0 012-2h4l2 2h4a2 2 0 012 2v1M5 19h14a2 2 0 002-2v-5a2 2 0 00-2-2H9a2 2 0 00-2 2v5a2 2 0 01-2 2z" />
          </svg>
              <span class="truncate">
                  Manage Folders
              </span>
           </a>
           <a href="{{ route('manage-fclusters') }}" target="_blank"
          class="{{ request()->routeIs('manage-folders') ? 'bg-gray-200':''}} flex items-center px-3 py-2 text-sm font-medium text-gray-900 rounded-md">
          <svg xmlns="http://www.w3.org/2000/svg" class="flex-shrink-0 w-6 h-6 mr-3 -ml-1 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
          </svg>
              <span class="truncate">
                 Manage Fund Clusters
              </span>
           </a>

        
    </nav>
    </div>

</div>