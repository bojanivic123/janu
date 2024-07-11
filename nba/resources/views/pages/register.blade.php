@extends("components.default")

@section("content")
    <form method="POST" action="{{ url("register") }}">
        @csrf
        <label for="name">Name</label><br>
        <input type="text" id="name" name="name" required><br>
        <label for="email">Email</label><br>
        <input type="email" id="email" name="email" required><br>
        <label for="password">Password</label><br>
        <input type="password" id="password" name="password" required><br>
        <label for="password_confirmation">Confirm password</label><br>
        <input type="password" id="password_confirmation" name="password_confirmation" required><br><br>
        <button type="submit">Register</button><br>
    </form>
    @include("components.errors")
    @include("components.status")
@endsection

