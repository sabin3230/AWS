<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'type' => $this->faker->randomElement(['cd', 'book','game']),
            'title' => $this->faker->word(),
            'firstname' => $this->faker->firstName(),
            'lastname' => $this->faker->lastName(),
            'price'=>$this->faker->randomNumber(),
            'pages'=>$this->faker->randomNumber(),
        ];
    }
}
