<?php

namespace App\Http\Controllers;

use App\Models\items;
use App\Models\Rating;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class RatingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, items $items): RedirectResponse
       {

        if(Rating::where('items_id', $items->id)->where("user_id", auth()->user()->id)->count()>0){
            abort(403, 'unauthorised actoin. You have already rated this story.');
        }
          
        
        $validated['user_id'] = auth()->id();
        $validated['items_id'] = $items->id;
        $validated['stars'] = $request->stars;

        Rating::create($validated);

        return redirect()->back();
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Rating $rating)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Rating $rating)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Rating $rating)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Rating $rating)
    {
        //
    }
}
