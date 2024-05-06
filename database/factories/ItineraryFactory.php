<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Itinerary>
 */
class ItineraryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //campo title
            'title' => $this->faker->sentence(rand(5, 10)),
            //campo description
            'description' => $this->faker->paragraph(rand(2, 5)),
            //campo hora_inicio
            'start' => $this->faker->time(),
            //campo hora_fin
            'end' => $this->faker->time(),
            
        ];
    }
}
