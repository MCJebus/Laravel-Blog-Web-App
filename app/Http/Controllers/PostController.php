<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\BlogUser;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $posts = Post::paginate(5);
        return view('posts.index', ['posts' => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $blogUsers = BlogUser::orderBy('name', 'asc')->get();
        return view('posts.create', ['blogUsers' => $blogUsers]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $validatedData = $request->validate([
            'text' => 'nullable|max:255',
            'image' => 'nullable|max:255',
            'date_posted' => 'required|date',
            'blog_user_id' => 'required|integer',
        ]);

        $post = new Post;
        $post->text = $validatedData['text'];
        $post->image = $validatedData['image'];
        $post->date_posted = $validatedData['date_posted'];
        $post->blog_user_id = $validatedData['blog_user_id'];
        $post->save();

        session()->flash('message', 'Post was created.');
        return redirect()->route('posts.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $post = Post::findOrFail($id);
        $comments = Post::findOrFail($id)->comments;
        return view('posts.show', ['post' => $post, 'comments' => $comments]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $blogUsers = BlogUser::orderBy('name', 'asc')->get();
        $post = Post::findOrFail($id);
        return view('posts.edit', ['blogUsers' => $blogUsers, 'post' => $post]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $validatedData = $request->validate([
            'text' => 'required|max:255',
            'image' => 'nullable|max:255',
            'date_posted' => 'required|date',
            'blog_user_id' => 'required|integer',
        ]);
        
        $blogUser = BlogUser::findOrFail($validatedData['blog_user_id']);
        $post = Post::findOrFail($id);
        $post->text = $validatedData['text'];
        $post->image = $validatedData['image'];
        $post->date_posted = $validatedData['date_posted'];
        $post->blog_user_id = $validatedData['blog_user_id'];
        $post->save();

        session()->flash('message', 'Post was updated.');
        return redirect()->route('posts.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $post = Post::findOrFail($id);
        $post->delete();

        //Redirect to bloggers page with session message.
        return redirect()->route('posts.index')->with('message', 'Post was deleted.');
    }
}
