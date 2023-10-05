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
            "nama_barang" => fake()->sentence(),
            "harga" => rand(10000, 50000),
            "stok" => rand(50, 500),
            "id_supplier" => rand(1, 10)
        ];
    }
}
