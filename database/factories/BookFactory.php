<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $release_publish = $this->faker->date();
        return [
            'title' => $this->faker->sentence(3),
            'category_id' => Category::inRandomOrder()->first()->id,
            'author' => $this->faker->name(),
            'release_date' => $release_publish,
            'publish_date' => $release_publish,
        ];
    }
}
