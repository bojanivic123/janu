@extends("components.default")

@section("content")
    <h2>{{ $movie->title }}</h2>
    <p><a href="/genres/{{ $movie->genre }}">{{ $movie->genre }}</a></p>
    <p>{{ $movie->director }}</p>
    <p>{{ $movie->year_of_realize }}</p>
    <p>{{ $movie->story }}</p>
    @foreach ($movie->comments as $comment)
        <p>{{ $comment->content }} {{ $comment->created_at }}</p>
    @endforeach
    @include("components.createcomment")
@endsection



