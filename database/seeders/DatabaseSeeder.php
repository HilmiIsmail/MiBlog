<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Autor;
use App\Models\Blog;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        Storage::deleteDirectory('public/autores');
        Storage::makeDirectory('public/autores');

        Autor::factory(10)->create();

        Storage::deleteDirectory('public/blogs');
        Storage::makeDirectory('public/blogs');

        Blog::factory(10)->create();
    }
}
