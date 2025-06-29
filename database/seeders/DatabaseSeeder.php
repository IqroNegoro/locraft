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
        $this->call([
            CategorySeeder::class
        ]);

    User::insert([
        [
            'name' => 'Irene',
            'username' => 'irene.iberia',
            'email' => 'irene@gmail.com',
            'email_verified_at' => now(),
            'role' => 'user',
            'password' => bcrypt('irene123'),
            'avatar' => 'https://images4.alphacoders.com/123/1234367.jpg',
            'bio' => 'Lantern ward!',
            'location' => 'Rhodes Island',
            'followers' => 0,
            'products' => 0,
            'following' => 0,
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'name' => 'Ichika Hoshino',
            'username' => 'ichika.hoshino',
            'email' => 'ichikahoshino@gmail.com',
            'email_verified_at' => now(),
            'role' => 'user',
            'password' => bcrypt('ichika123'),
            'avatar' => 'https://images3.alphacoders.com/124/1242949.jpg',
            'bio' => 'Vocalist dari Leo/need! Musik adalah hidupku~',
            'location' => 'Sekai',
            'followers' => 0,
            'products' => 0,
            'following' => 0,
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'name' => 'Kaguya Shinomiya',
            'username' => 'kaguya.shinomiya',
            'email' => 'kaguya.shinomiya@gmail.com',
            'email_verified_at' => now(),
            'role' => 'user',
            'password' => bcrypt('kaguya123'),
            'avatar' => 'https://imagedelivery.net/LBWXYQ-XnKSYxbZ-NuYGqQ/fd2df734-3132-4d31-b06f-c5eb49e6be00/avatarhd',
            'bio' => 'Love is war!',
            'location' => 'Shuchiin Academy',
            'followers' => 0,
            'products' => 0,
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
    }
}
