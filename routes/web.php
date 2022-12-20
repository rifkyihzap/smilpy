<?php

use App\Http\Controllers\PostController;
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

Route::get('/', [PostController::class, 'index']);

//single post//
Route::get('posts/{slug}', [PostController::class, 'show']);




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

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/mypost', function () {
    return view('mypost');
});
