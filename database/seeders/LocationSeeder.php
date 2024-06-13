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
            ['NAME' => 'Bahria Town Phase 2', 'AREA_ID' => 1],
            ['NAME' => 'Bahria Town Phase 3', 'AREA_ID' => 1],
            ['NAME' => 'Bahria Town Phase 4', 'AREA_ID' => 1],
            ['NAME' => 'Bahria Town Phase 5', 'AREA_ID' => 1],
            ['NAME' => 'Bahria Town Phase 6', 'AREA_ID' => 1],
            ['NAME' => 'Bahria Town Phase 7', 'AREA_ID' => 1],
            ['NAME' => 'Bahria Town Phase 8', 'AREA_ID' => 1],
            ['NAME' => 'Bahria Town Phase 8 Capital block', 'AREA_ID' => 1],
            ['NAME' => 'Bahria Town Phase 8 Overseas Sectors', 'AREA_ID' => 1],
            ['NAME' => 'Awami Villas', 'AREA_ID' => 1],
            ['NAME' => 'Safari Homes', 'AREA_ID' => 1],
            ['NAME' => 'Bahria Town Rawalpindi Commercial locations', 'AREA_ID' => 1],
            // add other locations here
        ];

        foreach ($locations as $location) {
            Location::create($location);
        }
    }
}
