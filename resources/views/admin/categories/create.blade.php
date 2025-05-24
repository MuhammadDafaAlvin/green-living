<x-app-layout>
    <div class="bg-black min-h-screen text-white">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <h2 class="text-2xl font-semibold mb-4">Tambah Kategori</h2>
            <form action="{{ route('admin.categories.store') }}" method="POST" class="space-y-4">
                @csrf
                <div>
                    <label for="nama" class="block">Nama Kategori</label>
                    <input type="text" name="nama" id="nama" class="w-full p-2 rounded" required>
                </div>
                <div>
                    <button type="submit" class="bg-yellow-600 text-white px-4 py-2 rounded">Simpan Kategori</button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>