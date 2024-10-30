<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <a href="{{ route('welcome') }}"><img src="{{ asset('images/logo.png') }}" alt="Logo Electronica HDJ" class="h-20 block w-auto"></a>
        </x-slot>

        <x-validation-errors class="mb-4" />

        @if(session('status'))
            <div class="mb-4 text-green-600 text-center font-medium text-sm">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}" class="space-y-6">
            @csrf

            <!-- Email Field -->
            <div>
                <x-label for="email" value="{{ __('Email') }}" class="text-gray-700 font-semibold" />
                <x-input id="email" type="email" name="email" :value="old('email')" required autofocus 
                         class="block w-full mt-1 p-3 border border-gray-300 rounded-lg focus:ring-indigo-500 focus:border-indigo-500" />
            </div>

            <!-- Password Field -->
            <div class="mt-4">
                <x-label for="password" value="{{ __('Password') }}" class="text-gray-700 font-semibold" />
                <x-input id="password" type="password" name="password" required 
                         class="block w-full mt-1 p-3 border border-gray-300 rounded-lg focus:ring-indigo-500 focus:border-indigo-500" />
            </div>

            <!-- Remember Me Checkbox -->
            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-checkbox id="remember_me" name="remember" class="text-indigo-600 focus:ring-indigo-500" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <!-- Actions -->
            <div class="flex items-center justify-between mt-6">
                <div class="flex items-center space-x-4">
                    @if (Route::has('password.request'))
                        <a class="text-sm text-indigo-600 hover:underline focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                    @endif
                    <a class="text-sm text-indigo-600 hover:underline focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('register') }}">
                        {{ __('Registrate') }}
                    </a>
                </div>

                <x-button class="ms-4 bg-indigo-600 hover:bg-indigo-700 text-white font-semibold py-2 px-4 rounded-lg focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    {{ __('Log in') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout>
