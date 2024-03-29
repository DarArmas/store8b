<?php

namespace Database\Seeders;

use App\Models\Subcategory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Storage::deleteDirectory('/public/categories');
        Storage::deleteDirectory('/public/subcategories');
        Storage::deleteDirectory('/public/products');
        Storage::makeDirectory('/public/categories');
        Storage::makeDirectory('/public/subcategories');
        Storage::makeDirectory('/public/products');
        
        $this->call([
            UserSeeder::class,
            CategorySeeder::class,
            SubcategorySeeder::class,
            ImageSeeder::class,
            ProductSeeder::class,
            ColorSeeder::class,
            ColorProductSeeder::class,
            SizeSeeder::class,
        ]);
    }
}
