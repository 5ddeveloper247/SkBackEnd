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
            <li><a href="{{ url('admin/inquiry/view')}}">Dashboard</a></li>
            <li>Inquiries</li>
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

        {{-- edit property popup --}}
        <div class="popup lg" data-popup="edit-data-popup" id="edit-data-popup">
            <div class="table_dv">
                <div class="table_cell">
                    <div class="contain">
                        <div class="_inner editor_blk">
                            <button type="button" class="x_btn" id="close_update_modal_default_btn"></button>
                            <div id="Inspection" class="tab-pane fade active in">

                                <form method="POST" id="edit_inquiry_form" action="{{ route('admin.inquiry.update') }}">
                                    <input type="hidden" name="property_id_edit" id="property_id_edit">
                                    @csrf
                                    <fieldset>
                                        <div class="blk">
                                            <h5 class="color">Reply inquiry</h5>
                                            <div class="form_row row">
                                                <input type="hidden" name="edit_id" id="edit_id">

                                                <div class="col-xs-6">
                                                    <div class="form_blk">
                                                        <h6>Email<sup>*</sup></h6>
                                                        <input type="email" name="inquiry_email_edit"
                                                            id="inquiry_email_edit" class="text_box" maxlength="15" readonly>
                                                    </div>
                                                </div>

                                                <div class="col-xs-6">
                                                    <div class="form_blk">
                                                        <h6>Contact Number<sup>*</sup></h6>
                                                        <input type="number" name="inquiry_contact_number_edit"
                                                            id="inquiry_contact_number_edit" class="text_box"
                                                            placeholder="" maxlength="15" readonly>
                                                    </div>
                                                </div>

                                                <div class="col-xs-12">
                                                    <div class="form_blk">
                                                        <h6>Description <sup>*</sup></h6>
                                                        <textarea name="inquiry_description_edit"
                                                            id="inquiry_description_edit" class="text_box"
                                                            placeholder="" readonly></textarea>
                                                    </div>
                                                </div>

                                                <div class="col-xs-12">
                                                    <div class="form_blk">
                                                        <h6>Reply <sup>*</sup></h6>
                                                        <textarea required name="inquiry_reply_edit"
                                                            id="inquiry_reply_edit" class="text_box"
                                                            placeholder=""></textarea>
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="btn_blk form_btn text-center">

                                                <button type="submit" class="site_btn long edit_inquiry_btn"
                                                    id="edit_inquiry_btn">Update</button>

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
                                    id="inquiry_close_delete_modal_btn"><img
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
                        <h4>Inquiries</h4>
                        <div class="form_blk">
                            <input type="text" name="" id="" class="text_box inquiry_search_box"
                                placeholder="Search here">
                            <button type="button"><img src="{{ asset('/images/icon-search.svg')}}" alt=""></button>
                        </div>
                    </div>
                    <div class="blk">
                        <div class="tbl_blk">
                            <table id="property_table" class="table table-responsive">
                                <thead>
                                    <tr>
                                        <th width="10">#</th>
                                        <th>Email</th>
                                        <th>Description</th>
                                        <th>Created Date</th>
                                    </tr>
                                </thead>
                                <tbody id="inquiry_table_body">


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











{{-- ______________________________________table searching script _______________________________ --}}
<script>
    function loadpropertyList() {
    let url = '/admin/inquiry/view/ajax';
    let type = 'GET';
    SendAjaxRequestToServer(type, url, '', '', loadManagerListResponse, '', '');
}

function loadManagerListResponse(response) {

    var inquiryListingTable = $('#inquiry_table_body');
    inquiryListingTable.empty();
    console.log(response.data); 
    var inquiries = response.data;
       // var inactive_managers = response.managers_list.inactive_managers;
      // var active_managers = response.managers_list.active_managers; 
     // var totalManagers = managers.length;
     // $('#total_managers').text(totalManagers);
     // $('#inactive_managers').text(inactive_managers);
    // $('#active_managers').text(active_managers);
    $.each(inquiries, function (index, inquiry) {

        var inquiryRow = `<tr class="inquiry_data_row">
                                <td class="nowrap grid-p-searchby">${index + 1}</td>
                              
                                <td class="grid-p-searchby">${inquiry.email}</td>
                                <td class="grid-p-searchby">${inquiry.description}</td>
                                <td class="nowrap grid-p-searchby">${formatDate(inquiry.created_at)}</td>
                                <td class="nowrap grid-p-searchby" data-center>
                                     <div class="act_btn">
                        <button type="button" class="edit pop_btn inquiry_edit_btn" title="Edit" data-popup="edit-data-popup" data-id="${inquiry.id}" data-inquiry='${JSON.stringify(inquiry)}'></button>
                        <button type="button" class="del pop_btn inquiry_delete_btn" title="Delete" data-popup="delete-data-popup" data-id="${inquiry.id}" data-inquiry='${JSON.stringify(inquiry)}'></button>
                    </div>
                                </td>
                            </tr>`;
            inquiryListingTable.append(inquiryRow); 


    });
}

$(document).on('click', '.inquiry_edit_btn', function () {
    var id = $(this).attr('data-id');
    var inquiry = JSON.parse($(this).attr('data-inquiry'));

    $('#edit_id').val(inquiry.id)
    $('#inquiry_email_edit').val(inquiry.email)
    $('#inquiry_contact_number_edit').val(inquiry.phone)
    $('#inquiry_description_edit').val(inquiry.description)
    // Add your edit logic here, e.g., populate a form with inquiry details for editing
});  

function getpropertydataResponse(response) {
    console.log(response.propertyInfo)
    if (response.propertyInfo) {
        var property = response.propertyInfo;
        console.log(property.id)
        console.log("idddddddddd")

        // $('#uiBlocker').hide();
        $('#property_id_edit').val(property.id);
        $('#property_name_edit').val(property.pInfo_fName);
        $('#last_name_edit').val(property.pInfo_lName);
        $('#contact_number_edit').val(property.pInfo_phoneNumber);
        $('#email_edit').val(property.pInfo_email);
        $('#edit-data-popup').show();


    }
}


// _________________________________Delete functions_______________________________
$(document).on('click', '.inquiry_delete_btn', function () {
    var del_id = $(this).attr('data-id');
    console.log(del_id);
    $('#delete_confirmed_btn').attr('data-id', del_id);
});

$('#inquiry_close_delete_modal_btn').click(function () {
    $('.clode_delete_modal_default_btn').click();
    $('#delete_confirmed_btn').attr('data-id', '');
});

$('#delete_confirmed_btn').click(function () {
    var del_id = $(this).attr('data-id');
    let url = '/admin/inquiry/delete';
    let type = 'POST';
    let data = new FormData();
    data.append('del_id', del_id);
    SendAjaxRequestToServer(type, url, data, '', deletinquiryResponse, '', '');

});


function deletinquiryResponse(response) {
    $('#inquiry_close_delete_modal_btn').click(); // Close the modal in all cases

    if (response.status == 200) {
        toastr.success(response.message, '', { timeOut: 3000 });
        $('#uiBlocker').hide();
        $('#delete_modal').hide();
        window.location.reload(); // Reload the page
    } else {
        $('#delete_modal').hide();
        toastr.error(response.message, '', { timeOut: 3000 });
    }
}


</script>
{{-- _____________________________-loading inquiries ended____________________ --}}

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