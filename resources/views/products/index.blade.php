@extends('frame.main')
@section('content')
    <h1>Daftar Produk <a href="/products/create" class="btn btn-primary"><i class="fa-solid fa-plus"></i></a></h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nama</th>
                <th scope="col">Deskripsi</th>
                <th scope="col">Harga</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ Str::limit($product->description, 20) }}</td>
                    <td>{{ $product->price }}</td>
                    <td>
                        <a href="/products/{{ $product->id }}/edit" class="badge btn bg-info">Ubah</a>
                        <a href="#" class="badge btn bg-danger">Hapus</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
