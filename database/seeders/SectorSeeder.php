<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Sector;

class SectorSeeder extends Seeder
{
    public function run()
    {
        
        $sectors = [
            ['NAME' => 'Phase 8 Sector A', 'LOCATION_ID' => 8],
            ['NAME' => 'Phase 8 Sector B', 'LOCATION_ID' => 8],
            ['NAME' => 'Phase 8 Sector C', 'LOCATION_ID' => 8],
            ['NAME' => 'Phase 8 Sector D', 'LOCATION_ID' => 8],
            ['NAME' => 'Phase 8 Sector E', 'LOCATION_ID' => 8],
            ['NAME' => 'Phase 8 Sector E-1', 'LOCATION_ID' => 8],
            ['NAME' => 'Phase 8 Sector E-2', 'LOCATION_ID' => 8],
            ['NAME' => 'Phase 8 Sector E-3', 'LOCATION_ID' => 8],
            ['NAME' => 'Phase 8 Sector F', 'LOCATION_ID' => 8],
            ['NAME' => 'Phase 8 Sector F-1', 'LOCATION_ID' => 8],
            ['NAME' => 'Phase 8 Sector F-2', 'LOCATION_ID' => 8],
            ['NAME' => 'Phase 8 Sector F-3', 'LOCATION_ID' => 8],
            ['NAME' => 'Phase 8 Sector F-4', 'LOCATION_ID' => 8],
            ['NAME' => 'Phase 8 Sector G', 'LOCATION_ID' => 8],
            ['NAME' => 'Phase 8 Sector H', 'LOCATION_ID' => 8],
            ['NAME' => 'Phase 8 Sector I', 'LOCATION_ID' => 8],
            ['NAME' => 'Phase 8 Sector J', 'LOCATION_ID' => 8],
            ['NAME' => 'Phase 8 Sector K', 'LOCATION_ID' => 8],
            ['NAME' => 'Phase 8 Sector L', 'LOCATION_ID' => 8],
            ['NAME' => 'Phase 8 Sector M', 'LOCATION_ID' => 8],
            ['NAME' => 'Phase 8 Sector N', 'LOCATION_ID' => 8],
            ['NAME' => 'Phase 8 Sector P', 'LOCATION_ID' => 8],
            ['NAME' => 'Bahria Hills', 'LOCATION_ID' => 9],
            ['NAME' => 'Abu bakar Block', 'LOCATION_ID' => 9],
            ['NAME' => 'Umer Block', 'LOCATION_ID' => 9],
            ['NAME' => 'Usman Block', 'LOCATION_ID' => 9],
            ['NAME' => 'Ali Block', 'LOCATION_ID' => 9],
            ['NAME' => 'Phase 8 Sector F-5', 'LOCATION_ID' => 9],
            ['NAME' => 'Khalid Block', 'LOCATION_ID' => 9],
            ['NAME' => 'Usman D Block', 'LOCATION_ID' => 9],
            ['NAME' => 'Rafi Block', 'LOCATION_ID' => 9],
            ['NAME' => 'Awais Block', 'LOCATION_ID' => 9],
            ['NAME' => 'Rose Garden', 'LOCATION_ID' => 9],
            ['NAME' => 'Bahria Orchard', 'LOCATION_ID' => 9],
            ['NAME' => 'Bahria Town Phase 8 Overseas Sector 1', 'LOCATION_ID' => 10],
            ['NAME' => 'Bahria Town Phase 8 Overseas Sector 2', 'LOCATION_ID' => 10],
            ['NAME' => 'Bahria Town Phase 8 Overseas Sector 3', 'LOCATION_ID' => 10],
            ['NAME' => 'Bahria Town Phase 8 Overseas Sector 4', 'LOCATION_ID' => 10],
            ['NAME' => 'Bahria Town Phase 8 Overseas Sector 5', 'LOCATION_ID' => 10],
            ['NAME' => 'Bahria Town Phase 8 Overseas Sector 6', 'LOCATION_ID' => 10],
            ['NAME' => 'Bahria Town Phase 8 Overseas Sector 7', 'LOCATION_ID' => 10],
            ['NAME' => 'Awami Villas - 1', 'LOCATION_ID' => 11],
            ['NAME' => 'Awami Villas - 2', 'LOCATION_ID' => 11],
            ['NAME' => 'Awami Villas - 3', 'LOCATION_ID' => 11],
            ['NAME' => 'Awami Villas - 5', 'LOCATION_ID' => 11],
            ['NAME' => 'Awami Villas - 6', 'LOCATION_ID' => 11],
            ['NAME' => 'Safari Homes Sector A', 'LOCATION_ID' => 12],
            ['NAME' => 'Safari Homes Sector B', 'LOCATION_ID' => 12],
            ['NAME' => 'Safari Homes Sector C', 'LOCATION_ID' => 12],
            ['NAME' => 'Safari Homes Sector E', 'LOCATION_ID' => 12],
            ['NAME' => 'Safari villas', 'LOCATION_ID' => 12],
            ['NAME' => 'Safari villas 1', 'LOCATION_ID' => 12],
            ['NAME' => 'Safari villas 2', 'LOCATION_ID' => 12],
            ['NAME' => 'Safari villas 3', 'LOCATION_ID' => 12],
            ['NAME' => 'Safari Homes Sector F', 'LOCATION_ID' => 12],
            ['NAME' => 'Paradise Commercial', 'LOCATION_ID' => 13],
            ['NAME' => 'Business District', 'LOCATION_ID' => 13],
            ['NAME' => 'Mini Commercial', 'LOCATION_ID' => 13],
            ['NAME' => 'Spring North', 'LOCATION_ID' => 13],
            ['NAME' => 'River View Commercial', 'LOCATION_ID' => 13],
            ['NAME' => 'Ring Road Commercial', 'LOCATION_ID' => 13],
            ['NAME' => 'Hub Commercial', 'LOCATION_ID' => 13],
            ['NAME' => 'Square Commercial', 'LOCATION_ID' => 13],
            ['NAME' => 'liner Commercial', 'LOCATION_ID' => 13],
            ['NAME' => 'Civic enter', 'LOCATION_ID' => 13],
        ];

        foreach ($sectors as $sector) {
            Sector::create($sector);
        }
    }
}
