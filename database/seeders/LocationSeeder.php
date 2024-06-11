<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Location;

class LocationSeeder extends Seeder
{
    public function run()
    {
        $locations = [
            ['NAME' => 'Bahria Town Phase 1', 'AREA_ID' => 1],
            ['NAME' => 'Bahria Town Phase 4', 'AREA_ID' => 1],
            ['NAME' => 'Bahria Town Phase 2', 'AREA_ID' => 1],
            // add other locations here
        ];

        foreach ($locations as $location) {
            Location::create($location);
        }
    }
}
