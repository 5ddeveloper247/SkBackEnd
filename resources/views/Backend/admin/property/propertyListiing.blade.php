@extends('Backend.includes.common-template')
@push('styles')

<style>
    .validation-failed {
        border: 1px solid red;
    }

    /* Chrome, Safari, Edge, Opera */
    input[type="number"]::-webkit-outer-spin-button,
    input[type="number"]::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }

    /* Add this to your CSS file */
    input:focus {
        border-color: green;
        outline: none;
        /* Removes the default focus outline */
        box-shadow: 0 0 5px rgba(0, 128, 0, 0.5);
        /* Optional: adds a green shadow for better visibility */
    }
</style>
@endpush

@section('content')
<!-- Display Success Message -->
@if (session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif

<!-- Display Error Message -->
@if (session('error'))
<div class="alert alert-danger">
    {{ session('error') }}
</div>
@endif
<section id="deliveries">
    <div class="contain-fluid">
        <ul class="crumbs">
            <li><a href="{{ url('admin/property/listing')}}">Dashboard</a></li>
            <li>property</li>
        </ul>

        {{-- ______________________tab listings_______________________________--- --}}
        <ul class="tab_list">
            <li class="active"><a href="#All" data-toggle="tab">All Properties</a></li>
            <li><a href="#propertiesSetup" data-toggle="tab">Add Property</a></li>

        </ul>


        {{-- ______________________tab listings end _______________________________--- --}}

        {{-- edit property popup --}}
















        <!-- delete modal start  -->
        <div class="popup sm" data-popup="delete-data-popup" id="delete_modal">
            <div class="table_dv">
                <div class="table_cell">
                    <div class="contain">
                        <div class="_inner editor_blk">
                            <button type="button" class="hidden x_btn clode_delete_modal_default_btn"></button>
                            <h3 class="text-center">Are You Sure to Delete?</h3>
                            <!-- <p>Are You Sure to Delete?</p> -->
                            <div class="text-center row">
                                <button type="button" class="btn bg-transparent rounded-pill" id="delete_confirmed_btn"
                                    data-id=""><img src="{{asset('assets\images\check_1828640.png')}}"
                                        style="width:30px"></button>
                                <button type="button" class="btn bg-transparent rounded-pill"
                                    id="close_delete_modal_btn"><img
                                        src="{{asset('assets\images\close-button_11450177.png')}}"
                                        style="width:30px"></button>

                                <!-- <button type="button" class="btn btn-danger ">Delete</button> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- delete modal end  -->

        <div class="tab-content">
            {{-- ______________________tab <All> start_______________________________--- --}}
                <div id="All" class="tab-pane fade in active">
                    <div class="top_head">
                        <h4>Properties</h4>
                        <div class="form_blk">
                            <input type="text" name="" id="" class="text_box property_search_box"
                                placeholder="Search here">
                            <button type="button"><img src="{{ asset('/images/icon-search.svg')}}" alt=""></button>
                        </div>
                    </div>
                    <div class="blk">
                        <div class="tbl_blk">
                            <table id="property_table" class="table table-responsive">
                                <thead>
                                    <tr class="">
                                        <th width="10">#</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Property Type</th>
                                        <th>Contact</th>
                                        <th>Created Date</th>
                                        <th>Status</th>
                                        <th>Hold Status</th>
                                        <th>Action</th>

                                    </tr>
                                </thead>
                                <tbody id="property_table_body">
                                </tbody>
                            </table>
                        </div>
                    </div>
                    {{-- <ul class="pagination">
                        <li><a href="?" class="prev"></a></li>
                        <li><a href="?" class="active">1</a></li>
                        <li><a href="?">2</a></li>
                        <li><a href="?">3</a></li>
                        <li><a href="?" class="next"></a></li>
                    </ul> --}}
                </div>
                {{-- ______________________tab <All> end_______________________________--- --}}


                    {{-- ______________________tab <propertiesSetup> start_______________________________--- --}}

                        <div id="propertiesSetup" class="tab-pane fade">
                            <div class="top_head">
                                <h4>Add Property</h4>
                            </div>
                            <div class="blk">
                                <form action="" id="propertyAdd_form" class="propertySubmissionForm" method=""
                                    enctype="multipart/form-data">
                                    @csrf
                                    <ul class="head_lst" id="head_lst">
                                        <li id="tab_head_lst1"><span>Personal Info</span></li>
                                        <li id="tab_head_lst2"><span>Purpose</span></li>
                                        <li id="tab_head_lst3"><span>Address</span></li>
                                        <li id="tab_head_lst4"><span>Property Detail</span></li>
                                        <li id="tab_head_lst5"><span>Extra Information</span></li>
                                        <li id="tab_head_lst6"><span>Amenities</span></li>
                                        <li id="tab_head_lst7"><span>Done</span></li>
                                    </ul>

                                    {{-- Personal info tabl --}}

                                    <fieldset id="personal_info_tab">
                                        <div class="form_row row">
                                            <div class="col-xs-6">
                                                <h6>First Name<sup>*</sup></h6>
                                                <div class="form_blk">
                                                    <input type="text" name="pInfo_firstName"
                                                        value="{{ old('pInfo_firstName') }}" id="pInfo_firstName"
                                                        class="text_box" placeholder="" maxlength="50">
                                                    <span class="text-danger" id="pInfo_firstName_error"></span>
                                                </div>
                                            </div>
                                            <div class="col-xs-6">
                                                <h6>Last Name<sup>*</sup></h6>
                                                <div class="form_blk">
                                                    <input type="text" name="pInfo_lastName"
                                                        value="{{ old('pInfo_lastName') }}" id="pInfo_lastName"
                                                        class="text_box" placeholder="" maxlength="50">
                                                    <span class="text-danger" id="pInfo_lastName_error"></span>
                                                </div>
                                            </div>
                                            <div class="col-xs-6">
                                                <h6>Email Address<sup>*</sup></h6>
                                                <div class="form_blk">
                                                    <input type="email" name="pInfo_email"
                                                        value="{{ old('pInfo_email') }}" id="pInfo_email"
                                                        class="text_box" placeholder="sample@gmail.com" maxlength="50">
                                                    <span class="text-danger" id="pInfo_email_error"></span>
                                                </div>
                                            </div>
                                            <div class="col-xs-6">
                                                <h6>Phone Number<sup>*</sup></h6>
                                                <div class="form_blk">
                                                    <input type="number" name="pInfo_phoneNumber"
                                                        value="{{ old('pInfo_phoneNumber') }}" id="pInfo_phoneNumber"
                                                        class="text_box" placeholder="92300 0000 000" maxlength="15">
                                                    <span class="text-danger" id="pInfo_phoneNumber_error"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="btn_blk form_btn text-right">
                                            <button type="button" class="site_btn personal_info_continue_btn long"
                                                id="p-info_continue_btn" disabled>Continue</button>
                                        </div>
                                    </fieldset>

                                    {{-- Purpose info tabl --}}
                                    <fieldset id="purpose_tab">
                                        <div class="form_row row">
                                            <div class="col-sm-6 col-xs-12">
                                                <h6>Purpose<sup>*</sup></h6>
                                                <div class="form_blk">
                                                    <select name="purpose_purpose" id="purpose_purpose" class="text_box"
                                                        data-container="body">
                                                        <option value="Sale" {{ old('purpose_purpose')=='Sale'
                                                            ? 'selected' : '' }}>Sale</option>
                                                        <option value="Rent" {{ old('purpose_purpose')=='Rent'
                                                            ? 'selected' : '' }}>Rent</option>
                                                    </select>
                                                    <span class="text-danger" id="purpose_purpose_error"></span>
                                                </div>
                                            </div>

                                            <div class="col-sm-6 col-xs-12">
                                                <h6>Home<sup>**</sup></h6>
                                                <div class="form_blk">
                                                    <select name="purpose_home" id="purpose_home" class="text_box"
                                                        data-container="body">
                                                        <option value="">Select Home</option>
                                                        <option value="House" {{ old('purpose_home')=='House'
                                                            ? 'selected' : '' }}>House</option>
                                                        <option value="Flat" {{ old('purpose_home')=='Flat' ? 'selected'
                                                            : '' }}>Flat</option>
                                                    </select>
                                                    <span class="text-danger" id="purpose_home_error"></span>
                                                </div>
                                            </div>

                                            <div class="col-sm-6 col-xs-12">
                                                <h6>Plot<sup>**</sup></h6>
                                                <div class="form_blk">
                                                    <select name="purpose_plot" id="purpose_plot" class="text_box"
                                                        data-container="body">
                                                        <option value="">Select Plot</option>
                                                        <option value="Residential" {{
                                                            old('purpose_plot')=='Residential' ? 'selected' : '' }}>
                                                            Residential</option>
                                                        <option value="Commercial" {{ old('purpose_plot')=='Commercial'
                                                            ? 'selected' : '' }}>Commercial</option>
                                                    </select>
                                                    <span class="text-danger" id="purpose_plot_error"></span>
                                                </div>
                                            </div>

                                            <div class="col-sm-6 col-xs-12">
                                                <h6>Commercial<sup>**</sup></h6>
                                                <div class="form_blk">
                                                    <select name="purpose_commercial" id="purpose_commercial"
                                                        class="text_box" data-container="body">
                                                        <option value="">Select Commercial</option>
                                                        <option value="Office" {{ old('purpose_commercial')=='Office'
                                                            ? 'selected' : '' }}>Office</option>
                                                        <option value="Shop" {{ old('purpose_commercial')=='Shop'
                                                            ? 'selected' : '' }}>Shop</option>
                                                        <option value="Building" {{
                                                            old('purpose_commercial')=='Building' ? 'selected' : '' }}>
                                                            Building</option>
                                                    </select>
                                                    <span class="text-danger" id="purpose_commercial_error"></span>
                                                </div>
                                            </div>

                                            <div class="col-xs-6">
                                                <h6>Price<sup>*</sup></h6>
                                                <div class="form_blk">
                                                    <input type="number" name="price" value="{{ old('price') }}"
                                                        id="price" class="text_box" placeholder="Price" maxlength="15">
                                                    <span class="text-danger" id="price_error"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="btn_blk form_btn text-right">
                                            <button type="button"
                                                class="site_btn long simple border purpose_back_btn prev_btn">Back</button>
                                            <button type="button" class="site_btn purpose_continue_btn long"
                                                id="purpose_continue_btn" disabled>Continue</button>
                                        </div>
                                    </fieldset>



                                    {{-- Address info tabl --}}
                                    <fieldset id="address_tab">
                                        <div class="form_row row">
                                            <div class="col-sm-6 col-xs-12">
                                                <h6>City<sup>*</sup></h6>
                                                <div class="form_blk">
                                                    <select name="address_city" id="address_city" class="text_box"
                                                        data-container="body">
                                                        <!-- Options will be populated dynamically -->
                                                    </select>
                                                    <span class="text-danger" id="address_city_error"></span>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-xs-12">
                                                <h6>Area<sup id="area_mandatory_staric" style="display:none;">**</sup>
                                                </h6>
                                                <div class="form_blk">
                                                    <input type="hidden" id="area_mandatory_flag"
                                                        name="area_mandatory_flag" value="0">
                                                    <select name="address_area" id="address_area" class="text_box"
                                                        data-container="body">
                                                        <!-- Options will be populated dynamically -->
                                                    </select>
                                                    <span class="text-danger" id="address_area_error"></span>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-xs-12">
                                                <h6>Location<sup id="location_mandatory_staric"
                                                        style="display:none;">**</sup></h6>
                                                <div class="form_blk">
                                                    <input type="hidden" id="location_mandatory_flag"
                                                        name="location_mandatory_flag" value="0">
                                                    <select name="address_location" id="address_location"
                                                        class="text_box" data-container="body">
                                                        <!-- Options will be populated dynamically -->
                                                    </select>
                                                    <span class="text-danger" id="address_location_error"></span>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-xs-12">
                                                <h6>Sector<sup id="sector_mandatory_staric" style="display:none;"></sup>
                                                </h6>
                                                <div class="form_blk">
                                                    <input type="hidden" id="sector_mandatory_flag"
                                                        name="sector_mandatory_flag" value="0">
                                                    <select name="address_sector" id="address_sector" class="text_box"
                                                        data-container="body">
                                                        <!-- Options will be populated dynamically -->
                                                    </select>
                                                    <span class="text-danger" id="address_sector_error"></span>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 col-xs-12">
                                                <h6>Address<sup>*</sup></h6>
                                                <textarea class="text_box" placeholder="Describe your address"
                                                    name="address_address" id="address_address" spellcheck="false"
                                                    maxlength="200">{{ old('address_address') }}</textarea>
                                                <span class="text-danger" id="address_address_error"></span>
                                            </div>

                                            <div class="col-sm-12 col-xs-12">
                                                <h6>Google Map Link<sup></sup></h6>
                                                <input class="text_box" placeholder="Map Location"
                                                    name="address_map_location" id="address_map_location"
                                                    spellcheck="false" maxlength="1000" />
                                                <span class="text-danger" id="address_map_location_error"></span>
                                            </div>
                                        </div>
                                        <div class="btn_blk form_btn text-right">
                                            <button type="button"
                                                class="site_btn long simple border address_back_btn prev_btn"
                                                id="address_back_btn">Back</button>
                                            <button type="button" class="site_btn address_continue_btn long"
                                                id="address_continue_btn" disabled>Continue</button>
                                        </div>
                                    </fieldset>

                                    {{-- Property detail --}}
                                    <fieldset id="property_detail_tab">
                                        <div class="form_row row">
                                            <div class="col-sm-6 col-xs-12">
                                                <h6>Plot No<sup>*</sup></h6>
                                                <div class="form_blk">
                                                    <input type="text" name="propertyDetail_plot_num"
                                                        id="propertyDetail_plot_num" class="text_box"
                                                        data-container="body" maxlength="10" />
                                                    <span class="text-danger" id="propertyDetail_plot_num_error"></span>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-xs-12">
                                                <h6>Area Unit<sup>*</sup></h6>
                                                <div class="form_blk">
                                                    <select name="propertyDetail_area" id="propertyDetail_area"
                                                        class="text_box" data-container="body">
                                                        <option value="Marla">Marla</option>
                                                        <option value="Sq.Ft">Sq.Ft</option>
                                                        <option value="Sq.M">Sq.M</option>
                                                        <option value="Sq.Yd">Sq.Yd</option>
                                                        <option value="Kanal">Kanal</option>
                                                    </select>
                                                    <span class="text-danger" id="propertyDetail_area_error"></span>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-xs-12">
                                                <div class="form_blk">
                                                    <div>
                                                        <h6>Area<sup>*</sup></h6>
                                                        <div class="form_blk">
                                                            <input type="number" name="propertyDetail_area_unit"
                                                                id="propertyDetail_area_unit" class="text_box"
                                                                placeholder="eg: 10" maxlength="5">
                                                            <span class="text-danger"
                                                                id="propertyDetail_area_unit_error"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-xs-12">
                                                <h6>Bedrooms<sup></sup></h6>
                                                <div class="form_blk">
                                                    <input type="number" name="propertyDetail_bedrooms"
                                                        id="propertyDetail_bedrooms" class="text_box" max="10"
                                                        maxlength="3" />
                                                    <span class="text-danger" id="propertyDetail_bedrooms_error"></span>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-xs-12">
                                                <h6>Bathrooms<sup></sup></h6>
                                                <div class="form_blk">
                                                    <input type="number" name="propertyDetail_bathrooms"
                                                        id="propertyDetail_bathrooms" class="text_box" max="10"
                                                        maxlength="3" />
                                                    <span class="text-danger"
                                                        id="propertyDetail_bathrooms_error"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="btn_blk form_btn text-right">
                                            <button type="button"
                                                class="site_btn long simple border property_detail_back_btn prev_btn">Back</button>
                                            <button type="button" class="site_btn property_detail_continue_btn long"
                                                id="property_detail_continue_btn" disabled>Continue</button>
                                        </div>
                                    </fieldset>

                                    {{-- Extra information tabl --}}
                                    <fieldset id="extra_info_tab">
                                        <div class="contain">
                                            <div class="blk">
                                                <div class="form_row row">
                                                    <div class="col-xs-12">
                                                        <h6>Title<sup>*</sup></h6>
                                                        <div class="form_blk">
                                                            <input type="text" value="{{ old('extra_info_title') }}"
                                                                name="extra_info_title" id="extra_info_title"
                                                                class="text_box" maxlength="255">
                                                            <span class="text-danger"
                                                                id="extra_info_title_error"></span>
                                                        </div>
                                                    </div>

                                                    <div class="col-xs-12">
                                                        <h6>Posting As<sup>*</sup></h6>
                                                        <div class="form_blk">
                                                            <select name="extra_info_postingas"
                                                                id="extra_info_postingas" class="text_box">
                                                                @foreach($postingAs as $name)
                                                                <option value="{{ $name ->name}}">{{ $name->name }}
                                                                </option>
                                                                @endforeach
                                                            </select>
                                                            <!-- <input type="text" name="extra_info_postingas"
                                                                value="{{ old('extra_info_postingas') }}"
                                                                id="extra_info_postingas" class="text_box"
                                                                placeholder="Agent Name" maxlength="50"> -->
                                                            <span class="text-danger"
                                                                id="extra_info_postingas_error"></span>
                                                        </div>
                                                    </div>

                                                    <div class="col-xs-12">
                                                        <h6>Mobile<sup>*</sup></h6>
                                                        <div class="form_blk">
                                                            <input type="number" name="extra_info_mobile"
                                                                value="{{ old('extra_info_mobile') }}"
                                                                id="extra_info_mobile" class="text_box"
                                                                placeholder="eg: 285432584452" maxlength="15">
                                                            <span class="text-danger"
                                                                id="extra_info_mobile_error"></span>
                                                        </div>
                                                    </div>

                                                    <div class="col-xs-12">
                                                        <h6>Landline<sup></sup></h6>
                                                        <div class="form_blk">
                                                            <input type="number" name="extra_info_landline"
                                                                value="{{ old('extra_info_landline') }}"
                                                                id="extra_info_landline" class="text_box"
                                                                placeholder="eg: 285432584452" maxlength="10">
                                                            <span class="text-danger"
                                                                id="extra_info_landline_error"></span>
                                                        </div>
                                                    </div>

                                                    <div class="col-xs-12">
                                                        <h6>Description<sup>*</sup></h6>
                                                        <div class="form_blk">
                                                            <textarea name="extra_info_description"
                                                                id="extra_info_description" class="text_box"
                                                                placeholder="Describe your Description"
                                                                maxlength="250">{{ old('extra_info_description') }}</textarea>
                                                            <span class="text-danger"
                                                                id="extra_info_description_error"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="blk">
                                                <h4 class="subheading">Upload Photos <sup>*</sup>
                                                    <sup class="text-red" style="font-size: 10px;">(Allowed formats:png,
                                                        jpeg, jpg)</sup>
                                                </h4>

                                                <div class="form_row row">
                                                    <div class="col-xs-12">
                                                        <div class="uploader_blk text_box">
                                                            <div class="icon">
                                                                <img src="{{ asset('/images/upload.svg') }}" alt="">
                                                            </div>
                                                            <h6></h6>
                                                            <div class="or"></div>
                                                            <div class="btn_blk text-center">
                                                                <input type="file" id="fileInputTemp"
                                                                    name="fileInputTemp" accept=".png, .jpg, .jpeg"
                                                                    multiple="false" style="display:none;">
                                                                <!-- <input type="file" id="fileInput" name="photos[]" accept=".png, .jpg, .jpeg" multiple style="display:none;"> -->
                                                                <button type="button" class="site_btn sm"
                                                                    onclick="document.getElementById('fileInputTemp').click();">Browse
                                                                    Files</button>
                                                            </div>
                                                            <span class="text-danger" id="fileInput_error"></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-12">
                                                        <div class="upload_lst_blk text_box">
                                                            <ul class="img_list flex" id="previewList">
                                                                <!-- Previews will be added here dynamically -->
                                                            </ul>
                                                            <div id="fileInputsContainer">
                                                                <!-- images file container -->
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="btn_blk text-center">
                                                <button type="button"
                                                    class="site_btn extra_info_back-btn long light prev_btn"><img
                                                        src="{{ asset('/images/arrow-left-sm.svg')}}" alt="">
                                                    Back</button>
                                                <button type="button" class="site_btn extra_info_continue-btn long"
                                                    id="extra_info_continue_btn" disabled>Continue</button>
                                            </div>
                                        </div>
                                    </fieldset>

                                    {{-- Amenities --}}


                                    <fieldset id="amenities_tab">
                                        <div class="form_row row">

                                            <div class="col-xs-12">
                                                <h6>Amenities</h6>
                                                <div class="form_blk">
                                                    <ul class="check_lst flex">
                                                        <li>
                                                            <label>
                                                                <input type="checkbox" name="check_Possesion"
                                                                    id="check_Possesion">
                                                                <span>Possesion</span>
                                                            </label>
                                                        </li>
                                                        <li>
                                                            <label>
                                                                <input type="checkbox" name="check_Balloted"
                                                                    id="check_Balloted">
                                                                <span>Balloted</span>
                                                            </label>
                                                        </li>

                                                        <li>
                                                            <label>
                                                                <input type="checkbox" name="check_Electricity"
                                                                    id="check_Electricity">
                                                                <span>Electricity</span>
                                                            </label>
                                                        </li>
                                                        <li>
                                                            <label>
                                                                <input type="checkbox" name="check_WaterSupply"
                                                                    id="check_WaterSupply">
                                                                <span>Water Supply</span>
                                                            </label>
                                                        </li>
                                                        <li>
                                                            <label>
                                                                <input type="checkbox" name="check_SuiGas"
                                                                    id="check_SuiGas">
                                                                <span>Sui Gas</span>
                                                            </label>
                                                        </li>
                                                        <li>
                                                            <label>
                                                                <input type="checkbox" name="check_BoundryWall"
                                                                    id="check_BoundryWall">
                                                                <span>Boundry Wall</span>
                                                            </label>
                                                        </li>
                                                        <li>
                                                            <label>
                                                                <input type="checkbox" name="check_NearbySchool"
                                                                    id="check_NearbySchool">
                                                                <span>Nearby School</span>
                                                            </label>
                                                        </li>
                                                        <li>
                                                            <label>
                                                                <input type="checkbox" name="check_NearbyHospitals"
                                                                    id="check_NearbyHospitals">
                                                                <span>Nearby Hospitals</span>
                                                            </label>
                                                        </li>
                                                        <li>
                                                            <label>
                                                                <input type="checkbox" name="check_NearbyShoppingMalls"
                                                                    id="check_NearbyShoppingMalls">
                                                                <span>Nearby Shopping Malls</span>
                                                            </label>
                                                        </li>
                                                        <li>
                                                            <label>
                                                                <input type="checkbox" name="check_NearbyRestaurant"
                                                                    id="check_NearbyRestaurant">
                                                                <span>Nearby Restaurant</span>
                                                            </label>
                                                        </li>
                                                        <li>
                                                            <label>
                                                                <input type="checkbox"
                                                                    name="check_NearbyPublicTransportService"
                                                                    id="check_NearbyPublicTransportService">
                                                                <span>Nearby Pubic Transport Service</span>
                                                            </label>
                                                        </li>
                                                        <li>
                                                            <label>
                                                                <input type="checkbox" name="check_SecurityStaff"
                                                                    id="check_SecurityStaff">
                                                                <span>Security Staff</span>
                                                            </label>
                                                        </li>
                                                        <li>
                                                            <label>
                                                                <input type="checkbox"
                                                                    name="check_CentralAirConditioning"
                                                                    id="check_CentralAirConditioning">
                                                                <span>Central Air Conditioning</span>
                                                            </label>
                                                        </li>
                                                        <li>
                                                            <label>
                                                                <input type="checkbox" name="check_WasteDisposal"
                                                                    id="check_WasteDisposal">
                                                                <span>Waste Disposal </span>
                                                            </label>
                                                        </li>
                                                        <li>
                                                            <label>
                                                                <input type="checkbox" name="check_DoubleGlazedWindows"
                                                                    id="check_DoubleGlazedWindows">
                                                                <span>Double Glazed Windows</span>
                                                            </label>
                                                        </li>
                                                        <li>
                                                            <label>
                                                                <input type="checkbox" name="check_CentralHeating"
                                                                    id="check_CentralHeating">
                                                                <span>Central Heating</span>
                                                            </label>
                                                        </li>
                                                        <li>
                                                            <label>
                                                                <input type="checkbox" name="check_StudyRoom"
                                                                    id="check_StudyRoom">
                                                                <span>Study Room</span>
                                                            </label>
                                                        </li>
                                                        <li>
                                                            <label>
                                                                <input type="checkbox" name="check_LaundryRoom"
                                                                    id="check_LaundryRoom">
                                                                <span>Laundry Room</span>
                                                            </label>
                                                        </li>
                                                        <li>
                                                            <label>
                                                                <input type="checkbox"
                                                                    name="check_BroadbandInternetAccess"
                                                                    id="check_BroadbandInternetAccess">
                                                                <span>Broadband Internet Access</span>
                                                            </label>
                                                        </li>
                                                        <li>
                                                            <label>
                                                                <input type="checkbox" name="check_PowerWindows"
                                                                    id="check_PowerWindows">
                                                                <span>Power Windows</span>
                                                            </label>
                                                        </li>
                                                        <li>
                                                            <label>
                                                                <input type="checkbox"
                                                                    name="check_SatelliteorCableTVReady"
                                                                    id="check_SatelliteorCableTVReady">
                                                                <span>Satellite or Cable TV Ready</span>
                                                            </label>
                                                        </li>


                                                    </ul>

                                                </div>
                                            </div>



                                        </div>
                                        <div class="btn_blk form_btn text-right">
                                            <button type="button"
                                                class="site_btn long simple border prev_btn">Back</button>
                                            <button type="button"
                                                class="site_btn amenities_continue_btn long ">Submit</button>
                                        </div>


                                    </fieldset>

                                    {{-- Done tabl --}}
                                    <fieldset id="done_tab">
                                        <div class="text-center">
                                            <div class="br"></div>
                                            <h3 class="color">Thank You!</h3>
                                            <p>We are submitting your property listing request</p>
                                            <p>submitting........</p>
                                            <p>An email with details of the property request has been sent.</p>
                                            <div class="br"></div>
                                        </div>
                                    </fieldset>

                                </form>
                            </div>
                        </div>
                        {{-- ______________________tab <propertiesSetup> end_______________________________--- --}}
        </div>
    </div>
</section>




@endsection



@push('scripts')

<script>
    $(document).ready(function() {
        $('#uiBlocker').show();


    });

    var selectedFiles = [];
    $('#fileInputTemp').on('change', function (event) {
        const files = event.target.files;

        $('#previewList').empty();

        // Validate and add selected files to selectedFiles array
        for (let i = 0; i < files.length; i++) {
            const file = files[i];

            // Check if the file is an image
            if (!file.type.startsWith('image/')) {
                toastr.error('Please select only image files.');
                continue;
            }
            selectedFiles.push(file);
        }
        // Update the display
        displaySelectedFiles();
        $("#fileInputTemp").val('');
    });
    function displaySelectedFiles() {
        const $imageContainer = $('#previewList');
        $imageContainer.empty(); // Clear previous images
        selectedFiles.forEach((file, index) => {
            const reader = new FileReader();
            reader.onload = function (e) {
                const $imageDiv = document.createElement('li');
                $imageDiv.innerHTML = `
                    <div class="thumb">
                        <img src="${e.target.result}" alt="">
                        <button type="button" class="x_btn" onclick="removeFile(this, ${index})"></button>
                    </div>`;
                $imageContainer.append($imageDiv);
            }
            reader.readAsDataURL(file);
        });
    }
</script>
{{-- file preview handled here --}}
<script>
    document.getElementById('fileInput').addEventListener('change', function(event) {
        const files = event.target.files;
        const previewList = document.getElementById('previewList');
        previewList.innerHTML = ''; // Clear previous previews

        Array.from(files).forEach((file, index) => {
            // Check if the file has a valid image extension
            const validImageExtensions = ['.png', '.jpg', '.jpeg', '.gif', '.bmp', '.tiff', '.webp'];
            const fileExtension = file.name.substring(file.name.lastIndexOf('.')).toLowerCase();

            if (!validImageExtensions.includes(fileExtension)) {
                alert('Only image files are allowed.');
                return;
            }

            const reader = new FileReader();
            reader.onload = function(e) {
                const li = document.createElement('li');
                li.innerHTML = `
                    <div class="thumb">
                        <img src="${e.target.result}" alt="">
                        <button type="button" class="x_btn" onclick="removeFile(this, ${index})"></button>
                    </div>
                `;
                previewList.appendChild(li);
            };
            reader.readAsDataURL(file);
        });
    });

    function removeFile(btn, index) {
        selectedFiles.splice(index, 1);
        displaySelectedFiles();
    }
</script>
<script>
    $(window).on("load", function() {
        $(".head_lst > li:nth-child(1)").addClass("current");
        li = $('.head_lst > li:first');
        $(document).on("click", ".next_btn", function() {
            li = li.next('li');
            li.prev().removeClass("current");
            li.addClass("current");
        });
        $(document).on("click", ".prev_btn", function() {
            li.removeClass("current");
            li.nextAll().removeClass("done");
            li = li.prev("li").addClass("current");
        });
        $(document).on("click", ".damage_btn .site_btn", function() {
            $(".damage_btn .site_btn").removeClass("active");
            $(this).addClass("active");
        });
    })
</script>




<script>
    $(document).ready(function() {


function handleTabHeadNextActive  (tab_head) {
    for (let i = 1; i <= 7; i++) {
        if (tab_head === i) {
            $('.head_lst > li:nth-child(' + i + ')').addClass('current');
        } else {
            $('.head_lst > li:nth-child(' + i + ')').removeClass('current');
        }
    }
}


    // Step 1: Personal Info Validation and Navigation
    $('#p-info_continue_btn').click(function(e) {
    const tab_head_lst = 1;
    var firstName = $('#pInfo_firstName');
    var lastName = $('#pInfo_lastName');
    var email = $('#pInfo_email');
    var phone = $('#pInfo_phoneNumber');

    function isValidEmail(email) {
    // Basic email pattern for validation
    const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return emailPattern.test(email);
}
    // Remove red borders from previously failed fields
    $('.validation-failed').removeClass('validation-failed');

    if (!firstName.val().trim()) {
        firstName.addClass('validation-failed');
    }
    if (!lastName.val().trim()) {
        lastName.addClass('validation-failed');
    }
    // if (!email.val().trim()) {
    //     email.addClass('validation-failed');
    // }
    if (!email.val().trim() || !isValidEmail(email.val().trim())) {
    email.addClass('validation-failed');
    toastr.error('Please enter a valid email address', '', {
            timeOut: 3000
        });
}
    if (!phone.val().trim()) {
        phone.addClass('validation-failed');
    }
     // Validate phone number
     if (!phone.val().trim()) {
        phone.addClass('validation-failed');
    } else if (phone.val().trim().length > 15) {
        phone.addClass('validation-failed');
        toastr.error('Phone number should not be greater than 15 characters', '', {
            timeOut: 3000
        });
    }

    if ($('.validation-failed').length > 0) {
        handleTabHeadNextActive(tab_head_lst);
        $('#personal_info_tab').css('display', 'block');
        $('#purpose_tab').css('display', 'none');
        toastr.error('Please fill out all mandatory fields correctly!', '', {
            timeOut: 2000
        });
        return;
    }
    else {
        handleTabHeadNextActive(tab_head_lst + 1);
        $('#personal_info_tab').css('display', 'none');
        $('#purpose_tab').css('display', 'block');
    }
});


   // Step 2:purpose Validation and Navigation
   $('.purpose_continue_btn').click(function() {
    const tab_head_lst = 2;

    // Check if any field failed validation
        // If all fields pass validation, proceed to the next tab
        handleTabHeadNextActive(tab_head_lst + 1);
        $('#purpose_tab').hide();
        $('#address_tab').show();

});




$('.address_continue_btn').click(function() {
    const tab_head_lst = 3;
    var city = $('#address_city');
    var area = $('#address_area');
    var location = $('#address_location');
     var sector = $('#address_sector');
    var address = $('#address_address');
   // var address_map_location = $('#address_map_location');

    // Remove red borders from previously failed fields
    $('.validation-failed').removeClass('validation-failed');

    // Add validation logic for Address fields
    if (!city.val().trim()) {
        city.addClass('validation-failed');
    }
    if (!area.val().trim() && $("#area_mandatory_flag").val() == '1') {
        area.addClass('validation-failed');
    }
    if (!location.val().trim() && $("#location_mandatory_flag").val() == '1') {
        location.addClass('validation-failed');
    }
    // if (!sector.val().trim() && $("#sector_mandatory_flag").val() == '1') {
    //     sector.addClass('validation-failed');
    // }
    if (!address.val().trim()) {
        address.addClass('validation-failed');
    }
    // if (!address_map_location.val().trim()) {
    //     address_map_location.addClass('validation-failed');
    // }

    // Check if any field failed validation
    if ($('.validation-failed').length > 0) {
        toastr.error('Please fill all the required fields', '', {
                timeOut: 3000
            });
        return;
    } else {
        // If all fields pass validation, proceed to the next tab
        handleTabHeadNextActive(tab_head_lst + 1);
        $('#address_tab').hide();
        $('#property_detail_tab').show();
    }
});







$('.property_detail_continue_btn').click(function() {
    const tab_head_lst = 4;
    var plotNum = $('#propertyDetail_plot_num');
    var area = $('#propertyDetail_area');
    var areaUnit = $('#propertyDetail_area_unit');
    var bedrooms = $('#propertyDetail_bedrooms');
    var bathrooms = $('#propertyDetail_bathrooms');




    var hometype=$('#pupose_home').val();
    // Remove red borders from previously failed fields
    $('.validation-failed').removeClass('validation-failed');

    // Add validation logic for Property Detail fields
    if (!plotNum.val().trim()) {
        plotNum.addClass('validation-failed');
    }
    if (!area.val().trim()) {
        area.addClass('validation-failed');
    }
    if (!areaUnit.val().trim()) {
        areaUnit.addClass('validation-failed');
    }

    // if(hometype !=='')
    // {
    // if (!bedrooms.val().trim()) {
    //     bedrooms.addClass('validation-failed');
    // }
    // if (!bathrooms.val().trim()) {
    //     bathrooms.addClass('validation-failed');
    // }
    // }


    // Check if any field failed validation
    if ($('.validation-failed').length > 0) {
        toastr.error('Please select all required fields in Property Detail', '', {
                timeOut: 3000
            });
        return;
    }
    else {
        // If all fields pass validation, proceed to the next tab
        handleTabHeadNextActive(tab_head_lst + 1);
        $('#property_detail_tab').hide();
        $('#extra_info_tab').show();
    }
});

$('.extra_info_continue-btn').click(function() {
    const tab_head_lst = 5;
    var title = $('#extra_info_title');
    var postingAs = $('#extra_info_postingas');
    var mobile = $('#extra_info_mobile');
    var landline = $('#extra_info_landline');
    var description = $('#extra_info_description');
    var images = $('#fileInputTemp'); //$('#fileInput');

    // Remove red borders from previously failed fields
    $('.validation-failed').removeClass('validation-failed');

    // Add validation logic for Extra Information fields
    if (!title.val().trim()) {
        title.addClass('validation-failed');
    }
    if (!postingAs.val().trim()) {
        postingAs.addClass('validation-failed');
    }
    if (!mobile.val().trim()) {
        mobile.addClass('validation-failed');
    }
    if (mobile.val().trim().length > 15) {
        mobile.addClass('validation-failed');
        toastr.error('Moible number should not be greater than 15 characters', '', {
            timeOut: 3000
        });
    }

    // if (!landline.val().trim()) {
    //     landline.addClass('validation-failed');
    // }
    if (landline.val().trim() != '' && landline.val().trim().length > 11) {
        landline.addClass('validation-failed');
        toastr.error('Landline number should not be greater than 10 characters', '', {
            timeOut: 3000
        });
    }
    if (!description.val().trim()) {
        description.addClass('validation-failed');
    }
    // if(!images.val()){
    //     images.addClass('validation-failed');
    //     toastr.error('Please upload image first', '', {
    //         timeOut: 3000
    //     });
    // }

    if(selectedFiles.length <= 0){
        images.addClass('validation-failed');
        toastr.error('Please upload image first', '', {
            timeOut: 3000
        });
    }

    // Check if any field failed validation
    if ($('.validation-failed').length > 0) {
        toastr.error('Please select all required fields in Extra Information', '', {
            timeOut: 3000
        });
        return;
    } else {
        // If all fields pass validation, proceed to the next tab
        handleTabHeadNextActive(tab_head_lst + 1);
        $('#extra_info_tab').hide();
        $('#amenities_tab').show();

        // Add code to move to the next step or complete the form
    }
});



$('.amenities_continue_btn').click(function(){
    const tab_head_lst = 6;

    handleTabHeadNextActive(tab_head_lst + 1);
    handlePropertyFormsubmission();

});



//Back Buttons
$('.prev_btn').click(function() {
        $(this).closest('.tab').hide().prev('.tab').show();
    });

    // Example of using jQuery Mask Plugin

});



function  handlePropertyFormsubmission(){
    $('#uiBlocker').show();
    let form = document.getElementById('propertyAdd_form');
    let data = new FormData(form);

    for (var i = 0; i < selectedFiles.length; i++) {
        data.append('photos[]', selectedFiles[i]);
    }

    let type = 'POST';
    let url = "{{ route('admin.property.main.submission') }}";
    SendAjaxRequestToServer(type, url, data, '', handlePropertyFormsubmissionResponse, '', '.amenities_continue_btn');
}

function handlePropertyFormsubmissionResponse(response) {
    console.log(response);

    $('#uiBlocker').hide();
    if (response.status == 200) {
        toastr.success(response.message, '', {
            timeOut: 3000
        });

        $('#amenities_tab').hide();
        $('#done_tab').show();

        let form = $('#propertyAdd_form');

        form.trigger("reset");
        setTimeout(function() {
            window.location.reload();
        }, 1500);
    }

    if (response.status == 402) {

        error = response.message;

    } else {

        error = response.responseJSON.message;
        var is_invalid = response.responseJSON.errors;

        $.each(is_invalid, function (key) {
            // Assuming 'key' corresponds to the form field name
            var inputField = $('[name="' + key + '"]');
            // Add the 'is-invalid' class to the input field's parent or any desired container
            inputField.addClass('is-invalid');
        });
    }
    toastr.error(error, '', {
        timeOut: 3000
    });
}

</script>


<script>
    $(document).ready(function() {
    $('.prev_btn').click(function() {


        // Get the current tab index
        var currentIndex = $('#head_lst li').index($('#head_lst li.current'));


        // If it's the first tab, return early
        if (currentIndex === 0) {
            return;
        }

        // Remove current class from the current tab
        $('#head_lst li.current').removeClass('current');

        // Add current class to the previous tab
        $('#head_lst li').eq(currentIndex - 1).addClass('current');
    });
});

</script>




<script>
    $(document).ready(function() {
        $('#multiSelect').select2({
            placeholder: "Select features",
            allowClear: true
        });
    });
</script>










{{-- ___________________________________-Edit Scripts started______________________________________ --}}
<script>
    $(document).ready(function() {


    function handleTabHeadNextActive  (tab_head) {
        for (let i = 1; i <= 7; i++) {
            if (tab_head === i) {
                $('.head_lst > li:nth-child(' + i + ')').addClass('current');
            } else {
                $('.head_lst > li:nth-child(' + i + ')').removeClass('current');
            }
        }
    }


        // Step 1:edit Personal Info Validation and Navigation
        $('#p-info_continue_btn_edit').click(function(e) {
        const tab_head_lst = 1;
        var firstName = $('#pInfo_firstName_edit');
        var lastName = $('#pInfo_lastName_edit');
        var email = $('#pInfo_email_edit');
        var phone = $('#pInfo_phoneNumber_edit');

        // Remove red borders from previously failed fields
        $('.validation-failed').removeClass('validation-failed');

        if (!firstName.val().trim()) {
            firstName.addClass('validation-failed');
        }
        if (!lastName.val().trim()) {
            lastName.addClass('validation-failed');
        }
        if (!email.val().trim()) {
            email.addClass('validation-failed');
        }
        if (!phone.val().trim()) {
            phone.addClass('validation-failed');
        }

        if ($('.validation-failed').length > 0) {
            handleTabHeadNextActive(tab_head_lst);
            $('#personal_info_tab_edit').css('display', 'block');
            $('#purpose_tab_edit').css('display', 'none');
            return;
        }
        else {
            handleTabHeadNextActive(tab_head_lst + 1);
            $('#personal_info_tab_edit').css('display', 'none');
            $('#purpose_tab_edit').css('display', 'block');
        }
    });



       // Step 2: edit purpose Validation and Navigation
    $('.purpose_continue_btn_edit').click(function() {
        const tab_head_lst = 2;
        var purpose = $('#purpose_purpose_edit');
        var home = $('#pupose_home_edit');
        var plot = $('#purpose_plot_edit');
        var commercial = $('#purpose_commercial_edit');

        // Remove red borders from previously failed fields
        $('.validation-failed').removeClass('validation-failed');

        // Add validation logic for Purpose fields
        if (!purpose.val().trim()) {
            purpose.addClass('validation-failed');
        }
        if (!home.val().trim()) {
            home.addClass('validation-failed');
        }
        if (!plot.val().trim()) {
            plot.addClass('validation-failed');
        }
        if (!commercial.val().trim()) {
            commercial.addClass('validation-failed');
        }

        // Check if any field failed validation
        if ($('.validation-failed').length > 0) {
            toastr.error('Please select all required fields in Purpose', '', {
                timeOut: 3000
            });
            return;
        } else {
            // If all fields pass validation, proceed to the next tab
            handleTabHeadNextActive(tab_head_lst + 1);
            $('#purpose_tab_edit').hide();
            $('#address_tab_edit').show();
        }
    });







//step:3 edit
    $('.address_continue_btn_edit').click(function() {

        const tab_head_lst = 3;
        var city = $('#address_city_edit');
        var area = $('#address_area_edit');
        var phase = $('#address_phase_edit');
        var sector = $('#address_sector_edit');
        var address = $('#address_address_edit');

        // Remove red borders from previously failed fields
        $('.validation-failed').removeClass('validation-failed');

        // Add validation logic for Address fields
        if (!city.val().trim()) {
            city.addClass('validation-failed');
        }
        if (!area.val().trim()) {
            area.addClass('validation-failed');
        }
        if (!phase.val().trim()) {
            phase.addClass('validation-failed');
        }
        if (!sector.val().trim()) {
            sector.addClass('validation-failed');
        }
        if (!address.val().trim()) {
            address.addClass('validation-failed');
        }

        // Check if any field failed validation
        if ($('.validation-failed').length > 0) {
            toastr.error('Please select all required fields in Address', '', {
                timeOut: 3000
            });
            return;
        } else {
            // If all fields pass validation, proceed to the next tab
            handleTabHeadNextActive(tab_head_lst + 1);
            $('#address_tab_edit').hide();
            $('#property_detail_tab_edit').show();
        }
    });



    // ____________________ step: 4 edit property_detail_edit______________________
    $('.property_detail_continue_btn_edit').click(function() {
        const tab_head_lst = 4;
        var plotNum = $('#propertyDetail_plot_num_edit');
        var area = $('#propertyDetail_area_edit');
        var areaUnit = $('#propertyDetail_area_unit_edit');
        var bedrooms = $('#propertyDetail_bedrooms_edit');
        var bathrooms = $('#propertyDetail_bathrooms_edit');

        // Remove red borders from previously failed fields
        $('.validation-failed').removeClass('validation-failed');

        // Add validation logic for Property Detail fields
        if (!plotNum.val().trim()) {
            plotNum.addClass('validation-failed');
        }
        if (!area.val().trim()) {
            area.addClass('validation-failed');
        }
        if (!areaUnit.val().trim()) {
            areaUnit.addClass('validation-failed');
        }
        if (!bedrooms.val().trim()) {
            bedrooms.addClass('validation-failed');
        }
        if (!bathrooms.val().trim()) {
            bathrooms.addClass('validation-failed');
        }

        // Check if any field failed validation
        if ($('.validation-failed').length > 0) {
             toastr.error('Please select all required fields in Property Detail', '', {
                timeOut: 3000
            });
            return;
        } else {
            // If all fields pass validation, proceed to the next tab
            handleTabHeadNextActive(tab_head_lst + 1);
            $('#property_detail_tab_edit').hide();
            $('#extra_info_tab_edit').show();
        }
    });



    // ____________________step:5 edit extra_info_edit______________________
    $('.extra_info_continue-btn_edit').click(function() {
        const tab_head_lst = 5;
        var title = $('#extra_info_title_edit');
        var postingAs = $('#extra_info_postingas_edit');
        var mobile = $('#extra_info_mobile_edit');
        var landline = $('#extra_info_landline_edit');
        var description = $('#extra_info_description_edit');

        // Remove red borders from previously failed fields
        $('.validation-failed').removeClass('validation-failed');

        // Add validation logic for Extra Information fields
        if (!title.val().trim()) {
            title.addClass('validation-failed');
        }
        if (!postingAs.val().trim()) {
            postingAs.addClass('validation-failed');
        }
        if (!mobile.val().trim()) {
            mobile.addClass('validation-failed');
        }
        if (!landline.val().trim()) {
            landline.addClass('validation-failed');
        }
        if (!description.val().trim()) {
            description.addClass('validation-failed');
        }

        // Check if any field failed validation
        if ($('.validation-failed').length > 0) {
            toastr.error('Please fill all required fields', '', {
                timeOut: 3000
            });
            return;
        } else {
            // If all fields pass validation, proceed to the next tab
            handleTabHeadNextActive(tab_head_lst + 1);
            $('#extra_info_tab_edit').hide();
            $('#amenities_tab_edit').show();

            // Add code to move to the next step or complete the form
        }
    });


    // ____________________step:6 edit amenities_edit______________________
    $('.amenities_continue_btn_edit').click(function(){
        const tab_head_lst = 6;
        $('#amenities_tab_edit').hide();
        $('#done_tab_edit').show();
        handleTabHeadNextActive(tab_head_lst + 1);
        handlePropertyFormsubmission_edit();

    });



    //Back Buttons
    $('.prev_btn').click(function() {
            $(this).closest('.tab').hide().prev('.tab').show();
        });

        // Example of using jQuery Mask Plugin

    });


    function  handlePropertyFormsubmission_edit(){
        setTimeout(() => {
            $('.propertySubmissionForm_edit').submit();

        }, 1000);
    }

</script>





{{-- ________________________________setting edit value in edit form_________________________ --}}
<script>
    $(document).on('click', '.edit_btn', function () {
    var id = $(this).attr('data-id');
    const base_url = '{{ url('/') }}';
    window.location.href = base_url + '/admin/property/edit/show/' + id;
});





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

{{-- handle remove btn --}}
<script>
    function removeFile_edit(btn) {
        removeFile(btn);
}
</script>

{{-- ________________________________setting value in edit form end_________________________ --}}

<script>
    function loadCityListingAndPropertyListing() {
    let url = '/admin/property/loadpropertyList';
    let type = 'GET';
    SendAjaxRequestToServer(type, url, '', '', loadPropertyandCityListing, '', '');
}

function loadPropertyandCityListing(response) {
    const cityData = response.cityData;

    // Populate city dropdown with initial "Select City" option
    let cityDropdown = document.getElementById('address_city');
    cityDropdown.innerHTML = '<option value="">Select City</option>';
    cityData.forEach(city => {
        let option = document.createElement('option');
        option.value = city.NAME;
        option.textContent = city.NAME;
        cityDropdown.appendChild(option);
    });

    // Add event listener to update areas when city is changed
    cityDropdown.addEventListener('change', function() {
        populateAreas(cityData);
    });

    // Call populateAreas initially to populate the dropdown if a city is already selected
    populateAreas(cityData);
}

function populateAreas(cityData) {
    let selectedCity = document.getElementById('address_city').value;
    let city = cityData.find(city => city.NAME === selectedCity);

    // Populate area dropdown
    let areaDropdown = document.getElementById('address_area');
    areaDropdown.innerHTML = '<option value="">Select Area</option>';

    if (city) {
        city.areas.forEach(area => {
            let option = document.createElement('option');
            option.value = area.NAME;
            option.textContent = area.NAME;
            areaDropdown.appendChild(option);
        });
        if(city.areas.length > 0){
            $('#area_mandatory_flag').val('1');
            $('#area_mandatory_staric').show();
        }else{
            $('#area_mandatory_flag').val('0');
            $('#area_mandatory_staric').hide();
        }
    }else{
        $('#area_mandatory_flag').val('0');
        $('#area_mandatory_staric').hide();
    }

    // Clear and populate locations and sectors based on areas
    areaDropdown.addEventListener('change', function() {
        populateLocations(city.areas);
    });

    populateLocations(city ? city.areas : []);
}

function populateLocations(areas) {
    let selectedArea = document.getElementById('address_area').value;
    let area = areas.find(area => area.NAME === selectedArea);

    // Populate location dropdown
    let locationDropdown = document.getElementById('address_location');
    locationDropdown.innerHTML = '<option value="">Select Location</option>';

    if (area) {
        area.locations.forEach(location => {
            let option = document.createElement('option');
            option.value = location.NAME;
            option.textContent = location.NAME;
            locationDropdown.appendChild(option);
        });
        if(area.locations.length > 0){
            $('#location_mandatory_flag').val('1');
            $('#location_mandatory_staric').show();
        }else{
            $('#location_mandatory_flag').val('0');
            $('#location_mandatory_staric').hide();
        }
    }else{
        $('#location_mandatory_flag').val('0');
        $('#location_mandatory_staric').hide();
    }

    // Clear and populate sectors based on locations
    locationDropdown.addEventListener('change', function() {
        populateSectors(area ? area.locations : []);
    });

    populateSectors(area ? area.locations : []);
}

function populateSectors(locations) {
    let selectedLocation = document.getElementById('address_location').value;
    let location = locations.find(location => location.NAME === selectedLocation);

    // Populate sector dropdown
    let sectorDropdown = document.getElementById('address_sector');
    sectorDropdown.innerHTML = '<option value="">Select Sector</option>';

    if (location) {
        location.sectors.forEach(sector => {
            let option = document.createElement('option');
            option.value = sector.NAME;
            option.textContent = sector.NAME;
            sectorDropdown.appendChild(option);
        });
        if(location.sectors.length > 0){
            $('#sector_mandatory_flag').val('1');
            $('#sector_mandatory_staric').show();
        }else{
            $('#sector_mandatory_flag').val('0');
            $('#sector_mandatory_staric').hide();
        }

    }else{
        $('#sector_mandatory_flag').val('0');
        $('#sector_mandatory_staric').hide();
    }
}

// Call this function to load the city and property listings when the page loads
document.addEventListener('DOMContentLoaded', function() {
    loadCityListingAndPropertyListing();
});


</script>




<script>
    $(document).ready(function() {
        function resetSelects(except) {
            if (except !== '#purpose_home') {
                $('#purpose_home').val('');
            }
            if (except !== '#purpose_plot') {
                $('#purpose_plot').val('');
            }
            if (except !== '#purpose_commercial') {
                $('#purpose_commercial').val('');
            }
        }

        $('#purpose_home').change(function() {
            if ($(this).val() !== '') {
                resetSelects('#purpose_home');
            }
        });

        $('#purpose_plot').change(function() {
            if ($(this).val() !== '') {
                resetSelects('#purpose_plot');
            }
        });

        $('#purpose_commercial').change(function() {
            if ($(this).val() !== '') {
                resetSelects('#purpose_commercial');
            }
        });

        $("#propertySubmissionForm").submit(function(event) {
            var isValid = true;

            // List of input fields to validate
            var requiredFields = [
                '#pInfo_firstName',
                '#pInfo_lastName',
                '#pInfo_email',
                '#pInfo_phoneNumber',
                '#price',
                '#address_city',
                '#address_area',
                '#address_location',
                '#address_sector',
                '#address_address',
                //'#address_map_location_edit',
                '#propertyDetail_plot_num',
                '#propertyDetail_area',
                '#propertyDetail_area_unit',
                '#propertyDetail_bedrooms',
                '#propertyDetail_bathrooms',
                '#extra_info_title',
                '#extra_info_postingas',
                '#extra_info_mobile',
                '#extra_info_landline',
                '#extra_info_description'
            ];

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

            //Ensure only one of the purpose fields is selected
            var purposeFields = [
                '#pupose_home',
                '#purpose_plot',
                '#purpose_commercial'
            ];

            var purposeSelected = purposeFields.some(function(field) {
                return $(field).val().trim() !== '';
            });

            if (!purposeSelected) {
                purposeFields.forEach(function(field) {
                    $(field).css('border', '1px solid red');
                });
                isValid = false;
                toastr.error('Please select a field from  Home, Plot, Commercial', '', {
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



{{-- validing on field typing --}}
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const pInfoFirstName = document.getElementById('pInfo_firstName');
        const pInfoLastName = document.getElementById('pInfo_lastName');
        const pInfoEmail = document.getElementById('pInfo_email');
        const pInfoPhoneNumber = document.getElementById('pInfo_phoneNumber');
        const continueButton = document.getElementById('p-info_continue_btn');

        const pInfoFirstNameError = document.getElementById('pInfo_firstName_error');
        const pInfoLastNameError = document.getElementById('pInfo_lastName_error');
        const pInfoEmailError = document.getElementById('pInfo_email_error');
        const pInfoPhoneNumberError = document.getElementById('pInfo_phoneNumber_error');

        // Function to handle real-time validation of the first name
        const handleFirstNameInput = (event) => {
            const value = pInfoFirstName.value;

            // Remove any non-alphabetic characters immediately
            pInfoFirstName.value = value.replace(/[^a-zA-Z]/g, '');

            // Check for length and display errors
            if (value.length === 0) {
                pInfoFirstNameError.textContent = 'First Name is required.';
            } else if (value.length > 50) {
                pInfoFirstNameError.textContent = 'First Name should not exceed 50 characters.';
            } else {
                pInfoFirstNameError.textContent = '';
            }
        };

        // Function to handle real-time validation of the last name
        const handleLastNameInput = (event) => {
            const value = pInfoLastName.value;

            // Remove any non-alphabetic characters immediately
            pInfoLastName.value = value.replace(/[^a-zA-Z]/g, '');

            // Check for length and display errors
            if (value.length === 0) {
                pInfoLastNameError.textContent = 'Last Name is required.';
            } else if (value.length > 50) {
                pInfoLastNameError.textContent = 'Last Name should not exceed 50 characters.';
            } else {
                pInfoLastNameError.textContent = '';
            }
        };

        // Function to handle real-time validation of the email
        const handleEmailInput = (event) => {
            const value = pInfoEmail.value.trim();
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

            // Check if the email contains a '+' sign
            if (value.includes('+')) {
                pInfoEmailError.textContent = 'Email Address should not contain a "+" sign.';
                pInfoEmail.value = value.replace(/\+/g, ''); // Remove any '+' sign
            } else if (!emailRegex.test(value) && value.length > 0) {
                pInfoEmailError.textContent = 'Please enter a valid email address.';
            } else {
                pInfoEmailError.textContent = '';
            }
        };

        // Function to handle real-time validation of the phone number
        const handlePhoneNumberInput = (event) => {
            const value = pInfoPhoneNumber.value;

            // Remove any non-numeric characters immediately
            pInfoPhoneNumber.value = value.replace(/[^\d+]/g, '');

            // Check for length and display errors
            if (value.length === 0) {
                pInfoPhoneNumberError.textContent = 'Phone Number is required.';
            } else if (value.length < 11 || value.length > 15) {
                pInfoPhoneNumberError.textContent = 'Phone Number must be between 11 and 15 digits.';
            } else {
                pInfoPhoneNumberError.textContent = '';
            }
        };

        const validateForm = () => {
            const isFirstNameValid = !pInfoFirstNameError.textContent;
            const isLastNameValid = !pInfoLastNameError.textContent;
            const isEmailValid = !pInfoEmailError.textContent;
            const isPhoneNumberValid = !pInfoPhoneNumberError.textContent;

            continueButton.disabled = !(isFirstNameValid && isLastNameValid && isEmailValid && isPhoneNumberValid);
        };

        pInfoFirstName.addEventListener('input', handleFirstNameInput);
        pInfoLastName.addEventListener('input', handleLastNameInput);
        pInfoEmail.addEventListener('input', handleEmailInput);
        pInfoPhoneNumber.addEventListener('input', handlePhoneNumberInput);

        // Initial validation check
        validateForm();
    });
</script>


{{-- //step 2 validtion --}}
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const purposePurpose = document.getElementById('purpose_purpose');
        const purposeHome = document.getElementById('purpose_home');
        const purposePlot = document.getElementById('purpose_plot');
        const purposeCommercial = document.getElementById('purpose_commercial');
        const price = document.getElementById('price');
        const continueButton = document.getElementById('purpose_continue_btn');

        const purposePurposeError = document.getElementById('purpose_purpose_error');
        const purposeHomeError = document.getElementById('purpose_home_error');
        const purposePlotError = document.getElementById('purpose_plot_error');
        const purposeCommercialError = document.getElementById('purpose_commercial_error');
        const priceError = document.getElementById('price_error');

        const validatePurpose = () => {
            const value = purposePurpose.value.trim();
            if (value.length === 0) {
                purposePurposeError.textContent = 'Purpose is required.';
                return false;
            } else {
                purposePurposeError.textContent = '';
                return true;
            }
        };

        const validateHomePlotCommercial = () => {
            const homeValue = purposeHome.value.trim();
            const plotValue = purposePlot.value.trim();
            const commercialValue = purposeCommercial.value.trim();

            if (homeValue.length === 0 && plotValue.length === 0 && commercialValue.length === 0) {
                purposeHomeError.textContent = 'One of Home, Plot, or Commercial is required.';
                purposePlotError.textContent = 'One of Home, Plot, or Commercial is required.';
                purposeCommercialError.textContent = 'One of Home, Plot, or Commercial is required.';
                return false;
            } else {
                purposeHomeError.textContent = '';
                purposePlotError.textContent = '';
                purposeCommercialError.textContent = '';
                return true;
            }
        };

        const validatePrice = () => {
            const value = price.value.trim();
            if (value.length === 0) {
                priceError.textContent = 'Price is required.';
                return false;
            } else if (!/^\d+$/.test(value)) {
                priceError.textContent = 'Please enter a valid price.';
                return false;
            } else {
                priceError.textContent = '';
                return true;
            }
        };

        const validateForm = () => {
            const isPurposeValid = validatePurpose();
            const isHomePlotCommercialValid = validateHomePlotCommercial();
            const isPriceValid = validatePrice();

            continueButton.disabled = !(isPurposeValid && isHomePlotCommercialValid && isPriceValid);
        };

        purposePurpose.addEventListener('input', validateForm);
        purposeHome.addEventListener('input', validateForm);
        purposePlot.addEventListener('input', validateForm);
        purposeCommercial.addEventListener('input', validateForm);
        price.addEventListener('input', validateForm);

        // Initial validation check
        validateForm();
    });
</script>

{{-- step 3 --}}
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const addressCity = document.getElementById('address_city');
        const addressArea = document.getElementById('address_area');
        const addressLocation = document.getElementById('address_location');
        const addressSector = document.getElementById('address_sector');
        const addressAddress = document.getElementById('address_address');
        const addressMapLocation = document.getElementById('address_map_location');
        const continueButton = document.getElementById('address_continue_btn');

        const addressCityError = document.getElementById('address_city_error');
        const addressAreaError = document.getElementById('address_area_error');
        const addressLocationError = document.getElementById('address_location_error');
        const addressSectorError = document.getElementById('address_sector_error');
        const addressAddressError = document.getElementById('address_address_error');
        const addressMapLocationError = document.getElementById('address_map_location_error');

        const validateField = (field, errorElement, errorMessage) => {
            if (field.value.trim() === '') {
                errorElement.textContent = errorMessage;
                return false;
            } else {
                errorElement.textContent = '';
                return true;
            }
        };

        const validateForm = () => {
            setTimeout(function(){

                const isCityValid = validateField(addressCity, addressCityError, 'City is required.');

                if($("#area_mandatory_flag").val() == '1'){
                    var isAreaValid = validateField(addressArea, addressAreaError, 'Area is required.');
                }else{
                    addressAreaError.textContent = '';
                    var isAreaValid = true;
                }

                if($("#location_mandatory_flag").val() == '1'){
                    var isLocationValid = validateField(addressLocation, addressLocationError, 'Location is required.');
                }else{
                    addressLocationError.textContent = '';
                    var isLocationValid = true;
                }

                // if($("#sector_mandatory_flag").val() == '1'){
                //     var isSectorValid = validateField(addressSector, addressSectorError, 'Sector is required.');
                // }else{
                //     addressSectorError.textContent = '';
                //     var isSectorValid = true;
                // }

                var isAddressValid = validateField(addressAddress, addressAddressError, 'Address is required.');
                var isMapLocationValid = true; // Google Map Link is optional, no validation required

                continueButton.disabled = !(isCityValid && isAreaValid && isLocationValid  && isAddressValid && isMapLocationValid);
            }, 300);
        };

        addressCity.addEventListener('input', validateForm);
        addressArea.addEventListener('input', validateForm);
        addressLocation.addEventListener('input', validateForm);
        addressSector.addEventListener('input', validateForm);
        addressAddress.addEventListener('input', validateForm);
        addressMapLocation.addEventListener('input', validateForm);

        // Initial validation check
        validateForm();
    });
</script>

{{-- step 4 --}}
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const propertyDetailPlotNum = document.getElementById('propertyDetail_plot_num');
        const propertyDetailArea = document.getElementById('propertyDetail_area');
        const propertyDetailAreaUnit = document.getElementById('propertyDetail_area_unit');
        const propertyDetailBedrooms = document.getElementById('propertyDetail_bedrooms');
        const propertyDetailBathrooms = document.getElementById('propertyDetail_bathrooms');
        const continueButton = document.getElementById('property_detail_continue_btn');

        const propertyDetailPlotNumError = document.getElementById('propertyDetail_plot_num_error');
        const propertyDetailAreaError = document.getElementById('propertyDetail_area_error');
        const propertyDetailAreaUnitError = document.getElementById('propertyDetail_area_unit_error');
        const propertyDetailBedroomsError = document.getElementById('propertyDetail_bedrooms_error');
        const propertyDetailBathroomsError = document.getElementById('propertyDetail_bathrooms_error');

        const validateField = (field, errorElement, errorMessage) => {
            if (field.value.trim() === '') {
                errorElement.textContent = errorMessage;
                return false;
            } else {
                errorElement.textContent = '';
                return true;
            }
        };

        const validateForm = () => {
            const isPlotNumValid = validateField(propertyDetailPlotNum, propertyDetailPlotNumError, 'Plot No is required.');
            const isAreaValid = validateField(propertyDetailArea, propertyDetailAreaError, 'Area Unit is required.');
            const isAreaUnitValid = validateField(propertyDetailAreaUnit, propertyDetailAreaUnitError, 'Area is required.');
            // const isBedroomsValid = validateField(propertyDetailBedrooms, propertyDetailBedroomsError, 'Bedrooms are required.');
            // const isBathroomsValid = validateField(propertyDetailBathrooms, propertyDetailBathroomsError, 'Bathrooms are required.');

            continueButton.disabled = !(isPlotNumValid && isAreaValid && isAreaUnitValid);// && isBedroomsValid && isBathroomsValid
        };

        propertyDetailPlotNum.addEventListener('input', validateForm);
        propertyDetailArea.addEventListener('change', validateForm);
        propertyDetailAreaUnit.addEventListener('input', validateForm);
        // propertyDetailBedrooms.addEventListener('input', validateForm);
        // propertyDetailBathrooms.addEventListener('input', validateForm);

        // Initial validation check
        validateForm();
    });
</script>

{{-- step 5 --}}

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const extraInfoTitle = document.getElementById('extra_info_title');
        const extraInfoPostingAs = document.getElementById('extra_info_postingas');
        const extraInfoMobile = document.getElementById('extra_info_mobile');
        const extraInfoLandline = document.getElementById('extra_info_landline');
        const extraInfoDescription = document.getElementById('extra_info_description');
        const fileInput = document.getElementById('fileInput');
        const continueButton = document.getElementById('extra_info_continue_btn');

        const extraInfoTitleError = document.getElementById('extra_info_title_error');
        const extraInfoPostingAsError = document.getElementById('extra_info_postingas_error');
        const extraInfoMobileError = document.getElementById('extra_info_mobile_error');
        const extraInfoLandlineError = document.getElementById('extra_info_landline_error');
        const extraInfoDescriptionError = document.getElementById('extra_info_description_error');
        const fileInputError = document.getElementById('fileInput_error');

        const validateField = (field, errorElement, errorMessage) => {
            if (field.value.trim() === '') {
                errorElement.textContent = errorMessage;
                return false;
            } else {
                errorElement.textContent = '';
                return true;
            }
        };

        const validatePhoneNumber = (field, errorElement) => {
            const value = field.value.trim();
            const length = value.length;
            if (length < 11 || length > 15) {
                errorElement.textContent = 'Mobile number must be between 11 and 15 digits.';
                return false;
            } else if (!/^\d+$/.test(value)) {
                errorElement.textContent = 'Mobile number must contain only digits.';
                return false;
            } else {
                errorElement.textContent = '';
                return true;
            }
        };

        const validateLandline = (field, errorElement) => {
            const value = field.value.trim();
            const length = value.length;
            if (value != '' && (length < 7 || length > 11)) {
                errorElement.textContent = 'Landline number must be between 7 and 11 digits.';
                return false;
            } else if (value != '' && (!/^\d+$/.test(value))) {
                errorElement.textContent = 'Landline number must contain only digits.';
                return false;
            } else {
                errorElement.textContent = '';
                return true;
            }
        };

        const validateFiles = () => {
            if (selectedFiles.length === 0) {
                fileInputError.textContent = 'Please upload at least one photo.';
                return false;
            } else {
                fileInputError.textContent = '';
                return true;
            }
        };

        const validateForm = () => {
            const isTitleValid = validateField(extraInfoTitle, extraInfoTitleError, 'Title is required.');
            const isPostingAsValid = validateField(extraInfoPostingAs, extraInfoPostingAsError, 'Posting As is required.');
            const isMobileValid = validatePhoneNumber(extraInfoMobile, extraInfoMobileError);
            const isLandlineValid = validateLandline(extraInfoLandline, extraInfoLandlineError);
            const isDescriptionValid = validateField(extraInfoDescription, extraInfoDescriptionError, 'Description is required.');
            // const areFilesValid = validateFiles();

            continueButton.disabled = !(isTitleValid && isPostingAsValid && isMobileValid && isLandlineValid && isDescriptionValid);// && areFilesValid
        };

        extraInfoTitle.addEventListener('input', validateForm);
        extraInfoPostingAs.addEventListener('input', validateForm);
        extraInfoMobile.addEventListener('input', validateForm);
        extraInfoLandline.addEventListener('input', validateForm);
        extraInfoDescription.addEventListener('input', validateForm);
        // fileInput.addEventListener('change', validateForm);

        // Initial validation check
        validateForm();
    });
</script>

@endpush
