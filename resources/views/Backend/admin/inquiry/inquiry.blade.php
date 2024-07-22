@extends('Backend.includes.common-template')
@push('styles')

<style>
    .validation-failed {
        border: 1px solid red;
    }

    .error-message {
        color: red;
        font-size: 14px;
        margin-top: 10px;
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
            <li>Enquiries</li>
        </ul>
        <ul class="tab_list">
            <li class="active"><a href="#requests" data-toggle="tab">Enquiries Requests</a></li>
            <li><a href="#replied" data-toggle="tab">Replied Requests</a></li>

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

        {{-- edit inquiry popup --}}
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
                                            <h5 class="color">Reply Inquiry</h5>
                                            <div class="form_row row">
                                                <input type="hidden" name="edit_id" id="edit_id">

                                                <div class="col-xs-6">
                                                    <div class="form_blk">
                                                        <h6>Email<sup>*</sup></h6>
                                                        <input type="email" name="inquiry_email_edit"
                                                            id="inquiry_email_edit" class="text_box" maxlength="50"
                                                            readonly>
                                                        <small class="error-message"
                                                            id="inquiry_email_edit_error"></small>
                                                    </div>
                                                </div>
                                                <div class="col-xs-6">
                                                    <div class="form_blk">
                                                        <h6>Buyer/Tenant/Agent<sup>*</sup></h6>
                                                        <input type="text" name="inquiry_agent_edit"
                                                            id="inquiry_agent_edit" class="text_box" maxlength="15"
                                                            readonly>
                                                        <small class="error-message"
                                                            id="inquiry_agent_edit_error"></small>
                                                    </div>
                                                </div>
                                                <div class="col-xs-6">
                                                    <div class="form_blk">
                                                        <h6>Name<sup>*</sup></h6>
                                                        <input type="text" name="inquiry_name_edit"
                                                            id="inquiry_name_edit" class="text_box" maxlength="15"
                                                            readonly>
                                                        <small class="error-message"
                                                            id="inquiry_name_edit_error"></small>
                                                    </div>
                                                </div>
                                                <div class="col-xs-6">
                                                    <div class="form_blk">
                                                        <h6>Contact Number<sup>*</sup></h6>
                                                        <input type="number" name="inquiry_contact_number_edit"
                                                            id="inquiry_contact_number_edit" class="text_box"
                                                            maxlength="15" readonly>
                                                        <small class="error-message"
                                                            id="inquiry_contact_number_edit_error"></small>
                                                    </div>
                                                </div>
                                                <div class="col-xs-12">
                                                    <div class="form_blk">
                                                        <h6>Comment<sup>*</sup></h6>
                                                        <small id="inquiry_description_edit_created_at"><sup>Created
                                                                at</sup></small>
                                                        <textarea name="inquiry_description_edit"
                                                            id="inquiry_description_edit" class="text_box"
                                                            readonly></textarea>
                                                        <small class="error-message"
                                                            id="inquiry_description_edit_error"></small>
                                                    </div>
                                                </div>
                                                <div class="col-xs-12">
                                                    <div class="form_blk">
                                                        <h6>Reply<sup>*</sup></h6>
                                                        <textarea required name="inquiry_reply_edit"
                                                            id="inquiry_reply_edit" class="text_box" maxlength="300"
                                                            placeholder="Reply should not exceed more than 300 words"></textarea>
                                                        <small class="error-message"
                                                            id="inquiry_reply_edit_error"></small>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="btn_blk form_btn text-center">
                                                <button type="submit" class="site_btn long edit_inquiry_btn"
                                                    id="edit_inquiry_btn">Send</button>
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



        {{-- edit replied inquiry popup --}}
        <div class="popup lg" data-popup="edit-replied-data-popup" id="edit-replied-data-popup">
            <div class="table_dv">
                <div class="table_cell">
                    <div class="contain">
                        <div class="_inner editor_blk">
                            <button type="button" class="x_btn" id="close_update_modal_default_btn"></button>
                            <div id="Inspection" class="tab-pane fade active in">

                                <form method="POST" id="edit_replied_inquiry_form"
                                    action="{{ route('admin.inquiry.update') }}">
                                    <input type="hidden" name="property_id_edit" id="property_id_edit">
                                    @csrf
                                    <fieldset>
                                        <div class="blk">
                                            <h5 class="color">Reply Inquiry</h5>
                                            <div class="form_row row">
                                                <input type="hidden" name="edit_id" id="edit_replied_id">

                                                <div class="col-xs-6">
                                                    <div class="form_blk">
                                                        <h6>Email<sup>*</sup></h6>
                                                        <input type="email" name="inquiry_email_edit"
                                                            id="inquiry_replied_email_edit" class="text_box"
                                                            maxlength="50" readonly>
                                                        <small class="error-message"
                                                            id="inquiry_replied_email_edit_error"></small>
                                                    </div>
                                                </div>
                                                <div class="col-xs-6">
                                                    <div class="form_blk">
                                                        <h6>Buyer/Tenant/Agent<sup>*</sup></h6>
                                                        <input type="text" name="inquiry_agent_edit"
                                                            id="inquiry_replied_agent_edit" class="text_box"
                                                            maxlength="15" readonly>
                                                        <small class="error-message"
                                                            id="inquiry_replied_agent_edit_error"></small>
                                                    </div>
                                                </div>
                                                <div class="col-xs-6">
                                                    <div class="form_blk">
                                                        <h6>Name<sup>*</sup></h6>
                                                        <input type="text" name="inquiry_replied_name_edit"
                                                            id="inquiry_replied_name_edit" class="text_box"
                                                            maxlength="15" readonly>
                                                        <small class="error-message"
                                                            id="inquiry_replied_name_edit_error"></small>
                                                    </div>
                                                </div>
                                                <div class="col-xs-6">
                                                    <div class="form_blk">
                                                        <h6>Contact Number<sup>*</sup></h6>
                                                        <input type="number" name="inquiry_contact_number_edit"
                                                            id="inquiry_replied_contact_number_edit" class="text_box"
                                                            maxlength="15" readonly>
                                                        <small class="error-message"
                                                            id="inquiry_replied_contact_number_edit_error"></small>
                                                    </div>
                                                </div>
                                                <div class="col-xs-12">
                                                    <div class="form_blk">
                                                        <h6>Comment<sup>*</sup></h6>
                                                        <small id="inquiry_replied_reply_edit_created_at"><sup>Created
                                                                at</sup></small>
                                                        <textarea name="inquiry_description_edit"
                                                            id="inquiry_replied_description_edit" class="text_box"
                                                            readonly></textarea>
                                                        <small class="error-message"
                                                            id="inquiry_replied_description_edit_error"></small>
                                                    </div>
                                                </div>
                                                <div class="col-xs-12">
                                                    <div class="form_blk">
                                                        <h6>Reply<sup>*</sup></h6>
                                                        <small id="inquiry_replied_reply_edit_replied_at"><sup>Replied
                                                                at</sup></small>
                                                        <textarea required name="inquiry_reply_edit"
                                                            id="inquiry_replied_reply_edit" class="text_box"
                                                            maxlength="300"
                                                            placeholder="Reply should not exceed more than 300 words"></textarea>
                                                        <small class="error-message"
                                                            id="inquiry_replied_reply_edit_error"></small>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="btn_blk form_btn text-center">
                                                <button type="submit" class="site_btn long edit_replied_inquiry_btn"
                                                    id="edit_replied_inquiry_btn">Send</button>
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
                                <button type="button" class="btn bg-transparent rounded-pill"
                                    id="inquiry_request_delete_confirmed_btn" data-id=""><img
                                        src="{{asset('assets\images\check_1828640.png')}}" style="width:30px"></button>
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



        <!-- delete replied modal start  -->
        <div class="popup sm" data-popup="delete-replied-data-popup" id="delete_replied_modal">
            <div class="table_dv">
                <div class="table_cell">
                    <div class="contain">
                        <div class="_inner editor_blk">
                            <button type="button" class="hidden x_btn clode_replied_delete_modal_default_btn"></button>
                            <h3 class="text-center">Are You Sure to Delete?</h3>
                            <!-- <p>Are You Sure to Delete?</p> -->
                            <div class="text-center row">
                                <button type="button" class="btn bg-transparent rounded-pill"
                                    id="delete_replied_confirmed_btn" data-id=""><img
                                        src="{{asset('assets\images\check_1828640.png')}}" style="width:30px"></button>
                                <button type="button" class="btn bg-transparent rounded-pill"
                                    id="inquiry_replied_close_delete_modal_btn"><img
                                        src="{{asset('assets\images\close-button_11450177.png')}}"
                                        style="width:30px"></button>

                                <!-- <button type="button" class="btn btn-danger ">Delete</button> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- delete replied modal end  -->









        <div class="tab-content">
            {{-- ______________________tab <requests> start_______________________________--- --}}
                <div id="requests" class="tab-pane fade in active">
                    <div class="top_head">
                        <h4>Enquiries Requests</h4>
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
                                        <th>Name</th>
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

                </div>
                {{-- ______________________tab <requests> end_______________________________--- --}}




                    {{-- ______________________tab <replied> started_______________________________--- --}}
                        <div id="replied" class="tab-pane fade in ">
                            <div class="top_head">
                                <h4>Enquiries Replied</h4>
                                <div class="form_blk">
                                    <input type="text" name="" id="" class="text_box inquiry_search_box"
                                        placeholder="Search here">
                                    <button type="button"><img src="{{ asset('/images/icon-search.svg')}}"
                                            alt=""></button>
                                </div>
                            </div>
                            <div class="blk">
                                <div class="tbl_blk">
                                    <table id="property_replied_table" class="table table-responsive">
                                        <thead>
                                            <tr>
                                                <th width="10">#</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Description</th>
                                                <th>Created Date</th>
                                            </tr>
                                        </thead>
                                        <tbody id="inquiry_replied_table_body">


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


        </div>
    </div>
</section>




@endsection

@push('scripts')
<script>
    $(document).ready(function() {
        $('body').on('click', '#edit_replied_inquiry_btn', function() {
            $('#uiBlocker').show();
        });
        $('body').on('click', '#edit_inquiry_btn', function() {
            
            $('#uiBlocker').show();
        });
    });
</script>



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





{{-- ______________________________________table searching script end _______________________________ --}}

<script>
    function loadpropertyList() {
    let url = '/admin/inquiry/view/ajax';
    let type = 'GET';
    SendAjaxRequestToServer(type, url, '', '', loadManagerListResponse, '', '');
}

function loadManagerListResponse(response) {

        var inquiryListingTable = $('#inquiry_table_body');
        inquiryListingTable.empty();
       var inquiries = response.data;
      
    $.each(inquiries, function (index, inquiry) {

        var inquiryRow = `<tr class="inquiry_data_row">
                                <td class="nowrap grid-p-searchby">${index + 1}</td>
                              
                                <td class="grid-p-searchby">${inquiry.name}</td>
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
    
    const formattedDate = formatDate(inquiry.created_at);


$('#inquiry_email_edit').val(inquiry.email);
$('#inquiry_name_edit').val(inquiry?.name);
$('#inquiry_agent_edit').val(inquiry?.agent);
$('#inquiry_contact_number_edit').val(inquiry.phone);
$('#inquiry_description_edit').val(inquiry.description);
$('#inquiry_description_edit_created_at').prepend(formattedDate);
    // Add your edit logic here, e.g., populate a form with inquiry details for editing
});  
function formatDate(dateString) {
    const months = [
        "Jan", "Feb", "Mar", "Apr", "May", "Jun",
        "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"
    ];

    const date = new Date(dateString);
    const day = date.getDate().toString().padStart(2, '0');
    const month = months[date.getMonth()];
    const year = date.getFullYear();

    return `${day} ${month} ${year}`;
}


// _________________________________Delete 1 functions_______________________________
$(document).on('click', '.inquiry_delete_btn', function () {
    var del_id = $(this).attr('data-id');
    $('#inquiry_request_delete_confirmed_btn').attr('data-id', del_id);
});

$('#inquiry_close_delete_modal_btn').click(function () {
    $('.clode_delete_modal_default_btn').click();
    $('#inquiry_request_delete_confirmed_btn').attr('data-id', '');
});

$('#inquiry_request_delete_confirmed_btn').click(function () {
    var del_id = $(this).attr('data-id');
    let url = '/admin/inquiry/delete'; 
    let type = 'POST';
    let data = new FormData();
    data.append('del_id', del_id); 
    SendAjaxRequestToServer(type, url, data, '', deletinquiryResponse, '', '');

});


function deletinquiryResponse(response) {
    
    $('#uiBlocker').show();
    $('#inquiry_close_delete_modal_btn').click(); // Close the modal in all cases

    if (response.status == 200) {
        $('#uiBlocker').hide();
        toastr.success(response.message, '', { timeOut: 3000 });
        $('#delete_modal').hide();
        window.location.reload(); // Reload the page
    } else {
        $('#uiBlocker').hide();
        $('#delete_modal').hide();
        toastr.error(response.message, '', { timeOut: 3000 });
    }
}


</script>
{{-- _____________________________-loading inquiries 1 ended____________________ --}}






{{-- 2 --}}
{{------------------------------- loading replied inquiries -----------------------}}
<script>
    loadRepliedInquiries();
    function loadRepliedInquiries() {
    let url = '/admin/inquiry/view/replied/ajax';
    let type = 'GET';
    SendAjaxRequestToServer(type, url, '', '', loadRepliedInquiriesResponse, '', '');
}

function loadRepliedInquiriesResponse(response) {
        $('#uiBlocker').show()
        var inquiryListingTable = $('#inquiry_replied_table_body');
        inquiryListingTable.empty();
       var inquiries = response.data;
    $.each(inquiries, function (index, inquiry) {

        var inquiryRow = `<tr class="inquiry_data_row">
                                <td class="nowrap grid-p-searchby">${index + 1}</td>
                              
                                <td class="grid-p-searchby">${inquiry.name}</td>
                                <td class="grid-p-searchby">${inquiry.email}</td>
                                <td class="grid-p-searchby">${inquiry.description}</td>
                                <td class="nowrap grid-p-searchby">${formatDate(inquiry.created_at)}</td>
                                <td class="nowrap grid-p-searchby" data-center>
                                     <div class="act_btn">
                        <button type="button" class="edit pop_btn inquiry_replied_edit_btn" title="Edit" data-popup="edit-replied-data-popup" data-id="${inquiry.id}" data-inquiry='${JSON.stringify(inquiry)}'></button>
                        <button type="button" class="del pop_btn inquiry_replied_delete_btn" title="Delete" data-popup="delete-replied-data-popup" data-id="${inquiry.id}" data-inquiry='${JSON.stringify(inquiry)}'></button>
                    </div>
                                </td>
                            </tr>`;
            inquiryListingTable.append(inquiryRow); 


    });
}


// 2
$(document).on('click', '.inquiry_replied_edit_btn', function () {
    var id = $(this).attr('data-id');
    var inquiry = JSON.parse($(this).attr('data-inquiry'));
    const formattedDate = formatDate(inquiry.updated_at);
    const formattedDateCreatedAt = formatDate(inquiry.created_at);
    $('#edit_replied_id').val(inquiry.id)
    $('#inquiry_replied_email_edit').val(inquiry.email)
    $('#inquiry_replied_name_edit').val(inquiry?.name)
    $('#inquiry_replied_agent_edit').val(inquiry?.agent)
    $('#inquiry_replied_contact_number_edit').val(inquiry.phone)
    $('#inquiry_replied_description_edit').val(inquiry.description)
    $('#inquiry_replied_reply_edit').val(inquiry.reply)
    $('#inquiry_replied_reply_edit_replied_at').prepend(formattedDate)
    $('#inquiry_replied_reply_edit_created_at').prepend(formattedDateCreatedAt)


    // Add your edit logic here, e.g., populate a form with inquiry details for editing
});  



// _________________________________Delete 2 functions_______________________________
$(document).on('click', '.inquiry_replied_delete_btn', function () {
 
    var del_id = $(this).attr('data-id');
    $('#delete_replied_confirmed_btn').attr('data-id', del_id);
});

// 2
$('#inquiry_replied_close_delete_modal_btn').click(function () {
    $('.clode_replied_delete_modal_default_btn').click();
    $('#delete_replied_confirmed_btn').attr('data-id', '');
});

// 2
$('#delete_replied_confirmed_btn').click(function () {
    $('#uiBlocker').show();
    var del_id = $(this).attr('data-id');
    let url = '/admin/inquiry/delete';
    let type = 'POST';
    let data = new FormData();
    data.append('del_id', del_id);
    SendAjaxRequestToServer(type, url, data, '', deletinquiryRepliedResponse, '', '');

});

// 2
function deletinquiryRepliedResponse(response) {
    $('#inquiry_replied_close_delete_modal_btn').click(); // Close the modal in all cases

    if (response.status == 200) {
        toastr.success(response.message, '', { timeOut: 3000 });
        $('#delete_modal').hide();
        window.location.reload(); // Reload the page
    } else {
        $('#delete_modal').hide();
        toastr.error(response.message, '', { timeOut: 3000 });
    }
}


</script>
{{------------------------------- loading replied inquiries ended-----------------------}}




<script>
    $(document).ready(function() {
        $('#multiSelect').select2({
            placeholder: "Select features",
            allowClear: true
        });
    });
</script>

<script>
    $(document).ready(function() {
        $('#edit_inquiry_form').on('submit', function(e) {
            // Use plain JavaScript to set the display property
            $('#edit-data-popup').hide();
           $('#uiBlocker').show();
        });
        $('#edit_replied_inquiry_form').on('submit', function(e) {
            // Use plain JavaScript to set the display property
            $('#edit-replied-data-popup').hide();
           $('#uiBlocker').show();
        });

    });
</script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
    const formInquiry = document.getElementById('edit_inquiry_form');
    const replyInput = document.getElementById('inquiry_reply_edit');
    const sendButton = document.getElementById('edit_inquiry_btn');

    const replyError = document.getElementById('inquiry_reply_edit_error');

    const validateInquiryForm = () => {
        let isValid = true;

        if (replyInput.value.trim() === '') {
            replyError.textContent = 'Reply is required.';
            isValid = false;
        } else if (replyInput.value.length > 300) {
            replyError.textContent = 'Reply should not exceed 300 characters.';
            isValid = false;
        } else {
            replyError.textContent = '';
        }

        // Disable the button if the form is invalid
        sendButton.disabled = !isValid;

        return isValid;
    };

    // Attach input event listener for real-time validation
    replyInput.addEventListener('input', validateInquiryForm);

    // Attach submit event listener to the form
    formInquiry.addEventListener('submit', function(event) {
        if (!validateInquiryForm()) {
            event.preventDefault();
        }
    });

    // Initial validation to set the button state on page load
    validateInquiryForm();
});

</script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
    const formRepliedInquiry = document.getElementById('edit_replied_inquiry_form');
    const replyInput = document.getElementById('inquiry_replied_reply_edit');
    const sendButton = document.getElementById('edit_replied_inquiry_btn');
    const replyError2 = document.getElementById('inquiry_replied_reply_edit_error');

    // Debugging logs
    console.log('Initial value of reply input:', replyInput.value);

    const validateRepliedInquiryForm = () => {
        let isValid = true;

        // Debugging logs
        console.log('Value of reply input during validation:', replyInput.value);

        if (replyInput.value.trim() === '') {
            replyError2.textContent = 'Reply is required.';
            isValid = false;
        } else if (replyInput.value.length > 300) {
            replyError2.textContent = 'Reply should not exceed 300 characters.';
            isValid = false;
        } else {
            replyError2.textContent = '';
        }

        // Disable the button if the form is invalid
        sendButton.disabled = !isValid;

        return isValid;
    };

    // Attach input event listener for real-time validation
    replyInput.addEventListener('input', validateRepliedInquiryForm);

    // Attach submit event listener to the form
    formRepliedInquiry.addEventListener('submit', function(event) {
        if (!validateRepliedInquiryForm()) {
            event.preventDefault();
            console.log('Form submission prevented due to validation failure.');
        } else {
            console.log('Form submission allowed.');
        }
    });

    // Initial validation to set the button state on page load
   // validateRepliedInquiryForm();
});

</script>


@endpush