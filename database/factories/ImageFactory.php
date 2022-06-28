<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ImageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $fakerFileName = $this->faker->image(
            storage_path("app/public/products"),
            640,
            480
            );
            return [
                'image' => 'product/'.$this->faker->imageUrl(640,480),
                'image' => 'app/public/product'.basename($fakerFileName)
            ];
    }
}
