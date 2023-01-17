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
                <h2>Sekarang tetapkan harga Anda</h2>
                    <p>Anda bisa mengubahnya kapan saja.</p>
                    
                    <div class="col-md-6"><h4>Harga</h4></div>
                            <div class="col-6 col-md-4">
                                <input type="text" class="form-control" placeholder="Harga" aria-label="Harga">
                            </div>
            </div>
            <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-center">
                <li class="page-item"><a class="page-link text-dark" href="/create-mypost5">Kembali</a></li>
                <li class="page-item"><a class="page-link text-dark" href="/create-mypost8">1</a></li>
                <li class="page-item"><a class="page-link text-dark" href="/create-mypost9">2</a></li>
                <li class="page-item"><a class="page-link text-dark" href="/create-mypost10">Berikutnya</a></li>
                </ul>
            </nav>
        </div>
</div>  

@endsection