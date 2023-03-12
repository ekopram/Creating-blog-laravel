<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {


        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // User::create([
        //     'name' => 'Eko Pramono',
        //     'email' => 'eko@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        // User::create([
        //     'name' => 'Galuh Manunggal',
        //     'email' => 'galuh@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programing',
            'slug' => 'web-programing'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus accusamus eos excepturi magnam sapiente maiores ea dolor qui vero adipisci, libero delectus.',
        //     'body' => 'Vel sunt voluptatem, pariatur architecto odit, in asperiores nobis molestias ab autem optio rerum fugit dolor saepe est sequi voluptatum ratione fuga temporibus? Necessitatibus repudiandae repellendus voluptates doloremque, enim distinctio temporibus, eius ducimus magnam molestias dolores tenetur ipsa! Beatae quod, temporibus id quasi, veniam cumque itaque distinctio iure doloribus eaque eos quae voluptatem vero dolores in assumenda earum tenetur voluptates eum ab sapiente.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Dua',
        //     'slug' => 'judul-ke-dua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus accusamus eos excepturi magnam sapiente maiores ea dolor qui vero adipisci, libero delectus.',
        //     'body' => 'Vel sunt voluptatem, pariatur architecto odit, in asperiores nobis molestias ab autem optio rerum fugit dolor saepe est sequi voluptatum ratione fuga temporibus? Necessitatibus repudiandae repellendus voluptates doloremque, enim distinctio temporibus, eius ducimus magnam molestias dolores tenetur ipsa! Beatae quod, temporibus id quasi, veniam cumque itaque distinctio iure doloribus eaque eos quae voluptatem vero dolores in assumenda earum tenetur voluptates eum ab sapiente.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Tiga',
        //     'slug' => 'judul-ke-tiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus accusamus eos excepturi magnam sapiente maiores ea dolor qui vero adipisci, libero delectus.',
        //     'body' => 'Vel sunt voluptatem, pariatur architecto odit, in asperiores nobis molestias ab autem optio rerum fugit dolor saepe est sequi voluptatum ratione fuga temporibus? Necessitatibus repudiandae repellendus voluptates doloremque, enim distinctio temporibus, eius ducimus magnam molestias dolores tenetur ipsa! Beatae quod, temporibus id quasi, veniam cumque itaque distinctio iure doloribus eaque eos quae voluptatem vero dolores in assumenda earum tenetur voluptates eum ab sapiente.',
        //     'category_id' => 2,
        //     'user_id' => 1

        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Empat',
        //     'slug' => 'judul-ke-empat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus accusamus eos excepturi magnam sapiente maiores ea dolor qui vero adipisci, libero delectus.',
        //     'body' => 'Vel sunt voluptatem, pariatur architecto odit, in asperiores nobis molestias ab autem optio rerum fugit dolor saepe est sequi voluptatum ratione fuga temporibus? Necessitatibus repudiandae repellendus voluptates doloremque, enim distinctio temporibus, eius ducimus magnam molestias dolores tenetur ipsa! Beatae quod, temporibus id quasi, veniam cumque itaque distinctio iure doloribus eaque eos quae voluptatem vero dolores in assumenda earum tenetur voluptates eum ab sapiente.',
        //     'category_id' => 2,
        //     'user_id' => 2

        // ]);
    }
}
