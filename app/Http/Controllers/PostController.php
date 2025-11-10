<?php

namespace App\Http\Controllers;

use App\Models\Post; 
use Illuminate\Http\Request;

class PostController extends Controller
{
  
    public function index()
    {
        return view('home', [
            "title" => "Home",
            "posts" => Post::with(['writer', 'category'])->latest()->get()
        ]);
    }

   
    public function show(Post $post)
    {

        return view('post', [
            "title" => $post->title,
            "post" => $post
        ]);
    }
}