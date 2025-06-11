<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            Tambah Kategori
        </h2>
    </x-slot>
    <div class="bg-black min-h-screen text-white">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <form action="{{ route('admin.categories.store') }}" method="POST" class="space-y-4">
                @csrf
                <div>
                    <label for="nama_kategori" class="block">Nama Kategori</label>
                    <input type="text" name="nama_kategori" id="nama_kategori" class="bg-black w-1/2 p-2 rounded mt-2 text-gray-300 font-semibold" required>
                </div>
                <div>
                    <button type="submit" class="bg-yellow-600 text-white px-4 py-2 rounded text-sm font-semibold">Simpan Kategori</button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>