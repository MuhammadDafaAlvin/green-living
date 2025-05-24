<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    /** @use HasFactory<\Database\Factories\CategoryFactory> */
    use HasFactory;

    use HasFactory;

    protected $fillable = ['nama_kategori'];

    public function articles()
    {
        return $this->hasMany(Article::class);
    }
}
