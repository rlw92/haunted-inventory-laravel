<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script>
            tailwind.config = {
                theme: {
                    extend: {
                        colors: {
                            //original color
                            //laravel: "#ef3b2d",
                            laravel: '#2e25d9',
                        },
                    },
                },
            };
        </script>
        <title>Haunted Inventory</title>
</head>
<body class="p-0">

<div class="grid grid-rows-3 grid-cols-6 gap-0 w-full">
<x-tailwindLeftbar>
<div class="hover:text-green-900"><a href="/">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
</svg>

</a></div>
    
    @if(isset($home))
<div class="hover:text-green-900"><a href="/items/create">
<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
</svg>
</a></div>
               
               
               <div id="searchBtn" class="hover:text-green-900 cursor-pointer">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
 <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
</svg>
              </div>
             
              <x-tailwindFilter/>
          
          @endif     
        
          
</x-tailwindLeftbar>
        


    

{{$slot}}
<x-tailwindRightbar/>
<div class="p-6"></div>
        </div>
        @if(isset($home))
    @php
    $hi = "Yes";
    @endphp
<x-tailwindbottomBar :home="$hi"/>
@else
<x-tailwindbottomBar/>
@endif

        

</body>
</html>