<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePostRequest;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::all();
        return view('pages.posts', compact('posts'));
    }

    public function showCreatePost(){
        return view('pages.createpost');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreatePostRequest $request)
    {
        $post = Post::create($request->all());
        return redirect('/createpost')->with('status', 'Post created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $title)
    {
        $post = Post::where("title", $title)->first();
        return view('pages.post', compact("post"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Post::destroy($id);

        return redirect('/poststable');
    }
}
