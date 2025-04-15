<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Green Living</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100">
    <header class="bg-green-600 text-white p-4">
        <nav class="flex justify-between items-center">
            <h1 class="text-2xl font-bold">Green Living</h1>
            <div>
                @auth
                    <a href="{{ url('/dashboard') }}" class="mr-4">Dashboard</a>
                    <form method="POST" action="{{ route('logout') }}" class="inline">
                        @csrf
                        <button type="submit">Logout</button>
                    </form>
                @else
                    <a href="{{ route('login') }}" class="mr-4">Login</a>
                    <a href="{{ route('register') }}">Register</a>
                @endauth
            </div>
        </nav>
    </header>

    <main class="container mx-auto mt-8">
        <h2 class="text-3xl font-bold text-center">Selamat Datang di Green Living</h2>
        <p class="text-center mt-4">Baca artikel terbaru tentang lingkungan dan cara hidup berkelanjutan.</p>

        <section class="mt-8">
            <h3 class="text-2xl font-bold">Artikel Terbaru</h3>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mt-4">
                @foreach ($articles as $article)
                    <div class="bg-white p-4 shadow rounded">
                        <img src="{{ asset('storage/' . $article->gambar_artikel) }}" alt="{{ $article->deskripsi_gambar }}" class="w-full h-48 object-cover">
                        <h4 class="text-xl font-bold mt-2">{{ $article->judul }}</h4>
                        <p class="text-gray-600">{{ $article->deskripsi_sampul }}</p>
                        <p class="text-sm text-gray-500">Oleh {{ $article->penulis }} | {{ $article->tanggal_publikasi }}</p>
                    </div>
                @endforeach
            </div>
        </section>
    </main>
</body>
</html>