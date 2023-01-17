@extends('Dashboard.navbar.main')

@section('container')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
        <div class="col-sm-6">
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item active">Create My Post</li>
            </ol>
        </div>
        </div>
    </div>
</div>


<!-- Main content -->
<div class="content">
    <div class="card-group">
        <div class="card">
            <div class="card-header">
                <h3>Tinjau iklan Anda</h3>
            </div>
        <div class="card-body ">
            <div class="col">
                <div class="card h-100">
                    <a href="#" class="text-decoration-none" style="color: black">
                        <img src="" alt="image" class="card-img-top">
                        <div class="card-body">
                            <h7 class="card-title fw-bold">Judul</h7>
                            <p class="card-text text-secondary">Memiliki Fasilitas Utama & Fasilitas Umum</p>
                            <dt class="card-text fw-bold">Harga <small class="text-muted">Malam</small></dt>
                        </div>
                    </a>
                </div>
            </div>
        </div>

            <div class="card-body ">
                <div class="col">
                    <div class="card h-100">
                        <div class="container-fluid">
                            <h3 class="mt-4">Judul</h3>
                            <div class="row justify-content-between">
                                <div class="col-auto me-auto">
                                    <a href="#" class="text-decoration-underline"> ulasan </a>·
                                    <a href="#" class="text-decoration-underline">Alamat</a>
                                </div>
                                <div class="col-auto">
                                    <a href="#" class="text-decoration-underline me-3"><i class="bi bi-upload me-1"></i> bagikan </a>
                                    <a href="#" class="text-decoration-underline"><i class="bi bi-heart me-1"></i> simpan</a>
                                </div>
                            </div>
                            <img src="" class="rounded mx-auto d-block img-fluid mt-4" style="width: 1300px; height: 450px;" alt="image">
                            <div class="row justify-content-start">
                                <div class="col-7">
                                    <h3 class="mt-4">Judul</h3>
                                    <p class="text-muted mt-4">Fasilitas Utama dan Jenis kasur </p>
                                    <a href="#">Nama Pengguna</a>
                                    <hr>
                                    <p>Deskripsi</p>
                                    <p class="fst-italic">Fasilitas Umum</p>
                                </div>
                                <div class="col-5">
                        
                        
                        
                        
                                    <!-- Belum Dirubah-->
                                    <div class="card shadow p-3 mb-5 mt-4 bg-body rounded">
                                        <div class="card-body">
                                            <div class="row justify-content-between">
                                                <div class="col-auto me-auto">
                                                    <h4 class="card-title text-bold">Harga <a class="fw-normal text-muted text-decoration-none">malam</a></h4>
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
                    </div>
                    <a href="/create-mypost8" class="btn btn-primary" type="button">Kembali</a>
                    <a href="/mypost" class="btn btn-primary" type="button">Selesai</a>
                </div>
            </div>
        </div>
    </div> 
</div> 

@endsection