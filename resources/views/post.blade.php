
@extends('layout.main')

@section('container')

<div class="container-fluid">
    <h3 class="mt-4">{{ $post->judul }}</h3>
    <div class="row justify-content-between">
        <div class="col-auto me-auto">
            <a href="#" class="text-decoration-underline"> ulasan </a>·
            <a href="#" class="text-decoration-underline"> {{ $post->alamat }}</a>
        </div>
        <div class="col-auto">
            <a href="#" class="text-decoration-underline me-3"><i class="bi bi-upload me-1"></i> bagikan </a>
            <a href="#" class="text-decoration-underline"><i class="bi bi-heart me-1"></i> simpan</a>
        </div>
    </div>
    <img src="/img/{{ $post->image }}" class="rounded mx-auto d-block img-fluid mt-4" style="width: 1300px; height: 450px;" alt="{{ $post->judul }}">
    <div class="row justify-content-start">
        <div class="col-7">
            <h3 class="mt-4">{{ $post->judul }}</h3>
            <p class="text-muted mt-4">{{ $post->category->lokasi }} {{ $post->tipetempattidur }} </p>
            <a href="#">{{ $post->user->name }}</a>
            <hr>
            <p>{{ $post->deskripsi}}</p>
            <p class="fst-italic">{{ $post->user->name }}</p>
        </div>
        <div class="col-5">




            <!-- Belum Dirubah-->
            <div class="card shadow p-3 mb-5 mt-4 bg-body rounded">
                <div class="card-body">
                    <div class="row justify-content-between">
                        <div class="col-auto me-auto">
                            <h4 class="card-title text-bold">{{ $post->harga }} <a class="fw-normal text-muted text-decoration-none">malam</a></h4>
                        </div>
                        <div class="col-auto">
                            <a href="#" class="text-decoration-underline"> 2 ulasan </a>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th style="width: 10px">Check In</th>
                                    <th style="width: 40px">Check Out</th>
                                </tr>
                            </thead>
                            <thead>
                                <tr>
                                    <td></td>
                                </tr>
                            </thead>
                        </table>
                    </div>
                    <div class="d-grid gap-2">
                        <a href="#" class="btn btn-primary" type="button">Pesan</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>
@endsection