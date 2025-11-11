<?php

namespace App\Http\Controllers;

use App\Models\Category; 
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        return view('categories', [
            'title' => 'Categories',
            'categories' => Category::with('posts')->get()
        ]);
    }
    
    public function show(Category $category)
    {
      
        return view('posts', [
            'title' => 'Articles in: ' . $category->name,
            'posts' => $category->posts()->with(['writer', 'category'])->get()
        ]);
    }
}