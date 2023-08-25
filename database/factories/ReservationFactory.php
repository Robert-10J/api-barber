<?php

namespace Database\Factories;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ReservationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $currentYear = Carbon::now()->year;
        $randomMonth = $this->faker->numberBetween(1, 12);
        $randomDay = $this->faker->numberBetween(1, 30);
        $date = Carbon::create($currentYear, $randomMonth, $randomDay)->format('Y-m-d');

        return [
            'date_reservation' => $date,
            'hour_reservation' => $this->faker->time(),
            'user_id' => $this->faker->randomElement([1, 2])
        ];
    }
}
