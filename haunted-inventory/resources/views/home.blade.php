<x-layout>
    <x-header></x-header>
    
    <h1 class="text-center text-4xl underline decoration-orange-900">Haunted Inventory</h1>
    
            <div class="text-center">Filter Options</div>
    <div class="container">
            <div class="content">
            @foreach($items as $chirp)
            <x-container-item :chirp="$chirp"/>
            @endforeach
            {{ $items->links() }} 
            @auth

      <a href="/items/create">  <div class="post">
        <button>Post Item</button>
        </div></a>
        @endauth
</div>


    </div>
    
    
</x-layout>