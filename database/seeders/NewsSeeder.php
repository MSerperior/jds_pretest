<?php

namespace Database\Seeders;

use App\Models\Comment;
use App\Models\Image;
use App\Models\News;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         News::factory()
         ->has(Comment::factory()->count(10)->for(User::factory()))
         ->has(Image::factory()->count(3))
         ->count(5)
         ->create();
    }
}
