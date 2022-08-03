<?php

namespace Database\Seeders;

use App\Models\District;
use App\Models\Division;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $divisions = ["Dhaka","Rajshahi","Chittagong","Khulna","Barishal","Rangpur","Mymensingh","Sylhet"];

        foreach($divisions as $division){
            Division::create(["name" => $division]);
        }

        $dhahkaDistricts = [
            "Dhaka","Faridpur","Gazipur","Narayanganj","Narsingdi","Kisorgong"
        ];

        foreach($dhahkaDistricts as $district){
            District::create(["division_id" => 1,"name"=> $district]);
        }
        $rajshaiDistricts = [
                "Rajshahi",
                "Sirajganj",
                "Pabna",
                "Bogura",
                "Chapainawabganj",
                "Naogaon",
                "Joypurhat",
                "Natore",
                ];

        foreach($rajshaiDistricts as $district){
            District::create(["division_id" => 2,"name"=> $district]);
        }



    }
}
