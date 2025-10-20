@extends('app')

@section('content')
    <h1>Welcome to Edit Buku page</h1>
    
    <form action="{{ route('buku.update', $buku->id) }}" method="post">
        @csrf
        @method('PUT') <div>
            <label for="judul">Judul</label>
            <input type="text" name="judul" id="judul" value="{{ $buku->judul }}" required>
        </div>
        <div>
            <label for="pengarang">Pengarang</label>
            <input type="text" name="pengarang" id="pengarang" value="{{ $buku->pengarang }}" required>
        </div>
        <div>
            <label for="penerbit">Penerbit</label>
            <input type="text" name="penerbit" id="penerbit" value="{{ $buku->penerbit }}" required>
        </div>

        <div>
            <label for="kategori_buku_id">Kategori Buku</label>
            <select name="kategori_buku_id" id="kategori_buku_id" required>
                <option value="">-- Pilih Kategori --</option>
                
                @foreach($kategori as $kat)
                    <option value="{{ $kat->id }}" 
                        {{ $buku->kategori_buku_id == $kat->id ? 'selected' : '' }}>
                        
                        {{ $kat->nama_kategori }}
                    </option>
                @endforeach
                
            </select>
        </div>
        <div>
            <button type="submit">Ubah</button>
        </div>
    </form>
@endsection