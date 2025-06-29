<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4 border-[#AEB4BC]" :status="session('status')" />

    <div class="flex justify-center">
        <x-application-logo class="" />
    </div>
    
    <form method="POST" action="{{ route('login') }}" class="max-w-md mx-auto w-full px-4">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Senha')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ms-2 text-sm text-gray-600">{{ __('Lembrar minha senha') }}</span>
            </label>
        </div>

        <div class="flex justify-center mt-4">
            <x-primary-button class="ms-1">
                {{ __('Acessar sua conta') }}
            </x-primary-button>
        </div>

        <div class="flex justify-center justify-end mt-1">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('Esqueceu sua senha?') }}
                </a>
            @endif

        </div>
    </form>
</x-guest-layout>
