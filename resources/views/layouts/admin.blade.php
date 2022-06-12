<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
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

<body class="h-full min-h-screen font-sans bg-gradient-to-b from-primary-300 via-white to-white">
    <div>
        @livewire('navigation-menu')
<!-- Adm -->
        <!-- Page Heading -->
        @if (isset($header))
        <header class="bg-white shadow">
            <div class="px-4 py-6 mx-auto max-w-7xl sm:px-6 lg:px-8">
                {{ $header }}
            </div>
        </header>
        @endif

        <div class="flex flex-col">
            <main class="flex-1">
                <div class="py-6">
                    <div class="px-4 mx-auto max-w-7xl sm:px-6 md:px-8">
                        <!-- Replace with your content -->
                        {{ $slot }}
                        <!-- /End replace -->
                    </div>
                </div>
            </main>

        </div>

    </div>
    <div class="fixed bottom-0 block min-w-full pt-3">@include('footer')</div>
    @stack('modals')
   
    @livewireScripts
    @stack('scripts')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <x-livewire-alert::scripts />

</body>

</html>
