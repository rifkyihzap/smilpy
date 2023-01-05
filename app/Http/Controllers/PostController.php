<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return view('home', [
            "title" => "Home",
            "posts" => Post::all(),
            "categories" => Category::all()
        ]);
    }
    public function show(Post $post)
    {
        return view('post', [
            "title" => "",
            "post" => $post,
            "categories" => Category::all(),
            "posts" => Post::all()
        ]);
    }
}
