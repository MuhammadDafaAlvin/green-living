<x-app-layout>
    <div class="bg-black text-white tracking-tight">
        <section class="relative text-white py-24">
            <div class="container mx-auto px-4 sm:px-6 lg:px-8 text-center">
                <h2 class="text-4xl md:text-5xl lg:text-6xl lg:mt-8 font-extralight mb-4">Bumi <span
                        class="font-serif italic">Bicara</span>, Kami Menuliskannya <span><img src="https://cdn-icons-png.flaticon.com/512/3271/3271154.png" alt="images" class="w-12 inline"></span> </h2>
                <p class="text-sm md:text-base lg:text-lg text-gray-200 mb-4 max-w-2xl tracking-normal mx-auto leading-tight">
                    Temukan insight, inspirasi, dan aksi nyata untuk melindungi bumi. Dari perubahan iklim sampai solusi
                    hijau—kami hadir untuk jadi suara lingkungan yang peduli.
                </p>
                @auth
                <a href="{{ route('dashboard') }}"
                    class="inline-block lg:text-md bg-white text-black font-medium py-2 px-4 rounded-full hover:bg-gray-300 transition tracking-normal text-sm">
                    Jelajahi Artikel
                </a>
                @else
                <a href="{{ route('register') }}"
                    class="inline-block bg-white text-black font-medium text-sm py-2 px-4 rounded-full hover:bg-gray-300  tracking-normal transition text-md">
                    Daftar Sekarang, Gratis!
                </a>
                @endauth
            </div>
        </section>

        <section id="articles" class="container mx-auto py-16 px-4 sm:px-6 lg:px-8">
            @if ($articles->isEmpty())
            <p class="text-center text-gray-400">Belum ada artikel tersedia. Mulai jelajahi nanti!</p>
            @else
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach ($articles as $article)
                <a href="{{ route('articles.show', $article->id) }}"
                    class="block ring-1 ring-gray-700 rounded-lg shadow-md hover:shadow-xl transition-transform transform hover:-translate-y-1">
                    @if ($article->gambar_artikel)
                    <img src="{{ $article->gambar_artikel }}" alt="{{ $article->deskripsi_gambar }}"
                        class="w-full h-48 object-cover rounded-t-lg">
                    @else
                    <div class="w-full h-48 bg-gray-700 rounded-t-lg flex items-center justify-center">
                        <span class="text-gray-400">Tidak ada gambar</span>
                    </div>
                    @endif
                    <div class="p-6 tracking-normal">
                        <h4 class="text-xl font-medium text-white">{{ $article->judul }}</h4>
                        <p class="text-gray-300 text-sm line-clamp-3 my-4">{{ $article->deskripsi_sampul }}</p>
                        <p class="text-sm text-gray-400">
                            Oleh {{ $article->penulis }} |
                            {{ \Carbon\Carbon::parse($article->tanggal_publikasi)->format('d M Y') }}
                        </p>
                        <p class="text-sm text-gray-500 mt-2">Kategori:
                            <span class="font-medium">{{ $article->category->nama_kategori }}</span>
                        </p>
                    </div>
                </a>
                @endforeach
            </div>
            @endif
        </section>
    </div>
</x-app-layout>