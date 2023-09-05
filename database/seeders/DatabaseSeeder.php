<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Blog;
use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(3)->create();

        User::factory()->create([
            'name' => 'Viery Nugroho',
            'email' => 'viery15102002@gmail.com',
            'username' => 'viery_n',
            'password' => bcrypt('VieryNugroho15102002@.com'),
        ]);

        // User::create([
        //     'name' => 'Viery Nugroho',
        //     'email' => 'viery15102002@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        // User::create([
        //     'name' => 'vVv',
        //     'email' => 'vVv@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        Category::factory(3)->create();

        Blog::factory(20)->create();

        // Blog::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'category_id' => 1,
        //     'user_id' => 1,
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolores optio consectetur illo omnis alias porro reprehenderit molestias harum cupiditate velit.',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolores optio consectetur illo omnis alias porro reprehenderit molestias harum cupiditate velit.</p><p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolores optio consectetur illo omnis alias porro reprehenderit molestias harum cupiditate velit.</p><p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolores optio consectetur illo omnis alias porro reprehenderit molestias harum cupiditate velit.</p>'
        // ]);

        // Blog::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'category_id' => 1,
        //     'user_id' => 1,
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolores optio consectetur illo omnis alias porro reprehenderit molestias harum cupiditate velit.',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolores optio consectetur illo omnis alias porro reprehenderit molestias harum cupiditate velit.</p><p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolores optio consectetur illo omnis alias porro reprehenderit molestias harum cupiditate velit.</p><p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolores optio consectetur illo omnis alias porro reprehenderit molestias harum cupiditate velit.</p>'
        // ]);

        // Blog::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'category_id' => 2,
        //     'user_id' => 1,
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolores optio consectetur illo omnis alias porro reprehenderit molestias harum cupiditate velit.',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolores optio consectetur illo omnis alias porro reprehenderit molestias harum cupiditate velit.</p><p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolores optio consectetur illo omnis alias porro reprehenderit molestias harum cupiditate velit.</p><p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolores optio consectetur illo omnis alias porro reprehenderit molestias harum cupiditate velit.</p>'
        // ]);

        // Blog::create([
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul-keempat',
        //     'category_id' => 2,
        //     'user_id' => 2,
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolores optio consectetur illo omnis alias porro reprehenderit molestias harum cupiditate velit.',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolores optio consectetur illo omnis alias porro reprehenderit molestias harum cupiditate velit.</p><p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolores optio consectetur illo omnis alias porro reprehenderit molestias harum cupiditate velit.</p><p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolores optio consectetur illo omnis alias porro reprehenderit molestias harum cupiditate velit.</p>'
        // ]);
    }
}