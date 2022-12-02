<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use Database\Factories\CategoryFactory;
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
        // \App\Models\User::factory(10)->create();
        Category::factory(100)->create();
        \App\Models\User::factory()->create([
            'name' => 'علی ناصریان',
            'username' => 'CyberAli',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('password'),
        ]);
    }
}
