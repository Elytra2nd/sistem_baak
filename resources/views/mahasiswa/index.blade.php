@extends('layouts.app')

@section('title', 'Data Mahasiswa')

@section('content')
    <div class="container">
        <h2>Data Mahasiswa</h2>

        @can('create-mahasiswa')
            <a href="{{ route('mahasiswa.create') }}" class="btn btn-primary mb-3">Tambah Mahasiswa</a>
        @endcan

        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>NIM</th>
                    <th>Jurusan</th>
                    <th>Angkatan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($mahasiswas as $mhs)
                    <tr>
                        <td>{{ $mhs->user->name }}</td>
                        <td>{{ $mhs->user->email }}</td>
                        <td>{{ $mhs->nim }}</td>
                        <td>{{ $mhs->jurusan }}</td>
                        <td>{{ $mhs->angkatan }}</td>
                        <td>
                            @can('edit-mahasiswa')
                                <a href="{{ route('mahasiswa.edit', $mhs->id) }}" class="btn btn-sm btn-warning">Edit</a>
                            @endcan

                            @can('delete-mahasiswa')
                                <form action="{{ route('mahasiswa.destroy', $mhs->id) }}" method="POST"
                                    style="display:inline-block;">
                                    @csrf @method('DELETE')
                                    <button onclick="return confirm('Yakin hapus?')" class="btn btn-sm btn-danger">Hapus</button>
                                </form>
                            @endcan
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
