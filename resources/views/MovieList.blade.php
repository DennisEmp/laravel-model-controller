@extends('layout.main-layout')

@section('content')
    <h1>Lista film</h1>
    <div class="container">
        @foreach ($movies as $movie)
            <li>{{ $movie['id'] }} - {{ $movie['title'] }} - {{ $movie['original_title'] }} - {{ $movie['nationality'] }} - {{ $movie['date'] }} - {{ $movie['vote'] }}</li>    
        @endforeach
    </div>
@endsection