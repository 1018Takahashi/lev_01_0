<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;

class PostController extends Controller
{
    public function index(Post $post)
    {
        return view('posts/index')->with(['posts' => $post->getPaginateByLimit()]);
    }
    
    public function show(Post $show)
    {
        return view('posts/show')->with(['post' => $show]);
    }
    
    public function create()
    {
        return view('posts/create');
    }
    
    public function store(Post $post, PostRequest $request)
    {
        $input = $request['post'];
        $post->fill($input)->save();
        return redirect('/posts/' . $post->id);
    }
    
    public function edit(Post $edit)
    {
        return view('posts/edit')->with(['post' => $edit]);
    }
    
    public function update(PostRequest $request, Post $update)
    {
        $input_post = $request['post'];
        $update->fill($input_post)->save();
        return redirect('/posts/' . $update->id);
    }
    public function delete(Post $delete)
    {
        $delete->delete();
        return redirect('/');
    }
}







