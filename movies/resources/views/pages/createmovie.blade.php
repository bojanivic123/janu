@extends("components.default")

@section("content")
    <form method="POST" action="{{ url("create") }}">
        @csrf
        <label for="title">Title</label><br>
        <input type="text" id="title" name="title" required><br>
        <label for="genre">Genre</label><br>
        <input type="text" id="genre" name="genre" required><br>
        <label for="director">Director</label><br>
        <input type="text" id="director" name="director"><br>
        <label for="year">Year</label><br>
        <input type="text" id="year" name="year_of_realize"><br>
        <label for="story">Story</label><br>
        <textarea id="story" name="story"></textarea><br><br>
        <button type="submit">Add movie</button> 
    </form>
    @include("components.errors")
    @include("components.status")
@endsection


