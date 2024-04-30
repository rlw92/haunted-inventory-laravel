<div class="hidden lg:block lg:col-span-1 lg:row-start-1 lg:row-span-3 
 lg:p-6 lg:relative
 lg:border-l-2 
            lg:border-orange-900">
            <div class="sticky top-0 flex flex-col items-center gap-6">
            @auth
 
            <div class="text-base flex flex-col gap-2 items-center">
    <a class="hover:text-green-900 cursor-pointer" href="/userProfile/{{Auth::user()->id}}">
{{ Auth::user()->name }}
</a>

<!-- not needed for speedscare

<a class="cursor-pointer" href="/userProfile/{{Auth::user()->id}}">

<img class="rounded-full w-10"
src="{{Auth::user()->profilePic ? asset('storage/' . Auth::user()->profilePic) : asset('/images/no-image.jpg')}}"
alt="User profile image"
/>
</a>
-->
    </div>


                 <!-- Favourites icon when implemented
                 <div>
                 <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 cursor-pointer hover:text-green-900">
  <path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z" clip-rule="evenodd" />
</svg>
         </div>

-->
<div class="text-sm">
    <a class="hover:text-green-900 cursor-pointer" href="{{route('profile.edit')}}">Edit Profile
</a>
    </div>


<div class="text-sm">
<form method="POST" action="{{ route('logout') }}">
                             @csrf
 
                             <a class="hover:text-green-900 cursor-pointer" :href="route('logout')"
                                     onclick="event.preventDefault();
                                                 this.closest('form').submit();">
                                Log Out
</a>
                         </form>
    </div>
         
 @else
     <a href="/login" class="hover:bg-red-700">Login</a>
     <a href="/register" class="hover:bg-red-700">Register</a>
     @endauth
                
                
                      
        </div>
        </div> 