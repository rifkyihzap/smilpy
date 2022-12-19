@extends('layout.nav')

@section('container')
<p class="text-center mt-4">Smilpy Homestay memudahkan perjalanan dan liburan kalian.</p>

<h7 class="card-title fw-bold"> {{ $lokasi }}</h7>
<p class="card-text text-secondary">Berjarak {{ $jarak }} <br> {{ $tanggal }} </p>
<a href="/jimbaran" class="card-text fw-bold">{{ $harga }}</a>
<p>test github a</p>
<h1>test github</h1>
@endsection