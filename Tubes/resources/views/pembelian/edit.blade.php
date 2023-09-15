@extends('layout.app')

@section('title','Edit Pembelian')

@section('content')
<div class="row gy-3">
    <div class="col">
        <div class="card shadow-sm p-4">
            <form action="{{ route('processEditPembelian') }}" method="POST">
                @csrf

                <h1 class="mb-3 text-center">Edit Pembelian</h1>

                <input type="hidden" id="id" name="id" value="{{ $pembelian->id }}">

                <div class="form-floating mb-3">
                    <input type="number" class="form-control" placeholder="IDCustomer" id="IDCustomer"
                        name="IDCustomer" value="{{ $pembelian->IDCustomer}}" required>
                    <label for="floatingInput">ID Customer</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="number" class="form-control" placeholder="totalproduk" id="totalproduk"
                        name="totalproduk" value="{{ $pembelian->totalproduk}}" required>
                    <label for="floatingInput">Total Produk</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="number" class="form-control" placeholder="totalpembelian" id="totalpembelian"
                        name="totalpembelian" value="{{ $pembelian->totalpembelian }}" required>
                    <label for="floatingInput">Total Pembelian</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="number" class="form-control" placeholder="IDAdmin" id="IDAdmin" name="IDAdmin"
                        value="{{ $pembelian->IDAdmin }}" required>
                    <label for="floatingInput">ID Admin</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="date" class="form-control" placeholder="tanggal" id="tanggal" name="tanggal"
                        value="{{ $pembelian->tanggal }}" required>
                    <label for="floatingInput">Tanggal</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="text" class="form-control" placeholder="status" id="status" name="status"
                        value="{{ $pembelian->status }}" required>
                    <label for="floatingInput">Status</label>
                </div>

                <button class="w-100 btn btn-lg btn-primary" type="submit">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection