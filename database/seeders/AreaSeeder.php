<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Area;

class AreaSeeder extends Seeder
{
    public function run()
    {
        Area::create([
            'NAME' => 'Bahria Town Rawalpindi',
            'CITY_ID' => 1 // assuming the city ID is 1
        ]);
    }
}
