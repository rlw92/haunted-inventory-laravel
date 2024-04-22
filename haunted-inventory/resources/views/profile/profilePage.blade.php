<x-layout>
<div class="row-start-1 col-span-6 row-span-3 
    flex flex-col gap-8 p-6 
    lg:col-span-6 lg:row-start-1 lg:row-span-3 
    lg:items-center border-b-2 border-orange-900
    ">
    <x-tailwindHeader/>
@auth
    @if(Auth::user()->id === $user->id)
    <div class="self-end hover:text-green-900">
    <a href="{{route('profile.edit')}}">Edit Profile</a>
</div>
    <div class="self-end hover:text-green-900">
<form method="POST" action="{{ route('logout') }}">
@csrf

<a class="hover:text-green-900 cursor-pointer" :href="route('logout')"
        onclick="event.preventDefault();
                    this.closest('form').submit();">
Log Out
</a>
                         </form>
    </div>
    @endif
@endauth


    <div class="text-center">
        {{$user->name}}

    </div>

    <div class="self-center lg:self-stretch lg:gap-2 lg:flex ">

<div class="">
<img class="rounded-full max-w-96"
src="{{$user->profilePic ? asset('storage/' . $user->profilePic) : asset('/images/no-image.jpg')}}"
alt="User profile image"
/>
</div>

<div class="">
   <div class="text-center border-b-2 border-red-900"> About </div>
   {{$user->about}}</div>
</div>
    
<div class="self-start">
    Posts by {{$user->name}}:
</div>
    @foreach($user->items as $chirp)
    <x-tailwindItem :chirp="$chirp"/>
    @endforeach









</div>
</x-layout>