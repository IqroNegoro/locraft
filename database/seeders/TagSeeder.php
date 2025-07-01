<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Tag::insert([
        [
            'name' => 'Footwear',
            'slug' => 'footwear',
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'name' => 'Leather',
            'slug' => 'leather',
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'name' => 'Gadget',
            'slug' => 'gadget',
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'name' => 'Stationery',
            'slug' => 'stationery',
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'name' => 'Home Decor',
            'slug' => 'home-decor',
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'name' => 'Electronics',
            'slug' => 'electronics',
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'name' => 'Toys',
            'slug' => 'toys',
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'name' => 'Accessories',
            'slug' => 'accessories',
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'name' => 'Furniture',
            'slug' => 'furniture',
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'name' => 'Jewelry',
            'slug' => 'jewelry',
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'name' => 'Bag',
            'slug' => 'bag',
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'name' => 'Watch',
            'slug' => 'watch',
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'name' => 'Sports',
            'slug' => 'sports',
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'name' => 'Outdoor',
            'slug' => 'outdoor',
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'name' => 'Art',
            'slug' => 'art',
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'name' => 'Pet Supplies',
            'slug' => 'pet-supplies',
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'name' => 'Books',
            'slug' => 'books',
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'name' => 'Collectibles',
            'slug' => 'collectibles',
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'name' => 'Cosmetics',
            'slug' => 'cosmetics',
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'name' => 'Health',
            'slug' => 'health',
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'name' => 'Handmade',
            'slug' => 'handmade',
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'name' => 'Shoes',
            'slug' => 'shoes',
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'name' => 'Photo Frame',
            'slug' => 'photo-frame',
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'name' => 'Table',
            'slug' => 'table',
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'name' => 'Knife',
            'slug' => 'knife',
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'name' => 'Book',
            'slug' => 'book',
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'name' => 'Shirt',
            'slug' => 'shirt',
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'name' => 'Basket',
            'slug' => 'basket',
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'name' => 'Ceramic',
            'slug' => 'ceramic',
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'name' => 'Plate',
            'slug' => 'plate',
            'created_at' => now(),
            'updated_at' => now(),
        ],
    ]);
    }
}
