
@extends('layout.main')

@section('container')
<img src="img/{{ $post ["image"] }}" alt=" {{ $post ["lokasi"] }}" width="300"> <br>
    <h7 class="card-title fw-bold"> {{ $post ["lokasi"] }}</h7>
    <p class="card-text text-secondary">Berjarak {{ $post ["jarak"] }} <br> {{ $post ["tanggal"] }} </p>
    <dt class="card-text fw-bold">{{ $post ["harga"] }} <small class="text-muted">Malam</small></dt>
    </a>
@endsection