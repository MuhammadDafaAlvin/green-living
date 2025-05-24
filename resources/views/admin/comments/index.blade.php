<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">Kelola Semua Komentar</h2>
    </x-slot>

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-black shadow sm:rounded-lg p-6">
            <div class="flex justify-between items-center mb-2">
                <h1 class="text-2xl font-bold">Komentar</h1>
            </div>

            <table class="text-sm w-full table-auto bg-white dark:bg-black text-black dark:text-white rounded">
                <thead>
                    <tr class="bg-gray-100 dark:bg-[#292a2b] text-left">
                        <th class="px-4 py-2">Nama Pengirim</th>
                        <th class="px-4 py-2">Artikel</th>
                        <th class="px-4 py-2">Komentar</th>
                        <th class="px-4 py-2">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($comments as $comment)
                        <tr class="border-t border-gray-300 dark:border-gray-700">
                            <td class="px-4 py-2 text-gray-400">{{ $comment->user->username }}</td>
                            <td class="px-4 py-2 text-gray-400">{{ $comment->article->judul }}</td>
                            <td class="px-4 py-2 text-gray-400">{{ $comment->isi_komentar }}</td>
                            <td class="px-4 py-2 space-x-2 flex items-center">
                                <form action="{{ route('admin.comments.destroy', $comment->id) }}" method="POST"
                                    class="inline" onsubmit="return confirm('Yakin ingin menghapus komentar ini?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-600 hover:underline">
                                        <svg class="h-4 w-4 text-red-600" xmlns="http://www.w3.org/2000/svg"
                                            fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                d="M8.75 1A2.75 2.75 0 0 0 6 3.75v.443c-.795.077-1.584.176-2.365.298a.75.75 0 1 0 .23 1.482l.149-.022.841 10.518A2.75 2.75 0 0 0 7.596 19h4.807a2.75 2.75 0 0 0 2.742-2.53l.841-10.52.149.023a.75.75 0 0 0 .23-1.482A41.03 41.03 0 0 0 14 4.193V3.75A2.75 2.75 0 0 0 11.25 1h-2.5ZM10 4c.84 0 1.673.025 2.5.075V3.75c0-.69-.56-1.25-1.25-1.25h-2.5c-.69 0-1.25.56-1.25 1.25v.325C8.327 4.025 9.16 4 10 4ZM8.58 7.72a.75.75 0 0 0-1.5.06l.3 7.5a.75.75 0 1 0 1.5-.06l-.3-7.5Zm4.34.06a.75.75 0 1 0-1.5-.06l-.3 7.5a.75.75 0 1 0 1.5.06l.3-7.5Z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="px-4 py-2 text-center text-gray-500">Tidak ada komentar.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
    <div class="py-6 max-w-7xl mx-auto sm:px-6 lg:px-8">
        {{ $comments->links() }}
    </div>
</x-app-layout>