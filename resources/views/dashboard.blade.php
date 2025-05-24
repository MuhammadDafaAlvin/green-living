<x-app-layout>
    <div class="bg-black min-h-screen text-white">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">

                    @if(auth()->user()->role === 'admin')
                        <h2 class="text-xl font-medium md:text-3xl">
                            Selamat datang di halaman admin, {{ auth()->user()->username }}!
                        </h2>
                        <div class="mt-4">
                            <a href="{{ route('admin.articles.index') }}"
                                class="inline-block bg-yellow-600 hover:bg-yellow-700 text-white text-sm px-4 py-2 rounded-lg transition">
                                <div class="flex items-center justify-center gap-2">
                                    <svg class="fi-tabs-item-icon h-5 w-5 shrink-0 transition duration-75 text-primary-600 dark:text-primary-400"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10">
                                        </path>
                                    </svg>
                                    <p>Kelola Artikel</p>
                                </div>
                            </a>
                        </div>
                    @else
                        <h2 class="text-xl font-medium md:text-3xl">
                            Mau baca apa hari ini, {{ auth()->user()->username }}?
                        </h2>
                    @endif

                    <!-- Daftar Artikel -->
                    <div class="mt-8">
                        <h3 class="text-lg font-medium">Daftar Artikel</h3>
                        @if ($articles->isEmpty())
                            <p class="mt-4 text-gray-400">Belum ada artikel tersedia.</p>
                        @else
                            <div class="mt-4 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                                @foreach ($articles as $article)
                                    <a href="{{ route('articles.show', $article->id) }}"
                                        class="block rounded-lg shadow-md hover:shadow-lg transition ring-1 ring-stone-700">
                                        @if ($article->gambar_artikel)
                                            <img src="{{ $article->gambar_artikel }}" alt="{{ $article->deskripsi_gambar }}"
                                                class="w-full h-48 object-cover rounded-t-lg">
                                        @else
                                            <div class="w-full h-48 bg-gray-600 rounded-t-lg flex items-center justify-center">
                                                <span class="text-gray-400">Tidak ada gambar</span>
                                            </div>
                                        @endif
                                        <div class="p-4">
                                            <h4 class="text-xl font-medium text-white">{{ $article->judul }}</h4>
                                            <p class="mt-2 text-gray-300 line-clamp-3">
                                                {{ Str::limit($article->isi_deskripsi, 100) }}
                                            </p>
                                            <p class="text-sm text-gray-500 mt-2">Kategori:
                                                <span class="font-medium">{{ $article->category->nama_kategori }}</span>
                                            </p>
                                            <p class="mt-2 text-sm text-gray-400">
                                                Diposting pada {{ $article->created_at->format('d M Y') }}
                                            </p>
                                        </div>
                                    </a>
                                @endforeach
                            </div>
                        @endif
                    </div>
                </div>

                <!-- Pagination -->
                <div class="p-6">
                    {{ $articles->links() }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>