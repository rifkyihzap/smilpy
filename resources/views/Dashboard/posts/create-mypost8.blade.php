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
                <h3>Langkah 3</h3>
            </div>
        <div class="card-body ">
            <h2>Selesaikan dan publikasikan</h2>
            <p>Terakhir, Anda bisa memilih apakah Anda ingin memulai
                dengan tamu berpengalaman, kemudian Anda akan 
                menetapkan harga per malam dan publikasikan saat Anda siap.</p>
            <img src="img/10811 1.png">
            </div>
            </div>
        
            <div class="card">
            <div class="card-body ">
                <h2>Beri tahu tamu apa saja yang ditawarkan
                    di tempat Anda</h2>
                    <p>Anda akan menambahkan detail lainnya nanti, seperti tipe tempat tidur.</p>
                    
                    <input type="radio" class="btn-check" name="options" id="option1" autocomplete="off" checked>
                    <label class="btn btn-outline-secondary" for="option1">Single Bed</label>

                    <input type="radio" class="btn-check" name="options" id="option2" autocomplete="off">
                    <label class="btn btn-outline-secondary" for="option2">Twin Bed</label>

                    <input type="radio" class="btn-check" name="options" id="option3" autocomplete="off" checked>
                    <label class="btn btn-outline-secondary" for="option3">Double Bed</label><br>

                    <input type="radio" class="btn-check" name="options" id="option4" autocomplete="off">
                    <label class="btn btn-outline-secondary" for="option4">Queen Bed</label>

                    <input type="radio" class="btn-check" name="options" id="option5" autocomplete="off">
                    <label class="btn btn-outline-secondary" for="option5">King Bed</label>
            </div>
            <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-center">
                <li class="page-item"><a class="page-link text-dark" href="/create-mypost5">Kembali</a></li>
                <li class="page-item"><a class="page-link text-dark" href="/create-mypost8">1</a></li>
                <li class="page-item"><a class="page-link text-dark" href="/create-mypost9">2</a></li>
                <li class="page-item"><a class="page-link text-dark" href="/create-mypost9">Berikutnya</a></li>
                </ul>
            </nav>
        </div>
</div>  

@endsection