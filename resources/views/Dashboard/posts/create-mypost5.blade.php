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
                <h3>Langkah 2</h3>
            </div>
        <div class="card-body ">
            <h2>Buat tempat Anda tampil lebih menonjol</h2>
            <p>Pada tahap ini, Anda akan menambahkan beberapa fasilitas
                yang ditawarkan tempat Anda, serta 5 foto atau lebih.
                Kemudian, Anda akan membuat judul dan deskripsi.</p>
            <img src="img/11138 1.png" alt="">
            </div>
            </div>
        
            <div class="card">
            <div class="card-body ">
                <h2>Beri tahu tamu apa saja yang ditawarkan
                    di tempat Anda</h2>
                    <p>Anda akan menambahkan detail lainnya nanti, seperti tipe tempat tidur.</p>

                    <input type="checkbox" class="btn-check" id="btn-check-outlined" autocomplete="off">
                    <label class="btn btn-outline-dark" for="btn-check-outlined"><img src="img/icon/material-symbols_wifi-rounded.png">
                        <br>WiFi</label>
                    <input type="checkbox" class="btn-check" id="btn-2-check-outlined" autocomplete="off">
                    <label class="btn btn-outline-dark" for="btn-2-check-outlined"><img src="img/icon/mdi_kitchen-counter-outline.png">
                        <br>Dapur</label>
                    <input type="checkbox" class="btn-check" id="btn-3-check-outlined" autocomplete="off">
                    <label class="btn btn-outline-dark" for="btn-3-check-outlined"><img src="img/icon/material-symbols_ac-unit.png">
                        <br>AC</label>
                    <input type="checkbox" class="btn-check" id="btn-4-check-outlined" autocomplete="off">
                    <label class="btn btn-outline-dark" for="btn-4-check-outlined"><img src="img/icon/ic_outline-live-tv.png">
                        <br>Televisi</label>
                    <input type="checkbox" class="btn-check" id="btn-5-check-outlined" autocomplete="off">
                    <label class="btn btn-outline-dark" for="btn-5-check-outlined"><img src="img/icon/fluent-mdl2_parking-solid.png">
                        <br>Parkir</label>
                    <input type="checkbox" class="btn-check" id="btn-6-check-outlined" autocomplete="off">
                    <label class="btn btn-outline-dark" for="btn-6-check-outlined"><img src="img/icon/cil_pool.png">
                        <br>Kolam Renang</label>
                    <input type="checkbox" class="btn-check" id="btn-7-check-outlined" autocomplete="off">
                    <label class="btn btn-outline-dark" for="btn-7-check-outlined"><img src="img/icon/cil_bath.png">
                        <br>Bathup</label>

            </div>
            <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-center">
                <li class="page-item"><a class="page-link text-dark" href="/create-mypost1">Kembali</a></li>
                <li class="page-item"><a class="page-link text-dark" href="/create-mypost5">1</a></li>
                <li class="page-item"><a class="page-link text-dark" href="/create-mypost6">2</a></li>
                <li class="page-item"><a class="page-link text-dark" href="/create-mypost7">3</a></li>
                <li class="page-item"><a class="page-link text-dark" href="/create-mypost6">Berikutnya</a></li>
                </ul>
            </nav>
        </div>
</div>  

@endsection