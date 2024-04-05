<x-layout>
    <x-header></x-header>
    <h1 class="text-center text-4xl underline decoration-orange-900">Haunted Inventory</h1>
    <div class="text-center hover:bg-red-700">
        @auth
        <button><a href="/items/create">Post Item</a></button>
        @endauth
    </div>
    <div class="container">
        <div class="content">
            @foreach($items as $chirp)
            <x-container-item :chirp="$chirp"/>
            @endforeach
</div>
    </div>
    
</x-layout>