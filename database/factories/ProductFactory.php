<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    public function definition(): array
    {
        file_put_contents()
        return [
            'name' => $this->faker->title(),
            'description' => $this->faker->text(),
            'img_path' => 'https://cdn.new-brz.net/public/images/articles/az/0/ghlGb9ipu7c7H1wlRlkMMhR6R27v4IXZUTzRW3hb.jpg',
            'price' => rand(1000,100000),
            'discount_price' => rand(1000,100000),
            'price_from' => rand(1000,100000),
        ];
    }
}
