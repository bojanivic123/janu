@extends("components.default")

@section("content")
    @foreach ($genreMovies as $movie)
        <p>{{ $movie->title }}</p>
    @endforeach
@endsection

<aside>
    @foreach ($latestMovies as $movie)
        <p><a href="/movies/{{ $movie->id }}">{{ $movie->title }}</a></p>
    @endforeach
</aside>