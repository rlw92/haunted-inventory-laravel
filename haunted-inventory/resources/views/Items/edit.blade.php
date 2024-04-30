<x-layout>
<div class="row-start-1 col-span-6 row-span-3 
    flex flex-col gap-6 p-6 
    lg:col-span-6 lg:row-start-1 lg:row-span-3 lg:items-center border-b-2 border-orange-900">
<x-tailwindHeader></x-tailwindHeader>
    <div class="max-w-2xl mx-auto p-4 sm:p-6 lg:p-8">
    Edit your Post!
        <form method="POST" action="/items/{{$items->id}}" enctype="multipart/form-data" class="flex flex-col 
        gap-4">
            @csrf
            @method('PUT')

            <div>
            <x-input-label class="text-green-800 font-bold" for="title" :value="__('Title')" />
            <x-text-input id="name" class="block mt-1 w-full text-red-900" type="text" name="title" :value="old('title', $items->title)" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('title')" class="mt-2" />
        </div>

            <!-- message -->
            <div>
                    <textarea
                name="message"
                class="text-red-900 block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
            >{{ old('message', $items->message) }}</textarea>
            <x-input-error :messages="$errors->get('message')" class="mt-2" />
</div>

<!-- second sentence -->
<div>
    <x-input-label class="text-green-800 font-bold" for="name" :value="__('Story')" />
            <textarea 
                name="secondSentence"
                placeholder="{{ __('What is the second sentence?') }}"
                class="text-red-900 block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
            >{{ old('message') }}</textarea>
            <x-input-error :messages="$errors->get('message')" class="mt-2" />
                    </div>

                    <!-- not needed for speedscare
            <div>
    <x-input-label for="logo" :value="__('logo')" />
    <input
                        type="file"
                        class="text-red-900 block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
                        name="logo"
                    />
    <x-input-error class="mt-2" :messages="$errors->get('logo')" />
</div>

-->


            <div class="mt-4 space-x-2">
                <x-primary-button>{{ __('Save') }}</x-primary-button>
                <a href="/">{{ __('Cancel') }}</a>
            </div>
        </form>
    </div>
</div>
</x-layout>