
  <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
</head>

<body class="h-screen bg-slate-800">
    <div class="min-h-full font-sans antialiased text-primary-500">
        <div class="min-h-screen px-4 py-16 bg-primary-200 sm:px-6 sm:py-24 md:grid md:place-items-center lg:px-8">
            <div class="mx-auto my-auto max-w-max">
              <main class="sm:flex">
                <p class="text-4xl font-extrabold text-primary-600 sm:text-5xl">401</p>
                <div class="sm:ml-6">
                  <div class="sm:border-l sm:border-gray-500 sm:pl-6">
                    <h1 class="text-4xl font-extrabold tracking-tight text-gray-900 sm:text-5xl">Unauthorized access</h1>
                    <p class="mt-1 text-base text-gray-500">Please sign in with your work account</p>
                  </div>
                  <div class="flex mt-10 space-x-3 sm:border-l sm:border-transparent sm:pl-6">
                    <a href="/" class="inline-flex items-center px-4 py-2 text-sm font-medium text-white border border-transparent rounded-md shadow-sm bg-primary-500 hover:bg-primary-300 hover:text-primary-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                      Go back to Login
                    </a>
                    <a href="#" class="inline-flex items-center px-4 py-2 text-sm font-medium text-indigo-700 bg-indigo-100 border border-transparent rounded-md hover:bg-indigo-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                      Contact support
                    </a>
                  </div>
                </div>
              </main>
            </div>
          </div>
    </div>
</body>

</html>
