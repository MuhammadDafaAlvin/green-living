<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold text-white">{{ $article->judul }}</h2>
    </x-slot>

    <div class="py-12 bg-gray-900 min-h-screen text-white">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    @if ($article->gambar_artikel)
                        <img src="{{ asset('storage/' . $article->gambar_artikel) }}"
                            alt="{{ $article->deskripsi_gambar }}"
                            class="w-full h-64 object-cover rounded-lg mb-6">
                    @endif

                    <h1 class="text-3xl font-bold text-white">{{ $article->judul }}</h1>
                    <p class="mt-2 text-sm text-gray-400">
                        Diposting pada {{ $article->created_at->format('d M Y') }}
                    </p>
                    <div class="mt-6 prose prose-invert text-gray-300">
                        {!! nl2br(e($article->isi_artikel)) !!}
                    </div>

                    <a href="{{ route('dashboard') }}"
                        class="mt-6 inline-block bg-green-600 text-white py-2 px-4 rounded-md hover:bg-green-700 transition">
                        Kembali ke Dashboard
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>