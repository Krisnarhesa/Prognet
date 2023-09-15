@extends('layout.app')

@section('title','Add Produk')

@section('content')
<div class="row gy-3">
    <div class="col">
        <div class="card shadow-sm p-4">
            <form action="{{ route('processAddProduk') }}" method="POST">
                @csrf

                <h1 class="mb-3 text-center">Add Produk</h1>

                <div class="form-floating mb-3">
                    <input type="text" class="form-control" placeholder="produk" id="produk" name="produk" required>
                    <label for="floatingInput">Produk</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="text" class="form-control" placeholder="kategori" id="kategori" name="kategori"
                        required>
                    <label for="floatingInput">Kategori</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="number" class="form-control" placeholder="stok" id="stok" name="stok" required>
                    <label for="floatingInput">Stok</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="number" class="form-control" placeholder="harga" id="harga" name="harga" required>
                    <label for="floatingInput">Harga</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="text" class="form-control" placeholder="deskripsi" id="deskripsi" name="deskripsi"
                        required>
                    <label for="floatingInput">Deskripsi</label>
                </div>

                <button class="w-100 btn btn-lg btn-primary" type="submit">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection