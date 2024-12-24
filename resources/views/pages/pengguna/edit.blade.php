@extends('layout.master', ['title' => 'Edit Pengguna'])

@section('content')
    <form action='{{ route('pengguna.update', $data->id) }}' method="post">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" value="{{ $data->nama }}">
            <div class="mb-3">
                <label for="category" class="form-label">Category</label>
                <input type="text" class="form-control" id="category" name="category" aria-describedby="emailHelp" value="{{ $data->category }}">
            </div>
            <div class="mb-3">
                <label for="quantity" class="form-label">Quantity</label>
                <input type="text" class="form-control" id="quantity" name="quantity" aria-describedby="emailHelp" value="{{ $data->quantity }}">
            </div>
            <div class="mb-3">
                <label for="unit_price" class="form-label">unit_price</label>
                <input type="text" class="form-control" id="unit_price" name="unit_price" aria-describedby="emailHelp" value="{{ $data->unit_price }}">
                <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
