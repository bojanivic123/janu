<form method="POST" action="{{ url("createcomment") }}">
    @csrf
    <label for="content">Content</label><br>
    <textarea id="content" name="content" required></textarea><br><br>
    <input type="hidden" name="movie_id" value="{{ $movie->id }}" required> 
    <button type="submit">Add comment</button><br>
</form>

@include("components.errors")
@include("components.status")
