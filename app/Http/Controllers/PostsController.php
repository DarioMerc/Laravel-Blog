<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    //get posts
    public function index(){
        $posts = Post::all();

        return view('posts.index',['posts' => $posts]);
    }
    //CREATE
    public function create(){
        return view('posts.create');
    }
    public function store(){
        request()->validate([
            'title' => 'required',
            'content' => 'required'
        ]);
        Post::create([
            'title' => request('title'),
            'content' => request('content')
        ]);
        return redirect('/posts');
    }
    //EDIT
    public function edit(Post $post){
        return view('posts.edit',['post' => $post]);
    }
    public function update(Post $post){
        request()->validate([
            'title' => 'required',
            'content' => 'required'
        ]);
        $post->update([
            'title' => request('title'),
            'content' => request('content')
        ]);
        return redirect('/posts');
    }
}
