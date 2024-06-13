@extends('Backend.includes.common-template')

@push('styles')

@endpush


@section('content')
<div class="blk">
    <form action="{{ route('admin.property.main.submission.edit') }}" class="propertySubmissionForm_edit" method="POST"
        enctype="multipart/form-data">
        @csrf

        {{-- Personal info tabl_edit --}}

        <fieldset id="personal_info_tab_edit">
            <div>
                <h3>
                    Personal Info
                </h3>
            </div>
            <div class="form_row row">
                <input type="hidden" name="property_id_edit" id="property_id_edit">
               
                <div class="col-xs-6">
                    <h6>First Name<sup>*</sup></h6>
                    <div class="form_blk">
                        <input type="text" name="pInfo_firstName_edit" id="pInfo_firstName_edit" class="text_box"
                            placeholder="eg: John Wick">
                    </div>
                </div>
                <div class="col-xs-6">
                    <h6>Last Name<sup>*</sup></h6>
                    <div class="form_blk">
                        <input type="text" name="pInfo_lastName_edit" id="pInfo_lastName_edit" class="text_box"
                            placeholder="eg: John doe">
                    </div>
                </div>
                <div class="col-xs-6">
                    <h6>Email Address<sup>*</sup></h6>
                    <div class="form_blk">
                        <input type="email" name="pInfo_email_edit" id="pInfo_email_edit" class="text_box"
                            placeholder="eg: sample@gmail.com">
                    </div>
                </div>
                <div class="col-xs-6">
                    <h6>Phone Number<sup>*</sup></h6>
                    <div class="form_blk">
                        <input type="number" name="pInfo_phoneNumber_edit" id="pInfo_phoneNumber_edit" class="text_box"
                            placeholder="eg: +92300 0000 000">
                    </div>
                </div>

            </div>


            {{-- 2________ --}}
            <div>
                <h3>
                    Purpose
                </h3>
            </div>
            <div class="form_row row">
                <div class="col-sm-6 col-xs-12">
                    <h6>Purpose<sup>*</sup></h6>
                    <div class="form_blk">
                        <select name="purpose_purpose_edit" id="purpose_purpose_edit" class="text_box selectpicker"
                            data-container="body">
                            <option value="Sale">Sale</option>
                            <option value="Rent">Rent</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-6 col-xs-12">
                    <h6>Home<sup>*</sup></h6>
                    <div class="form_blk">
                        <select name="pupose_home_edit" id="pupose_home_edit" class="text_box selectpicker"
                            data-container="body">
                            <option value="House">House</option>
                            <option value="Flat">Flat</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-6 col-xs-12">
                    <h6>Plot<sup>*</sup></h6>
                    <div class="form_blk">
                        <select name="purpose_plot_edit" id="purpose_plot_edit" class="text_box selectpicker"
                            data-container="body">
                            <option value="Residential Plot">Residential Plot</option>
                            <option value="CommercialPlot">Commercial Plot</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-6 col-xs-12">
                    <h6>Commercial<sup>*</sup></h6>
                    <div class="form_blk">
                        <select name="purpose_commercial_edit" id="purpose_commercial_edit"
                            class="text_box selectpicker" data-container="body">
                            <option value="Office">Office</option>
                            <option value="Shop">Shop</option>
                            <option value="Building">Building</option>
                        </select>
                    </div>
                </div>
            </div>

            <div>
                <h3>
                    Address
                </h3>
            </div>
            <div class="form_row row">
                <div class="col-sm-4 col-xs-12">
                    <h6>City<sup>*</sup></h6>
                    <div class="form_blk">
                        <select name="address_city_edit" id="address_city_edit" class="text_box"
                            data-container="body">
                           {{-- city will be append here --}}
                        </select>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-12">
                    <h6>Area<sup>*</sup></h6>
                    <div class="form_blk">
                        <select name="address_area_edit" id="address_area_edit" class="text_box"
                            data-container="body">
                           {{-- area will be append here --}}
                        </select>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-12">
                    <h6>location<sup>*</sup></h6>
                    <div class="form_blk">
                        <select name="address_location_edit" id="address_location_edit"
                            class="text_box" data-container="body">
                            <!-- Options will be populated dynamically -->
                        </select>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-12">
                    <h6>Sector<sup>*</sup></h6>
                    <div class="form_blk">
                        <select name="address_sector_edit" id="address_sector_edit" class="text_box"
                            data-container="body">
                           {{-- sectors will be append here --}}
                        </select>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-12">
                    <h6>Address<sup>*</sup></h6>
                    <div class="form_blk">
                        <select name="address_address_edit" id="address_address_edit" class="text_box"
                            data-container="body">
                           
                        </select>
                    </div>
                </div>

            </div>




            <div>
                <h3>
                    Property detail
                </h3>
            </div>
            <div class="form_row row">
                <div class="col-sm-4 col-xs-12">
                    <h6>Plot No<sup>*</sup></h6>
                    <div class="form_blk">
                        <select name="propertyDetail_plot_num_edit" id="propertyDetail_plot_num_edit"
                            class="text_box selectpicker" data-container="body">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-12">
                    <h6>Area<sup>*</sup></h6>
                    <div class="form_blk">
                        <select name="propertyDetail_area_edit" id="propertyDetail_area_edit"
                            class="text_box selectpicker" data-container="body">
                            <option value="Marla">Marla</option>
                            <option value="Sq.Ft">Sq.Ft</option>
                            <option value="Sq.M">Sq.M</option>
                            <option value="Sq.Yd">Sq.Yd</option>
                            <option value="Kanal">Kanal</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-12">
                    <div class="form_blk">
                        <div>
                            <h6>Area Unit<sup>*</sup></h6>
                            <div class="form_blk">
                                <input type="number" name="propertyDetail_area_unit_edit"
                                    id="propertyDetail_area_unit_edit" class="text_box" placeholder="eg: 10">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-12">
                    <h6>Bedrooms<sup>*</sup></h6>
                    <div class="form_blk">
                        <select name="propertyDetail_bedrooms_edit" id="propertyDetail_bedrooms_edit"
                            class="text_box selectpicker" data-container="body">
                            <option value="1">1</option>
                            <option value="2"> 2</option>
                            <option value="3"> 3</option>
                            <option value="4"> 4</option>
                            <option value="5"> 5</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-12">
                    <h6>Bathrooms<sup>*</sup></h6>
                    <div class="form_blk">
                        <select name="propertyDetail_bathrooms_edit" id="propertyDetail_bathrooms_edit"
                            class="text_box selectpicker" data-container="body">
                            <option value="1">1</option>
                            <option value="2"> 2</option>
                            <option value="3"> 3</option>
                            <option value="4"> 4</option>
                            <option value="5"> 5</option>
                        </select>
                    </div>
                </div>
            </div>

            <div>
                <h3>
                    Extra info
                </h3>
            </div>
            <div class="contain">
                <div class="blk">
                    <div class="form_row row">
                        <div class="col-xs-12">
                            <h6>Title<sup>*</sup></h6>
                            <div class="form_blk">
                                <input type="text" name="extra_info_title" id="extra_info_title_edit" class="text_box"
                                    value=" " placeholder=" " readonly>
                            </div>
                        </div>

                        <div class="col-xs-12">
                            <h6>Posting As<sup>*</sup></h6>
                            <div class="form_blk">
                                <input type="text" name="extra_info_postingas" id="extra_info_postingas_edit"
                                    class="text_box" placeholder="Agent Name">
                            </div>
                        </div>

                        <div class="col-xs-12">
                            <h6>Mobile<sup>*</sup></h6>
                            <div class="form_blk">
                                <input type="number" name="extra_info_mobile_edit" id="extra_info_mobile_edit"
                                    class="text_box" placeholder="eg: 285432584452">
                            </div>
                        </div>

                        <div class="col-xs-12">
                            <h6>Landline<sup>*</sup></h6>
                            <div class="form_blk">
                                <input type="number" name="extra_info_landline_edit" id="extra_info_landline_edit"
                                    class="text_box" placeholder="eg: 285432584452">
                            </div>
                        </div>

                        <div class="col-xs-12">
                            <h6>Description</h6>
                            <div class="form_blk">
                                <textarea name="extra_info_description_edit" id="extra_info_description_edit"
                                    class="text_box" placeholder="Describe your vehicle"></textarea>
                            </div>
                        </div>

                    </div>
                </div>



                {{-- ________________________________________________________File
                Upload edit ______________________________ --}}

                <div class="blk">
                    <h4 class="subheading">Upload Photos</h4>
                    <div class="form_row row">
                        <div class="col-xs-12">
                            <div class="uploader_blk text_box">
                                <div class="icon">
                                    <img src="{{ asset('/images/upload.svg') }}" alt="">
                                </div>
                                <h6>Drag & Drop</h6>
                                <div class="or">OR</div>
                                <div class="btn_blk text-center">
                                    <input type="hidden" id="existingFiles" name="existing_files">
                                    <input type="file" id="fileInput_edit" name="photos_edit[]" multiple
                                        style="display:none;">
                                    <button type="button" class="site_btn sm"
                                        onclick="document.getElementById('fileInput_edit').click();">Browse
                                        Files</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="upload_lst_blk text_box">
                                <ul class="img_list flex" id="previewList_edit">
                                    <!-- Previews will be added here dynamically -->
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>



                {{-- ________________________________________________________File
                Upload edit end______________________________ --}}


                <div>
                    <h1>
                        amenities
                    </h1>
                </div>
                <div class="form_row row">

                    <div class="col-xs-12">
                        <h6>Amenities</h6>
                        <div class="form_blk">
                            <ul class="check_lst flex amenities_list_edit">
                                <li>
                                    <label>
                                        <input type="checkbox" name="check_Possesion_edit" id="check_Possesion_edit">
                                        <span>Possesion</span>
                                    </label>
                                </li>
                                <li>
                                    <label>
                                        <input type="checkbox" name="check_Balloted_edit" id="check_Balloted_edit">
                                        <span>Balloted</span>
                                    </label>
                                </li>
        
                                <li>
                                    <label>
                                        <input type="checkbox" name="check_Electricity_edit"
                                            id="check_Electricity_edit">
                                        <span>Electricity</span>
                                    </label>
                                </li>
                                <li>
                                    <label>
                                        <input type="checkbox" name="check_WaterSupply_edit"
                                            id="check_WaterSupply_edit">
                                        <span>Water Supply</span>
                                    </label>
                                </li>
                                <li>
                                    <label>
                                        <input type="checkbox" name="check_SuiGas_edit" id="check_SuiGas_edit">
                                        <span>Sui Gas</span>
                                    </label>
                                </li>
                                <li>
                                    <label>
                                        <input type="checkbox" name="check_BoundryWall_edit"
                                            id="check_BoundryWall_edit">
                                        <span>Boundry Wall</span>
                                    </label>
                                </li>
                                <li>
                                    <label>
                                        <input type="checkbox" name="check_NearbySchool_edit"
                                            id="check_NearbySchool_edit">
                                        <span>Nearby School</span>
                                    </label>
                                </li>
                                <li>
                                    <label>
                                        <input type="checkbox" name="check_NearbyHospitals_edit"
                                            id="check_NearbyHospitals_edit">
                                        <span>Nearby Hospitals</span>
                                    </label>
                                </li>
                                <li>
                                    <label>
                                        <input type="checkbox" name="check_NearbyShoppingMalls_edit"
                                            id="check_NearbyShoppingMalls_edit">
                                        <span>Nearby Shopping Malls</span>
                                    </label>
                                </li>
                                <li>
                                    <label>
                                        <input type="checkbox" name="check_NearbyRestaurant_edit"
                                            id="check_NearbyRestaurant_edit">
                                        <span>Nearby Restaurant</span>
                                    </label>
                                </li>
                                <li>
                                    <label>
                                        <input type="checkbox" name="check_NearbyPubicTransportService_edit"
                                            id="check_NearbyPubicTransportService_edit">
                                        <span>Nearby Pubic Transport Service</span>
                                    </label>
                                </li>
                                <li>
                                    <label>
                                        <input type="checkbox" name="check_SecurityStaff_edit"
                                            id="check_SecurityStaff_edit">
                                        <span>Security Staff</span>
                                    </label>
                                </li>
                                <li>
                                    <label>
                                        <input type="checkbox" name="check_CentralAirConditioning_edit"
                                            id="check_CentralAirConditioning_edit">
                                        <span>Central Air Conditioning</span>
                                    </label>
                                </li>
                                <li>
                                    <label>
                                        <input type="checkbox" name="check_WasteDisposal_edit"
                                            id="check_WasteDisposal_edit">
                                        <span>Waste Disposal </span>
                                    </label>
                                </li>
                                <li>
                                    <label>
                                        <input type="checkbox" name="check_DoubleGlazedWindows_edit"
                                            id="check_DoubleGlazedWindows_edit">
                                        <span>Double Glazed Windows</span>
                                    </label>
                                </li>
                                <li>
                                    <label>
                                        <input type="checkbox" name="check_CentralHeating_edit"
                                            id="check_CentralHeating_edit">
                                        <span>Central Heating</span>
                                    </label>
                                </li>
                                <li>
                                    <label>
                                        <input type="checkbox" name="check_StudyRoom_edit"
                                            id="check_StudyRoom_edit">
                                        <span>Study Room</span>
                                    </label>
                                </li>
                                <li>
                                    <label>
                                        <input type="checkbox" name="check_LaundryRoom_edit"
                                            id="check_LaundryRoom_edit">
                                        <span>Laundry Room</span>
                                    </label>
                                </li>
                                <li>
                                    <label>
                                        <input type="checkbox" name="check_BroadbandInternetAccess_edit"
                                            id="check_BroadbandInternetAccess_edit">
                                        <span>Broadband Internet Access</span>
                                    </label>
                                </li>
                                <li>
                                    <label>
                                        <input type="checkbox" name="check_PowerWindows_edit"
                                            id="check_PowerWindows_edit">
                                        <span>Power Windows</span>
                                    </label>
                                </li>
                                <li>
                                    <label>
                                        <input type="checkbox" name="check_SatelliteorCableTVReady_edit"
                                            id="check_SatelliteorCableTVReady_edit">
                                        <span>Satellite or Cable TV Ready</span>
                                    </label>
                                </li>


                            </ul>

                        </div>
                    </div>
                </div>


               <div class="my-div m-2"></div>
                <div class="btn_blk text-center">
                    <button type="submit" class="site_btn extra_info_continue-btn_edit long " >Submit</button>
                </div>
            </div>




    </form>
</div>
</fieldset>
@endsection


@push('scripts')
{{-- ________________________________setting edit value in edit form_________________________ --}}




<script>
    $(document).ready(() => {
        // var id = $(this).attr('data-id');
        var id = {{ $id }};
        console.log(id);
        let url = '/admin/getpropertydata';
        let type = 'POST';
        let data = new FormData();
        data.append('id', id);
       
        SendAjaxRequestToServer(type, url, data, '', getpropertydataEditResponse, '', '');
    });

function getpropertydataEditResponse(response) {

if (response.propertyInfo) {
    var property = response.propertyInfo;

    // step 1
    $('#property_id_edit').val(property.id);
    $('#pInfo_firstName_edit').val(property.pInfo_fName);
    $('#pInfo_lastName_edit').val(property.pInfo_lName);
    $('#pInfo_email_edit').val(property.pInfo_email);
    $('#pInfo_phoneNumber_edit').val(property.pInfo_phoneNumber);

    //step 2
    
    $('#purpose_purpose_edit').val(property?.proerty_listing_pape?.purpose_purpose).selectpicker('refresh');
    $('#pupose_home_edit').val(property?.proerty_listing_pape?.pupose_home).selectpicker('refresh');
    $('#purpose_plot_edit').val(property?.proerty_listing_pape?.purpose_plot).selectpicker('refresh');
    $('#purpose_commercial_edit').val(property?.proerty_listing_pape?.purpose_commercial).selectpicker('refresh');

    //step 3
     $('#address_city_edit').val(property?.property_listing_pape?.address_city);
       $('#address_area_edit').val(property?.property_listing_pape?.address_area);
        $('#address_phase_edit').val(property?.property_listing_pape?.address_phase);
        $('#address_sector_edit').val(property?.property_listing_pape?.address_sector);
         $('#address_address_edit').val(property?.property_listing_pape?.address_address);

        //  step 4
    $('#propertyDetail_plot_num_edit').val(property?.property_listing_pape?.propertyDetail_plot_num);
    $('#propertyDetail_area_edit').val(property?.property_listing_pape?.propertyDetail_area);
    $('#propertyDetail_area_unit_edit').val(property?.property_listing_pape?.propertyDetail_area_unit);
    $('#propertyDetail_bedrooms_edit').val(property?.property_listing_pape?.propertyDetail_bedrooms);
    $('#propertyDetail_bathrooms_edit').val(property?.property_listing_pape?.propertyDetail_bathrooms);

    // step 5
        $('#extra_info_title_edit').val(property?.property_listing_pape?.extra_info_title);
        $('#extra_info_postingas_edit').val(property?.property_listing_pape?.extra_info_postingas);
        $('#extra_info_mobile_edit').val(property?.property_listing_pape?.extra_info_mobile);
        $('#extra_info_landline_edit').val(property?.property_listing_pape?.extra_info_landline);
        $('#extra_info_description_edit').val(property?.property_listing_pape?.extra_info_description);


  // Function to generate and display image previews with remove button
  function displayImagePreviews(files) {
    const previewList = $('#previewList_edit');
    const existingFiles = $('#existingFiles');
    previewList.empty(); // Clear any existing previews
    const base_url = '{{ url('/') }}'; // Correctly set base URL

    let filePaths = [];

    files.forEach(file => {
        const listItem = $('<li>');
        listItem.html(`
            <div class="thumb">
                <img src="${base_url}/${file.image_uri}" alt="">
                <button type="button" class="x_btn" onclick="removeFile_edit(this)">&times;</button>
            </div>
        `);
        previewList.append(listItem);
        filePaths.push(file.image_uri); // Store file path
    });

    existingFiles.val(JSON.stringify(filePaths)); // Store file paths in hidden input
}

// Display existing images on load
if (property.property_record_files) {
    displayImagePreviews(property.property_record_files);
}

//setting amanities 
property.amenities.forEach(function(amenity) {
                var checkbox = document.getElementById('check_' + amenity.amenities + '_edit');
                if (checkbox) {
                    checkbox.checked = amenity.value === 1;
                }
            }); 

}


if (response.status == 402) { 
    var error = response.message;
    toastr.error(error, '', {
        timeOut: 3000
    });
}

}


document.getElementById('fileInput_edit').addEventListener('change', function(event) {
    const files = event.target.files;
    const previewList = document.getElementById('previewList_edit');

    Array.from(files).forEach((file, index) => {
        const reader = new FileReader();
        reader.onload = function(e) {
            const li = document.createElement('li');
            li.innerHTML += `
                <div class="thumb">
                    <img src="${e.target.result}" alt="">
                    <button type="button" class="x_btn" onclick="removeFile_edit(this)">&times;</button>
                </div>
            `;
            previewList.appendChild(li);
        };
        reader.readAsDataURL(file);
    });
});

</script>


{{-- ________________________________setting value in edit form end_________________________ --}}
<script>
    function removeFile_edit(btn) { 
    const li = btn.parentElement.parentElement;
    li.remove();

    const existingFiles = $('#existingFiles');
 
    let filePaths = JSON.parse(existingFiles.val());
    const base_url = '{{ url('/') }}';
    const filePath = btn.previousElementSibling.src.split(base_url + '/')[1];
    filePaths = filePaths.filter(path => path !== filePath);
    
    existingFiles.val(JSON.stringify(filePaths));
    
    const existingFilesx = $('#existingFiles');
    let filePathsx = JSON.parse(existingFilesx.val());
}
</script>


<script>
    function loadCityListingAndPropertyListing() {
    let url = '/admin/property/loadpropertyList';
    let type = 'GET';
    SendAjaxRequestToServer(type, url, '', '', loadPropertyandCityListing, '', '');
}

function loadPropertyandCityListing(response) {
    const cityData = response.cityData;

    // Populate city dropdown with initial "Select City" option
    let cityDropdown = document.getElementById('address_city_edit');
    cityDropdown.innerHTML = '<option value="">Select City</option>';
    cityData.forEach(city => {
        let option = document.createElement('option');
        option.value = city.NAME;
        option.textContent = city.NAME;
        cityDropdown.appendChild(option);
    });

    // Add event listener to update areas and sectors when city is changed
    cityDropdown.addEventListener('change', function() {
        populateAreasAndLocations(cityData);
    });
}

function populateAreasAndLocations(cityData) {
    let selectedCity = document.getElementById('address_city_edit').value;
    let city = cityData.find(city => city.NAME === selectedCity);
    
    // Populate area dropdown
    let areaDropdown = document.getElementById('address_area_edit');
    // areaDropdown.innerHTML = '<option value="">Select Area</option>';
    city.areas.forEach(area => {
        let option = document.createElement('option');
        option.value = area.NAME;
        option.textContent = area.NAME;
        console.log(option)
        areaDropdown.appendChild(option);
    });

    // Populate location dropdown
    let locationDropdown = document.getElementById('address_location_edit');
   // locationDropdown.innerHTML = '<option value="">Select Location</option>';
    city.areas.forEach(area => {
        area.locations.forEach(location => {
            let option = document.createElement('option');
            option.value = location.NAME;
            option.textContent = location.NAME;
            locationDropdown.appendChild(option);
        });
    });

    // Populate sectors dropdown
    populateSectors(city.areas);
    console.log("city.area",city.areas)
}


//while populating the sector i populate when the change in city occurs if the area is undefined or option not containing the area 
//like if we use placeholder or select area option it does not fetch the area and show undefined
function populateSectors(areas) {
    console.log("areas in f",areas)
    let selectedArea = document.getElementById('address_area_edit').value;
  
    let area = areas.find(area => area.NAME === selectedArea);
    


    let sectorDropdown = document.getElementById('address_sector_edit');
   // sectorDropdown.innerHTML = '<option value="">Select Sector</option>';
    if (area) {
        area.locations.forEach(location => {
            location.sectors.forEach(sector => {
                let option = document.createElement('option');
                option.value = sector.NAME;
                option.textContent = sector.NAME;
                console.log(option)
                sectorDropdown.appendChild(option);
            });
        });
    }
   
}

// Call this function to load the city and property listings when the page loads
document.addEventListener('DOMContentLoaded', function() {
    loadCityListingAndPropertyListing();
});

</script>

@endpush