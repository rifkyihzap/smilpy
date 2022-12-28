<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return view('home', [
            "title" => "Home",

            "posts" => \App\Models\Post::all()

        ]);
    }
    public function show(\App\Models\Post $post)
    {
        return view('post', [
            "title" => "",
            "post" => $post
        ]);
    }
}
