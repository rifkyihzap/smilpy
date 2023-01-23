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
                <h2>Kategori mana yang paling
                    menggambarkan tempat Anda?</h2>

                <form method="post" action="/create-mypost1">
                    @csrf
                    <div class="mb-3">
                        <label class="btn btn-outline-secondary">
                        <input type="radio" class="btn-check" name="kategoritempat" id="kategoritempat" autocomplete="off" value="Rumah">
                        <img src="img/ic_outline-home .png">
                        <br>Rumah</label>

                        <label class="btn btn-outline-secondary">
                        <input type="radio" class="btn-check" name="kategoritempat" id="kategoritempat" autocomplete="off" value="Apartemen">
                        <img src="img/apart.png">
                        <br>Apartemen</label>

                        <label class="btn btn-outline-secondary">
                        <input type="radio" class="btn-check" name="kategoritempat" id="kategoritempat" autocomplete="off" value="Hotel">
                        <img src="img/hotel.png">
                        <br>Hotel</label>

                        <label class="btn btn-outline-secondary">
                        <input type="radio" class="btn-check" name="kategoritempat" id="kategoritempat" autocomplete="off" value="Guest House">
                        <img src="img/guest.png">
                        <br>Guest House</label>
                    </div>
                </form>
            </div>
            <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-center">
                <li class="page-item"><a class="page-link text-dark" href="/create-mypost">Batal</a></li>
                <li class="page-item"><a class="page-link text-dark" href="/create-mypost1">1</a></li>
                <li class="page-item"><a class="page-link text-dark" href="/create-mypost2">2</a></li>
                <li class="page-item"><a class="page-link text-dark" href="/create-mypost3">3</a></li>
                <li class="page-item"><a class="page-link text-dark" href="/create-mypost4">4</a></li>
                <li class="page-item"><a class="page-link text-dark" href="/create-mypost2">Berikutnya</a></li>
                </ul>
            </nav>
        </div>
</div>  

@endsection