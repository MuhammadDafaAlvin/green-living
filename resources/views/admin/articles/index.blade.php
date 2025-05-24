<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            Lihat dan kelola semua entri produk.
        </h2>
    </x-slot>

    <div class="py-6 max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-black shadow sm:rounded-lg p-6">
            <div class="flex justify-between items-center mb-6">
                <h1 class="text-2xl font-bold">Artikel</h1>
                <a href="{{ route('admin.articles.create') }}"
                    class="bg-yellow-600 text-sm rounded-xl text-white px-4 py-2 hover:bg-yellow-700">
                    Tambah Artikel
                </a>
            </div>

            @if(session('success'))
                <div class="bg-green-100 text-green-700 px-4 py-2 rounded mb-4">
                    {{ session('success') }}
                </div>
            @endif

            <table class="text-sm w-full table-auto bg-white dark:bg-black text-black dark:text-white rounded">
                <thead>
                    <tr class="bg-gray-100 dark:bg-[#292a2b] text-left">
                        <th class="px-4 py-2">Judul</th>
                        <th class="px-4 py-2">Penulis</th>
                        <th class="px-4 py-2">Tanggal</th>
                        <th class="px-4 py-2">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($articles as $article)
                        <tr class="border-t border-gray-300 dark:border-gray-700">
                            <td class="px-4 py-2 text-gray-400">{{ $article->judul }}</td>
                            <td class="px-4 py-2 text-gray-400">{{ $article->penulis }}</td>
                            <td class="px-4 py-2 text-gray-400">{{ $article->created_at->format('d M Y') }}</td>
                            <td class="px-4 py-2 space-x-2 flex items-center">
                                <a href="{{ route('admin.articles.edit', $article->id) }}"
                                    class="text-yellow-600 hover:underline"><svg
                                        style="--c-400:var(--primary-400);--c-600:var(--primary-600);"
                                        class="fi-link-icon h-4 w-4 text-custom-600 dark:text-custom-400"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                        aria-hidden="true" data-slot="icon">
                                        <path
                                            d="m5.433 13.917 1.262-3.155A4 4 0 0 1 7.58 9.42l6.92-6.918a2.121 2.121 0 0 1 3 3l-6.92 6.918c-.383.383-.84.685-1.343.886l-3.154 1.262a.5.5 0 0 1-.65-.65Z">
                                        </path>
                                        <path
                                            d="M3.5 5.75c0-.69.56-1.25 1.25-1.25H10A.75.75 0 0 0 10 3H4.75A2.75 2.75 0 0 0 2 5.75v9.5A2.75 2.75 0 0 0 4.75 18h9.5A2.75 2.75 0 0 0 17 15.25V10a.75.75 0 0 0-1.5 0v5.25c0 .69-.56 1.25-1.25 1.25h-9.5c-.69 0-1.25-.56-1.25-1.25v-9.5Z">
                                        </path>
                                    </svg></a>
                                <form action="{{ route('admin.articles.destroy', $article->id) }}" method="POST"
                                    class="inline" onsubmit="return confirm('Yakin ingin menghapus artikel ini?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-600 hover:underline"><svg
                                            style="--c-400:var(--danger-400);--c-600:var(--danger-600);"
                                            wire:loading.remove.delay.default="1"
                                            wire:target="mountTableAction('delete', '1')"
                                            class="fi-link-icon h-4 w-4 text-custom-600 dark:text-custom-400"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                            aria-hidden="true" data-slot="icon">
                                            <path fill-rule="evenodd"
                                                d="M8.75 1A2.75 2.75 0 0 0 6 3.75v.443c-.795.077-1.584.176-2.365.298a.75.75 0 1 0 .23 1.482l.149-.022.841 10.518A2.75 2.75 0 0 0 7.596 19h4.807a2.75 2.75 0 0 0 2.742-2.53l.841-10.52.149.023a.75.75 0 0 0 .23-1.482A41.03 41.03 0 0 0 14 4.193V3.75A2.75 2.75 0 0 0 11.25 1h-2.5ZM10 4c.84 0 1.673.025 2.5.075V3.75c0-.69-.56-1.25-1.25-1.25h-2.5c-.69 0-1.25.56-1.25 1.25v.325C8.327 4.025 9.16 4 10 4ZM8.58 7.72a.75.75 0 0 0-1.5.06l.3 7.5a.75.75 0 1 0 1.5-.06l-.3-7.5Zm4.34.06a.75.75 0 1 0-1.5-.06l-.3 7.5a.75.75 0 1 0 1.5.06l.3-7.5Z"
                                                clip-rule="evenodd"></path>
                                        </svg></button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="px-4 py-2 text-center text-gray-500">Tidak ada artikel.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
    <div class="py-6 max-w-7xl mx-auto sm:px-6 lg:px-8">
        {{ $articles->links() }}
    </div>
</x-app-layout>