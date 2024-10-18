<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Paciente>
 */
class PacienteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'cpf' => $this->gerarNumeroUnicocpf(),
            'email' => $this->faker->unique()->safeEmail,
            'nome' => $this->faker->name,
            'prontuario' => $this->gerarNumeroUnicopront(),
            'data_nasc' => $this->faker->date(),
            'orientacao_sexual_id' => $this->faker->numberBetween(1, 4),
            'estado_civil_id' => $this->faker->numberBetween(1, 5),
            'etnia_id' => $this->faker->numberBetween(1, 5),
            'endereco_id' => $this->faker->numberBetween(1, 2),
            'ocupacao' => $this->faker->jobTitle,
            'renda_familiar' => $this->faker->randomFloat(2, 1000, 10000),
            'beneficio_id' => $this->faker->numberBetween(1, 3),
            'reside_id' => $this->faker->numberBetween(1, 4),
            'num_pss_casa' => $this->faker->numberBetween(1, 5),
            'user_id' => $this->faker->randomElement([1, 2]),
            'historico_id' => $this->faker->numberBetween(1, 11),
        ];
    }

    private function gerarNumeroUnicocpf()
    {
        // Gera um número aleatório de 11 dígitos
        $numero = str_pad(rand(0, 99999999999), 11, '0', STR_PAD_LEFT);
        // Garante que o número é único
        return $this->faker->unique()->randomElement([$numero]);
    }

    private function gerarNumeroUnicopront()
    {
        // Gera um número aleatório de 6 dígitos
        $numero = str_pad(rand(0, 999999), 6, '0', STR_PAD_LEFT);
        // Garante que o número é único
        return $this->faker->unique()->randomElement([$numero]);
    }
}
