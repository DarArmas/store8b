<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Category;
//use Faker\Generator as Faker; 
//use Faker\Provider as Faker;


class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    
    public function definition()
    {
       // $faker = Faker\Factory::create();
       $fakerFileName = $this->faker->image(
        storage_path("app/public/categories"),
        640,
        480
    );
        return [
           // 'image' => $this->faker->image(storage_path().'/app/public/categories', 640, 480, null, false)
            //'image' => 'categories/' . \Faker\Provider\Image::image(storage_path().'/app/public/',640, 480, null, false)
            // 'image' => \Faker\Provider\Image::image(storage_path().'/app/public/categories',400,300, null, false) 
            //'image' => $this->faker->imageUrl(150,150)
            'image' => 'categories/'.$this->faker->imageUrl(640,480),
            'image' => 'app/public/categories'.basename($fakerFileName)
        ];

        // 'image' => 'products/' . $this->$faker->image(storage_path().'/app/public/products',640, 480, null, false)
    }
}
