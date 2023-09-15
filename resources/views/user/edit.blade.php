@extends('layout.app')

@section('title','Edit User')

@section('content')
<div class="row gy-3">
    <div class="col">
        <div class="card shadow-sm p-4">
            <form action="{{ route('processEditUser') }}" method="POST">
                @csrf

                <h1 class="mb-3 text-center">Edit User</h1>

                <input type="hidden" id="id" name="id" value="{{ $user->id }}">

                <div class="form-floating mb-3">
                    <input type="text" class="form-control" placeholder="name" id="name" name="name" value="{{ $user->name}}" required>
                    <label for="floatingInput">Nama</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="text" class="form-control" placeholder="email" id="email" name="email" value="{{ $user->email }}"  required>
                    <label for="floatingInput">Email</label>
                </div>
                
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" placeholder="is_admin" id="is_admin" name="is_admin" value="{{ $user->is_admin }}"  required>
                    <label for="floatingInput">Role Status</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="text" class="form-control" placeholder="umur" id="umur" name="umur" value="{{ $user->umur }}"  required>
                    <label for="floatingInput">Umur</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="text" class="form-control" placeholder="jeniskelamin" id="jeniskelamin" name="jeniskelamin" value="{{ $user->jeniskelamin }}"  required>
                    <label for="floatingInput">Jenis Kelamin</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="text" class="form-control" placeholder="alamat" id="alamat" name="alamat" value="{{ $user->alamat }}"  required>
                    <label for="floatingInput">Alamat</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="text" class="form-control" placeholder="notelp" id="notelp" name="notelp" value="{{ $user->notelp }}"  required>
                    <label for="floatingInput">No Telepon</label>
                </div>

                <button class="w-100 btn btn-lg btn-primary" type="submit">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection