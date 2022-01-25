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

<body class="min-h-screen font-sans bg-white">
    <div class="min-h-screen">
       
        <main>
            {{ $slot }}
        </main>

    </div>
    @stack('modals')
    @stack('scripts')
    @livewireScripts
    <!-- <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script> -->
    <script src="{{ asset('vendor/livewire-alert/livewire-alert.js') }}"></script>
    <x-livewire-alert::scripts />
    <x-livewire-alert::flash />

</body>

</html>
