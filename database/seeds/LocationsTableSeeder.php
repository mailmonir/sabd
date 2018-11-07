<?php

use Illuminate\Database\Seeder;

class LocationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Location::create([
            'location_name' => 'Dhaka',
            'travel_cost' => 5000,
            'group' => 1
        ]);
        App\Location::create([
            'location_name' => 'Gazipur',
            'travel_cost' => 5000,
            'group' => 1
        ]);
        App\Location::create([
            'location_name' => 'Narayanganj',
            'travel_cost' => 5000,
            'group' => 1
        ]);
        App\Location::create([
            'location_name' => 'Chittagong',
            'travel_cost' => 40000,
            'group' => 2
        ]);
        App\Location::create([
            'location_name' => 'Sylhet',
            'travel_cost' => 40000,
            'group' => 2
        ]);
        App\Location::create([
            'location_name' => 'Khulna',
            'travel_cost' => 40000,
            'group' => 2
        ]);
        App\Location::create([
            'location_name' => 'Rangpur',
            'travel_cost' => 40000,
            'group' => 2
        ]);
        App\Location::create([
            'location_name' => 'Mymensingh',
            'travel_cost' => 5000,
            'group' => 1
        ]);
        App\Location::create([
            'location_name' => 'Barisal',
            'travel_cost' => 40000,
            'group' => 2
        ]);
    }
}
