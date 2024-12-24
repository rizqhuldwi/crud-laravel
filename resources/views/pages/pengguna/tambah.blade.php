@extends('layout.master', ['title' => 'Tambah Barang'])

@section('content')
    <form action='/pengguna/simpan' method="post">
        @csrf
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama">
        <div class="mb-3">
            <label for="category" class="form-label">Category</label>
            <input type="text" class="form-control" id="category" name="category" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="quantity" class="form-label">Quantity</label>
            <input type="text" class="form-control" id="quantity" name="quantity" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="unit_price" class="form-label">unit_price</label>
            <input type="text" class="form-control" id="unit_price" name="unit_price" aria-describedby="emailHelp">
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
