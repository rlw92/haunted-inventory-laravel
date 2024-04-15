<x-layout>
<div class="row-start-1 col-span-6 row-span-3 
    flex flex-col gap-6 p-6 
    lg:col-span-6 lg:row-start-1 lg:row-span-3 lg:items-center border-b-2 border-orange-900">
<x-tailwindHeader></x-tailwindHeader>
    <div class="max-w-2xl mx-auto p-4 sm:p-6 lg:p-8">
<p class="my-8">Register to post your haunted items!</p>


    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label class="text-green-800 font-bold" for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full text-red-900" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label class="text-green-800 font-bold" for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full text-red-900" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label class="text-green-800 font-bold" for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full text-red-900"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label class="text-green-800 font-bold" for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full text-red-900"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</div>
</div>
</x-layout>
