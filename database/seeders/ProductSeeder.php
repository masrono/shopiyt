<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\ProductVariant;
use App\Models\Category;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $jersey = Category::where('slug', 'skateboard')->first();
        $sepatu = Category::where('slug', 'sepatu')->first();
        $jaket  = Category::where('slug', 'jaket')->first();

        // 🔴 Skateboard
        $p1 = Product::create([
            'name' => 'Deck baker skateboard',
            'slug' => 'deck',
            'category_id' => $deck->id,
            'description' => 'Deck baker size 8,25.',
            'image' => 'public/images/images.jpg:',
]);
    }
}