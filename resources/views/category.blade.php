
@extends('layout.main')

@section('container')
<div class="container">
    <div class="row">
    <h5 class="fw-bold mt-2">Rekomendasi Tempat di {{ $category }}</h5>

<div class="row row-cols-1 row-cols-md-4 g-2">
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

</div>
</div>


@endsection