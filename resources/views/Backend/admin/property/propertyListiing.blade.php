@extends('Backend.includes.common-template')
@push('styles')

<style>
    .validation-failed {
        border: 1px solid red;
    }
</style>
@endpush

@section('content')

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


        {{-- ______________________tab listings_______________________________--- --}}

        <div class="tab-content">


            {{-- ______________________tab <All> start_______________________________--- --}}
                <div id="All" class="tab-pane fade in active">
                    <div class="top_head">
                        <h4>Properties</h4>
                        <div class="form_blk">
                            <input type="text" name="" id="" class="text_box" placeholder="Search here">
                            <button type="button"><img src="{{ asset('/images/icon-search.svg')}}" alt=""></button>
                        </div>
                    </div>
                    <div class="blk">
                        <div class="tbl_blk">
                            <table>
                                <thead>
                                    <tr>
                                        <th width="10">#</th>
                                        <th>Job No.</th>
                                        <th data-center>Delivery Provider</th>
                                        <th data-center>Date</th>
                                        <th data-center>Time</th>
                                        <th data-center>Delivery Status</th>
                                        <th data-center>Amount</th>
                                        <th width="40" data-center>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="nowrap">01</td>
                                        <td class="nowrap">2345</td>
                                        <td data-center>YNA</td>
                                        <td class="nowrap" data-center>18 Dec 2021</td>
                                        <td class="nowrap" data-center>14:00</td>
                                        <td class="nowrap" data-center>Departed</td>
                                        <td class="nowrap" data-center>£9,000</td>
                                        <td class="nowrap" data-center>
                                            <div class="act_btn">
                                                <button type="button" class="edit"></button>
                                                <button type="button" class="share"></button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="nowrap">02</td>
                                        <td class="nowrap">2345</td>
                                        <td data-center>YNA</td>
                                        <td class="nowrap" data-center>18 Dec 2021</td>
                                        <td class="nowrap" data-center>14:00</td>
                                        <td class="nowrap" data-center>Departed</td>
                                        <td class="nowrap" data-center>£9,000</td>
                                        <td class="nowrap" data-center>
                                            <div class="act_btn">
                                                <button type="button" class="edit"></button>
                                                <button type="button" class="share"></button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="nowrap">03</td>
                                        <td class="nowrap">2345</td>
                                        <td data-center>YNA</td>
                                        <td class="nowrap" data-center>18 Dec 2021</td>
                                        <td class="nowrap" data-center>14:00</td>
                                        <td class="nowrap" data-center>Departed</td>
                                        <td class="nowrap" data-center>£9,000</td>
                                        <td class="nowrap" data-center>
                                            <div class="act_btn">
                                                <button type="button" class="edit"></button>
                                                <button type="button" class="share"></button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="nowrap">04</td>
                                        <td class="nowrap">2345</td>
                                        <td data-center>YNA</td>
                                        <td class="nowrap" data-center>18 Dec 2021</td>
                                        <td class="nowrap" data-center>14:00</td>
                                        <td class="nowrap" data-center>Departed</td>
                                        <td class="nowrap" data-center>£9,000</td>
                                        <td class="nowrap" data-center>
                                            <div class="act_btn">
                                                <button type="button" class="edit"></button>
                                                <button type="button" class="share"></button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="nowrap">05</td>
                                        <td class="nowrap">2345</td>
                                        <td data-center>YNA</td>
                                        <td class="nowrap" data-center>18 Dec 2021</td>
                                        <td class="nowrap" data-center>14:00</td>
                                        <td class="nowrap" data-center>Departed</td>
                                        <td class="nowrap" data-center>£9,000</td>
                                        <td class="nowrap" data-center>
                                            <div class="act_btn">
                                                <button type="button" class="edit"></button>
                                                <button type="button" class="share"></button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="nowrap">06</td>
                                        <td class="nowrap">2345</td>
                                        <td data-center>YNA</td>
                                        <td class="nowrap" data-center>18 Dec 2021</td>
                                        <td class="nowrap" data-center>14:00</td>
                                        <td class="nowrap" data-center>Departed</td>
                                        <td class="nowrap" data-center>£9,000</td>
                                        <td class="nowrap" data-center>
                                            <div class="act_btn">
                                                <button type="button" class="edit"></button>
                                                <button type="button" class="share"></button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="nowrap">07</td>
                                        <td class="nowrap">2345</td>
                                        <td data-center>YNA</td>
                                        <td class="nowrap" data-center>18 Dec 2021</td>
                                        <td class="nowrap" data-center>14:00</td>
                                        <td class="nowrap" data-center>Departed</td>
                                        <td class="nowrap" data-center>£9,000</td>
                                        <td class="nowrap" data-center>
                                            <div class="act_btn">
                                                <button type="button" class="edit"></button>
                                                <button type="button" class="share"></button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="nowrap">08</td>
                                        <td class="nowrap">2345</td>
                                        <td data-center>YNA</td>
                                        <td class="nowrap" data-center>18 Dec 2021</td>
                                        <td class="nowrap" data-center>14:00</td>
                                        <td class="nowrap" data-center>Departed</td>
                                        <td class="nowrap" data-center>£9,000</td>
                                        <td class="nowrap" data-center>
                                            <div class="act_btn">
                                                <button type="button" class="edit"></button>
                                                <button type="button" class="share"></button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="nowrap">09</td>
                                        <td class="nowrap">2345</td>
                                        <td data-center>YNA</td>
                                        <td class="nowrap" data-center>18 Dec 2021</td>
                                        <td class="nowrap" data-center>14:00</td>
                                        <td class="nowrap" data-center>Departed</td>
                                        <td class="nowrap" data-center>£9,000</td>
                                        <td class="nowrap" data-center>
                                            <div class="act_btn">
                                                <button type="button" class="edit"></button>
                                                <button type="button" class="share"></button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="nowrap">10</td>
                                        <td class="nowrap">2345</td>
                                        <td data-center>YNA</td>
                                        <td class="nowrap" data-center>18 Dec 2021</td>
                                        <td class="nowrap" data-center>14:00</td>
                                        <td class="nowrap" data-center>Departed</td>
                                        <td class="nowrap" data-center>£9,000</td>
                                        <td class="nowrap" data-center>
                                            <div class="act_btn">
                                                <button type="button" class="edit"></button>
                                                <button type="button" class="share"></button>
                                            </div>
                                        </td>
                                    </tr>
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
                                    class="propertySubmissionForm" method="POST">
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
                                                            <div class="icon"><img
                                                                    src="{{ asset('/images/upload.svg')}}" alt=""></div>
                                                            <h6>Drag & Drop</h6>
                                                            <div class="or">OR</div>
                                                            <div class="btn_blk text-center">
                                                                <button type="button" class="site_btn sm">Browse
                                                                    Files</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-12">
                                                        <div class="upload_lst_blk text_box">
                                                            <ul class="img_list flex">
                                                                <li>
                                                                    <div class="thumb">
                                                                        <img src="{{ asset('/images/cars/01.jpg')}}"
                                                                            alt="">
                                                                        <button type="button" class="x_btn"></button>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="thumb">
                                                                        <img src="{{ asset('/images/cars/02.jpg')}}"
                                                                            alt="">
                                                                        <button type="button" class="x_btn"></button>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="thumb">
                                                                        <img src="{{ asset('/images/cars/03.jpg')}}"
                                                                            alt="">
                                                                        <button type="button" class="x_btn"></button>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="thumb">
                                                                        <img src="{{ asset('/images/cars/04.jpg')}}"
                                                                            alt="">
                                                                        <button type="button" class="x_btn"></button>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="thumb">
                                                                        <img src="{{ asset('/images/cars/05.jpg')}}"
                                                                            alt="">
                                                                        <button type="button" class="x_btn"></button>
                                                                    </div>
                                                                </li>
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
                                                    {{-- <select id="multiSelect" name="veh_features[]"
                                                        multiple="multiple" style="width: 100%;">
                                                        <option value="Possession">Possession</option>
                                                        <option value="Balloted">Balloted</option>
                                                        <option value="Sewerage">Sewerage</option>
                                                        <option value="Electricity">Electricity</option>
                                                        <option value="Water Supply">Water Supply</option>
                                                        <option value="Sui Gas">Sui Gas</option>
                                                        <option value="Boundary Wall">Boundary Wall</option>
                                                        <option value="Nearby School">Nearby School</option>
                                                        <option value="Nearby Hospitals">Nearby Hospitals</option>
                                                        <option value="Nearby Shopping Malls">Nearby Shopping Malls
                                                        </option>
                                                        <option value="Nearby Restaurant">Nearby Restaurant</option>
                                                        <option value="Nearby Public Transport Service">Nearby Public
                                                            Transport Service</option>
                                                        <option value="Security Staff">Security Staff</option>
                                                        <option value="Central Air Conditioning">Central Air
                                                            Conditioning</option>
                                                        <option value="Waste Disposal">Waste Disposal</option>
                                                        <option value="Double Glazed Windows">Double Glazed Windows
                                                        </option>
                                                        <option value="Central Heating">Central Heating</option>
                                                        <option value="Study Room">Study Room</option>
                                                        <option value="Laundry Room">Laundry Room</option>
                                                        <option value="Broadband Internet Access">Broadband Internet
                                                            Access</option>
                                                        <option value="Power Windows">Power Windows</option>
                                                        <option value="Satellite or Cable TV Ready">Satellite or Cable
                                                            TV Ready</option>
                                                    </select> --}}
                                                    <ul class="check_lst flex">
                                                        <li>
                                                            <label>
                                                                <input type="checkbox" name="veh_feature" id="">
                                                                <span>Possesion</span>
                                                            </label>
                                                        </li>
                                                        <li>
                                                            <label>
                                                                <input type="checkbox" name="veh_feature" id="">
                                                                <span>Balloted</span>
                                                            </label>
                                                        </li>
                                                        <li>
                                                            <label>
                                                                <input type="checkbox" name="veh_feature" id="">
                                                                <span>Sewerage</span>
                                                            </label>
                                                        </li>
                                                        <li>
                                                            <label>
                                                                <input type="checkbox" name="veh_feature" id="">
                                                                <span>Electricity</span>
                                                            </label>
                                                        </li>
                                                        <li>
                                                            <label>
                                                                <input type="checkbox" name="veh_feature" id="">
                                                                <span>Water Supply</span>
                                                            </label>
                                                        </li>
                                                        <li>
                                                            <label>
                                                                <input type="checkbox" name="veh_feature" id="">
                                                                <span>Sui Gas</span>
                                                            </label>
                                                        </li>
                                                        <li>
                                                            <label>
                                                                <input type="checkbox" name="veh_feature" id="">
                                                                <span>Boundry Wall</span>
                                                            </label>
                                                        </li>
                                                        <li>
                                                            <label>
                                                                <input type="checkbox" name="veh_feature" id="">
                                                                <span>Nearby School</span>
                                                            </label>
                                                        </li>
                                                        <li>
                                                            <label>
                                                                <input type="checkbox" name="veh_feature" id="">
                                                                <span>Nearby Hospitals</span>
                                                            </label>
                                                        </li>
                                                        <li>
                                                            <label>
                                                                <input type="checkbox" name="veh_feature" id="">
                                                                <span>Nearby Shopping Malls</span>
                                                            </label>
                                                        </li>
                                                        <li>
                                                            <label>
                                                                <input type="checkbox" name="veh_feature" id="">
                                                                <span>Nearby Restaurant</span>
                                                            </label>
                                                        </li>
                                                        <li>
                                                            <label>
                                                                <input type="checkbox" name="veh_feature" id="">
                                                                <span>Nearby Pubic Transport Service</span>
                                                            </label>
                                                        </li>
                                                        <li>
                                                            <label>
                                                                <input type="checkbox" name="veh_feature" id="">
                                                                <span>Security Staff</span>
                                                            </label>
                                                        </li>
                                                        <li>
                                                            <label>
                                                                <input type="checkbox" name="veh_feature" id="">
                                                                <span>Central Air Conditioning</span>
                                                            </label>
                                                        </li>
                                                        <li>
                                                            <label>
                                                                <input type="checkbox" name="veh_feature" id="">
                                                                <span>Waste Disposal </span>
                                                            </label>
                                                        </li>
                                                        <li>
                                                            <label>
                                                                <input type="checkbox" name="veh_feature" id="">
                                                                <span>Double Glazed Windows</span>
                                                            </label>
                                                        </li>
                                                        <li>
                                                            <label>
                                                                <input type="checkbox" name="veh_feature" id="">
                                                                <span>Central Heating</span>
                                                            </label>
                                                        </li>
                                                        <li>
                                                            <label>
                                                                <input type="checkbox" name="veh_feature" id="">
                                                                <span>Study Room</span>
                                                            </label>
                                                        </li>
                                                        <li>
                                                            <label>
                                                                <input type="checkbox" name="veh_feature" id="">
                                                                <span>Laundry Room</span>
                                                            </label>
                                                        </li>
                                                        <li>
                                                            <label>
                                                                <input type="checkbox" name="veh_feature" id="">
                                                                <span>Broadband Internet Access</span>
                                                            </label>
                                                        </li>
                                                        <li>
                                                            <label>
                                                                <input type="checkbox" name="veh_feature" id="">
                                                                <span>Power Windows</span>
                                                            </label>
                                                        </li>
                                                        <li>
                                                            <label>
                                                                <input type="checkbox" name="veh_feature" id="">
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




                            {{-- ______________________tab <Inspection> start_______________________________--- --}}

                                {{-- <div id="Inspection" class="tab-pane fade">
                                    <div class="top_head">
                                        <h4>Vehicle Pre-Delivery Inspection Form</h4>
                                    </div>
                                    <form action="" method="POST">
                                        <fieldset>
                                            <div class="blk">
                                                <h5 class="color">Seller Information</h5>
                                                <div class="form_row row">
                                                    <div class="col-xs-6">
                                                        <div class="form_blk">
                                                            <h6>Full Name<sup>*</sup></h6>
                                                            <input type="text" name="" id="" class="text_box"
                                                                placeholder="eg: John Wick">
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-6">
                                                        <div class="form_blk">
                                                            <h6>Phone Number<sup>*</sup></h6>
                                                            <input type="text" name="" id="" class="text_box"
                                                                placeholder="eg: +92300 0000 000">
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-12">
                                                        <div class="form_blk">
                                                            <h6>Address</h6>
                                                            <input type="text" name="" id="" class="text_box"
                                                                placeholder="eg: 123 Main Street, California">
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr>
                                                <h5 class="color">Buyer Information</h5>
                                                <div class="form_row row">
                                                    <div class="col-xs-6">
                                                        <div class="form_blk">
                                                            <h6>Full Name<sup>*</sup></h6>
                                                            <input type="text" name="" id="" class="text_box"
                                                                placeholder="eg: John Wick">
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-6">
                                                        <div class="form_blk">
                                                            <h6>Phone Number<sup>*</sup></h6>
                                                            <input type="text" name="" id="" class="text_box"
                                                                placeholder="eg: +92300 0000 000">
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-12">
                                                        <div class="form_blk">
                                                            <h6>Address</h6>
                                                            <input type="text" name="" id="" class="text_box"
                                                                placeholder="eg: 123 Main Street, California">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="btn_blk form_btn text-right">
                                                <!-- <button type="button" class="site_btn long light prev_btn"><img src="{{ asset('assets/images/arrow-left-sm.svg')}}" alt=""> Back</button> -->
                                                <button type="button" class="site_btn long next_btn">Continue</button>
                                            </div>
                                        </fieldset>
                                        <fieldset>
                                            <div class="blk">
                                                <h5 class="color">Vehicle Details</h5>
                                                <div class="form_row row">
                                                    <div class="col-xs-6">
                                                        <h6>Make<sup>*</sup></h6>
                                                        <div class="form_blk">
                                                            <select name="" id="" class="text_box selectpicker"
                                                                data-container="body">
                                                                <option>Select </option>
                                                                <option>BMW</option>
                                                                <option>Honda </option>
                                                                <option>Hyundai </option>
                                                                <option>Nissan </option>
                                                                <option>Mercedes Benz </option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-6">
                                                        <h6>Model<sup>*</sup></h6>
                                                        <div class="form_blk">
                                                            <select name="" id="" class="text_box selectpicker"
                                                                data-container="body">
                                                                <option>Select</option>
                                                                <option>3-Series</option>
                                                                <option>Carrera</option>
                                                                <option>GT-R</option>
                                                                <option>Cayenne</option>
                                                                <option>Mazda6</option>
                                                                <option>Macan</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-6">
                                                        <h6>Color<sup>*</sup></h6>
                                                        <div class="form_blk">
                                                            <select name="" id="" class="text_box selectpicker"
                                                                data-container="body">
                                                                <option>Select</option>
                                                                <option>Color 001</option>
                                                                <option>Color 001</option>
                                                                <option>Color 001</option>
                                                                <option>Color 001</option>
                                                                <option>Color 001</option>
                                                                <option>Color 001</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-6">
                                                        <h6>Reg No<sup>*</sup></h6>
                                                        <div class="form_blk">
                                                            <input type="text" name="" id="" class="text_box"
                                                                placeholder="eg: SM17LEU">
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-6">
                                                        <h6>Chassis No<sup>*</sup></h6>
                                                        <div class="form_blk">
                                                            <input type="text" name="" id="" class="text_box"
                                                                placeholder="eg: 1.4 DURATORQ TDCI 68-B">
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-6">
                                                        <h6>Engine No<sup>*</sup></h6>
                                                        <div class="form_blk">
                                                            <input type="text" name="" id="" class="text_box"
                                                                placeholder="eg: AT88940">
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-6">
                                                        <h6>Mileage<sup>*</sup></h6>
                                                        <div class="form_blk">
                                                            <input type="text" name="" id="" class="text_box"
                                                                placeholder="eg: 6300">
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-6">
                                                        <h6>Date<sup>*</sup></h6>
                                                        <div class="form_blk">
                                                            <input type="text" name="" id="" class="text_box datepicker"
                                                                placeholder="eg: 01-18-2022">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="btn_blk form_btn text-right">
                                                <button type="button" class="site_btn long light prev_btn"><img
                                                        src="{{ asset('assets/images/arrow-left-sm.svg')}}" alt="">
                                                    Back</button>
                                                <button type="button" class="site_btn long next_btn">Continue</button>
                                            </div>
                                        </fieldset>
                                        <fieldset>
                                            <div class="blk">
                                                <h5 class="color">Interior Check</h5>
                                                <table class="check_table">
                                                    <thead>
                                                        <tr>
                                                            <th>Check List</th>
                                                            <th>OK</th>
                                                            <th><small>Required/Replaced</small></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>Seat Belt - Front & Rear</td>
                                                            <td><input type="radio" name="int_01" id=""></td>
                                                            <td><input type="radio" name="int_01" id=""></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Mirror - Interior & Exterior</td>
                                                            <td><input type="radio" name="int_02" id=""></td>
                                                            <td><input type="radio" name="int_02" id=""></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Windows - Front & Rear</td>
                                                            <td><input type="radio" name="int_03" id=""></td>
                                                            <td><input type="radio" name="int_03" id=""></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Wipers - Front & Rear</td>
                                                            <td><input type="radio" name="int_04" id=""></td>
                                                            <td><input type="radio" name="int_04" id=""></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Glovebox, Ashtray and Cigarette Lighter</td>
                                                            <td><input type="radio" name="int_05" id=""></td>
                                                            <td><input type="radio" name="int_05" id=""></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Sun Visors and Sunroof</td>
                                                            <td><input type="radio" name="int_06" id=""></td>
                                                            <td><input type="radio" name="int_06" id=""></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Horn</td>
                                                            <td><input type="radio" name="int_07" id=""></td>
                                                            <td><input type="radio" name="int_07" id=""></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Seat, Adjustment, Mountings and General Conditions</td>
                                                            <td><input type="radio" name="int_08" id=""></td>
                                                            <td><input type="radio" name="int_08" id=""></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Internal Panels -Fit and Condition</td>
                                                            <td><input type="radio" name="int_09" id=""></td>
                                                            <td><input type="radio" name="int_09" id=""></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Carpet and Trim - Condition</td>
                                                            <td><input type="radio" name="int_10" id=""></td>
                                                            <td><input type="radio" name="int_10" id=""></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="btn_blk form_btn text-right">
                                                <button type="button" class="site_btn long light prev_btn"><img
                                                        src="{{ asset('assets/images/arrow-left-sm.svg')}}" alt="">
                                                    Back</button>
                                                <button type="button" class="site_btn long next_btn">Continue</button>
                                            </div>
                                        </fieldset>
                                        <fieldset>
                                            <div class="blk">
                                                <h5 class="color">Lights Check</h5>
                                                <table class="check_table">
                                                    <thead>
                                                        <tr>
                                                            <th>Check List</th>
                                                            <th>OK</th>
                                                            <th><small>Required/Replaced</small></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>Dashboard Lights</td>
                                                            <td><input type="radio" name="light_01" id=""></td>
                                                            <td><input type="radio" name="light_01" id=""></td>
                                                        </tr>
                                                        <tr>
                                                            <td>All Interior Lights (inc glovebox boot etc.)</td>
                                                            <td><input type="radio" name="light_02" id=""></td>
                                                            <td><input type="radio" name="light_02" id=""></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Headlights and Fog Lights</td>
                                                            <td><input type="radio" name="light_03" id=""></td>
                                                            <td><input type="radio" name="light_03" id=""></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Side Lights - Front and Rear</td>
                                                            <td><input type="radio" name="light_04" id=""></td>
                                                            <td><input type="radio" name="light_04" id=""></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Tail Lights and Rear Fog Lights</td>
                                                            <td><input type="radio" name="light_05" id=""></td>
                                                            <td><input type="radio" name="light_05" id=""></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Indicator Lights</td>
                                                            <td><input type="radio" name="light_06" id=""></td>
                                                            <td><input type="radio" name="light_06" id=""></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Brake Lights</td>
                                                            <td><input type="radio" name="light_07" id=""></td>
                                                            <td><input type="radio" name="light_07" id=""></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Number Plate Lights</td>
                                                            <td><input type="radio" name="light_08" id=""></td>
                                                            <td><input type="radio" name="light_08" id=""></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="btn_blk form_btn text-right">
                                                <button type="button" class="site_btn long light prev_btn"><img
                                                        src="{{ asset('assets/images/arrow-left-sm.svg')}}" alt="">
                                                    Back</button>
                                                <button type="button" class="site_btn long next_btn">Continue</button>
                                            </div>
                                        </fieldset>
                                        <fieldset>
                                            <div class="blk">
                                                <h5 class="color">Engine Check</h5>
                                                <table class="check_table">
                                                    <thead>
                                                        <tr>
                                                            <th>Check List</th>
                                                            <th>OK</th>
                                                            <th><small>Required/Replaced</small></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>Engine Oil</td>
                                                            <td><input type="radio" name="eng_01" id=""></td>
                                                            <td><input type="radio" name="eng_01" id=""></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Brake Fluid</td>
                                                            <td><input type="radio" name="eng_02" id=""></td>
                                                            <td><input type="radio" name="eng_02" id=""></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Power Steering Fluid</td>
                                                            <td><input type="radio" name="eng_03" id=""></td>
                                                            <td><input type="radio" name="eng_03" id=""></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Clutch Fluid</td>
                                                            <td><input type="radio" name="eng_04" id=""></td>
                                                            <td><input type="radio" name="eng_04" id=""></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Coolant</td>
                                                            <td><input type="radio" name="eng_05" id=""></td>
                                                            <td><input type="radio" name="eng_05" id=""></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Window Washer</td>
                                                            <td><input type="radio" name="eng_06" id=""></td>
                                                            <td><input type="radio" name="eng_06" id=""></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Battery - Connection and Mounting</td>
                                                            <td><input type="radio" name="eng_07" id=""></td>
                                                            <td><input type="radio" name="eng_07" id=""></td>
                                                        </tr>
                                                        <tr>
                                                            <td>All Belts -Tension and Condition</td>
                                                            <td><input type="radio" name="eng_08" id=""></td>
                                                            <td><input type="radio" name="eng_08" id=""></td>
                                                        </tr>
                                                        <tr>
                                                            <td>All Mountings - Security and Condition</td>
                                                            <td><input type="radio" name="eng_09" id=""></td>
                                                            <td><input type="radio" name="eng_09" id=""></td>
                                                        </tr>
                                                        <tr>
                                                            <td>All Pipes and Hoses</td>
                                                            <td><input type="radio" name="eng_10" id=""></td>
                                                            <td><input type="radio" name="eng_10" id=""></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="btn_blk form_btn text-right">
                                                <button type="button" class="site_btn long light prev_btn"><img
                                                        src="{{ asset('assets/images/arrow-left-sm.svg')}}" alt="">
                                                    Back</button>
                                                <button type="button" class="site_btn long next_btn">Continue</button>
                                            </div>
                                        </fieldset>
                                        <fieldset>
                                            <div class="blk">
                                                <h5 class="color">Exterior Check</h5>
                                                <table class="check_table">
                                                    <thead>
                                                        <tr>
                                                            <th>Check List</th>
                                                            <th>OK</th>
                                                            <th><small>Required/Replaced</small></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>Bonnet and Boot - Operating and Locking</td>
                                                            <td><input type="radio" name="ext_01" id=""></td>
                                                            <td><input type="radio" name="ext_01" id=""></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Doors - Opening Closing and Locking</td>
                                                            <td><input type="radio" name="ext_02" id=""></td>
                                                            <td><input type="radio" name="ext_02" id=""></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Central Locking</td>
                                                            <td><input type="radio" name="ext_03" id=""></td>
                                                            <td><input type="radio" name="ext_03" id=""></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Suspension and Shock Absorbers</td>
                                                            <td><input type="radio" name="ext_04" id=""></td>
                                                            <td><input type="radio" name="ext_04" id=""></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Exhaust Condition</td>
                                                            <td><input type="radio" name="ext_05" id=""></td>
                                                            <td><input type="radio" name="ext_05" id=""></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Brake Pads - Lining and Hoses</td>
                                                            <td><input type="radio" name="ext_06" id=""></td>
                                                            <td><input type="radio" name="ext_06" id=""></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Tyres - Pressure and Tread Depth</td>
                                                            <td><input type="radio" name="ext_07" id=""></td>
                                                            <td><input type="radio" name="ext_07" id=""></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Wheel Nuts - Tightness</td>
                                                            <td><input type="radio" name="ext_08" id=""></td>
                                                            <td><input type="radio" name="ext_08" id=""></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Operation of Fuel Cap</td>
                                                            <td><input type="radio" name="ext_09" id=""></td>
                                                            <td><input type="radio" name="ext_09" id=""></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Alarm System</td>
                                                            <td><input type="radio" name="ext_10" id=""></td>
                                                            <td><input type="radio" name="ext_10" id=""></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="btn_blk form_btn text-right">
                                                <button type="button" class="site_btn long light prev_btn"><img
                                                        src="{{ asset('assets/images/arrow-left-sm.svg')}}" alt="">
                                                    Back</button>
                                                <button type="button" class="site_btn long next_btn">Continue</button>
                                            </div>
                                        </fieldset>
                                        <fieldset>
                                            <div class="blk">
                                                <h5 class="color">Road Test</h5>
                                                <table class="check_table">
                                                    <thead>
                                                        <tr>
                                                            <th>Check List</th>
                                                            <th>OK</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>Instruments - Speedometer, Rev Counter etc.</td>
                                                            <td><input type="checkbox" name="road_01" id=""></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Clutch</td>
                                                            <td><input type="checkbox" name="road_01" id=""></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Gear Change Operation</td>
                                                            <td><input type="checkbox" name="road_01" id=""></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Steering Alignment</td>
                                                            <td><input type="checkbox" name="road_01" id=""></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Brakes - Footbrake and Handbrake</td>
                                                            <td><input type="checkbox" name="road_01" id=""></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Indicators - Self Cancel</td>
                                                            <td><input type="checkbox" name="road_01" id=""></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Air Conditioning</td>
                                                            <td><input type="checkbox" name="road_01" id=""></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Heating System</td>
                                                            <td><input type="checkbox" name="road_01" id=""></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Windscreen Washer</td>
                                                            <td><input type="checkbox" name="road_01" id=""></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Audio System</td>
                                                            <td><input type="checkbox" name="road_01" id=""></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="btn_blk form_btn text-right">
                                                <button type="button" class="site_btn long light prev_btn"><img
                                                        src="{{ asset('assets/images/arrow-left-sm.svg')}}" alt="">
                                                    Back</button>
                                                <button type="button" class="site_btn long next_btn">Continue</button>
                                            </div>
                                        </fieldset>
                                        <fieldset>
                                            <div class="blk">
                                                <h5 class="color">Bodywork Appraisal</h5>
                                                <div class="btn_blk form_blk damage_btn text-center">
                                                    <button type="button" class="site_btn sm blank"><span
                                                            class="num yellow">1</span>
                                                        Scratch</button>
                                                    <button type="button" class="site_btn sm blank"><span
                                                            class="num red">2</span>
                                                        Dent</button>
                                                    <button type="button" class="site_btn sm blank"><span
                                                            class="num green">3</span>
                                                        Chip</button>
                                                    <button type="button" class="site_btn sm blank"><span
                                                            class="num blue">4</span>
                                                        Scuff</button>
                                                    <button type="button" class="site_btn sm blank"><span
                                                            class="num gray">5</span>
                                                        Other</button>
                                                </div>
                                                <div class="img_blk form_blk">
                                                    <img src="{{ asset('assets/images/unfolded-car.svg')}}" alt="">
                                                </div>
                                                <p>Choose a damage type above, and click on the diagram. Remove a damage
                                                    icon by clicking on
                                                    it.</p>
                                                <div class="btn_blk form_btn text-right">
                                                    <button type="button" class="site_btn long light prev_btn"><img
                                                            src="{{ asset('assets/images/arrow-left-sm.svg')}}" alt="">
                                                        Back</button>
                                                    <button type="button"
                                                        class="site_btn long next_btn">Continue</button>
                                                </div>
                                            </div>
                                        </fieldset>
                                        <fieldset>
                                            <div class="blk">
                                                <h5 class="color">After Road Test</h5>
                                                <table class="check_table">
                                                    <thead>
                                                        <tr>
                                                            <th>Check List</th>
                                                            <th>OK</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>Check for Fluid Leaks</td>
                                                            <td><input type="checkbox" name="road_02" id=""></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Interior and Exterior Cleaned</td>
                                                            <td><input type="checkbox" name="road_02" id=""></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Spare Wheel and tools checked</td>
                                                            <td><input type="checkbox" name="road_02" id=""></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Documents checked</td>
                                                            <td><input type="checkbox" name="road_02" id=""></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <div class="form_row row">
                                                    <div class="col-xs-12">
                                                        <h6>Comments/Recommendations<sup>*</sup></h6>
                                                        <div class="form_blk">
                                                            <textarea name="" id="" class="text_box"
                                                                placeholder="Type something here"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="btn_blk form_btn text-right">
                                                <button type="button" class="site_btn long light prev_btn"><img
                                                        src="{{ asset('assets/images/arrow-left-sm.svg')}}" alt="">
                                                    Back</button>
                                                <button type="button" class="site_btn long next_btn">Continue</button>
                                            </div>
                                        </fieldset>
                                        <fieldset>
                                            <div class="blk">
                                                <h5 class="color">Completion</h5>
                                                <p>I confirm that all items listed on this Pre-Delivery Inspection Form
                                                    have been checked
                                                    and repairs/replacements made where necessary.</p>
                                                <div class="form_row row">
                                                    <div class="col-xs-12">
                                                        <h6>Signed <small>(on behalf of seller)</small><sup>*</sup></h6>
                                                        <div class="form_blk">
                                                            <input type="text" name="" id="" class="text_box"
                                                                placeholder="eg John Wick">
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-6">
                                                        <h6>Print Name<sup>*</sup></h6>
                                                        <div class="form_blk">
                                                            <input type="text" name="" id="" class="text_box"
                                                                placeholder="eg John Wick">
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-6">
                                                        <h6>Date<sup>*</sup></h6>
                                                        <div class="form_blk">
                                                            <input type="text" name="" id="" class="text_box datepicker"
                                                                placeholder="eg 01-12-2022">
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr>
                                                <p>I acknowledge receiving delivery of the vehicle as described above.
                                                </p>
                                                <div class="form_row row">
                                                    <div class="col-xs-12">
                                                        <h6>Signed <small>(by customer)</small><sup>*</sup></h6>
                                                        <div class="form_blk">
                                                            <input type="text" name="" id="" class="text_box"
                                                                placeholder="eg John Wick">
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-6">
                                                        <h6>Print Name<sup>*</sup></h6>
                                                        <div class="form_blk">
                                                            <input type="text" name="" id="" class="text_box"
                                                                placeholder="eg John Wick">
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-6">
                                                        <h6>Date<sup>*</sup></h6>
                                                        <div class="form_blk">
                                                            <input type="text" name="" id="" class="text_box datepicker"
                                                                placeholder="eg 01-12-2022">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="btn_blk form_btn text-right">
                                                <button type="button" class="site_btn long light prev_btn"><img
                                                        src="{{ asset('assets/images/arrow-left-sm.svg')}}" alt="">
                                                    Back</button>
                                                <button type="submit" class="site_btn long next_btn">Submit</button>
                                            </div>
                                        </fieldset>
                                    </form>
                                </div> --}}

                                {{-- ______________________tab <Inspection> end_______________________________--- --}}




                                    {{-- ______________________tab <Tracking>
                                        start_______________________________-----}}

                                        {{-- <div id="Tracking" class="tab-pane fade">
                                            <div class="top_head">
                                                <h4>Delivery Tracking</h4>
                                            </div>
                                            <div class="blk">
                                                <ul class="track_lst">
                                                    <li class="done">
                                                        <div class="icon"></div>
                                                        <span>Processing</span>
                                                    </li>
                                                    <li class="done">
                                                        <div class="icon"></div>
                                                        <span>In Progress</span>
                                                    </li>
                                                    <li>
                                                        <div class="icon"></div>
                                                        <span>Transit</span>
                                                    </li>
                                                    <li>
                                                        <div class="icon"></div>
                                                        <span>Delivered</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div> --}}

                                        {{-- ______________________tab <Tracking> end_______________________________---
                                            --}}


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

@endpush