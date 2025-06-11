<x-app-layout>
    <div class="py-12 bg-black min-h-screen text-white">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-black overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 font-serif">
                    @if ($article->gambar_artikel)
                    <img src="{{ $article->gambar_artikel }}" alt="{{ $article->deskripsi_gambar }}"
                        class="w-full h-64 object-cover rounded-lg mb-6">
                    @endif

                    <h1 class="text-4xl font-bold text-white font-serif">{{ $article->judul }}</h1>
                    <div class="flex place-items-center gap-4">
                        <p class="mt-2 text-sm text-gray-400">
                            Diposting pada {{ $article->created_at->format('d M Y') }}
                        </p>
                        <p class="mt-2 text-sm text-gray-500">Kategori:
                            <span class="font-medium">{{ $article->category->nama_kategori }}</span>
                        </p>
                    </div>
                    <div class="mt-6 prose text-lg prose-invert text-gray-300 font-serif">
                        {!! nl2br(e($article->isi_deskripsi)) !!}
                    </div>

                    @if($article->comments->count())
                    <div class="mt-8" id="comments-section">
                        <h5 class=" text-gray-300 mt-4">Komentar:</h5>
                        <ul class="list-none space-y-2">
                            @foreach ($article->comments as $comment)
                            <li class=" text-gray-400 mt-4">
                                "{{ $comment->isi_komentar }}" -
                                <span class="text-gray-500">{{ $comment->user->username }}</span> |
                                <span class="text-gray-500">{{ $comment->created_at->format('d M Y') }}</span>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    @else
                    <p class=" text-gray-400 mt-4">Belum ada komentar.</p>
                    @endif

                    @auth
                    <form action="{{ route('comments.store', $article->id) }}" method="POST" class="mt-8">
                        @csrf
                        <div class="mb-4">
                            <label for="content" class="block text-sm text-gray-300">Tambahkan Komentar:</label>
                            <textarea id="content" name="content" rows="4"
                                class="bg-black w-full h-20 p-4 mt-2 border-gray-700 rounded-xl" required></textarea>
                        </div>
                        <button type="submit" class="bg-yellow-600 text-white py-2 px-4 rounded-full text-sm">Kirim
                            Komentar</button>
                    </form>
                    @else
                    <p class="mt-4 text-gray-500">Silakan <a href="{{ route('login') }}"
                            class="text-yellow-500">login</a>
                        untuk menambahkan komentar.</p>
                    @endauth

                    <a href="{{ route('dashboard') }} " id="back-to-dashboard" class=" text-sm mt-6 inline-block bg-stone-600 text-white py-2 px-4 rounded-full
                        hover:bg-stone-700 transition">
                        Kembali ke Dashboard
                    </a>
                </div>
            </div>
        </div>
    </div>
    </x-app-lat>