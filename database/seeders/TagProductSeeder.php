<?php

namespace Database\Seeders;

use App\Models\TagProduct;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TagProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TagProduct::insert([
        [
            'product_id' => 1,
            'tag_id' => 1,
        ],
        [
            'product_id' => 1,
            'tag_id' => 2,
        ],
        [
            'product_id' => 1,
            'tag_id' => 8,
        ],
        [
            'product_id' => 2,
            'tag_id' => 3,
        ],
        [
            'product_id' => 2,
            'tag_id' => 6,
        ],
        [
            'product_id' => 2,
            'tag_id' => 7,
        ],
        [
            'product_id' => 3,
            'tag_id' => 4,
        ],
        [
            'product_id' => 3,
            'tag_id' => 5,
        ],
        [
            'product_id' => 3,
            'tag_id' => 9,
        ],
        [
            'product_id' => 4,
            'tag_id' => 10,
        ],
        [
            'product_id' => 4,
            'tag_id' => 11,
        ],
        [
            'product_id' => 4,
            'tag_id' => 12,
        ],
        [
            'product_id' => 5,
            'tag_id' => 13,
        ],
        [
            'product_id' => 5,
            'tag_id' => 14,
        ],
        [
            'product_id' => 5,
            'tag_id' => 15,
        ],
        [
            'product_id' => 6,
            'tag_id' => 16,
        ],
        [
            'product_id' => 6,
            'tag_id' => 17,
        ],
        [
            'product_id' => 6,
            'tag_id' => 18,
        ],
        [
            'product_id' => 7,
            'tag_id' => 19,
        ],
        [
            'product_id' => 7,
            'tag_id' => 20,
        ],
        [
            'product_id' => 7,
            'tag_id' => 21,
        ],
        [
            'product_id' => 8,
            'tag_id' => 22,
        ],
        [
            'product_id' => 8,
            'tag_id' => 23,
        ],
        [
            'product_id' => 8,
            'tag_id' => 24,
        ],
        [
            'product_id' => 9,
            'tag_id' => 25,
        ],
        [
            'product_id' => 9,
            'tag_id' => 26,
        ],
        [
            'product_id' => 9,
            'tag_id' => 27,
        ],
        [
            'product_id' => 10,
            'tag_id' => 28,
        ],
        [
            'product_id' => 10,
            'tag_id' => 29,
        ],
        [
            'product_id' => 10,
            'tag_id' => 30,
        ],
    ]);
    }
}
