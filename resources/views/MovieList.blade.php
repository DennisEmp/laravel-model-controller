@extends('layout.main-layout')

@section('content')
    
    <h1 class="text-white text-center my-5">Lista dei Film</h1>
    <div class="container d-flex">
        @foreach ($movies as $movie)

        <div class="container-fluid py-5">
            <div class="container">
              <ul class="list-group">
                <li class="list-group-item d-flex justify-content-between align-items-center">
                  <div class="d-flex flex-column align-items-start">
                    <h2 class="movie-title text-white mb-3">{{ $movie['title'] }}</h2>
                    <p class="movie-original-title text-muted">{{ $movie['original_title'] }}</p>
                  </div>
                  <div class="d-flex flex-column align-items-end">
                    <span class="badge badge-light mb-3">{{ $movie['nationality'] }}</span>
                    <span class="badge badge-light mb-3">{{ $movie['date'] }}</span>
                    <span class="badge badge-danger">{{ $movie['vote'] }}</span>
                  </div>
                </li>
              </ul>
            </div>
        </div>
              
        @endforeach
    </div>

    <style>
        .movie-title {
            font-size: 1.5em;
            font-weight: bold;
        }

        .movie-original-title {
            font-size: 1.2em;
            font-style: italic;
        }
    </style>
@endsection