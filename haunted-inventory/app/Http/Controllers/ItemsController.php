<?php

namespace App\Http\Controllers;

use App\Models\items;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\Response; 
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\RedirectResponse;

class ItemsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        
        return view('home', [
           
           'items' => items::latest()->get()

        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        //
        return view('items.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        //
        $validated = $request->validate([
            'message' => 'required|string|max:255',
        ]);
 
        $request->user()->items()->create($validated);
 
        return redirect('/');
    }

    /**
     * Display the specified resource.
     */
    public function show(items $items)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(items $items)
    {
        //
        return view("items.edit", ['items' => $items]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, items $items): RedirectResponse
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
    public function destroy(items $items)
    {
        if($listing->user_id != auth()->id()) {
            abort(403, 'Unauthorized Action');
        }
        //
        $items->delete();
 
        return redirect('/');
    }
}
