@extends('app')

@section('content')
    <h1>Selamat Datang di Halaman Utama</h1>
@endsection
<form action="{{ route('logout') }}" method="post">
    @csrf
    <button type="submit">Logout</button>
</form>