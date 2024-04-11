<x-layout>
    

   

    <x-tailwindLeftbar></x-tailwindLeftbar>
    <x-tailwindbottomBar></x-tailwindbottomBar>
    <div class="row-start-1 col-span-6 row-span-3 flex flex-col gap-6 p-6 lg:col-span-4 lg:row-start-1 lg:row-span-3">
        <x-tailwindHeader></x-tailwindHeader>
        
    <div class=" gap-4 flex flex-col items-center">
    @foreach($items as $chirp)
           <x-tailwindItem :chirp="$chirp"/>
           @endforeach
           {{ $items->links() }} 
  
</div>

</div>



    <x-tailwindRightbar></x-tailwindRightbar>

    
    
    
</x-layout>