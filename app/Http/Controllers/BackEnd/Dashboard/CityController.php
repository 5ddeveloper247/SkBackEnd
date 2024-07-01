<?php

namespace App\Http\Controllers\BackEnd\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\City;
use App\Models\Area;
use App\Models\Location;
use App\Models\Sector;
use App\Models\PersonalInfo;

class CityController extends Controller
{
    //

    public function index(Request $request)
    {
        // Fetch cities where related areas, locations, and sectors exist
        $citiesData = City::whereHas('areas.locations.sectors')->get();

        // Fetch all cities, areas, locations, and sectors
        $cities = City::all();
        $areas = Area::with('city')->get();

        $locations = Location::with('area.city')->get();
        // dd($locations[0]->area->city->NAME);


        $sectors = Sector::with('location.area.city')->get();


        // Pass data to the view
        return view('Backend.admin.city.city', compact('citiesData', 'cities', 'areas', 'locations', 'sectors'));
    }



    public function addCity(Request $request)
    {
        $city = new City();
        $city->NAME = $request->add_city_city;
        $city->save();
        return redirect()->back()->with('success', 'City added successfully.');
    }

    public function addArea(Request $request)
    {

        $area = new Area();
        $area->NAME = $request->add_area_area;
        $area->CITY_ID = $request->add_area_city;
        $area->save();

        return redirect()->back()->with('success', 'Area added successfully.');
    }


    public function addLocation(Request $request)
    {

        $location = new Location();
        $location->NAME = $request->add_location_location;
        $location->AREA_ID = $request->add_location_area;
        $location->save();

        return redirect()->back()->with('success', 'Location added successfully.');
    }

    public function addSector(Request $request)
    {

        $sector = new Sector();
        $sector->NAME = $request->add_sector_sector;
        $sector->LOCATION_ID = $request->add_sector_location;
        $sector->save();

        return redirect()->back()->with('success', 'Sector added successfully.');
    }



    public function populateAreaLov(Request $request)
    {
        $city = $request->city;

        // $city_id = City::where('NAME', $city)->value('id');

        $areas = Area::where('CITY_ID', $city)->get();

        return response()->json(['areas' => $areas], 200);
    }

    public function populateLocationLov(Request $request)
    {
        $area = $request->area;

        // $area_id = Area::where('NAME', $area)->value('id');
        // $location_id = Location::where('NAME', $propertyInfo->propertyListingPape->address_location)->value('id');
        // $sector = $propertyInfo->propertyListingPape->address_sector;

        $locations = Location::where('AREA_ID', $area)->get();
        // $sectors = Sector::where('LOCATION_ID', $location_id)->get();

        //dd($propertyInfo);

        return response()->json(['locations' => $locations], 200);
    }
    public function populateSectorLov(Request $request)
    {
        $location = $request->location;

        $location_id = Location::where('NAME', $location)->value('id');

        $sectors = Sector::where('LOCATION_ID', $location_id)->get();

        //dd($propertyInfo);

        return response()->json(['sectors' => $sectors], 200);
    }





    public function deleteCity(Request $request)
    {
        $city = City::find($request->city_id);

        if (!$city) {
            return response()->json(['success' => false, 'message' => 'City not found.']);
        }

        // Check if the city is associated with any properties
        $query = PersonalInfo::whereHas('propertyListingPape', function ($q) use ($city) {
            $q->where('address_city', $city->NAME); // Assuming 'address_city' stores city name
        });

        $propertyRecordCount = $query->count();

        if ($propertyRecordCount > 0) {
            return response()->json(['success' => false, 'message' => 'City is associated with properties. Delete properties first.']);
        }

        // Proceed to delete the city
        $city->delete();
        return response()->json(['success' => true, 'message' => 'City deleted successfully.']);
    }
}
