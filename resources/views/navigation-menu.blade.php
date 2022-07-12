<nav x-data="{ open: false }" class="bg-primary-500">
    <div class="px-2 mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="relative flex items-center justify-between h-16">
          <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
            <!-- Mobile menu button-->
            <button type="button" @click="open = ! open" class="inline-flex items-center justify-center p-2 text-gray-400 rounded-md hover:text-white hover:bg-primary-700 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" aria-controls="mobile-menu" aria-expanded="false">
              <span class="sr-only">Open main menu</span>
              <!--
                Icon when menu is closed.
    
                Heroicon name: outline/menu
    
                Menu open: "hidden", Menu closed: "block"
              -->
              <svg  x-cloak x-show="open == false" class="block w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
              </svg>
              <!--
                Icon when menu is open.
    
                Heroicon name: outline/x
    
                Menu open: "block", Menu closed: "hidden"
              -->
              <svg  x-cloak x-show="open" class="block w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
              </svg>
            </button>
          </div>
          <div class="flex items-center justify-center flex-1 sm:items-stretch sm:justify-start">
            <div class="flex items-center flex-shrink-0">
                <a href="{{ route('redirect') }}">
                    <x-jet-application-mark class="block w-auto h-16" />
                </a>
            </div>
            <div class="hidden my-auto sm:block sm:ml-6">
              <div class="flex space-x-4">
                @if(auth()->user()->role_id == 1)
                <x-jet-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                    {{ __('Dashboard') }}
                </x-jet-nav-link>
                @elseif(auth()->user()->role_id == 2)

                <x-jet-nav-link href="{{ route('department-head') }}"
                    :active="request()->routeIs('department-head')">
                    {{ __('Dashboard') }}
                </x-jet-nav-link>

                @elseif(auth()->user()->role_id == 3)

                <x-jet-nav-link href="{{ route('client-dash') }}" :active="request()->routeIs('client-dash')">
                    {{ __('Dashboard') }}
                </x-jet-nav-link>

                @elseif(auth()->user()->role_id == 4 || auth()->user()->role_id == 7)

                <x-jet-nav-link href="{{ route('accountant-dashboard') }}"
                    :active="request()->routeIs('accountant-dashboard')">
                    {{ __('Dashboard') }}
                </x-jet-nav-link>


                @elseif(auth()->user()->role_id == 5)

                <x-jet-nav-link href="{{ route('budget-dashboard') }}"
                    :active="request()->routeIs('budget-dashboard')">
                    {{ __('Dashboard') }}
                </x-jet-nav-link>

                @elseif(auth()->user()->role_id == 6)

                <x-jet-nav-link href="{{ route('department-head') }}"
                    :active="request()->routeIs('department-head')">
                    {{ __('Dashboard') }}
                </x-jet-nav-link>


                @endif
                    @if (auth()->user()->role_id == 8)
                    <x-jet-nav-link href="{{ route('auditor-dashboard') }}" :active="request()->routeIs('auditor-dashboard')">
                        {{ __('Dashboard') }}
                    </x-jet-nav-link>
                    @else
                    <x-jet-nav-link href="{{ route('transactions') }}" :active="request()->routeIs('transactions')">
                        {{ __('Transactions') }}
                    </x-jet-nav-link>

                    <x-jet-nav-link href="{{route('travel-order', ['id'=>3,'isEdit'=>0,'travelOrderID'=>'|'])}}"
                        :active="request()->routeIs('travel-order')">
                        {{ __('Create Travel Order') }}
                    </x-jet-nav-link>
                    @if(auth()->user()->role_id == 4 || auth()->user()->role_id == 7)
                    <x-jet-nav-link href="{{route('archive-list')}}" :active="request()->routeIs('archive-list')">
                        {{ __('Archives') }}
                    </x-jet-nav-link>
                    @endif
                    @if(auth()->user()->role_id == 7)
                    <x-jet-nav-link href="{{route('archiver-main')}}" :active="request()->routeIs('archiver-main')">
                        {{ __('Archiver') }}
                    </x-jet-nav-link>
                    @endif
                @endif
              </div>
            </div>
          </div>
          <div class="absolute inset-y-0 right-0 flex items-center pr-2 space-x-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
           <div class="hidden sm:flex">
            <x-jet-dropdown align="right" width="96">
           
              <x-slot name="trigger">
                <span class="inline-flex rounded-md">
                    <button type="button" class="p-1 text-gray-400 rounded-full bg-primary-600 hover:text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-primary-300 focus:ring-primary-100">
                      <span class="sr-only">View notifications</span>
                      <!-- Heroicon name: outline/bell -->
                      <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="white" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                      </svg>
                    </button>
                </span>
              </x-slot>
              <x-slot name="content">
                <!-- Account Management -->
                <div class="block px-4 py-2 text-xs text-gray-400 scroll-smooth">
                    <span class="text-lg font-bold tracking-widest uppercase text-primary-500">{{ __('Notifications') }}</span>
                    @livewire('components.notifications')
                </div>                     
  
  
              </x-slot>
            </x-jet-dropdown>
           </div>
           <a href="{{ route('notification-page') }}" type="button" class="p-1 text-gray-400 rounded-full bg-primary-600 sm:hidden hover:text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white">
            <span class="sr-only">View notifications</span>
            <!-- Heroicon name: outline/bell -->
            <svg class="w-6 h-6 " xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="white" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
            </svg>
            </a>
            <!-- Profile dropdown -->
            <x-jet-dropdown class="relative"   >
                <x-slot name="trigger">
                    <button type="button" class="flex text-sm bg-gray-800 rounded-full focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-primary-300 focus:ring-primary-100" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                   
                    @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                    <button class="flex text-sm text-center rounded-full bg-primary-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-primary-300 focus:ring-primary-100" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                        @if ( Auth::user()->avatar != null)
                        <img class="object-cover w-8 h-8 rounded-full" src="{{ Auth::user()->avatar}}" alt="" />
                        @elseif( Auth::user()->profile_photo_url != null)
                        <img class="object-cover w-8 h-8 rounded-full"
                            src="{{ Auth::user()->profile_photo_url }}" alt="" />
                                
                          
                        @endif
                    </button>
                    @else
                    <span class="inline-flex rounded-md">
                        <button type="button"
                            class="inline-flex items-center px-3 py-2 text-sm font-medium leading-4 text-gray-500 transition bg-white border border-transparent rounded-md hover:text-gray-700 focus:outline-none">


                            <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd" />
                            </svg>
                        </button>
                    </span>
                    @endif
                    </button>
                </x-slot>
    
              <!--
                Dropdown menu, show/hide based on menu state.
    
                Entering: "transition ease-out duration-100"
                  From: "transform opacity-0 scale-95"
                  To: "transform opacity-100 scale-100"
                Leaving: "transition ease-in duration-75"
                  From: "transform opacity-100 scale-100"
                  To: "transform opacity-0 scale-95"
              -->
              <x-slot name="content">
                <div class="block px-4 py-2 text-xs text-gray-400">
                  {{ __('Manage Account') }}
                </div>
                <x-jet-dropdown-link href="{{ route('profile.show') }}">
                  {{ __('Profile') }}
                </x-jet-dropdown-link>

                @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                <x-jet-dropdown-link href="{{ route('api-tokens.index') }}">
                    {{ __('API Tokens') }}
                </x-jet-dropdown-link>
                @endif

                <div class="border-t border-gray-100"></div>

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-jet-dropdown-link href="{{ route('logout') }}" onclick="event.preventDefault();
                                    this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-jet-dropdown-link>
                </form>
               
              
              </x-slot>
            </x-jet-dropdown>
          </div>
        </div>
      </div>
    
      <!-- Mobile menu, show/hide based on menu state. -->
      <div class="sm:hidden" id="mobile-menu" x-show="open">
        <div class="px-2 pt-2 pb-3 space-y-1">
          <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
          @if(auth()->user()->role_id == 1)
          <x-mobile-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
              {{ __('Dashboard') }}
          </x-mobile-nav-link>
          @elseif(auth()->user()->role_id == 2)

          <x-mobile-nav-link href="{{ route('department-head') }}"
              :active="request()->routeIs('department-head')">
              {{ __('Dashboard') }}
          </x-mobile-nav-link>

          @elseif(auth()->user()->role_id == 3)

          <x-mobile-nav-link href="{{ route('client-dash') }}" :active="request()->routeIs('client-dash')">
              {{ __('Dashboard') }}
          </x-mobile-nav-link>

          @elseif(auth()->user()->role_id == 4 || auth()->user()->role_id == 7)

          <x-mobile-nav-link href="{{ route('accountant-dashboard') }}"
              :active="request()->routeIs('accountant-dashboard')">
              {{ __('Dashboard') }}
          </x-mobile-nav-link>


          @elseif(auth()->user()->role_id == 5)

          <x-mobile-nav-link href="{{ route('budget-dashboard') }}"
              :active="request()->routeIs('budget-dashboard')">
              {{ __('Dashboard') }}
          </x-mobile-nav-link>

          @elseif(auth()->user()->role_id == 6)

          <x-mobile-nav-link href="{{ route('department-head') }}"
              :active="request()->routeIs('department-head')">
              {{ __('Dashboard') }}
          </x-mobile-nav-link>


          @endif
              @if (auth()->user()->role_id == 8)
              <x-mobile-nav-link href="{{ route('auditor-dashboard') }}" :active="request()->routeIs('auditor-dashboard')">
                  {{ __('Dashboard') }}
              </x-mobile-nav-link>
              @else
              <x-mobile-nav-link href="{{ route('transactions') }}" :active="request()->routeIs('transactions')">
                  {{ __('Transactions') }}
              </x-mobile-nav-link>

              <x-mobile-nav-link href="{{route('travel-order', ['id'=>3,'isEdit'=>0,'travelOrderID'=>'|'])}}"
                  :active="request()->routeIs('travel-order')">
                  {{ __('Create Travel Order') }}
              </x-mobile-nav-link>
              @if(auth()->user()->role_id == 4 || auth()->user()->role_id == 7)
              <x-mobile-nav-link href="{{route('archive-list')}}" :active="request()->routeIs('archive-list')">
                  {{ __('Archives') }}
              </x-mobile-nav-link>
              @endif
              @if(auth()->user()->role_id == 7)
              <x-mobile-nav-link href="{{route('archiver-main')}}" :active="request()->routeIs('archiver-main')">
                  {{ __('Archiver') }}
              </x-mobile-nav-link>
              @endif
          @endif
        </div>
      </div>
      @push('scripts')
<script>

window.livewire.on('notify', () => {
    var audio = new Audio('../ringtones/notif-pop.wav');
    audio.play();
})


</script>
@endpush
</nav>
