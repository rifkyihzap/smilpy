@extends('Dashboard.navbar.main')

@section('container')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0">My Post</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item active">My Post</li>
            </ol>
        </div>
        </div>
    </div>
</div>


<!-- Main content -->
<div class="content">
    <div class="card card-info card-outline">
        <div class="card-header">
            <div class="card-tools">
                <a href="/create-mypost"><img src="img/icon/btnpost.png" alt="" width="150"></a>
            </div>
        </div>

        <div class="card-body">
            <table class="table table-boardered table-responsive col-lg-12">
                <tr>
                    <th>Judul</th>
                    <th>Tempat</th>
                    <th>Tipe Tempat</th>
                    <th>Alamat</th>
                    <th>Kategori Kota</th>
                    <th>Fasilitas Utama</th>
                    <th>Fasilitas Umum</th>
                    <th>Foto</th>
                    <th>Harga</th>
                    <th>Deskripsi</th>
                    <th>Aksi</th>
                </tr>
            @foreach ($posts as $post)
                    <tr> 
                        <td>{{ $post->judul }}</td>
                        <td>{{ $post->kategoritempat }}</td>
                        <td>{{ $post->tipetempat }}</td>
                        <td>{{ $post->alamat }}</td>
                        <td>{{ $post->category->lokasi }}</td>
                        <td>{{ $post->futama->futama }} {{ $post->futama->value }}</td>
                        <td>{{ $post->category_fasilitas_umum->fasilitasumum }}</td>
                        <td>{{ $post->image }}</td>
                        <td>{{ $post->harga }}</td>
                        <td>{{ $post->deskripsi }}</td>
                        <td><a href="/posts/{{ $post->slug }}"><i class="bi bi-eye"></i></a> <br>
                            <a href="#"><i class="bi bi-pencil-square"></i></a> <br>
                            <a href="#"><i class="bi bi-trash" style="color: red"></i></a>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>

</div>  
@endsection