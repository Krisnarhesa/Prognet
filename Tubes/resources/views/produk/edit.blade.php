@extends('layout.app')

@section('title','Edit Produk')

@section('content')
<div class="row gy-3">
    <div class="col">
        <div class="card shadow-sm p-4">
            <form action="{{ route('processEditProduk') }}" method="POST">
                @csrf

                <h1 class="mb-3 text-center">Edit Produk</h1>

                <input type="hidden" id="id" name="id" value="{{ $produk->id }}">

                <div class="form-floating mb-3">
                    <input type="text" class="form-control" placeholder="produk" id="produk" name="produk"
                        value="{{ $produk->produk}}" required>
                    <label for="floatingInput">Produk</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="text" class="form-control" placeholder="kategori" id="kategori" name="kategori"
                        required>
                    <label for="floatingInput">Kategori</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="text" class="form-control" placeholder="stok" id="stok" name="stok"
                        value="{{ $produk->stok }}" required>
                    <label for="floatingInput">Stok</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="text" class="form-control" placeholder="harga" id="harga" name="harga"
                        value="{{ $produk->harga }}" required>
                    <label for="floatingInput">Harga</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="text" class="form-control" placeholder="deskipsi" id="deskripsi" name="deskripsi"
                        required>
                    <label for="floatingInput">Deskripsi</label>
                </div>

                <button class="w-100 btn btn-lg btn-primary" type="submit">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection