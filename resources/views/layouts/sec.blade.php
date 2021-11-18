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

<body class="h-full font-sans">
    <div>
        @livewire('navigation-menu')


        <div class="flex flex-col px-5">
            <div class="flex-grow w-full mx-auto max-w-7xl xl:px-8 lg:flex">
                <!-- Left sidebar & main wrapper -->
                <div class="flex-1 min-w-0 bg-primary-text xl:flex">
                    <div class=" bg-gradient-to-r from-secondary-bg via-secondary-bg xl:flex-shrink-0 xl:w-64">
                        <div class="h-full py-6 pl-6 pr-6 sm:pl-6 lg:pl-8 xl:pl-0">
                            <!-- Start left column area -->
                            <div class="relative h-full" style="min-height: 12rem;">
                                {{$leftColumn}}
                            </div>
                            <!-- End left column area -->
                        </div>
                    </div>

                    <div class="bg-primary-text lg:min-w-0 lg:flex-1">
                        <div class="h-full px-4 py-6 sm:px-6 lg:px-8">
                            <!-- Start main area-->
                            <div class="relative h-full" style="min-height: 36rem;">
                                {{$slot}}
                            </div>
                            <!-- End main area -->
                        </div>
                    </div>
                </div>

                <div class="pr-4 bg-gradient-to-l from-secondary-bg via-secondary-bg">
                    <div class="h-full py-6 pl-6 lg:w-80">
                        <!-- Start right column area -->
                        <div class="relative h-full" style="min-height: 16rem;">
                            {{$rightCol}}
                        </div>
                        <!-- End right column area -->
                    </div>
                </div>
            </div>
        </div>



    </div>
    <div class="relative bottom-0 left-0 flex flex-col flex-1 md:pl-4">
        @include('footer')
    </div>
    @stack('modals')
    @stack('scripts')
    @livewireScripts
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <x-livewire-alert::scripts />

</body>

</html>
