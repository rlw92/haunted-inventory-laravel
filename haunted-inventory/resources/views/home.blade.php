<x-layout>
    

   

    <x-tailwindLeftbar></x-tailwindLeftbar>
    
    <div class="col-span-4 row-start-1 row-span-3">
        <x-tailwindHeader></x-tailwindHeader>
    <div class=" gap-4 flex flex-col items-center">
    @foreach($items as $chirp)
           <x-tailwindItem :chirp="$chirp"/>
           @endforeach
           {{ $items->links() }} 

           <a href="/items/create">  <div class="post">
        <button>Post Item</button>
        </div>
    </a>
</div>
</div>



    <x-tailwindRightbar></x-tailwindRightbar>
    
    
</x-layout>