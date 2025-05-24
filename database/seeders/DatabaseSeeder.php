<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\ArticleSeeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            ArticleSeeder::class,
            CommentSeeder::class,
            CategorySeeder::class,
        ]);
    }
}
