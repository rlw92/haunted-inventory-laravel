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
<body class="p-0 pb-5">

<x-tailwindSidemenu/>

<div class="grid grid-rows-3 grid-cols-6 gap-0 w-full">


@if(isset($home))
    @php
    $hi = "Yes";
    @endphp
<x-tailwindLeftbar :home="$hi"/>
@else
<x-tailwindLeftbar/>
@endif

        


    

{{$slot}}
<x-tailwindRightbar/>
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