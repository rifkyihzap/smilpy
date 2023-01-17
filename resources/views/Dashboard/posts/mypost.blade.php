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
            <table class="table table-boardered">
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
                {{-- @foreach ($posts as $post)
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
                @endforeach --}}
                
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
@endsection