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
    <div class="card">
        <img src="img/icon/header.png" alt="" width="1083">
        <div class="card-header text-center">
            <h1>Langkah-langkah menjadi Tuan Rumah di Smilpy</h1>
        </div>
        <div class="card-body">
        <img src="img/icon/Langkah.png" alt="" width="1000">
        </div>
        <div class="card-footer text-center">
            <a href="/create-mypost1"><img src="img/icon/Posting.png" alt="" width="200"></a>
        </div>
    </div>
    
</div>  

@endsection