<nav x-data="{ open: false }" class="py-2 bg-secondary-bg drop-shadow-md bg-opacity-70">
    <!-- Primary Navigation Menu -->
    <div class="px-2 mx-auto max-w-screen">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="items-center block">
                    <a href="{{ route('redirect') }}">
                        <x-jet-application-mark class="block w-auto h-16" />
                    </a>
                </div>
                <div class="hidden space-x-1 sm:-my-px sm:ml-10 sm:flex">
                    
                    @if(auth()->user()->role_id == 1)
                        <x-jet-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                            {{ __('Dashboard') }}
                        </x-jet-nav-link>
                    @elseif(auth()->user()->role_id == 2)
                    
                        <x-jet-nav-link href="{{ route('department-head') }}" :active="request()->routeIs('department-head')">
                            {{ __('Dashboard') }}
                        </x-jet-nav-link>
                
                    @elseif(auth()->user()->role_id == 3)
                    
                        <x-jet-nav-link href="{{ route('client-dash') }}" :active="request()->routeIs('client-dash')">
                            {{ __('Dashboard') }}
                        </x-jet-nav-link>
                    
                    @elseif(auth()->user()->role_id == 4 || auth()->user()->role_id == 7)
                    
                        <x-jet-nav-link href="{{ route('accountant-dashboard') }}" :active="request()->routeIs('accountant-dashboard')">
                            {{ __('Dashboard') }}
                        </x-jet-nav-link>
                    
                
                    @elseif(auth()->user()->role_id == 5)
                    
                        <x-jet-nav-link href="{{ route('budget-head') }}" :active="request()->routeIs('budget-head')">
                            {{ __('Dashboard') }}
                        </x-jet-nav-link>
                    
                    @elseif(auth()->user()->role_id == 6)
                    
                        <x-jet-nav-link href="{{ route('department-head') }}" :active="request()->routeIs('department-head')">
                            {{ __('Dashboard') }}
                        </x-jet-nav-link>
                        
                
                    @endif
                    <x-jet-nav-link href="{{ route('transactions') }}" :active="request()->routeIs('transactions')">
                        {{ __('Transactions') }}
                    </x-jet-nav-link>
                    
                    <x-jet-nav-link href="{{route('travel-order', 3)}}" :active="request()->routeIs('travel-order')">
                        {{ __('Create Travel Order') }}
                    </x-jet-nav-link>
                    @if(auth()->user()->role_id == 4 || auth()->user()->role_id == 7)
                    <x-jet-nav-link href="{{route('archive-list')}}" :active="request()->routeIs('archive-list')">
                        {{ __('Archives') }}
                    </x-jet-nav-link>
                    @endif
                    
                </div>
            </div>


            <div class="hidden sm:flex sm:items-center sm:ml-6">
                <!-- Teams Dropdown -->

                <!-- Settings Dropdown -->
                <div class="ml-3 mr-3" x-cloak>
                    <x-jet-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                            <button
                                class="flex items-center p-2 text-sm transition border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300">
                                @if ( Auth::user()->avatar != null)
                                <img class="object-cover w-8 h-8 rounded-full"
                                    src="{{ Auth::user()->avatar}}" alt="" />
                                @elseif( Auth::user()->profile_photo_url != null)
                                <img class="object-cover w-8 h-8 rounded-full"
                                src="{{ Auth::user()->profile_photo_url }}" alt="" />   
                                @endif
                                
                                <h1 class="inline-flex ml-2 text-sm uppercase truncate text-primary-bg">
                                    {{ Auth::user()->name}}</h1>
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
                        </x-slot>

                        <x-slot name="content">
                            <!-- Account Management -->
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

            <!-- Hamburger -->
            <div class="flex items-center -mr-2 sm:hidden">
                <button @click="open = ! open"
                    class="inline-flex items-center justify-center p-2 text-gray-400 transition rounded-md hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500">
                    <svg class="w-6 h-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
   
</nav>
