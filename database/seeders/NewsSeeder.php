<?php

namespace Database\Seeders;

use App\Models\Comment;
use App\Models\News;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         News::factory()->has(Comment::factory()->count(10))->count(5)->create();
    }
}
