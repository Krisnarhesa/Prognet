@extends('layout.app')

@section('title','Edit Pengiriman')

@section('content')
<div class="row gy-3">
    <div class="col">
        <div class="card shadow-sm p-4">
            <form action="{{ route('processEditPengiriman') }}" method="POST">
                @csrf

                <h1 class="mb-3 text-center">Edit Pengiriman</h1>

                <input type="hidden" id="id" name="id" value="{{ $pengiriman->id }}">

                <div class="form-floating mb-3">
                    <input type="date" class="form-control" placeholder="tanggalkirim" id="tanggalkirim"
                        name="tanggalkirim" value="{{ $pengiriman->tanggalkirim}}" required>
                    <label for="floatingInput">Tanggal Kirim</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="date" class="form-control" placeholder="tanggalsampai" id="tanggalsampai"
                        name="tanggalsampai" value="{{ $pengiriman->tanggalsampai}}" required>
                    <label for="floatingInput">Tanggal Sampai</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="text" class="form-control" placeholder="status" id="status" name="status"
                        value="{{ $pengiriman->status }}" required>
                    <label for="floatingInput">Status</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="number" class="form-control" placeholder="IDPembelian" id="IDPembelian"
                        name="IDPembelian" value="{{ $pengiriman->IDPembelian }}" required>
                    <label for="floatingInput">ID Pembelian</label>
                </div>

                <button class="w-100 btn btn-lg btn-primary" type="submit">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection