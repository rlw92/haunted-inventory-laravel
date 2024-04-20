<x-layout>
<div class="row-start-1 col-span-6 row-span-3 
    flex flex-col gap-8 p-6 
    lg:col-span-6 lg:row-start-1 lg:row-span-3 
    lg:items-center border-b-2 border-orange-900
    ">
    <x-tailwindHeader/>


    {{$user->name}}
<div class="self-start">
    Posts by {{$user->name}}:
</div>
    @foreach($user->items as $chirp)
    <x-tailwindItem :chirp="$chirp"/>
    @endforeach









</div>
</x-layout>