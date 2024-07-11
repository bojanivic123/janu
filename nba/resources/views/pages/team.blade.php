@extends("components.default")

@section("content")
    <p>{{ $team->name }}</p>
    <p>{{ $team->email }}</p>
    <p>{{ $team->address }} {{ $team->city }}</p>
    <ul>
        @foreach ($team->players as $player)
            <li><a href="/players/{{ $player->id }}">{{ $player->first_name }} {{ $player->last_name }}</a></li>
        @endforeach
    </ul>
    @foreach ($team->comments as $comment)
        <p>{{ $comment->content }}</p>
    @endforeach
@endsection


