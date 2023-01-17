<?php

use App\Models\Post;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardPostController;

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

Route::get('/posts/{post:slug}', [PostController::class, 'show']);



Route::get('categories/{category:slug}', function (Category $category) {
    return view('category', [
        'title' => $category->lokasi,
        'posts' => $category->posts,
        'category' => $category->lokasi
    ]);
});


Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', function () {
    return view('Dashboard.dashboard');
})->middleware('auth');

Route::get('/mypost', function () {
    return view('Dashboard.posts.mypost');
})->middleware('auth');
// Route::resource('/Dashboard/posts', DashboardPostController::class)->middleware('auth');

Route::get('/create-mypost', [DashboardPostController::class, 'create'])->middleware('auth');
Route::get('/create-mypost1', function () {
    return view('Dashboard.posts.create-mypost1');
})->middleware('auth');
Route::get('/create-mypost2', function () {
    return view('Dashboard.posts.create-mypost2');
})->middleware('auth');
Route::get('/create-mypost3', function () {
    return view('Dashboard.posts.create-mypost3');
})->middleware('auth');
Route::get('/create-mypost4', function () {
    return view('Dashboard.posts.create-mypost4');
})->middleware('auth');
Route::get('/create-mypost5', function () {
    return view('Dashboard.posts.create-mypost5');
})->middleware('auth');
Route::get('/create-mypost6', function () {
    return view('Dashboard.posts.create-mypost6');
})->middleware('auth');
Route::get('/create-mypost7', function () {
    return view('Dashboard.posts.create-mypost7');
})->middleware('auth');
Route::get('/create-mypost8', function () {
    return view('Dashboard.posts.create-mypost8');
})->middleware('auth');
Route::get('/create-mypost9', function () {
    return view('Dashboard.posts.create-mypost9');
})->middleware('auth');
Route::get('/create-mypost10', function () {
    return view('Dashboard.posts.create-mypost10');
})->middleware('auth');
