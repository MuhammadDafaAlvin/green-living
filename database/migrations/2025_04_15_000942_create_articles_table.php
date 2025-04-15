<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->string('gambar_artikel');
            $table->string('deskripsi_gambar');
            $table->string('penulis');
            $table->string('deskripsi_sampul');
            $table->text('isi_deskripsi');
            $table->string('tanggal_publikasi');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('articles');
    }
};
