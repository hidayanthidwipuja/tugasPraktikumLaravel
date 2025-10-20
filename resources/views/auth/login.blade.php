@extends('app')

@section('content')
    <h1>Login</h1>
    <form method="POST" action="/login">
        @csrf
        <div>
            <label>Email:</label>
            <input type="email" name="email" required>
        </div>
        <div>
            <label>Password:</label>
            <input type="password" name="password" required>
        </div>
        <button type="submit">Login</button>
    </form>
    @error('email')
        <p style="color:red;">{{ $message }}</p>
    @enderror
@endsection