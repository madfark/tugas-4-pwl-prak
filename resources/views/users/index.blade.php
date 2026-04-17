@extends('layouts.app')

@section('content')

<h3>Data Users</h3>

<a href="{{ route('users.create') }}"
   class="btn btn-primary mb-3">
    + Tambah User
</a>

<table class="table table-bordered">

    <thead>
        <tr>
            <th>NPM</th>
            <th>Nama</th>
            <th>Kode Jurusan</th>
            <th>Angkatan</th>
            <th>Urutan</th>
            <th>Aksi</th>
        </tr>
    </thead>

    <tbody>

        @foreach($users as $user)

        <tr>
            <td>{{ $user->npm }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->kode_jurusan }}</td>
            <td>{{ $user->angkatan }}</td>
            <td>{{ $user->urutan }}</td>

            <td>

                <a href="{{ route('users.edit', $user->npm) }}"
                   class="btn btn-warning btn-sm">
                    Edit
                </a>

                <form action="{{ route('users.destroy', $user->npm) }}"
                      method="POST"
                      style="display:inline;">

                    @csrf
                    @method('DELETE')

                    <button class="btn btn-danger btn-sm">
                        Hapus
                    </button>

                </form>

            </td>

        </tr>

        @endforeach

    </tbody>

</table>

@endsection