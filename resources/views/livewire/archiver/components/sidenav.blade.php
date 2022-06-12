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
        
        <a href="{{ route('manage-buildings') }}"
        class="{{ request()->routeIs('manage-buildings') ? 'bg-gray-200':''}} flex items-center px-3 py-2 text-sm font-medium text-gray-900 rounded-md">
            <!-- Heroicon name: outline/users -->
            <svg xmlns="http://www.w3.org/2000/svg" class="flex-shrink-0 w-6 h-6 mr-3 -ml-1 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
            </svg>
            
            <span class="truncate">
               Manage Buildings
            </span>
         </a>
         <a href="{{ route('manage-shelves') }}"
         class="{{ request()->routeIs('manage-shelves') ? 'bg-gray-200':''}} flex items-center px-3 py-2 text-sm font-medium text-gray-900 rounded-md">
             <!-- Heroicon name: outline/users -->
             <svg xmlns="http://www.w3.org/2000/svg" class="flex-shrink-0 w-6 h-6 mr-3 -ml-1 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                 <path stroke-linecap="round" stroke-linejoin="round" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
             </svg>
             
             <span class="truncate">
                 Manage Shelves
             </span>
          </a>
          <a href="{{ route('manage-folders') }}"
          class="{{ request()->routeIs('manage-folders') ? 'bg-gray-200':''}} flex items-center px-3 py-2 text-sm font-medium text-gray-900 rounded-md">
              <!-- Heroicon name: outline/users -->
              <svg xmlns="http://www.w3.org/2000/svg" class="flex-shrink-0 w-6 h-6 mr-3 -ml-1 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
              </svg>
              
              <span class="truncate">
                  Manage Folders
              </span>
           </a>

        
    </nav>
    </div>

</div>