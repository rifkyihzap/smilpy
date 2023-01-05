<?php

use App\Models\Post;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SewaController;

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

// Route::get('/dashboard', function () {
//     return view('Dashboard.dashboard');
// });
Route::get('/dashboard', [DashboardPostController::class, 'index'])->middleware('auth');

Route::resource('/mypost', DashboardPostController::class);

// Route::get('/mypost', function () {
//     return view('Dashboard.mypost');
// });

Route::get('/mypost', [DashboardPostController::class, 'index'])->name('mypost')->middleware('auth');
Route::get('/create-mypost', [DashboardPostController::class, 'create'])->name('create-mypost');

Route::post('/simpan-mypost', [DashboardPostController::class, 'store'])->name('simpan-mypost');
Route::get('/edit-mypost/{id}', [SewaController::class, 'edit'])->name('edit-mypost');
Route::post('/update-mypost/{id}', [SewaController::class, 'update'])->name('update-mypost');
Route::get('/delete-mypost/{id}', [SewaController::class, 'destroy'])->name('delete-mypost');
