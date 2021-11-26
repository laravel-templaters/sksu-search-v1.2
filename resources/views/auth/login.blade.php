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
                <x-jet-label for="username" value="{{ __('Username') }}" />
                <x-jet-input id="username" class="block w-full mt-1 placeholder-opacity-50 placeholder-primary-text-alt" type="text" name="username" placeholder="Username Here" required autofocus />
            </div>  

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block w-full mt-1 placeholder-opacity-50 placeholder-primary-text-alt" type="password" name="password" required placeholder="Enter Password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="text-sm text-gray-600 underline hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-jet-button class="ml-4">
                    {{ __('Log in') }}
                </x-jet-button>
                
            </div>
            <a href="auth/google" class="inline-flex items-center px-24 py-2 mt-2 w-full bg-gradient-to-r from-primary-bg-alt to-secondary-bg rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:from-blue-600 hover:to-blue-400 hover:text-primary-text active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition">
            <img src="https://img.icons8.com/color/48/000000/google-logo.png" class="h-8 mx-0 px-auto"/>Login with Google
                </a>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
