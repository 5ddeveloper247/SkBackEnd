@extends('Backend.includes.common-template')
@push('styles')

<style>
    .validation-failed {
        border: 1px solid red;
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
            <li><a href="#propertiesSetup" data-toggle="tab">Properties Setup</a></li>
            {{-- <li><a href="#Inspection" data-toggle="tab">Vehicle Inspection</a></li>
            <li><a href="#Tracking" data-toggle="tab">Delivery Tracking</a></li> --}}
        </ul>


        {{-- ______________________tab listings end _______________________________--- --}}

        {{-- edit property popup --}}
        <div class="popup lg" data-popup="edit-data-popup" id="edit-data-popup">
            <div class="table_dv">
                <div class="table_cell">
                    <div class="contain">
                        <div class="_inner editor_blk">
                            <button type="button" class="x_btn" id="close_update_modal_default_btn"></button>
                            <div id="Inspection" class="tab-pane fade active in">

                                {{-- <form method="POST" id="edit_property_form">
                                    <input type="hidden" name="property_id_edit" id="property_id_edit">
                                    @csrf
                                    <fieldset>
                                        <div class="blk">
                                            <h5 class="color">Edit Property</h5>
                                            <div class="form_row row">
                                                <div class="col-xs-6">
                                                    <div class="form_blk">
                                                        <h6>First Name<sup>*</sup></h6>
                                                        <input type="text" name="property_name_edit"
                                                            id="property_name_edit" class="text_box"
                                                            placeholder="eg: John Wick" maxlength="50">
                                                    </div>
                                                </div>

                                                <div class="col-xs-6">
                                                    <div class="form_blk">
                                                        <h6>Last Name</h6>
                                                        <input type="text" name="last_name_edit" id="last_name_edit"
                                                            class="text_box" placeholder="eg: John Wick" maxlength="50">
                                                    </div>
                                                </div>
                                                <div class="col-xs-6">
                                                    <div class="form_blk">
                                                        <h6>Contact Number</h6>
                                                        <input type="number" name="contact_number_edit"
                                                            id="contact_number_edit" class="text_box"
                                                            placeholder="eg: +92300 0000 000" maxlength="15">
                                                    </div>
                                                </div>
                                                <div class="col-xs-6">
                                                    <div class="form_blk">
                                                        <h6>Email<sup>*</sup></h6>
                                                        <input type="email" name="email_edit" id="email_edit"
                                                            class="text_box" placeholder="eg: +example@gmail.com"
                                                            maxlength="15">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="btn_blk form_btn text-center">

                                                <button type="submit" class="site_btn long savemanagerbtn"
                                                    id="savemanagerbtn">Update</button>

                                            </div>
                                        </div>
                                    </fieldset>

                                </form> --}}

                                <div class="blk">
                                    <form action="{{ route('admin.property.main.submission') }}"
                                        class="propertySubmissionForm" method="POST" enctype="multipart/form-data">
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
                                                <input type="hidden" name="property_id_edit" id="property_id_edit">

                                                <div class="col-xs-6">
                                                    <h6>First Name<sup>*</sup></h6>
                                                    <div class="form_blk">
                                                        <input type="text" name="pInfo_firstName_edit" id="pInfo_firstName_edit"
                                                            class="text_box" placeholder="eg: John Wick">
                                                    </div>
                                                </div>
                                                <div class="col-xs-6">
                                                    <h6>Last Name<sup>*</sup></h6>
                                                    <div class="form_blk">
                                                        <input type="text" name="pInfo_lastName_edit" id="pInfo_lastName_edit"
                                                            class="text_box" placeholder="eg: John doe">
                                                    </div>
                                                </div>
                                                <div class="col-xs-6">
                                                    <h6>Email Address<sup>*</sup></h6>
                                                    <div class="form_blk">
                                                        <input type="email" name="pInfo_email_edit" id="pInfo_email_edit"
                                                            class="text_box" placeholder="eg: sample@gmail.com">
                                                    </div>
                                                </div>
                                                <div class="col-xs-6">
                                                    <h6>Phone Number<sup>*</sup></h6>
                                                    <div class="form_blk">
                                                        <input type="number" name="pInfo_phoneNumber_edit"
                                                            id="pInfo_phoneNumber_edit" class="text_box"
                                                            placeholder="eg: +92300 0000 000">
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="btn_blk form_btn text-right">
                                                <button type="button" class="site_btn personal_info_continue_btn long "
                                                    id="p-info_continue_btn">Continue</button>
                                            </div>
                                        </fieldset>

                                        {{-- Purpose info tabl --}}
                                        <fieldset id="purpose_tab">
                                            <div class="form_row row">
                                                <div class="col-sm-6 col-xs-12">
                                                    <h6>Purpose<sup>*</sup></h6>
                                                    <div class="form_blk">
                                                        <select name="purpose_purpose_edit" id="purpose_purpose_edit"
                                                            class="text_box selectpicker" data-container="body">
                                                            <option value="Sale">Sale</option>
                                                            <option value="Rent">Rent</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-xs-12">
                                                    <h6>Home<sup>*</sup></h6>
                                                    <div class="form_blk">
                                                        <select name="pupose_home_edit" id="pupose_home_edit"
                                                            class="text_box selectpicker" data-container="body">
                                                            <option value="House">House</option>
                                                            <option value="Flat">Flat</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-xs-12">
                                                    <h6>Plot<sup>*</sup></h6>
                                                    <div class="form_blk">
                                                        <select name="purpose_plot_edit" id="purpose_plot_edit"
                                                            class="text_box selectpicker" data-container="body">
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
                                            <div class="btn_blk form_btn text-right">
                                                <button type="button"
                                                    class="site_btn long simple border purpose_back_btn prev_btn">Back</button>
                                                <button type="button"
                                                    class="site_btn purpose_continue_btn long ">Continue</button>
                                            </div>
                                        </fieldset>

                                        {{-- Address info tabl --}}

                                        <fieldset id="address_tab">
                                            <div class="form_row row">
                                                <div class="col-sm-4 col-xs-12">
                                                    <h6>City<sup>*</sup></h6>
                                                    <div class="form_blk">
                                                        <select name="address_city" id="address_city"
                                                            class="text_box selectpicker" data-container="body">
                                                            <option value="Islamabad">Islamabad</option>
                                                            <option value="Rawalpindi">Rawalpindi</option>
                                                            <option value="Karachi">Karachi</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4 col-xs-12">
                                                    <h6>Area<sup>*</sup></h6>
                                                    <div class="form_blk">
                                                        <select name="address_area" id="address_area"
                                                            class="text_box selectpicker" data-container="body">
                                                            <option value="Area Bahria Phase 1">Area Bahria Phase 1
                                                            </option>
                                                            <option value="Area Bahria Phase 2"> Area Bahria Phase 2
                                                            </option>
                                                            <option value="Area Bahria Phase 3"> Area Bahria Phase 3
                                                            </option>
                                                            <option value="Area Bahria Phase 4"> Area Bahria Phase 4
                                                            </option>
                                                            <option value="Area Bahria Phase 5"> Area Bahria Phase 5
                                                            </option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4 col-xs-12">
                                                    <h6>Phase<sup>*</sup></h6>
                                                    <div class="form_blk">
                                                        <select name="address_phase" id="address_phase"
                                                            class="text_box selectpicker" data-container="body">
                                                            <option value="Phase Bahria Phase 1">Phase Bahria Phase 1
                                                            </option>
                                                            <option value="Phase Bahria Phase 2"> Phase Bahria Phase 2
                                                            </option>
                                                            <option value=" Phase Bahria Phase 3"> Phase Bahria Phase 3
                                                            </option>
                                                            <option value="Phase Bahria Phase 4"> Phase Bahria Phase 4
                                                            </option>
                                                            <option value="Phase Bahria Phase 5"> Phase Bahria Phase 5
                                                            </option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4 col-xs-12">
                                                    <h6>Sector<sup>*</sup></h6>
                                                    <div class="form_blk">
                                                        <select name="address_sector" id="address_sector"
                                                            class="text_box selectpicker" data-container="body">
                                                            <option value="Sector f1">Sector f1 </option>
                                                            <option value="Sector f2">Sector f2 </option>
                                                            <option value="Sector f3">Sector f3 </option>
                                                            <option value="Sector f4">Sector f4 </option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4 col-xs-12">
                                                    <h6>Address<sup>*</sup></h6>
                                                    <div class="form_blk">
                                                        <select name="address_address" id="address_address"
                                                            class="text_box selectpicker" data-container="body">
                                                            <option value="Street 1">Street 1 </option>
                                                            <option value="Street 2">Street 2 </option>
                                                            <option value="Street 3">Street 3</option>
                                                            <option value="Street 4">Street 4 </option>
                                                        </select>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="btn_blk form_btn text-right">
                                                <button type="button"
                                                    class="site_btn long simple border address_back_btn prev_btn"
                                                    id="address_back_btn">Back</button>
                                                <button type="button" class="site_btn address_continue_btn long "
                                                    id="address_continue_btn">Continue</button>
                                            </div>
                                        </fieldset>

                                        {{-- Property detail --}}
                                        <fieldset id="property_detail_tab">
                                            <div class="form_row row">
                                                <div class="col-sm-4 col-xs-12">
                                                    <h6>Plot No<sup>*</sup></h6>
                                                    <div class="form_blk">
                                                        <select name="propertyDetail_plot_num"
                                                            id="propertyDetail_plot_num" class="text_box selectpicker"
                                                            data-container="body">
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
                                                        <select name="propertyDetail_area" id="propertyDetail_area"
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
                                                                <input type="number" name="propertyDetail_area_unit"
                                                                    id="propertyDetail_area_unit" class="text_box"
                                                                    placeholder="eg: 10">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4 col-xs-12">
                                                    <h6>Bedrooms<sup>*</sup></h6>
                                                    <div class="form_blk">
                                                        <select name="propertyDetail_bedrooms"
                                                            id="propertyDetail_bedrooms" class="text_box selectpicker"
                                                            data-container="body">
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
                                                        <select name="propertyDetail_bathrooms"
                                                            id="propertyDetail_bathrooms" class="text_box selectpicker"
                                                            data-container="body">
                                                            <option value="1">1</option>
                                                            <option value="2"> 2</option>
                                                            <option value="3"> 3</option>
                                                            <option value="4"> 4</option>
                                                            <option value="5"> 5</option>
                                                        </select>
                                                    </div>
                                                </div>



                                            </div>
                                            <div class="btn_blk form_btn text-right">
                                                <button type="button"
                                                    class="site_btn long simple border property_detail_back-btn prev_btn">Back</button>
                                                <button type="button"
                                                    class="site_btn property_detail_continue_btn long ">Continue</button>
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
                                                                <input type="text" name="extra_info_title"
                                                                    id="extra_info_title" class="text_box"
                                                                    value="Mercedes-Benz E Class 3.0 E43 V6 AMG"
                                                                    placeholder=" " readonly>
                                                            </div>
                                                        </div>

                                                        <div class="col-xs-12">
                                                            <h6>Posting As<sup>*</sup></h6>
                                                            <div class="form_blk">
                                                                <input type="text" name="extra_info_postingas"
                                                                    id="extra_info_postingas" class="text_box"
                                                                    placeholder="Agent Name">
                                                            </div>
                                                        </div>

                                                        <div class="col-xs-12">
                                                            <h6>Mobile<sup>*</sup></h6>
                                                            <div class="form_blk">
                                                                <input type="number" name="extra_info_mobile"
                                                                    id="extra_info_mobile" class="text_box"
                                                                    placeholder="eg: 285432584452">
                                                            </div>
                                                        </div>

                                                        <div class="col-xs-12">
                                                            <h6>Landline<sup>*</sup></h6>
                                                            <div class="form_blk">
                                                                <input type="number" name="extra_info_landline"
                                                                    id="extra_info_landline" class="text_box"
                                                                    placeholder="eg: 285432584452">
                                                            </div>
                                                        </div>

                                                        <div class="col-xs-12">
                                                            <h6>Description</h6>
                                                            <div class="form_blk">
                                                                <textarea name="extra_info_description"
                                                                    id="extra_info_description" class="text_box"
                                                                    placeholder="Describe your vehicle"></textarea>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>



                                                {{-- ________________________________________________________File
                                                Upload______________________________ --}}


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
                                                                    <input type="file" id="fileInput" name="photos[]"
                                                                        multiple style="display:none;">
                                                                    <button type="button" class="site_btn sm"
                                                                        onclick="document.getElementById('fileInput').click();">Browse
                                                                        Files</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-12">
                                                            <div class="upload_lst_blk text_box">
                                                                <ul class="img_list flex" id="previewList">
                                                                    <!-- Previews will be added here dynamically -->
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                {{-- ________________________________________________________File
                                                Upload______________________________ --}}

                                                <div class="btn_blk text-center">
                                                    <button type="button"
                                                        class="site_btn extra_info_back-btn long light prev_btn"><img
                                                            src="{{ asset('/images/arrow-left-sm.svg')}}" alt="">
                                                        Back</button>
                                                    <button type="button"
                                                        class="site_btn extra_info_continue-btn long">Continue</button>
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
                                                                    <input type="checkbox" name="checkk_Balloted"
                                                                        id="check_Balloted">
                                                                    <span>Balloted</span>
                                                                </label>
                                                            </li>
                                                            <li>
                                                                <label>
                                                                    <input type="checkbox" name="check_Balloted"
                                                                        id="check_Sewerage">
                                                                    <span>Balloted</span>
                                                                </label>
                                                            </li>
                                                            <li>
                                                                <label>
                                                                    <input type="checkbox" name="check_"
                                                                        id="check_Electricity">
                                                                    <span>Electricity</span>
                                                                </label>
                                                            </li>
                                                            <li>
                                                                <label>
                                                                    <input type="checkbox" name="check_"
                                                                        id="check_WaterSupply">
                                                                    <span>Water Supply</span>
                                                                </label>
                                                            </li>
                                                            <li>
                                                                <label>
                                                                    <input type="checkbox" name="check_"
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
                                                                    <input type="checkbox"
                                                                        name="check_NearbyShoppingMalls"
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
                                                                        name="check_NearbyPubicTransportService"
                                                                        id="check_NearbyPubicTransportService">
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
                                                                    <input type="checkbox"
                                                                        name="check_DoubleGlazedWindows"
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
                                                                        id="check_check_StudyRoom">
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
                                                    class="site_btn amenities_continue_btn long ">Continue</button>
                                            </div>
                                        </fieldset>

                                        {{-- Done tabl --}}
                                        <fieldset id="done_tab">
                                            <div class="text-center">
                                                <div class="br"></div>
                                                <h3 class="color">Thank You!</h3>
                                                <p>New delivery appointment is complete.</p>
                                                <p>An email with details of the appointment has been sent.</p>
                                                <div class="br"></div>
                                            </div>
                                        </fieldset>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>






































































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
                            <input type="text" name="" id="" class="text_box property_search_box" placeholder="Search here">
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
                    <ul class="pagination">
                        <li><a href="?" class="prev"></a></li>
                        <li><a href="?" class="active">1</a></li>
                        <li><a href="?">2</a></li>
                        <li><a href="?">3</a></li>
                        <li><a href="?" class="next"></a></li>
                    </ul>
                </div>
                {{-- ______________________tab <All> end_______________________________--- --}}


                    {{-- ______________________tab <propertiesSetup> start_______________________________--- --}}

                        <div id="propertiesSetup" class="tab-pane fade">
                            <div class="top_head">
                                <h4>Properties Setup</h4>
                            </div>
                            <div class="blk">
                                <form action="{{ route('admin.property.main.submission') }}"
                                    class="propertySubmissionForm" method="POST" enctype="multipart/form-data">
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
                                                    <input type="text" name="pInfo_firstName" id="pInfo_firstName"
                                                        class="text_box" placeholder="eg: John Wick">
                                                </div>
                                            </div>
                                            <div class="col-xs-6">
                                                <h6>Last Name<sup>*</sup></h6>
                                                <div class="form_blk">
                                                    <input type="text" name="pInfo_lastName" id="pInfo_lastName"
                                                        class="text_box" placeholder="eg: John doe">
                                                </div>
                                            </div>
                                            <div class="col-xs-6">
                                                <h6>Email Address<sup>*</sup></h6>
                                                <div class="form_blk">
                                                    <input type="email" name="pInfo_email" id="pInfo_email"
                                                        class="text_box" placeholder="eg: sample@gmail.com">
                                                </div>
                                            </div>
                                            <div class="col-xs-6">
                                                <h6>Phone Number<sup>*</sup></h6>
                                                <div class="form_blk">
                                                    <input type="number" name="pInfo_phoneNumber" id="pInfo_phoneNumber"
                                                        class="text_box" placeholder="eg: +92300 0000 000">
                                                </div>
                                            </div>

                                        </div>
                                        <div class="btn_blk form_btn text-right">
                                            <button type="button" class="site_btn personal_info_continue_btn long "
                                                id="p-info_continue_btn">Continue</button>
                                        </div>
                                    </fieldset>

                                    {{-- Purpose info tabl --}}
                                    <fieldset id="purpose_tab">
                                        <div class="form_row row">
                                            <div class="col-sm-6 col-xs-12">
                                                <h6>Purpose<sup>*</sup></h6>
                                                <div class="form_blk">
                                                    <select name="purpose_purpose" id="purpose_purpose"
                                                        class="text_box selectpicker" data-container="body">
                                                        <option value="Sale">Sale</option>
                                                        <option value="Rent">Rent</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-xs-12">
                                                <h6>Home<sup>*</sup></h6>
                                                <div class="form_blk">
                                                    <select name="pupose_home" id="pupose_home"
                                                        class="text_box selectpicker" data-container="body">
                                                        <option value="House">House</option>
                                                        <option value="Flat">Flat</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-xs-12">
                                                <h6>Plot<sup>*</sup></h6>
                                                <div class="form_blk">
                                                    <select name="purpose_plot" id="purpose_plot"
                                                        class="text_box selectpicker" data-container="body">
                                                        <option value="Residential Plot">Residential Plot</option>
                                                        <option value="CommercialPlot">Commercial Plot</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-xs-12">
                                                <h6>Commercial<sup>*</sup></h6>
                                                <div class="form_blk">
                                                    <select name="purpose_commercial" id="purpose_commercial"
                                                        class="text_box selectpicker" data-container="body">
                                                        <option value="Office">Office</option>
                                                        <option value="Shop">Shop</option>
                                                        <option value="Building">Building</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="btn_blk form_btn text-right">
                                            <button type="button"
                                                class="site_btn long simple border purpose_back_btn prev_btn">Back</button>
                                            <button type="button"
                                                class="site_btn purpose_continue_btn long ">Continue</button>
                                        </div>
                                    </fieldset>

                                    {{-- Address info tabl --}}

                                    <fieldset id="address_tab">
                                        <div class="form_row row">
                                            <div class="col-sm-4 col-xs-12">
                                                <h6>City<sup>*</sup></h6>
                                                <div class="form_blk">
                                                    <select name="address_city" id="address_city"
                                                        class="text_box selectpicker" data-container="body">
                                                        <option value="Islamabad">Islamabad</option>
                                                        <option value="Rawalpindi">Rawalpindi</option>
                                                        <option value="Karachi">Karachi</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-4 col-xs-12">
                                                <h6>Area<sup>*</sup></h6>
                                                <div class="form_blk">
                                                    <select name="address_area" id="address_area"
                                                        class="text_box selectpicker" data-container="body">
                                                        <option value="Area Bahria Phase 1">Area Bahria Phase 1</option>
                                                        <option value="Area Bahria Phase 2"> Area Bahria Phase 2
                                                        </option>
                                                        <option value="Area Bahria Phase 3"> Area Bahria Phase 3
                                                        </option>
                                                        <option value="Area Bahria Phase 4"> Area Bahria Phase 4
                                                        </option>
                                                        <option value="Area Bahria Phase 5"> Area Bahria Phase 5
                                                        </option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-4 col-xs-12">
                                                <h6>Phase<sup>*</sup></h6>
                                                <div class="form_blk">
                                                    <select name="address_phase" id="address_phase"
                                                        class="text_box selectpicker" data-container="body">
                                                        <option value="Phase Bahria Phase 1">Phase Bahria Phase 1
                                                        </option>
                                                        <option value="Phase Bahria Phase 2"> Phase Bahria Phase 2
                                                        </option>
                                                        <option value=" Phase Bahria Phase 3"> Phase Bahria Phase 3
                                                        </option>
                                                        <option value="Phase Bahria Phase 4"> Phase Bahria Phase 4
                                                        </option>
                                                        <option value="Phase Bahria Phase 5"> Phase Bahria Phase 5
                                                        </option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-4 col-xs-12">
                                                <h6>Sector<sup>*</sup></h6>
                                                <div class="form_blk">
                                                    <select name="address_sector" id="address_sector"
                                                        class="text_box selectpicker" data-container="body">
                                                        <option value="Sector f1">Sector f1 </option>
                                                        <option value="Sector f2">Sector f2 </option>
                                                        <option value="Sector f3">Sector f3 </option>
                                                        <option value="Sector f4">Sector f4 </option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-4 col-xs-12">
                                                <h6>Address<sup>*</sup></h6>
                                                <div class="form_blk">
                                                    <select name="address_address" id="address_address"
                                                        class="text_box selectpicker" data-container="body">
                                                        <option value="Street 1">Street 1 </option>
                                                        <option value="Street 2">Street 2 </option>
                                                        <option value="Street 3">Street 3</option>
                                                        <option value="Street 4">Street 4 </option>
                                                    </select>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="btn_blk form_btn text-right">
                                            <button type="button"
                                                class="site_btn long simple border address_back_btn prev_btn"
                                                id="address_back_btn">Back</button>
                                            <button type="button" class="site_btn address_continue_btn long "
                                                id="address_continue_btn">Continue</button>
                                        </div>
                                    </fieldset>

                                    {{-- Property detail --}}
                                    <fieldset id="property_detail_tab">
                                        <div class="form_row row">
                                            <div class="col-sm-4 col-xs-12">
                                                <h6>Plot No<sup>*</sup></h6>
                                                <div class="form_blk">
                                                    <select name="propertyDetail_plot_num" id="propertyDetail_plot_num"
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
                                                    <select name="propertyDetail_area" id="propertyDetail_area"
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
                                                            <input type="number" name="propertyDetail_area_unit"
                                                                id="propertyDetail_area_unit" class="text_box"
                                                                placeholder="eg: 10">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-4 col-xs-12">
                                                <h6>Bedrooms<sup>*</sup></h6>
                                                <div class="form_blk">
                                                    <select name="propertyDetail_bedrooms" id="propertyDetail_bedrooms"
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
                                                    <select name="propertyDetail_bathrooms"
                                                        id="propertyDetail_bathrooms" class="text_box selectpicker"
                                                        data-container="body">
                                                        <option value="1">1</option>
                                                        <option value="2"> 2</option>
                                                        <option value="3"> 3</option>
                                                        <option value="4"> 4</option>
                                                        <option value="5"> 5</option>
                                                    </select>
                                                </div>
                                            </div>



                                        </div>
                                        <div class="btn_blk form_btn text-right">
                                            <button type="button"
                                                class="site_btn long simple border property_detail_back-btn prev_btn">Back</button>
                                            <button type="button"
                                                class="site_btn property_detail_continue_btn long ">Continue</button>
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
                                                            <input type="text" name="extra_info_title"
                                                                id="extra_info_title" class="text_box"
                                                                value="Mercedes-Benz E Class 3.0 E43 V6 AMG"
                                                                placeholder=" " readonly>
                                                        </div>
                                                    </div>

                                                    <div class="col-xs-12">
                                                        <h6>Posting As<sup>*</sup></h6>
                                                        <div class="form_blk">
                                                            <input type="text" name="extra_info_postingas"
                                                                id="extra_info_postingas" class="text_box"
                                                                placeholder="Agent Name">
                                                        </div>
                                                    </div>

                                                    <div class="col-xs-12">
                                                        <h6>Mobile<sup>*</sup></h6>
                                                        <div class="form_blk">
                                                            <input type="number" name="extra_info_mobile"
                                                                id="extra_info_mobile" class="text_box"
                                                                placeholder="eg: 285432584452">
                                                        </div>
                                                    </div>

                                                    <div class="col-xs-12">
                                                        <h6>Landline<sup>*</sup></h6>
                                                        <div class="form_blk">
                                                            <input type="number" name="extra_info_landline"
                                                                id="extra_info_landline" class="text_box"
                                                                placeholder="eg: 285432584452">
                                                        </div>
                                                    </div>

                                                    <div class="col-xs-12">
                                                        <h6>Description</h6>
                                                        <div class="form_blk">
                                                            <textarea name="extra_info_description"
                                                                id="extra_info_description" class="text_box"
                                                                placeholder="Describe your vehicle"></textarea>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>



                                            {{-- ________________________________________________________File
                                            Upload______________________________ --}}


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
                                                                <input type="file" id="fileInput" name="photos[]"
                                                                    multiple style="display:none;">
                                                                <button type="button" class="site_btn sm"
                                                                    onclick="document.getElementById('fileInput').click();">Browse
                                                                    Files</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-12">
                                                        <div class="upload_lst_blk text_box">
                                                            <ul class="img_list flex" id="previewList">
                                                                <!-- Previews will be added here dynamically -->
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            {{-- ________________________________________________________File
                                            Upload______________________________ --}}

                                            <div class="btn_blk text-center">
                                                <button type="button"
                                                    class="site_btn extra_info_back-btn long light prev_btn"><img
                                                        src="{{ asset('/images/arrow-left-sm.svg')}}" alt="">
                                                    Back</button>
                                                <button type="button"
                                                    class="site_btn extra_info_continue-btn long">Continue</button>
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
                                                                <input type="checkbox" name="checkk_Balloted"
                                                                    id="check_Balloted">
                                                                <span>Balloted</span>
                                                            </label>
                                                        </li>
                                                        <li>
                                                            <label>
                                                                <input type="checkbox" name="check_Balloted"
                                                                    id="check_Sewerage">
                                                                <span>Balloted</span>
                                                            </label>
                                                        </li>
                                                        <li>
                                                            <label>
                                                                <input type="checkbox" name="check_"
                                                                    id="check_Electricity">
                                                                <span>Electricity</span>
                                                            </label>
                                                        </li>
                                                        <li>
                                                            <label>
                                                                <input type="checkbox" name="check_"
                                                                    id="check_WaterSupply">
                                                                <span>Water Supply</span>
                                                            </label>
                                                        </li>
                                                        <li>
                                                            <label>
                                                                <input type="checkbox" name="check_" id="check_SuiGas">
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
                                                                    name="check_NearbyPubicTransportService"
                                                                    id="check_NearbyPubicTransportService">
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
                                                                    id="check_check_StudyRoom">
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
                                                class="site_btn amenities_continue_btn long ">Continue</button>
                                        </div>
                                    </fieldset>

                                    {{-- Done tabl --}}
                                    <fieldset id="done_tab">
                                        <div class="text-center">
                                            <div class="br"></div>
                                            <h3 class="color">Thank You!</h3>
                                            <p>New delivery appointment is complete.</p>
                                            <p>An email with details of the appointment has been sent.</p>
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
        $('#personal_info_tab').css('display', 'block');
        $('#purpose_tab').css('display', 'none');
        return;
    } else {
        handleTabHeadNextActive(tab_head_lst + 1);
        $('#personal_info_tab').css('display', 'none');
        $('#purpose_tab').css('display', 'block');
    }
});



   // Step 2:purpose Validation and Navigation
$('.purpose_continue_btn').click(function() {
    const tab_head_lst = 2;
    var purpose = $('#purpose_purpose');
    var home = $('#pupose_home');
    var plot = $('#purpose_plot');
    var commercial = $('#purpose_commercial');

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
        alert('Please fill out all fields in Purpose.');
        return;  
    } else {
        // If all fields pass validation, proceed to the next tab
        handleTabHeadNextActive(tab_head_lst + 1);
        $('#purpose_tab').hide();
        $('#address_tab').show();
    }
});








$('.address_continue_btn').click(function() {
    const tab_head_lst = 3;
    var city = $('#address_city');
    var area = $('#address_area');
    var phase = $('#address_phase');
    var sector = $('#address_sector');
    var address = $('#address_address');

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
        alert('Please fill out all fields in Address.');
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
        alert('Please fill out all fields in Property Detail.');
        return;
    } else {
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
        alert('Please fill out all fields in Extra Information.');
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
    $('#amenities_tab').hide();
    $('#done_tab').show();
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
    setTimeout(() => {
        $('.propertySubmissionForm').submit();
        
    }, 2000);
}

</script>


<script>
    $(document).ready(function() {
    $('.prev_btn').click(function() {
        console.log("Previous button clicked");

        // Get the current tab index
        var currentIndex = $('#head_lst li').index($('#head_lst li.current'));
        console.log("Current tab index:", currentIndex);

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




{{-- file preview handled here --}}
<script>
    document.getElementById('fileInput').addEventListener('change', function(event) {
        const files = event.target.files;
        const previewList = document.getElementById('previewList');

        Array.from(files).forEach((file, index) => {
            const reader = new FileReader();
            reader.onload = function(e) {
                const li = document.createElement('li');
                li.innerHTML += `
                    <div class="thumb">
                        <img src="${e.target.result}" alt="">
                        <button type="button" class="x_btn" onclick="removeFile(this)">&times;</button>
                    </div>
                `;
                previewList.appendChild(li);
            };
            reader.readAsDataURL(file);
        });
    });

    function removeFile(btn) {
        const li = btn.parentElement.parentElement;
        li.remove();
    }
</script>




@endpush