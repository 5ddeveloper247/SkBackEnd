@extends('Backend.includes.common-template')
@push('styles')

<style>
    .validation-failed {
        border: 1px solid red;
    }

    .error-message {
        color: red;
    }
</style>
@endpush

@section('content')
<!-- Display Success Message -->

<!-- Display Error Message -->
<section id="deliveries">
    <div class="contain-fluid">
        <ul class="crumbs">
            <li><a href="{{ url('admin/testimonials/view')}}">Dashboard</a></li>
            <li>Testimonials</li>
        </ul>








        {{--___________________________________ add property resonse message___________________________________ --}}
        <section class="popup lg" id="popupAddTestimonial" data-popup="search" style="display: none;">
            <div class="table_dv">
                <div class="table_cell">
                    <div class="contain">
                        <div class="_inner">
                            <button class="x_btn" id="closeCustomModalButton"></button>
                            <div class="modal-body">

                                <form method="POST" id="add_testimonial_form"
                                    action="{{ route('admin.testimonial.update') }}">
                                    @csrf
                                    <fieldset>
                                        <div class="blk">
                                            <h5 class="color">Add Testimonial</h5>
                                            <div class="form_row row">
                                                <div class="col-xs-6">
                                                    <div class="form_blk">
                                                        <h6>Name<sup>*</sup></h6>
                                                        <input type="text" name="testimonial_name" id="testimonial_name"
                                                            class="text_box" maxlength="15">
                                                        <small class="error-message"
                                                            id="testimonial_name_error"></small>
                                                    </div>
                                                </div>

                                                <div class="col-xs-6">
                                                    <div class="form_blk">
                                                        <h6>Title<sup>*</sup></h6>
                                                        <input type="text" name="testimonial_title"
                                                            id="testimonial_title" class="text_box" placeholder=""
                                                            maxlength="15">
                                                        <small class="error-message"
                                                            id="testimonial_title_error"></small>
                                                    </div>
                                                </div>

                                                <div class="col-xs-12">
                                                    <div class="form_blk">
                                                        <h6>Description<sup>*</sup></h6>
                                                        <textarea name="testimonial_description"
                                                            id="testimonial_description" class="text_box"
                                                            maxlength="300"
                                                            placeholder="Description should not exceed more than 300 words"></textarea>
                                                        <small class="error-message"
                                                            id="testimonial_description_error"></small>
                                                    </div>
                                                </div>

                                                <div class="col-xs-12">
                                                    <div class="form_blk">
                                                        <h6>Picture<sup></sup></h6>
                                                        <input type="file" name="pic" id="pic" class="text_box"
                                                            placeholder="">
                                                        <small class="error-message" id="pic_error"></small>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="modal-footer">
                                                <button type="button" id="testimonial_add_btn"
                                                    class="btn btn-primary">Add</button>
                                            </div>
                                        </div>
                                    </fieldset>
                                </form>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- edit testimonial popup --}}
        <div class="popup lg" data-popup="edit-data-popup" id="edit-data-popup">
            <div class="table_dv">
                <div class="table_cell">
                    <div class="contain">
                        <div class="_inner editor_blk">
                            <button type="button" class="x_btn" id="close_update_modal_default_btn"></button>
                            <div id="Inspection" class="tab-pane fade active in">

                                <form method="POST" id="edit_testimonial_form"
                                    action="{{ route('admin.testimonial.update') }}">
                                    @csrf
                                    <fieldset>
                                        <div class="blk">
                                            <h5 class="color">Edit Testimonial</h5>
                                            <div class="form_row row">
                                                <input type="hidden" name="edit_id" id="edit_id">

                                                <div class="col-xs-6">
                                                    <div class="form_blk">
                                                        <h6>Name<sup>*</sup></h6>
                                                        <input type="text" name="testimonial_name_edit"
                                                            id="testimonial_name_edit" class="text_box" maxlength="15"
                                                            required>
                                                        <small class="error-message"
                                                            id="testimonial_name_edit_error"></small>
                                                    </div>
                                                </div>

                                                <div class="col-xs-6">
                                                    <div class="form_blk">
                                                        <h6>Title<sup>*</sup></h6>
                                                        <input type="text" name="testimonial_title_edit"
                                                            id="testimonial_title_edit" class="text_box" placeholder=""
                                                            maxlength="15" required>
                                                        <small class="error-message"
                                                            id="testimonial_title_edit_error"></small>
                                                    </div>
                                                </div>

                                                <div class="col-xs-12">
                                                    <div class="form_blk">
                                                        <h6>Comment<sup>*</sup></h6>
                                                        <textarea name="testimonial_description_edit"
                                                            id="testimonial_description_edit" class="text_box"
                                                            placeholder="Comment should not exceed more than 300 words"
                                                            maxlength="300" required></textarea>
                                                        <small class="error-message"
                                                            id="testimonial_description_edit_error"></small>
                                                    </div>
                                                </div>

                                                <div class="col-xs-12">
                                                    <div class="form_blk">
                                                        <h6>Profile Pic<sup></sup></h6>
                                                        <input type="file" name="pic" id="pic_edit" class="text_box"
                                                            placeholder="">
                                                        <small class="error-message" id="pic_edit_error"></small>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="btn_blk form_btn text-center">
                                                <button type="submit" class="site_btn long testimonial_update_btn"
                                                    id="testimonial_update_btn">Send</button>
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
                            <button type="button" class="hidden x_btn close_delete_modal_default_btn"></button>
                            <h3 class="text-center">Are You Sure to Delete?</h3>
                            <!-- <p>Are You Sure to Delete?</p> -->
                            <div class="text-center row">
                                <button type="button" class="btn bg-transparent rounded-pill"
                                    id="testimonial_delete_confirmed_btn" data-id=""><img
                                        src="{{asset('assets\images\check_1828640.png')}}" style="width:30px"></button>
                                <button type="button" class="btn bg-transparent rounded-pill"
                                    id="testimonial_close_delete_modal_btn"><img
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
                        <div class="card_blk" id="showAddTestimonialPopUpBtn">
                            <div class="icon"><img src="{{ asset('/images/icon-plus.svg') }}" alt="">
                            </div>
                            <strong>Add Testimonial</strong>
                            <a type="button"></a>
                        </div>

                        <div class="form_blk">
                            <input type="text" name="" id="" class="text_box testimonial_search_box"
                                placeholder="Search here">
                            <button type="button"><img src="{{ asset('/images/icon-search.svg')}}" alt=""></button>
                        </div>
                    </div>
                    <div class="blk">
                        <div class="tbl_blk">
                            <table id="testimonials_table" class="table table-responsive">
                                <thead>
                                    <tr>
                                        <th width="10">#</th>
                                        <th>name</th>
                                        <th>title</th>
                                        <th>Description</th>
                                        <th>Created Date</th>
                                    </tr>
                                </thead>
                                <tbody id="testimonials_table_body">


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
    $('.testimonial_search_box').on("keyup", function (e) {
  
  var tr = $('.testimonial_data_row');
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
    function loadTestimonialList() {
        $('#uiBlocker').show();
        let url = '/admin/testimonials/view/ajax';
        let type = 'GET';
        SendAjaxRequestToServer(type, url, '', '', loadTestimonialsResponse, '', '');
    }

    function loadTestimonialsResponse(response) {
       
        var testimonialsListingTable = $('#testimonials_table_body');
        testimonialsListingTable.empty();
      
        var testimonials = response.data;
        $.each(testimonials, function (index, testimonial) {
        var testimonialRow =`<tr class="testimonial_data_row"> 
                                    <td class="nowrap grid-p-searchby">${index + 1}</td>
                                    <td class="grid-p-searchby">${testimonial.name}</td>
                                    <td class="grid-p-searchby">${testimonial.title}</td>
                                    <td class="grid-p-searchby">${testimonial.description}</td>
                                    <td class="nowrap grid-p-searchby">${formatDate(testimonial.created_at)}</td>
                                    <td class="nowrap grid-p-searchby" data-center>
                                        <div class="act_btn">
                                            <button type="button" class="edit pop_btn testimonial_edit_btn" title="Edit" data-popup="edit-data-popup" data-id="${testimonial.id}" data-testimonial='${JSON.stringify(testimonial)}'></button>
                                            <button type="button" class="del pop_btn testimonial_delete_btn" title="Delete" data-popup="delete-data-popup" data-id="${testimonial.id}" data-testimonial='${JSON.stringify(testimonial)}'></button>
                                        </div>
                                    </td>
                                </tr>`;
            testimonialsListingTable.append(testimonialRow);
        });
    }




    $(document).on('click','.testimonial_edit_btn', function () {
        var id = $(this).attr('data-id');
        var testimonial = JSON.parse($(this).attr('data-testimonial'));
        $('#edit_id').val(testimonial.id);
        $('#testimonial_name_edit').val(testimonial.name);
        $('#testimonial_title_edit').val(testimonial.title);
        $('#testimonial_description_edit').val(testimonial.description);
        // Add your edit logic here, e.g., populate a form with testimonial details for editing
    });

    function getpropertydataResponse(response) {
      
        if (response.propertyInfo) {
            var property = response.propertyInfo;
            $('#inquiry_id_edit').val(property.id);
            $('#inquiry_name_edit').val(property.pInfo_fName);
            $('#edit-data-popup').show();
        }
    }  

    // _________________________________Delete functions_______________________________
    $(document).ready(function () {
    // Delete Testimonial
    $(document).on('click', '.testimonial_delete_btn', function () {
        var del_id = $(this).attr('data-id');
        
        // Set data-id for confirmation modal button
        $('#testimonial_delete_confirmed_btn').attr('data-id', del_id);
    });

    // Handle Delete Confirmation
   
});


    $('#testimonial_close_delete_modal_btn').click(function () {
        $('.close_delete_modal_default_btn').click();
        $('#testimonial_delete_confirmed_btn').attr('data-id', '');
    });

    $('#testimonial_delete_confirmed_btn').click(function () { 
        var del_id = $(this).attr('data-id');
        let url = '/admin/testimonial/delete';
        let type = 'POST';
        let data = new FormData();
        data.append('del_id', del_id);
        SendAjaxRequestToServer(type, url, data, '', deleteTestimonialResponse, '', '');
    });

    function deleteTestimonialResponse(response) {
        $('#testimonial_close_delete_modal_btn').click(); // Close the modal in all cases

        if (response.status == 200) {
            toastr.success(response.message, 'Success', { timeOut: 3000 });
            $('#delete_modal').hide();
            window.location.reload(); // Reload the page
        } else {
            toastr.error('Failed to delete testimonial.', 'Error', { timeOut: 3000 });
            $('#delete_modal').hide();
            // toastr.error(response.message, '', { timeOut: 3000 });
        }
    }

    $(document).ready(function () {
        loadTestimonialList();
    });
</script>

{{-- _____________________________-loading testimonials ended____________________ --}}



<script>
    $(document).ready(function() {
    $('#showAddTestimonialPopUpBtn').on('click', function() {
        $('#popupAddTestimonial').show();
    });
});  
  
</script>

<script>
    $(document).ready(function () {
    // Add Testimonial
    $('#testimonial_add_btn').on('click', function (e) {
        e.preventDefault();
        var formData = new FormData($('#add_testimonial_form')[0]);
        $('#popupAddTestimonial').hide();
         $('#uiBlocker').show();
        $.ajax({
            url: '{{ route('admin.testimonial.add') }}', // Add your route for adding testimonial
            type: 'POST',
            data: formData,
            contentType: false,
            processData: false,
            success: function (response) {
                if (response.status === 200) {
                    $('#uiBlocker').hide();
                    toastr.success(response.message, 'Success', { timeOut: 2000 });
                    // Reset the form
                    $('#add_testimonial_form')[0].reset();
                    window.location.reload();
                    // Close the modal
                    $('#popupAddTestimonial').hide();
                } else {
                    $('#uiBlocker').hide();
                    toastr.error(response.message, 'Error', { timeOut: 2000 });
                }
            },
            error: function (xhr) {
                $('#uiBlocker').hide();
                var errors = xhr.responseJSON.errors;
                $.each(errors, function (key, value) {
                    toastr.error(value[0], 'Error', { timeOut: 2000 });
                });
            }
        });
    });

    // Edit Testimonial
    $('#testimonial_update_btn').on('click', function (e) {
        e.preventDefault();
        var formData = new FormData($('#edit_testimonial_form')[0]);

        $.ajax({
            url: '{{ route('admin.testimonial.update') }}', // Add your route for updating testimonial
            type: 'POST',
            data: formData,
            contentType: false,
            processData: false,
            success: function (response) {
                if (response.status === 200) {
                    toastr.success(response.message, 'Success', { timeOut: 2000 });
                    // Reset the form
                    window.location.reload();
                    $('#edit_testimonial_form')[0].reset();
                    // Close the modal
                    $('#edit-data-popup').hide();
                } else {
                    toastr.error(response.message, 'Error', { timeOut: 2000 });
                }
            },
            error: function (xhr) {
                var errors = xhr.responseJSON.errors;
                $.each(errors, function (key, value) {
                    toastr.error(value[0], 'Error', { timeOut: 2000 });
                });
            }
        });
    });

    // Close modal on button click
    $('#closeCustomModalButton, #close_update_modal_default_btn').on('click', function () {
        $(this).closest('.popup').hide();
    });
});

</script>


{{-- table searching is here --}}

<script>
    $('.testimonial_search_box').on("keyup", function (e) {
  
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


<script>
    document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('add_testimonial_form');
    const nameInput = document.getElementById('testimonial_name');
    const titleInput = document.getElementById('testimonial_title');
    const descriptionInput = document.getElementById('testimonial_description');
    const picInput = document.getElementById('pic');
    const addButton = document.getElementById('testimonial_add_btn');

    const nameError = document.getElementById('testimonial_name_error');
    const titleError = document.getElementById('testimonial_title_error');
    const descriptionError = document.getElementById('testimonial_description_error');
    const picError = document.getElementById('pic_error');

    const validateForm = () => {
        let isValid = true;

        if (nameInput.value.trim() === '') {
            nameError.textContent = 'Name is required.';
            isValid = false;
        } else {
            nameError.textContent = '';
        }

        if (titleInput.value.trim() === '') {
            titleError.textContent = 'Title is required.';
            isValid = false;
        } else {
            titleError.textContent = '';
        }

        if (descriptionInput.value.trim() === '') {
            descriptionError.textContent = 'Description is required.';
            isValid = false;
        } else if (descriptionInput.value.length > 300) {
            descriptionError.textContent = 'Description should not exceed 300 words.';
            isValid = false;
        } else {
            descriptionError.textContent = '';
        }

        // Validate picture input (optional)
        // if (picInput.files.length === 0) {
        //     picError.textContent = 'Picture is required.';
        //     isValid = false;
        // } else {
        //     picError.textContent = '';
        // }

        // Disable the button if the form is invalid
        addButton.disabled = !isValid;

        return isValid;
    };

    // Attach input event listeners for real-time validation
    nameInput.addEventListener('input', validateForm);
    titleInput.addEventListener('input', validateForm);
    descriptionInput.addEventListener('input', validateForm);
    picInput.addEventListener('change', validateForm);

    // Attach click event listener to the Add button
    addButton.addEventListener('click', function(event) {
        if (validateForm()) {
            // form.submit();
        } else {
            event.preventDefault();
        }
    });
    validateForm();
});

</script>


{{-- edit form validation --}}
<script>
    document.addEventListener('DOMContentLoaded', function() {
    const formEdit = document.getElementById('edit_testimonial_form');
    const nameEditInput = document.getElementById('testimonial_name_edit');
    const titleEditInput = document.getElementById('testimonial_title_edit');
    const descriptionEditInput = document.getElementById('testimonial_description_edit');
    const picEditInput = document.getElementById('pic_edit');
    const updateButton = document.getElementById('testimonial_update_btn');

    const nameEditError = document.getElementById('testimonial_name_edit_error');
    const titleEditError = document.getElementById('testimonial_title_edit_error');
    const descriptionEditError = document.getElementById('testimonial_description_edit_error');
    const picEditError = document.getElementById('pic_edit_error');

    const validateEditForm = () => {
        let isValid = true;

        if (nameEditInput.value.trim() === '') {
            nameEditError.textContent = 'Name is required.';
            isValid = false;
        } else {
            nameEditError.textContent = '';
        }

        if (titleEditInput.value.trim() === '') {
            titleEditError.textContent = 'Title is required.';
            isValid = false;
        } else {
            titleEditError.textContent = '';
        }

        if (descriptionEditInput.value.trim() === '') {
            descriptionEditError.textContent = 'Description is required.';
            isValid = false;
        } else if (descriptionEditInput.value.length > 300) {
            descriptionEditError.textContent = 'Description should not exceed 300 words.';
            isValid = false;
        } else {
            descriptionEditError.textContent = '';
        }

        // Validate picture input (optional)
        // if (picEditInput.files.length === 0) {
        //     picEditError.textContent = 'Picture is required.';
        //     isValid = false;
        // } else {
        //     picEditError.textContent = '';
        // }

        // Disable the button if the form is invalid
        updateButton.disabled = !isValid;

        return isValid;
    };

    // Attach input event listeners for real-time validation
    nameEditInput.addEventListener('input', validateEditForm);
    titleEditInput.addEventListener('input', validateEditForm);
    descriptionEditInput.addEventListener('input', validateEditForm);
    picEditInput.addEventListener('change', validateEditForm);

    // Attach click event listener to the Update button
    updateButton.addEventListener('click', function(event) {
        if (validateEditForm()) {
            // formEdit.submit();
        } else {
            event.preventDefault();
        }
    });
}); 

</script>








@endpush