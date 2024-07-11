@extends("components.default")

@section("content")
    @foreach ($movies as $movie)
        <h2><a href="/movies/{{ $movie->id }}">{{ $movie->title }}</a></h2> 
        <p>{{ $movie->story }}</p>
    @endforeach
@endsection

<aside>
    @foreach ($latestMovies as $movie)
        <p><a href="/movies/{{ $movie->id }}">{{ $movie->title }}</a></p>
    @endforeach
</aside>