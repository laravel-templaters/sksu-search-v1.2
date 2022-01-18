<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
        <div class="mb-4 text-sm font-medium text-green-600">
            {{ session('status') }}
        </div>
        @endif


        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-jet-label for="email" value="{{ __('Email') }}" class="text-white " />
                <x-jet-input id="email" class="block w-full mt-1 placeholder-opacity-50 placeholder-primary-400"
                    type="email" name="email" placeholder="Email" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" class="text-white "  />
                <x-jet-input id="password" class="block w-full mt-1 placeholder-opacity-50 placeholder-primary-400"
                    type="password" name="password" required placeholder="Enter Password" />
            </div>

            <div class="flex items-center justify-between mt-4">
                <label for="remember_me" class="flex items-center text-gray-100">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-100">{{ __('Remember me') }}</span>
                </label>
                @if (Route::has('password.request'))
                <a class="text-sm text-gray-100 underline hover:text-gray-900" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
                @endif
            </div>


            <div class="flex items-center justify-end mt-4">


                <x-jet-button class="ml-4 min-w-sm text-primary-700">
                    <span class="mx-auto">{{ __('Log in') }}</span>
                </x-jet-button>

            </div>
            <div class="mt-3">
                <div class="relative">
                    <div class="absolute inset-0 flex items-center">
                        <div class="w-full border-t border-gray-300"></div>
                    </div>
                    <div class="relative flex justify-center w-full text-sm">
                        <span class="px-3 py-2 text-gray-500 bg-white rounded-full">
                            or
                        </span>
                    </div>
                </div>
                <a href="auth/google"
                    class="inline-flex items-center w-full py-2 mt-5 text-xs font-semibold tracking-widest uppercase transition bg-white border border-gray-800 rounded-md from-primary-bg-alt to-secondary-bg hover:from-blue-600 hover:to-blue-400 hover:text-primary-text active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25">
                    <span class="inline-flex m-auto text-center"><img
                            src="https://img.icons8.com/color/48/000000/google-logo.png"
                            class="inline h-8 mx-0 px-auto" /> <span
                            class="pl-2 my-auto font-light text-gray-700 text-md">Login with Google</span>
                    </span>
                </a>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
