
<div class=" flex flex-col items-center border-b-2 
            border-orange-900">
    <h3 class="text-center"><a class="hover:text-green-900" href="/items/{{$chirp['id']}}">{{ $chirp->title }}</a></h3>
  <a href="/items/{{$chirp['id']}}">
    <img src="{{$chirp->logo ? asset('storage/' . $chirp->logo) : asset('/images/no-image.jpg')}}"
     alt="Cinque Terre" 
     class="w-full h-auto">
  </a>
  <div class="self-start text-base border-b-4 border-red-900">By {{ $chirp->user->name }}</div>
  <div class="self-start text-base border-b-4 border-red-900">{{ $chirp->created_at->format('j M Y, g:i a') }}</div>
  <div class="text-xl">{{ substr($chirp->message,0,30) }}...</div>
    <div class="text-base"><a class="hover:text-green-900" href="/items/{{$chirp['id']}}"> Read More</a>
  </div>
  
  <div class="">
  <x-average-star-rating :rating="$chirp->averageRating()"/>
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

