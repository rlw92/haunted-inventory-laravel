<x-layout>
<div class="row-start-1 col-span-6 row-span-3 
    flex flex-col gap-8 p-6 
    lg:col-span-6 lg:row-start-1 lg:row-span-3 
    lg:items-center border-b-2 border-orange-900
    ">
    <x-tailwindHeader/>

    <div class="text-center border-b-2 border-green-900">
        {{$user->name}}
        

    </div>

    <div class="text-center border-b-2 border-green-900">
        {{$user->email}}
        

    </div>


    <div class="self-center lg:self-stretch lg:gap-2 lg:flex border-b-2 border-green-900">
<!-- not needed for speedscare
<div class="">
<img class="rounded-full max-w-96"
src="{{$user->profilePic ? asset('storage/' . $user->profilePic) : asset('/images/no-image.jpg')}}"
alt="User profile image"
/>
</div>
-->

<div class="min-w-0">
   <div class="text-center border-b-2 border-red-900"> About </div>
 <p class="min-w-0">{{$user->about}}</p>
</div>

   
   
</div>

    
<div class="self-start">
    Posts by {{$user->name}}:
</div>
    @foreach($user->items as $chirp)
    <x-tailwindItem :chirp="$chirp"/>
    @endforeach









</div>
</x-layout>