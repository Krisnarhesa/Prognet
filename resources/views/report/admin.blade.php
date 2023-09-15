@extends('adminLayout.app')

@section('title', 'report')

@section('header', 'REPORT')

@section('content')
    <div class="row gy-3">

        <div class="col">
            <div class="card">
                <div class="card-header">
                    <form action="" method="GET">
                        <div class="row">
                            <div class="col-md-3">
                                <<label>Filter data berdasarkan Username</label>
                                <input type="text" name="searchuser" value="{{ Request::get('searchuser') }}"
                                    class="form-control" />
                            </div>
                            <div class="col-md-3">
                                <label>Filter data berdasarkan Role Status</label>
                                <select name="searchis_admin" class="form-select">
                                    <option value="">Role</option>
                                    <option value="Admin" {{ Request::get('is_admin') === 'Admin' }}>Admin</option>
                                    <option value="Customer" {{ Request::get('is_admin') === 'Customer' }}>Customer</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <label>Filter data berdasarkan Umur</label>
                                <input type="text" name="searchumur" value="{{ Request::get('searchumur') }}"
                                    class="form-control" />
                            </div>
                            <div class="col-md-3">
                                <label>Filter data berdasarkan Jenis Kelamin</label>
                                <input type="text" name="searchjeniskelamin" value="{{ Request::get('searchjeniskelamin') }}"
                                    class="form-control" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <br />
                            <button type="submit" class="btn btn-primary">Filter</button>
                        </div>
                    </form>
                </div>

            </div>
            <br />

            <div class="card shadow-sm p-4">
                <div class="col-md-12">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Username</th>
                                <th scope="col">Email</th>
                                <th scope="col">Role Status</th>
                                <th scope="col">Umur</th>
                                <th scope="col">Jenis Kelamin</th>
                                <th scope="col">Alamat</th>
                                <th scope="col">No Telepon</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($semuaUser as $index => $user)
                                    <tr>
                                        <td>{{ $index + 1 }}</td>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ $user->is_admin }}</td>
                                        <td>{{ $user->umur }}</td>
                                        <td>{{ $user->jeniskelamin }}</td>
                                        <td>{{ $user->alamat }}</td>
                                        <td>{{ $user->notelp }}</td>
                                    </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection