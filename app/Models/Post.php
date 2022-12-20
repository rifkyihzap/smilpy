<?php

namespace App\Models;


class Post
{
    private static $title_post = [
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

    public static function all()
    {
        return self::$title_post;
    }

    public static function find($slug)
    {
        $posts = self::$title_post;
        $post = [];
        foreach ($posts as $p) {
            if ($p["slug"] === $slug) {
                $post = $p;
            }
        }

        return $post;
    }
}
