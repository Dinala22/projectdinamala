@extends('layouts.main')
@section('content')
<div class="container mt-3">
    <form action="{{route('roles.store')}}" method="post" enctype="multipart/form-data">
        @csrf
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h2>Tambah</h2>
                    <div class="form-group mb-2">
                        <label for="role_name">Role</label>
                        <input type="text" class="form-control @error('role_name') is-invalid @enderror" id="role_name" placeholder="Nama role" name="role_name">
                        @error('role_name') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="card-footer mb-2">
                    <button type="submit" class="btn btn-success">Simpan</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

