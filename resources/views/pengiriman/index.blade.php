@extends('layout.app')

@section('title','List Pengiriman')

@section('content')
<div class="row gy-3">
    <div class="col">
        <div class="card shadow-sm p-4">
            <div class="col-md-12 mb-4">
                <a href="{{ url('add-pengiriman') }}"><button class="btn btn-primary text-end">Add</button></a>
            </div>
            <div class="col-md-12">
                <table class="table table-responsive">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Tanggal Kirim</th>
                            <th scope="col">Tanggal Sampai</th>
                            <th scope="col">Status</th>
                            <th scope="col">ID Pembelian</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($pengirimans as $index => $pengiriman)
                        <tr>
                            <td>{{ $index+1 }}</td>
                            <td>{{ $pengiriman->tanggalkirim }}</td>
                            <td>{{ $pengiriman->tanggalsampai }}</td>
                            <td>{{ $pengiriman->status }}</td>
                            <td>{{ $pengiriman->IDPembelian }}</td>
                            <td>
                                <a href="{{ url('edit-pengiriman') }}/{{ $pengiriman->id }}"><button
                                        class="btn btn-success">Edit</button></a>
                                <a href="{{ route('processDeletePengiriman',$pengiriman->id) }}"><button
                                        class="btn btn-warning">Delete</button></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection