<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        \App\Models\User::create([
            'username' => 'admin',
            'email' => 'admin@example.com',
            'password' => bcrypt('password'),
        ]);

        \App\Models\Article::create([
            'judul' => 'Hidup Hijau di Era Modern',
            'gambar_artikel' => 'images/green.jpg',
            'deskripsi_gambar' => 'Pohon hijau di tengah kota',
            'penulis' => 'Admin',
            'deskripsi_sampul' => 'Cara hidup berkelanjutan di kota besar.',
            'isi_deskripsi' => 'Isi artikel panjang di sini...',
            'tanggal_publikasi' => '2025-04-15',
        ]);
    }
}