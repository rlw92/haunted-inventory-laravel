<x-layout>
<x-header></x-header>

<p>{{$items->title}}</p>
<p>{{$items->message}}</p>
<p>{{ $items->user->name }}</p>
<img
class="w-48 mr-6 mb-6"
src="{{$items->logo ? asset('storage/' . $items->logo) : asset('/images/no-image.png')}}"
alt=""
/>

</x-layout>