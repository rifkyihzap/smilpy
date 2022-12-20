<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {

    return view('home', [
        "title" => "home",

        "posts" => Post::all()

    ]);
});

//single post//
Route::get('posts/{slug}', function ($slug) {


    return view('post', [
        "title" => "single post",
        "post" => Post::find($slug)
    ]);
});




Route::get('/abiansemal', function () {
    return view('abiansemal', [
        "title" => "abiansemal",
        "nama" => "Villa Jimbaran",
        "ulasan" => "2 ulasan",
        "lokasi" => "Abiansemal,Indonesia",
        "bagikan" => "Bagikan",
        "simpan" => "Simpan",
        "image" => "aa.jpg",
        "tempat" => "Cilffside villa near Pandawa Beach"
    ]);
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/login', function () {
    return view('login');
});
