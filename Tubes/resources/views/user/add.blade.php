@extends('layout.app')

@section('title','Add User')

@section('content')
<div class="row gy-3">
    <div class="col">
        <div class="card shadow-sm p-4">
            <form action="{{ route('processAddUser') }}" method="POST">
                @csrf

                <h1 class="mb-3 text-center">Add User</h1>

                <div class="form-floating mb-3">
                    <input type="text" class="form-control" placeholder="name" id="name" name="name" required>
                    <label for="floatingInput">Nama</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="text" class="form-control" placeholder="email" id="email" name="email" required>
                    <label for="floatingInput">Email</label>
                </div>
                
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" placeholder="password" id="password" name="password" required>
                    <label for="floatingInput">Password</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="text" class="form-control" placeholder="is_admin" id="is_admin" name="is_admin" required>
                    <label for="floatingInput">Role Status</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="text" class="form-control" placeholder="umur" id="umur" name="umur"  required>
                    <label for="floatingInput">Umur</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="text" class="form-control" placeholder="jeniskelamin" id="jeniskelamin" name="jeniskelamin"  required>
                    <label for="floatingInput">jenis Kelamin</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="text" class="form-control" placeholder="alamat" id="alamat" name="alamat" required>
                    <label for="floatingInput">Alamat</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="text" class="form-control" placeholder="notelp" id="notelp" name="notelp" required>
                    <label for="floatingInput">No Telepon</label>
                </div>

                <button class="w-100 btn btn-lg btn-primary" type="submit">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection