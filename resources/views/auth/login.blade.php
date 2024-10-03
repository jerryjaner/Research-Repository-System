<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}" id="login-form">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input
                id="email"
                class="block mt-1 w-full"
                type="email"
                name="email"
                :value="old('email')"
                placeholder="{{ __('Enter your email') }}"
                required
                autofocus
                autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />
            <x-text-input
                id="password"
                class="block mt-1 w-full"
                type="password"
                name="password"
                placeholder="{{ __('Enter your password') }}"
                required
                autocomplete="current-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Log In Button -->
        <div class="flex items-center justify-end mt-6">
            <x-primary-button class="ms-4" href="{{route('login')}}">
                {{ __('Log in') }}
            </x-primary-button>
        </div>

        <!-- Register Suggestion -->
        <div class="text-center mt-6">
            <p class="text-sm text-gray-600">
                {{ __('Don’t have an account yet?') }}
                <a href="{{ route('register') }}" class="text-indigo-600 hover:text-indigo-900 font-semibold">{{ __('Create one here!') }}</a>
            </p>
        </div>
    </form>
</x-guest-layout>
