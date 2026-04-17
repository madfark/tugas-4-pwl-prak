@extends('layouts.app')

@section('content')

<h3>Edit User</h3>

<form action="{{ route('users.update', $user->npm) }}"
      method="POST">

    @csrf
    @method('PUT')

    <div class="mb-3">
        <label>Nama</label>

        <input type="text"
               name="name"
               class="form-control"
               value="{{ $user->name }}">
    </div>

    <div class="mb-3">
        <label>Kode Jurusan</label>

        <input type="text"
               name="kode_jurusan"
               class="form-control"
               value="{{ $user->kode_jurusan }}">
    </div>

    <div class="mb-3">
        <label>Angkatan</label>

        <input type="text"
               name="angkatan"
               class="form-control"
               value="{{ $user->angkatan }}">
    </div>

    <div class="mb-3">
        <label>Urutan</label>

        <input type="text"
               name="urutan"
               class="form-control"
               value="{{ $user->urutan }}">
    </div>

    <button type="submit"
            class="btn btn-primary">
        Update
    </button>

    <a href="{{ route('users.index') }}"
       class="btn btn-secondary">
        Kembali
    </a>

</form>

@endsection