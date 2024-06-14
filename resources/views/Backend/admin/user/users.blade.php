@extends('Backend.includes.common-template')


@push('styles')
<style>
    .btnRow {
        display: flex;
        flex-wrap: nowrap;

    }

    .btnRow>a {
        margin: 2px;

    }

    <style>

    /* Modal styling */
    .modal-content {
        border-radius: 10px;
    }

    .modal-header {
        background-color: #007bff;
        color: white;
        border-radius: 10px 10px 0 0;
    }

    .modal-body form .mb-3 {
        margin-bottom: 20px;
    }

    .modal-body form .form-label {
        font-weight: bold;
    }

    /* Input styling */
    .form-control {
        border-radius: 8px;
    }

    /* Text area styling */
    .form-control-textarea {
        border-radius: 8px;
        resize: none;
    }

    /* Table styling */
    .createBtn {
        text-align: right;
    }

    .table {
        border-radius: 10px;
    }

    .table thead th {
        background-color: #007bff;
        color: white;
        border-color: #007bff;
    }

    .table tbody td {
        vertical-align: middle;
    }

    .table-bordered th,
    .table-bordered td {
        border: 1px solid #dee2e6;
    }
</style>


</style>

@endpush

@section('content')
<!-- Modal create admin -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">User</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="#" id="createUserForm">
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
                <button type="button" class="btn btn-primary" onclick="handleCreateUserx()">Create</button>
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




{{-- data table here list users --}}

<div class="container ">

    <div class="d-flex justify-content-end" style="margin-top: 20px;">
        <div class="createBtn bg-info">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"
                id="openCreateModalButton">
                Create User
            </button>
        </div>
    </div>
    <table class="table table-bordered data-table">
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
    </table>
</div>











@endsection



@push('scripts')

<script type="text/javascript">
    $(function () {
    
    var table = $('.data-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ route('user.list') }}",
        columns: [
            {data: 'id', name: 'id'},
            {data: 'name', name: 'name'},
            {data: 'email', name: 'email'},
            {data: 'action', name: 'action', orderable: false, searchable: false},
        ]
    });
    
  });  
</script>



<script>
    // Define the functaion
  function handleCreateUserx() {


var formData = $('#createUserForm').serialize();
const uri ='/admin/dashboard/user/user';

$.ajax({
    type: 'POST',
    url: uri, // Add quotes around the URL
    data: formData,
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
    success: function(response) {
        toastr.success("Submitted Successfully");
        window.location.reload();
        // Handle success response 
        // Close the modal if needed  
        $('#showCreateModal').modal('hide');
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
        $('#showCreateModal').modal('show');
        console.error('Error submitting form:', error);
    }
});                         
}

///////////////////////////////

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




$(document).on('click', '.edit', function() {
    // Handle edit button click
    var userId = $(this).data('id');
    var userData = $(this).data('user');
});



$(document).on('click', '.delete', function() {
    
    // Handle delete button click
    var userId = $(this).data('id');
    var userData = $(this).data('user');
    // Perform actions for deleting user data
    // For example, send an AJAX request to delete the user
    $.ajax({
        type: 'GET',
        url: '/admin/users/user/destroy/' + userId,// Adjust the URL according to your route configuration
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