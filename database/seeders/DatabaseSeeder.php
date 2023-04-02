<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Device;
use App\Models\Post;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Category::factory(50)->create();
        User::factory(50)->create();
        Device::factory(50)->create();
        $tags = Tag::factory(100)->create();
        $posts = Post::factory(100)->create();

        foreach ($posts as $post) {
            $tagIds = $tags->random(4)->pluck('id');
            $post->tags()->attach($tagIds);
        }
    }
}