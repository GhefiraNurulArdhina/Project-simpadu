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
            'kode_barang' => $this->faker->ean13, // contoh: EAN-13 barcode
            'nama_barang' => $this->faker->word, // contoh: Nama Barang
            'satuan' => $this->faker->randomElement(['kg', 'pieces', 'dozen']), // contoh: kg, pieces, dozen
            'quantity' => $this->faker->numberBetween(1, 100), // contoh: Jumlah barang
        ];
    }
}
