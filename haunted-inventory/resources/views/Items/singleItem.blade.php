<x-layout>
<x-header></x-header>

<div class="flex items-center flex-col border-2 border-indigo-600">
<p>{{$items->title}}</p>
<p>{{$items->message}}</p>
<p>{{ $items->user->name }}</p>
<img
class="w-48 mr-6 mb-6"
src="{{$items->logo ? asset('storage/' . $items->logo) : asset('/images/no-image.png')}}"
alt=""
/>
</div>
<x-average-star-rating :rating="$rating"/>

<x-comment-form :items="$items"/>
<h3 class="text-center">Comment Section</h3>
@foreach($comments as $comment)
<div class="border-4 border-red-900">
    <p>{{$comment->message}}</p>
    <p>By User Id:{{$comment->user_id}}</p>
    <p>Created at {{$comment->created_at}}</p>
</div>
@endforeach

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
    <input type="radio" name="stars" value="3" />
    <span class="icon">★</span>
    <span class="icon">★</span>
    <span class="icon">★</span>   
  </label>
  <label>
    <input type="radio" name="stars" value="4" />
    <span class="icon">★</span>
    <span class="icon">★</span>
    <span class="icon">★</span>
    <span class="icon">★</span>
  </label>
  <label>
    <input type="radio" name="stars" value="5" />
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

</x-layout>