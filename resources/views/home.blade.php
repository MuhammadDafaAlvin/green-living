<x-app-layout>
    <div class="bg-gray-900 text-white">
        <!-- Hero Section -->
        <section class="relative bg-gradient-to-r from-green-800 to-green-600 text-white py-24">
            <div class="container mx-auto px-4 sm:px-6 lg:px-8 text-center">
                <h2 class="text-4xl md:text-5xl font-bold mb-4">Hidup Hijau, Mulai dari Sekarang</h2>
                <p class="text-lg md:text-xl text-gray-200 mb-8 max-w-2xl mx-auto">
                    Bergabunglah dengan komunitas Green Living untuk menemukan tips, artikel, dan inspirasi gaya hidup ramah lingkungan.
                </p>
                @auth
                    <a href="{{ route('dashboard') }}"
                       class="inline-block bg-green-500 text-white py-3 px-8 rounded-md hover:bg-green-600 transition text-lg font-semibold">
                        Jelajahi Dashboard
                    </a>
                @else
                    <a href="{{ route('register') }}"
                       class="inline-block bg-green-500 text-white py-3 px-8 rounded-md hover:bg-green-600 transition text-lg font-semibold">
                        Gabung Sekarang
                    </a>
                @endauth
            </div>
            <!-- Overlay untuk Efek -->
            <div class="absolute inset-0 bg-black opacity-30"></div>
        </section>

        <!-- Fitur Section -->
        

        <!-- Artikel Section -->
        <section id="articles" class="container mx-auto py-16 px-4 sm:px-6 lg:px-8">
            <h3 class="text-3xl font-bold text-center mb-12">Artikel Terbaru</h3>
            @if ($articles->isEmpty())
                <p class="text-center text-gray-400">Belum ada artikel tersedia. Mulai jelajahi nanti!</p>
            @else
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                    @foreach ($articles as $article)
                        <a href="{{ route('articles.show', $article->id) }}"
                           class="block bg-gray-800 rounded-lg shadow-md hover:shadow-xl transition-transform transform hover:-translate-y-1">
                            @if ($article->gambar_artikel)
                                <img src="{{ asset('storage/' . $article->gambar_artikel) }}"
                                     alt="{{ $article->deskripsi_gambar }}"
                                     class="w-full h-48 object-cover rounded-t-lg">
                            @else
                                <div class="w-full h-48 bg-gray-700 rounded-t-lg flex items-center justify-center">
                                    <span class="text-gray-400">Tidak ada gambar</span>
                                </div>
                            @endif
                            <div class="p-6">
                                <h4 class="text-xl font-semibold text-white mb-2">{{ $article->judul }}</h4>
                                <p class="text-gray-300 line-clamp-3 mb-4">{{ $article->deskripsi_sampul }}</p>
                                <p class="text-sm text-gray-400">
                                    Oleh {{ $article->penulis }} | {{ \Carbon\Carbon::parse($article->tanggal_publikasi)->format('d M Y') }}
                                </p>
                            </div>
                        </a>
                    @endforeach
                </div>
            @endif
        </section>
    </div>
</x-app-layout>