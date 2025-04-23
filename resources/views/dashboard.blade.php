<x-app-layout>
    <div class=" bg-black min-h-screen text-white">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <!-- Daftar Artikel -->
                    <h2 class="text-xl font-medium md:text-3xl">Lagi pengen baca apa hari ini, {{ auth()->user()->username }}?</h2>
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
                                            <img src="{{ $article->gambar_artikel }}"
                                                alt="{{ $article->deskripsi_gambar }}"
                                                class="w-full h-48 object-cover rounded-t-lg">
                                        @else
                                            <div class="w-full h-48 bg-gray-600 rounded-t-lg flex items-center justify-center">
                                                <span class="text-gray-400">Tidak ada gambar</span>
                                            </div>
                                        @endif
                                        <div class="p-4">
                                            <h4 class="text-xl font-medium text-white">{{ $article->judul }}</h4>
                                            <p class="mt-2 text-gray-300 line-clamp-3">{{ Str::limit($article->isi_deskripsi, 100) }}</p>
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
            </div>
        </div>
    </div>
</x-app-layout>