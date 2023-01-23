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
                <h3>Langkah 1</h3>
            </div>
        <div class="card-body ">
            <h2>Beri tahu kami mengenai tempat Anda</h2>
            <p>Pada langkah ini, kami akan menanyakan tipe properti yang
                Anda miliki dan apakah tamu akan memesan seluruh tempat
                atau hanya satu kamar.Kemudian beri tahu kami lokasinya dan
                berapa tamu yang bisa menginap.</p>
            <img src="img/5259 1.png" alt="">
            </div>
            </div>
        
            <div class="card">
            <div class="card-body ">
                <h2>Di mana lokasi tempat Anda?</h2>
                <div class="input-group mb-3">
                    <input type="text" class="form-control rounded-pill" id="alamat" name="alamat"
                    placeholder="Masukkan alamat Anda" aria-label="Masukkan alamat Anda" aria-describedby="button-addon2">
                    <button class="btn btn-outline-secondary rounded-pill" type="button" id="alamat"><i class="bi bi-geo-alt-fill"></i></button>
                </div>
                <div>
                    <select class="form-select rounded-pill" aria-label="Default select example" id="category_id" name="category_id">
                        <option selected>Pilih kota tempat anda</option>
                        @foreach ($categories as $category)
                        <option value="1">{{ $category->lokasi }}</option>
                        @endforeach
                    </select>
                </div>

            
            </div>
            <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-center">
                <li class="page-item"><a class="page-link text-dark" href="/create-mypost1">Kembali</a></li>
                <li class="page-item"><a class="page-link text-dark" href="/create-mypost1">1</a></li>
                <li class="page-item"><a class="page-link text-dark" href="/create-mypost2">2</a></li>
                <li class="page-item"><a class="page-link text-dark" href="/create-mypost3">3</a></li>
                <li class="page-item"><a class="page-link text-dark" href="/create-mypost4">4</a></li>
                <li class="page-item"><a class="page-link text-dark" href="/create-mypost4">Berikutnya</a></li>
                </ul>
            </nav>
        </div>
</div>  

@endsection