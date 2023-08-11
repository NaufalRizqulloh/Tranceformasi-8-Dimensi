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

        $arrayOfInstitution = [' Institusi', ' Inc.'];
        $institution = $arrayOfInstitution[array_rand($arrayOfInstitution)];

        $arrayOfExpired = [true, false];
        $isExpired = $arrayOfExpired[array_rand($arrayOfExpired)];
        
        $arrayOfGoal = ['personaldev', 'careerdev'];
        $goal = $arrayOfGoal[array_rand($arrayOfGoal)];
        return [
            'nama' => fake()->name(),
            'kode_akses' => fake()->password(5, 6),
            'institusi' => fake()->city() . $institution,
            'total_peserta' => random_int(30, 300),
            'tanggal_mulai' => fake()->dateTimeAD("now", "Asia/Jakarta"),
            'tanggal_selesai' => fake()->dateTimeAD("now", "Asia/Jakarta"),
            'tujuan_tes' => $goal,
            'deskripsi' => fake()->text(),
            'is_expired' => $isExpired
        ];
    }
}
