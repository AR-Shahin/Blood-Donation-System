<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Admin;
use App\Models\BloodRequest;
use App\Models\Donor;
use App\Models\Product;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Admin::create([
            'name' => 'Admin',
            'email' => 'admin@mail.com',
            'password' => bcrypt('password')
        ]);
        Admin::create([
            'name' => 'Admin 2',
            'email' => 'admin2@mail.com',
            'password' => bcrypt('password')
        ]);

        User::create([
            "name" => "user",
            "email" => "user@mail.com",
            "password" => bcrypt("password"),
            "blood_id" => 1,
            "age" => rand(20,35),
            "status" => true,
            "phone" => "01754100439",
            "date_of_birth" => Carbon::now()->subYears(rand(18,34))->format('Y-m-d'),
            "upazila_id" => 1
        ]);
        Donor::create([
            "name" => "Donor",
            "email" => "donor@mail.com",
            "password" => bcrypt("password"),
            "blood_id" => 1,
            "age" => rand(20,35),
            "status" => true,
            "phone" => "01754100439",
            "date_of_birth" => Carbon::now()->subYears(rand(18,34))->format('Y-m-d'),
            "last_donation" => null,
            "upazila_id" => 1
        ]);
        Donor::create([
            "name" => "Donor2",
            "email" => "donor2@mail.com",
            "password" => bcrypt("password"),
            "blood_id" => 1,
            "age" => rand(20,35),
            "status" => true,
            "phone" => "01754100439",
            "date_of_birth" => Carbon::now()->subYears(rand(18,34))->format('Y-m-d'),
            "last_donation" => null,
            "upazila_id" => 1
        ]);
        Donor::create([
            "name" => "Donor3",
            "email" => "donor3@mail.com",
            "password" => bcrypt("password"),
            "blood_id" => 1,
            "age" => rand(20,35),
            "status" => true,
            "phone" => "01754100439",
            "date_of_birth" => Carbon::now()->subYears(rand(18,34))->format('Y-m-d'),
            "last_donation" => null,
            "upazila_id" => 1
        ]);
        // \App\Models\Admin::factory(10)->create();
        // Product::factory(10)->create();
        $this->call([DataSeeder::class,BloodSeeder::class]);
        // Donor::factory(500)->create();
        // User::factory(20)->create();
        //BloodRequest::factory(1000)->create();
    }
}
