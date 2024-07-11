@extends("components.default")

@section("content")
    @foreach ($cars as $car)
        <p><a href="/cars/{{ $car->id }}">{{ $car->title }}</a></p>
    @endforeach
@endsection



