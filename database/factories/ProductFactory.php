<?php 

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' => $this->faker->word(2, true),
            'code' => $this->faker->unique()->bothify('PRD###'),
            'image' => 'default.jpg', 
            'category_id' => 1,
            'subcategory_id' =>1,
            'price' =>$this->faker->numberBetween(10000, 50000),
            // 'stock' => $this->faker->numberBetween(1, 100),
            'description' =>$this->faker->sentence(10),
        ];
    }
        

}