{{-- resources/views/dashboard.blade.php --}}
<x-app-layout>
    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-md rounded-md p-6">
                {{-- <x-welcome /> --}}

                {{-- Statistik Jumlah Mahasiswa --}}
                <div class="mt-6 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
                    <div class="bg-blue-100 p-4 rounded-lg shadow text-center">
                        <div class="text-sm font-medium text-blue-800">Jumlah Mahasiswa</div>
                        <div class="text-3xl font-bold text-blue-900">{{ $jumlahMahasiswa }}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
