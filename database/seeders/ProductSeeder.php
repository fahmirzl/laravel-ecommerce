<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Storage::disk('public')->makeDirectory('images');

        $sourceImagePath1 = public_path('sample.png');
        $targetImagePath1 = 'images/' . uniqid() . '.png';
        $sourceImagePath2 = public_path('product-test.png');
        $targetImagePath2 = 'images/' . uniqid() . '.png';

        Storage::disk('public')->put($targetImagePath1, file_get_contents($sourceImagePath1));
        Storage::disk('public')->put($targetImagePath2, file_get_contents($sourceImagePath2));

        Product::create([
            'product' => 'UTRANET Black',
            'category_id' => 1,
            'price' => 199000,
            'stock' => 2,
            'image' => $targetImagePath1,
        ]);

        Product::create([
            'product' => 'MOCKUP Black',
            'category_id' => 1,
            'price' => 249000,
            'stock' => 1,
            'image' => $targetImagePath2,
        ]);
    }
}
