<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Category;
use App\Models\Brand;


class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = array(
            array('name' => 'Cell phones and tables', 'slug' => Str::slug('Cell phones and tables'), 'icon' => '<i class="fa-solid fa-mobile"></i>'),
            array('name' => 'Tv audio and video', 'slug' => Str::slug('Tv audio and video'), 'icon' => '<i class="fa-solid fa-tv"></i>'),
            array('name' => 'Console and video games', 'slug' => Str::slug('Console and videogames'), 'icon' => '<i class="fa-brands fa-xbox"></i>'),
            array('name' => 'Computing', 'slug' => Str::slug('Computers'), 'icon' => '<i class="fa-solid fa-computer"></i>'),
            array('name' => 'Fashion', 'slug' => Str::slug('Clothing and shoes'), 'icon' => '<i class="fa-solid fa-boot-heeled"></i>'),
        );     

        foreach($categories as $category){
            $category = Category::factory(1)->create($category)->first();
            $brands = Brand::factory(4)->create();
            
            foreach($brands as $brand){
                $brand->categories()->attach($category->id);
            }
        }
    }
}
