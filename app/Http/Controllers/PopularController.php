<?php

namespace App\Http\Controllers;

use App\Models\Post; 
use Illuminate\Http\Request;

class PopularController extends Controller
{
  
    public function index()
    {
        
        $posts = Post::with(['writer', 'category'])->latest()->paginate(3);

        return view('popular', [
            'title' => 'Popular',
            'posts' => $posts 
        ]);
    }
}