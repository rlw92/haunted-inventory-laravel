
<div class=" flex flex-col items-center border-b-2 
            border-orange-900">
    <h3 class="text-center"><a class="hover:text-green-900" href="/items/{{$chirp['id']}}">{{ $chirp->title }}</a></h3>
  <a href="/items/{{$chirp['id']}}">
    <img src="{{$chirp->logo ? asset('storage/' . $chirp->logo) : asset('/images/no-image.jpg')}}"
     alt="Cinque Terre" 
     class="w-full h-auto">
  </a>
  <div class="">By {{ $chirp->user->name }}</div>
  <div class="">{{ substr($chirp->message,0,30) }}
    <a class="hover:text-green-900" href="/items/{{$chirp['id']}}">... Read More</a>
  </div>
  <div>{{ $chirp->created_at->format('j M Y, g:i a') }}</div>
  <div class="">
  <x-average-star-rating :rating="$chirp->averageRating()"/>
  </div>
</div>

