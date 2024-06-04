<?php

namespace App\Http\Controllers;

use App\Models\post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //get all posts from database
        $posts = post::all();
       return view('posts.index', ['post'=>$posts]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
     
        $validated = $request->validate([
            'title'=>['required','min:5','max:255'],
            'content'=>['required','min:10'],
        ]);
        auth()->user()->posts->create($validated);

        // return redirect()->route('posts.index');
        return to_route('posts.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        // $post = Post::findorFail($id);
       return view('posts.show',['post'=>$post]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        return view('posts.edit', ['post'=>$post]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, post $post)
    {
        $validated = $request->validate([
            'title'=>['required','min:5','max:255'],
            'content'=>['required','min:10'],
        ]);
        $post->update($validated);
        return to_route('posts.index');


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(post $post)
    {
        $post->delete();
        return to_route('posts.index');

    }
}
