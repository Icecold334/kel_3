@extends('frame.main')
@section('content')
    <h1>Tambah Produk</h1>
    <form action="/products" method="post">
        @csrf
        @method('POST')
        <div class="row">
            <div class="col-xl-6">
                <div class="row">
                    <div class="col-8">
                        <div class="mb-3">
                            <label for="name" class="form-label">Nama Produk</label>
                            <input type="text" class="form-control" onkeyup="validate('name')" id="name"
                                name="name" placeholder="Nama Produk">
                            <div class="valid-feedback">
                                Input berhasil divalidasi.
                            </div>
                            <div class="invalid-feedback" id="nameerror">
                                Looks good!
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="mb-3">
                            <label for="price" class="form-label">Harga Produk</label>
                            <input type="text" class="form-control" id="price" onkeyup="validate('price')"
                                name="price" placeholder="Harga Produk">
                            <div class="valid-feedback">
                                Input berhasil divalidasi.
                            </div>
                            <div class="invalid-feedback" id="priceerror">
                                Looks good!
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Deskripsi</label>
                    <textarea class="form-control" id="description" rows="4" name="description" placeholder="Deskripsi Produk"></textarea>
                </div>
                <div class="mb-3 ">
                    <a href="/products" class="btn btn-outline-primary">Kembali</a>
                    <button type="submit" class=" btn btn-primary">Simpan</button>
                </div>
            </div>
        </div>
    </form>
@endsection
