<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full bg-primary-text">

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
        [x-cloak] {
            display: none !important;
        }

    </style>
    <script src="{{ mix('js/app.js') }}" defer></script>


</head>

<body class="h-full min-h-screen font-sans bg-gradient-to-b from-main-bg via-white to-main-bg" x-data="{active : 'dv', showFeed : false,}">





    <div class="flex flex-col">
        @livewire('navigation-menu')
        <div class="flex-grow w-full max-w-full bg-gray-100 lg:flex">
            <div class="flex-1 min-w-0 bg-primary-text xl:flex">
                <div class="bg-opacity-25 bg-secondary-bg xl:flex-shrink-0 xl:w-64">
                    <div class="h-full py-6 pl-6 pr-6 sm:pl-6 lg:pl-8 xl:pl-0">
                        <!-- Start left column area -->
                        <div class="relative h-full" style="min-height: 12rem;">
                            {{$leftColumn}}
                        </div>
                        <!-- End left column area -->
                    </div>
                </div>

                <div class="bg-gray-100 lg:min-w-0 lg:flex-1">
                    <div class="h-full px-4 py-6 sm:px-6 lg:px-8">
                        <!-- Start main area-->
                        <div class="h-full" style="min-height: 36rem;">
                            {{$slot}}
                        </div>
                        <!-- End main area -->
                    </div>
                </div>
            </div>


            <div class="fixed inset-0 overflow-hidden" aria-labelledby="slide-over-title" role="dialog"
                aria-modal="true" x-cloak x-show="showFeed">
                <div class="absolute inset-0 overflow-hidden">
                    <!--
      Background overlay, show/hide based on slide-over state.

      Entering: "ease-in-out duration-500"
        From: "opacity-0"
        To: "opacity-100"
      Leaving: "ease-in-out duration-500"
        From: "opacity-100"
        To: "opacity-0"
    -->
                    <div class="absolute inset-0 transition-opacity bg-opacity-50 bg-primary-text" aria-hidden="true"
                        x-cloak x-show="showFeed" x-on:click.away="showFeed=false"
                        x-transition:enter="ease-in-out duration-500" x-transition:enter-start="opacity-0"
                        x-transition:enter-end="opacity-100" x-transition:leave="ease-in-out duration-500"
                        x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"></div>
                    <div class="fixed inset-y-0 right-0 flex max-w-full pl-10">

                        <div class="relative w-screen max-w-md" x-cloak x-show="showFeed"
                            x-on:click.away="showFeed=false"
                            x-transition:enter="transform transition ease-in-out duration-500 sm:duration-700"
                            x-transition:enter-start="translate-x-full" x-transition:enter-end="translate-x-0"
                            x-transition:leave="transform transition ease-in-out duration-500 sm:duration-700"
                            x-transition:leave-start="translate-x-0" x-transition:leave-end="translate-x-full">
                            <div class="absolute top-0 left-0 flex pt-4 pr-2 -ml-8 sm:-ml-10 sm:pr-4" x-cloak
                                x-show="showFeed" x-transition:enter="ease-in-out duration-500"
                                x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                                x-transition:leave="ease-in-out duration-500" x-transition:leave-start="opacity-100"
                                x-transition:leave-end="opacity-0">
                                <button type="button"
                                    class="rounded-md text-primary-bg hover:text-white focus:outline-none focus:ring-2 focus:ring-white"
                                    x-on:click="showFeed = false">
                                    <span class="sr-only">Close panel</span>
                                    <!-- Heroicon name: outline/x -->
                                    <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M6 18L18 6M6 6l12 12" />
                                    </svg>
                                </button>
                            </div>

                            <div class="flex flex-col h-full py-6 overflow-y-auto shadow-xl bg-secondary-bg">
                                <div class="px-4 sm:px-6">
                                    <h2 class="text-lg font-medium text-gray-900" id="slide-over-title">
                                        DV Status Feed
                                    </h2>
                                </div>
                                <div class="relative flex-1 px-4 mt-6 sm:px-6">
                                    <!-- Replace with your content -->
                                    {{$rightCol}}
                                    <!-- /End replace -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>



    <div class="relative bottom-0 left-0 flex flex-col flex-1 md:pl-4">
        <!-- @include('footer') -->
    </div>
    @stack('modals')
    @livewireScripts
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <x-livewire-alert::scripts />


</body>

</html>
