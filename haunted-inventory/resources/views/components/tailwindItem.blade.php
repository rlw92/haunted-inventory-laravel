
<div class=" flex flex-col items-center">
    <h3 class="text-center">{{ $chirp->title }}</h3>
  <a href="/items/{{$chirp['id']}}">
    <img src="{{$chirp->logo ? asset('storage/' . $chirp->logo) : asset('/images/no-image.jpg')}}"
     alt="Cinque Terre" 
     class="w-full h-auto">
  </a>
  <div class="">{{ $chirp->user->name }}</div>
  <div class="">Short example of the post cutoff</div>
  <div>{{ $chirp->created_at->format('j M Y, g:i a') }}</div>
  <div class="">Star Rating</div>
</div>

