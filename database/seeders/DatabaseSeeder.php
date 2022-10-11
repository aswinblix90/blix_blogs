<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Comment;
use Illuminate\Database\Seeder;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        // Post::factory(5)->create();
        // Comment::factory(5)->create();
        $categories = ['health','nature','work'];

        foreach($categories as $category){
            Category::create([
                'name' => $category
            ]);
        }
    }
}
