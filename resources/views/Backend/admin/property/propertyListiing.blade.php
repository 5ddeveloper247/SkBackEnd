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
                                                        class="text_box" placeholder="">
                                                </div>
                                            </div>
                                            <div class="col-xs-6">
                                                <h6>Last Name<sup>*</sup></h6>
                                                <div class="form_blk">
                                                    <input type="text" name="pInfo_lastName" id="pInfo_lastName"
                                                        class="text_box" placeholder="">
                                                </div>
                                            </div>
                                            <div class="col-xs-6">
                                                <h6>Email Address<sup>*</sup></h6>
                                                <div class="form_blk">
                                                    <input type="email" name="pInfo_email" id="pInfo_email"
                                                        class="text_box" placeholder="sample@gmail.com">
                                                </div>
                                            </div>
                                            <div class="col-xs-6">
                                                <h6>Phone Number<sup>*</sup></h6>
                                                <div class="form_blk">
                                                    <input type="number" name="pInfo_phoneNumber" id="pInfo_phoneNumber"
                                                        class="text_box" placeholder="+92300 0000 000">
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
                                            <div class="col-sm-6 col-xs-12 ">
                                                <h6>Purpose<sup>*</sup></h6>
                                                <div class="form_blk">
                                                    <select name="purpose_purpose" id="purpose_purpose" class="text_box"
                                                        data-container="body">
                                                        <option value="Sale">Sale</option>
                                                        <option value="Rent">Rent</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-xs-12">
                                                <h6>Home<sup>**</sup></h6>
                                                <div class="form_blk">
                                                    <select name="pupose_home" id="pupose_home" class="text_box"
                                                        data-container="body">
                                                        <option value="">Select Home</option>
                                                        <option value="House">House</option>
                                                        <option value="Flat">Flat</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-xs-12">
                                                <h6>Plot<sup>**</sup></h6>
                                                <div class="form_blk">
                                                    <select name="purpose_plot" id="purpose_plot" class="text_box"
                                                        data-container="body">
                                                        <option value="">Select Plot</option>
                                                        <option value="Residential Plot">Residential Plot</option>
                                                        <option value="CommercialPlot">Commercial Plot</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-xs-12">
                                                <h6>Commercial<sup>**</sup></h6>
                                                <div class="form_blk">
                                                    <select name="purpose_commercial" id="purpose_commercial"
                                                        class="text_box" data-container="body">
                                                        <option value="">Select Commercial</option>
                                                        <option value="Office">Office</option>
                                                        <option value="Shop">Shop</option>
                                                        <option value="Building">Building</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-xs-6">
                                                <h6>Price<sup>*</sup></h6>
                                                <div class="form_blk">
                                                    <input type="number" name="price" id="price" class="text_box"
                                                        placeholder="Price">
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
                                            <div class="col-sm-6 col-xs-12">
                                                <h6>City<sup>*</sup></h6>
                                                <div class="form_blk">
                                                    <select name="address_city" id="address_city" class="text_box"
                                                        data-container="body">
                                                        <!-- Options will be populated dynamically -->
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-xs-12">
                                                <h6>Area<sup>*</sup></h6>
                                                <div class="form_blk">
                                                    <select name="address_area" id="address_area" class="text_box "
                                                        data-container="body">
                                                        <!-- Options will be populated dynamically -->
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-xs-12">
                                                <h6>location<sup>*</sup></h6>
                                                <div class="form_blk">
                                                    <select name="address_location" id="address_location"
                                                        class="text_box" data-container="body">
                                                        <!-- Options will be populated dynamically -->
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-xs-12">
                                                <h6>Sector<sup>*</sup></h6>
                                                <div class="form_blk">
                                                    <select name="address_sector" id="address_sector" class="text_box "
                                                        data-container="body">
                                                        <!-- Options will be populated dynamically -->
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 col-xs-12">
                                                <h6>Address<sup>*</sup></h6>
                                                <textarea class="text_box" placeholder="Describe your address"
                                                    name="address_address" id="address_address"
                                                    spellcheck="false"></textarea>
                                            </div>

                                            <div class="col-sm-12 col-xs-12">
                                                <h6>Google Map Link<sup></sup></h6>
                                                <input class="text_box" placeholder="Map Location"
                                                    name="address_map_location" id="address_map_location"
                                                    spellcheck="false" />
                                            </div>
                                        </div>
                                        <div class="btn_blk form_btn text-right">
                                            <button type="button"
                                                class="site_btn long simple border address_back_btn prev_btn"
                                                id="address_back_btn">Back</button>
                                            <button type="button" class="site_btn address_continue_btn long"
                                                id="address_continue_btn">Continue</button>
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
                                                        data-container="body" />

                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-xs-12">
                                                <h6>Area Unit<sup>*</sup></h6>
                                                <div class="form_blk">
                                                    <select name="propertyDetail_area" id="propertyDetail_area"
                                                        class="text_box " data-container="body">
                                                        <option value="Marla">Marla</option>
                                                        <option value="Sq.Ft">Sq.Ft</option>
                                                        <option value="Sq.M">Sq.M</option>
                                                        <option value="Sq.Yd">Sq.Yd</option>
                                                        <option value="Kanal">Kanal</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-xs-12">
                                                <div class="form_blk">
                                                    <div>
                                                        <h6>Area<sup>*</sup></h6>
                                                        <div class="form_blk">
                                                            <input type="number" name="propertyDetail_area_unit"
                                                                id="propertyDetail_area_unit" class="text_box"
                                                                placeholder="eg: 10">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-xs-12">
                                                <h6>Bedrooms<sup>*</sup></h6>
                                                <div class="form_blk">
                                                    <input type="number" name="propertyDetail_bedrooms"
                                                        id="propertyDetail_bedrooms" class="text_box "
                                                        data-container="body" mx="10" />

                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-xs-12">
                                                <h6>Bathrooms<sup>*</sup></h6>
                                                <div class="form_blk">
                                                    <input type="number" name="propertyDetail_bathrooms"
                                                        id="propertyDetail_bathrooms" class="text_box"
                                                        data-container="body" max="10" />


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
                                                                id="extra_info_title" class="text_box" value=""
                                                                placeholder="">
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
                                                <h4 class="subheading">Upload Photos <sup>*</sup><sup class="text-red"
                                                        style="font-size: 10px;">(Allowed formats:png, jpeg, jpg)</sup>
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
                                                                <input type="file" id="fileInput" name="photos[]"
                                                                    accept=".png, .jpg, .jpeg" multiple
                                                                    style="display:none;">
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
                                            Upload ends______________________________ --}}

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
                                                class="site_btn amenities_continue_btn long ">Continue</button>
                                        </div>
                                    </fieldset>

                                    {{-- Done tabl --}}
                                    <fieldset id="done_tab">
                                        <div class="text-center">
                                            <div class="br"></div>
                                            <h3 class="color">Thank You!</h3>
                                            <p>New property request is complete.</p>
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
        toastr.error('Please fill out all mandatory fields!', '', {
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
    var purpose = $('#purpose_purpose');
    var price = $('#price');

    // Remove red borders from previously failed fields
    $('.validation-failed').removeClass('validation-failed');

    // Ensure only one of the purpose fields is selected
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
            $(field).addClass('validation-failed');
        });
        toastr.error('Please select a field from Home, Plot, or Commercial', '', {
            timeOut: 3000
        });
    } else {
        purposeFields.forEach(function(field) {
            $(field).removeClass('validation-failed');
        });
    }

    // Add validation logic for Purpose and Price fields
    if (!purpose.val().trim()) {
        purpose.addClass('validation-failed');
    }
    if (!price.val().trim()) {
        price.addClass('validation-failed');
    }

    // Check if any field failed validation
    if ($('.validation-failed').length > 0) {
        toastr.error('Please fill out all mandatory fields!', '', {
            timeOut: 2000
        });
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
    var location = $('#address_location');
    // var sector = $('#address_sector');
    var address = $('#address_address');
   // var address_map_location = $('#address_map_location');

    // Remove red borders from previously failed fields
    $('.validation-failed').removeClass('validation-failed');

    // Add validation logic for Address fields
    if (!city.val().trim()) {
        city.addClass('validation-failed');
    }
    if (!area.val().trim()) {
        area.addClass('validation-failed');
    }
    if (!location.val().trim()) {
        location.addClass('validation-failed');
    }
    // if (!sector.val().trim()) {
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
        toastr.error('Please select all in Address', '', {
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

    if(hometype !=='')
    {
    if (!bedrooms.val().trim()) {
        bedrooms.addClass('validation-failed');
    }
    if (!bathrooms.val().trim()) {
        bathrooms.addClass('validation-failed');
    } 
    } 
   

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
    var images = $('#fileInput');

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
    
    if (!landline.val().trim()) {
        landline.addClass('validation-failed');
    }
    if (landline.val().trim().length > 10) {
        landline.addClass('validation-failed');
        toastr.error('Landline number should not be greater than 10 characters', '', {
            timeOut: 3000
        });
    }
    if (!description.val().trim()) {
        description.addClass('validation-failed');
    }
    if(!images.val()){
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
        previewList.innerHTML = ''; // Clear previous previews

        Array.from(files).forEach((file, index) => {
            const validImageTypes = ['image/png', 'image/jpeg', 'image/jpg'];
            if (!validImageTypes.includes(file.type)) {
                alert('Only PNG and JPEG image files are allowed.');
                return;
            }
            
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

    function removeFile(btn) {
        const li = btn.parentElement.parentElement;
        li.remove();
    }
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
        // var home = $('#pupose_home_edit');
        // var plot = $('#purpose_plot_edit'); 
        // var commercial = $('#purpose_commercial_edit');
    
        // Remove red borders from previously failed fields
        $('.validation-failed').removeClass('validation-failed');
    
        // Add validation logic for Purpose fields
        if (!purpose.val().trim()) {
            purpose.addClass('validation-failed');
        }
        // if (!home.val().trim()) {
        //     home.addClass('validation-failed');
        // }
        // if (!plot.val().trim()) {
        //     plot.addClass('validation-failed');
        // }
        // if (!commercial.val().trim()) {
        //     commercial.addClass('validation-failed');
        // }
    
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
            toastr.error('Please select all required fields in Extra Information', '', {
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

{{-- ___________________________________-Edit Scripts ended______________________________________ --}}



{{-- ________________________________setting edit value in edit form_________________________ --}}
<script>
    //     $(document).on('click', '.edit_btn', function () {
// var id = $(this).attr('data-id');
// console.log(id)
// let url = '/admin/getpropertydata';
// let type = 'POST';
// let data = new FormData();
// data.append('id', id);
// SendAjaxRequestToServer(type, url, data, '', getpropertydataResponse, '', '');


// });

$(document).on('click', '.edit_btn', function () {
    var id = $(this).attr('data-id');
    const base_url = '{{ url('/') }}';
    window.location.href = base_url + '/admin/property/edit/show/' + id;
});

function getpropertydataResponse(response) {

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


    $('#edit-data-popup').show();

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
    //alert("clicked");
    const li = btn.parentElement.parentElement;

    const existingFiles = $('#existingFiles');
    let filePaths = JSON.parse(existingFiles.val());
    const base_url = '{{ url('/') }}';
    const filePath = btn.previousElementSibling.src.split(base_url + '/')[1];
   
    // Ensure the filePath is correct
    //console.log("File path to remove:", filePath);
   
    // Filter out the file path from the array of existing file paths
    filePaths = filePaths.filter(path => path !== filePath);
    //console.log("Updated file paths:", filePaths);
    
    // Update the value of the existingFiles input
    existingFiles.val(JSON.stringify(filePaths));
    $('.edit-data-popup').css('display', 'block');

    return true;
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
            if (except !== '#pupose_home') {
                $('#pupose_home').val('').selectpicker('refresh');
            }
            if (except !== '#purpose_plot') {
                $('#purpose_plot').val('').selectpicker('refresh');
            }
            if (except !== '#purpose_commercial') {
                $('#purpose_commercial').val('').selectpicker('refresh');
            }
        }
    
        $('#pupose_home').change(function() {
            if ($(this).val() !== '') {
                resetSelects('#pupose_home');
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
    
            // Ensure only one of the purpose fields is selected
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


@endpush