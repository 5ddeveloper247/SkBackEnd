@extends('Backend.includes.common-template')

@push('styles')
<style>
    /* Chrome, Safari, Edge, Opera */
    input[type="number"]::-webkit-outer-spin-button,
    input[type="number"]::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }
</style>
@endpush


@section('content')
@if (session('error'))
<div class="alert alert-danger">
    {{ session('error') }}
</div>
@endif

@if (session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif

@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
<div class="blk">
    <form action="{{ route('admin.property.main.submission.edit') }}" class="propertySubmissionForm_edit"
        id="propertySubmissionForm_edit" method="POST" enctype="multipart/form-data">
        @csrf

        {{-- Personal info tabl_edit --}}

        <fieldset id="personal_info_tab_edit">
            <div>
                <h3>
                    Personal Info
                </h3>
            </div>
            <div class="form_row row">
                <input type="hidden" name="property_id_edit" value="{{$propertyInfo->id}}" id="property_id_edit">

                <div class="col-xs-6">
                    <h6>First Name<sup>*</sup></h6>
                    <div class="form_blk">
                        <input type="text" name="pInfo_firstName_edit" id="pInfo_firstName_edit" class="text_box"
                            placeholder="eg: John Wick" maxlength="50"
                            value="{{ old('pInfo_firstName_edit', $propertyInfo->pInfo_fName) }}">
                        @if ($errors->has('pInfo_firstName_edit'))
                        <span class="text-danger">{{ $errors->first('pInfo_firstName_edit') }}</span>
                        @endif
                    </div>
                </div>

                <div class="col-xs-6">
                    <h6>Last Name<sup>*</sup></h6>
                    <div class="form_blk">
                        <input type="text" name="pInfo_lastName_edit" id="pInfo_lastName_edit" class="text_box"
                            placeholder="eg: John doe" maxlength="50"
                            value="{{ old('pInfo_lastName_edit', $propertyInfo->pInfo_lName) }}">
                        @if ($errors->has('pInfo_lastName_edit'))
                        <span class="text-danger">{{ $errors->first('pInfo_lastName_edit') }}</span>
                        @endif
                    </div>
                </div>

                <div class="col-xs-6">
                    <h6>Email Address<sup>*</sup></h6>
                    <div class="form_blk">
                        <input type="email" name="pInfo_email_edit" id="pInfo_email_edit" class="text_box"
                            placeholder="eg: sample@gmail.com" maxlength="50"
                            value="{{ old('pInfo_email_edit', $propertyInfo->pInfo_email) }}">
                        @if ($errors->has('pInfo_email_edit'))
                        <span class="text-danger">{{ $errors->first('pInfo_email_edit') }}</span>
                        @endif
                    </div>
                </div>
                <div class="col-xs-6">
                    <h6>Phone Number<sup>*</sup></h6>
                    <div class="form_blk">
                        <input type="tel" name="pInfo_phoneNumber_edit" id="pInfo_phoneNumber_edit" class="text_box"
                            placeholder="eg: +92300 0000 000" maxlength="15" minlength="7" pattern="\d{7,15}"
                            value="{{ old('pInfo_phoneNumber_edit', $propertyInfo->pInfo_phoneNumber) }}">
                        <span id="pInfo_phoneNumber_edit_error" class="text-danger"></span>
                        @if ($errors->has('pInfo_phoneNumber_edit'))
                        <span class="text-danger">{{ $errors->first('pInfo_phoneNumber_edit') }}</span>
                        @endif
                    </div>
                </div>


            </div>


            {{-- 2________ --}}
            <br>
            <div>
                <h3>
                    Purpose

                    <sup style="font-size: 10px;">(Choose at least one type Home**, Plot**, Commercial**)</sup>


                </h3>
            </div>
            <div class="form_row row">
                <div class="col-sm-6 col-xs-12">
                    <br>
                    <h6>Purpose<sup>*</sup></h6>
                    <div class="form_blk">
                        <select name="purpose_purpose_edit" id="purpose_purpose_edit" class="text_box"
                            data-container="body">
                            <option value="">Select Purpose</option>
                            @php
                            // Get the previously selected purpose from the propertyInfo model
                            $selectedPurpose = old('purpose_purpose_edit',
                            $propertyInfo->propertyListingPape->purpose_purpose ?? '');
                            $purposes = ['Sale', 'Rent'];
                            @endphp
                            @foreach ($purposes as $purpose)
                            <option value="{{ $purpose }}" {{ $selectedPurpose==$purpose ? 'selected' : '' }}>
                                {{ $purpose }}
                            </option>
                            @endforeach
                        </select>
                        @if ($errors->has('purpose_purpose_edit'))
                        <span class="text-danger">{{ $errors->first('purpose_purpose_edit') }}</span>
                        @endif
                    </div>
                </div>

                <div class="col-sm-6 col-xs-12" style="margin-top: 24px; !important">
                    <h6>Home<sup>**</sup></h6>
                    <div class="form_blk">
                        <select name="pupose_home_edit" id="pupose_home_edit" class="text_box" data-container="body">
                            <option value="">Select Home</option>
                            @php
                            // Get the previously selected home purpose from the propertyInfo model
                            $selectedHomePurpose = old('pupose_home_edit',
                            $propertyInfo->propertyListingPape->pupose_home ?? '');
                            $homePurposes = ['House', 'Flat'];
                            @endphp
                            @foreach ($homePurposes as $homePurpose)
                            <option value="{{ $homePurpose }}" {{ $selectedHomePurpose==$homePurpose ? 'selected' : ''
                                }}>
                                {{ $homePurpose }}
                            </option>
                            @endforeach
                        </select>
                        @if ($errors->has('pupose_home_edit'))
                        <span class="text-danger">{{ $errors->first('pupose_home_edit') }}</span>
                        @endif
                    </div>
                </div>



                <div class="col-sm-6 col-xs-12">
                    <h6>Plot<sup>**</sup></h6>
                    <div class="form_blk">
                        <select name="purpose_plot_edit" id="purpose_plot_edit" class="text_box" data-container="body">
                            <option value="">Select Plot</option>
                            @php
                            // Get the previously selected plot purpose from the propertyInfo model
                            $selectedPlotPurpose = old('purpose_plot_edit',
                            $propertyInfo->propertyListingPape->purpose_plot ?? '');
                            $plotPurposes = ['Residential', 'Commercial'];
                            @endphp
                            @foreach ($plotPurposes as $plotPurpose)
                            <option value="{{ $plotPurpose }}" {{ $selectedPlotPurpose==$plotPurpose ? 'selected' : ''
                                }}>
                                {{ $plotPurpose }}
                            </option>
                            @endforeach
                        </select>
                        @if ($errors->has('purpose_plot_edit'))
                        <span class="text-danger">{{ $errors->first('purpose_plot_edit') }}</span>
                        @endif
                    </div>
                </div>


                <div class="col-sm-6 col-xs-12">
                    <h6>Commercial<sup>**</sup></h6>
                    <div class="form_blk">
                        <select name="purpose_commercial_edit" id="purpose_commercial_edit" class="text_box"
                            data-container="body">
                            <option value="">Select Commercial</option>
                            @php
                            // Get the previously selected commercial purpose from the propertyInfo model
                            $selectedCommercialPurpose = old('purpose_commercial_edit',
                            $propertyInfo->propertyListingPape->purpose_commercial ?? '');
                            $commercialPurposes = ['Office', 'Shop', 'Building'];
                            @endphp
                            @foreach ($commercialPurposes as $commercialPurpose)
                            <option value="{{ $commercialPurpose }}" {{ $selectedCommercialPurpose==$commercialPurpose
                                ? 'selected' : '' }}>
                                {{ $commercialPurpose }}
                            </option>
                            @endforeach
                        </select>
                        @if ($errors->has('purpose_commercial_edit'))
                        <span class="text-danger">{{ $errors->first('purpose_commercial_edit') }}</span>
                        @endif
                    </div>
                </div>




                <div class="col-xs-6">
                    <h6>Price<sup>*</sup></h6>
                    <div class="form_blk">
                        <input type="number" name="price_edit" id="price_edit"
                            value="{{ old('price_edit', $propertyInfo->price) }}" class="text_box"
                            placeholder="Price in PKR" maxlength="15" minlength="7">
                        @if ($errors->has('price_edit'))
                        <span class="text-danger">{{ $errors->first('price_edit') }}</span>
                        @endif
                    </div>
                </div>

            </div>
            {{-- Address --}}

            <br>
            <div>
                <h3>
                    Address
                </h3>
            </div>

            <div class="form_row row">
                <div class="col-sm-6 col-xs-12">
                    <h6>City<sup>*</sup></h6>
                    <div class="form_blk">
                        <select name="address_city_edit" id="address_city_edit" class="text_box" data-container="body"
                            onchange="populateAreasLov();">
                            <option value="">Choose City</option>
                            @foreach ($cities as $city)
                            <option value="{{ $city->NAME }}" {{ old('address_city_edit', $propertyInfo->
                                propertyListingPape->address_city ?? '') == $city->NAME ? 'selected' : '' }}>
                                {{ $city->NAME }}
                            </option>
                            @endforeach
                        </select>
                        @if ($errors->has('address_city_edit'))
                        <span class="text-danger">{{ $errors->first('address_city_edit') }}</span>
                        @endif
                    </div>
                </div>

                <div class="col-sm-6 col-xs-12">
                    <h6>Area<sup>*</sup></h6>
                    <div class="form_blk">
                        <select name="address_area_edit" id="address_area_edit" class="text_box" data-container="body"
                            onchange="populateLocationLov();">
                            <option value="">Choose Area</option>
                            @foreach ($areas as $area)
                            <option value="{{ $area->NAME }}" {{ old('address_area_edit', $propertyInfo->
                                propertyListingPape->address_area ?? '') == $area->NAME ? 'selected' : '' }}>
                                {{ $area->NAME }}
                            </option>
                            @endforeach
                        </select>
                        @if ($errors->has('address_area_edit'))
                        <span class="text-danger">{{ $errors->first('address_area_edit') }}</span>
                        @endif
                    </div>
                </div>

                <div class="col-sm-6 col-xs-12">
                    <h6>Location<sup>*</sup></h6>
                    <div class="form_blk">
                        <select name="address_location_edit" id="address_location_edit" class="text_box"
                            data-container="body" onchange="populateSectorLov();">
                            <option value="">Choose Location</option>
                            @foreach ($locations as $location)
                            <option value="{{ $location->NAME }}" {{ old('address_location_edit', $propertyInfo->
                                propertyListingPape->address_location ?? '') == $location->NAME ? 'selected' : '' }}>
                                {{ $location->NAME }}
                            </option>
                            @endforeach
                        </select>
                        @if ($errors->has('address_location_edit'))
                        <span class="text-danger">{{ $errors->first('address_location_edit') }}</span>
                        @endif
                    </div>
                </div>

                <div class="col-sm-6 col-xs-12">
                    <h6>Sector<sup>*</sup></h6>
                    <div class="form_blk">
                        <select name="address_sector_edit" id="address_sector_edit" class="text_box"
                            data-container="body">
                            <option value="">Choose Sector</option>
                            @foreach ($sectors as $sector)
                            <option value="{{ $sector->NAME }}" {{ old('address_sector_edit', $propertyInfo->
                                propertyListingPape->address_sector ?? '') == $sector->NAME ? 'selected' : '' }}>
                                {{ $sector->NAME }}
                            </option>
                            @endforeach
                        </select>
                        @if ($errors->has('address_sector_edit'))
                        <span class="text-danger">{{ $errors->first('address_sector_edit') }}</span>
                        @endif
                    </div>
                </div>

                <div class="col-sm-12 col-xs-12">
                    <h6>Address<sup>*</sup></h6>
                    <textarea class="text_box" placeholder="Describe your address" name="address_address_edit"
                        id="address_address_edit" spellcheck="false"
                        maxlength="200">{{ old('address_address_edit', $propertyInfo->propertyListingPape->address_address ?? '') }}</textarea>
                    @if ($errors->has('address_address_edit'))
                    <span class="text-danger">{{ $errors->first('address_address_edit') }}</span>
                    @endif
                </div>

                <div class="col-sm-12 col-xs-12">
                    <h6>Google Map Link<sup></sup></h6>
                    <input class="text_box" placeholder="Map Location" name="address_map_location_edit"
                        id="address_map_location_edit"
                        value="{{ old('address_map_location_edit', $propertyInfo->propertyListingPape->address_map_location ?? '') }}"
                        spellcheck="false" maxlength="1000" />
                    @if ($errors->has('address_map_location_edit'))
                    <span class="text-danger">{{ $errors->first('address_map_location_edit') }}</span>
                    @endif
                </div>
            </div>




            <br>
            <div>
                <h3>
                    Property detail
                </h3>
            </div>
            <div class="form_row row">
                <div class="col-sm-6 col-xs-12">
                    <h6>Plot No<sup>*</sup></h6>
                    <div class="form_blk">
                        <input type="text" name="propertyDetail_plot_num_edit"
                            value="{{ old('propertyDetail_plot_num_edit', $propertyInfo->propertyListingPape->propertyDetail_plot_num ?? '') }}"
                            id="propertyDetail_plot_num_edit" class="text_box" data-container="body" maxlength="10" />
                        @if ($errors->has('propertyDetail_plot_num_edit'))
                        <span class="text-danger">{{ $errors->first('propertyDetail_plot_num_edit') }}</span>
                        @endif
                    </div>
                </div>

                <div class="col-sm-6 col-xs-12">
                    <h6>Area<sup>*</sup></h6>
                    <div class="form_blk">
                        @php
                        $selectedAreaUnit = old('propertyDetail_area_edit',
                        $propertyInfo->propertyListingPape->propertyDetail_area ?? '');
                        $areaUnits = ['Marla', 'Sq.Ft', 'Sq.M', 'Sq.Yd', 'Kanal'];
                        @endphp

                        <select name="propertyDetail_area_edit" id="propertyDetail_area_edit" class="text_box"
                            data-container="body">
                            @foreach ($areaUnits as $areaUnit)
                            <option value="{{ $areaUnit }}" {{ $selectedAreaUnit===$areaUnit ? 'selected' : '' }}>
                                {{ $areaUnit }}
                            </option>
                            @endforeach
                        </select>
                        @if ($errors->has('propertyDetail_area_edit'))
                        <span class="text-danger">{{ $errors->first('propertyDetail_area_edit') }}</span>
                        @endif
                    </div>
                </div>

                <div class="col-sm-6 col-xs-12">
                    <div class="form_blk">
                        <div>
                            <h6>Area Unit<sup>*</sup></h6>
                            <div class="form_blk">
                                <input type="number" name="propertyDetail_area_unit_edit"
                                    id="propertyDetail_area_unit_edit" class="text_box"
                                    value="{{ old('propertyDetail_area_unit_edit', $propertyInfo->propertyListingPape->propertyDetail_area_unit ?? '') }}"
                                    placeholder="eg: 10" maxlength="5">
                                @if($errors->has('propertyDetail_area_unit_edit'))
                                <span class="text-danger">{{ $errors->first('propertyDetail_area_unit_edit') }}</span>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-xs-12">
                    <h6>Bedrooms<sup>*</sup></h6>
                    <div class="form_blk">
                        <input type="text" name="propertyDetail_bedrooms_edit"
                            value="{{ old('propertyDetail_bedrooms_edit', $propertyInfo->propertyListingPape->propertyDetail_bedrooms ?? '') }}"
                            id="propertyDetail_bedrooms_edit" class="text_box" data-container="body" maxlength="3" />
                        @if ($errors->has('propertyDetail_bedrooms_edit'))
                        <span class="text-danger">{{ $errors->first('propertyDetail_bedrooms_edit') }}</span>
                        @endif
                    </div>
                </div>

                <div class="col-sm-6 col-xs-12">
                    <h6>Bathrooms<sup>*</sup></h6>
                    <div class="form_blk">
                        <input type="text" name="propertyDetail_bathrooms_edit"
                            value="{{ old('propertyDetail_bathrooms_edit', $propertyInfo->propertyListingPape->propertyDetail_bathrooms ?? '') }}"
                            id="propertyDetail_bathrooms_edit" class="text_box" data-container="body" maxlength="3" />
                        @if ($errors->has('propertyDetail_bathrooms_edit'))
                        <span class="text-danger">{{ $errors->first('propertyDetail_bathrooms_edit') }}</span>
                        @endif
                    </div>
                </div>
            </div>


            <br>
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
                                <input type="text" name="extra_info_title_edit" id="extra_info_title_edit"
                                    class="text_box"
                                    value="{{ old('extra_info_title_edit', $propertyInfo->propertyListingPape->extra_info_title ?? '') }}"
                                    placeholder=" " maxlength="255">
                                @if ($errors->has('extra_info_title_edit'))
                                <span class="text-danger">{{ $errors->first('extra_info_title_edit') }}</span>
                                @endif
                            </div>
                        </div>

                        <div class="col-xs-12">
                            <h6>Posting As<sup>*</sup></h6>
                            <div class="form_blk">
                                <select name="extra_info_postingas_edit" id="extra_info_postingas_edit"
                                    class="text_box">
                                    @foreach($postingAs as $name)
                                    <option value="{{ $name ->name}}" {{ old('extra_info_postingas_edit',
                                        $propertyInfo->propertyListingPape->extra_info_postingas ?? '') == $name ?
                                        'selected' : '' }}>
                                        {{ $name->name }}
                                    </option>
                                    @endforeach
                                </select>
                                @if ($errors->has('extra_info_postingas_edit'))
                                <span class="text-danger">{{ $errors->first('extra_info_postingas_edit') }}</span>
                                @endif
                            </div>

                        </div>


                        {{-- mobilex --}}
                        <div class="col-xs-12">
                            <h6>Mobile<sup>*</sup></h6>
                            <div class="form_blk">
                                <input type="number" name="extra_info_mobile_edit"
                                    value="{{ old('extra_info_mobile_edit', $propertyInfo->propertyListingPape->extra_info_mobile ?? '') }}"
                                    id="extra_info_mobile_edit" class="text_box" placeholder="eg: 285432584452"
                                    maxlength="15" minlength="7" pattern="\d{7,15}">
                                <span id="extra_info_mobile_edit_error" class="text-danger"></span>
                                @if ($errors->has('extra_info_mobile_edit'))
                                <span class="text-danger">{{ $errors->first('extra_info_mobile_edit') }}</span>
                                @endif
                            </div>
                        </div>


                        <div class="col-xs-12">
                            <h6>Landline<sup>*</sup></h6>
                            <div class="form_blk">
                                <input type="number" name="extra_info_landline_edit"
                                    value="{{ old('extra_info_landline_edit', $propertyInfo->propertyListingPape->extra_info_landline ?? '') }}"
                                    id="extra_info_landline_edit" class="text_box" placeholder="eg: 285432584452"
                                    maxlength="10" minlength="7" pattern="\d{7,10}">
                                <span id="extra_info_landline_edit_error" class="text-danger"></span>
                                @if ($errors->has('extra_info_landline_edit'))
                                <span class="text-danger">{{ $errors->first('extra_info_landline_edit') }}</span>
                                @endif
                            </div>
                        </div>


                        <div class="col-xs-12">
                            <h6>Description<sup>*</sup></h6>
                            <div class="form_blk">
                                <textarea name="extra_info_description_edit" id="extra_info_description_edit"
                                    class="text_box" placeholder="Describe your vehicle"
                                    maxlength="1000">{{ old('extra_info_description_edit', $propertyInfo->propertyListingPape->extra_info_description ?? '') }}</textarea>
                                @if ($errors->has('extra_info_description_edit'))
                                <span class="text-danger">{{ $errors->first('extra_info_description_edit') }}</span>
                                @endif
                            </div>
                        </div>
                    </div>

                </div>



                {{-- ________________________________________________________File
                Upload edit ______________________________ --}}

                <div class="blk">
                    <h4 class="subheading">Upload Photos<sup class="text-red" style="font-size: 10px;">(Allowed
                            formats:png, jpeg, jpg)</sup></h4>
                    <div class="form_row row">
                        <div class="col-xs-12">
                            <div class="uploader_blk text_box">
                                <div class="icon">
                                    <img src="{{ asset('/images/upload.svg') }}" alt="">
                                </div>
                                <h6></h6>
                                <div class="or"></div>
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
                        Amenities
                    </h1>
                </div>
                <div class="form_row row">

                    <div class="col-xs-12">
                        <h6>Amenities</h6>
                        <div class="form_blk">
                            <ul class="check_lst flex amenities_list_edit">

                                <li>
                                    <label>
                                        <input type="checkbox" name="check_Possesion_edit" id="check_Possesion_edit" {{
                                            old('check_Possesion_edit',
                                            isset($propertyInfo->propertyListingPape->check_Possesion_edit) &&
                                        $propertyInfo->propertyListingPape->check_Possesion_edit) ? 'checked' : '' }}>
                                        <span>Possession</span>
                                    </label>
                                </li>
                                <li>
                                    <label>
                                        <input type="checkbox" name="check_Balloted_edit" id="check_Balloted_edit" {{
                                            old('check_Balloted_edit',
                                            isset($propertyInfo->propertyListingPape->check_Balloted_edit) &&
                                        $propertyInfo->propertyListingPape->check_Balloted_edit ? 'checked' : '') }}>
                                        <span>Balloted</span>
                                    </label>
                                </li>
                                <li>
                                    <label>
                                        <input type="checkbox" name="check_Electricity_edit" id="check_Electricity_edit"
                                            {{ old('check_Electricity_edit',
                                            isset($propertyInfo->propertyListingPape->check_Electricity_edit) &&
                                        $propertyInfo->propertyListingPape->check_Electricity_edit ? 'checked' : '') }}>
                                        <span>Electricity</span>
                                    </label>
                                </li>
                                <li>
                                    <label>
                                        <input type="checkbox" name="check_WaterSupply_edit" id="check_WaterSupply_edit"
                                            {{ old('check_WaterSupply_edit',
                                            isset($propertyInfo->propertyListingPape->check_WaterSupply_edit) &&
                                        $propertyInfo->propertyListingPape->check_WaterSupply_edit ? 'checked' : '') }}>
                                        <span>Water Supply</span>
                                    </label>
                                </li>
                                <li>
                                    <label>
                                        <input type="checkbox" name="check_SuiGas_edit" id="check_SuiGas_edit" {{
                                            old('check_SuiGas_edit',
                                            isset($propertyInfo->propertyListingPape->check_SuiGas_edit) &&
                                        $propertyInfo->propertyListingPape->check_SuiGas_edit ? 'checked' : '') }}>
                                        <span>Sui Gas</span>
                                    </label>
                                </li>
                                <li>
                                    <label>
                                        <input type="checkbox" name="check_BoundaryWall_edit"
                                            id="check_BoundaryWall_edit" {{ old('check_BoundaryWall_edit',
                                            isset($propertyInfo->propertyListingPape->check_BoundaryWall_edit) &&
                                        $propertyInfo->propertyListingPape->check_BoundaryWall_edit ? 'checked' : '')
                                        }}>
                                        <span>Boundary Wall</span>
                                    </label>
                                </li>
                                <li>
                                    <label>
                                        <input type="checkbox" name="check_NearbySchool_edit"
                                            id="check_NearbySchool_edit" {{ old('check_NearbySchool_edit',
                                            isset($propertyInfo->propertyListingPape->check_NearbySchool_edit) &&
                                        $propertyInfo->propertyListingPape->check_NearbySchool_edit ? 'checked' : '')
                                        }}>
                                        <span>Nearby School</span>
                                    </label>
                                </li>
                                <li>
                                    <label>
                                        <input type="checkbox" name="check_NearbyHospitals_edit"
                                            id="check_NearbyHospitals_edit" {{ old('check_NearbyHospitals_edit',
                                            isset($propertyInfo->propertyListingPape->check_NearbyHospitals_edit) &&
                                        $propertyInfo->propertyListingPape->check_NearbyHospitals_edit ? 'checked' : '')
                                        }}>
                                        <span>Nearby Hospitals</span>
                                    </label>
                                </li>
                                <li>
                                    <label>
                                        <input type="checkbox" name="check_NearbyShoppingMalls_edit"
                                            id="check_NearbyShoppingMalls_edit" {{ old('check_NearbyShoppingMalls_edit',
                                            isset($propertyInfo->propertyListingPape->check_NearbyShoppingMalls_edit) &&
                                        $propertyInfo->propertyListingPape->check_NearbyShoppingMalls_edit ? 'checked' :
                                        '') }}>
                                        <span>Nearby Shopping Malls</span>
                                    </label>
                                </li>
                                <li>
                                    <label>
                                        <input type="checkbox" name="check_NearbyRestaurant_edit"
                                            id="check_NearbyRestaurant_edit" {{ old('check_NearbyRestaurant_edit',
                                            isset($propertyInfo->propertyListingPape->check_NearbyRestaurant_edit) &&
                                        $propertyInfo->propertyListingPape->check_NearbyRestaurant_edit ? 'checked' :
                                        '') }}>
                                        <span>Nearby Restaurant</span>
                                    </label>
                                </li>
                                <li>
                                    <label>
                                        <input type="checkbox" name="check_NearbyPublicTransportService_edit"
                                            id="check_NearbyPublicTransportService_edit" {{
                                            old('check_NearbyPublicTransportService_edit',
                                            isset($propertyInfo->propertyListingPape->check_NearbyPublicTransportService_edit)
                                        && $propertyInfo->propertyListingPape->check_NearbyPublicTransportService_edit ?
                                        'checked' : '') }}>
                                        <span>Nearby Public Transport Service</span>
                                    </label>
                                </li>
                                <li>
                                    <label>
                                        <input type="checkbox" name="check_SecurityStaff_edit"
                                            id="check_SecurityStaff_edit" {{ old('check_SecurityStaff_edit',
                                            isset($propertyInfo->propertyListingPape->check_SecurityStaff_edit) &&
                                        $propertyInfo->propertyListingPape->check_SecurityStaff_edit ? 'checked' : '')
                                        }}>
                                        <span>Security Staff</span>
                                    </label>
                                </li>
                                <li>
                                    <label>
                                        <input type="checkbox" name="check_CentralAirConditioning_edit"
                                            id="check_CentralAirConditioning_edit" {{
                                            old('check_CentralAirConditioning_edit',
                                            isset($propertyInfo->propertyListingPape->check_CentralAirConditioning_edit)
                                        && $propertyInfo->propertyListingPape->check_CentralAirConditioning_edit ?
                                        'checked' : '') }}>
                                        <span>Central Air Conditioning</span>
                                    </label>
                                </li>
                                <li>
                                    <label>
                                        <input type="checkbox" name="check_WasteDisposal_edit"
                                            id="check_WasteDisposal_edit" {{ old('check_WasteDisposal_edit',
                                            isset($propertyInfo->propertyListingPape->check_WasteDisposal_edit) &&
                                        $propertyInfo->propertyListingPape->check_WasteDisposal_edit ? 'checked' : '')
                                        }}>
                                        <span>Waste Disposal</span>
                                    </label>
                                </li>
                                <li>
                                    <label>
                                        <input type="checkbox" name="check_DoubleGlazedWindows_edit"
                                            id="check_DoubleGlazedWindows_edit" {{ old('check_DoubleGlazedWindows_edit',
                                            isset($propertyInfo->propertyListingPape->check_DoubleGlazedWindows_edit) &&
                                        $propertyInfo->propertyListingPape->check_DoubleGlazedWindows_edit ? 'checked' :
                                        '') }}>
                                        <span>Double Glazed Windows</span>
                                    </label>
                                </li>
                                <li>
                                    <label>
                                        <input type="checkbox" name="check_CentralHeating_edit"
                                            id="check_CentralHeating_edit" {{ old('check_CentralHeating_edit',
                                            isset($propertyInfo->propertyListingPape->check_CentralHeating_edit) &&
                                        $propertyInfo->propertyListingPape->check_CentralHeating_edit ? 'checked' : '')
                                        }}>
                                        <span>Central Heating</span>
                                    </label>
                                </li>
                                <li>
                                    <label>
                                        <input type="checkbox" name="check_StudyRoom_edit" id="check_StudyRoom_edit" {{
                                            old('check_StudyRoom_edit',
                                            isset($propertyInfo->propertyListingPape->check_StudyRoom_edit) &&
                                        $propertyInfo->propertyListingPape->check_StudyRoom_edit ? 'checked' : '') }}>
                                        <span>Study Room</span>
                                    </label>
                                </li>
                                <li>
                                    <label>
                                        <input type="checkbox" name="check_LaundryRoom_edit" id="check_LaundryRoom_edit"
                                            {{ old('check_LaundryRoom_edit',
                                            isset($propertyInfo->propertyListingPape->check_LaundryRoom_edit) &&
                                        $propertyInfo->propertyListingPape->check_LaundryRoom_edit ? 'checked' : '') }}>
                                        <span>Laundry Room</span>
                                    </label>
                                </li>
                                <li>
                                    <label>
                                        <input type="checkbox" name="check_BroadbandInternetAccess_edit"
                                            id="check_BroadbandInternetAccess_edit" {{
                                            old('check_BroadbandInternetAccess_edit',
                                            isset($propertyInfo->propertyListingPape->check_BroadbandInternetAccess_edit)
                                        && $propertyInfo->propertyListingPape->check_BroadbandInternetAccess_edit ?
                                        'checked' : '') }}>
                                        <span>Broadband Internet Access</span>
                                    </label>
                                </li>
                                <li>
                                    <label>
                                        <input type="checkbox" name="check_PowerWindows_edit"
                                            id="check_PowerWindows_edit" {{ old('check_PowerWindows_edit',
                                            isset($propertyInfo->propertyListingPape->check_PowerWindows_edit) &&
                                        $propertyInfo->propertyListingPape->check_PowerWindows_edit ? 'checked' : '')
                                        }}>
                                        <span>Power Windows</span>
                                    </label>
                                </li>

                                <li>
                                    <label>
                                        <input type="checkbox" name="check_SatelliteorCableTVReady_edit"
                                            id="check_SatelliteorCableTVReady_edit" {{
                                            old('check_SatelliteorCableTVReady_edit',
                                            isset($propertyInfo->propertyListingPape->check_SatelliteorCableTVReady_edit)
                                        && $propertyInfo->propertyListingPape->check_SatelliteorCableTVReady_edit ?
                                        'checked' : '') }}>
                                        <span>Satellite or Cable TV Ready</span>
                                    </label>
                                </li>
                            </ul>
                            @if ($errors->any() && in_array(true, [
                            $errors->has('check_Possesion_edit'),
                            $errors->has('check_Balloted_edit'),
                            $errors->has('check_Electricity_edit'),
                            $errors->has('check_WaterSupply_edit'),
                            $errors->has('check_SuiGas_edit'),
                            $errors->has('check_BoundaryWall_edit'),
                            $errors->has('check_NearbySchool_edit'),
                            $errors->has('check_NearbyHospitals_edit'),
                            $errors->has('check_NearbyShoppingMalls_edit'),
                            $errors->has('check_NearbyRestaurant_edit'),
                            $errors->has('check_NearbyPublicTransportService_edit'),
                            $errors->has('check_SecurityStaff_edit'),
                            $errors->has('check_CentralAirConditioning_edit'),
                            $errors->has('check_WasteDisposal_edit'),
                            $errors->has('check_DoubleGlazedWindows_edit'),
                            $errors->has('check_CentralHeating_edit'),
                            $errors->has('check_StudyRoom_edit'),
                            $errors->has('check_LaundryRoom_edit'),
                            $errors->has('check_BroadbandInternetAccess_edit'),
                            $errors->has('check_PowerWindows_edit'),
                            $errors->has('check_SatelliteorCableTVReady_edit')
                            ]))
                            <span class="text-danger">Please select at least one amenity.</span>
                            @endif
                        </div>
                    </div>

                </div>


                <div class="my-div m-2"></div>
                <br>
                <div class="btn_blk text-center">
                    <button type="submit" class="site_btn long ">
                        <a class="site_btn" href="{{route('admin.property.listing')}}">Back</a>
                    </button>
                    <button type="submit" id="propertyFormSubmitEditBtn"
                        class="site_btn extra_info_continue-btn_edit long ">Submit</button>
                </div>

            </div>




    </form>
</div>
</fieldset>
@endsection


@push('scripts')

<script>
    $(document).ready(function() {
      
        $('#uiBlocker').show();
        
        $('#propertyFormSubmitEditBtn').on('submit', function(e) {
            e.preventDefault();
            $('#uiBlocker').show();
            $('.propertySubmissionForm_edit').submit();
        });
    });
</script>


<script>
    var citySelected = '{{ $propertyInfo->propertyListingPape->address_city }}';
    var areaSelected = '{{ $propertyInfo->propertyListingPape->address_area }}';
    var locationSelected = '{{ $propertyInfo->propertyListingPape->address_location }}';
    var sectorSelected = '{{ $propertyInfo->propertyListingPape->address_sector }}';
    
    $("#address_city_edit").val(citySelected);
    $("#address_area_edit").val(areaSelected);
    $("#address_location_edit").val(locationSelected);
    $("#address_sector_edit").val(sectorSelected);
    
    function populateAreasLov() {
        let url = '/admin/property/populateAreasLov';
        let type = 'POST';
        let data = new FormData();
        data.append('city', $("#address_city_edit").val());
        SendAjaxRequestToServer(type, url, data, '', populateAreasLovResponse, '', '');
    }
    
    function populateAreasLovResponse(response){
        var areas = response.areas;
        var option = '<option value="">Choose Area</option>';

        if(areas.length > 0){
            $.each(areas, function (index, value) {
                option += `<option value="${value.NAME}">${value.NAME}</option>`;
            });
        }
        $("#address_area_edit").html(option);

        $("#address_area_edit").val('');
        $("#address_location_edit").val('').html(`<option value="">Choose Location</option>`);
        $("#address_sector_edit").val('').html(`<option value="">Choose Sector</option>`);

    }

    function populateLocationLov() {
        let url = '/admin/property/populateLocationLov';
        let type = 'POST';
        let data = new FormData();
        data.append('area', $("#address_area_edit").val());
        SendAjaxRequestToServer(type, url, data, '', populateLocationLovResponse, '', '');
    }
    
    function populateLocationLovResponse(response){
        var locations = response.locations;
        var option = '<option value="">Choose Location</option>';

        if(locations.length > 0){
            $.each(locations, function (index, value) {
                option += `<option value="${value.NAME}">${value.NAME}</option>`;
            });
        }
        $("#address_location_edit").html(option);

        $("#address_location_edit").val('');
        $("#address_sector_edit").val('').html(`<option value="">Choose Sector</option>`);

    }

    function populateSectorLov() {
        let url = '/admin/property/populateSectorLov';
        let type = 'POST';
        let data = new FormData();
        data.append('location', $("#address_location_edit").val());
        SendAjaxRequestToServer(type, url, data, '', populateSectorLovResponse, '', '');
    }
    
    function populateSectorLovResponse(response){
        var sectors = response.sectors;
        var option = '<option value="">Choose Sector</option>';

        if(sectors.length > 0){
            $.each(sectors, function (index, value) {
                option += `<option value="${value.NAME}">${value.NAME}</option>`;
            });
        }
        $("#address_sector_edit").html(option);

        $("#address_sector_edit").val('');
    }

    // function loadCityListingAndPropertyListing() {
    //     let url = '/admin/property/loadpropertyList';
    //     let type = 'GET';
    //     SendAjaxRequestToServer(type, url, '', '', loadPropertyandCityListing, '', '');
    // }

// function loadPropertyandCityListing(response) {
//     const cityData = response.cityData;

//     // Populate city dropdown with initial "Select City" option
//     // let cityDropdown = document.getElementById('address_city_edit');
//  // cityDropdown.innerHTML = '<option value="">Select City</option>';
//     // cityData.forEach(city => {
//     //     let option = document.createElement('option');
//     //     option.value = city.NAME;
//     //     option.textContent = city.NAME;
//     //     cityDropdown.appendChild(option);
//     // });

//     // Add event listener to update areas and locations when city is changed
//     // cityDropdown.addEventListener('change', function() {
//     //     populateAreas(cityData);
//     // });
// }

function populateAreas(cityData) {
    let selectedCity = document.getElementById('address_city_edit').value;
    let city = cityData.find(city => city.NAME === selectedCity);
    
    // Populate area dropdown
    let areaDropdown = document.getElementById('address_area_edit');
    areaDropdown.innerHTML = '<option value="">Select Area</option>';
    if (city) {
        city.areas.forEach(area => {
            let option = document.createElement('option');
            option.value = area.NAME;
            option.textContent = area.NAME;
            areaDropdown.appendChild(option);
        });
    }

    // Clear the location and sector dropdowns
    let locationDropdown = document.getElementById('address_location_edit');
    locationDropdown.innerHTML = '<option value="">Select Location</option>';

    let sectorDropdown = document.getElementById('address_sector_edit');
    sectorDropdown.innerHTML = '<option value="">Select Sector</option>';

    // Add event listener to update locations when area is changed
    areaDropdown.addEventListener('change', function() {
        populateLocations(city.areas);
    });
}

function populateLocations(areas) {
    let selectedArea = document.getElementById('address_area_edit').value;
    let area = areas.find(area => area.NAME === selectedArea);

    // Populate location dropdown
    let locationDropdown = document.getElementById('address_location_edit');
   // locationDropdown.innerHTML = '<option value="">Select Location</option>';
    if (area) {
        area.locations.forEach(location => {
            let option = document.createElement('option');
            option.value = location.NAME;
            option.textContent = location.NAME;
            locationDropdown.appendChild(option);
        });
    }

    // Clear the sector dropdown
    let sectorDropdown = document.getElementById('address_sector_edit');
  //  sectorDropdown.innerHTML = '<option value="">Select Sector</option>';

    // Add event listener to update sectors when location is changed
    locationDropdown.addEventListener('change', function() {
        populateSectors(area.locations);
    });
}

function populateSectors(locations) {
    let selectedLocation = document.getElementById('address_location_edit').value;
    let location = locations.find(location => location.NAME === selectedLocation);

    // Populate sector dropdown
    let sectorDropdown = document.getElementById('address_sector_edit');
    sectorDropdown.innerHTML = '<option value="">Select Sector</option>';
    if (location) {
        location.sectors.forEach(sector => {
            let option = document.createElement('option');
            option.value = sector.NAME;
            option.textContent = sector.NAME;
            sectorDropdown.appendChild(option);
        });
    }
}
 
// Call this function to load the city and property listings when the page loads
document.addEventListener('DOMContentLoaded', function() {
    loadCityListingAndPropertyListing();
});


</script>


<script>
    var citiesList=[];
    async function citiesList() {
    let url = '/admin/city/citydata';
    let type = 'GET';

    try {
        let response = await fetch(url, {
            method: type,
            headers: {
                'Content-Type': 'application/json'
            }
        });

        if (!response.ok) {
            throw new Error('Network response was not ok ' + response.statusText);
        }

        let data = await response.json();
        return data; // Return the city data
    } catch (error) {
        console.error('Error:', error);
        return []; // Return an empty array in case of error
    }
}

// Usage
citiesList().then(cityData => {
    console.log(cityData); // Do something with the city data
}); 
  
   
</script>







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

function getpropertydataEditResponse(response, cityResponse=null) {
    if (response.propertyInfo) {
        var property = response.propertyInfo;

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
                        <button type="button" class="x_btn" onclick="removeFile_edit(this)"></button>
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
                    <button type="button" class="x_btn" onclick="removeFile_edit(this)"></button>
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
    $(document).ready(function() {
    
    function resetSelects(except) {
        if (except !== '#pupose_home_edit') {
            $('#pupose_home_edit').val('').selectpicker('refresh');
        }
        if (except !== '#purpose_plot_edit') {
            $('#purpose_plot_edit').val('').selectpicker('refresh');
        }
        if (except !== '#purpose_commercial_edit') {
            $('#purpose_commercial_edit').val('').selectpicker('refresh');
        }
    }

    $('#pupose_home_edit').change(function() {
        if ($(this).val() !== '') {
            resetSelects('#pupose_home_edit');
        }
    });

    $('#purpose_plot_edit').change(function() {
        if ($(this).val() !== '') {
            resetSelects('#purpose_plot_edit');
        }
    });

    $('#purpose_commercial_edit').change(function() {
        if ($(this).val() !== '') {
            resetSelects('#purpose_commercial_edit');
        }
    });

    $("#propertySubmissionForm_edit").submit(function(event) {
        var isValid = true;

        // List of input fields to validate
        var commonRequiredFields = [
            '#pInfo_firstName_edit',
            '#pInfo_lastName_edit',
            '#pInfo_email_edit',
            '#pInfo_phoneNumber_edit',
            '#price_edit',
            '#address_city_edit',
            '#address_area_edit',
            '#address_location_edit',
            '#address_sector_edit',
            '#address_address_edit',
            '#extra_info_title_edit',
            '#extra_info_postingas_edit',
            '#extra_info_mobile_edit',
            '#extra_info_landline_edit',
            '#extra_info_description_edit'
        ];

        var plotPurposeFields = [
            '#propertyDetail_plot_num_edit',
            '#propertyDetail_area_edit',
            '#propertyDetail_area_unit_edit'
        ];

        var homePurposeFields = [
            '#propertyDetail_bedrooms_edit',
            '#propertyDetail_bathrooms_edit'
        ];

        var requiredFields = commonRequiredFields.slice(); // Clone the array

        // Adjust required fields based on selected purpose
        if ($('#pupose_home_edit').val().trim() !== '') {
            requiredFields = requiredFields.concat(homePurposeFields);
        } else if ($('#purpose_plot_edit').val().trim() !== '') {
            requiredFields = requiredFields.concat(plotPurposeFields);
        } else if ($('#purpose_commercial_edit').val().trim() === '') {
            requiredFields = requiredFields.concat(homePurposeFields, plotPurposeFields);
        }

        // Loop through each required field and check if it's empty
        requiredFields.forEach(function(field) {
            var $field = $(field);
            if ($field.val().trim() === '') {
                $field.css('border', '1px solid red');
                isValid = false;
            } else {
                $field.css('border', '');
            }
        });

       // Check the length of the landline and mobile fields
var $landline = $('#extra_info_landline_edit');
var $mobile = $('#extra_info_mobile_edit');
var isValid = true;

if ($landline.val().trim() === '' || $landline.val().trim().length > 10) {
    $landline.css('border', '1px solid red');
    toastr.error('Landline number should not be empty and should not exceed 10 characters.', '', {
        timeOut: 3000
    });
    isValid = false;
} else {
    $landline.css('border', '');
}

if ($mobile.val().trim() === '' || $mobile.val().trim().length > 15) {
    $mobile.css('border', '1px solid red');
    toastr.error('Mobile number should not be empty and should not exceed 15 characters.', '', {
        timeOut: 3000
    });
    isValid = false;
} else {
    $mobile.css('border', '');
}

// Additional validation logic as needed


        // Ensure only one of the purpose fields is selected
        var purposeFields = [
            '#pupose_home_edit',
            '#purpose_plot_edit',
            '#purpose_commercial_edit'
        ];

        var purposeSelected = purposeFields.some(function(field) {
            return $(field).val().trim() !== '';
        });

        if (!purposeSelected) {
            purposeFields.forEach(function(field) {
                $(field).css('border', '1px solid red');
            });
            isValid = false;
            toastr.info('Please select a field from Home, Plot, Commercial', '', {
                timeOut: 3000
            });
        } else {
            purposeFields.forEach(function(field) {
                $(field).css('border', '');
            });
        }  

        // Prevent form submission if any field is invalid
        if (!isValid) {
            $(window).scrollTop(0);
            event.preventDefault();
        }
    });
});


</script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var mobileInput = document.getElementById('extra_info_mobile_edit');
        var mobileErrorMessage = document.getElementById('extra_info_mobile_edit_error');
        var landlineInput = document.getElementById('extra_info_landline_edit');
        var landlineErrorMessage = document.getElementById('extra_info_landline_edit_error');
        var phoneNumberInput = document.getElementById('pInfo_phoneNumber_edit');
        var phoneNumberErrorMessage = document.getElementById('pInfo_phoneNumber_edit_error');
        var submitButton = document.getElementById('propertyFormSubmitEditBtn');

        function validateInputs() {
            var isMobileValid = mobileInput.value.length >= 7 && mobileInput.value.length <= 15;
            var isLandlineValid = landlineInput.value.length >= 7 && landlineInput.value.length <= 10;
            var isPhoneNumberValid = phoneNumberInput.value.length >= 7 && phoneNumberInput.value.length <= 15;
            return isMobileValid && isLandlineValid && isPhoneNumberValid;
        }

        function updateValidation() {
            if (mobileInput.value.length < 7 || mobileInput.value.length > 15) {
                if (mobileInput.value.length < 7) {
                    mobileErrorMessage.textContent = 'The mobile number must be at least 7 digits long.';
                } else {
                    mobileErrorMessage.textContent = 'The mobile number must be no more than 15 digits long.';
                }
                mobileErrorMessage.style.display = 'block';
            } else {
                mobileErrorMessage.textContent = '';
                mobileErrorMessage.style.display = 'none';
            }

            if (landlineInput.value.length < 7 || landlineInput.value.length > 10) {
                if (landlineInput.value.length < 7) {
                    landlineErrorMessage.textContent = 'The landline number must be at least 7 digits long.';
                } else {
                    landlineErrorMessage.textContent = 'The landline number must be no more than 10 digits long.';
                }
                landlineErrorMessage.style.display = 'block';
            } else {
                landlineErrorMessage.textContent = '';
                landlineErrorMessage.style.display = 'none';
            }

            if (phoneNumberInput.value.length < 7 || phoneNumberInput.value.length > 15) {
                if (phoneNumberInput.value.length < 7) {
                    phoneNumberErrorMessage.textContent = 'The phone number must be at least 7 digits long.';
                } else {
                    phoneNumberErrorMessage.textContent = 'The phone number must be no more than 15 digits long.';
                }
                phoneNumberErrorMessage.style.display = 'block';
            } else {
                phoneNumberErrorMessage.textContent = '';
                phoneNumberErrorMessage.style.display = 'none';
            }

            // Enable or disable the submit button based on validation
            submitButton.disabled = !validateInputs();
        }

        mobileInput.addEventListener('input', updateValidation);
        landlineInput.addEventListener('input', updateValidation);
        phoneNumberInput.addEventListener('input', updateValidation);

        // Initial validation check
        updateValidation();
    });
</script>







@endpush