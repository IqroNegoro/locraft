<?php

namespace Database\Seeders;

use App\Models\ProductImage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ProductImage::insert([
            [
                'product_id' => 3,
                'image' => 'https://down-id.img.susercontent.com/file/e795c15ac24860dede30db3dab4633b0',
            ],
            [
                'product_id' => 3,
                'image' => 'https://cdn.media.amplience.net/i/frasersdev/70729904_o?fmt=auto&upscale=false&w=767&h=767&sm=scaleFit&$h-ttl$',
            ],
            [
                'product_id' => 3,
                'image' => 'https://media.gucci.com/style/DarkGray_Center_0_0_490x490/1688046306/735145_KAAAD_8358_001_071_0000_Light.jpg',
            ],
            [
                'product_id' => 3,
                'image' => 'https://down-id.img.susercontent.com/file/sg-11134201-7rblt-lnttrn0cmuqm91',
            ],
        ]);
    }
}
