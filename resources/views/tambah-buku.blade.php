@extends('app')

@section('content')
    <h1>Welcome to Tambah Buku page</h1>
    
    <form action="{{ route('buku.store') }}" method="post">
        @csrf
        <div>
            <label for="judul">Judul</label>
            <input type="text" name="judul" id="judul" required>
        </div>
        <div>
            <label for="pengarang">Pengarang</label>
            <input type="text" name="pengarang" id="pengarang" required>
        </div>
        <div>
            <label for="penerbit">Penerbit</label>
            <input type="text" name="penerbit" id="penerbit" required>
        </div>
        <div>
            <label for="kategori_buku_id">Kategori Buku</label>
            <select name="kategori_buku_id" id="kategori_buku_id" required>
                <option value="">-- Pilih Kategori --</option>
                
                @foreach($kategori as $kat)
                    <option value="{{ $kat->id }}">{{ $kat->nama_kategori }}</option>
                @endforeach
                
            </select>
        </div>
        <div>
            <button type="submit">Simpan</button>
        </div>
    </form>
@endsection