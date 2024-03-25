<form method="POST" action="/items/{{$items->id}}/comment" enctype="multipart/form-data">
            @csrf

            <div>
        <!-- Story -->
    <x-input-label class="text-green-800 font-bold" for="name" :value="__('Comment')" />
            <textarea 
                name="message"
                placeholder="{{ __('Leave a comment') }}"
                class="text-red-900 block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
            >{{ old('message') }}</textarea>
            <x-input-error :messages="$errors->get('message')" class="mt-2" />
                    </div>
                    <x-primary-button class="mt-4">Post Comment</x-primary-button>
                    </form>