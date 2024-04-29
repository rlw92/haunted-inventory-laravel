<div class="fixed flex flex-col
 items-center gap-6 top-0
right-0 h-full bg-red-900 
border-l-2 border-green-900
 "
 id="sideMenu">
    <a class="absolute top-0 right-2 cursor-pointer" id="clsBtn">&times;</a>
    @auth
    <a class="text-sm
    text-sm hover:text-green-900"
     href="/userProfile/{{Auth::user()->id}}">
        Profile page</a>
    @endauth
    <a href="{{route('profile.edit')}}"
     class="text-sm hover:text-green-900">Edit Profile</a>
    
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
    
</div>