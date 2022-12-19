@extends('layout.nav')

@section('container')
<div class="container-fluid">
    <h3 class="mt-4">Villa Jimbaran</h3>
    <div class="row justify-content-between">
        <div class="col-auto me-auto">
            <a href="#" class="text-decoration-underline"> 2 ulasan </a>·
            <a href="#" class="text-decoration-underline"> Jimbaran,Indonesia </a>
        </div>
        <div class="col-auto">
            <a href="#" class="text-decoration-underline me-3"><i class="bi bi-upload me-1"></i> Bagikan </a>
            <a href="#" class="text-decoration-underline"><i class="bi bi-heart me-1"></i> Simpan</a>
        </div>
    </div>
    <img src="img/aa.jpg" class="rounded mx-auto d-block img-fluid mt-4" style="width: 1300px; height: 450px;" alt="...">
    <div class="row justify-content-start">
        <div class="col-7">
            <h3 class="mt-4">Cilffside villa near Pandawa Beach</h3>
            <p class="text-muted mt-4">10 tamu · 5 kamar tidur · 5 tempat tidur · 5 kamar mandi </p>
            <hr>
            <p>This Elegant Privately owned Villa provides all the comforts of tropical living while preserving a distinctive Balinese charm in an exotic atmosphere with a beautiful birds chirping every morning.
                A neat tropical garden on every corner adds the sophisticated atmosphere of the property.
                Our villa is ideally situated on the southern part of Bali, very close to the famous Jimbaran </p>
            <p class="fst-italic">Keramahtamahan</p>
        </div>
        <div class="col-5">
            <div class="card shadow p-3 mb-5 mt-4 bg-body rounded">
                <div class="card-body">
                    <div class="row justify-content-between">
                        <div class="col-auto me-auto">
                            <h4 class="card-title text-bold">$1.690 <a class="fw-normal text-muted text-decoration-none">malam</a></h4>
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
<p>test github</p>

@endsection