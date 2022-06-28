<?php

namespace Database\Seeders;

use App\Models\Subcategory;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class SubcategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $subcategories = array(
            array('category_id' => 1, 'name' => 'Cell phones and smartphones', 'slug' => Str::slug('Cell phones and smartphones'), 'color' => true),
            array('category_id' => 1, 'name' => 'Smartwatches', 'slug' => Str::slug('Smartwatches'), 'color' => true),
            array('category_id' => 2, 'name' => 'Tv and Audio', 'slug' => Str::slug('Tv and Audio'), 'color' => true),
            array('category_id' => 2, 'name' => 'Audio', 'slug' => Str::slug('Audio'), 'color' => true),
            array('category_id' => 2, 'name' => 'Car Audio', 'slug' => Str::slug('Car Audio'), 'color' => true),
            array('category_id' => 3, 'name' => 'Xbox', 'slug' => Str::slug('Xbox'), 'color' => true),
            array('category_id' => 3, 'name' => 'PC Gaming', 'slug' => Str::slug('PC Gaming'), 'color' => true),
            array('category_id' => 3, 'name' => 'Nintendo', 'slug' => Str::slug('Nintendo'), 'color' => true),
            array('category_id' => 4, 'name' => 'Laptops', 'slug' => Str::slug('Laptops'), 'color' => true),
            array('category_id' => 4, 'name' => 'Desktop', 'slug' => Str::slug('Desktop'), 'color' => true),
            array('category_id' => 4, 'name' => 'Storage', 'slug' => Str::slug('Storage'), 'color' => true),
            array('category_id' => 5, 'name' => 'Women', 'slug' => Str::slug('Women'), 'color' => true),
            array('category_id' => 5, 'name' => 'Men', 'slug' => Str::slug('Men'), 'color' => true),
            array('category_id' => 5, 'name' => 'Watches', 'slug' => Str::slug('Watches'), 'color' => true),
            array('category_id' => 5, 'name' => 'Glasses', 'slug' => Str::slug('Glasses'), 'color' => true),
        );  
        
        foreach($subcategories as $subcategory){
            Subcategory::factory(1)->create($subcategory);
        }
    }
}
