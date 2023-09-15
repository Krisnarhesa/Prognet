@extends('layout.app')

@section('title','Add Pengiriman')

@section('content')
<div class="row gy-3">
    <div class="col">
        <div class="card shadow-sm p-4">
            <form action="{{ route('processAddPengiriman') }}" method="POST">
                @csrf

                <h1 class="mb-3 text-center">Add Pengiriman</h1>

                <div class="form-floating mb-3">
                    <input type="date" class="form-control" placeholder="tanggalkirim" id="tanggalkirim"
                        name="tanggalkirim" required>
                    <label for="floatingInput">Tanggal Kirim</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="date" class="form-control" placeholder="tanggalsampai" id="tanggalsampai"
                        name="tanggalsampai" required>
                    <label for="floatingInput">Tanggal Sampai</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="text" class="form-control" placeholder="status" id="status" name="status" required>
                    <label for="floatingInput">Status</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="number" class="form-control" placeholder="IDPembelian" id="IDPembelian"
                        name="IDPembelian" required>
                    <label for="floatingInput">ID Pembelian</label>
                </div>

                <button class="w-100 btn btn-lg btn-primary" type="submit">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection