<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PemainFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $positions = ['Striker', 'Back', 'Kiper'];
        return [
            'nama_pemain' => $this -> faker -> name(),
            'no_punggung' => $this -> faker -> numberBetween(0, 100),
            'posisi' => $this -> faker -> randomElement($positions),
        ];
    }
}
