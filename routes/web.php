<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SewaController;
use App\Http\Controllers\DashboardPostController;

use App\Models\Category;

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
Route::get('posts/{post:slug}', [PostController::class, 'show']);



Route::get('categories/{category:slug}', function (Category $category) {
    return view('category', [
        'title' => $category->lokasi,
        'posts' => $category->posts,
        'category' => $category->lokasi
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

Route::get('/dashboard', function () {
    return view('Dashboard.dashboard');
});
Route::resource('/mypost', DashboardPostController::class);

// Route::get('/mypost', function () {
//     return view('Dashboard.mypost');
// });

Route::get('/mypost', [DashboardPostController::class, 'index'])->name('mypost');
Route::get('/create-mypost', [DashboardPostController::class, 'create'])->name('create-mypost');

Route::post('/simpan-mypost', [DashboardPostController::class, 'store'])->name('simpan-mypost');
Route::get('/edit-mypost/{id}', [SewaController::class, 'edit'])->name('edit-mypost');
Route::post('/update-mypost/{id}', [SewaController::class, 'update'])->name('update-mypost');
Route::get('/delete-mypost/{id}', [SewaController::class, 'destroy'])->name('delete-mypost');
