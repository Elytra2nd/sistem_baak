@extends('layouts.app')

@section('title', 'Edit Mahasiswa')

@section('content')
<div class="container">
    <h2>Edit Mahasiswa</h2>
    <form action="{{ route('mahasiswa.update', $mahasiswa->id) }}" method="POST">
        @method('PUT')
        @php($edit = true)
        @include('mahasiswa.form')
    </form>
</div>
@endsection
