@extends('layout.master', ['title' => 'Lihat Barang'])

@section('content')
<a href="{{ route('pengguna.tambah') }}" class="btn btn-primary">Tambah Data</a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Nomor</th>
                <th scope="col">Nama</th>
                <th scope="col">Category</th>
                <th scope="col">Quantity</th>
                <th scope="col">unit_price</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $pengguna)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $pengguna->nama }}</td>
                    <td>{{ $pengguna->category }}</td>
                    <td>{{ $pengguna->quantity }}</td>
                    <td>{{ $pengguna->unit_price }}</td>
                    <td>
                        <a href="{{ route('pengguna.edit', $pengguna->id) }}" class="btn btn-warning">Edit Data</a>
                        <form action="{{ route('pengguna.hapus', $pengguna->id) }}" method="post">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-danger">Hapus Data</button>
                        </form>
                    </td>
                </tr>
                
            @endforeach
        </tbody>
    </table>
@endsection
