<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Article extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    protected $fillable = [
        'judul',
        'gambar_artikel',
        'deskripsi_gambar',
        'penulis',
        'deskripsi_sampul',
        'isi_deskripsi',
        'tanggal_publikasi',
    ];
}
