<x-layout>
<x-header></x-header>
    <div class="max-w-2xl mx-auto p-4 sm:p-6 lg:p-8">
        Post the story of your haunted item!
        <form method="POST" action="/items">
            @csrf
            <textarea 
                name="message"
                placeholder="{{ __('What\'s on your mind?') }}"
                class="text-red-900 block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
            >{{ old('message') }}</textarea>
            <x-input-error :messages="$errors->get('message')" class="mt-2" />
            <x-primary-button class="mt-4">Post Item</x-primary-button>
        </form>
    </div>
</x-layout>