@php
  $home="Defined";
  @endphp
<x-layout :home="$home">

  
    
    <div class="row-start-1 col-span-6 row-span-3 
    flex flex-col gap-6 p-6 lg:col-span-4 lg:row-start-1 lg:row-span-3">
    
        <x-tailwindHeader/>
        <x-tailwindModal/>
          <x-tailwindSearchbar/>     

    <div class=" gap-4 flex flex-col items-center">
    @foreach($items as $chirp)
           <x-tailwindItem :chirp="$chirp"/>
           @endforeach
           {{ $items->links() }} 
  
</div>

</div>    

    
</x-layout>