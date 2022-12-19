
@extends('layout.main')

@section('container')
<p class="text-center mt-4">Smilpy Homestay memudahkan perjalanan dan liburan kalian.</p>

@foreach ($posts as $post)
<a href="/posts/{{ $post["slug"] }}" class="text-decoration-none" style="color: black">
    <img src="img/{{ $post ["image"] }}" alt=" {{ $post ["lokasi"] }}" width="300"> <br>
    <h7 class="card-title fw-bold"> {{ $post ["lokasi"] }}</h7>
    <p class="card-text text-secondary">Berjarak {{ $post ["jarak"] }} <br> {{ $post ["tanggal"] }} </p>
    <dt class="card-text fw-bold">{{ $post ["harga"] }} <small class="text-muted">Malam</small></dt>
    </a>
@endforeach



@endsection