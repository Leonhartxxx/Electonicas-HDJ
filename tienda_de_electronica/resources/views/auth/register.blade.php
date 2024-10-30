<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <a href="{{ route('welcome') }}"><img src="{{ asset('images/logo.png') }}" alt="Logo Electronica HDJ" class="h-20 block w-auto"></a>
        </x-slot>

        <x-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}" class="space-y-6">
            @csrf

            <!-- Name Field -->
            <div>
                <x-label for="name" value="{{ __('Name') }}" class="text-gray-700 font-semibold" />
                <x-input id="name" type="text" name="name" :value="old('name')" required autofocus 
                         class="block w-full mt-1 p-3 border border-gray-300 rounded-lg focus:ring-indigo-500 focus:border-indigo-500" />
            </div>

            <!-- Email Field -->
            <div class="mt-4">
                <x-label for="email" value="{{ __('Email') }}" class="text-gray-700 font-semibold" />
                <x-input id="email" type="email" name="email" :value="old('email')" required 
                         class="block w-full mt-1 p-3 border border-gray-300 rounded-lg focus:ring-indigo-500 focus:border-indigo-500" />
            </div>

            <!-- Password Field -->
            <div class="mt-4">
                <x-label for="password" value="{{ __('Password') }}" class="text-gray-700 font-semibold" />
                <x-input id="password" type="password" name="password" required 
                         class="block w-full mt-1 p-3 border border-gray-300 rounded-lg focus:ring-indigo-500 focus:border-indigo-500" />
            </div>

            <!-- Confirm Password Field -->
            <div class="mt-4">
                <x-label for="password_confirmation" value="{{ __('Confirm Password') }}" class="text-gray-700 font-semibold" />
                <x-input id="password_confirmation" type="password" name="password_confirmation" required 
                         class="block w-full mt-1 p-3 border border-gray-300 rounded-lg focus:ring-indigo-500 focus:border-indigo-500" />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <!-- Terms and Privacy Policy -->
                <div class="mt-4">
                    <x-label for="terms" class="text-gray-700 font-semibold">
                        <div class="flex items-center">
                            <x-checkbox name="terms" id="terms" required class="text-indigo-600 focus:ring-indigo-500" />

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                    'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Terms of Service').'</a>',
                                    'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-label>
                </div>
            @endif

            <!-- Actions -->
            <div class="flex items-center justify-between mt-6">
                <a class="text-sm text-indigo-600 hover:underline focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="bg-indigo-600 hover:bg-indigo-700 text-white font-semibold py-2 px-4 rounded-lg focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout>
