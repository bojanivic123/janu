@extends("components.default")

@section("content")
    <p>{{ $player->first_name }} {{ $player->last_name }}</p>
    <p><a href="/teams/{{ $player->team->id }}">{{ $player->team->name }}</a></p>
@endsection

