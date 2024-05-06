@extends('frame.main')
@section('content')
    <h1><a href="/products"><i class="fa-solid fa-arrow-left"></i></a>Data Produk {{ $data->name }}</h1>
    <div class="row">
        <div class="col-4">
            <img src="{{ asset('storage/products-img/' . $data->img) }}" alt="" class="img-fluid">
        </div>
    </div>
    <h3>{{ $data->price }}</h3>
@endsection
