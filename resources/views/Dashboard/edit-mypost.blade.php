<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>My Post</title>

<!-- Google Font: Source Sans Pro -->
<link rel="stylesheet" href="{{ asset('AdminLTE/https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback') }}">
<!-- Font Awesome Icons -->
<link rel="stylesheet" href="{{ asset('AdminLTE/plugins/fontawesome-free/css/all.min.css') }}">
<!-- Theme style -->
<link rel="stylesheet" href="dist/css/adminlte.min.css">
<!-- Bootstrap Icon -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">

</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-dark navbar-dark">
    <!-- Left navbar links -->
    <ul class="navbar-nav col-11">
        <div class="input-group">
<input class="form-control" list="datalistOptions" id="exampleDataList" placeholder="Type to search..." aria-describedby="button-addon2">
<datalist id="datalistOptions">
  <option value="Tempat">
  <option value="Foto">
  <option value="Seattle">
  <option value="Los Angeles">
  <option value="Chicago">
</datalist>
            {{-- <input type="text" class="form-control" placeholder="Search" aria-label="Search" aria-describedby="button-addon2"> --}}
            <button class="btn btn-outline-secondary" type="button" id="button-addon2">Search</button>
        </div>
    </ul>
    <ul class="navbar-nav ml-auto">
        <a class="nav-link active fs-6" href="/register">Log In</a>
    </ul>
</nav>
<!-- /.navbar -->

<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/" class="brand-link">
    <img src="img/logo.png" alt="Smilpy Logo" class="brand-image" style="opacity: .8">
    <span class="brand-text font-weight-light">Smilpy</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
        <img src=" " class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info dropdown">
        <a href="#" class="d-block">User Nama</a>
        </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
            with font-awesome or any other icon font library -->
        <li class="nav-item menu-open">
            <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="/dashboard">
                    <i class="bi bi-house-door"></i> 
                        Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('mypost') }}">
                    <i class="bi bi-file-post-fill"></i> 
                    My Posts
                </a>
            </li>
            </ul>
        </li>
        </ul>
    </nav>
    <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0">My Posts</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
            <li class="breadcrumb-item active">My Posts</li>
            </ol>
        </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="card card-info card-outline">
            <div class="card-header">
                <h3>Beri tahu kami tentang tempat Anda</h3>
                </div>
            </div>

            <div class="card-body">
                <form action="{{ url('update-mypost', $sew->id) }}" method="post">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for=""> Berikan nama pada tempat anda</label>
                        <input type="text" name="judul" id="judul" class="form-control" placeholder="Nama Tempat" value="{{ $sew->judul }}">
                    </div>

                    <div class="form-group">
                        <label for="floatingSelect">Manakah dari berikut ini yang paling menggambarkan tempat Anda?</label>
                        <div class="form-floating">
                            <select class="form-select" name="jenistmpt" id="jenistmpt" aria-label="Floating label select example">
                            <option selected>Pilih salah satu</option>
                            <option value="Rumah">Rumah</option>
                            <option value="Hotel">Hotel</option>
                            <option value="Apartemen">Apartemen</option>
                            <option value="Kost">Kost</option>
                            <option value="Caffe">Cafffe</option>
                            </select>
                        </div>

                        {{-- <input type="text" name="jenistmpt" id="jenistmpt" class="form-control" placeholder="Jenis Tempat"> --}}
                    </div>
                    
                    <div class="form-group">
                        <label for=""> Di mana tempat Anda berada?</label>
                        <ul class="list-group list-group-horizontal">
                            <li class="list-group-item"><input type="text" name="alamat" id="alamat" class="form-control" placeholder="Negara" value="{{ $sew->alamat }}"></li>
                            <li class="list-group-item"><input type="text" name="alamat" id="alamat" class="form-control" placeholder="Provinsi" value="{{ $sew->alamat }}"></li>
                            <li class="list-group-item"><input type="text" name="alamat" id="alamat" class="form-control" placeholder="Kota" value="{{ $sew->alamat }}"></li>
                            <li class="list-group-item"><input type="text" name="alamat" id="alamat" class="form-control" placeholder="Jalan" value="{{ $sew->alamat }}"></li>
                        </ul>
                        
                        {{-- <input type="text" name="alamat" id="alamat" class="form-control" placeholder="Alamat"> --}}
                    </div>

                    <div class="form-group">
                        <label for=""> Bagikan beberapa dasar tentang tempat Anda</label>
                        <ul class="list-group">
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <input type="text" name="plhnfasilitas" id="plhnfasilitas" class="form-control" 
                                placeholder="Kamar, Kamar Mandi, Parkir Area, Dapur, Atau lainnya" value="{{ $sew->plhnfasilitas }}"
                                >
                            <span class="badge rounded-pill"><input type="number" name="jmlhfasilitas" 
                                id="jmlhfasilitas" class="form-control rounded-pill" aria-describedby="basic-addon1" 
                                placeholder="Jumlah" value="{{ $sew->jmlhfasilitas }}"
                                >
                            </span>
                        </li>
                        </ul>
                                                
                        {{-- <input type="text" name="plhnfasilitas" id="plhnfasilitas" class="form-control" placeholder="Fasilitas Umum">
                        <input type="number" name="jmlhfasilitas" id="jmlhfasilitas" class="form-control" aria-describedby="basic-addon1"> --}}
                        {{-- <input type="text" name="jmlhfasilitas" id="jmlhfasilitas" class="form-control" placeholder="Jumlah Fasilitas"> --}}
                    </div>

                    {{-- <div class="form-group">
                        <input type="text" name="plhnfasilitas" id="plhnfasilitas" class="form-control" placeholder="Fasilitas Umum">
                    </div> --}}

                    <div class="form-group">
                        <label for="">Beri tahu tamu apa yang ditawarkan tempat Anda</label>
                        <input type="text" name="fasilitaslain" id="fasilitaslain" class="form-control" 
                            placeholder="Televisi, AC, Mesin Cuci, Meja, Lemari, Atau lainnya" value="{{ $sew->fasilitaslain }}">
                        {{-- <input type="text" name="fasilitaslain" id="fasilitaslain" class="form-control" placeholder="Fasilitas Lain"> --}}
                    </div>
                    <div class="form-group">
                        <div class="mb-3">
                            <label for="formFileMultiple" class="form-label">Tambahkan beberapa foto tempat Anda</label>
                            <input class="form-control" type="file" name="foto" id="formFileMultiple" multiple value="{{ $sew->foto }}">
                        </div>
                        {{-- <input type="text" name="foto" id="foto" class="form-control" placeholder="Foto"> --}}
                    </div>
                    <div class="form-group">
                        <label for="">Selanjutnya, mari deskripsikan rumah Anda</label>
                            <input type="text" name="deskripsi" id="deskripsi" class="form-control" 
                                placeholder="Dekat dengan minimarket, wisata, ibadah, taman bermain, kampus, atau lainnya" value="{{ $sew->deskripsi }}">
                        {{-- <input type="text" name="deskripsi" id="deskripsi" class="form-control" placeholder="Deskripsi"> --}}
                    </div>
                    <div class="form-group">
                        <label for="formFileMultiple" class="form-label">Buat deskripsi tempat anda</label>
                        <textarea class="form-control" name="keterangan" id="validationTextarea" placeholder="Deskripsi" required>{{ $sew->keterangan}}</textarea>
                        <div class="invalid-feedback">
                            Please enter a message in the description.
                        </div>
                        {{-- <input type="text" name="keterangan" id="keterangan" class="form-control" placeholder="Keterangan"> --}}
                    </div>
                    <label for="formFileMultiple" class="form-label">Sekarang, tetapkan harga Anda</label>
                    <div class="form-group input-group col-4">
                        <span class="input-group-text">Rp.</span>
                        <input type="text" name="harga" id="harga" class="form-control" placeholder="Harga" value="{{ $sew->harga }}">
                        <span class="input-group-text" name="harga" id="harga"><small class="text-muted">/ Malam</small></span>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Ubah Data</button>
                    </div>
                </form>
            </div>
        </div>

    </div>
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
    <h5>Title</h5>
    <p>Sidebar content</p>
    </div>
</aside>
<!-- /.control-sidebar -->

<!-- Main Footer -->
<footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">

    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2022-2023 <a href="#">Rifky Ihza Parawangsa</a>.</strong> All rights reserved.
</footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="{{ asset('AdminLTE/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('AdminLTE/dist/js/adminlte.min.js')}}"></script>
</body>
</html>
