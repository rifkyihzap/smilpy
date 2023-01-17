
@extends('layout.main')

@section('container')
<h5 class="fw-bold mt-2">Rekomendasi Tempat</h5>
<div class="container">
    <div class="row">
        @foreach ($categories as $category)
        <div class="col">
            <a href="/categories/{{ $category->slug }}" class="text-decoration-none fw-bold text-center" style="color: black">
            <img src="img/{{ $category->image }}" alt="" width="80" height="80" class="rounded-circle"> <br>
            {{ $category->lokasi }}</a>
        </div>
        @endforeach
    </div>
</div>

<div class="row row-cols-1 row-cols-md-4 g-2 mt-1">
    @foreach ($posts as $post)
        <div class="col">
            <div class="card h-100">
                <a href="/posts/{{ $post->slug }}" class="text-decoration-none" style="color: black">
                    <img src="/img/{{ $post->image }}" alt=" {{ $post->judul }}" class="card-img-top">
                    <div class="card-body">
                        <h7 class="card-title fw-bold"> {{ $post->judul }}</h7>
                        <p class="card-text text-secondary">Memiliki {{ $post->categoryfasilitasutama_id }} {{ $post->categoryfasilitasumum_id }} </p>
                        <dt class="card-text fw-bold">{{ $post->harga }} <small class="text-muted">Malam</small></dt>
                    </div>
                </a>
            </div>
        </div> 
    @endforeach
</div>
@endsection