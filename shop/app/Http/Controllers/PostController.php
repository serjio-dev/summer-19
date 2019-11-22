<?php
namespace App\Http\Controllers;

class PostController extends Controller
{
    public function getPosts()
    {
        return view('posts.posts', ['posts' => \App\Post::all()]);
    }

    public function getPost($id)
    {
        return view('posts.post', ['post' => \App\Post::find($id)]);
    }
}
