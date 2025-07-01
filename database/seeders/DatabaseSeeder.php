<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::insert([
        [
            'name' => 'Irene',
            'username' => 'ireneiberia',
            'email' => 'irene@gmail.com',
            'email_verified_at' => now(),
            'role' => 'user',
            'password' => bcrypt('irene123'),
            'avatar' => 'https://images4.alphacoders.com/123/1234367.jpg',
            'bio' => 'Your finest inquisitor who fighting with custom handmade gun and knife',
            'location' => 'Rhodes Island',
            'followers' => 0,
            'products' => 2,
            'following' => 0,
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'name' => 'WoodMade',
            'username' => 'woodmade',
            'email' => 'woodmade@gmail.com',
            'email_verified_at' => now(),
            'role' => 'user',
            'password' => bcrypt('woodmade123'),
            'avatar' => 'https://cdn.webshopapp.com/shops/255731/files/379384509/red-oak.jpg',
            'bio' => 'Would you would wood ? yes, i am wood',
            'location' => 'S5Jungle',
            'followers' => 0,
            'products' => 5,
            'following' => 0,
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'name' => 'Kaguya Shinomiya',
            'username' => 'kaguyashinomiya',
            'email' => 'kaguyashinomiya@gmail.com',
            'email_verified_at' => now(),
            'role' => 'user',
            'password' => bcrypt('kaguya123'),
            'avatar' => 'https://images6.alphacoders.com/100/thumb-1920-1006132.png',
            'bio' => 'In trade, whoever buy first then they win!',
            'location' => 'Shuchiin Academy',
            'followers' => 0,
            'products' => 3,
            'following' => 0,
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'name' => 'Admin',
            'username' => 'admin',
            'email' => 'admin@gmail.com',
            'email_verified_at' => now(),
            'role' => 'admin',
            'password' => bcrypt('admin123'),
            'avatar' => '',
            'bio' => '',
            'location' => '',
            'followers' => 0,
            'products' => 0,
            'following' => 0,
            'created_at' => now(),
            'updated_at' => now(),
        ]
    ]);

    $this->call([
        CategorySeeder::class,
        TagSeeder::class,
        ProductSeeder::class,
        ProductImageSeeder::class,
        TagProductSeeder::class
    ]);
    }
}
