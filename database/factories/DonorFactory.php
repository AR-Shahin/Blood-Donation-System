<?php

namespace Database\Factories;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Donor>
 */
class DonorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "name" => $this->faker->name,
            "email" => $this->faker->email(),
            "password" => bcrypt("password"),
            "blood_id" => rand(1,8),
            "age" => rand(20,35),
            "phone" => $this->faker->phoneNumber,
            "status" => true,
            "date_of_birth" => Carbon::now()->subYears(rand(18,34))->format('Y-m-d'),
            "last_donation" => Carbon::now()
                                            ->subMonth(rand(3,4))
                                            ->format('Y-m-d'),
            "upazila_id" => rand(1,25)
        ];
    }
}
