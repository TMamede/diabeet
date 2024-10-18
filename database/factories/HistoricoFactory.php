<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Historico>
 */
class HistoricoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array  
    {
        return [
            'tipo_diabetes_id' => $this->faker->randomElement([1, 2]), // Randomiza entre 1 e 2
            'cirurgia_motivo' => $this->faker->sentence(),
            'amputacao_onde' => $this->faker->word(),
            'amputacao_quando' => $this->faker->date(),
            'n_cigarros' => $this->faker->numberBetween(0, 50), // Exemplo: até 50 cigarros
            'inicio_tabagismo' => $this->faker->date(),
            'inicio_etilismo' => $this->faker->date(),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
