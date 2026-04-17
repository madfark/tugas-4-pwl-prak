@extends('layouts.app')

@section('content')

<h3>Tambah User</h3>

<form action="{{ route('users.store') }}" method="POST">

    @csrf

    <div class="mb-3">
        <label>Nama</label>

        <input type="text"
               name="name"
               class="form-control">
    </div>

    <div class="mb-3">
        <label>Kode Jurusan</label>

        <input type="text"
               name="kode_jurusan"
               class="form-control"
               value="55201">
    </div>

    <div class="mb-3">
        <label>Angkatan</label>

        <input type="text"
               name="angkatan"
               class="form-control"
               placeholder="22">
    </div>

    <div class="mb-3">
        <label>Urutan</label>

        <input type="text"
               name="urutan"
               class="form-control"
               placeholder="001">
    </div>

    <button type="submit"
            class="btn btn-success">
        Simpan
    </button>

    <a href="{{ route('users.index') }}"
       class="btn btn-secondary">
        Kembali
    </a>

</form>

@endsection