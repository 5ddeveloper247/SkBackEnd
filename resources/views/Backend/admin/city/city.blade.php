@extends('Backend.includes.common-template')
@push('styles')

<style>
    .validation-failed {
        border: 1px solid red;
    }

    span.select2-selection.select2-selection--single {
        height: 4.8rem;
        margin-top: 9px;
        border-radius: 6px;
    }

    .select2-container--default .select2-selection--single .select2-selection__arrow {
        height: 26px;
        position: absolute;
        top: 7px;
        right: 1px;
        width: 20px;
    }

    .margin-top-location {
        margin-top: 35px !important
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
            <li><a href="{{ url('admin/inquiry/view')}}">Dashboard</a></li>
            <li>Cities</li>
        </ul>
        <ul class="tab_list">
            <li class="active"><a href="#City" data-toggle="tab">Cities</a></li>
            <li><a href="#Area" data-toggle="tab">Areas</a></li>
            <li><a href="#Location" data-toggle="tab">Locations</a></li>
            <li><a href="#Sector" data-toggle="tab">Sectors</a></li>

        </ul>






        {{-- ______________________tab listings end _______________________________--- --}}

        {{--___________________________________ edit property resonse message___________________________________ --}}
        @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif

        <!-- Display Error Message -->
        @if(session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
        @endif

        <!-- Display Validation Errors -->
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        {{--___________________________________ edit property resonse message___________________________________ --}}

        {{-- add city popup --}}
        <div class="popup lg" data-popup="add-city-data-popup" id="add-city-data-popup">
            <div class="table_dv">
                <div class="table_cell">
                    <div class="contain">
                        <div class="_inner editor_blk">
                            <button type="button" class="x_btn" id="close_update_modal_default_btn"></button>
                            <div id="Inspection" class="tab-pane fade active in">

                                <form method="POST" id="add_city" action="{{ route('admin.city.add') }}">

                                    @csrf
                                    <fieldset>
                                        <div class="blk">
                                            <h5 class="color">Add City</h5>
                                            <div class="form_row row">




                                                <div class="col-xs-12">
                                                    <div class="form_blk">
                                                        <h6>City Name<sup>*</sup></h6>
                                                        <input type="text" name="add_city_city" id="add_city_city"
                                                            class="text_box">
                                                    </div>
                                                </div>





                                            </div>

                                            <div class="btn_blk form_btn text-center">

                                                <button type="submit" class="site_btn long add_city_btn"
                                                    id="add_city_btn">Add City</button>

                                            </div>
                                        </div>
                                    </fieldset>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


         {{-- edit city popup --}}
         <div class="popup lg" data-popup="edit-city-data-popup" id="edit-city-data-popup">
            <div class="table_dv">
                <div class="table_cell">
                    <div class="contain">
                        <div class="_inner editor_blk">
                            <button type="button" class="x_btn" id="close_update_modal_default_btn"></button>
                            <div id="Inspection" class="tab-pane fade active in">

                                <form method="POST" id="edit_city_form" action="{{ route('admin.city.update') }}">

                                    @csrf
                                    <fieldset>
                                        <div class="blk">
                                            <h5 class="color">Edit City</h5>
                                            <div class="form_row row">


                                                <input type="hidden" name="edit_city_id" id="edit_city_id">

                                                <div class="col-xs-12">
                                                    <div class="form_blk">
                                                        <h6>City Name<sup>*</sup></h6>
                                                        <input type="text" name="edit_city_name" id="edit_city_name"
                                                            class="text_box">
                                                    </div>
                                                </div>





                                            </div>

                                            <div class="btn_blk form_btn text-center">

                                                <button type="submit" class="site_btn long add_city_btn"
                                                    id="add_city_btn">Update City</button>

                                            </div>
                                        </div>
                                    </fieldset>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- add area popup --}}
        <div class="popup lg" data-popup="add-area-data-popup" id="add-area-data-popup">
            <div class="table_dv">
                <div class="table_cell">
                    <div class="contain">
                        <div class="_inner editor_blk">
                            <button type="button" class="x_btn" id="close_update_modal_default_btn"></button>
                            <div id="Inspection" class="tab-pane fade active in">

                                <form method="POST" id="add_area_form" action="{{ route('admin.area.add') }}">
                                    @csrf
                                    <fieldset>
                                        <div class="blk">
                                            <h5 class="color">Add Area</h5>
                                            <div class="form_row row">
                                                <div class="col-xs-6">
                                                    <div class="form_blk">
                                                        <h6>City Name<sup>*</sup></h6>
                                                        <select type="text" name="add_area_city" id="add_area_city"
                                                            class="text_box">

                                                            @foreach ($cities as $city )
                                                            <option value="{{ $city->id }}">{{ $city->NAME }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-xs-6">
                                                    <div class="form_blk">
                                                        <h6>Area Name<sup>*</sup></h6>
                                                        <input type="text" name="add_area_area" id="add_area-area"
                                                            class="text_box">
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="btn_blk form_btn text-center">

                                                <button type="submit" class="site_btn long add_area_btn"
                                                    id="add_area_btn">Add Area</button>

                                            </div>
                                        </div>
                                    </fieldset>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- edit area popup --}}
        <div class="popup lg" data-popup="edit-area-data-popup" id="edit-area-data-popup">
            <div class="table_dv">
                <div class="table_cell">
                    <div class="contain">
                        <div class="_inner editor_blk">
                            <button type="button" class="x_btn" id="close_update_modal_default_btn"></button>
                            <div id="Inspection" class="tab-pane fade active in">

                                <form method="POST" id="edit_area_form" action="{{ route('admin.area.update') }}">
                                    @csrf
                                    <fieldset>
                                        <div class="blk">
                                            <h5 class="color">Edit Area</h5>
                                            <div class="form_row row">
                                                <input type="hidden" name="edit_area_id" id="edit_area_id">
                                                <div class="col-xs-6">
                                                    <div class="form_blk">
                                                        <h6>City Name<sup>*</sup></h6>
                                                        <select type="text" name="edit_area_city" id="edit_area_city"
                                                            class="text_box">

                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-xs-6">
                                                    <div class="form_blk">
                                                        <h6>Area Name<sup>*</sup></h6>
                                                        <input type="text" name="edit_area_area" id="edit_area_area"
                                                            class="text_box">
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="btn_blk form_btn text-center">

                                                <button type="submit" class="site_btn long add_area_btn"
                                                    id="add_area_btn">Update Area</button>

                                            </div>
                                        </div>
                                    </fieldset>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        {{-- add location popup --}}
        <div class="popup lg" data-popup="add-location-data-popup" id="add-location-data-popup">
            <div class="table_dv">
                <div class="table_cell">
                    <div class="contain">
                        <div class="_inner editor_blk">
                            <button type="button" class="x_btn" id="close_update_modal_default_btn"></button>
                            <div id="Inspection" class="tab-pane fade active in">

                                <form method="POST" id="add_location_form" action="{{ route('admin.location.add') }}">
                                    @csrf
                                    <fieldset>
                                        <div class="blk">
                                            <h5 class="color">Add Location</h5>
                                            <div class="form_row row">

                                                <div class="col-xs-6">
                                                    <div class="form_blk">
                                                        <h6>City Name<sup>*</sup></h6>
                                                        <select type="text" name="add_location_city"
                                                            id="add_location_city" class="text_box">
                                                            <option value="">Select City</option>
                                                            @foreach ($cities as $city )
                                                            <option value="{{ $city->id }}">{{ $city->NAME }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-xs-6">
                                                    <div class="form_blk">
                                                        <h6>Area Name<sup>*</sup></h6>
                                                        <select type="text" name="add_location_area"
                                                            id="add_location_area" class="text_box">
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-xs-6 margin-top-location">
                                                    <div class="form_blk">
                                                        <h6>Location<sup>*</sup></h6>
                                                        <input type="text" name="add_location_location"
                                                            id="add_location_location" class="text_box">
                                                    </div>
                                                </div>


                                            </div>

                                            <div class="btn_blk form_btn text-center">

                                                <button type="submit" class="site_btn long add_location_btn"
                                                    id="add_location_btn">Add Location</button>

                                            </div>
                                        </div>
                                    </fieldset>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- edit location popup --}}
        <div class="popup lg" data-popup="edit-location-data-popup" id="edit-location-data-popup">
            <div class="table_dv">
                <div class="table_cell">
                    <div class="contain">
                        <div class="_inner editor_blk">
                            <button type="button" class="x_btn" id="close_update_modal_default_btn"></button>
                            <div id="Inspection" class="tab-pane fade active in">

                                <form method="POST" id="edit_location_form" action="{{ route('admin.location.update') }}">
                                    @csrf
                                    <fieldset>
                                        <div class="blk">
                                            <h5 class="color">Edit Location</h5>
                                            <div class="form_row row">
                                                <input type="hidden" name="edit_location_id" id="edit_location_id">
                                                <div class="col-xs-6">
                                                    <div class="form_blk">
                                                        <h6>City Name<sup>*</sup></h6>
                                                        <select type="text" name="edit_location_city"
                                                            id="edit_location_city" class="text_box">
                                                            
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-xs-6">
                                                    <div class="form_blk">
                                                        <h6>Area Name<sup>*</sup></h6>
                                                        <select type="text" name="edit_location_area"
                                                            id="edit_location_area" class="text_box">
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-xs-6 margin-top-location">
                                                    <div class="form_blk">
                                                        <h6>Location<sup>*</sup></h6>
                                                        <input type="text" name="edit_location_location"
                                                            id="edit_location_location" class="text_box">
                                                    </div>
                                                </div>


                                            </div>

                                            <div class="btn_blk form_btn text-center">

                                                <button type="submit" class="site_btn long add_location_btn"
                                                    id="add_location_btn">Update Location</button>

                                            </div>
                                        </div>
                                    </fieldset>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- add sector popup --}}
        <div class="popup lg" data-popup="add-sector-data-popup" id="add-sector-data-popup">
            <div class="table_dv">
                <div class="table_cell">
                    <div class="contain">
                        <div class="_inner editor_blk">
                            <button type="button" class="x_btn" id="close_update_modal_default_btn"></button>
                            <div id="Inspection" class="tab-pane fade active in">

                                <form method="POST" id="add_sector_form" action="{{ route('admin.sector.add') }}">
                                    <input type="hidden" name="property_id_edit" id="property_id_edit">
                                    @csrf
                                    <fieldset>
                                        <div class="blk">
                                            <h5 class="color">Add Sectors</h5>
                                            <div class="form_row row">

                                                <div class="col-xs-6">
                                                    <div class="form_blk">
                                                        <h6>City Name<sup>*</sup></h6>
                                                        <select type="text" name="add_sector_city" id="add_sector_city"
                                                            class="text_box">
                                                            <option value="">Select City</option>
                                                            @foreach ($cities as $city )
                                                            <option value="{{ $city->id }}">{{ $city->NAME }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-xs-6">
                                                    <div class="form_blk">
                                                        <h6>Area Name<sup>*</sup></h6>
                                                        <select type="text" name="add_sector_area" id="add_sector_area"
                                                            class="text_box">
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-xs-6 margin-top-location">
                                                    <div class="form_blk">
                                                        <h6>Area Location<sup>*</sup></h6>
                                                        <select type="text" name="add_sector_location"
                                                            id="add_sector_location" class="text_box">
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="col-xs-6 margin-top-location">
                                                    <div class="form_blk">
                                                        <h6> Sector<sup>*</sup></h6>
                                                        <input type="text" name="add_sector_sector"
                                                            id="add_sector_sector" class="text_box">
                                                    </div>
                                                </div>


                                            </div>

                                            <div class="btn_blk form_btn text-center margin-top-location">
                                                <button type="submit" class="site_btn long add_city_btn"
                                                    id="add_city_btn">Add City</button>

                                            </div>
                                        </div>
                                    </fieldset>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



          {{-- edit sector popup --}}
          <div class="popup lg" data-popup="edit-sector-data-popup" id="edit-sector-data-popup">
            <div class="table_dv">
                <div class="table_cell">
                    <div class="contain">
                        <div class="_inner editor_blk">
                            <button type="button" class="x_btn" id="close_update_modal_default_btn"></button>
                            <div id="Inspection" class="tab-pane fade active in">

                                <form method="POST" id="edit_sector_form" action="{{ route('admin.sector.update') }}">
                                    <input type="hidden" name="edit_sector_id" id="edit_sector_id">
                                    @csrf
                                    <fieldset>
                                        <div class="blk">
                                            <h5 class="color">Edit Sector</h5>
                                            <div class="form_row row">

                                                <div class="col-xs-6">
                                                    <div class="form_blk">
                                                        <h6>City Name<sup>*</sup></h6>
                                                        <select type="text" name="edit_sector_city" id="edit_sector_city"
                                                            class="text_box">
                                                            <option value="">Select City</option>
                                                            @foreach ($cities as $city )
                                                            <option value="{{ $city->id }}">{{ $city->NAME }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-xs-6">
                                                    <div class="form_blk">
                                                        <h6>Area Name<sup>*</sup></h6>
                                                        <select type="text" name="edit_sector_area" id="edit_sector_area"
                                                            class="text_box">
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-xs-6 margin-top-location">
                                                    <div class="form_blk">
                                                        <h6>Area Location<sup>*</sup></h6>
                                                        <select type="text" name="edit_sector_location"
                                                            id="edit_sector_location" class="text_box">
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="col-xs-6 margin-top-location">
                                                    <div class="form_blk">
                                                        <h6> Sector<sup>*</sup></h6>
                                                        <input type="text" name="edit_sector_sector"
                                                            id="edit_sector_sector" class="text_box">
                                                    </div>
                                                </div>


                                            </div>

                                            <div class="btn_blk form_btn text-center margin-top-location">
                                                <button type="submit" class="site_btn long add_city_btn"
                                                    id="update_sector_btn">Update Sector</button>

                                            </div>
                                        </div>
                                    </fieldset>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>




        <!-- delete city modal start  -->
        <div class="popup sm" data-popup="city-delete-data-popup" id="city_delete_modal">
            <div class="table_dv">
                <div class="table_cell">
                    <div class="contain">
                        <div class="_inner editor_blk">
                            <button type="button" class="hidden x_btn clode_delete_modal_default_btn"></button>
                            <h3 class="text-center">Are You Sure to Delete?</h3>
                            <!-- <p>Are You Sure to Delete?</p> -->
                            <div class="text-center row">
                                <button type="button" class="btn bg-transparent rounded-pill"
                                    id="city_delete_confirmed_btn" data-id=""><img
                                        src="{{asset('assets\images\check_1828640.png')}}" style="width:30px"></button>
                                <button type="button" class="btn bg-transparent rounded-pill"
                                    id="city_close_delete_modal_btn"><img
                                        src="{{asset('assets\images\close-button_11450177.png')}}"
                                        style="width:30px"></button>

                                <!-- <button type="button" class="btn btn-danger ">Delete</button> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- delete city modal end  -->




        <!-- delete area modal start  -->
        <div class="popup sm" data-popup="area-delete-data-popup" id="area_delete_modal">
            <div class="table_dv">
                <div class="table_cell">
                    <div class="contain">
                        <div class="_inner editor_blk">
                            <button type="button" class="hidden x_btn clode_delete_modal_default_btn_area"></button>
                            <h3 class="text-center">Are You Sure to Delete?</h3>
                            <!-- <p>Are You Sure to Delete?</p> -->
                            <div class="text-center row">
                                <button type="button" class="btn bg-transparent rounded-pill"
                                    id="area_delete_confirmed_btn_location" data-id=""><img
                                        src="{{asset('assets\images\check_1828640.png')}}" style="width:30px"></button>
                                <button type="button" class="btn bg-transparent rounded-pill"
                                    id="area_close_delete_modal_btn_area"><img
                                        src="{{asset('assets\images\close-button_11450177.png')}}"
                                        style="width:30px"></button>

                                <!-- <button type="button" class="btn btn-danger ">Delete</button> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- delete area modal end  -->



         <!-- delete location modal start  -->
         <div class="popup sm" data-popup="location-delete-data-popup" id="location_delete_modal">
            <div class="table_dv">
                <div class="table_cell">
                    <div class="contain">
                        <div class="_inner editor_blk">
                            <button type="button" class="hidden x_btn clode_delete_modal_default_btn_location"></button>
                            <h3 class="text-center">Are You Sure to Delete?</h3>
                            <!-- <p>Are You Sure to Delete?</p> -->
                            <div class="text-center row">
                                <button type="button" class="btn bg-transparent rounded-pill"
                                    id="location_delete_confirmed_btn" data-id=""><img
                                        src="{{asset('assets\images\check_1828640.png')}}" style="width:30px"></button>
                                <button type="button" class="btn bg-transparent rounded-pill"
                                    id="area_close_delete_modal_btn_location"><img
                                        src="{{asset('assets\images\close-button_11450177.png')}}"
                                        style="width:30px"></button>

                                <!-- <button type="button" class="btn btn-danger ">Delete</button> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- delete location modal end  -->


          <!-- delete sector modal start  -->
          <div class="popup sm" data-popup="sector-delete-data-popup" id="sector_delete_modal">
            <div class="table_dv">
                <div class="table_cell">
                    <div class="contain">
                        <div class="_inner editor_blk">
                            <button type="button" class="hidden x_btn clode_delete_modal_default_btn_sector"></button>
                            <h3 class="text-center">Are You Sure to Delete?</h3>
                            <!-- <p>Are You Sure to Delete?</p> -->
                            <div class="text-center row">
                                <button type="button" class="btn bg-transparent rounded-pill"
                                    id="sector_delete_confirmed_btn" data-id=""><img
                                        src="{{asset('assets\images\check_1828640.png')}}" style="width:30px"></button>
                                <button type="button" class="btn bg-transparent rounded-pill"
                                    id="area_close_delete_modal_btn_location_sector"><img
                                        src="{{asset('assets\images\close-button_11450177.png')}}"
                                        style="width:30px"></button>

                                <!-- <button type="button" class="btn btn-danger ">Delete</button> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- delete sector modal end  -->













        <div class="tab-content">
            {{-- ______________________tab <city> start_______________________________--- --}}
                <div id="City" class="tab-pane fade in active">
                    <div class="top_head">
                        <div class="card_blk" id="addCityBtn">
                            <div class="icon"><img src="{{ asset('/images/icon-plus.svg') }}" alt="">
                            </div>
                            <strong>Add City</strong>
                            <a type="button"></a>
                        </div>

                        <div class="form_blk">
                            <input type="text" name="" id="" class="text_box city_search_box" placeholder="Search here">
                            <button type="button"><img src="{{ asset('/images/icon-search.svg')}}" alt=""></button>
                        </div>
                    </div>
                    <div class="blk">
                        <div class="top-head">

                        </div>
                        <div class="tbl_blk">
                            <table id="city_table" class="table table-responsive">
                                <thead>
                                    <tr>
                                        <th width="10">#</th>
                                        <th>Name</th>

                                    </tr>
                                </thead>
                                <tbody id="city_table_body">
                                    @foreach ($cities as $city )
                                    <tr>
                                        <td class="nowrap">
                                            {{ $city->id }}
                                        </td>
                                        <td>
                                            {{ $city->NAME }}
                                        </td>
                                        <td class="nowrap" data-center>
                                            <div class="act_btn">
                                                <button type="button" class="edit pop_btn city_edit_btn" title="Edit"
                                                     data-id="{{ $city->id }}"
                                                    data-city='{{ $city }}'></button>
                                                <button type="button" class="del pop_btn city_delete_btn" title="Delete"
                                                    data-popup="city-delete-data-popup" data-id="{{ $city->id }}"
                                                    data-city='{{ $city }}'></button>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
                {{-- ______________________tab <city> end_______________________________--- --}}

                    {{-- ______________________tab <area> started_______________________________--- --}}
                    <div id="Area" class="tab-pane fade in ">
                        <div class="top_head">
                            <div class="card_blk" id="addAreaBtn">
                                <div class="icon"><img src="{{ asset('/images/icon-plus.svg') }}" alt="">
                                </div>
                                <strong>Add Area</strong>
                                <a type="button"></a>
                            </div>

                            <div class="form_blk">
                                <input type="text" name="" id="" class="text_box area_search_box"
                                    placeholder="Search here">
                                <button type="button"><img src="{{ asset('/images/icon-search.svg')}}" alt=""></button>
                            </div>
                        </div>
                        <div class="blk">
                            <div class="tbl_blk">
                                <table id="area_location_table" class="table table-responsive">
                                    <thead>
                                        <tr>
                                            <th width="10">#</th>
                                            <th>Area</th>
                                            <th>City</th>

                                        </tr>
                                    </thead>
                                    <tbody id="area_table_body">
                                        @foreach ($areas as $area )
                                        <tr>
                                            <td class="nowrap">
                                                {{ $area->id }}
                                            </td>
                                            <td>
                                                {{ $area->NAME }}
                                            </td>
                                            <td>
                                                {{ $area->city ? $area->city->NAME : 'No city assigned' }}
                                            </td>
                                            <td class="nowrap" data-center>
                                                <div class="act_btn">
                                                    <button type="button" class="edit pop_btn area_edit_btn"
                                                        title="Edit"
                                                        data-id="{{ $area->id }}" data-area='{{ $area }}'></button>
                                                    <button type="button" class="del pop_btn area_delete_btn"
                                                        title="Delete"
                                                        data-id="{{ $area->id }}" data-area='{{ $area }}'></button>
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    {{-- ______________________tab <area> end_______________________________--- --}}


                    {{-- ______________________tab <location> started_______________________________--- --}}
                        <div id="Location" class="tab-pane fade in ">
                            <div class="top_head">

                                <div class="card_blk" id="addLocationBtn">
                                    <div class="icon"><img src="{{ asset('/images/icon-plus.svg') }}" alt="">
                                    </div>
                                    <strong>Add Location</strong>
                                    <a type="button"></a>
                                </div>
                                <div class="form_blk">
                                    <input type="text" name="" id="" class="text_box location_search_box"
                                        placeholder="Search here">
                                    <button type="button"><img src="{{ asset('/images/icon-search.svg')}}"
                                            alt=""></button>
                                </div>
                            </div>
                            <div class="blk">
                                <div class="tbl_blk">
                                    <table id="property_location_table" class="table table-responsive">
                                        <thead>
                                            <tr>
                                                <th width="10">#</th>
                                                <th>Location Name</th>
                                                <th>Area Name</th>
                                                <th>Area City</th>

                                            </tr>
                                        </thead>
                                        <tbody id="location_table_body">

                                            @foreach ($locations as $location )
                                            <tr>
                                                <td class="nowrap">
                                                    {{ $location->id }}
                                                </td>
                                                <td>
                                                    {{ $location->NAME }}
                                                </td>
                                                <td>
                                                    {{ $location->area ? $location->area->NAME : 'No area assigned' }}
                                                </td>
                                                <td>
                                                    {{ $location->area && $location->area->city ?
                                                    $location->area->city->NAME : 'No city assigned' }}
                                                </td>
                                                <td class="nowrap" data-center>
                                                    <div class="act_btn">
                                                        <button type="button" class="edit pop_btn location_edit_btn"
                                                            title="Edit"
                                                            data-id="{{ $location->id }}"
                                                            data-location='{{ $location }}'></button>
                                                        <button type="button" class="del pop_btn location_delete_btn"
                                                            title="Delete" data-popup="location-delete-data-popup"
                                                            data-id="{{ $location->id }}"
                                                            data-location='{{ $location }}'></button>
                                                    </div>
                                                </td>
                                            </tr>
                                            @endforeach

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        {{-- ______________________tab <location> end_______________________________--- --}}




                            {{-- ______________________tab <sector> started_______________________________--- --}}
                                <div id="Sector" class="tab-pane fade in ">
                                    <div class="top_head">
                                        <div class="card_blk" id="addSectorBtn">
                                            <div class="icon"><img src="{{ asset('/images/icon-plus.svg') }}" alt="">
                                            </div>
                                            <strong>Add Sector</strong>
                                            <a type="button"></a>
                                        </div>
                                        <div class="form_blk">
                                            <input type="text" name="" id="" class="text_box sector_search_box"
                                                placeholder="Search here">
                                            <button type="button"><img src="{{ asset('/images/icon-search.svg')}}"
                                                    alt=""></button>
                                        </div>
                                    </div>
                                    <div class="blk">
                                        <div class="tbl_blk">
                                            <table id="sector_location_table" class="table table-responsive">
                                                <thead>
                                                    <tr>
                                                        <th width="10">#</th>
                                                        <th>Sector Name</th>
                                                        <th>City Name</th>
                                                        <th>Area Name</th>
                                                        <th>Location Name</th>

                                                    </tr>
                                                </thead>
                                                <tbody id="area_table_body">
                                                    @foreach ($sectors as $sector)
                                                    <tr>
                                                        <td class="nowrap">{{ $sector->id }}</td>
                                                        <td>{{ $sector->NAME }}</td>
                                                        <td>
                                                            {{ $sector->location && $sector->location->area &&
                                                            $sector->location->area->city ?
                                                            $sector->location->area->city->NAME : 'No city assigned' }}
                                                        </td>
                                                        <td>
                                                            {{ $sector->location && $sector->location->area &&
                                                            $sector->location->area ?
                                                            $sector->location->area->NAME : 'No area assigned' }}
                                                        </td>
                                                        <td>
                                                            {{ $sector->location && $sector->location &&
                                                            $sector->location?
                                                            $sector->location->NAME : 'No location assigned' }}
                                                        </td>
                                                        <td class="nowrap" data-center>
                                                            <div class="act_btn">
                                                                <button type="button"
                                                                    class="edit pop_btn sector_edit_btn" title="Edit"
                                                                    
                                                                    data-id="{{ $sector->id }}"
                                                                    data-sector='{{ $sector }}'></button>
                                                                <button type="button"
                                                                    class="del pop_btn sector_delete_btn" title="Delete"
                                                                    data-popup="sector-delete-data-popup"
                                                                    data-id="{{ $sector->id }}"
                                                                    data-sector='{{ $sector }}'></button>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                {{-- ______________________tab <sector> end_______________________________--- --}}

        </div>
    </div>
</section>




@endsection

@push('scripts')

<script>
    $('.inquiry_search_box').on("keyup", function (e) {
  
  var tr = $('.inquiry_data_row');
  if ($(this).val().length >= 1) {//character limit in search box.
      var noElem = true;
      var val = $.trim(this.value).toLowerCase();
      el = tr.filter(function () {
          return $(this).find('.grid-p-searchby').text().toLowerCase().match(val);
      });
      if (el.length >= 1) {
          noElem = false;
      }
      tr.not(el).hide();
      el.fadeIn().show();
  } else {
      tr.fadeIn().show();
  }
});
</script>



{{-- ___________city s_________ --}}

<script>
    $('#addCityBtn').click(function(){
        $('#add-city-data-popup').show();
    })
</script>
{{-- ___________city e_________ --}}

{{-- ___________area s_________ --}}
<script>
    $('#addAreaBtn').click(function(){
        $('#add-area-data-popup').show();
    })
</script>


{{-- select 2 --}}
<script>
    $(document).ready(function() {
        $('#add_area_city').select2({
            placeholder: 'Select City',
            width: '100%' // Ensure the select takes the full width
        });
    });
</script>
{{-- ___________area e_________ --}}




{{-- ___________location s_________ --}}
<script>
    $('#addLocationBtn').click(function(){
        $('#add-location-data-popup').show();
    })
</script>



{{-- select 2 --}}
<script>
    $(document).ready(function() {
        $('#add_location_city').select2({
            placeholder: 'Select City',
            width: '100%' // Ensure the select takes the full width
        });
    });

    $(document).ready(function() {
        $('#add_location_area').select2({
            placeholder: 'Select Area',
            width: '100%' // Ensure the select takes the full width
        });
    });
</script>




{{-- onchange --}}

<script>
    $('#add_location_city').change(()=>{
        populateAreaLovx();
});

function populateAreaLovx() {
        let url = '/admin/city/populateAreaLov';
        let type = 'POST';
        let data = new FormData();
        data.append('city', $("#add_location_city").val());
        SendAjaxRequestToServer(type, url, data, '', populateAreaLovResponsex, '', '');
    }
    
    function populateAreaLovResponsex(response){
        var area = response.areas;
        var option = '<option value="">Choose Area</option>';

        if(area.length > 0){
            $.each(area, function (index, value) {
                option += `<option value="${value.id}">${value.NAME}</option>`;
            });
        }
         $("#add_location_area").html(option);

        // $("#address_sector_edit").val('');
    }



</script>

{{-- delte --}}
<script>
    $(document).ready(function() {
        $('.city_delete_btn').click(function() {
            const id = $(this).attr('data-id');
            $('#city_delete_confirmed_btn').attr('data-id', id);
            
        });
    });

    
    $('#city_delete_confirmed_btn').click(function() {
    const id = $(this).attr('data-id');
    let url = '/admin/city/delete';
    let type = 'POST';
    let data = new FormData();
    data.append('city_id', id);

    SendAjaxRequestToServer(type, url, data, '', deleteCityResponse, '', '');
});

function deleteCityResponse(response) {
    if (response.success) {
        $('#city_delete_modal').modal('hide');
        toastr.success("Deleted Successfully", '', { timeOut: 3000 });
        location.reload();
    } else {
        $('#city_delete_modal').modal('hide');
        toastr.error(response.message || "Something went wrong", '', { timeOut: 3000 });
    }
}


// close delte popup confirmation
$('#city_close_delete_modal_btn').click(function(){
    $('#city_delete_modal').css('display', 'none');
    $('#city_delete_confirmed_btn').attr('data-id', '');
})
</script>



{{-- ___________location e_________ --}}








{{-- ___________sector s_________ --}}
<script>
    $('#addSectorBtn').click(function(){
        
        $('#add-sector-data-popup').show();
    })
</script>
{{-- select 2 --}}
<script>
    $(document).ready(function() {
        $('#add_sector_city').select2({
            placeholder: 'Select City',
            width: '100%' // Ensure the select takes the full width
        });
    });

    $(document).ready(function() {
        $('#add_sector_area').select2({
            placeholder: 'Select Area',
            width: '100%' // Ensure the select takes the full width
        });
    });
    $(document).ready(function() {
        $('#add_sector_location').select2({
            placeholder: 'Select Location',
            width: '100%' // Ensure the select takes the full width
        });
    });
   
</script>

{{-- onchange --}}

<script>
    $('#add_sector_city').change(()=>{
        populateAreaLovSectorArea();
});

function populateAreaLovSectorArea() {
        let url = '/admin/city/populateAreaLov';
        let type = 'POST';
        let data = new FormData();
        data.append('city', $("#add_sector_city").val());
        SendAjaxRequestToServer(type, url, data, '', populateAreaLovResponseSectorArea, '', '');
    }
    
    function populateAreaLovResponseSectorArea(response){
        var area = response.areas;
        var option = '<option value="">Choose Area</option>';

        if(area.length > 0){
            $.each(area, function (index, value) {
                option += `<option value="${value.id}">${value.NAME}</option>`;
            });
        }
         $("#add_sector_area").html(option);

        // $("#address_sector_edit").val('');
    }


    // 2
    $('#add_sector_area').change(()=>{
        populateSectorLovLocation();
});

function populateSectorLovLocation() {
        let url = '/admin/city/populateLocationLov';
        let type = 'POST';
        let data = new FormData();
        data.append('area', $("#add_sector_area").val());
        SendAjaxRequestToServer(type, url, data, '', populateSectorLovLocationResponse, '', '');
    }
    
    function populateSectorLovLocationResponse(response){
        var location = response.locations;
        var option = '<option value="">Choose Area</option>';

        if(location.length > 0){
            $.each(location, function (index, value) {
                option += `<option value="${value.id}">${value.NAME}</option>`;
            });
        }
         $("#add_sector_location").html(option);

        // $("#address_sector_edit").val('');
    }

</script>

{{-- ___________sector e_________ --}}





<script>
    $(document).ready(function() {
        $('#multiSelect').select2({
            placeholder: "Select features",
            allowClear: true
        });
    });
</script>


{{-- edit city start --}}
<script>
    $(document).on('click', '.city_edit_btn', function() {
        var city_id = $(this).attr('data-id');
        let url = '/admin/city/getcitydetails';
        let type = 'POST';
        let data = new FormData();
        data.append('city_id', city_id);
        SendAjaxRequestToServer(type, url, data, '', getcitydetailsResponse, '', '');
    });

    function getcitydetailsResponse(response){
        if(response.success){
            var city_name =  response.data.NAME;
            var city_id =  response.data.id;
            $('#edit_city_name').val(city_name);
            $('#edit_city_id').val(city_id);
            $('#edit-city-data-popup').show();
        }
        else{
            toastr.error(response.message || "Something went wrong", '', { timeOut: 3000 });
        }
    }

    $('#edit_city_form').submit(function(e){
        e.preventDefault();
        let form = document.getElementById('edit_city_form');
        let data = new FormData(form);
        let url = '/admin/city/update';
        let type = 'POST';
        SendAjaxRequestToServer(type, url, data, '', updatecityResponse, '', '');

    });

    function updatecityResponse(response){
        if(response.success){
        toastr.success(response.message || "City updated successfully", '', { timeOut: 3000 });
        window.location.reload();
        }
        else{
        toastr.error(response.message || "Something went wrong", '', { timeOut: 3000 });
        $('#edit-city-data-popup').hide();
        $('#edit_city_form')[0].reset();
        }
    }

</script>
{{-- edit city end --}}


{{-- edit area start  --}}
<script>
     $(document).on('click', '.area_edit_btn', function() {
        var area_id = $(this).attr('data-id');
        let url = '/admin/area/getareadetails';
        let type = 'POST';
        let data = new FormData();
        data.append('area_id', area_id);
        SendAjaxRequestToServer(type, url, data, '', getareadetailsResponse, '', '');
    });

    function getareadetailsResponse(response){
        if(response.success){
            // var city_name =  response.data.NAME;
            // var area_id =  response.data.id;
            // $('#edit_city_name').val(city_name);
            // $('#edit_area_id').val(area_id);
            var area = response.data.area;
            var cities = response.data.cities;
            var cities_html = [];
            cities.forEach(city => {
            cities_html += `<option ${city.id == area.CITY_ID ? 'selected' : ''} value="${city.id}"> ${city.NAME} </option>`;
             });

            $('#edit_area_city').html(cities_html);
            $('#edit_area_id').val(area.id);
            $('#edit_area_area').val(area.NAME);
            $('#edit-area-data-popup').show();
        }
        else{
            toastr.error(response.message || "Something went wrong", '', { timeOut: 3000 });
        }
    }


    $('#edit_area_form').submit(function(e){
        e.preventDefault();
        let form = document.getElementById('edit_area_form');
        let data = new FormData(form);
        let url = '/admin/area/update';
        let type = 'POST';
        SendAjaxRequestToServer(type, url, data, '', updateareaResponse, '', '');

    });

    function updateareaResponse(response){
        if(response.success){
        toastr.success(response.message || "Area updated successfully", '', { timeOut: 3000 });
        window.location.reload();
        }
        else{
        toastr.error(response.message || "Something went wrong", '', { timeOut: 3000 });
        $('#edit-area-data-popup').hide();
        $('#edit_area_form')[0].reset();

        }
    }
</script>
{{-- edit area end  --}}

{{-- delete area starts  --}}
<script>
    $('.area_delete_btn').click(function(){
        var area_id = $(this).attr('data-id');
        $('#area_delete_confirmed_btn_location').attr('data-id', area_id);
        $('#area_delete_modal').show();

    });

    $('#area_delete_confirmed_btn_location').click(function(){
        var area_id = $(this).attr('data-id');
        let url = '/admin/area/delete';
        let type = 'POST';
        let data = new FormData();
        data.append('area_id', area_id);
        SendAjaxRequestToServer(type, url, data, '', deleteareaResponse, '', '');
    });

    function deleteareaResponse(response){
        if(response.success){
        toastr.success(response.message || "Area deleted successfully", '', { timeOut: 3000 });
        window.location.reload();
        }
        else{
            toastr.error(response.message, '', { timeOut: 3000 });
        }
    }

    $('#area_close_delete_modal_btn_area').click(function(){
        $('.clode_delete_modal_default_btn_area').click();
    })
</script>
{{-- delete area ends  --}}

{{-- edit location start  --}}
<script>
     $(document).on('click', '.location_edit_btn', function() {
        $('#edit_location_form')[0].reset();
        var location_id = $(this).attr('data-id');
        let url = '/admin/location/getlocationdetails';
        let type = 'POST';
        let data = new FormData();
        data.append('location_id', location_id);
        SendAjaxRequestToServer(type, url, data, '', getlocationdetailsResponse, '', '');
    });

    function getlocationdetailsResponse(response){
        if(response.success){
            
            var location = response.data.location;
            var areas = response.data.areas;
            var cities = response.data.cities;
            var areas_html = [];
            var cities_html = [];
            var location_city = location.area.city;
            cities.forEach(city => {
            cities_html += `<option ${city.id == location_city.id ? 'selected' : ''} value="${city.id}"> ${city.NAME} </option>`;
             });
            areas.forEach(area => {
            areas_html += `<option ${area.id == location.AREA_ID ? 'selected' : ''} value="${area.id}"> ${area.NAME} </option>`;
             });

            $('#edit_location_city').html(cities_html);
            $('#edit_location_area').html(areas_html);
            $('#edit_location_id').val(location.id);
            $('#edit_location_location').val(location.NAME);
            $('#edit-location-data-popup').show();
        }
        else{
            toastr.error(response.message || "Something went wrong", '', { timeOut: 3000 });
        }
    }

    $('#edit_location_city').change(function(){
        var city = $(this).val();
        if(city !=''){
        let data = new FormData();
        let url = '/admin/location/getcityareas';
        let type = 'POST';
        data.append('city_id', city);
        SendAjaxRequestToServer(type, url, data, '', getcityareas, '', '');
        }
    });

    function getcityareas(response){
        var areas = response.data;
        var areas_html = [];
            areas.forEach(area => {
            areas_html += `<option value="${area.id}"> ${area.NAME} </option>`;
             });

            $('#edit_location_area').html(areas_html);
    }


    $('#edit_location_form').submit(function(e){
        e.preventDefault();
        let form = document.getElementById('edit_location_form');
        let data = new FormData(form);
        let url = '/admin/location/update';
        let type = 'POST';
        SendAjaxRequestToServer(type, url, data, '', updatelocationResponse, '', '');

    });

    function updatelocationResponse(response){
        if(response.success){
        toastr.success(response.message || "Location updated successfully", '', { timeOut: 3000 });
        window.location.reload();
        }
        else{
        toastr.error(response.message, '', { timeOut: 3000 });
        // $('#edit-location-data-popup').hide();
        // $('#edit_location_form')[0].reset();

        }
    }
</script>
{{-- edit location end  --}}

{{-- delete location starts  --}}
<script>
    $('.location_delete_btn').click(function(){
        var area_id = $(this).attr('data-id');
        $('#location_delete_confirmed_btn').attr('data-id', area_id);
        $('#area_delete_modal').show();

    });

    $('#location_delete_confirmed_btn').click(function(){
        var location_id = $(this).attr('data-id');
        let url = '/admin/location/delete';
        let type = 'POST';
        let data = new FormData();
        data.append('location_id', location_id);
        SendAjaxRequestToServer(type, url, data, '', deletelocationResponse, '', '');
    });

    function deletelocationResponse(response){
        if(response.success){
        toastr.success(response.message, '', { timeOut: 3000 });
        window.location.reload();
        }
        else{
            toastr.error(response.message, '', { timeOut: 3000 });
        }
    }
    $('#area_close_delete_modal_btn_location').click(function(){
        $('.clode_delete_modal_default_btn_location').click();
    })
</script>
{{-- delete location ends  --}}



{{-- edit sector start  --}}
<script>
     $(document).on('click', '.sector_edit_btn', function() {
        $('#edit_sector_form')[0].reset();
        var sector_id = $(this).attr('data-id');
        let url = '/admin/sector/getsectordetails';
        let type = 'POST';
        let data = new FormData();
        data.append('sector_id', sector_id);
        SendAjaxRequestToServer(type, url, data, '', getsectordetailsResponse, '', '');
    });

    function getsectordetailsResponse(response){
        if(response.success){
            
            var sector = response.data.sector;
            var areas = response.data.areas;
            var cities = response.data.cities;
            var locations = response.data.locations;
            var areas_html = [];
            var cities_html = [];
            var location_html = [];
            areas.forEach(area => {
            areas_html += `<option ${area.id == sector.location.area.id ? 'selected' : ''} value="${area.id}"> ${area.NAME} </option>`;
             });
            cities_html+=`<option value="">Select City </option>`;
            cities.forEach(city => {
            cities_html += `<option ${city.id == sector.location.area.city.id ? 'selected' : ''}  value="${city.id}"> ${city.NAME} </option>`;
             });
             locations.forEach(location => {
                location_html+= `<option ${location.id == sector.LOCATION_ID ? 'selected' : ''} value="${location.id}" > ${location.NAME} </option>`;
             });


            $('#edit_sector_area').html(areas_html);
            $('#edit_sector_location').html(location_html);
            $('#edit_sector_city').html(cities_html);
            $('#edit_sector_id').val(sector.id);
            $('#edit_sector_sector').val(sector.NAME);
            $('#edit-sector-data-popup').show();
        }
        else{
            toastr.error(response.message || "Something went wrong", '', { timeOut: 3000 });
        }
    }

    $('#edit_sector_city').change(function(){
        var city = $(this).val();
        if(city !=''){
        let data = new FormData();
        let url = '/admin/location/getcityareas';
        let type = 'POST';
        data.append('city_id', city);
        SendAjaxRequestToServer(type, url, data, '', getcityareasResponse, '', '');
        }
    });

    function getcityareasResponse(response){
        var areas = response.data;
        var areas_html = [];
        areas_html+=`<option value="">Select Area </option>`;
            areas.forEach(area => {
            areas_html += `<option value="${area.id}"> ${area.NAME} </option>`;
             });

            $('#edit_sector_area').html(areas_html);
    }
    $('#edit_sector_area').change(function(){
        var area = $(this).val();
        if(area !=''){
        let data = new FormData();
        let url = '/admin/sector/getarealocations';
        let type = 'POST';
        data.append('area_id', area);
        SendAjaxRequestToServer(type, url, data, '', getarealocationsResponse, '', '');
        }
    });

    function getarealocationsResponse(response){
        $('#edit_sector_location').empty();
        var locations = response.data;
        var location_html = [];
        location_html+=`<option value="">Select Location </option>`;
        locations.forEach(location => {
            location_html += `<option value="${location.id}"> ${location.NAME} </option>`;
             });

            $('#edit_sector_location').html(location_html);
    }


    $('#edit_sector_form').submit(function(e){
        e.preventDefault();
        let form = document.getElementById('edit_sector_form');
        let data = new FormData(form);
        let url = '/admin/sector/update';
        let type = 'POST';
        SendAjaxRequestToServer(type, url, data, '', updatesectorResponse, '', '');

    });

    function updatesectorResponse(response){
        if(response.success){
        toastr.success(response.message || "Sector updated successfully", '', { timeOut: 3000 });
        window.location.reload();
        }
        else{
        toastr.error(response.message, '', { timeOut: 3000 });
        // $('#edit-location-data-popup').hide();
        // $('#edit_location_form')[0].reset();

        }
    }
</script>
{{-- edit location end  --}}

{{-- delete location starts  --}}
<script>
    $('.sector_delete_btn').click(function(){
        var sector_id = $(this).attr('data-id');
        $('#sector_delete_confirmed_btn').attr('data-id', sector_id);
        $('#sector_delete_modal').show();

    });

    $('#sector_delete_confirmed_btn').click(function(){
        var sector_id = $(this).attr('data-id');
        let url = '/admin/sector/delete';
        let type = 'POST';
        let data = new FormData();
        data.append('sector_id', sector_id);
        SendAjaxRequestToServer(type, url, data, '', deletesectorResponse, '', '');
    });

    function deletesectorResponse(response){
        if(response.success){
        toastr.success(response.message, '', { timeOut: 3000 });
        window.location.reload();
        }
        else{
            toastr.error(response.message, '', { timeOut: 3000 });
        }
    }
    $('#area_close_delete_modal_btn_location_sector').click(function(){
        $('.clode_delete_modal_default_btn_sector').click();
    })
</script>
{{-- delete location ends  --}}




@endpush