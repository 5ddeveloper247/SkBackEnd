@extends('Backend.includes.common-template')


@push('styles')

<style>
    .col-sm-9 {
        margin: 2px;
    }

    .error-message {
        color: red;
        font-size: 0.875em;
        /* Adjust font size as needed */
        margin-top: 0.25em;
    }
</style>
@endpush

@section('content')

<section id="deliveries">
    <!-- Display Success Alert -->
    @if($errors->any())
    <div class="alert alert-danger alert-dismissible  show" role="alert">
        <ul class="mb-0">
            @foreach($errors->all() as $error)
            <li style="list-style: none">
                {{ $error }}
            </li>
            @endforeach
        </ul>

    </div>
    @endif

    <!-- Display Success Alert -->
    @if(session('success'))
    <div class="alert alert-success alert-dismissible  show" role="alert">
        {{ session('success') }}
    </div>
    @endif

    <!-- Display Error Alert -->
    @if(session('e'))
    <div class="alert alert-danger alert-dismissible  show" role="alert">
        {{ session('e') }}

    </div>
    @endif

    <div class="contain-fluid">
        <ul class="crumbs">
            <li><a href="{{ url('admin/users')}}">Dashboard</a></li>
            <li>Admin</li>
        </ul>
        <!-- Modal create admin -->
        <section class="popup md" id="popupAddAdminUrl" data-popup="search" style="display: none;">
            <div class="table_dv">
                <div class="table_cell">
                    <div class="contain">
                        <div class="_inner">
                            <button class="x_btn" id="closeCustomModalButton"></button>
                            <div class="modal-body">

                                <form action="{{ route('admin.dashboard.create.admin') }}" id="AddAdminForm"
                                    method="POST">
                                    @csrf
                                    <div class="row mb-3">
                                        <div class="col-sm-12">
                                            <h6 class="mb-1">Full Name<sup>*</sup></h6>
                                        </div>
                                        <div class="col-sm-12 m-2">
                                            <input name="FullNameInput" id="FullNameInput" type="text"
                                                class="form-control mb-1" maxlength="50" required
                                                value="{{ old('FullNameInput') }}" />
                                            @error('FullNameInput')
                                            <small class="error-message FullNameError">{{ $message }}</small>
                                            @enderror
                                            <small class="error-message" id="FullNameError"></small>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-sm-12">
                                            <h6 class="mb-0">Email<sup>*</sup></h6>
                                        </div>
                                        <div class="col-sm-12 m-2">
                                            <input name="EmailInput" id="EmailInput" type="email"
                                                class="form-control mb-1" maxlength="50" required
                                                value="{{ old('EmailInput') }}" />
                                            @error('EmailInput')
                                            <small class="error-message EmailError">{{ $message }}</small>
                                            @enderror
                                            <small class="error-message" id="EmailError"></small>
                                        </div>
                                    </div>
                                    <div class="row mb-5">
                                        <div class="col-sm-12">
                                            <h6 class="mb-0">Password<sup>*</sup></h6>
                                        </div>
                                        <div class="col-sm-12 m-2">
                                            <input name="PasswordInput" id="PasswordInput" type="password"
                                                class="form-control mb-1" required maxlength="20" />
                                            @error('PasswordInput')
                                            <small class="error-message PasswordError">{{ $message }}</small>
                                            @enderror
                                            <small class="error-message" id="PasswordError"></small>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-sm-12">
                                            <h6 class="mb-0">Status</h6>
                                        </div>
                                        <div class="col-sm-12 m-2">
                                            <div class="d-flex" style="display: flex; align-items:center;">
                                                <p style="margin-right: 10px; margin-top:10px">Inactive</p>
                                                <div class="switch" style="width: 35px">
                                                    <input type="checkbox" name="AddStatusInput" id="AddStatusInput">
                                                    <em></em>
                                                </div>
                                                <p style="margin-left: 10px; margin-top:-1px">Active</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-sm-12">
                                            <button type="submit" class="site_btn sm">Submit</button>
                                        </div>
                                    </div>
                                </form>





                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- View User Modal -->
        <section class="popup sm" id="popupView" data-popup="search" style="display: none;">
            <div class="table_dv">
                <div class="table_cell">
                    <div class="contain">
                        <div class="_inner">
                            <button class="x_btn" id="closeCustomModalButton"></button>
                            <div class="modal-body">
                                <div class="row mb-3" style="margin-bottom: 12px;">
                                    <div class="col-sm-12">
                                        <h6 class="mb-0"><b>Full Name<sup>*</sup></b></h6>
                                    </div>
                                    <div class="col-sm-12">
                                        <span id="viewFullName"></span>
                                    </div>
                                </div>
                                <div class="row mb-3" style="margin-bottom: 12px;">
                                    <div class="col-sm-12">
                                        <h6 class="mb-0"><b>Email<sup>*</sup></b></h6>
                                    </div>
                                    <div class="col-sm-12">
                                        <span id="viewEmail"></span>
                                    </div>
                                </div>
                                <div class="row mb-3" style="margin-bottom: 12px;">
                                    <div class="col-sm-12">
                                        <h6 class="mb-0"><b>Phone</b></h6>
                                    </div>
                                    <div class="col-sm-12">
                                        <span id="viewPhone"></span>
                                    </div>
                                </div>
                                <div class="row mb-3" style="margin-bottom: 12px;">
                                    <div class="col-sm-12">
                                        <h6 class="mb-0"><b>Status</b></h6>
                                    </div>
                                    <div class="col-sm-12">
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
        <section class="popup md" id="popupUpdate" data-popup="search" style="display: none;">
            <div class="table_dv">
                <div class="table_cell">
                    <div class="contain">
                        <div class="_inner">
                            <button class="x_btn" id="closeUpdateModalButtonx"></button>
                            <div class="modal-body">
                                <form action="#" id="updateAdminForm">
                                    <div class="row mb-3" style="margin-bottom: 12px;">
                                        <div class="col-sm-12">
                                            <h6 class="mb-1">Full Name<sup>*</sup></h6>
                                        </div>
                                        <div class="col-sm-12 m-2">
                                            <input name="editFullNameInput" id="editFullNameInput" type="text"
                                                class="form-control mb-1" value="" maxlength="50" />
                                            <small class="error-message" id="editFullNameInputError"></small>
                                        </div>
                                    </div>
                                    <div class="row mb-3" style="margin-bottom: 12px;">
                                        <div class="col-sm-12">
                                            <h6 class="mb-0">Email<sup>*</sup></h6>
                                        </div>
                                        <div class="col-sm-12 m-2">
                                            <input name="editEmailInput" id="editEmailInput" type="text"
                                                class="form-control mb-1" value="" maxlength="50" />
                                            <small class="error-message" id="editEmailInputError"></small>
                                        </div>
                                    </div>
                                    <!-- <div class="row mb-3" style="margin-bottom: 12px;">
                                        <div class="col-sm-12">
                                            <h6 class="mb-0">Phone</h6>
                                        </div>
                                        <div class="col-sm-12">
                                            <input name="editPhoneInput" id="editPhoneInput" type="text"
                                                class="form-control"
                                                oninput="this.value = this.value.replace(/[^0-9]/g, '')" required />
                                        </div>
                                    </div> -->
                                    <div class="row mb-5" style="margin-bottom: 12px;">
                                        <div class="col-sm-12">
                                            <h6 class="mb-0">Password</h6>
                                        </div>
                                        <div class="col-sm-12 m-2">
                                            <input name="editPasswordInput" id="editPasswordInput" type="text"
                                                class="form-control mb-1" required
                                                placeholder="Leave it empty if you don't want to change password"
                                                maxlength="20" />
                                            <small class="error-message" id="editPasswordInputError"></small>
                                        </div>
                                    </div>
                                    <div class="row mb-3" style="margin-bottom: 12px;">
                                        <div class="col-sm-12">
                                            <h6 class="mb-0">Status</h6>
                                        </div>
                                        <div class="col-sm-12 m-2">
                                            <!-- <div class="ms-3 form-check form-switch">
                                                <input name="editStatusInput" id="editStatusInput"
                                                    style="font-size: 20px;" type="checkbox"
                                                    class="form-check-input mb-1" />
                                            </div> -->
                                            <div class="d-flex" style="display: flex; align-items:center;">
                                                <p style="margin-right: 10px; margin-top:10px">Inactive</p>
                                                <div class="switch" style="width: 35px">
                                                    <input type="checkbox" name="editStatusInput" id="editStatusInput">
                                                    <em></em>
                                                </div>
                                                <p style="margin-left: 10px; margin-top:-1px">Active</p>
                                            </div>
                                        </div>
                                    </div>

                                </form>

                            </div>
                            <div class="modal-footer" style="display: flex; justify-content:center;">
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
                                <button type="button" class="btn bg-transparent rounded-pill"
                                    id="admin_delete_confirmed_btn" data-id=""><img
                                        src="{{asset('assets\images\check_1828640.png')}}" style="width:30px"></button>
                                <button type="button" class="btn bg-transparent rounded-pill close_delete_modal_btn "
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
                        <h4>Admin</h4>
                        <div class="form_blk">
                            <input type="text" name="" id="" class="text_box property_search_box"
                                placeholder="Search here">
                            <button type="button"><img src="{{ asset('/images/icon-search.svg')}}" alt=""></button>
                        </div>
                    </div>
                    <div class="blk">
                        {{-- top_head --}}
                        <div class="block_row flex_row" style="padding-bottom: 30px">
                            <div class="col">
                                <div class="card_blk" id="">
                                    <div class="icon">
                                        <p id="totalUserCounter">{{ $activeAdmins }}</p>
                                    </div>
                                    <strong>Active Users</strong>
                                    <a type="button"></a>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card_blk" id="">
                                    <div class="icon">
                                        <p id="totalUserCounter">{{ $inactiveAdmins }}</p>
                                    </div>
                                    <strong>In-Active Users</strong>
                                    <a type="button"></a>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card_blk" id="">
                                    <div class="icon">
                                        <p id="totalUserCounter">{{$totalAdmins }}</p>
                                    </div>
                                    <strong>Total Users</strong>
                                    <a type="button"></a>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card_blk" id="showAddAdminPopUpBtn">
                                    <div class="icon"><img src="{{ asset('/images/icon-plus.svg') }}" alt="">
                                    </div>
                                    <strong>Add Admin</strong>
                                    <a type="button"></a>
                                </div>
                            </div>
                        </div>
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
                                    @foreach ($users as $user)
                                    @if($user->name != Auth::user()->name)
                                    <tr class="property_data_row">
                                        <td class="grid-p-searchby nowrap">
                                            {{ $user->id }}
                                        </td>
                                        <td class="grid-p-searchby">
                                            {{ $user->name }}
                                        </td>
                                        <td class="grid-p-searchby">
                                            {{ $user->email }}
                                        </td>
                                        <td class="grid-p-searchby date-formate" data-date="{{ $user->created_at }}">
                                            {{ $user->created_at }}
                                        </td>
                                        <td class="grid-p-searchby">
                                            {{ $user->status == 1 ? "Active" : "Inactive" }}
                                        </td>
                                        <td class="nowrap" data-center="">
                                            <div class="act_btn">
                                                <button type="button" class="edit admin_edit" data-user="{{ $user }}"
                                                    id="admin_edit"></button>
                                                @if($user->super_admin == 0)
                                                <button type="button" class="del admin_delete"
                                                    data-popup="delete-data-popup" data-user="{{ $user }}"
                                                    data-id="{{ $user->id }}" id="admin_delete"></button>
                                                @endif
                                            </div>
                                        </td>
                                    </tr>
                                    @endif
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
    $(document).ready(function() {
    $('#uiBlocker').show();
    setTimeout(function() {
        $('#uiBlocker').hide();
    }, 2000);
});

</script>
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
 $('.admin_edit').on('click', function() {
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
 



$('.admin_delete').click(function(){
    var del_id = $(this).attr('data-id');
    $('#admin_delete_confirmed_btn').attr('data-id', del_id);
$('#delete_modal').show();
});


$('#admin_delete_confirmed_btn').click( function() {
    
    // Handle delete button click
    var id = $(this).data('id');
    $.ajax({
        type: 'GET',
        url: '/admin/users/admin/destroy/' + id,// Adjust the URL according to your route configuration
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success: function(response) {
            if (response.success) {
                toastr.success(response.success, '', { timeOut: 3000 });
                // Reload the DataTable or update it to reflect the changes
                setTimeout(function() {
                    window.location.reload();
                }, 3000);
            } else if (response.error) {
                toastr.error(response.error, '', { timeOut: 3000 });
            }
        },
        error: function(xhr, status, error) {
            toastr.error("Error deleting user", '', { timeOut: 3000 });
        } 
    });
});

$('.close_delete_modal_btn').click(function(){
    $('#admin_delete_confirmed_btn').attr('data-id', '');
});
</script>


<script>
    $(document).ready(function() {
    $('#showAddAdminPopUpBtn').on('click', function() {
       
        $('#popupAddAdminUrl').show();
    });
});  
  
</script>

<script>
    const fullNameInput = document.getElementById('FullNameInput');
    const emailInput = document.getElementById('EmailInput');
    const passwordInput = document.getElementById('PasswordInput');
    const submitButton = document.querySelector('button[type="submit"]');
    const fullNameError = document.getElementById('FullNameError');
    const emailError = document.getElementById('EmailError');
    const passwordError = document.getElementById('PasswordError');

    function validateForm() {
        let isValid = true;

        // Full Name Validation
        const fullName = fullNameInput.value;
        if (/[^a-zA-Z\s]/.test(fullName)) {
            fullNameError.textContent='';
            $('.FullNameError').text('');
            fullNameError.textContent = 'Name should contain only alphabets and spaces.';
            isValid = false;
        } else if (fullName.length > 10) {
            fullNameError.textContent='';
            $('.FullNameError').text('');
            fullNameError.textContent = 'Name should not exceed 10 characters.';
            isValid = false;
        } else {
            $('.FullNameError').text('');
            fullNameError.textContent = '';
        }

        // Email Validation
        const email = emailInput.value;
        const emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
        if (!emailPattern.test(email)) {
            emailError.textContent='';
            $('.EmailError').text('');
            emailError.textContent = 'Please enter a valid email address.';
            isValid = false;
        } else if (email.length > 50) {
            emailError.textContent='';
            $('.EmailError').text('');
            emailError.textContent = 'Email should not exceed 50 characters.';
            isValid = false;
        } else {
            $('.EmailError').text('');
            emailError.textContent = '';
        }

        // Password Validation
        const password = passwordInput.value;
        if (password.length < 8) {
            passwordError.textContent='';
            $('.PasswordError').text('');
            passwordError.textContent = 'Password must be at least 8 characters long.';
            isValid = false;
        } else if (password.length > 20) {
            passwordError.textContent='';
            $('.PasswordError').text('');
            passwordError.textContent = 'Password should not exceed 20 characters.';
            isValid = false;
        } else {
            $('.PasswordError').text('');
            passwordError.textContent = '';
        }

        // Disable or enable submit button based on validation
        submitButton.disabled = !isValid;
    }

    fullNameInput.addEventListener('input', validateForm);
    emailInput.addEventListener('input', validateForm);
    passwordInput.addEventListener('input', validateForm);

    document.getElementById('AddAdminForm').addEventListener('submit', (event) => {
        if (!submitButton.disabled) {
            $('#popupAddAdminUrl').hide();
            $('#uiBlocker').show();
            return true;
        }
        event.preventDefault();
        alert('Please fix the errors in the form.');
    });
</script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('updateAdminForm');
    const fullNameInput = document.getElementById('editFullNameInput');
    const emailInput = document.getElementById('editEmailInput');
    const passwordInput = document.getElementById('editPasswordInput');
    const updateButton = document.getElementById('updateAdminBtn');

    const fullNameError = document.getElementById('editFullNameInputError');
    const emailError = document.getElementById('editEmailInputError');
    const passwordError = document.getElementById('editPasswordInputError');

    const validateForm = () => {
        let isValid = true;

        // Validate Full Name
        if (fullNameInput.value.trim() === '') {
            fullNameError.textContent = 'Full Name is required.';
            isValid = false;
        } else {
            fullNameError.textContent = '';
        }

        // Validate Email
        if (emailInput.value.trim() === '') {
            emailError.textContent = 'Email is required.';
            isValid = false;
        } else if (!emailInput.value.includes('@')) {
            emailError.textContent = 'Email must be valid.';
            isValid = false;
        } else {
            emailError.textContent = '';
        }

        // Validate Password
        if (passwordInput.value.trim() !== '' && passwordInput.value.length < 8) {
            passwordError.textContent = 'Password must be at least 8 characters long.';
            isValid = false;
        } else {
            passwordError.textContent = '';
        }

        // Enable or disable the button based on validity
        updateButton.disabled = !isValid;

        return isValid;
    };

    // Attach input event listeners for real-time validation
    fullNameInput.addEventListener('input', validateForm);
    emailInput.addEventListener('input', validateForm);
    passwordInput.addEventListener('input', validateForm);

    // Attach submit event listener to the form
    form.addEventListener('submit', function(event) {
        if (!validateForm()) {
            event.preventDefault();
        }
    });

    // Initial validation to set the button state on page load
   // validateForm();
});


</script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
    const formatDate = (dateString) => {
        const months = [
            "Jan", "Feb", "Mar", "Apr", "May", "Jun",
            "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"
        ];

        const date = new Date(dateString);
        const day = date.getDate().toString().padStart(2, '0');
        const month = months[date.getMonth()];
        const year = date.getFullYear();

        return `${day} ${month} ${year}`;
    };

    // Select all table cells with the class 'grid-p-searchby'
    const dateCells = document.querySelectorAll('.date-formate');

    // Loop through each cell and format the date
    dateCells.forEach(cell => {
        const rawDate = cell.getAttribute('data-date');
        const formattedDate = formatDate(rawDate);
        cell.textContent = formattedDate;
    });
});
</script>
@endpush