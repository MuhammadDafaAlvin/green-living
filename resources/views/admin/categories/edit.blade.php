<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            Edit Kategori: {{ $category->nama_kategori }}
        </h2>
    </x-slot>

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-black shadow sm:rounded-lg p-6">
            <h3 class="text-2xl font-bold mb-6">Edit Kategori: {{ $category->nama }}</h3>
            <form action="{{ route('admin.categories.update', $category->id) }}" method="POST" class="space-y-6">
                @csrf
                @method('PUT')
                <div>
                    <label for="nama_kategori" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Nama
                        Kategori</label>
                    <input type="text" name="nama_kategori" id="nama_kategori"
                        class="w-full rounded-xl border-none dark:bg-[#292a2b] dark:text-white mt-2"
                        value="{{ $category->nama_kategori }}" required>
                </div>

                <div>
                    <button type="submit"
                        class=" bg-yellow-600 text-white px-4 py-2 rounded-xl hover:bg-yellow-700 text-sm">
                        Update Kategori
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>