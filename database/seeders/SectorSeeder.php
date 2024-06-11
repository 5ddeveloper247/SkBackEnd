<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Sector;

class SectorSeeder extends Seeder
{
    public function run()
    {
        $sectors = [
            ['NAME' => 'Phase 8 Sector A', 'LOCATION_ID' => 1],
            ['NAME' => 'Phase 8 Sector B', 'LOCATION_ID' => 1],
            ['NAME' => 'Phase 8 Sector C', 'LOCATION_ID' => 1],
            // add other sectors here
        ];

        foreach ($sectors as $sector) {
            Sector::create($sector);
        }
    }
}
