<x-layout>
<div class="row-start-1 col-span-6 row-span-3 
    flex flex-col gap-6 p-6 
    lg:col-span-6 lg:row-start-1 lg:row-span-3 lg:items-center border-b-2 border-orange-900">
<x-tailwindHeader></x-tailwindHeader>
    <div class="max-w-2xl mx-auto p-4 sm:p-6 lg:p-8">
        Post the story of your haunted item!
        <form method="POST" action="/items" enctype="multipart/form-data">
            @csrf
            <!-- title -->
        <div>
            <x-input-label class="text-green-800 font-bold" for="title" :value="__('Title')" />
            <x-text-input id="name" class="block mt-1 w-full text-red-900" type="text" name="title" :value="old('title')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('title')" class="mt-2" />
        </div>

    <div>
        <!-- Story -->
    <x-input-label class="text-green-800 font-bold" for="name" :value="__('Story')" />
            <textarea 
                name="message"
                placeholder="{{ __('What is the story of your item?') }}"
                class="text-red-900 block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
            >{{ old('message') }}</textarea>
            <x-input-error :messages="$errors->get('message')" class="mt-2" />
                    </div>
        <div>
        <!-- Logo -->
        <x-input-label class="text-green-800 font-bold" for="name" :value="__('Logo')" />
                            <input
                                type="file"
                                class="text-red-900 block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
                                name="logo"
                            />
                            <x-input-error :messages="$errors->get('message')" class="mt-2" />
                        </div>
                        <x-primary-button class="mt-4">Post Item</x-primary-button>
        </form>
    
</div>
</div>
</x-layout>