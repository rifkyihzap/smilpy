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
            <input type="text" class="form-control" placeholder="Search" aria-label="Search" aria-describedby="button-addon2">
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
    <a href="/">
    <img src="/img/smilpy.png" alt="Smilpy Logo" class="brand-image" width="180" height="70" style="opacity: .8">
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
                <div class="card-tools">
                    <a href="{{ route('create-mypost') }}" class="btn btn-success">Upload Sekarang <i class="bi bi-plus-square"></i></a>
                </div>
            </div>

            <div class="card-body">
                <table class="table table-boardered">
                    <tr>
                        <th>Judul</th>
                        <th>title</th>
                        <th>slug</th>
                        <th>excerpt</th>
                        <th>body</th>
                        <th>Jenis Tempat</th>
                        <th>Alamat</th>
                        <th>Jumlah Fasilitas Umum</th>
                        <th>Fasilitas Umum</th>
                        <th>Fasilitas Lain</th>
                        <th>Foto</th>
                        <th>Deskripsi</th>
                        <th>Keterangan</th>
                        <th>Harga</th>
                        <th>Aksi</th>
                    </tr>

                    @foreach ($posts as $post)
                        <tr>
                            <td>{{ $post->judul }}</td>
                            <td>{{ $post->title }}</td>
                            <td>{{ $post->slug }}</td>
                            <td>{{ $post->excerpt }}</td>
                            <td>{{ $post->body }}</td>
                            <td>{{ $post->jenistmpt }}</td>
                            <td>{{ $post->alamat }}</td>
                            <td>{{ $post->jmlhfasilitas }}</td>
                            <td>{{ $post->plhnfasilitas }}</td>
                            <td>{{ $post->fasilitaslain }}</td>
                            <td>{{ $post->foto }}</td>
                            <td>{{ $post->deskripsi }}</td>
                            <td>{{ $post->keterangan }}</td>
                            <td>{{ $post->harga }}</td>
                            <td><a href="/dashboard/mypost/{{ $post->slug }}"><i class="bi bi-eye"></i></a> 
                                <a href="{{ url('edit-mypost') }}"><i class="bi bi-pencil-square"></i></a> 
                                <a href="{{ url('delete-mypost') }}"><i class="bi bi-trash" style="color: red"></i></a>
                            </td>
                        </tr>
                    @endforeach
                    {{-- @foreach ($dtsewa as $item)
                    <tr>
                        {{-- <td>{{ $item->judul }}</td>
                        <td>{{ $item->jenistmpt }}</td>
                        <td>{{ $item->alamat }}</td>
                        <td>{{ $item->jmlhfasilitas }}</td>
                        <td>{{ $item->plhnfasilitas }}</td>
                        <td>{{ $item->fasilitaslain }}</td>
                        <td>{{ $item->foto }}</td>
                        <td>{{ $item->deskripsi }}</td>
                        <td>{{ $item->keterangan }}</td>
                        <td>{{ $item->harga }}</td> --}}
                        {{-- <td>
                            <a href="{{ url('edit-mypost',$item->id) }}"><i class="bi bi-pencil-square"></i></a> 
                            <a href="{{ url('delete-mypost',$item->id) }}"><i class="bi bi-trash" style="color: red"></i></a>
                        </td>
                    </tr>
                    @endforeach --}}
                </table>
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
