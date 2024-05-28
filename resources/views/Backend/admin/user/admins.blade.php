@extends('Backend.includes.common-template')


@push('styles')


<style>
    .modal-header {
        background-color: #007bff;
        color: white;
    }

    .modal-header .btn-close {
        filter: invert(1);
    }

    .form-check-input {
        transform: scale(1.5);
    }

    .form-check {
        padding-left: 0;
    }

    .table th,
    .table td {
        vertical-align: middle;
    }
</style>

@endpush

@section('content')
<!-- Modal create admin -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Admin</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="#" id="createAdminForm">
                    <div class="row mb-3">
                        <div class="col-sm-3">
                            <h6 class="mb-0">Full Name</h6>
                        </div>
                        <div class="col-sm-9">
                            <input name="createFullNameInput" id="createFullNameInput" type="text" class="form-control"
                                value="" />
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-sm-3">
                            <h6 class="mb-0">Email</h6>
                        </div>
                        <div class="col-sm-9">
                            <input name="createEmailInput" id="createEmailInput" type="text" class="form-control"
                                value="" />
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-sm-3">
                            <h6 class="mb-0">Phone</h6>
                        </div>
                        <div class="col-sm-9">
                            <input name="createPhoneInput" id="createPhoneInput" type="text" class="form-control"
                                oninput="this.value = this.value.replace(/[^0-9]/g, '')" required />
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-sm-3">
                            <h6 class="mb-0">Password</h6>
                        </div>
                        <div class="col-sm-9">
                            <input name="createPasswordInput" id="createPasswordInput" type="text" class="form-control"
                                required />
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-sm-3">
                            <h6 class="mb-0">Status</h6>
                        </div>
                        <div class="col-sm-9">
                            <div class="ms-3 form-check form-switch">
                                <input name="createStatusInput" id="createStatusInput" style="font-size: 20px;"
                                    type="checkbox" class="form-check-input" />

                            </div>
                        </div>
                    </div>

                </form>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" onclick="handleCreateAdminx()">Create</button>
            </div>
        </div>
    </div>
</div>
{{-- Create admin modal ends --}}
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
                                    <h6 class="mb-0">Full Name</h6>
                                </div>
                                <div class="col-sm-9">
                                    <input name="editFullNameInput" id="editFullNameInput" type="text"
                                        class="form-control" value="" />
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Email</h6>
                                </div>
                                <div class="col-sm-9">
                                    <input name="editEmailInput" id="editEmailInput" type="text" class="form-control"
                                        value="" />
                                </div>
                            </div>
                            {{-- <div class="row mb-3">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Phone</h6>
                                </div>
                                <div class="col-sm-9">
                                    <input name="editPhoneInput" id="editPhoneInput" type="text" class="form-control"
                                        oninput="this.value = this.value.replace(/[^0-9]/g, '')" required />
                                </div>
                            </div> --}}
                            <div class="row mb-3">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Password</h6>
                                </div>
                                <div class="col-sm-9">
                                    <input name="editPasswordInput" id="editPasswordInput" type="text"
                                        class="form-control" required
                                        placeholder="Leave it empty if you don't want to change password" />
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Status</h6>
                                </div>
                                <div class="col-sm-9">
                                    <div class="ms-3 form-check form-switch">
                                        <input name="editStatusInput" id="editStatusInput" style="font-size: 20px;"
                                            type="checkbox" class="form-check-input" />
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






{{-- data table here list admins --}}

<div class="container ">

    <div class="col">
        <div class="card_blk">
            <div class="icon">
                <img src="{{ asset('images/icon-plus.svg') }}" alt="Add Icon">
            </div>
            <strong>Create Admin</strong>
            <a href="javascript:void(0)" data-toggle="modal" data-target="#exampleModal" id="openCreateModalButton"></a>
        </div>
    </div>

    <table class="table data-table">
        <thead>
            <tr>
                <th width="10">id</th>
                <th width="10">Image</th>
                <th width="10">Name</th>
                <th width="10">Email</th>
                <th data-center="" width="10"> Role</th>
                <th width="10" data-center="">Status</th>
                <th width="10" data-center="">Created</th>
                <th width="10" data-center="">Action</th>
            </tr>
        </thead>
        <tbody>
    </tbody>
    </table>



    {{-- <table class="table table-bordered data-table">
        <thead>
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Email</th>
                <th width="100px">Action</th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table> --}}

</div>



{{-- /////////////////////? --}}

{{-- /////////////////////? --}}

@endsection


<th width="10">#</th>
<th width="40">Image</th>
<th width="40">Name</th>
<th>Email</th>
<th data-center="">Make &amp; Role</th>
<th width="40" data-center="">Status</th>
<th width="40" data-center="">Created_at</th>
<th width="40" data-center="">Action</th>
@push('scripts')
<script type="text/javascript">
    $(function () {
    
    var table = $('.data-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ route('admin.list') }}",
        columns: [
            {data: 'id', name: 'id'},
            {data: 'name', name: 'name'}, // as image
            {data: 'name', name: 'name'},
            {data: 'email', name: 'email'},
            {data: 'role', name: 'role'},
            {data: 'status', name: 'status'},
            {data: 'created_at', name: 'created_at'},
            {data: 'action', name: 'action', orderable: false, searchable: false},
        ]
    });
    
  });  
</script>



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
// Event delegation for handling click events on action buttons
$(document).on('click', '.view', function() {
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
 $(document).on('click', '.edit', function() {
        var userData = $(this).data('user');
        
        $('#editFullNameInput').val(userData.name);
        $('#editEmailInput').val(userData.email);
        $('#editPasswordInput').val('');
        $('#editStatusInput').prop('checked', userData.status);
        $('#popupUpdate').css('display', 'block');

        // Store user ID for update
        $('#updateAdminBtn').data('id', userData.id);
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
                $('.data-table').DataTable().ajax.reload();
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
 

$(document).on('click', '.delete', function() {
    
    // Handle delete button click
    var userId = $(this).data('id');
    var userData = $(this).data('user');
    // Perform actions for deleting user data
    // For example, send an AJAX request to delete the user
    $.ajax({
        type: 'GET',
        url: '/admin/users/admin/destroy/' + userId,// Adjust the URL according to your route configuration
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success: function(response) {
            toastr.success("User deleted successfully");
            // Reload the DataTable or update it to reflect the changes
            // For example, you can use DataTables API to redraw the table
            $('.data-table').DataTable().ajax.reload();
        },
        error: function(xhr, status, error) {
            toastr.error("Error deleting user");
        }
    });
});

</script>
@endpush