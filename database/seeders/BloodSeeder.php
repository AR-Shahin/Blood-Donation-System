<?php

namespace Database\Seeders;

use App\Models\Blood;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BloodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $bloods = ["A+","A-","B+","B-","AB+","AB-","O+","O-"];

        foreach($bloods as $blood){
            Blood::create(['name' => $blood]);
        }
    }
}
