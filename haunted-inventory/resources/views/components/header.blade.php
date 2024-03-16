<div class="flex flex-row">
  <div class="basis-1/4 text-start" ><a href="/" class="hover:bg-red-700">H I</a></div>
  <div class="basis-1/4" ></div>
  <div class="basis-1/2 text-end">

@auth
    <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
@else
    <a href="/login" class="hover:bg-red-700">Login</a>
    <a href="/register" class="hover:bg-red-700">Register</a>
    @endauth
  </div>
</div>



                