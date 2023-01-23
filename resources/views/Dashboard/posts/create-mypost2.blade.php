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
                <h2>Apa tipe tempat yang bisa
                    digunakan tamu?</h2>
                    <label class="btn btn-outline-secondary">
                        <div class="row">
                            <div class="col-sm-2">
                                <input type="radio" class="btn-check" name="tipetempat" id="tipetempat" autocomplete="off" value="Seluruh Rumah">
                                <img src="img/tabler_home.png">
                            </div>
                            <div class="col-sm-10">
                                <h4 class="text-start">Seluruh Rumah</h4>
                                <p class="text-start">Tamu bisa menggunakan seluruh tempat.</p>
                            </div>
                        </div></label><br>

                        <label class="btn btn-outline-secondary">
                            <div class="row">
                            <div class="col-sm-2">
                                <input type="radio" class="btn-check" name="tipetempat" id="tipetempat" autocomplete="off" value="Kamar Pribadi"> 
                                <img src="img/material-symbols_door-open-outline.png">
                            </div>
                                <div class="col-sm-10">
                                    <h4 class="text-start">Kamar Pribadi</h4>
                                    <p class="text-start">Tamu akan tidur di kamar pribadi, namun sebagian area mungkin akan digunakan bersama.</p>
                                </div>
                        </div></label><br>

                        <label class="btn btn-outline-secondary">
                            <div class="row">
                                <div class="col-sm-2">
                                    <input type="radio" class="btn-check" name="tipetempat" id="tipetempat" autocomplete="off">
                                    <img src="img/ion_people-circle-outline.png">
                                </div>
                                <div class="col-sm-10">
                                    <h4 class="text-start">Kamar Bersama</h4>
                                    <p class="text-start">Tamu akan tidur di salah satu kamar atau area umum
                                        yang mungkin akan digunakan bersama.</p>
                                    </div>
                        </div></label><br>

                    
                    
            </div>
            <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-center">
                <li class="page-item"><a class="page-link text-dark" href="/create-mypost1">Kembali</a></li>
                <li class="page-item"><a class="page-link text-dark" href="/create-mypost1">1</a></li>
                <li class="page-item"><a class="page-link text-dark" href="/create-mypost2">2</a></li>
                <li class="page-item"><a class="page-link text-dark" href="/create-mypost3">3</a></li>
                <li class="page-item"><a class="page-link text-dark" href="/create-mypost4">4</a></li>
                <li class="page-item"><a class="page-link text-dark" href="/create-mypost3">Berikutnya</a></li>
                </ul>
            </nav>
        </div>
</div>  

@endsection