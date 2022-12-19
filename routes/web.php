<?php

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
    $post_title = [
        [
            "title" => "home a",
            "lokasi" => "Abiansemal,Indonesia",
            "slug" => "abiansemal-indonesia",
            "jarak" => " 309 Kilometer",
            "tanggal" => "21-26 Agustus",
            "harga" => "Rp.5.905.265",
            "image" => "aa.jpg",

        ],
        [
            "title" => "home b",
            "lokasi" => "Singaraja, Indonesia",
            "slug" => "singaraja-indonesia",
            "jarak" => " 326 kilometer",
            "tanggal" => "7-14 Februari",
            "harga" => "Rp6.747.466",
            "image" => "bb.jpg"

        ],
        [
            "title" => "home c",
            "lokasi" => "Kecamatan Ubud, Bali, Indonesia",
            "slug" => "kecamatan-ubud-bali-indonesia",
            "jarak" => " 313 kilometer",
            "tanggal" => "6-12 Desember",
            "harga" => "Rp4.595.400",
            "image" => "cc.jpg"

        ],
        [
            "title" => "home d",
            "lokasi" => "Kecamatan Kuta Selatan, Bali, Indonesia",
            "slug" => "kecamatan-kuta-selatan-bali-indonesia",
            "jarak" => " 310 kilometer",
            "tanggal" => "15-19 Juni",
            "harga" => "Rp3.797.500",
            "image" => "dd.jpg"

        ]
    ];

    return view('home', [
        "title" => "home",

        "posts" => $post_title

    ]);
});

//single post//
Route::get('posts/{slug}', function ($slug) {
    $post_title = [
        [
            "title" => "home a",
            "lokasi" => "Abiansemal,Indonesia",
            "slug" => "abiansemal-indonesia",
            "jarak" => " 309 Kilometer",
            "tanggal" => "21-26 Agustus",
            "harga" => "Rp.5.905.265",
            "image" => "aa.jpg",

        ],
        [
            "title" => "home b",
            "lokasi" => "Singaraja, Indonesia",
            "slug" => "singaraja-indonesia",
            "jarak" => " 326 kilometer",
            "tanggal" => "7-14 Februari",
            "harga" => "Rp6.747.466",
            "image" => "bb.jpg"

        ],
        [
            "title" => "home c",
            "lokasi" => "Kecamatan Ubud, Bali, Indonesia",
            "slug" => "kecamatan-ubud-bali-indonesia",
            "jarak" => " 313 kilometer",
            "tanggal" => "6-12 Desember",
            "harga" => "Rp4.595.400",
            "image" => "cc.jpg"

        ],
        [
            "title" => "home d",
            "lokasi" => "Kecamatan Kuta Selatan, Bali, Indonesia",
            "slug" => "kecamatan-kuta-selatan-bali-indonesia",
            "jarak" => " 310 kilometer",
            "tanggal" => "15-19 Juni",
            "harga" => "Rp3.797.500",
            "image" => "dd.jpg"

        ]
    ];

    $new_post = [];
    foreach ($post_title as $post) {
        if ($post["slug"] === $slug) {
            $new_post = $post;
        }
    }

    return view('post', [
        "title" => "single post",
        "post" => $new_post
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
