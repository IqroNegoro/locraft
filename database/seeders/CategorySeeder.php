<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Category::insert([
            ['name' => 'Shoes', 'slug' => 'shoes'],
            ['name' => 'Clothes', 'slug' => 'clothes'],
            ['name' => 'Bags', 'slug' => 'bags'],
            ['name' => 'Accessories', 'slug' => 'accessories'],
            ['name' => 'Electronics', 'slug' => 'electronics'],
            ['name' => 'Home Appliances', 'slug' => 'home-appliances'],
            ['name' => 'Books', 'slug' => 'books'],
            ['name' => 'Toys', 'slug' => 'toys'],
            ['name' => 'Sports', 'slug' => 'sports'],
            ['name' => 'Beauty', 'slug' => 'beauty'],
            ['name' => 'Health', 'slug' => 'health'],
            ['name' => 'Watches', 'slug' => 'watches'],
            ['name' => 'Jewelry', 'slug' => 'jewelry'],
            ['name' => 'Groceries', 'slug' => 'groceries'],
            ['name' => 'Pet Supplies', 'slug' => 'pet-supplies'],
            ['name' => 'Stationery', 'slug' => 'stationery'],
            ['name' => 'Musical Instruments', 'slug' => 'musical-instruments'],
            ['name' => 'Automotive', 'slug' => 'automotive'],
            ['name' => 'Garden', 'slug' => 'garden'],
            ['name' => 'Furniture', 'slug' => 'furniture'],
            ['name' => 'Home Decor', 'slug' => 'home-decor'],
            ['name' => 'Outdoor', 'slug' => 'outdoor'],
            ['name' => 'Art', 'slug' => 'art'],
            ['name' => 'Collectibles', 'slug' => 'collectibles'],
            ['name' => 'Cosmetics', 'slug' => 'cosmetics'],
            ['name' => 'Kitchenware', 'slug' => 'kitchenware'],
            ['name' => 'Crafts', 'slug' => 'crafts'],
            ['name' => 'Gadget', 'slug' => 'gadget'],
        ]);
    }
}
