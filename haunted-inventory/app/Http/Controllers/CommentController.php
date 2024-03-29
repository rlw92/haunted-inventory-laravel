<?php

namespace App\Http\Controllers;

use App\Models\items;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class CommentController extends Controller
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

        //shows user id of post = dd($request->user()->id);
        // shows items id  dd($items->id);
       $validated = $request->validate([
            'message' => 'required|string|max:255',
            
        ]);
        
        $validated['user_id'] = auth()->id();
        $validated['items_id'] = $items->id;

        Comment::create($validated);


       return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Comment $comment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comment $comment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comment $comment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(items $items,Comment $comment): RedirectResponse
    {
        if($comment->user_id != auth()->id()) {
            abort(403, 'Unauthorized Action');
        }
        //
        $comment->delete();
 
        return redirect()->back();
        //
    }
}
