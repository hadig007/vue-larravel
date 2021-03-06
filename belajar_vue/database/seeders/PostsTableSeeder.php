<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;
use HasFactory;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // factory(Post::class, 50)->create();
        \App\Models\Post::factory()->count(30)->create(); 
    }
}
