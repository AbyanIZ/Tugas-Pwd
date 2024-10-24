@extends('layouts.app')

@section('content')
    <h1>Hasil Pencarian</h1>

    @if($movies->isEmpty())
        <p>Tidak ada film ditemukan.</p>
    @else
        <div class="movies-list">
            @foreach($movies as $movie)
                <div class="movie-item">
                    <div class="movie-image">
                        <img src="{{ $movie->image }}" alt="{{ $movie->title }}">
                    </div>
                    <div class="movie-info">
                        <h2>{{ $movie->title }}</h2>
                        <p>{{ $movie->description }}</p>
                        <p><a href="#">{{ $movie->comments_count }} Komentar</a></p>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
@endsection
