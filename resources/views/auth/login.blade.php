<x-guest-layout>
    <form method="POST" action="{{ route('login') }}" id="login-form">
        @csrf

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Email Address -->
        <div class="mb-3">
            <label for="email" class="form-label">{{ __('Email') }}</label>
            <input
                type="email"
                id="email"
                name="email"
                class="form-control"
                value="{{ old('email') }}"
                placeholder="{{ __('Enter your email') }}"
                autofocus>
            @error('email')
                <div class="text-danger small mt-1">{{ $message }}</div>
            @enderror
        </div>

        <!-- Password -->
        <div class="mb-3">
            <label for="password" class="form-label">{{ __('Password') }}</label>
            <input
                type="password"
                id="password"
                name="password"
                class="form-control"
                placeholder="{{ __('Enter your password') }}">
            @error('password')
                <div class="text-danger small mt-1">{{ $message }}</div>
            @enderror
        </div>

        <!-- Login Button -->
        <div class="d-grid gap-2">
            <button type="submit" class="btn btn-primary">{{ __('Log in') }}</button>
        </div>

        <!-- Register Suggestion -->
        <div class="text-center mt-3">
            <p class="text-muted">
                {{ __("Don’t have an account yet?") }}
                <a href="{{ route('register') }}" class="text-primary">{{ __('Create one here!') }}</a>
            </p>
        </div>
    </form>
</x-guest-layout>
