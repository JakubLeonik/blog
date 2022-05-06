<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostsController extends Controller
{
    /**
     * Display all posts.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('posts.index', ['posts' => Post::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //authorization - every logged user
        $this->authorize('create', Post::class);
        //return create view
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //authorization - every logged user - and validation
        $this->authorize('create', Post::class);
        $request->validate([
            "title" => ["required", "unique:posts"],
            "content" => "required"
        ]);

        //create new post
        $post = new Post();
        $post->title = strip_tags($request->input('title'));
        $post->content = $request->input('content');
        $post->author = auth()->user()->name;
        $post->author_id = auth()->user()->id;
        $post->save();

        //redirect to all posts
        return redirect()->route('posts.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return view('posts.show', ['post' => $post]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //authorization - only owner
        $this->authorize('update', $post);
        //return edit view
        return view('posts.edit', ['post' => $post]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //authorization - only owner - and validation
        $this->authorize('create', $post);
        $request->validate([
            "title" => ["required", "unique:posts"],
            "content" => "required"
        ]);

        //update post
        $post->title = strip_tags($request->input('title'));
        $post->content = $request->input('content');
        $post->save();

        //redirect to view of updated post
        return redirect()->route('posts.show', ['post' => $post->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //authorization - only owner
        $this->authorize('delete', $post);
        //delete post
        $post->delete();
        //redirect to all posts
        return redirect()->route('posts.index');
    }
}