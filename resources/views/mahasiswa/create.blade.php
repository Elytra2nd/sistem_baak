@extends('layouts.app')

@section('title', 'Tambah Mahasiswa')

@section('content')
    <div class="container">
        <h2>Tambah Mahasiswa</h2>
        <form action="{{ route('mahasiswa.store') }}" method="POST">
            @include('mahasiswa.form')
        </form>
    </div>
@endsection
