<div class="hidden lg:block lg:col-span-1 lg:row-start-1 lg:row-span-3  
             lg:p-6 lg:relative lg:border-r-2 
            lg:border-orange-900">
            <div class="sticky top-0 flex flex-col items-center gap-6 p-10">
            
            
            <div class="hover:text-green-900 text-base"><a href="/">
        Home

</a></div>
    
    @if(isset($home))
<div class="hover:text-green-900 text-sm"><a href="/items/create">
Add Post
</a></div>
               
               
               <div id="searchBtn" class="text-base hover:text-green-900 cursor-pointer">
              Search
              </div>
             
              <x-tailwindFIlter/>
          
          @endif     
        
         
           
            </div>
        </div>