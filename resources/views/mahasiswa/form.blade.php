@csrf

<div class="grid grid-cols-1 md:grid-cols-2 gap-6">
    <div>
        <label class="block text-sm font-medium text-gray-700">Nama</label>
        <input type="text" name="name"
            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring focus:ring-indigo-200"
            value="{{ old('name', $mahasiswa->user->name ?? '') }}" required>
    </div>

    <div>
        <label class="block text-sm font-medium text-gray-700">Email</label>
        <input type="email" name="email"
            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring focus:ring-indigo-200"
            value="{{ old('email', $mahasiswa->user->email ?? '') }}" required>
    </div>

    @if (!isset($edit))
        <div>
            <label class="block text-sm font-medium text-gray-700">Password</label>
            <input type="password" name="password"
                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring focus:ring-indigo-200" required>
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700">Konfirmasi Password</label>
            <input type="password" name="password_confirmation"
                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring focus:ring-indigo-200" required>
        </div>
    @endif

    <div>
        <label class="block text-sm font-medium text-gray-700">NIM</label>
        <input type="text" name="nim"
            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring focus:ring-indigo-200"
            value="{{ old('nim', $mahasiswa->nim ?? '') }}" required>
    </div>

    <div>
        <label class="block text-sm font-medium text-gray-700">Jurusan</label>
        <input type="text" name="jurusan"
            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring focus:ring-indigo-200"
            value="{{ old('jurusan', $mahasiswa->jurusan ?? '') }}" required>
    </div>

    <div>
        <label class="block text-sm font-medium text-gray-700">Angkatan</label>
        <input type="text" name="angkatan"
            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring focus:ring-indigo-200"
            value="{{ old('angkatan', $mahasiswa->angkatan ?? '') }}" required>
    </div>

    <div class="col-span-1 md:col-span-2">
        <label class="block text-sm font-medium text-gray-700">Alamat</label>
        <textarea name="alamat"
            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring focus:ring-indigo-200">{{ old('alamat', $mahasiswa->alamat ?? '') }}</textarea>
    </div>
</div>

<div class="mt-6 flex justify-end space-x-3">
    <a href="{{ route('mahasiswa.index') }}"
        class="inline-flex items-center px-4 py-2 bg-gray-200 text-sm font-medium text-gray-700 rounded-md hover:bg-gray-300">Kembali</a>
    <button type="submit"
        class="inline-flex items-center px-4 py-2 bg-green-500 text-white text-sm font-medium rounded-md hover:bg-green-600">Simpan</button>
</div>
