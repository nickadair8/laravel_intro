<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return view('posts', ['posts' => Post::latest()->filter(request(['search', 'category']))->paginate(6)->withQueryString(), 'categories' => Category::all()]);
    }

    public function show($post){
        return view('post', ['post' => $post, 'categories' => Category::all()]);
    }

}
