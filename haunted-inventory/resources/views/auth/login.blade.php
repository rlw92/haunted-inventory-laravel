<x-layout>
    <x-auth-session-status class="mb-4" :status="session('status')" />
<div class="row-start-1 col-span-6 row-span-3 
    flex flex-col gap-6 p-6 
    lg:col-span-6 lg:row-start-1 lg:row-span-3 lg:items-center border-b-2 border-orange-900">
<x-tailwindHeader></x-tailwindHeader>

    <div class="max-w-2xl mx-auto p-4 sm:p-6 lg:p-8">
<p class="my-8">Login to post your haunted items!</p>

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" class="text-green-800 font-bold"  :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full text-red-900" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" class="text-green-800 font-bold"  :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full text-red-900"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex flex-col gap-4 items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('Forgot password?') }}
                </a>
            @endif
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="/register">
                    {{ __('Sign up') }}
                </a>

            <x-primary-button class="ms-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</div>
</div>

</x-layout>
