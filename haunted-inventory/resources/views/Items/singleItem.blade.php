<x-layout>

<div class="row-start-1 col-span-6 row-span-3 
    flex flex-col gap-8 p-6 
    lg:col-span-6 lg:row-start-1 lg:row-span-3 
    lg:items-center border-b-2 border-orange-900
    ">
<x-tailwindHeader></x-tailwindHeader>


<div class="flex items-center flex-col gap-2 p-2">
<p class="text-2xl">{{$items->title}}</p>
<img
src="{{$items->logo ? asset('storage/' . $items->logo) : asset('/images/no-image.jpg')}}"
alt="Users Uploaded related image"
/>
<p class="self-start text-base border-b-4 border-red-900">
  By <a class="hover:text-green-900" href="/userProfile/{{$items->user->id}}">
    {{ $items->user->name }}
</a>
</p>
<p class="self-start text-base border-b-4 border-red-900"> {{ $items->created_at }}</p>

<p class="text-xl">{{$items->message}}</p>
</div>

<x-average-star-rating :chirp="$items" :rating="$items->averageRating()"/>

@auth
<x-comment-form :items="$items"/>
@endauth
<h3 class="text-center text-base border-b-4 border-red-900">Comment Section
 ( {{$items->amountofComments()}} <span class="text-sm">Comments</span>)
</h3>

@foreach($items->comments as $comment)
<div class="border-4 border-red-900 p-4">
    <p>{{$comment->message}}</p>
    <p class="text-sm">By <a class="hover:text-green-900" href="/userProfile/{{$comment->user->id}}">{{$comment->user->name}}</a></p>
    <p class="text-sm">Created at {{$comment->created_at}}</p>

    @auth
    @if($comment->user_id === auth()->user()->id)
    <form method="POST" action="/items/{{$items->id}}/{{$comment->id}}/delete">
         @csrf
         @method('delete')
       <button class="text-red-900">Delete</button>
    @endauth                                    
              </form>
    @endif


</div>
@endforeach

@auth
@if($showform != true)
<div class="text-center">
<h2>Rate this story</h2>

<div>
<form class="rating" method="POST" action="/items/{{$items->id}}/rating">
    @csrf
  <label>
    <input type="radio" name="stars" value="1" />
    <span class="icon">★</span>
  </label>
  <label>
    <input type="radio" name="stars" value="2" />
    <span class="icon">★</span>
    <span class="icon">★</span>
  </label>
  <label>
    <input type="radio" name="stars" checked value="3" />
    <span class="icon">★</span>
    <span class="icon">★</span>
    <span class="icon">★</span>   
  </label>
  <label>
    <input type="radio" name="stars"  value="4" />
    <span class="icon">★</span>
    <span class="icon">★</span>
    <span class="icon">★</span>
    <span class="icon">★</span>
  </label>
  <label>
    <input type="radio" name="stars"  value="5" />
    <span class="icon">★</span>
    <span class="icon">★</span>
    <span class="icon">★</span>
    <span class="icon">★</span>
    <span class="icon">★</span>
  </label>
</div>
  <div class="text-center">
    <button type="submit" class="btn btn-primary">Submit</button>
      </div>
  
</form>
</div>
@else
<p class="text-center">You have already rated this story</p>
<x-userRating :rating="$userRating"/>
@endif
@endauth

</div>

</x-layout>