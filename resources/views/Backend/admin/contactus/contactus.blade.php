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
            <li><a href="{{ url('admin/contact/view')}}">Dashboard</a></li>
            <li>contacts</li>
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
                                                            id="contact_name_edit" class="text_box" maxlength="15" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-xs-6">
                                                    <div class="form_blk">
                                                        <h6>Email<sup>*</sup></h6>
                                                        <input type="email" name="contact_email_edit"
                                                            id="contact_email_edit" class="text_box" maxlength="15" readonly>
                                                    </div>
                                                </div>

                                                <div class="col-xs-12">
                                                    <div class="form_blk">
                                                        <h6>Subject <sup>*</sup></h6>
                                                        <textarea name="contact_subject_edit" id="contact_subject_edit"
                                                            class="text_box" placeholder="" readonly></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-xs-12">
                                                    <div class="form_blk">
                                                        <h6>Description<sup>*</sup></h6>
                                                        <textarea name="contact_description_edit"
                                                            id="contact_description_edit" class="text_box"
                                                            placeholder="" readonly></textarea>
                                                    </div>
                                                </div>


                                                <div class="col-xs-12">
                                                    <div class="form_blk">
                                                        <h6>Reply <sup>*</sup></h6>
                                                        <textarea required name="contact_reply_edit"
                                                            id="contact_reply_edit" class="text_box"
                                                            placeholder=""></textarea>
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="btn_blk form_btn text-center">

                                                <button type="submit" class="site_btn long edit_contact_btn"
                                                    id="edit_contact_btn">Update</button>

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
                                <button type="button" class="btn bg-transparent rounded-pill" id="contact_delete_confirmed_btn"
                                    data-id=""><img src="{{asset('assets\images\check_1828640.png')}}"
                                        style="width:30px"></button>
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
        <!-- delete modal end  -->









        <div class="tab-content">
            {{-- ______________________tab <All> start_______________________________--- --}}
                <div id="All" class="tab-pane fade in active">
                    <div class="top_head">
                        <h4>Contacts</h4>
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
                {{-- ______________________tab <All> end_______________________________--- --}}

        </div>
    </div>
</section>




@endsection

@push('scripts')
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
    function loadpropertyList() {
    let url = '/admin/contact/view/ajax';
    let type = 'GET';
    SendAjaxRequestToServer(type, url, '', '', loadManagerListResponse, '', '');
}

function loadManagerListResponse(response) {

    var contactListingTable = $('#contact_table_body');
    contactListingTable.empty();
    console.log(response.data); 
    var inquiries = response.data;
       // var inactive_managers = response.managers_list.inactive_managers;
      // var active_managers = response.managers_list.active_managers; 
     // var totalManagers = managers.length;
     // $('#total_managers').text(totalManagers);
     // $('#inactive_managers').text(inactive_managers);
    // $('#active_managers').text(active_managers);
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

$(document).on('click', '.contact_edit_btn', function () {
    var id = $(this).attr('data-id');
    var contact = JSON.parse($(this).attr('data-contact'));
 console.log(contact)
    $('#edit_id').val(contact.id)
    $('#contact_name_edit').val(contact.full_name)
    $('#contact_email_edit').val(contact.email)
    $('#contact_subject_edit').val(contact.subject)
    $('#contact_description_edit').val(contact.message)
    // Add your edit logic here, e.g., populate a form with contact details for editing
});  

// _________________________________Delete functions_______________________________
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