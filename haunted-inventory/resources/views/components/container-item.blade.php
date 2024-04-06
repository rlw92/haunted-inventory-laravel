

<div class="item">       
         
      <p class="mt-4 text-lg text-gray-900">{{ $chirp->user->name }}</p>
      <p class="mt-4 text-lg text-gray-900">{{ $chirp->created_at->format('j M Y, g:i a') }}</p>
      <p class="mt-4 text-lg text-gray-900 cursor-pointer">{{ $chirp->title }}</p> 
             <!--<p class="mt-4 text-lg text-gray-900">{{ $chirp->message }}</p>-->
             @if ($chirp->user->is(auth()->user()))
                                            
         <p><a href="/items/{{$chirp->id}}/edit" class=" hover:bg-red-900">Edit</a></p>
                                           
                                        
             <form method="POST" action="/items/{{$chirp->id}}/delete">
         @csrf
         @method('delete')
       <button class="text-black hover:bg-red-900">Delete</button>
                                              
              </form>
                                   
              @endif
                        
              <a href="/items/{{$chirp['id']}}" class="hover:bg-red-900">Read Post</a> 
        </div>
 