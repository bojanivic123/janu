@extends("components.default")

@section("content")
    <form method="POST" action="{{ url("login") }}">
        @csrf
        <label for="email">Email</label><br>
        <input type="email" id="email" name="email" required><br>
        <label for="password">Password</label><br>
        <input type="password" id="password" name="password" required><br><br>
        <button type="submit">Login</button><br>
    </form>
    @include("components.errors")
    @include("components.status")
@endsection

