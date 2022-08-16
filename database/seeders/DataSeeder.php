<?php

namespace Database\Seeders;

use App\Models\District;
use App\Models\Division;
use App\Models\Upazila;
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

        $dhahkaDistricts = [ // 1 - 6
            "Dhaka","Faridpur","Gazipur","Narayanganj","Narsingdi","Kisorgong"
        ];

        foreach($dhahkaDistricts as $district){
            District::create(["division_id" => 1,"name"=> $district]);
        }
        $rajshaiDistricts = [ // 7 - 14
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

        $chittagongDistricts = [ // 15 - 26
            "Chittagong"," Cox's Bazar", "Rangamati", "Bandarban", "Khagrachhari", "Feni", "Lakshmipur", "Comilla", "Noakhali", "Brahmanbaria", "Chandpur"
            ];

        foreach($chittagongDistricts as $district){
            District::create(["division_id" => 3,"name"=> $district]);
        }

        for($i = 1;$i<=100;$i++){
            Upazila::create([
                "name" => "Upazila $i",
                "district_id" => rand(1,25)
            ]);
        }

    }
}
