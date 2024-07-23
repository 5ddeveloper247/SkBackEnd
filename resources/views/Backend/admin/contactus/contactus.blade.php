@extends('Backend.includes.common-template')
@push('styles')

<style>
    .validation-failed {
        border: 1px solid red;
    }

    #contact_reply_edit_error {
        color: red;
        margin-top: 10px;
        margin-bottom: 10px;
    }

    .error-message {
        color: red;
        margin-top: 10px;
        margin-bottom: 10px;
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
            <li><a href="{{ url('admin/contact/view')}}">Dashboard</a></li>
            <li>contacts</li>
        </ul>

        <ul class="tab_list">
            <li class="active"><a href="#request" data-toggle="tab">Contact Requests</a></li>
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
        {{--___________________________________ edit contact resonse message___________________________________ --}}

        {{-- edit request contact popup --}}
        <div class="popup lg" data-popup="edit-data-popup" id="edit-data-popup">
            <div class="table_dv">
                <div class="table_cell">
                    <div class="contain">
                        <div class="_inner editor_blk">
                            <button type="button" class="x_btn" id="close_update_modal_default_btn"></button>
                            <div id="Inspection" class="tab-pane fade active in">

                                <form method="POST" id="edit_contact_form" action="{{ route('admin.contact.update') }}">
                                    <input type="hidden" name="property_id_edit" id="property_id_edit">
                                    @csrf
                                    <fieldset>
                                        <div class="blk">
                                            <h5 class="color">Reply Contact</h5>
                                            <div class="form_row row">
                                                <input type="hidden" name="edit_id" id="edit_id">

                                                <div class="col-xs-6">
                                                    <div class="form_blk">
                                                        <h6>Name<sup>*</sup></h6>
                                                        <input type="text" name="contact_name_edit"
                                                            id="contact_name_edit" class="text_box" maxlength="15"
                                                            readonly>
                                                        <small class="error-message"
                                                            id="contact_name_edit_error"></small>
                                                    </div>
                                                </div>
                                                <div class="col-xs-6">
                                                    <div class="form_blk">
                                                        <h6>Email<sup>*</sup></h6>
                                                        <input type="email" name="contact_email_edit"
                                                            id="contact_email_edit" class="text_box" maxlength="50"
                                                            readonly>
                                                        <small class="error-message"
                                                            id="contact_email_edit_error"></small>
                                                    </div>
                                                </div>

                                                <div class="col-xs-12">
                                                    <div class="form_blk">
                                                        <h6>Subject<sup>*</sup></h6>
                                                        <textarea name="contact_subject_edit" id="contact_subject_edit"
                                                            class="text_box" placeholder="" readonly></textarea>
                                                        <small class="error-message"
                                                            id="contact_subject_edit_error"></small>
                                                    </div>
                                                </div>
                                                <div class="col-xs-12">
                                                    <div class="form_blk">
                                                        <h6>Description<sup>*</sup></h6>
                                                        <small id="contact_description_edit_created_at"><sup>Created
                                                                at</sup></small>
                                                        <textarea name="contact_description_edit"
                                                            id="contact_description_edit" class="text_box"
                                                            placeholder="Description should not exceed more than 300 words"
                                                            readonly></textarea>
                                                        <small class="error-message"
                                                            id="contact_description_edit_error"></small>
                                                    </div>
                                                </div>

                                                <div class="col-xs-12">
                                                    <div class="form_blk">
                                                        <h6>Reply<sup>*</sup></h6>
                                                        <textarea required name="contact_reply_edit"
                                                            id="contact_reply_edit" class="text_box"
                                                            placeholder="Reply should not exceed more than 300 words"
                                                            maxlength="300"></textarea>
                                                        <small class="error-message"
                                                            id="contact_reply_edit_error"></small>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="btn_blk form_btn text-center">
                                                <button type="submit" class="site_btn long edit_contact_btn"
                                                    id="edit_contact_btn">Send</button>
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



        {{-- edit replied contact --}}
        <div class="popup lg" data-popup="edit-replied-data-popup" id="edit-replied-data-popup">
            <div class="table_dv">
                <div class="table_cell">
                    <div class="contain">
                        <div class="_inner editor_blk">
                            <button type="button" class="x_btn" id="close_replied_update_modal_default_btn"></button>
                            <div id="Inspection" class="tab-pane fade active in">

                                <form method="POST" id="edit_replied_contact_form"
                                    action="{{ route('admin.contact.update') }}">
                                    <input type="hidden" name="property_replied_id_edit" id="property_replied_id_edit">
                                    @csrf
                                    <fieldset>
                                        <div class="blk">
                                            <h5 class="color">Reply Contact</h5>
                                            <div class="form_row row">
                                                <input type="hidden" class="edit_replied_id" name="edit_id"
                                                    id="edit_id">

                                                <div class="col-xs-6">
                                                    <div class="form_blk">
                                                        <h6>Name<sup>*</sup></h6>
                                                        <input type="text" name="contact_replied_name_edit"
                                                            id="contact_replied_name_edit" class="text_box"
                                                            maxlength="15" readonly>
                                                        <small class="error-message"
                                                            id="contact_replied_name_edit_error"></small>
                                                    </div>
                                                </div>
                                                <div class="col-xs-6">
                                                    <div class="form_blk">
                                                        <h6>Email<sup>*</sup></h6>
                                                        <input type="email" name="contact_replied_email_edit"
                                                            id="contact_replied_email_edit" class="text_box"
                                                            maxlength="50" readonly>
                                                        <small class="error-message"
                                                            id="contact_replied_email_edit_error"></small>
                                                    </div>
                                                </div>

                                                <div class="col-xs-12">
                                                    <div class="form_blk">
                                                        <h6>Subject<sup>*</sup></h6>
                                                        <textarea name="contact_replied_subject_edit"
                                                            id="contact_replied_subject_edit" class="text_box"
                                                            placeholder="" readonly></textarea>
                                                        <small class="error-message"
                                                            id="contact_replied_subject_edit_error"></small>
                                                    </div>
                                                </div>
                                                <div class="col-xs-12">
                                                    <div class="form_blk">
                                                        <h6>Description<sup>*</sup></h6>
                                                        <small id="contact_replied_description_edit_created_at"><sup>Created
                                                                at</sup></small>
                                                        <textarea name="contact_replied_description_edit"
                                                            id="contact_replied_description_edit" class="text_box"
                                                            placeholder="Description should not exceed more than 300 words"
                                                            readonly></textarea>
                                                        <small class="error-message"
                                                            id="contact_replied_description_edit_error"></small>
                                                    </div>
                                                </div>

                                                <div class="col-xs-12">
                                                    <div class="form_blk">
                                                        <h6>Reply<sup>*</sup></h6>
                                                        <small class="contact_replied_reply_edit_replied_at"><sup>Replied
                                                                at</sup></small>
                                                        <textarea required name="contact_reply_edit"
                                                            id="contact_replied_reply_edit"
                                                            class="text_box contact_replied_reply_edit"
                                                            placeholder=""></textarea>
                                                        <small class="error-message"
                                                            id="contact_replied_reply_edit_error"></small>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="btn_blk form_btn text-center">
                                                <button type="submit" class="site_btn long edit_replied_contact_btn"
                                                    id="edit_replied_contact_btn">Send</button>
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
                                    id="contact_delete_confirmed_btn" data-id=""><img
                                        src="{{asset('assets\images\check_1828640.png')}}" style="width:30px"></button>
                                <button type="button" class="btn bg-transparent rounded-pill"
                                    id="contact_close_delete_modal_btn"><img
                                        src="{{asset('assets\images\close-button_11450177.png')}}"
                                        style="width:30px"></button>

                                <!-- <button type="button" class="btn btn-danger ">Delete</button> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- contact replied delete --}}
        <div class="popup sm" data-popup="delete-replied-data-popup" id="delete__replied_modal">
            <div class="table_dv">
                <div class="table_cell">
                    <div class="contain">
                        <div class="_inner editor_blk">
                            <button type="button" class="hidden x_btn clode_replied_delete_modal_default_btn"></button>
                            <h3 class="text-center">Are You Sure to Delete?</h3>
                            <!-- <p>Are You Sure to Delete?</p> -->
                            <div class="text-center row">
                                <button type="button" class="btn bg-transparent rounded-pill"
                                    id="contact_replied_delete_confirmed_btn" data-id=""><img
                                        src="{{asset('assets\images\check_1828640.png')}}" style="width:30px"></button>
                                <button type="button" class="btn bg-transparent rounded-pill"
                                    id="contact_replied_close_delete_modal_btn"><img
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
            {{-- ______________________tab <request> start_______________________________--- --}}
                <div id="request" class="tab-pane fade in active">
                    <div class="top_head">
                        <h4>Contacts Requests</h4>
                        <div class="form_blk">
                            <input type="text" name="" id="" class="text_box contact_search_box"
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
                                        <th>Subject</th>
                                        <th>Description</th>
                                        <th>Created Date</th>
                                    </tr>
                                </thead>
                                <tbody id="contact_table_body">


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
                {{-- ______________________tab <request> end_______________________________--- --}}



                    <div id="replied" class="tab-pane fade in">
                        <div class="top_head">
                            <h4>Contacts Replied</h4>
                            <div class="form_blk">
                                <input type="text" name="" id="" class="text_box contact_search_box"
                                    placeholder="Search here">
                                <button type="button"><img src="{{ asset('/images/icon-search.svg')}}" alt=""></button>
                            </div>
                        </div>
                        <div class="blk">
                            <div class="tbl_blk">
                                <table id="replied_table" class="table table-responsive">
                                    <thead>
                                        <tr>
                                            <th width="10">#</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Subject</th>
                                            <th>Description</th>
                                            <th>Created Date</th>
                                        </tr>
                                    </thead>
                                    <tbody id="contact_replied_table_body">


                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>

        </div>
    </div>
</section>




@endsection

@push('scripts')



<script>
    $(document).ready(function() {
        $('#uiBlocker').show();

    })
</script>


<script>
    $('.contact_search_box').on("keyup", function (e) {
  
  var tr = $('.contact_data_row');
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


{{-- ________________________________table searching ended____________________________ --}}
<script>
    //1
    function loadpropertyList() {
    let url = '/admin/contact/view/ajax';
    let type = 'GET';
    SendAjaxRequestToServer(type, url, '', '', loadManagerListResponse, '', '');
}


function loadManagerListResponse(response) {

    var contactListingTable = $('#contact_table_body');
    contactListingTable.empty();
   
     
    var inquiries = response.data;
    $.each(inquiries, function (index, contact) {

        var contactRow = `<tr class="contact_data_row">
                                <td class="nowrap grid-p-searchby">${index + 1}</td>
                              
                                <td class="grid-p-searchby">${contact.full_name}</td>
                                <td class="grid-p-searchby">${contact.email}</td>
                                <td class="grid-p-searchby">${contact.subject}</td>
                                <td class="grid-p-searchby">${contact.message}</td>
                                <td class="nowrap grid-p-searchby">${formatDate(contact.created_at)}</td>
                                <td class="nowrap" data-center>
                                     <div class="act_btn">
                        <button type="button" class="edit pop_btn contact_edit_btn" title="Edit" data-popup="edit-data-popup" data-id="${contact.id}" data-contact='${JSON.stringify(contact)}'></button>
                        <button type="button" class="del pop_btn contact_delete_btn" title="Delete" data-popup="delete-data-popup" data-id="${contact.id}" data-contact='${JSON.stringify(contact)}'></button>
                    </div>
                                </td>
                            </tr>`;
            contactListingTable.append(contactRow); 


    });
}

//1
$(document).on('click', '.contact_edit_btn', function () {
    var id = $(this).attr('data-id');
    var contactData = $(this).attr('data-contact');

   // console.log("Raw contact data:", contactData); // Log the raw attribute value

    try { 
        // Check if the contactData is a valid JSON string
        if (!contactData.endsWith('}')) {
            throw new Error("The contact data appears to be truncated.");
        }

        var contact = JSON.parse(contactData);

        $('#edit_id').val(contact.id);
        $('#contact_name_edit').val(contact.full_name);
        $('#contact_email_edit').val(contact.email);
        $('#contact_subject_edit').val(contact.subject);
        $('#contact_description_edit').val(contact.message);
        const createdAt=formatDate(contact.created_at)
        $('#contact_description_edit_created_at').prepend(createdAt);
    } catch (e) {
        
        toastr.error('Contact us data is not properly entered or formatted', '', { timeOut: 3000 });
        console.error("Error parsing JSON:", e.message);
    }
});

 






//1
// _________________________________Delete replied functions_______________________________
$(document).on('click', '.contact_delete_btn', function () {
    var del_id = $(this).attr('data-id');
    $('#contact_delete_confirmed_btn').attr('data-id', del_id);
});

$('#contact_close_delete_modal_btn').click(function () {
    $('.clode_delete_modal_default_btn').click();
    $('#contact_delete_confirmed_btn').attr('data-id', '');
});

$('#contact_delete_confirmed_btn').click(function () {
    var del_id = $(this).attr('data-id');
    let url = '/admin/contact/delete';
    let type = 'POST';
    let data = new FormData();
    data.append('del_id', del_id);
    SendAjaxRequestToServer(type, url, data, '', deletcontactResponse, '', '');

});


function deletcontactResponse(response) {
    $('#contact_close_delete_modal_btn').click(); // Close the modal in all cases

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

{{-- _____________________________-loading contact request ended____________________ --}}




{{-- 2 --}}
<script>
    loadContactReplied();
    function loadContactReplied() {
    let url = '/admin/contact/view/replied/ajax';
    let type = 'GET';
    SendAjaxRequestToServer(type, url, '', '', loadContactRepliedResponse, '', '');
}


function loadContactRepliedResponse(response) {
 
    var contactListingTable = $('#contact_replied_table_body');
    contactListingTable.empty();
    var inquiries = response.data;
    $.each(inquiries, function (index, contact) {


        var contactRow = `<tr class="contact_data_row">
                                <td class="nowrap grid-p-searchby">${index + 1}</td>
                              
                                <td class="grid-p-searchby">${contact.full_name}</td>
                                <td class="grid-p-searchby">${contact.email}</td>
                                <td class="grid-p-searchby">${contact.subject}</td>
                                <td class="grid-p-searchby">${contact.message}</td>
                                <td class="nowrap grid-p-searchby">${formatDate(contact.created_at)}</td>
                                <td class="nowrap" data-center>
                                     <div class="act_btn">
                        <button type="button" class="edit pop_btn contact_replied_edit_btn" title="Edit" data-popup="edit-replied-data-popup" data-id="${contact.id}" data-contact='${JSON.stringify(contact)}'></button>
                        <button type="button" class="del pop_btn contact_replied_delete_btn" title="Delete" data-popup="delete-replied-data-popup" data-id="${contact.id}" data-contact='${JSON.stringify(contact)}'></button>
                    </div>
                                </td>
                            </tr>`;
            contactListingTable.append(contactRow); 


    });
}


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
//2
$(document).on('click', '.contact_replied_edit_btn', function () {
    var id = $(this).attr('data-id');
    var contact = JSON.parse($(this).attr('data-contact'));
    $('.edit_replied_id').val(contact.id) 
    $('#contact_replied_name_edit').val(contact.full_name)
    $('#contact_replied_email_edit').val(contact.email)
    $('#contact_replied_subject_edit').val(contact.subject)
    $('#contact_replied_description_edit').val(contact.message)
    var contactCreatedAt = formatDate(contact.created_at) 
    $('#contact_replied_description_edit_created_at').prepend(contactCreatedAt)
    $('.contact_replied_reply_edit').val(contact.contact_reply_edit)
    var contactRepliedAt = formatDate(contact.updated_at)  // Format the date for display
    $('.contact_replied_reply_edit_replied_at').prepend(contactRepliedAt)
    // Add your edit logic here, e.g., populate a form with contact details for editing
});  

//2
// _________________________________Delete functions_______________________________
$(document).on('click', '.contact_replied_delete_btn', function () {
    var del_id = $(this).attr('data-id');
    $('#contact_replied_delete_confirmed_btn').attr('data-id', del_id);
});

//2
$('#contact_replied_close_delete_modal_btn').click(function () {
    $('.clode_replied_delete_modal_default_btn').click();
    $('#contact_replied_delete_confirmed_btn').attr('data-id', '');
});
//2
$('#contact_replied_delete_confirmed_btn').click(function () {
    var del_id = $(this).attr('data-id');
    let url = '/admin/contact/replied/delete';
    let type = 'POST';
    let data = new FormData();
    data.append('del_replied_id', del_id);
    SendAjaxRequestToServer(type, url, data, '', deletcontactRepliedResponse, '', '');

});

//2
function deletcontactRepliedResponse(response) {
    $('#contact_replied_close_delete_modal_btn').click(); // Close the modal in all cases

    if (response.status == 200) {
        toastr.success(response.message, '', { timeOut: 3000 });
       
        $('#delete_replied_modal').hide();
        window.location.reload(); // Reload the page
    } else {
        $('#delete_replied_modal').hide();
        toastr.error(response.message, '', { timeOut: 3000 });
    }
}


</script>



<script>
    $(document).ready(function() {
        $('#edit_replied_contact_btn').on('click', function(e) {
            e.preventDefault();
            // Use plain JavaScript to set the display property
            $('#edit-replied-data-popup').hide();
           $('#uiBlocker').show();
            setTimeout(() => {
                $('#edit_replied_contact_form').submit();
            }, 1000);
        });
        $('#edit_contact_btn').on('click', function(e) {
            e.preventDefault();
            // Use plain JavaScript to set the display property
            $('#edit-data-popup').hide();
           $('#uiBlocker').show();
            setTimeout(() => {
                $('#edit_contact_form').submit();
            }, 1000);
        });

    });
</script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
    const formContact = document.getElementById('edit_contact_form');
    const replyInput = document.getElementById('contact_reply_edit');
    const sendButton = document.getElementById('edit_contact_btn');

    const replyError = document.getElementById('contact_reply_edit_error');

    const validateContactForm = () => {
        let isValid = true;

        if (replyInput.value.trim() === '') {
            replyError.textContent = 'Reply is required.';
            isValid = false;
        } else if (replyInput.value.length > 300) {
            replyError.textContent = 'Reply should not exceed 300 words.';
            isValid = false;
        } else {
            replyError.textContent = '';
        }

        // Disable the button if the form is invalid
        sendButton.disabled = !isValid;

        return isValid;
    };

    // Attach input event listeners for real-time validation
    replyInput.addEventListener('input', validateContactForm);

    // Attach submit event listener to the form
    formContact.addEventListener('submit', function(event) {
        if (!validateContactForm()) {
            event.preventDefault();
        }
    });

    // Initial validation to set the button state on page load
    validateContactForm();
});

</script>


<script>
    document.addEventListener('DOMContentLoaded', function() {
    const formRepliedContact = document.getElementById('edit_replied_contact_form');
    const replyInput = document.getElementById('contact_replied_reply_edit');
    const sendButton = document.getElementById('edit_replied_contact_btn');

    const replyError = document.getElementById('contact_replied_reply_edit_error');

    const validateRepliedContactForm = () => {
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

    // Attach input event listeners for real-time validation
    replyInput.addEventListener('input', validateRepliedContactForm);

    // Attach submit event listener to the form
    formRepliedContact.addEventListener('submit', function(event) {
        if (!validateRepliedContactForm()) {
            event.preventDefault();
        }
    });

    // Initial validation to set the button state on page load
  //  validateRepliedContactForm();
});


</script>

@endpush