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





    <div class="flex flex-col">
        @livewire('navigation-menu')
        <div class="flex-grow w-full max-w-full lg:flex">
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

                <div class="bg-gray-200 lg:min-w-0 lg:flex-1">
                    <div class="h-full px-4 py-6 sm:px-6 lg:px-8">
                        <!-- Start main area-->
                        <div class="relative h-full" style="min-height: 36rem;">
                            {{$slot}}
                        </div>
                        <!-- End main area -->
                    </div>
                </div>
            </div>
            <span class="hidden">{{$count=5}}</span>
            @if($count>8)
            <div class="max-h-screen min-h-full overflow-x-hidden overflow-y-auto bg-opacity-25 bg-secondary-bg"></div>
            @else
            <div class="max-h-screen min-h-full overflow-hidden bg-opacity-25 bg-secondary-bg">
                @endif

                <div class="h-full py-6 pl-6 lg:w-80">
                    <!-- Start right column area -->
                    <div class="h-full px-5" style="min-height: 16rem;">
                        @if (isset($rightCol))

                        <h3 class="pb-5 font-sans font-extrabold text-left uppercase text-primary-bg text-md">
                            D.V.
                            Status
                            Feed</h3>
                        @endif
                        {{$rightCol}}
                    </div>
                    <!-- End right column area -->
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
