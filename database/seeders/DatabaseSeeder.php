<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // $Alpi = User::create([
        //     'name' => 'Alpi Darul Hakim',
        //     'username' => 'alpidarulhakim',
        //     'email' => 'alpidarulhakim@gmail.com',
        //     'email_verified_at' => 'now',
        //     'password' => Hash::make('password'),
        //     'remember_token' => Str::random(10)
        // ]);

        // Category::create([
        //     'category' => 'Informatika',
        // ]);

        // Post::create([
        //     'title' => 'judul 1',
        //     'author_id' => 1,
        //     'category_id' => 1,
        //     'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Maxime vel consectetur deserunt illum ipsum excepturi, adipisci voluptate cupiditate laborum nam ratione tempore! Nisi exercitationem doloribus nostrum voluptatum provident debitis ut.'
        // ]);

        // Post::factory(100)->recycle([
        //     Category::factory(3)->create(),
        //     $Alpi,
        //     User::factory(5)->create()
        // ])->create();

        $this->call([CategorySeeder::class, UserSeeder::class]);
        Post::factory(100)->recycle([
            Category::all(),
            User::all()
        ])->create();
    }
}
