<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->word,
            'description' => $this->faker->sentence,
            'price' => $this->faker->randomFloat(2, 0, 1000),
            'stock_quantity' => $this->faker->numberBetween(0, 100),
            'category' => $this->faker->randomElement(['Procesadores', 'Tarjetas Madre', 'Tarjetas Gráficas', 
                                                        'Almacenamiento', 'Gabinetes', 'Refrigeracion',
                                                        'Fuentes de Poder', 'Periféricos', 'Monitores', 'Otro']),
            'status' => $this->faker->randomElement(['Activo', 'Descontinuado']),
        ];
    }
}
