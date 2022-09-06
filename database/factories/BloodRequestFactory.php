<?php

namespace Database\Factories;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\BloodRequest>
 */
class BloodRequestFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "donor_id" => rand(1,2) % 2 == 0 ? null : rand(1,500),
            "user_id" => rand(1,20),
            "blood_id" => rand(1,8),
            "upazila_id" => rand(1,20),
            "date" => Carbon::now(),
            "address" => $this->faker->address(),
            "time" => Carbon::now()
        ];
    }
}
