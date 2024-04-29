<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Items;
use App\Models\Rating;
use App\Models\Comment;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Notifications\Newitem;
use Illuminate\Http\Response; 
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Notification;

class ItemsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        
        return view('home', [
           
           'items' => items::latest()->filter(request(['search','filters']))->paginate(3)->withQueryString(),
           
           

        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        //
        return view('Items.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        //dd($request->user()->id);
        //dd($request->file('logo')->store('logos', 'public'));
       
        $validated = $request->validate([
            'title'=> 'required|string|max:30',
            'message' => 'required|string|min:10',
            
        ]);

       if($request->hasFile('logo')) {
            $validated['logo'] = $request->file('logo')->store('logos', 'public');
            };
 
        $request->user()->items()->create($validated);

        //Notification Event   uncomment to use 
        /*
        foreach (User::whereNot('id', $request->user()->id)->cursor() as $user){
            Notification::send($user, new Newitem());
        }
        */

        return redirect('/');
    }

    /**
     * Display the specified resource.
     */
    public function show(Items $items)
    {
        //amount of ratings
        
        //dd(auth()->user());
        //average star rating    
        $avgStar = round(Rating::where('items_id', $items->id)->avg('stars'));
        

        if(auth()->user() != null){
               
        //dont show the rating form if user has already rated
        $ratingmatch = Rating::where('items_id', $items->id)->where("user_id", auth()->user()->id)->count()>0;
        //users rating if they have already rated
        $userRating = Rating::where('items_id', $items->id)->where("user_id", auth()->user()->id)->avg("stars");
        

        
               
        return view('Items.singleItem',['userRating'=>$userRating, 'items'=> $items,  'rating'=> $avgStar, "showform" => $ratingmatch]);
        }

        return view('Items.singleItem',[ 'items'=> $items,  'rating'=> $avgStar, "showform" => false ]);

        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Items $items)
    {
        //
        return view("Items.edit", ['items' => $items]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Items $items): RedirectResponse
    {
        //has to own the post to edit it
        if($items->user_id != auth()->id()) {abort(403, 'Unauthorized Action');}

       // Gate::authorize('update', $items);
 
        $validated = $request->validate([
            'message' => 'required|string|max:255',
        ]);
 
        $items->update($validated);
 
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Items $items)
    {
        if($items->user_id != auth()->id()) {
            abort(403, 'Unauthorized Action');
        }
        //
        $items->delete();
 
        return redirect('/');
    }
}
