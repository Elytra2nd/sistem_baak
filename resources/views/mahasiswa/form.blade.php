@csrf

<div class="mb-3">
    <label>Nama</label>
    <input type="text" name="name" class="form-control" value="{{ old('name', $mahasiswa->user->name ?? '') }}"
        required>
</div>

<div class="mb-3">
    <label>Email</label>
    <input type="email" name="email" class="form-control" value="{{ old('email', $mahasiswa->user->email ?? '') }}"
        required>
</div>

@if (!isset($edit))
    <div class="mb-3">
        <label>Password</label>
        <input type="password" name="password" class="form-control" required>
    </div>

    <div class="mb-3">
        <label>Konfirmasi Password</label>
        <input type="password" name="password_confirmation" class="form-control" required>
    </div>
@endif

<div class="mb-3">
    <label>NIM</label>
    <input type="text" name="nim" class="form-control" value="{{ old('nim', $mahasiswa->nim ?? '') }}" required>
</div>

<div class="mb-3">
    <label>Jurusan</label>
    <input type="text" name="jurusan" class="form-control" value="{{ old('jurusan', $mahasiswa->jurusan ?? '') }}"
        required>
</div>

<div class="mb-3">
    <label>Angkatan</label>
    <input type="text" name="angkatan" class="form-control" value="{{ old('angkatan', $mahasiswa->angkatan ?? '') }}"
        required>
</div>

<div class="mb-3">
    <label>Alamat</label>
    <textarea name="alamat" class="form-control">{{ old('alamat', $mahasiswa->alamat ?? '') }}</textarea>
</div>

<button type="submit" class="btn btn-success">Simpan</button>
<a href="{{ route('mahasiswa.index') }}" class="btn btn-secondary">Kembali</a>
