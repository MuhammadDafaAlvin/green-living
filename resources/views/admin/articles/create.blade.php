<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            Tambah Artikel Baru
        </h2>
    </x-slot>

    <div class="py-6 max-w-4xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-black shadow sm:rounded-lg p-6">
            <form action="{{ route('admin.articles.store') }}" method="POST">
                @csrf
                @include('admin.articles._form', ['article' => null])
                <button type="submit" class="mt-4 bg-yellow-600 text-white px-4 py-2 rounded-xl hover:bg-yellow-700">
                    Simpan
                </button>
            </form>
        </div>
    </div>
</x-app-layout>