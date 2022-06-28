<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class SubcategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $fakerFileName = $this->faker->image(
            storage_path("app/public/subcategories"),
            640,
            480
            );
            return [
                'image' => 'subcategories/'.$this->faker->imageUrl(640,480),
                'image' => 'app/public/subcategories'.basename($fakerFileName)
            ];
    }
}
