
<div class=" flex flex-col items-center border-b-2 
            border-orange-900 gap-2">
    <h3 class="text-center text-2xl border-b-2 border-red-900"><a class="hover:text-green-900" href="/items/{{$chirp['id']}}">{{ $chirp->title }}</a></h3>
    <!--<div class="text-xl">{{ substr($chirp->message,0,30) }}...</div>-->
    <div class="text-xl">{{ $chirp->message }}</div>
    <div class="text-base"><a class="hover:text-green-900" href="/items/{{$chirp['id']}}"> Go to Second Sentence</a>
  </div>
 
    <!-- Not needed for speedscare

    <a href="/items/{{$chirp['id']}}">
    <img src="{{$chirp->logo ? asset('storage/' . $chirp->logo) : asset('/images/no-image.jpg')}}"
     alt="Cinque Terre" 
     class="w-full h-auto">
  </a>

-->
  <div class="self-start text-base border-b-4 border-red-900">
    By <a class="hover:text-green-900" href="/userProfile/{{$chirp->user->id}}">{{ $chirp->user->name }}</a>
  </div>
  <div class="self-start text-base border-b-4 border-red-900">{{ $chirp->created_at->format('j M Y, g:i a') }}</div>
    
  <div class="">
  <x-average-star-rating :chirp="$chirp" :rating="$chirp->averageRating()" />
  </div>

  <div class="flex">
  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="M8.625 9.75a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H8.25m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H12m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0h-.375m-13.5 3.01c0 1.6 1.123 2.994 2.707 3.227 1.087.16 2.185.283 3.293.369V21l4.184-4.183a1.14 1.14 0 0 1 .778-.332 48.294 48.294 0 0 0 5.83-.498c1.585-.233 2.708-1.626 2.708-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0 0 12 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018Z" />
</svg>
<span class="text-base">({{$chirp->amountofComments()}} Comments)</span>
  </div>

  @if ($chirp->user->is(auth()->user()))
  <div class="place-self-end flex flex-row gap-2">

    <div>
    <a href="/items/{{$chirp->id}}/edit" class=" hover:text-green-900">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L6.832 19.82a4.5 4.5 0 0 1-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 0 1 1.13-1.897L16.863 4.487Zm0 0L19.5 7.125" />
</svg>
</a>
</div>

<div >
<form method="POST" action="/items/{{$chirp->id}}/delete" >
         @csrf
         @method('delete')
       <button>

<svg  xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 hover:text-green-900">
  <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
</svg>
</button>
</form>
                        

</div>

  </div>
  @endif
</div>

