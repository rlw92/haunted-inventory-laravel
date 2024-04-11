<div class="hidden lg:block lg:col-span-1 lg:row-start-1 lg:row-span-3 
 lg:p-6 lg:relative
 lg:border-l-2 
            lg:border-orange-900">
            <div class="sticky top-0 flex flex-col items-center gap-6">
            @auth
 
 <x-dropdown align="right" width="48">
                     <x-slot name="trigger">
                         <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-xl hover:text-green-700 focus:outline-none transition ease-in-out duration-150">
                             <div>{{ Auth::user()->name }}</div>
 
                             <div class="ms-1">
                                 <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                     <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                 </svg>
                             </div>
                         </button>
                     </x-slot>
 
                     <x-slot name="content">
                         <x-dropdown-link :href="route('profile.edit')">
                             {{ __('Profile') }}
                         </x-dropdown-link>
 
                         <!-- Authentication -->
                         <form method="POST" action="{{ route('logout') }}">
                             @csrf
 
                             <x-dropdown-link :href="route('logout')"
                                     onclick="event.preventDefault();
                                                 this.closest('form').submit();">
                                 {{ __('Log Out') }}
                             </x-dropdown-link>
                         </form>
                     </x-slot>
                 </x-dropdown>
         
 @else
     <a href="/login" class="hover:bg-red-700">Login</a>
     <a href="/register" class="hover:bg-red-700">Register</a>
     @endauth
                
                
                      
        </div>
        </div> 