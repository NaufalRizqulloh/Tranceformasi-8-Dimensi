<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Event>
 */
class EventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $arrayOfIdk = [' Institusi', ' Inc.'];
        $institusi = $arrayOfIdk[array_rand($arrayOfIdk)];

        $arrayOfExpired = [true, false];
        $isExpired = $arrayOfExpired[array_rand($arrayOfExpired)];
        return [
            'nama' => fake()->name(),
            'kode_akses' => fake()->password(5, 6),
            'institusi' => fake()->city() . $institusi,
            'total_peserta' => random_int(30, 300),
            'tanggal_mulai' => fake()->dateTimeAD("now", "Asia/Jakarta"),
            'tanggal_selesai' => fake()->dateTimeAD("now", "Asia/Jakarta"),
            'deskripsi' => fake()->text(),
            'is_expired' => $isExpired
        ];
    }
}
