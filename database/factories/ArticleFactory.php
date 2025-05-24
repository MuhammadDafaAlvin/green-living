<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'judul' => fake()->sentence(),
            'gambar_artikel' => 'https://picsum.photos/640/480?random=' . rand(1, 1000),
            'deskripsi_gambar' => fake()->sentence(),
            'penulis' => fake()->name(),
            'deskripsi_sampul' => fake()->sentence(),
            'isi_deskripsi' => fake()->paragraph(),
            'tanggal_publikasi' => fake()->date(),
            'category_id' => \App\Models\Category::factory()->create()->id,
        ];
    }
}
