<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/paper-css/0.3.0/paper.css"> --}}
    <script src="{{ mix('js/app.js') }}" defer></script>


    @livewireStyles

    <!-- Scripts -->
    <style>
        [x-cloak] {
            display: none !important;
        }

    </style>


</head>

<body class="min-h-screen font-sans bg-gradient-to-b from-primary-300 via-white to-white">
    @livewire('navigation-menu')

    <!-- ACC -->
    <!-- Page Heading -->
    @if (isset($header))
    <header class="bg-white shadow">
        <div class="px-4 py-6 mx-auto max-w-7xl sm:px-6 lg:px-8">
            {{ $header }}
        </div>
    </header>
    @endif

    @if (request()->routeIs('archiver-main'))
    <div class="h-32 bg-primary-500 pb-34"></div> 
    @endif
    @if (auth()->user()->role->role_name == "Archiver" && !request()->routeIs('archiver-main')  && !request()->routeIs('archive-list')  && !request()->routeIs('archive-detail') && !request()->routeIs('archive-detail-edit')  && !request()->routeIs('archive-detail-delete'))
    <div class="h-32 bg-primary-500 pb-34"></div> 
    @endif
    
    <!-- Page Content -->
    <main class="bg-transparent">
        {{ $slot }}
    </main>

    </div>
    <!-- @include('footer') -->
    @stack('modals')
  

    @livewireScripts
    @stack('scripts')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="{{ asset('vendor/livewire-alert/livewire-alert.js') }}"></script>
    <x-livewire-alert::scripts />
    <x-livewire-alert::flash />

</body>


</html>
