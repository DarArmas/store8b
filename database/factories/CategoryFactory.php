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
       $fakerFileName = $this->faker->image(
        storage_path("app/public/categories"),
        640,
        480
        );
        return [
            'image' => 'categories/'.$this->faker->imageUrl(640,480),
            'image' => 'app/public/categories'.basename($fakerFileName)
        ];
    }
}
