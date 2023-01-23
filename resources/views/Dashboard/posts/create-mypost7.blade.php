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
                <h2>Tuliskan deskripsi tempat Anda</h2>
                    <p>Judul ringkas adalah yang terbaik.
                        Jangan khawatir, Anda bisa mengubahnya kapan saja.</p>
                        <form>
                            <div class="mb-3">
                            <label for="judul" class="form-label">Judul</label>
                            <input type="text" class="form-control" id="judul" name="judul">
                            </div>
                            <div class="mb-3">
                            <label for="deskripsi" class="form-label">Deskripsi</label>
                            <textarea class="form-control" placeholder="Deskripsi" id="deskripsi" name="deskripsi" style="height: 100px">
                            </textarea>
                            </div>
                        </form>
            </div>
            <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-center">
                <li class="page-item"><a class="page-link text-dark" href="/create-mypost1">Kembali</a></li>
                <li class="page-item"><a class="page-link text-dark" href="/create-mypost5">1</a></li>
                <li class="page-item"><a class="page-link text-dark" href="/create-mypost6">2</a></li>
                <li class="page-item"><a class="page-link text-dark" href="/create-mypost7">3</a></li>
                <li class="page-item"><a class="page-link text-dark" href="/create-mypost8">Berikutnya</a></li>
                </ul>
            </nav>
        </div>
</div>  

@endsection