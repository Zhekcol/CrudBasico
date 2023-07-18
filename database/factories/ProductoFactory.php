<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Producto>
 */
class ProductoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'descripcion' => fake()->paragraph(),
            'marca' => fake()->randomElement(['Nike', 'Adidas', 'Supreme', 'BOSS']),
            'talla' => fake()->randomElement(['S', 'L', 'M', 'XL', 'XXL']),
            'activo' => fake()->randomNumber(),
        ];
    }
}
