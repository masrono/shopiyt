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
    }
}