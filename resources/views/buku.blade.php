@extends('app')

@section('content')
    <h1>Selamat datang di halaman Buku</h1>
    <div>
        <a href="{{ route('buku.create') }}"><button>Tambah buku</button></a>
    </div>

    <table border="1">
        <thead>
            <tr>
                <th>Judul</th>
                <th>Pengarang</th>
                <th>Penerbit</th>
                <th>Kategori</th> <th>Opsi</th>
            </tr>
        </thead>

        <tbody>
            @forelse ($data as $buku)
                <tr>
                    <td>{{ $buku->judul }}</td>
                    <td>{{ $buku->pengarang }}</td>
                    <td>{{ $buku->penerbit }}</td>
                    
                    <td>{{ $buku->kategoriBuku->nama_kategori }}</td> 
                    
                    <td>
                        <a href="{{ route('buku.edit', $buku->id) }}"><button>Edit</button></a>
                        
                        <form action="{{ route('buku.destroy', $buku->id) }}" method="post" style="display:inline;"
                            onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Hapus</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" style="text-align: center;">Tidak ada data</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    @endsection