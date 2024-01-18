<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Barang>
 */
class BarangFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'kode_barang' => $this->faker->numberBetween(1001, 3001), 
            'nama_barang' => $this->faker->word, 
            'satuan' => $this->faker->randomElement(['kg', 'pieces', 'unit', 'gram', 'dus', 'pak', 'bal', 'buah', 'pasang']), 
            'quantity' => $this->faker->numberBetween(1, 50), 
        ];
    }
}
