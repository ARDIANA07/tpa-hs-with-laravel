<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Santri>
 */
class SantriFactory extends Factory
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
            'kelas' => fake(),
            'tempat_lahir' => fake(),
            'tanggal_lahir' => fake()->date(),
            'alamat' => fake()->text(),
            'foto' => fake()
        ];
    }
}