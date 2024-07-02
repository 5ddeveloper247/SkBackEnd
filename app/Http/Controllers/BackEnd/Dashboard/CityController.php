<?php

namespace App\Http\Controllers\BackEnd\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\City;
use App\Models\Area;
use App\Models\Location;
use App\Models\Sector;
use App\Models\PersonalInfo;
use App\Models\PropertyListingPaPe;

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

    public function getCityDetails(Request $request)
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
        else {
        $city = City::find($request->city_id);
        return response()->json(['success' => true, 'data' => $city]);
        }
    }

    public function updateCity(Request $request)
    {
        $city = City::find($request->edit_city_id);

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
        else{
        if($request->edit_city_name == ''){
            return response()->json(['success' => false, 'message' => 'City name is required']);
        }
        else if(strlen($request->edit_city_name) > 255) 
        {
            return response()->json(['success'=> false, 'message'=> 'City name must be less than 255 characters']);
        }
        else{
            $city = City::find($request->edit_city_id);
            $city->NAME = $request->edit_city_name;
            $city->save();
            return response()->json(['success' => true, 'message' => 'City updated successfully.']);
        }
    }
    }

    public function getAreaDetails(Request $request)
    {
        $area = Area::find($request->area_id);

        if (!$area) {
            return response()->json(['success' => false, 'message' => 'Area not found.']);
        }

        // Check if the city is associated with any properties
        $query = PersonalInfo::whereHas('propertyListingPape', function ($q) use ($area) {
            $q->where('address_area', $area->NAME); // Assuming 'address_city' stores city name
        });

        $propertyRecordCount = $query->count();

        if ($propertyRecordCount > 0) {
            return response()->json(['success' => false, 'message' => 'Area is associated with properties. Delete properties first.']);
        }else {
        $data['area'] = area::with('city')->where('id',$request->area_id)->first();
        $data['cities'] = City::all();
        return response()->json(['success' => true, 'data' => $data]);
        }
    }

    public function updateArea(Request $request)
    {
       
        if($request->edit_area_area == ''){
            return response()->json(['success' => false, 'message' => 'Area name is required']);
        }
        else if(strlen($request->edit_area_area) > 255) 
        {
            return response()->json(['success'=> false, 'message'=> 'Area name must be less than 255 characters']);
        }else if(strlen($request->edit_area_city) == '')
        {
            return response()->json(['success' => false, 'message' => 'Area City is required']);
        }
        else{
            $area = Area::find($request->edit_area_id);
            $area->NAME = $request->edit_area_area;
            $area->CITY_ID = $request->edit_area_city;
            $area->save();
            return response()->json(['success' => true, 'message' => 'Area updated successfully.']);
        }
        
    }

    public function deleteArea(Request $request)
    {
        $area = Area::find($request->area_id);

        if (!$area) {
            return response()->json(['success' => false, 'message' => 'Area not found.']);
        }

        
        $query = PersonalInfo::whereHas('propertyListingPape', function ($q) use ($area) {
            $q->where('address_area', $area->NAME); 
        });

        $propertyRecordCount = $query->count();

        if ($propertyRecordCount > 0) {
            return response()->json(['success' => false, 'message' => 'Area is associated with properties. Delete properties first.']);
        }
       else{
        $area->delete();
        return response()->json(['success' => true, 'message' => 'Area deleted successfully.']);
       }
    }

    public function getLocationDetails(Request $request)
    {
        
        $location = Location::find($request->location_id);

        if (!$location) {
            return response()->json(['success' => false, 'message' => 'Location not found.']);
        }

        
        $query = PersonalInfo::whereHas('propertyListingPape', function ($q) use ($location) {
            $q->where('address_location', $location->NAME); 
        });

        $propertyRecordCount = $query->count();

        if ($propertyRecordCount > 0) {
            return response()->json(['success' => false, 'message' => 'Location is associated with properties. Delete properties first.']);
        }else {
        $data['location'] = Location::with('area.city')->where('id',$request->location_id)->first();
        $data['areas'] = Area::all();
        $data['cities'] = City::all();
        return response()->json(['success' => true, 'data' => $data]);
        }
    }
    public function getcityareas(Request $request)
    {
        $city = $request->city_id;
        $areas = Area::where('CITY_ID', $city)->get();
        return response()->json(['success' => true, 'data' => $areas]);
    }


    public function updatelocation(Request $request)
    {
        
        if($request->edit_location_area == ''){
            return response()->json(['success' => false, 'message' => 'Area is required']);
        }
        else if(strlen($request->edit_location_location) == '')
        {
            return response()->json(['success' => false, 'message' => 'Location Name is required']);
        }
        else if(strlen($request->edit_location_location) > 255)
        {
            return response()->json(['success' => false, 'message' => 'Location Name must be less than 255 characters']);
        }
        else{
            $location = Location::find($request->edit_location_id);
            $location->AREA_ID = $request->edit_location_area;
            $location->NAME = $request->edit_location_location;
            $location->save();
            return response()->json(['success' => true, 'message' => 'Location updated successfully.']);
        
        }
    }

    function deleteLocation(Request $request)
    {
        $location = Location::find($request->location_id);

        if (!$location) {
            return response()->json(['success' => false, 'message' => 'Location not found.']);
        }

        
        $query = PersonalInfo::whereHas('propertyListingPape', function ($q) use ($location) {
            $q->where('address_location', $location->NAME); 
        });

        $propertyRecordCount = $query->count();

        if ($propertyRecordCount > 0) {
            return response()->json(['success' => false, 'message' => 'Location is associated with properties. Delete properties first.']);
        }
       else{
        $location->delete();
        return response()->json(['success' => true, 'message' => 'Location deleted successfully.']);
       }
    }

    public function getsectorDetails(Request $request){
        $sector = Sector::find($request->sector_id);

        if (!$sector) {
            return response()->json(['success' => false, 'message' => 'Sector not found.']);
        }

        
        $query = PersonalInfo::whereHas('propertyListingPape', function ($q) use ($sector) {
            $q->where('address_sector', $sector->NAME); 
        });

        $propertyRecordCount = $query->count();

        if ($propertyRecordCount > 0) {
            return response()->json(['success' => false, 'message' => 'Sector is associated with properties. Delete properties first.']);
        }else {
        $data['sector'] = Sector::with('location.area.city')->where('id',$request->sector_id)->first();
        $data['cities'] = City::all();
        $data['areas'] = Area::all();
        $data['locations'] = Location::all();
        return response()->json(['success' => true, 'data' => $data]);
        }
    }

    public function getarealocations(Request $request)
    {
        $area = $request->area_id;
        $locations = Location::where('AREA_ID', $area)->get();
        return response()->json(['success' => true, 'data' => $locations]);
    }


    public function updatesector(Request $request)
    {
        
        if($request->edit_sector_location == ''){
            return response()->json(['success' => false, 'message' => 'Location is required']);
        }
        else if(strlen($request->edit_sector_sector) == '')
        {
            return response()->json(['success' => false, 'message' => 'Sector Name is required']);
        }
        else if(strlen($request->edit_sector_sector) > 255)
        {
            return response()->json(['success' => false, 'message' => 'Sector Name must be less than 255 characters']);
        }
        else{
            $sector = Sector::find($request->edit_sector_id);
            $sector->LOCATION_ID = $request->edit_sector_location;
            $sector->NAME = $request->edit_sector_sector;
            $sector->save();
            return response()->json(['success' => true, 'message' => 'Sector updated successfully.']);
        }
        
    }

    public function deleteSector(Request $request)
    {
        $sector = Sector::find($request->sector_id);

        if (!$sector) {
            return response()->json(['success' => false, 'message' => 'Sector not found.']);
        }

        
        $query = PersonalInfo::whereHas('propertyListingPape', function ($q) use ($sector) {
            $q->where('address_sector', $sector->NAME); 
        });

        $propertyRecordCount = $query->count();

        if ($propertyRecordCount > 0) {
            return response()->json(['success' => false, 'message' => 'Sector is associated with properties. Delete properties first.']);
        }
       else{
        $sector->delete();
        return response()->json(['success' => true, 'message' => 'Sector deleted successfully.']);
       }   
    }



















}
