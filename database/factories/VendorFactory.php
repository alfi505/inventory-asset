<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\vendor>
 */
class VendorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nama' => fake()->name(),
            'perusahaan' => fake()->company(),
            'jabatan' => fake()->jobTitle(),
            'alamat' => fake()->address(),
            'kota' => fake()->city(),
            'daerah' => fake()->citySuffix(),
            'kode_pos' => fake()->postcode(),
            'no_telpon' => fake()->phoneNumber(),
        ];
    }
}