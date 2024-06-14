@extends('Backend.includes.common-template')


@push('styles')

<style>
    .col-sm-9 {
        margin: 2px;
    }
</style>
@endpush

@section('content')
<section id="deliveries">
    <div class="contain-fluid">
        <ul class="crumbs">
            <li><a href="{{ url('admin/users')}}">Dashboard</a></li>
            <li>Admin</li>
        </ul>
        <!-- View User Modal -->
        <section class="popup lg" id="popupView" data-popup="search" style="display: none;">
            <div class="table_dv">
                <div class="table_cell">
                    <div class="contain">
                        <div class="_inner">
                            <button class="x_btn" id="closeCustomModalButton"></button>
                            <div class="modal-body">
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Full Name</h6>
                                    </div>
                                    <div class="col-sm-9">
                                        <span id="viewFullName"></span>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Email</h6>
                                    </div>
                                    <div class="col-sm-9">
                                        <span id="viewEmail"></span>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Phone</h6>
                                    </div>
                                    <div class="col-sm-9">
                                        <span id="viewPhone"></span>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Status</h6>
                                    </div>
                                    <div class="col-sm-9">
                                        <span id="viewStatus"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- view user popup ends here --}}


        {{-- edit property popup --}}
        <!-- _______________update popu_________________ -->
        <section class="popup lg" id="popupUpdate" data-popup="search" style="display: none;">
            <div class="table_dv">
                <div class="table_cell">
                    <div class="contain">
                        <div class="_inner">
                            <button class="x_btn" id="closeUpdateModalButtonx"></button>
                            <div class="modal-body">
                                <form action="#" id="updateAdminForm">
                                    <div class="row mb-3">
                                        <div class="col-sm-3">
                                            <h6 class="mb-1">Full Name</h6>
                                        </div>
                                        <div class="col-sm-9 m-2">
                                            <input name="editFullNameInput" id="editFullNameInput" type="text"
                                                class="form-control mb-1" value="" />
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Email</h6>
                                        </div>
                                        <div class="col-sm-9 m-2">
                                            <input name="editEmailInput" id="editEmailInput" type="text"
                                                class="form-control mb-1" value="" />
                                        </div>
                                    </div>
                                    {{-- <div class="row mb-3">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Phone</h6>
                                        </div>
                                        <div class="col-sm-9">
                                            <input name="editPhoneInput" id="editPhoneInput" type="text"
                                                class="form-control"
                                                oninput="this.value = this.value.replace(/[^0-9]/g, '')" required />
                                        </div>
                                    </div> --}}
                                    <div class="row mb-5">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Password</h6>
                                        </div>
                                        <div class="col-sm-9 m-2">
                                            <input name="editPasswordInput" id="editPasswordInput" type="text"
                                                class="form-control mb-1" required
                                                placeholder="Leave it empty if you don't want to change password" />
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Status</h6>
                                        </div>
                                        <div class="col-sm-9 m-2">
                                            <div class="ms-3 form-check form-switch">
                                                <input name="editStatusInput" id="editStatusInput"
                                                    style="font-size: 20px;" type="checkbox"
                                                    class="form-check-input mb-1" />
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal"
                                    id="closeUpdateModalButton">Close</button>
                                <button type="button" id="updateAdminBtn" class="btn btn-primary">Update</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- _______________update popu end_________________ -->

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
                            <table id="admin_table" class="table table-responsive">
                                <thead>
                                    <tr>
                                        <th width="10">#</th>
                                        <th>Name</th>
                                        <th>Email</th>

                                        <th>Created Date</th>
                                        <th>Status</th>

                                        <th>Action</th>

                                    </tr>
                                </thead>
                                <tbody id="admin_table_body">
                                    @foreach ($users as $user )


                                    <tr class="property_data_row">
                                        <td class="grid-p-searchby">
                                            {{ $user->id }}
                                        </td>
                                        <td class="grid-p-searchby">
                                            {{ $user->name }}
                                        </td>
                                        <td class="grid-p-searchby">
                                            {{ $user->email }}
                                        </td>
                                        <td class="grid-p-searchby">
                                            {{ $user->created_at }}
                                        </td>
                                        <td class="grid-p-searchby">
                                            {{ $user->status==1?"Active":"Inactive" }}
                                        </td>
                                        <td class="nowrap" data-center="">
                                            <div class="act_btn">
                                                <button type="button" class="edit" data-user="{{ $user }}"
                                                    id="admin_edit"></button>
                                                <button type="button" class="copy admin_view"
                                                    data-user="{{ $user }}"></button>
                                                <button type="button" class="del" data-user="{{ $user }}"
                                                    id="admin_delete"></button>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
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
    $('.property_search_box').on("keyup", function (e) {
  
  var tr = $('.property_data_row');
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



{{-- __________________________ table searching ended_______________ --}}
<script>
    // Define the functaion
function handleCreateAdminx() {
var formData = $('#createAdminForm').serialize();
const uri ='/admin/dashboard/create/admin';

$.ajax({
    type: 'POST',
    url: uri, // Add quotes around the URL
    data: formData,
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
    success: function(response) {
        toastr.success("Submitted Successfully");
       // window.location.reload();
        // Handle success response 
        // Close the modal if needed  
        window.location.reload()
        $('.data-table').DataTable().ajax.reload();
        $('#exampleModal').modal('hide');
    }, 
    error: function(xhr, status, error) {
        toastr.error('Error submitting form:', error, '', {
            timeOut: 3000
        });
        var errorMessages = "";
        if (xhr.status === 422) {
            var errors = xhr.responseJSON.errors;
            for (var key in errors) {
                toastr.error(errors[key][0] + '<br>'); // Concatenate error messages
            }
            // toastr.error(errorMessages);
        } else {
            toastr.error('Error:', error);
        }
        $('#exampleModal').modal('show');
        console.error('Error submitting form:', error);
    }
});                         
}


///////////////////////////////

// Event delegation for handling click events on action buttons
$(document).on('click', '.admin_view', function() {
    // Get user data from the button's data attributes
    var userData = $(this).data('user');
    // Populate the modal with user data
    $('#viewFullName').text(userData.name);
    $('#viewEmail').text(userData.email);
    $('#viewPhone').text(userData.phone);
    $('#viewStatus').text(userData.status ? 'Active' : 'Inactive');
     
    // Show the modal
    
    $('#popupView').css('display', 'block');

});



 // Handle edit button click
 $('#admin_edit').on('click', function() {
    var userData = $(this).data('user');
    if (userData) {
        $('#editFullNameInput').val(userData.name || '');
        $('#editEmailInput').val(userData.email || '');
        $('#editPasswordInput').val('');

        // Set checkbox checked state based on userData.status
        $('#editStatusInput').prop('checked', userData.status == 1);

        // Show the modal using Bootstrap
        $('#popupUpdate').css('display', 'block');

        // Store user ID for update
        $('#updateAdminBtn').data('id', userData.id);
    } else {
        console.error('User data not found or is invalid');
    }
});


    // Handle update button click
    $('#updateAdminBtn').click(function() {
        var userId = $(this).data('id');
        var formData = {
            name: $('#editFullNameInput').val(),
            email: $('#editEmailInput').val(),
            phone: $('#editPhoneInput').val(),
            password: $('#editPasswordInput').val(),
            status: $('#editStatusInput').is(':checked') ? 1 : 0
        };

        $.ajax({
            type: 'POST',
            url: '/admin/users/admin/update/' + userId,
            data: formData,
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function(response) {
                toastr.success("Updated Successfully");
                $('#popupUpdate').css('display', 'none');
                window.location.reload()
            },
            error: function(xhr, status, error) {
                var errorMessages = "";
                if (xhr.responseJSON && xhr.responseJSON.errors) {
                    var errors = xhr.responseJSON.errors;
                    for (var key in errors) {
                        errorMessages += errors[key] + "<br>";
                    }
                } else {
                    errorMessages = 'An error occurred while updating the user.';
                }
                toastr.error(errorMessages, '', {
                    timeOut: 3000
                });
                console.error('Error updating user:', error);
            }
        });
    });



    // Close modals on close button click
    $('#closeCustomModalButton').click(function() {
        $('#popupView').css('display', 'none');
    });

    $('#closeUpdateModalButtonx').click(function() {
        $('#popupUpdate').css('display', 'none');
    });
    $('#closeUpdateModalButton').click(function() {
        $('#popupUpdate').css('display', 'none');
    });

    // Close modals on close button click end
 

$('#admin_delete').click( function() {
    
    // Handle delete button click
    var userData = $(this).data('user');
    $.ajax({
        type: 'GET',
        url: '/admin/users/admin/destroy/' + userData.id,// Adjust the URL according to your route configuration
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success: function(response) {
            toastr.success("User deleted successfully");
            // Reload the DataTable or update it to reflect the changes
            // For example, you can use DataTables API to redraw the table
            window.location.reload()
        },
        error: function(xhr, status, error) {
            toastr.error("Error deleting user");
        }
    });
});

</script>
@endpush